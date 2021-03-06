<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="shortcut icon" href="/web/images/shortcut_icon.png" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <meta charset="<?= Yii::$app->charset ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

	<!-- header-section-starts -->
<div class="header">
    <div class="header-top-strip">
	 <div class="container">
		 <div class="header-top-left">
		<ul>
		<? if ( !Yii::$app->user->isGuest ) : ?>
			<li><a href="<?= Yii::$app->urlManager->createUrl('auth/logout') ?>"><span class="glyphicon glyphicon-user"> </span>Logout</a></li>
		<? else : ?>
			<li><a href="<?= Yii::$app->urlManager->createUrl('auth/login') ?>"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
		<? endif; ?>
		<? if ( Yii::$app->user->isGuest ) : ?>
			<li><a href="<?= Yii::$app->urlManager->createUrl('auth/registration') ?>"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>
		<? endif; ?>
		<? if ( !Yii::$app->user->isGuest ) : ?>
			<li><a href="<?= Yii::$app->urlManager->createUrl('auth/account') ?>"><i class="fas fa-pencil-alt font-awersome-icon"></i>Edit Account</a></li>
		<? endif; ?>
		</ul>

	<style>
		.font-awersome-icon {
			font-size: 10px;
			margin-right: 7px;
		}
	</style>
	</div>
	<div class="header-right">
	    <div class="cart box_1">
		 <a href="<?= Yii::$app->urlManager->createUrl('cart/cart' ); ?>">
			 <h3>
			  <? Yii::$app->session->open(); ?>
			   <span class="" id="sum-of-cart">
				<? if ( !$_SESSION['cart.sum'] ) : ?>
					$0.00
				<? else : ?>
					$<?= sprintf("%.2f", $_SESSION['cart.sum']/100 ) ?>
				<? endif; ?>
			    </span>
					(<span id="count-of-cart" class="">
				<? if ( !$_SESSION['cart.qty'] ) : ?>
					0
				<? else : ?>
					<?= $_SESSION['cart.qty']; ?>
				<? endif; ?>
			    </span>)
			    <img src="/web/images/bag.png" alt="">
				</h3>
			</a>								  		
		</div>
	</div>
	<!-- header-section-ends -->

	<div class="banner-top">
	    <div class="container">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
					</button>
					<div class="logo">
					<h1><a href=<?= Yii::$app->urlManager->createUrl('shop/index') ?>><span>E</span> -Shop</a></h1>
				</div>
			</div>
			<!--Widget for menu of website-->
			<?=app\components\MenuWidget::widget()?>
		</nav>
	</div>

	<?=$content?>

	<div class="news-letter">
			<div class="container">
					<div class="join">
							<h6>JOIN OUR MAILING LIST</h6>
							<div class="sub-left-right">
									<input type="text" id="email-for-distribution" placeholder="Enter Your Email Here" />
									<input type="submit" id="subscribe-mails" value="SUBSCRIBE" />
							</div>
							<div class="clearfix"> </div>
					</div>
			</div>
	</div>

	<div class="footer">
		<div class="container">
			<div class="footer_top">
				<div class="span_of_4">
					<div class="col-md-3 span1_of_4"></div>
					<div class="col-md-3 span1_of_4"></div>
					<div class="clearfix"></div>
				</div>
			</div>
			<hr>
		</div>
	</div>

	<div id="modal-mailing-list-res-true">
		<p>Your email is joined.</p>
	</div>

	<div id="modal-mailing-list-res-false">
		<p>Your email is not joined! Please input legal email.</p>
	</div>

	<div id="add-to-cart-message">
		<p>Product added to cart.</p>
	</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
