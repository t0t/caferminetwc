(function () {
    /* SVC */
    var reservationSvc = function ($http) {
        var self = this;

        self.data = [];
        self.rooms = [];

        self.toParams = function(obj) {
            var query = '', name, value, fullSubName, subName, subValue, innerObj, i;

            for(name in obj) {
                value = obj[name];

                if(value instanceof Array) {
                    for(i=0; i<value.length; ++i) {
                        subValue = value[i];
                        fullSubName = name + '[' + i + ']';
                        innerObj = {};
                        innerObj[fullSubName] = subValue;
                        query += param(innerObj) + '&';
                    }
                }
                else if(value instanceof Object) {
                    for(subName in value) {
                        subValue = value[subName];
                        fullSubName = name + '[' + subName + ']';
                        innerObj = {};
                        innerObj[fullSubName] = subValue;
                        query += param(innerObj) + '&';
                    }
                }
                else if(value !== undefined && value !== null)
                    query += encodeURIComponent(name) + '=' + encodeURIComponent(value) + '&';
            }

            return query.length ? query.substr(0, query.length - 1) : query;
        };

        self.parseRooms = function () {
            self.rooms.length = 0;

            for (var i = 0; i < self.data.acf.panels[0].panel.length; i++) {
                var room = {};

                room.id = self.data.ID;

                room.title = self.data.acf.panels[0].panel[i].panel_title;
                room.content = self.data.acf.panels[0].panel[i].panel_content;
                room.img = self.data.acf.panels[0].panel[i].img;
                room.banos = self.data.acf.panels[0].panel[i].banos;
                room.camas = self.data.acf.panels[0].panel[i].camas;

                room.priceo = self.data.acf.panels[0].panel[i].precio == undefined
                    ? parseInt(self.data.acf.panels[0].panel[i].Precio)
                    : parseInt(self.data.acf.panels[0].panel[i].precio);
                room.unavalaible = [];
                room.reservation = {
                    checkinDate: new Date(),
                    checkoutDate: new Date()
                };

                room.disableBooking = self.data.acf.panels[0].panel[i]["disable-booking"] == undefined ? false : self.data.acf.panels[0].panel[i]["disable-booking"];
                room.disableCheckDisponible = self.data.acf.panels[0].panel[i]["disable-check-disponible"] == undefined ? false : self.data.acf.panels[0].panel[i]["disable-check-disponible"];
                room.disableDatepicker = self.data.acf.panels[0].panel[i]["disable-datepicker"] == undefined ? false : self.data.acf.panels[0].panel[i]["disable-datepicker"];
                room.disablePaypal = self.data.acf.panels[0].panel[i]["disable-paypal"] == undefined ? false : self.data.acf.panels[0].panel[i]["disable-paypal"];
                room.disableCheckinoutDates = self.data.acf.panels[0].panel[i]["disable-checkinout-dates"] == undefined ? false : self.data.acf.panels[0].panel[i]["disable-checkinout-dates"];

                room.calendar1Opened = false;
                room.calendar2Opened = false;

                var datesArray = self.data.acf.panels[0].panel[i].unavalaible_dates.split(',');

                for (var j = 0; j < datesArray.length; j++) {
                    if (datesArray[j] == null || datesArray[j] === '') continue;

                    var dates = datesArray[j].split('-');

                    room.unavalaible.push({
                        from: moment(dates[0], 'DD/MM/YY'),
                        to: moment(dates[1], 'DD/MM/YY').add(1, 'd')
                    });
                };

                self.calculatePrice(room);

                self.rooms.push(room);
            };
        };

        self.disabledDate = function (room, date, mode) {
            if (mode !== 'day' || room == undefined) return '';

            date = moment(date);

            for (var i = 0; i < room.unavalaible.length; i++) {
                if (room.unavalaible[i].from <= date && room.unavalaible[i].to >= date) return 'disabled';
            };

            return '';
        };

        self.validation = function (room, subjectId) {
            /* EMAIL */
            var email = /^([A-Za-z\.\-\+\_]){1,}@[A-Za-z\.\-\+\_]{1,}\.[A-Za-z\.\-\+\_]{1,}$/g;

            if (room.reservation.email == undefined || !email.test(room.reservation.email)) {
                alert('Invalid email');
                return false;
            }

            /* PHONE */
            var phone = /^[0-9\-\+]{1,}$/g;

            if (room.reservation.phone == undefined || !phone.test(room.reservation.phone)) {
                alert('Invalid phone');
                return false;
            }

            /* NAME */
            var name = /^[a-zA-Z\- ]{3,}$/g;

            if (room.reservation.name == undefined || !name.test(room.reservation.name)) {
                alert('Invalid name');
                return false;
            }

            /* DATES */
            if (room.reservation.checkinDate > room.reservation.checkoutDate) {
                alert('Invalid dates');
                return false;
            }

            if (subjectId === 2 || subjectId === 1) {
                /* RESERVED */
                var from = moment(room.reservation.checkinDate);
                var to = moment(room.reservation.checkoutDate);

                for (var i = 0; i < room.unavalaible.length; i++) {
                    if (from >= room.unavalaible[i].from && from < room.unavalaible[i].to) {
                        alert('Invalid checkin date (not available)');
                        return false;
                    }

                    if (to >= room.unavalaible[i].from && to < room.unavalaible[i].to) {
                        alert('Invalid checkout date (not available)');
                        return false;
                    }
                }
            }

            return true;
        };

        self.reserve = function (room, subject, subjectId) {
            if (!self.validation(room, subjectId)) return;

            if (subjectId === 2) {
                self.checkoutPaypal(room);
            } else {
                var params = {
                    title: room.title,
                    checkinDate: moment(room.reservation.checkinDate).format('DD/MM/YYYY'),
                    checkoutDate: moment(room.reservation.checkoutDate).format('DD/MM/YYYY'),
                    email: room.reservation.email,
                    phone: room.reservation.phone,
                    price: room.reservation.price,
                    name: room.reservation.name,
                    subject: subject
                };

                $http({
                    method: 'POST',
                    url: '/contact-form.php',
                    data: self.toParams(params),
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
                }).success(function (data) {
                    console.log(data);

                    alert(data.message);
                });
            }


        };

        self.calculatePrice = function(room) {
            if (room == undefined) return;

            var days = (room.reservation.checkoutDate - room.reservation.checkinDate) / 86400000 + 1;
            room.reservation.price = days * room.priceo;
        };

        self.checkoutPaypal = function(room) {
            // global data
            var data = {
                cmd: "_cart",
                business: 'hola-facilitator@sergiofores.com',
                upload: "1",
                rm: "2",
                charset: "utf-8"
            };

            // item data
            data['item_number_1'] = room.id;
            data['item_name_1'] = self.data.title + ', ' + room.title + ', ' + moment(room.reservation.checkinDate).format('DD.MM.YYYY') + '-' + moment(room.reservation.checkoutDate).format('DD.MM.YYYY');
            data['quantity_1'] = room.reservation.price / room.priceo;
            data['amount_1'] = room.priceo;

            // build form
            var form = $('<form/></form>');
            form.attr("action", "https://www.paypal.com/cgi-bin/webscr");
            form.attr("method", "POST");
            form.attr("style", "display:none;");
            self.addFormFields(form, data);
            $("body").append(form);

            // submit form
            form.submit();
            form.remove();
        };

        self.addFormFields = function(form, data) {
            if (data != null) {
                $.each(data, function(name, value) {
                    if (value != null) {
                        var input = $("<input></input>").attr("type", "hidden").attr("name", name).val(value);
                        form.append(input);
                    }
                });
            }
        };

        return self;
    }

    /* CTRL */
    var reservationCtrl = function ($scope, reservationSvc) {
        reservationSvc.getData();

        $scope.rooms = reservationSvc.rooms;
        $scope.disabledDate = reservationSvc.disabledDate;

        $scope.reserve = reservationSvc.reserve;
        $scope.calculatePrice = reservationSvc.calculatePrice;

        /* DATEPICKERS */
        $scope.now = new Date();

        $scope.open = function (room, n, $event) {
            $event.preventDefault();
            $event.stopPropagation();

            if (n === 1) {
                room.calendar1Opened = true;
            } else {
                room.calendar2Opened = true;
            }
        };
    };

    /* APP INIT */
    var app = angular.module('roomsModule', ['ui.bootstrap']);

    app.factory('ReservationSvc', ['$http', reservationSvc]);
    app.controller('ReservationCtrl', ['$scope', 'ReservationSvc', reservationCtrl]);
})();
