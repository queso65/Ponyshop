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
		<div class="container">
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
		<div class="container menu__container">
			<div class="catalog">
				<div class="catalog__wrapper open" id = "catalog" >
					<div class="catalog__header "><span>Категории</span><i class="fa fa-bars catalog__header-icon"></i></div>
					<ul class="catalog__list">
						<li class="catalog__item">
							<a href="" class="catalog__link">
								футболки 
							</a>
							<div class="catalog__subcatalog">
								<a href="" class="catalog__subcatalog-link">футболки с единорогами</a>
							</div>	
                            <a href="" class="catalog__link">
								брелки
							</a>
							<a href="" class="catalog__link">
								канцелярия 
							</a>
							
						</li>			   
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
  <a href="#">Таблица товаров</a>
  <a href="#" class="active">Таблица пользователей</a>
  <a href="#">Добавить новый товар</a>
  <a href="#">Таблица пользователей</a>
  <a href="#"></a>
</div>
<div class="table">
<table>
        <tr>
		    <th>id</th>
		    <th>@mail</th>
		    <th>Имя</th>
			<th>Фамилия</th>
			<th>кот</th>
        </tr>
				 <td>ы</td>
		         <td>ы</td>
			     <td>ы</td>
			     <td>ы</td>
				 <td><a ><button class="color_red">удалить</button></a></td>
		         </tr>
				  </tr>
				 <td>ы</td>
		         <td>ы</td>
			     <td>ы</td>
			     <td>ы</td>
				 <td><a ><button class="color_red">удалить</button></a></td>
		         </tr>
				  </tr>
				 <td>ы</td>
		         <td>ы</td>
			     <td>ы</td>
			     <td>ы</td>
				 <td><a ><button class="color_red">удалить</button></a></td>
		         </tr>
				  </tr>
				 <td>ы</td>
		         <td>ы</td>
			     <td>ы</td>
			     <td>ы</td>
				 <td><a ><button class="color_red">удалить</button></a></td>
		         </tr>
    </table>
</div>
</div>

<div class="grey__background">
<div id="footer">
    <p >Ponyshop&trade; 2021</p>
</div>
</div>


	
	
<script src="scripts/menu_catalog.js"></script>
</body>
</html>