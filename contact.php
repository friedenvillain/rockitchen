<html>
	<head>
		<title>德堡名廚</title>
		<meta charset="utf-8" />
		<LINK REL="SHORTCUT ICON" HREF="http://218.161.102.84/images/favicon.ico"><!-- logo -->
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="index.html" class="logo"><strong>德堡名廚</strong> <span  style="font-family:微軟正黑體; font-size:24px;">日本、台灣工藝</span></a>
						<nav>
							<a href="#menu">目錄 Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">首頁Home</a></li>
							<li><a href="Adanner.html">台灣 Made in Taiwan</a></li>					
							<li><a href="Takara.html">日本 Made in Japan</a></li>
							<li><a href="other.html">品牌特色 Charact</a></li>
							<li><a href="about.html">關於我們 About us</a></li>
							<li><a href="contact.html">聯絡我們 Contact us</a></li>
						</ul>
						<!-- <ul class="actions vertical">
							<li><a href="#" class="button special fit">Get Started</a></li>
							<li><a href="#" class="button fit">Log In</a></li>
						</ul> -->
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>親愛的客戶您好:</h1>
							</header>
								<!-- <span class="image">
									<img src="images/banner.jpg" alt="" />
								</span> -->
							<div class="content">
								<h3>若您有任何的問題歡迎聯繫我們。<br>Email與留言我們將於下一個工作天給予您回復。<br>也請您留下您的電話聯絡方式。 <br>
								若您需要緊急服務，歡迎來電，謝謝。</h3>
								<!-- <ul class="actions" align="right">
									<li><a href="#contact" class="button next scrolly">按此前往</a></li>
								</ul> -->
							</div>
						</div>
					</section>

				<!-- Contact -->
				<div id="main">			
					<section id="contact">	
						<div class="inner">
							<section>
								<form action="contact_finish.php" method="post" enctype="multipart/form-data">
									<div class="field half first">
										<label for="name" style="font-family:微軟正黑體; font-size:20px;">GMail 信箱</label>
										<input type="email" name="email" id="email" value="<?php echo $_COOKIE['Em']; ?>" />
									</div>
									<div class="field half">
										<label for="email" style="font-family:微軟正黑體; font-size:20px;">Password 密碼</label>
										<input type="password" name="password" id="password" />
									</div>
									<div align="right">
										<input type="checkbox" id="demo" name="demo">
										<label for="demo"  style="font-family:微軟正黑體; font-size:16px;" ><b>我不是機器人</b></label>
									</div>
									<div class="field">
										<label for="message" style="font-family:微軟正黑體; font-size:20px;">內容 Message</label>
										<textarea name="content" id="content" rows="9" placeholder="請告知我們如何稱呼您" value="<?php echo $_COOKIE['content']; ?>"></textarea>
									</div>
									<ul class="actions" align="right">
										<li><input type="reset" value="清除 Clear" /></li>
										<li><input  type="submit" value="發送 Send Message" class="special" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>信箱 Email</h3>
										<a href="#">1991rockitchen@gmail.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>電話 Phone</h3>
										<p>(07) 3363222<br />
										Fx (07) 3363223</p>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>地址 Address</h3>
										<p>高雄市 苓雅區 青年一路283號<br />
										No.283, Qingnian 1st Rd., Lingya Dist.<br />
										 Kaohsiung City, Taiwan (R.O.C.)</p>
									</div>
								</section>
							</section>
						</div>
					</section>
				</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<!-- <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li> -->
								<li><a href="https://zh-tw.facebook.com/%E5%BE%B7%E5%A0%A1%E5%90%8D%E5%BB%9A-1409005772734650/" target="_blank" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/rockitchen1991/" target="_blank" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
								<!-- <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li> -->
								<a href="contact.html">  商品內容以實際為主 ， 歡迎來電諮詢、預約參觀</a>
							</ul>
							<ul class="copyright">
								<li>&copy; 磐石廚飾有限公司</li>
								<li>Since 1991</li>
								<li>Designer: <a href="https://html5up.net">HTML5 UP</a></li>
								<li>editor: <a href="https://www.instagram.com/androwtien/">Andrew Tien</a></li>
								<li><a href="contact.html">07-3363222</a></li>
								<li><a href="contact.html">高雄市苓雅區青年一路283號</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src='https://www.google.com/recaptcha/api.js'></script>

	</body>
</html>