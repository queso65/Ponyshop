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
			<a href="index.php" class="logo" title="logo">
				<img src="img/logo.png" class = "img_logo" alt="Logo">
			</a>
			<div class="header-right">
				<form class="search-form">
					<input type="text" name="id" value="" placeholder="Поиск" class="search search-input">
					<button><i class="fa fa-search search-i"></i></button>
				</form>
				<div class = "block">
				<div class = "subblock">
				<div class="cart-informer" >
					<button class="cart-informer__button" >
						<span class="cart-informer__count" id="cart_count"><?php echo get_cart_count()?></span>
						<span class="cart-informer__icon"><i class="fa fa-shopping-cart cart-informer__icon-i"></i></span>
						<span class="cart-informer__value" id="cart_cost"><?php echo get_cart_cost() ?></span>
					</button>
				</div>
				<?php 
				    if($_SESSION['user']['user_id'] == ''):
				?>
				<div class="login">
				    <button class="button_login" onclick="window.location.href='login.php'">
					    Вход
					</button>
				</div>
				<?php else:?>
                 <div class="dropdown">
                <button class="dropbtn" onclick="myFunction()"> личный кабинет
                     <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content" id="myDropdown">
                    <a href="">Перейти</a>
                    <a href="">Выход</a>
                    </div>
                </div> 	
                <?php endif;?>					
		</div>
		</div>
	</header>	
	 
	<div class="menu">
		<div class="container">
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
	
	
<h1 class="new__goods">Новинки</h1>
	
<div class="product-center">
<?php
	foreach($goods as $good){
	?>
   <div class="product-item">
            <img src="<?=$good['image']?>">
            <div class="product-list">
            <h3 class="item_title"><?=$good['name']?></h3>
            <span class="price"><span class="item_price"><?=$good['price']?></span> ₽</span>
            <button data-id="<? echo $good['id'] ?>" class="button add_item"><?php echo in_cart($good['id'])?></button>
        </div>
  </div>
  <?php
	}
?>
</div>
<div class = "pages">
    <div class = "page__left page-text">
	  <<
	</div>
    <div class="page page-text">
     1	
	</div>
	<div class="page page-text">
     2
	</div>
	<div class="page page-text">
     3
	</div>
	<div class="page page-text">
     4	
	</div>
	<div class = "page__right page-text">
	>>
	</div>
</div>
<div class="grey__background">
<div id="footer">
    <p >Ponyshop&trade; <?php echo date('Y') ?></p>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="scripts/menu_catalog.js"></script>
<script src="scripts/main.js"></script>
</body>
</html>