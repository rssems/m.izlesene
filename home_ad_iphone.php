<?php include "common/meta.php"; ?>


<div class="googlePlay izlesene-appStore">
	<a class="googlePlayLink" href="#https://play.google.com/store/apps/details?id=com.nokta.izlesene" title="İzlesene Google Play">
		<span class="izleseneLogo"></span>
		<span class="title">Daha iyi bir deneyim icin iPhone uygulamamiz indirebilirsiniz.</span>
		<span class="icon-googlePlay"><span></span></span>
	</a>
	<a href="#2" class="goMobileWeb">MOBIL SITEYE DEVAM ET</a>
	<div class="googlePlayOverlay"></div>
</div>
<style>
.googlePlay{
	z-index: 2;
	background-color: rgba(255,255,255,.95);
}
	.googlePlay,
	.googlePlay a.googlePlayLink,
	.googlePlayOverlay,
	.googlePlayOverlay:before{
		position: fixed; 
		top: 0; 
		left: 0; 
		width: 100%;
		height: 100%;
		min-width: 100%;
		min-height: 100%;
	}
	.googlePlay a.googlePlayLink{
		z-index: 10;
		display: block;
		padding-top: 40px;
	}
	.googlePlay a.goMobileWeb{
		font-family: 'Roboto';
		font-weight: bold;
		font-size: 12px;
		color: #4D4D4D;
		line-height: 14px;
		text-align: right;
		padding: 20px;
		position: absolute;
		z-index: 20;
		top: 0;
		left: 0;
		width: 100%;
		display: block;
		margin-left: -40px;
		border-bottom:1px solid rgba(255,255,255,0.4);
	}
	.googlePlay span.title{
		font-family: 'Roboto';
		font-size:18px;
		color: #222;
		width: 85%;
		margin: 30px auto;
		display: block;
		text-align: center;

	}
	.icon-googlePlay{
		width: 151px;
		height: 36px;
		padding: 10px 20px;
		border-radius: 6px;
		background-color: #222;
		display: block;
		margin: 20px auto;
	}
		.icon-googlePlay:active{
			background-color: #000;
		}
		.icon-googlePlay span{
			webkit-background-size: 151px 36px;
			-moz-background-size: 151px 36px;
			background-size: 151px 36px;
			background-image: url(images/googlePlay.png);
			display: inline-block;
			width: 151px;
			height: 36px;
		}
		.izleseneLogo{
			webkit-background-size: 60px 60px;
			-moz-background-size: 60px 60px;
			background-size: 60px 60px;
			background-image: url(images/izleseneLogo.png);
			display: block;
			width: 60px;
			height: 60px;
			margin: 50px auto 0;
		}
	.googlePlayOverlay{
		z-index: 1;
		min-height: 100%;
		background: url(images/bg.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
/*		.googlePlayOverlay:before{
			content: "";
			z-index: 2;
			background-image: -o-linear-gradient(-89deg, rgba(255,255,255,0.50) 0%, rgba(255,255,255,0.85) 34%, #FFFFFF 100%);
			background-image: -moz-linear-gradient(-89deg, rgba(255,255,255,0.50) 0%, rgba(255,255,255,0.85) 34%, #FFFFFF 100%);
			background-image: -ms-linear-gradient(-89deg, rgba(255,255,255,0.50) 0%, rgba(255,255,255,0.85) 34%, #FFFFFF 100%);
			background-image: linear-gradient(-179deg, rgba(255,255,255,0.50) 0%, rgba(255,255,255,0.85) 34%, #FFFFFF 100%);
		}*/
</style>
<style>
	.izlesene-appStore a.goMobileWeb,
	.izlesene-appStore  span.title{
		font-family:  "Lucida Grande", "Lucida Sans Unicode", Helvetica, Arial, Verdana, sans-serif!important;
	}
	.izlesene-appStore .icon-googlePlay span{
		webkit-background-size: 159px 36px;
		-moz-background-size: 159px 36px;
		background-size: 159px 36px;
		background-image: url(images/appStore.png);
		width: 159px;
	}
	.izlesene-appStore .googlePlayOverlay{
		background-image: url(images/bg-iphone.jpg); 
		width: 320px;
		max-height: 568px!important;
	}
</style>


<?php include "common/header.php"; ?>
<?php include "common/nav.php"; ?>
<?php include "common/search.php"; ?>
<?php include "common/videos.php"; ?>
<?php include "common/ad_320_50.php"; ?>
<?php include "common/footer.php"; ?>
