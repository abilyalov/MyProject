<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mirel Store</title>
<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
<link href="/path/to/css/bootstrap.min.css" rel="stylesheet">
<link href="/path/to/css/font-awesome.css" rel="stylesheet">
</head>
<body class="archive post-type-archive post-type-archive-product woocommerce woocommerce-page">
<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
			<div class="site-branding">
				<h1 class="site-title"><a href="shop.html" rel="home"><img src="img/logotip.png" alt="logo"></a></h1>
				<h2 class="site-description"><a href="shop.html" rel="home">Уютный продавец Счастья!</a></h2>
				<a href="https://whatsapp.com"><span class="fa fa-whatsapp" aria-hidden="true">Связаться с нами </span></br></a>
				<a href="tel:+7 777 777 77 77"><span class="fa fa-phone" aria-hidden="true">Сотовый телефон</span> </br> </a>
				<a href="/catalog?in-cart-product-id=<?=$item['id']?>">Корзина</a>
			</div>
		<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle">показать больше</button>
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		<div class="menu-menu-1-container">
			<ul id="menu-menu-1" class="menu">
				<li> <li> </li></li>
				 <li><a href="about.html">О нас</a></li>
				<li><a href="shop.html">Главная</a></li>
				 
				 
				 
				
				</li>
				<li><a href="contact.html">Контакты</a></li>
			</ul>
		</div>
		</nav>
		</header>
		<!-- #masthead -->
		<div id="content" class="site-content">
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main" role="main">
				
				
				<ul class="products">
					<?php
					$db = mysqli_connect("localhost", "Yessa", "study575");
					mysqli_select_db($db,"comm");
					$sql = "SELECT * FROM goods";
					$result = mysqli_query($db, $sql);
					$rows = mysqli_num_rows($result);
					for ($i=0;$i<$rows;$i++){
						$row = mysqli_fetch_assoc($result);  
				
					?>

					<li class="product">
					<a href="http://localhost/Commercialproject/shop-single.php?id=<?= $row["id"]?>">
					<img src=<?= $row["image"]?> alt="">
					<h3><?= $row["title"]?></h3>
					<span class="price"><span class="amount">₸<?= $row["cost"]?></span></span>
					</a><a href="#" class="button">В корзину</a>
					</li>

					<?php
					}
					?>
					
				</ul>
				
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container --> 	
	<footer id="colophon" class="site-footer">
	<div class="container">
		
		<div class="site-info">
			
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">Mirel flowers</h1>
			
			Designed by <i class="fa fa-love"></i><a href="https://t.me/Evolruoy">anuar bilyalov</br></a>
			

		</div>
	</div>
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>
<!-- #page -->
<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>
</body>
</html>