<?php
     require_once 'vendor/connect.php';
	 include 'catalog.php';
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
			<a href="index.php" class="logo" title="logo">
				<img src="img/logo.png" alt="Logo">
			</a>
			<div class="header-right">
				<form class="search-form">
					<input type="text" name="search" value="" placeholder="Поиск" class="search search-input">
					<button><i class="fa fa-search search-i"></i></button>
				</form>
				<div class="cart-informer" >
					<button class="cart-informer__button" onclick="window.location.href='cart.php'">
						<span class="cart-informer__count" id="cart_count"><?php echo get_cart_count()?></span>
						<span class="cart-informer__icon"><i class="fa fa-shopping-cart cart-informer__icon-i"></i></span>
						<span class="cart-informer__value" id="cart_cost"><?php echo get_cart_cost() ?></span>
					</button>
				</div>
				<div class="cart-informer">
				    <button class="button_login" onclick="window.location.href='login.php'">
					    Вход
					</button>
				</div>	
		</div>
	</header>	


	<div class="menu">
		<div class="container menu__container">
			<div class="catalog">
				<div class="catalog__wrapper" id = "catalog">
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
	
	<div class="shopping-cart">
	  <div class="header-cart">
            <div class = "total__price-cart">Итоговая цена: <span class="total"><?php echo get_cart_cost() ?></span></div>
	        <div class = "total__buton-cart"><button class="total__buton__text-cart">Заказать</button></div>
	  </div> 
	  <?php if ( isset($_SESSION['cart_list']) ){
		  foreach($_SESSION['cart_list'] as $good){
	   ?>
      <div class="item-cart" data-id="<? echo $good['id'] ?>">
	 <div class="delate__item-cart"><button class="delate__item__text-cart" id="delate__item" data-id="<? echo $good['id'] ?>">удалить</button></div>
	     <div class = "product__inf-cart">
         <img src="<?=$good['image']?>" class="image-cart" alt="" />
 
        <div class="description-cart"><?=$good['name']?></div>

		<div class="item__price-cart"><?=$good['price']?>₽</div>
		</div>
      </div>
	  <?php
		  }
	  }
	  ?>
	  
    </div>
	<div class="grey__background">
<div id="footer">
    <p >Ponyshop&trade; <?php echo date('Y') ?></p>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="scripts/main.js"></script>
</body>
</html>
