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
</head>
<body class="single single-product woocommerce woocommerce-page">
<div id="page">
	<div class="container">
		<header id="masthead" class="site-header">
			<div class="site-branding">
				<h1 class="site-title"><a href="shop.html" rel="home"><img src="img/logotip.png" alt=""></a></h1>
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
			<?php
				$db = mysqli_connect("localhost", "Yessa", "study575");
				mysqli_select_db($db,"comm");
				$id = $_GET['id'];
				//$sql = "SELECT * FROM element e JOIN goods g ON e.id = g.id WHERE e.id=".$id;
				$sql = "SELECT * FROM goods WHERE id=".$id;
				$result = mysqli_query($db, $sql);
				$row = mysqli_fetch_assoc($result);					
			?>
			<div id="primary" class="content-area column full">
				<main id="main" class="site-main" role="main">
				<div id="container">
					<div id="content" role="main">
						
						<div itemscope itemtype="http://schema.org/Product" class="product">
							<div class="images">
								<a href="" itemprop="image" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto">								
								<img src="img/red-tulips.png" alt=""></img></a>
							</div>
							<div class="summary entry-summary">
								<h1 itemprop="name" class="product_title entry-title"><?= $row["title"]?></h1>
								
								<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
									<p class="price">
										<span class="amount">₸<?= $row["cost"]?></span>
									</p>
									<meta itemprop="price" content="35"/>
									<meta itemprop="priceCurrency" content="USD"/>
									<link itemprop="availability" href="http://schema.org/InStock"/>
								</div>
								<div itemprop="description">
									<p>
										<?= $row["about"]?>
									</p>
								</div>
								
								<?php
								$basket = null;
								if (isset($_COOKIE["basket"])){
									$basket = json_decode($_COOKIE["basket"]);
								}
								else{
									$basket = [];
								}
								?>

								<form class="cart" method="post" enctype='multipart/form-data' action='basket.php?id=<?= $id?>'>
									<div class="quantity">
										<input type="number" step="1" min="1" max="" name="q" value="1" title="Qty" class="input-text qty text" size="4"/>
										<!--<input value ="<?= $id?>" name = "id" style="display: none;">-->
									</div>									
									<button type="submit" class="single_add_to_cart_button button alt">В корзину</button>
								</form>
								
							</div>
							<!-- .summary -->
							<div class="woocommerce-tabs wc-tabs-wrapper">
									<div class="panel entry-content wc-tab" id="tab-description">
									<h2>Product Description</h2>
									<p>
										<?= $row["description"]?>
									</p>
								</div>
								<div class="panel entry-content wc-tab" id="tab-reviews">
									<div id="reviews">
										<div id="comments">
											<h2>Отзовы наших покупателей:</h2>
											<ol class="commentlist">
												<li itemprop="review" itemscope itemtype="http://schema.org/Review" class="comment">
												<div id="comment-3" class="comment_container">
													<img alt='' src='img/shalkar.jpeg' class='avatar avatar-60 photo' height='60' width='60'/>
													<div class="comment-text">	
														<p class="meta">
															<strong itemprop="author">Аяулым</strong> &ndash; <time itemprop="datePublished" datetime="2013-06-07T15:54:25+00:00">16 Февраля, 2018</time>:
														</p>
														<div itemprop="description" class="description">
															<p>
																Шикарные цветы. Маме очень понравились.
															</p>
														</div>
													</div>
												</div>
												</li>
												<!-- #comment-## -->
												<li itemprop="review" itemscope itemtype="http://schema.org/Review" class="comment">
												<div id="comment-4" class="comment_container">
													<img alt='' src='img/dimash.jpg' class='avatar avatar-60 photo' height='60' width='60'/>
													<div class="comment-text">													
														<p class="meta">
															<strong itemprop="author">Димаш</strong> &ndash; <time itemprop="datePublished" datetime="2013-06-07T15:54:25+00:00">15 Февраля, 2018</time>:
														</p>
														<div itemprop="description" class="description">
															<p>
																Жена была в восторге! Огромная благодарность от нас двоих.
															</p>
														</div>
													</div>
												</div>
												</li>
												<!-- #comment-## -->
											</ol>
										</div>
										<div id="review_form_wrapper">
											<div id="review_form">
												<div id="respond" class="comment-respond">
													<h3 style="margin-bottom:10px;" id="reply-title" class="comment-reply-title">Добавить отзывы <small><a rel="nofollow" id="cancel-comment-reply-link" href="/demo-moschino/product/woo-logo-2/#respond" style="display:none;">Cancel reply</a></small></h3>
													<form action="#" method="post" id="commentform" class="comment-form" novalidate>
														<p class="comment-form-rating">
															<label for="rating">Ваша оценка:</label>
															<select name="rating" id="rating">
																<option value="">Указать&hellip;</option>
																<option value="5">Отлично</option>
																<option value="4">Хорошо</option>
																<option value="3">Средне</option>
																<option value="2">Не так плохо</option>
																<option value="1">Очень плохо</option>
															</select>
														</p>
														<p class="comment-form-comment">
															<label for="comment">Ваш отзыв</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
														</p>
														<p class="comment-form-author">
															<label for="author">Имя <span class="required">*</span></label><input id="author" name="author" type="text" value="" size="30" aria-required="true"/>
														</p>
														<p class="comment-form-email">
															<label for="email">Email <span class="required">*</span></label><input id="email" name="email" type="text" value="" size="30" aria-required="true"/>
														</p>
														<p class="form-submit">
															<input name="submit" type="submit" id="submit" class="submit" value="Submit"/><input type='hidden' name='comment_post_ID' value='60' id='comment_post_ID'/>															
														</p>
													</form>
												</div>
												<!-- #respond -->
											</div>
										</div>
										<div class="clear">
										</div>
									</div>
								</div>
							</div>
							<div class="related products">
								<h2>Недавно просмотренные</h2>
								<ul class="products">
										<li class="first product">
												<a href="shop-single.html">
												<span class="onsale">ХИТ</span>
												<img src="img/tulips1.png" alt="">
												<h3>ГОЛЛАНДСКИЕ ТЮЛЬПАНЫ</h3>
												<span class="price"><span class="amount">₸340</span></span>
												</a><a href="#" class="button">В корзину</a>
												</li>
							
												<li class="product">
												<a href="shop-single.html">
												<img src="img/red-tulips.png" alt="">
												<h3>ОТЕЧЕСТВЕННЫЕ ТЮЛЬПАНЫ</h3>
												<span class="price"><span class="amount">₸660</span></span>
												</a><a href="#" class="button">В корзину</a>
												</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
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