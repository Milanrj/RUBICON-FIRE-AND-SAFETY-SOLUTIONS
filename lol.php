<!doctype html>
<html>
<head>
  <script src="validate.js"></script>
    <style>
        label{
            font-size: 1em;
            display: block;
            margin-bottom: 5px;
        }
        input,textarea{
            display: block;
            border-radius: 5px;
            background-color: #fcfcfc !important;
            border: 2px solid #aaaaaa;
            width: 250px !important;
            padding: 10px;
        }    
        div.form-group{
            margin:10px 0 10px 0;
            width: 100%;
        }
        button{
            all:unset;
            text-align: center;
            padding: 10px;
            color: #fff;
            cursor: pointer;
            background-color:#ff2600;
            width:250px;
        }
        .form{
            padding:20px;
            border:1px solid #ddd;
            width:300px;
        }
    </style>
</head> 
<body>


<form action="reg_process.php" class="form" id="form_register" method="post">
    <div class="form-group">
        <label>Username</label>
        <input octavalidate="R,USERNAME" id="inp_unme" type="text" placeholder="Your Username">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input octavalidate="R,EMAIL" id="inp_email" type="email" placeholder="Your Email Address">
    </div>
    <div class="form-group">
        <label>Password</label>
        <input octavalidate="R,PASS" id="inp_pwd" type="password" placeholder="Your Password">
    </div>
    <div class="form-group">
        <label>Re-enter Password</label>
        <input octavalidate="R" id="inp_pwd2" type="password" placeholder="Re-enter your Password">
    </div>
    <div class="form-group">
        <button type="submit">REGISTER</button>
    </div>
</form>
<script>
//create new instance of octavalidate
let formVal = new octaValidate('form_register');
//attach event listener
document.querySelector('#form_register').addEventListener('submit', function(e){
    //prevent default action
    e.preventDefault();
    //invoke the validate method
    if(formVal.validate() === true){
        //validation successful
        alert('form has been submitted');
        document.querySelector('#form_register').submit();
    }else{
        //validation failed
    }
})
</script>
</body>
</html>