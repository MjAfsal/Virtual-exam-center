<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>

        html{
            height: 100%;
        }
    body {
margin: 0;
padding: 0%;
font-family: sans-serif;
background: linear-gradient( #141e30, #243b55);

}
.login-box{
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%,-50%);
    background: rgba(0,0,0,.5);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px;
}
.login-box h2{
    margin: 0 0 30px;
    padding: 0;
    color:  #fff;
    text-align: center;
}
.login-box .user-box{
    position: relative;
}
.login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
}

.login-box .user-box label{
position: absolute;
top: 0%;
left: 0%;
padding: 10px 0;
font-size: 16px;
color: #fff;
pointer-events: none;
transition: 5s;
}
.login-box .user-box input :focus ~ label,
.login-box .user-box input :valid ~ label{
    top: -20px;
    left: 0px;
    color: #03e9f4;
    font-size: 12px;
}

.login-box form a {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #03e9f4;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px;
}
.login-box a:hover {
    background: #03e9f4;
    border-radius: 5px;
    box-shadow: 0 0 5px #03e9f4,
                0 0 25px #03e9f4,
                0 0 50px #03e9f4,
                0 0 100px #03e9f4 ;
}

.login-box a span {
position: absolute;
display: block;
}

.login-box a span:nth-child(1){
    top: 0%;
    left: -100px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #03e9f4);
    animation: btn-anim1 1s linear infinite;
}
@keyframes btn-anim1{
0%{
    left: -100%;
}
50%,100% {
    left : 100%;
}
}

.login-box a span:nth-child(2){
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, #03e9f4);
    animation: btn-anim2 1s linear infinite;
    animation-delay: 25s;
}
@keyframes btn-anim2{
    0%{
        top:-100%;
    }
    50%,100%{
        top:100%;
    }
}
.login-box a span:nth-child(3){
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent,#03e9f4);
    animation: btn-anim3 1s linear infinite;
    animation-delay: .5s;
}
@keyframes btn-anim3 {
    0%{
        right:-100%;
    }
    50%,100%{
        right:100%;
    }
}
.login-box a span:nth-child(4){
    bottom: -100px;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent, #03e9f4);
    animation: btn-anim4 1s linear infinite;
    animation-delay: .75s;
}

@keyframes .btn-anim4 {
    0%{
        bottom: -100%;
    }
    50%,100%{
        bottom:100%:
    }
}




.bg1-image{
background-image: url("bg1.jpg");
background-color: #cccccc;
height: 600px;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
position: relative;
}
 
.bg1-text {
text-align: center;
position:absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
color: white;
}
.btn-primary{
    background-color: black;
}
    


    </style>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

</head>
<link rel="stylesheet" href="bootstrap.css">
<body>
        
    
   <!-- <div class="bg1-image"> -->

   
    <div class="bg1-text">
        


    <div class="login-box">
        <h2 style="font: size 50px;">Virtual Examination Center</h2>
        <h2>Login Page</h2>
        <form action="login_check.php" method="post">
            <div class="user-box">
            <input type="text" name="username" autofocus="" autocapitalize="none" autocomplete="" required="" id="" placeholder="User Name"> <br>
                
            </div>
            <div class="user-box">
            <input type="password" name="password" autocomplete="current-password" required="1234" id="id_password" placeholder="Password"> 
            <i class="far fa-eye"  id="togglePassword" style="margin-left: -30px; cursor: pointer;" aria-colcount="black" ></i> <br>

            </div>

            <div>
                <input type="submit" class="btn btn-primary"role="button" name="submit"placeholder="Submit" value="Login" >
            </div>

</div>
</form>
    </div>
   </div>


<script src="bootstrap.js">
    
</script>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
                

</script>
<script src="bootstrap.js">

</script>
</body>
</html>