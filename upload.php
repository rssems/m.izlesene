<?php include "common/meta.php"; ?>

<link href="css/login-upload.css" rel="stylesheet" type="text/css">
<link href="css/mobile_manager.css" rel="stylesheet" type="text/css">

<?php include "common/header_title.php"; ?>

<section class="userActions">
	<h1>Merhaba RSS!</h1>
	<div class="hiddenFileInput">
		<input type="file">
		<a href="#" class="bigButton buttonAction">VİDEO YÜKLEMEYE BAŞLA!</a>
	</div>
	<p>Telefonunuzda bulunan bir videoyu yükleyebilir veya yeni bir video çekebilirsiniz.</p>
	<p>Daha iyi bir izlenme deneyim için <strong>telefonunuzu yan tutarak</strong> çekim yapınız.</p>

	<div>
		<label for="asda">YÜKLENME:</label>
		<div class="progressBar">
			<span style="width:45%">%45</span>
		</div>
	</div>

	<a href="#" class="bigButton buttonInfo"> Videonuz hazırlanıyor…</a>
	<a href="#" class="bigButton buttonAction">► Videonuz Yayında! İzleyin</a>

		
	<form action="">
	<div>
		<label for="asdada">BAŞLIK:</label>
		<input type="text" placeholder="" class="bigButton">
	</div>
	<div>
		<label for="asdada">AÇIKLAMA:</label>
		<textarea name="" id="" cols="20" rows="10" class="bigButton"></textarea>
		<!-- <input type="text" placeholder="Kullanıcı Adı veya E-Posta" class="bigButton"> -->
	</div>

	<div>
		<div class="col-3-4">
			<label for="asdada">KATEGORİ:</label>
			<div class="selectWrapper">
				<select class="bigButton">
					<option value="amator">Kategori Seçiniz</option>
					<option value="b">B</option>
					<option value="c">D</option>
					<option value="d">E</option>
					<option value="e">F</option>
				</select>
			</div><!-- selectWrapper -->
		</div>
		<div class="col-1-4">
			<label for="asdada">GİZLİLİK:</label>
			<div class="selectWrapper">
				<select class="bigButton hidden">
					<option value="public"><span class="icon-public"></span>Herkese Açık</option>
					<option value="link">Link ile Erişim</option>
					<option value="secret">Gizli</option>
				</select>
				<div class="special bigButton">
					<!-- <span class="managerSprite icon-public"></span> -->
					<span class="managerSprite icon-link"></span>
					<!-- <span class="managerSprite icon-secret"></span> -->
				</div>
			</div><!-- selectWrapper -->
		</div>
		<div class="clear"></div>
	</div>
	<div>
		<label for="asdada">ETİKETLER:</label>
		<input type="text" placeholder="" class="bigButton">
	</div>
		<a href="#" class="bigButton buttonPositive">Kaydet</a>
		<a href="#" class="bigButton buttonPositive buttonPassive">Değişiklikleriniz Kaydedildi</a>

	</form>
</section>
<?php include "common/footer.php"; ?>
