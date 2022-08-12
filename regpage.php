<html>
    <head>
        <script src="validate.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="validate.js"></script>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="login.css"> 
    </head>
    <body>
        <div id="page" style="margin-top:1%">
        <div class="form-box">
        <form action="reg_process.php" class="form" id="form_register" method="post">
            <h3 style="padding-bottom:5px">WELCOME</h3>
            <h4>SIGN UP TO RUBICON FIRE AND SAFETY</h4>
            <select class="form-select" aria-label="Default select example" name="role">
                <option selected>Select Role</option>
                <option value="1">Customer</option>
                <option value="2">Worker</option>
  
            </select>
        <div class="group">
            <label for="fname">Name</label><br>
            <input type="text" id="name" name="name" class="logindetails" placeholder="Enter your name" octavalidate="R,ALPHA_SPACES"><br>
        </div>
        <div class="group">
            <label for="number">Phone Number</label><br>
            <input type="text" id="phone" name="phone" class="logindetails" placeholder="Enter your number" minlength="10" maxlength="10" octavalidate="R,DIGIT"><br>
            </div>
            <div class="group">    
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" class="logindetails" placeholder="Enter your email" octavalidate="R,EMAIL"><br>
            </div>
            <div class="group">
            <label for="pass">Password</label><br>
            <input type="password" id="password" name="password" class="logindetails" placeholder="Enter a password" octavalidate="R,PWD"><br>
            </div>
            <div class="group">
            <label for="conpass">Confirm Password</label><br>
            
            <input type="password" id="conpass" name="conpass" class="logindetails" placeholder="Re-enter the password" octavalidate="R,PWD" equalto="password" ov-equalto:msg="Both passwords do not match"><br>
            </div> 
            <div class="group">
            <input type="submit" value="SIGN UP" class="btn" name="submit"  ><br>
        </div>
            <p><b>Already a member? <u><a href="login.php">SIGN IN</b></a></u></p>
</form>
        </div>
        <div class="form-box">
			<img style="margin-top:80%" src="logo.png" alt="rubicon logo">
		</div>
    </div>
<script>
    //create new instance of the function
const myForm = new octaValidate('form_register');
//listen for submit event
document.getElementById('form_register').addEventListener('submit', function(e){
   
    //invoke the method
    if(myForm.validate() === true)
    { 
      //validation successful, process form data here
    } else {
        e.preventDefault();
        return false;
    }
})
</script>
    </body>
</html>