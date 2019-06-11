<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SIGN UP</title>
    <script
  src="https://code.jquery.com/jquery-3.3.1.js"
   ></script>
    <link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>
  	<div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>

			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>

		<div class="register-info-box">
			<h2>Don't have an account?</h2>

			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>

		<div class="white-panel">
			<div class="login-show">
        <form name="login" id="login-form" method="post" action="log.php">
          <h2>LOGIN</h2>
          <input type="text" name="log-name" id="log-name" placeholder="Name">
          <span id="error1" class="error"></span>
          <input type="password" name="log-psw" id="log-psw" placeholder="Password">
          <span id="error2" class="error"></span><br />
          <input type="hidden" name="sign_btn" value="Login" />
          <input type="submit" id="login-form-btn">
          <a href="#">Forgot password?</a>
        </form>

			</div>
			<div class="register-show">
        <form name="register" onsubmit="return validaterej()" method="post" action="register.php">
          <h2>REGISTER</h2>
          <input type="text" name="rej-name" id="rej-name" placeholder="User Name"  />
          <span id="error3" class="error"></span><br />
  				<input type="email" name="rej-email" id="rej-email" placeholder="Email"  />
          <span id="error4" class="error"></span><br />
  				<input type="password" name="rej-psw1" id="rej-psw1" placeholder="Password">
          <span id="error5" class="error"></span><br />
  				<input type="password" name="rej-psw2" id="rej-psw2" placeholder="Confirm Password">
          <span id="error6" class="error"></span><br />
  				<input type="submit" name="register_btn" value="Register">
        </form>

			</div>
		</div>
	</div>
  <script>
    $(document).ready(function(){
      //onsubmit="return validatelog()"
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');

    $('#login-form-btn').on('click', function(event){
        event.preventDefault();
        if(validatelog())
        {
          $('#login-form').submit();
        }
    });
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut();
        $('.login-info-box').fadeIn();

        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');

    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();

        $('.white-panel').removeClass('right-log');

        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
function validatelog() {
  var lname = $("#log-name").val();
  var lpsw = $("#log-psw").val();
  var error = 0;
  if (lname == "") {
    $('#error1').html("  Username must be filled out");
    error = 1;
  }
  else
  {
    $('#error1').html('');
  }
  if (lpsw == "") {
    $('#error2').html("  password must be filled out");
    error = 1;
  }
  else{
    $('#error2').html();
  }
  if(error == 1)
  {
      return false;
  }
  return true;
}
function validaterej() {
  var rname = $("#rej-name").val();
    var error = 0;
  if (rname == "") {
      $('#error3').html("Username must be filled out");
      error = 1;
    }
    else
    {
      $('#error3').html('');
  }
  var remail = $("#rej-email").val();
  if (remail == "") {
    $('#error4').html(" email must be filled out");
    error = 1;
  }
  else
  {
    $('#error4').html('');
  }
  var rpsw = $("#rej-psw1").val();
  if (rpsw == "") {
    $('#error5').html(" password must be filled out");
    error = 1;
  }
  else
  {
    $('#error5').html('');
  }
  var cpsw = $("#rej-psw2").val();
  if (cpsw == "") {
    $('#error6').html(" conferm password must be filled out");
    error = 1;
  }
  else
  {
    $('#error6').html('');
  }
  if (rpsw != cpsw){
    alert(" 2 password dose not match");
  }
  if(error == 1)
  {
      return false;
  }
}

</script>
</body>
</html>
