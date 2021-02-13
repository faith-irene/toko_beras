

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="<?= base_url('assets'); ?>/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/bs4/css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/fa/css/all.css" >
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/login.css">
    <title>Bootstrap 4 Login/Register Form</title>
</head>
<body>
    <div id="logreg-forms">
        <form action="<?= base_url('auth'); ?>" method="post" class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <input type="text" id="inputEmail" name="username"  class="form-control" placeholder="Username" required="" autofocus="">
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
            
            <button class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            <a href="#" id="forgot_pswd">Forgot password?</a>
            <hr>
            <p>Don't have an account!</p> 
            <button type="button" class="btn btn-primary btn-block" onclick="document.location='<?= base_url('auth/regis'); ?>'"><i class="fas fa-user-plus"></i> Register</button>
            </form>
            
            <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            
            <!-- <form action="/signup/" class="form-signup">
                <div class="social-login">
                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign up with Facebook</span> </button>
                </div>
                <div class="social-login">
                    <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign up with Google+</span> </button>
                </div>
                
                <p style="text-align:center">OR</p>

                <input type="text" id="user-name" class="form-control" placeholder="Full name" required="" autofocus="">
                <input type="email" id="user-email" class="form-control" placeholder="Email address" required autofocus="">
                <input type="password" id="user-pass" class="form-control" placeholder="Password" required autofocus="">
                <input type="password" id="user-repeatpass" class="form-control" placeholder="Repeat Password" required autofocus="">

                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
            </form> -->
            <br>
            
    </div>
    <p style="text-align:center">
        <a href="http://bit.ly/2RjWFMfunction toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})g" target="_blank" style="color:black">By Artin</a>
    </p>
    <script src="<?= base_url('assets'); ?>/bs4/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/login.js"></script>
</body>
</html>
