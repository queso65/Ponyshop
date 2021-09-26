<?php
     require_once 'vendor/connect.php';
	 require_once 'catalog.php';
	 require_once 'functions.php';
     session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Ponyshop</title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>	
	<header class="header">
		<div class="container align-items_center">
			<a href="index.html" class="logo" title="logo">
				<img src="img/logo.png" alt="Logo">
			</a>
			<div class="header-right">
				<form class="search-form">
					<input type="text" name="search" value="" placeholder="Поиск" class="search search-input">
					<button><i class="fa fa-search search-i"></i></button>
				</form>
				<div class="cart-informer" >
					<button class="cart-informer__button" onclick="">
						<span class="cart-informer__count">0</span>
						<span class="cart-informer__icon"><i class="fa fa-shopping-cart cart-informer__icon-i"></i></span>
						<span class="cart-informer__value" >0 Р</span>
					</button>
				</div>
				<div class="cart-informer">
				    <button class="button_login" onclick="">
					    Вход
					</button>
				</div>				
		</div>
	</header>	


	<div class="menu">
		<div class="container">
			<div class="catalog">
				<div class="catalog__wrapper" id = "catalog" >
					<div class="catalog__header "><span>Категории</span><i class="fa fa-bars catalog__header-icon"></i></div>
					<ul class="catalog__list">
							<?php
				    foreach($categories as $category){
					?>
						<li class="catalog__item">
						<?php
						    if($category['parent'] == 0){
						?>
							<a href="index.php?id=<?= $category['id']?>" class="catalog__link">
								<?=$category['title']?>
							</a>
							<?php
						    foreach($categories as $subcategory){
						    if($category['id'] == $subcategory['parent']){
						    ?>
							<div class="catalog__subcatalog">
								<a href="index.php?id=<?= $subcategory['id']?>" class="catalog__subcatalog-link"><?=$subcategory['title']?></a>
							</div>
							<?php
							    }
							}
                        ?>		
							<?php
							}
						?>					
						</li>
                   <?php
				   }
                   ?>			   
					</ul>
				</div>
			</div>	
			<nav class="menu__nav">
				<a href="/" class="menu__nav-link">Главная</a>
				<a href="/" class="menu__nav-link">Блог</a>
			</nav>	
            <a class="menu__border"></a>				
		</div>
	</div>
<h1 class="new__goods">Новинки</h1>
<div class="product-center">
  <div class="product-item">
            <img src= "img/T-shirt.jpg">
            <div class="product-list">
            <h3 class="item_title">продукт</h3>
            <span class="price"><span class="item_price">3</span> ₽</span>
            <button class="button add_item">В корзину</button>
        </div>
  </div>
  <div class="product-item">
            <img src= "img/T-shirt.jpg">
            <div class="product-list">
            <h3 class="item_title">продукт</h3>
            <span class="price"><span class="item_price">3</span> ₽</span>
            <button class="button add_item">В корзину</button>
        </div>
  </div>
  <div class="product-item">
            <img src= "img/T-shirt.jpg">
            <div class="product-list">
            <h3 class="item_title">продукт</h3>
            <span class="price"><span class="item_price">3</span> ₽</span>
            <button class="button add_item">В корзину</button>
        </div>
  </div>
  <div class="product-item">
            <img src= "img/T-shirt.jpg">
            <div class="product-list">
            <h3 class="item_title">продукт</h3>
            <span class="price"><span class="item_price">3</span> ₽</span>
            <button class="button add_item">В корзину</button>
        </div>
  </div>
  <div class="product-item">
            <img src= "img/T-shirt.jpg">
            <div class="product-list">
            <h3 class="item_title">продукт</h3>
            <span class="price"><span class="item_price">3</span> ₽</span>
            <button class="button add_item">В корзину</button>
        </div>
  </div>
  <div class="product-item">
            <img src= "img/T-shirt.jpg">
            <div class="product-list">
            <h3 class="item_title">продукт</h3>
            <span class="price"><span class="item_price">3</span> ₽</span>
            <button class="button add_item">В корзину</button>
        </div>
  </div>
  <div class="product-item">
            <img src= "img/T-shirt.jpg">
            <div class="product-list">
            <h3 class="item_title">продукт</h3>
            <span class="price"><span class="item_price">3</span> ₽</span>
            <button class="button add_item">В корзину</button>
        </div>
  </div>
</div>
<div class="grey__background">
<div id="footer">
    <p class="footer_text">Ponyshop&trade; <?php echo date('Y') ?></p>
</div>
</div>

<script src="scripts/menu_catalog.js"></script>
</body>
</html>