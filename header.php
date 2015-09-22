<!doctype html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>

<?php wp_head(); ?>
</head>

<?php //body_class(); ?>
<body>

  <header class="site-header" role="banner">

      <div class="brand">
  			<a class="brand__logo" href="<?php echo site_url();?>" rel="home">
  				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 250 300" version="1.1">
  				<title>logo</title><desc>Logo de Caferminet</desc>
  				<path class="hoja1" d="M67.8 102 C68.4 97.8 69.3 93.5 70.6 89.3 C73.1 80.9 77.1 72.9 82.6 65.9 C85.3 62.4 88.4 59.2 91.7 56.3 C95.2 53.5 98.9 51 102.8 48.9 C106.7 46.8 110.9 45.1 115.1 43.9 C117.2 43.3 119.4 42.7 121.5 42.3 C123.7 41.8 125.8 41.4 128.1 41.1 C130.2 40.8 132.5 40.6 134.7 40.5 C137 40.4 139.1 40.5 141.4 40.6 C143.7 40.8 145.8 41.1 148.1 41.6 C150.2 42 152.5 42.6 154.5 43.3 C158.8 44.8 162.8 46.7 166.5 49.2 C170.2 51.6 173.7 54.4 176.8 57.5 C179.9 60.6 182.6 64.1 185 67.7 C187.4 71.3 189.5 75.1 191.4 79 C193.2 83 194.9 87 196.1 91.2 C196.7 93.2 197.3 95.4 197.6 97.5 C198.1 99.7 198.3 101 198.4 103.3 C198.4 103.3 200.4 103.4 201.7 103.6 C203 103.8 204.3 104.1 205.7 104.3 C208.4 104.9 211 105.6 213.6 106.6 C218.7 108.4 223.6 110.9 228.1 114.2 C232.5 117.4 236.5 121.6 239.4 126.3 C242.4 130.9 244.6 136.2 245.8 141.7 C246.4 144.4 246.8 147 247.1 149.9 C247.3 152.6 247.4 155.5 247.3 158.2 C247.1 163.9 245.8 169.5 243.5 174.7 C241.2 180 238.1 184.6 234.6 188.9 C231 193.2 226.9 197 222.8 200.5 C218.6 204 214.2 207.3 209.7 210.3 C207.4 211.8 205.1 213.3 202.9 214.7 C200.6 216.1 198.2 217.6 196 218.9 C193.6 220.2 191.3 221.5 188.9 222.8 C186.6 224.1 184.3 225.4 182 226.7 C179.8 228.1 177.5 229.5 175.4 230.9 C173.1 232.3 170.9 233.8 168.8 235.3 C166.7 236.9 164.6 238.4 162.6 240.1 C160.6 241.8 158.7 243.4 156.8 245.2 C154.9 247 153.1 248.9 151.4 250.8 C149.7 252.8 148.2 254.9 146.8 257 C145.3 259.2 144.1 261.5 143.1 263.9 C142 266.2 141.3 268.6 140.7 271.2 C140.1 273.8 139.9 276.4 139.9 279 C139.9 281.6 140.1 284.3 140.5 286.9 L139.9 287 C139.1 284.4 138.5 281.7 138.2 279 C138 276.3 138 273.5 138.3 270.8 C138.7 268 139.3 265.3 140.2 262.7 C141.2 260 142.2 257.5 143.6 255 C144.9 252.6 146.4 250.2 148.1 248.1 C149.7 245.8 151.5 243.8 153.4 241.8 C155.3 239.7 157.3 237.8 159.3 236 C161.3 234.3 163.4 232.5 165.6 230.8 C167.7 229.1 170 227.5 172.1 225.9 C174.4 224.4 176.7 222.9 178.9 221.5 C181.2 220.1 183.6 218.7 186 217.3 C188.2 216 190.6 214.7 192.9 213.4 C201.9 208 210.9 202.4 219.1 195.8 C223.1 192.6 226.9 189 230.3 185.2 C233.6 181.4 236.6 177.1 238.6 172.6 C240.8 168 241.9 163 242.3 158 C242.5 155.5 242.5 152.9 242.3 150.4 C242.2 147.9 241.8 145.2 241.4 142.7 C240.4 137.7 238.7 132.8 236.2 128.3 C233.7 123.9 230.3 119.9 226.2 116.6 C222.2 113.4 217.5 110.8 212.8 108.8 C210.4 107.9 207.8 107.1 205.3 106.5 C203.9 106.1 202.8 105.9 201.4 105.6 C200.1 105.4 196.8 105 196.8 105 L196.8 104.2 C196.8 102.2 196.4 100 196.1 98 C195.7 96 195.1 93.8 194.5 91.8 C193.3 87.7 191.8 83.8 189.9 80 C188 76.2 185.8 72.6 183.3 69.1 C180.8 65.7 178 62.6 174.9 59.7 C171.8 56.8 168.4 54.4 164.8 52.4 C161.2 50.4 157.3 48.8 153.3 47.6 C151.3 47 149.4 46.7 147.4 46.3 C145.3 46 143.3 45.8 141.3 45.7 C139.3 45.6 137.2 45.6 135.1 45.7 C133.1 45.8 130.9 46 128.9 46.3 C126.9 46.6 124.8 46.9 122.8 47.4 C120.8 47.9 118.8 48.4 116.7 48.9 C112.8 50.1 108.9 51.6 105.2 53.5 C97.8 57.2 91.3 62.4 85.9 68.8 C80.5 75.1 76.4 82.5 73.4 90.5 C71.8 94.4 70.6 98.5 69.7 102.6 C69.2 104.7 68.7 106.8 68.4 109 C68 111.1 67.8 113.1 67.5 115.3 L67 115.1 C66.8 110.8 67.2 106.3 67.8 102 Z"></path>
  				<path class="hoja2" d="M104.7 73.8 C107 74.6 109.5 75 111.7 75.1 C114.2 75.2 116.6 75 119 74.4 C119.6 74.2 120.2 74.1 120.8 73.9 C121.4 73.8 122 73.5 122.5 73.3 C123.5 72.9 124.6 72.5 125.7 71.9 C126.8 71.3 127.7 70.7 128.8 70 C129.9 69.2 130.9 68.5 132 67.8 C132.6 67.4 133.2 67.1 133.8 66.7 C134.4 66.4 135 66 135.7 65.8 C137 65.2 138.3 64.7 139.6 64.3 C142.2 63.5 145 63.3 147.7 63 L148.2 63 L148.7 63 L149.7 63 C150.5 63 151.2 63 151.8 63.1 C153.1 63.3 154.5 63.4 155.8 63.7 C158.4 64.2 161.1 65.2 163.4 66 L161.9 67.7 L161.7 67.3 C161.5 67.2 161.4 67.1 161.4 66.8 C161.2 66.6 160.9 66.3 160.8 66 C160.3 65.5 159.9 64.9 159.4 64.5 C158.4 63.5 157.3 62.7 156.2 61.8 C155 61.1 153.9 60.4 152.6 59.8 C151.4 59.2 150.1 58.7 148.9 58.3 C146.4 57.4 143.7 56.9 140.9 56.8 C138.2 56.7 135.5 56.8 132.7 57.2 C130 57.5 127.3 58.1 124.7 59 C122.1 59.8 119.6 61 117.2 62.4 C114.8 63.9 112.6 65.7 110.4 67.6 C108.3 69.5 106.4 71.5 104.7 73.8 L104.7 73.8 ZM105.7 69.6 C106.4 68.3 107.1 66.8 108.1 65.7 C109.8 63.1 112 60.8 114.4 58.7 C116.7 56.7 119.5 55 122.5 53.7 C123.9 53 125.4 52.5 127 52.1 C128.5 51.6 130.1 51.2 131.6 51 C134.9 50.5 138 50.5 141.2 50.9 C144.4 51.2 147.5 52.1 150.5 53.4 C152 54 153.4 54.8 154.7 55.6 C156.1 56.6 157.4 57.5 158.4 58.7 C159.6 59.9 160.6 61.1 161.5 62.4 C162 63 162.4 63.7 162.8 64.5 C163.1 64.8 165.1 69.8 165.1 69.8 L162.4 68.4 C161.2 67.8 160.1 67.2 158.9 66.7 C157.7 66.3 156.5 65.9 155.3 65.7 C154.2 65.5 152.8 65.4 151.7 65.7 C151.1 65.8 148 66.5 148 66.5 C145.5 67.1 143.2 67.9 140.9 69 C138.7 70 136.6 71.1 134.6 72.5 L131.4 74.6 C130.2 75.3 129 76 127.7 76.6 C126.4 77.2 125.1 77.7 123.7 78.1 C122.9 78.2 122.2 78.4 121.6 78.5 C120.9 78.7 120.2 78.8 119.5 78.8 C116.7 79 113.9 78.8 111.1 78.1 C109.8 77.7 108.5 77.2 107.3 76.6 C106.1 76 103.9 74.2 103.9 74.2 C103.9 74.2 105.1 71 105.7 69.6 Z"></path>
  				<path class="hoja3" d="M141 166.4 C141.8 165.8 142.4 165.2 143 164.6 C143.6 164 144.1 163.4 144.7 162.7 C145.8 161.4 146.8 160 147.5 158.7 C147.8 158 148.1 157.4 148.3 156.7 C148.6 156 148.7 155.4 148.8 154.8 C148.9 154.2 148.9 153.6 148.8 152.9 C148.8 152.3 148.7 151.7 148.4 151.1 C148.3 150.5 148.1 149.9 147.8 149.3 C147.6 148.7 147.2 148.1 147 147.5 C146.3 146.3 145.6 145.2 144.6 144.3 C143.7 143.3 142.7 142.5 141.6 141.8 C140.6 141.1 139.4 140.5 138.2 140 C137 139.5 135.7 139.3 134.5 139.2 C133.9 139 133.3 139 132.7 139 C132.1 139 131.5 139.2 131 139.3 C130 139.5 129 139.9 128.2 140.5 C128.1 140.6 127.9 140.6 127.8 140.7 L127.7 140.8 C127.8 140.7 127.7 140.8 127.7 140.8 L127.7 140.8 L127.6 140.9 L127.5 141.1 L127.3 141.2 C127.2 141.3 127.1 141.4 127 141.5 C126.6 141.9 126.3 142.4 125.9 142.9 C125.6 143.3 125.3 143.9 125.1 144.5 C124.8 145.1 124.7 145.7 124.6 146.4 C124.4 147.7 124.4 149.2 124.6 150.7 C124.8 152.3 125.2 153.8 125.8 155.4 C126.2 156.1 126.4 156.9 126.9 157.8 C127.2 158.6 127.7 159.3 128.1 160.2 L127.7 160.6 C125.1 158.2 122.9 155.3 121.6 151.9 C121 150.3 120.7 148.5 120.7 146.7 C120.7 144.9 121 143 121.8 141.3 C122.5 139.6 123.5 138.1 124.8 136.9 C126.3 135.7 127.9 134.7 129.6 134.3 C131.4 133.8 133.2 133.7 135 133.8 C136.8 133.9 138.5 134.3 140.2 135 C143.6 136.2 146.6 138.3 148.9 141.2 C150.1 142.6 151.1 144.2 151.8 145.7 C152.5 147.4 153.1 149.1 153.2 151 C153.4 152.8 153.2 154.7 152.6 156.3 C152 158 151.1 159.7 149.9 161 C148.7 162.3 147.4 163.5 145.8 164.6 C144.4 165.6 142.8 166.5 141.2 167.2 L141 166.4 L141 166.4 Z"></path>
  				<path class="hoja4" d="M119.5 122.2 C119.6 119.9 119 117.8 117.8 116 C117.2 115.1 114.1 112 113.2 111.2 C112.7 110.9 108.4 108.5 107.5 108.3 C106.5 107.9 105.5 107.8 104.6 107.7 C103.6 107.5 102.8 107.7 101.9 107.8 C100.1 108.1 98.3 108.8 96.5 110 C94.7 111.1 93 112.5 91.6 114.2 C90.9 115.1 88.6 118.5 88 119.5 C87 121.5 86.3 123.5 85.7 125.7 C85.4 126.7 84.9 131 84.9 132 C84.9 134.1 85.3 136.2 86 138.2 C86.4 139.2 88.3 143.1 88.9 144.1 C89 144.3 92.4 148.7 93.3 149.7 C94.9 151.4 96.7 153 98.6 154.4 C100.5 155.9 102.7 157.1 105.1 158 C106.3 158.5 107.5 159 108.6 159.2 C109.8 159.6 111.1 159.8 112.5 159.9 L112.6 160.5 C111.3 160.6 110 160.6 108.5 160.5 C107.2 160.4 105.9 160.2 104.6 159.9 C102 159.3 99.5 158.4 97.2 157.1 C92.6 154.6 88.5 151 85.2 146.8 C83.5 144.8 82.1 142.4 81.1 140 C80.2 137.5 79.5 134.9 79.3 132.2 C79.2 129.6 79.5 126.9 80.1 124.2 C80.7 121.6 81.6 119.1 82.8 116.7 C83.4 115.5 86.5 111.1 87.3 110.2 C89.2 108.3 91.3 106.6 93.5 105.2 C95.8 103.8 98.4 102.9 101.1 102.5 C103.9 102.3 106.6 102.6 109 103.7 C111.5 104.8 113.7 106.3 115.6 108.3 C117.5 110 119.2 112.2 120.3 114.7 C120.9 115.9 121.3 117.2 121.4 118.6 C121.5 119.9 121.4 121.4 121.2 122.7 C120.8 124 120.3 125.3 119.7 126.4 C119 127.6 117.1 129.1 117.1 129.1 C117.8 128.1 119.4 123.3 119.5 122.2 Z"></path><path class="hoja5" d="M152.8 125.3 C154.2 124.7 155.3 124 156.5 123.4 C158.9 122 161.2 120.5 163.2 118.8 C164.3 117.9 165.2 117 166.1 116.1 C167 115.2 167.9 114.2 168.6 113.3 C169.3 112.3 170 111.2 170.6 110.2 C171.2 109.1 171.7 108 172.1 106.9 C172.4 106.3 172.9 101 172.9 100.4 C172.7 98.1 172.3 96 171.3 94.1 C170.4 92.1 169 90.5 167.4 88.9 C165.7 87.4 161.2 84.4 161.2 84.4 C161.2 84.4 159.3 83.3 158.8 83.2 C157.7 82.8 153.2 82 152 82 C150.8 82 149.7 82 148.6 82.1 C146.3 82.4 144.1 83 142.2 83.9 C141.3 84.4 138 87.3 137.4 88.1 C136.6 89.2 134 93.3 133.4 94.5 C132.4 96.8 131.6 99.3 131.2 101.8 C130.7 104.4 130.6 107.1 130.7 109.8 C130.8 111.1 130.9 112.5 131.2 113.9 C131.4 115.3 131.6 116.6 132 118 L131.5 118.3 C129.1 113.1 127.8 107.4 128.2 101.7 C128.3 98.8 128.9 96 129.7 93.2 C130.7 90.5 132 88 133.5 85.6 C135.1 83.2 137.2 81 139.7 79.6 C142.2 78.1 145 77.1 147.8 76.8 C150.7 76.3 153.6 76.4 156.4 76.9 C157.8 77.1 159.3 77.5 160.6 77.9 C161.9 78.4 163.3 79 164.5 79.7 C167 81.2 169.3 82.8 171.4 84.9 C173.5 86.9 175.2 89.3 176.4 91.9 C177.6 94.5 178.1 97.5 178.1 100.4 C178.1 101.8 178 103.2 177.7 104.7 C177.5 106.1 176.9 107.5 176.3 108.8 C175.1 111.5 173.3 113.9 171.4 115.9 C169.5 118 167.3 119.8 164.9 121.4 C160.1 124.5 154.6 126.5 149.1 127.7 L149 127.1 C150.3 126.5 151.7 125.9 152.8 125.3 Z"></path>
  				<path class="hoja6" d="M165 130.4 C166.8 128.2 168.9 126.2 171.5 124.6 C172.9 123.8 174.2 123 175.6 122.6 C177 122 178.6 121.6 180.1 121.3 C181.7 121 183.2 120.9 184.9 120.9 C186.4 120.9 188 121 189.5 121.4 C191.1 121.6 192.6 122.1 194.1 122.6 C195.5 123 196.9 123.8 198.3 124.5 C201.1 125.9 203.6 127.7 205.9 129.7 C208.1 131.8 210.1 134 212 136.4 C213.8 138.9 215.4 141.5 216.7 144.3 C217.9 147.2 219 150.1 219.3 153.4 C219.6 155 219.7 156.7 219.6 158.4 C219.4 160.2 219.2 161.9 218.5 163.6 C217.9 165.4 217.1 167 216 168.4 C215 169.8 213.7 171.1 212.4 172.3 C211.1 173.4 209.5 174.4 207.9 175.1 C206.2 175.8 204.5 176.3 202.9 176.5 C201.2 176.7 199.5 176.7 197.9 176.5 C196.3 176.4 194.8 176 193.2 175.6 C190.2 174.7 187.6 173.3 185.1 171.9 C182.7 170.3 180.5 168.6 178.3 166.7 C177.3 165.8 173 161.2 172.6 160.8 C172.6 160.8 181.6 166.8 186.4 169.1 C188.8 170.3 191.3 171.3 193.9 171.7 C196.6 172.3 199.2 172.4 201.8 172 C204.4 171.5 206.8 170.3 208.7 168.5 C210.6 166.7 212.2 164.5 213 162.1 C213.8 159.6 213.8 156.9 213.5 154.3 C213.1 151.7 212.3 149.2 211.2 146.7 C209.1 141.8 205.9 137.4 202 133.7 C198.1 130.1 193.5 127.1 188.3 125.9 C185.7 125.3 183.1 125.1 180.5 125.3 C177.9 125.6 175.2 126.4 172.9 127.6 C170.5 128.8 168.3 130.3 166.3 132.1 C165.4 133.1 160.8 137.7 160.8 137.7 C161.1 137 164.2 131.5 165 130.4 Z"></path><path class="hoja6" d="M164.2 174.1 C166.4 174.2 168.7 174.7 170.9 175.8 C172 176.3 173.1 177 174 177.7 C175 178.4 176 179.3 176.8 180.2 C177.6 181.2 178.3 182.1 179.1 183.2 C179.8 184.3 180.2 185.3 180.7 186.5 C180.8 186.8 181.7 189.3 181.8 189.9 C182.1 191.1 182.3 192.3 182.5 193.5 C182.9 195.8 182.9 198.5 182.4 201 C182 203.5 181.1 206 179.8 208.4 C178.5 210.6 176.7 212.8 174.4 214.6 C173.2 215.4 172 216.1 170.6 216.7 C169.3 217.3 167.6 217.7 166.2 217.8 C164.8 217.9 163.4 217.9 162.1 217.8 C160.8 217.7 159.5 217.4 158.2 217.1 C155.7 216.4 153.3 215.2 151.3 213.6 C150.2 212.9 149.3 212.1 148.4 211.2 C147.6 210.4 146.8 209.4 146.1 208.5 C143.2 204.7 141.4 200.4 140.3 196.2 C139.9 194 139.5 191.9 139.3 189.8 C139.1 188.7 139.1 187.6 139 186.5 C139 185.5 139 184.4 139.1 183.3 L139.7 183.2 C140.6 187.2 141.6 191.2 143.2 195 C144.7 198.8 146.8 202.4 149.5 205.4 C150.8 206.9 152.4 208.2 154 209.3 C155.7 210.4 157.6 211.2 159.5 211.7 C161.4 212.2 163.4 212.3 165.5 212.1 C167.4 211.8 169.3 211 170.8 209.8 C172.4 208.6 173.7 207.1 174.8 205.4 C175.8 203.7 176.5 201.8 176.9 199.8 C177.7 195.8 177.3 191.7 176.1 187.8 C175.5 185.9 174.6 184 173.5 182.5 C172.3 180.8 170.8 179.5 169 178.4 C167.4 177.3 165.5 176.5 163.4 176 C161.5 175.6 159.4 175.3 157.4 175.4 L157.6 174.8 C157.6 174.8 161.9 173.9 164.2 174.1 Z"></path><path class="hoja8" d="M127.5 175.2 C125.9 183.5 124.4 191.5 123.2 199.5 C122 207.5 121.2 215.4 120.8 223.3 C120.4 231.2 120.7 239 121.6 246.9 C122.1 250.8 122.8 254.8 123.7 258.7 C124.1 260.7 124.6 262.7 125.1 264.7 C125.3 265.6 125.6 266.7 125.9 267.7 C126.2 268.7 126.5 269.7 126.8 270.8 L126.3 271 C124.1 267.4 122.3 263.7 120.8 259.8 C119.2 255.9 118.1 251.9 117.2 247.9 C115.4 239.7 114.8 231.4 115.1 223 C115.4 214.7 116.7 206.5 118.8 198.5 C119.7 194.4 120.9 190.5 122.3 186.5 C123.8 182.6 125.2 178.8 127.1 175 L127.5 175.2 L127.5 175.2 Z"></path>
  				</svg>
  			</a>
  			<h1 class="brand__name"><?php bloginfo('name');?></h1>
  			<h2 class="brand__description"><?php bloginfo('description');?></h2>
      </div>

      <nav class="site-nav" role="navigation">
				<?php
					wp_nav_menu( array(
            'theme_location'  => 'header-menu',
            'container'       => ''
          ));
        ?>
      </nav>

  </header>
