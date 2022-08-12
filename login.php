<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
		<div id="page">
        <div class="form-box">
			<h3>WELCOME</h3>
            <h4>SIGN IN RUBICON FIRE AND SAFETY</h4>
            <?php
                    // Your message code
                    if(isset($_SESSION['message']))
                    {
                        echo '<h4 class="alert alert-warning">'.$_SESSION['message'].'</h4>';
                        unset($_SESSION['message']);
                    } // Your message code
                ?>
            <form action="login_process.php" method="post" id="form2">
				<label for="uname">Email</label><br><br>
                <input type="email" id="uname" name="email" class="logindetails" placeholder="Enter your email"><br><br><br>
				<label for="pass">Password</label><br><br>
                <input type="password" id="pass" name="pass" class="logindetails" placeholder="Enter your password"><br>
                <p >Forgot password?</p>
                <input type="submit" value="SIGN IN" class="btn" name="submit"><br><br>
                <p style="margin-left: 155px;"><b>New to Rubicon? <a href="regpage.php">SIGN UP HERE</a></b></p>
            </form>
        </div>
		<div class="form-box">
			<img src="logo.png" alt="rubicon logo">
		</div>
	</div>
    </body>
</html>