
jQuery(document).ready(function($) {



  // Navigation
  // Select active item

  var navButton = $( '.site-nav li a' );
  // var text = $( '.site-nav li' ).text();
  var pathName = window.location.href;
  // var pathName = window.location.pathname.split('/')[1];


  for (var i = 0; i < navButton.length; i++) {
    console.log( navButton[i] );
    var hRef = navButton[i];
    if (pathName === hRef) {
      console.log('matches');
    }
  }




  console.log( pathName );



















});
