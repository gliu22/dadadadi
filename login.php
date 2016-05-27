<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link type="text/css" rel="stylesheet" href="styles/reset.css">
<link type="text/css" rel="stylesheet" href="styles/main.css">
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->
</head>

<body>
<div class="headerBar">
	<div class="logoBar login_logo">
		<div class="comWidth">
			<div class="logo fl">
				<a href="#"><img src="" alt="logo here"></a>
			</div>
			<h3 class="welcome_title">This is a login page</h3>
		</div>
	</div>
</div>

<div class="loginBox">
	<div class="login_cont">
	<form method="post" action="doAction.php?act=login" >
		<ul class="login">
			<li class="l_tit">Email</li>
			<li class="mb_10"><input type="text"  name="account" placeholder="Email here" class="login_input user_icon"></li>
			<li class="l_tit">Password</li>
			<li class="mb_10"><input type="password" name="password" class="login_input user_icon"></li>
			<li><input type="submit" value="" class="login_btn"></li>
		</ul>
		</form>
		<div class="login_partners">
			<p class="l_tit">Partner</p>
			<ul class="login_list clearfix">
				<li><a href="#">QQ</a></li>
				<li><span>|</span></li>
				<li><a href="#">Google</a></li>
				<li><span>|</span></li>
				<li><a href="#">Facebook</a></li>
				<li><span>|</span></li>
				<li><a href="#">Twitter</a></li>
				<li><span>|</span></li>
				<li><a href="#">Linkedln</a></li>
			</ul>
		</div>
	</div>
	<a class="reg_link" href="#"></a>
</div>

<div class="hr_25"></div>
</body>
</html>
