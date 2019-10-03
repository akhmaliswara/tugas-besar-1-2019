<!DOCTYPE html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="navbar"> 
		<div class="navbar-box">
			<a id="logo"><strong>Engi</strong>ma</a>
			<input id="search-bar" type="text" placeholder="Search Movie">
			<a class="menu" href="login.php">Logout</a>
			<a class="menu" href="transaction.php">Transaction</a>
		</div>
	</div>
	<div class="container">
		<div class="content">
			<aside class="asideleft">
			</aside>

			<aside class="asideright">
			</aside>

			<section class="maincontainer">
				<article class="hellotitle">
					<!-- Title (Hello, ....) -->
					<p class="texthello">Hello, </p>
					<p class="textusername">gery.wahyu</p>
					<p class="texthello">!</p>
				</article>

				<article class="nowplaying">
					<p class="textnowplaying">Now Playing</p>
				</article>
				
				<article class="mainlistmoviecontainer">
					<?php include('../php/home.php') ?>
				</article>
			</section>
		</div>
	</div>
</body>
</html>
