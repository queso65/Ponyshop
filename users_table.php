<?php
     require_once 'vendor/connect.php';
	 require_once 'catalog.php';
	 require_once 'functions.php';
     session_start();
	 $users = get_users();
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

<div class = "container-admin">

<div class="vertical-menu">
  <a href="admin.php" class="border-top">Таблица товаров</a>
  <a href="users_table.php" class="active">Таблица пользователей</a>
  <a href="admin_add_product.php">Добавить новый товар</a>
  <a href="#">Таблица пользователей</a>
  <a href="#" class="border-bottom">Link 4</a>
</div>

<div class="table">
<table>
        <tr>
		    <th class = "corneer__left">id</th>
		    <th>Почта</th>
		    <th>Имя</th>
			<th>Роль</th>
			<th class = "corneer__right"></th>
        </tr>
		<?php
			 foreach($users as $user){
				 ?>
				 <tr class="user_line" data-id = "<?= $user['id'] ?>">
				 <td><?= $user['id'] ?></td>
		         <td><?= $user['email'] ?></td>
			     <td><?= $user['fname'] ?></td>
			     <td class="role" data-id = "<?= $user['id'] ?>" ><?php echo get_role($user['role']) ?></td>
				 <td class = "admin_useres_table_function">
				    <p><a class="dodgerblue rights" data-id= "<?= $user['id'] ?>" ><?php echo action_with_user($user['role']) ?></a></p>
					<p class = " margin_top_3"><a class="dodgerblue" data-id= "<?= $user['id'] ?>" >забанить</a></p>
					<p class = " margin_top_3"><a class="dodgerblue delate_user_button" data-id= "<?= $user['id'] ?>">удалить</a></p>
				 </td>
		         </tr>
				 <?php
			 }
		?>
    </table>
</div>
</div>

<div class="grey__background">
<div id="footer">
    <p >Ponyshop&trade; <?php echo date('Y') ?></p>
</div>
</div>


	
	



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="scripts/main.js"></script>
<script src="scripts/menu_catalog.js"></script>
</body>
</html>
