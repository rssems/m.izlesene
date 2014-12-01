<?php include "common/meta.php"; ?>
<?php include "common/header.php"; ?>
<?php include "common/nav.php"; ?>
<?php include "common/search.php"; ?>

<section class="main_video_preview">
	<div class="video_preview">
	    <a href="#">
	    <span class="playIcon"></span>
	    	<img src="images/img1.jpg" alt="img" />
	  	</a>
	</div><!-- video_preview -->
	<div class="video_desc">
		<div class="clear"></div>
		<span class="desc-toggle active">
			<span class="mobile_sprite"></span>
		</span>
		
		<h1>Miley Cyrus - Wrecking Ball Chatroulette Versiyonu Uzzzzuuuuuuuuuuuuuuuuuuuuunnnn</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate placeat eius nesciunt reprehenderit dolor! Optio sit, sunt, delectus autem assumenda pariatur doloremque ab quam est iusto. Omnis doloribus, eaque architecto.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate placeat eius nesciunt reprehenderit dolor! Optio sitqyy, sunt, delectus autem assumenda pariatur doloremque ab quam est iusto. Omnis doloribus, eaque architecto.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate placeat eius nesciunt reprehenderit dolor! Optio sit, sunt, delectus autem assumenda pariatur doloremque ab quam est iusto. Omnis doloribus, eaque architecto.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate placeat eius nesciunt reprehenderit dolor! Optio sit, sunt, delectus autem assumenda pariatur doloremque ab quam est iusto. Omnis doloribus, eaque architecto.</p>
		<div class="clear"></div>
		<div class="share withTictoc onAndroid">
			<!-- <a href="#" title="Whatsappla"  class="w_share"><span class="mobile_sprite"></span> <span class="w_title">Whatsappla</span></a> -->
			<a href="#" title="Tictocla"  class="tt_share"><span></span></a>
			<a href="#" title="Tweetle" class="tw_share"><span class="mobile_sprite"></span> Tweetle</a>
			<a href="#" title="Facebook'ta Paylaş"  class="fb_share"><span class="mobile_sprite"></span> <span class="fb_name">Facebook'ta </span>Paylas</a>
		</div><!-- share -->
		<div class="clear"></div>
		<div class="tv_share">
			<a href="javascript:;" onclick="tvreRlect()" class="tv_share_button"><span class="tvreflect_icon"></span> <span class="tvreflect_text">VİDEOYU TV'YE YANSIT</span></a>

			<link rel="stylesheet" href="css/mobile_tooltip.css">

			<div class="tooltip tvreflect_tooltip">
				<div class="tooltip_wrapper">
					<div class="tooltip_up"></div>
					<div class="clear"></div>
					<div class="tooltip_title">VİDEOYU TV'YE YANSIT</div>
					<div class="clear"></div>
					<div class="tooltip_content">


					<div class="tvreflect_icons" id="tvreflect_icons">
						<div class="tvreflect_input"><input type="number" placeholder=" ***** "></div>
						<span class="tvreflect_sprite tvreflect_icon_phone"></span>
						<span class="tvreflect_sprite tvreflect_icon_play"></span>
						<span class="tvreflect_sprite tvreflect_icon_tv"></span>
						<span class="tvreflect_sprite tvreflect_icon_success"></span>
					</div><!-- tvreflect_icons -->
					<p class="tvreflect_info tvreflect_info1" id="p1">Büyük ekran keyfi ile<br>video izlemek için Smart TV’nizden<br>‘<a href="http://tv.izlesene.com">http://tv.izlesene.com</a>’u açınız.</p><!-- tvreflect_info -->
					<p class="tvreflect_info tvreflect_info2 hide" id="p2">Smart TV’nizden alacağınız<br>kodu buraya girin.</p><!-- tvreflect_info -->
					<p class="tvreflect_info tvreflect_info3 hide" id="p3"><i>Tebrikler!</i> Doğrulama başarılı.<br>Smart TV’de büyük ekran keyfine başla.</p><!-- tvreflect_info -->
					<p class="tvreflect_info tvreflect_info4 hide" id="p4"><i>Yanlış kod girdiniz, tekrar deneyiniz.</i> Smart TV’nizde beliren kodu giriniz.</p><!-- tvreflect_info -->

					<div class="clear"></div>

					<div class="tvreflect_buttons" id="b1">
						<a href="javascript:;" onclick="stepOne()">SONRAKİ ADIM</a>
					</div><!-- tvreflect_buttons -->

					<div class="clear"></div>

					<div class="tvreflect_buttons hide" id="b2">
						<a href="javascript:;" onclick="stepTwo()" class="tvreflect_buttons_half2 danger">DOĞRULA</a>
						<a href="javascript:;" onclick="stepZore()" class="tvreflect_buttons_half1">ÖNCEKİ ADIM</a>
					</div><!-- tvreflect_buttons -->

					<div class="clear"></div>

					<div class="tvreflect_buttons hide" id="b3">
						<a href="javascript:;" onclick="tvreRlect();tvreRlectIconActive();" class="tvreflect_buttons_half2 success">TAMAM</a>
						<a href="javascript:;" onclick="stepZore()" class="tvreflect_buttons_half1">İPTAL ET</a>
					</div><!-- tvreflect_buttons -->

			        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

					<script>

						function tvreRlect(){
							$(".tvreflect_tooltip").toggle();
						}

						function tvreRlectIcon(){
							$(".tvreflect_icon").toggleClass("active");
						}
						function tvreRlectIconActive(){
							$(".tvreflect_icon").addClass("active");
						}
						function stepZore(){
							$(".tvreflect_icons").removeClass("active");
							$(".tvreflect_icons").removeClass("success");
							$(".tvreflect_icon_success").removeClass("spaceInUp");
							$(b1).removeClass("hide");
							$(b2).addClass("hide");
							$(b3).addClass("hide");
							$(p1).removeClass("hide");
							$(p2).addClass("hide");
							$(p3).addClass("hide");
							$(p4).addClass("hide");
						}
						function stepOne(){
							stepZore();
							$(".tvreflect_icons").addClass("active");
							$(p1).addClass("hide");
							$(p2).removeClass("hide");
							$(b1).addClass("hide");
							$(b2).removeClass("hide");
						}
						function stepError(){
							stepOne();
							$(p2).addClass("hide");
							$(p4).removeClass("hide");
							$(".tvreflect_icons").addClass("shake").delay(1000).queue(function(){
							    $(".tvreflect_icons").removeClass("shake").dequeue();
							});
						}
						function stepTwo(){
							stepOne();
							$(".tvreflect_icons").toggleClass("success");
							$(p2).addClass("hide");
							$(p3).removeClass("hide");
							$(b2).addClass("hide");
							$(b3).removeClass("hide");
							$(".tvreflect_icon_success").addClass("spaceInUp");
							
						}
					</script>





					</div><!-- tooltip_content -->
				</div><!-- /tooltip_wrapper -->
				<div class="clear"></div>
			</div><!-- tooltip -->

		</div><!-- tv_share -->
		<div class="clear"></div>
	</div><!-- video_desc -->
	<div class="video_details">
		<div class="details_more">
			<div class="detail_left">
			Yukleyen : <a href="#" title="username">Gagarino</a> (<span class="date">12.06.2012</span>)
			</div>
			<div class="detail_right">
			<span class="view">Izlenme</span>: <span class="view_count">1.605.486</span>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</section>

<?php include "common/videos.php"; ?>
<?php include "common/ad_320_50.php"; ?>


<style>
	.developmentOnly{
		position: absolute;
		top: 300px;
		left: 0;
		z-index: 2147483645;
		background-color: #fff;
		border:5px solid red;
		width: 200px;
		height: auto;
		display: block;
		padding: 5px;}
		.developmentOnly .title{
			width: 100%;
			padding: 5px;
			margin-left: -5px;
			margin-top: -5px;
			margin-bottom: 10px;
			height: 45px;
			display: block;
			color: #fff;
			text-align: center;
			font-size: 20px;
			line-height: 42px;
			background-color: red;
		}
		.developmentOnly .title li {
			display: block;
		}
			.developmentOnly .title li a{
				width: 100%;
				text-decoration: underline;
				display: block;
				margin: 5px 0;
			}
</style>
<div class="developmentOnly">
	<div class="title">PSST! Developer ;)</div>
	<div class="clear"></div>
	<div>

		<ul>
			<li>
				<a href="javascript:;" onclick="tvreRlect()">Tooltipi Aç/Kapa</a>
			</li>
			<li>
				<a href="javascript:;" onclick="tvreRlectIcon()">Tooltip iconunu Yak/Söndür</a>
			</li>
			<li>
				<a href="javascript:;" onclick="stepZore()">Başlangıç Ekranı</a>
			</li>
			<li>
				<a href="javascript:;" onclick="stepOne()">Kod Girme Ekranı</a>
			</li>
			<li>
				<a href="javascript:;" onclick="stepError()">Girilen Kod Hatalı</a>
			</li>
			<li>
				<a href="javascript:;" onclick="stepTwo()">Girilen Kod Dogru, Tesekkur</a>
			</li>
		</ul>
	</div>
</div>

<?php include "common/footer.php"; ?>
