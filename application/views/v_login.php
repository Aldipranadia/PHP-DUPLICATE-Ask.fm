<!doctype html>
<html>
<head>
    <title>Log in | ASKfm</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/login.css">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/icon/icon.png">
</head>
<body>
	<div class="top">
        <a href="<?php echo base_url().'index.php'?>"><img src="<?php echo base_url() ?>assets/icon/ask.png"></a>
        <p><b>Log in</b></p>
        <button class="daftar" style="cursor:pointer"><b>Sign up</b></button>
    </div>
    
    <div class="mid">
        <form method="POST" action="<?php echo base_url();?>/login/proses_login">
            <input type="text" name="username" class="form_user" placeholder="Username or e-mail" autofocus></br>
            <input type="password" name="password" class="form_pass" placeholder="Password">
            <input type="submit" class="login" style="cursor:pointer" value="Log in"></br>
            <input type="checkbox" name="check" class="check" checked/><label for="check" class="checkInput">Remember me</label>
            <a class="forgotPass" href="https://www.youtube.com/">Forgot password?</a>
            <img src="<?php echo base_url() ?>assets/icon/social.png">
		</form>
    </div>
</body>
</html>
