<?php
session_start();
//http://crocro.com/pc/write/hide/chimarl09_01.html#02
//https://suin.io/475
//http://www.megasoft.co.jp/mifes/seiki/
//http://mt-soft.sakura.ne.jp/web_dl/common/reg.html

//$pattern ='/\A(?=.*?[a-z])(?=.*?\d)(?=.*?[!-\/:-@[-`{-~])[!-~]{8,100}+\z/i';
//$pattern ='/( |　)/i';//半角スペース、全角スペースが含んでるとマッチング
// $pattern ='/( |　)$/i';//半角スペースもしくは、全角スペース RTrim
//$pattern ='/^[0-9]+$/i';//半角スペースもしくは、全角スペース RTrim 数字の入力で省略化
//$pattern ='/^[0-9]*$/i';//数字の必須入力
//$pattern ='/^0$/i';//数字の必須入力 0
$pattern ='/\./i';


print_r($pattern."<br>");

if(isset($_POST['email'])){
	print_r($_POST['email']);
	if(preg_match($pattern,$_POST['email']))
	{
		echo "<b><span style=color:red;>Match!</span></b>";
	}
	else
	{
		echo "<b>Not Match</>";
	
	}	
} 
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="./js/jquery-1.11.2.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<link href="./bootstrap3.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="./bootstrap3.3.1/js/bootstrap.min.js"></script>
        <style>
            div {
                /*border: 1px solid red;*/
            }
        </style>
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!--
<link rel="stylesheet" href="./Css/com/Wrapper.css" type="text/css">
-->
<style>
/*必須チェック*/
.blur { color: black; background-color:white; }
.focus { color: black;  background-color:LightPink; }
</style>
<script>
</script>

<script>

</script>
<style>
.lbl{
	/*
	width:400px;

	background-color:aqua;
	*/
}
.txt{
	/*
	background-color:aqua;
	*/
}
*/
</style>
<title>Login</title>
</head>
<body>
<div class="container">
	<div class="container">
		<header id="header">
			<div class="row">
				<div class="col-sm-3 hidden-xs" style="/*background-color:gray;*/">
				&nbsp;　
				</div>
				<div class="col-sm-6 col-xs-12" style="/*background-color:green;*/">
					<!--
					<h1>半角 英数字 記号をそれぞれ1種類以上含む8文字以上100文字以下の正規表現</h1>
					-->
				</div>
				<div class="col-sm-3  hidden-xs"  style="/*background-color:orange;*/">
				&nbsp;　
				</div>
			</div>
		</header>

	</div>
	<div class="container">
		<form id="frmInput" name="frmInput" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<div class="container">
			<div class="form-group has-error">
					<div class="col-sm-3"></div>
					<div id="msg" class="msg　 col-sm-7" style="">
						<?php if(isset($_SESSION["error"])) :?>
							<ul class="msg " style="list-style:none;padding-left:0px;" >
								<?php foreach($_SESSION["msg"] as $msg) :?>
										<li class="form-control"><?php  echo $msg; ?></li>
								<?php endforeach; ?>
							</ul>
						<!--
							<?php foreach($_SESSION["msg"] as $msg) :?>
							<p class="form-control">
								<?php  echo $msg; ?>
							</p>
							<?php endforeach; ?>
						-->
						<?php endif; ?>
					</div>
					<div  class="col-sm-2"></div>
			</div>
		</div>
		<div class="container">

		<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-2">
					<label for="txtEmail"  class="lbl" >メールアドレス</label>
				</div>
				<div  class="col-sm-7">
					<input id="txtEmail"  class="txt" name="email" type="text" id="email"  placeholder="email" value="<?php echo empty($_SESSION["email"]) ? "" : $_SESSION["email"] ; ?>"/>
				</div>
		</div>

<!-- 			<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-2">
					<label for="txtPass" class="lbl" >パスワード</label>
				</div>
				<div   class="col-sm-7">
					<input id="txtPass"  class="txt" name="password" type="password" id="password"   placeholder="password" size="35"  value="<?php echo empty($_SESSION["password"]) ? "" : $_SESSION["password"] ; ?>" />
				</div>
			</div> -->
			<div class="row">
				<div class="col-sm-3" style="/*background-color:red;*/" >
				</div>
				<div class="col-sm-9"  style="/*background-color:lime;*/" >
					<div class="btn-group">
						<input id="login"  type="submit" value="ログイン" class="btn btn-info"  />
						<a href="./form_user.php?mode=insert" class="btn btn-default"  >新規登録はこちら</a>
						<a href="./form_pass_question.php" class="btn btn-default" >パスワードを忘れた？</a>

					</div>
					<a href="https://www.facebook.com/hiroshibook">Prodced by Hiroshi Igarashi</a>

				</div>

		</form>
	</div>
</div>
</body>
</html>
