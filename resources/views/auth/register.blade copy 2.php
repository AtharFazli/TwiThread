<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>
    Webleb
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="{{ asset("/landing/css/login.css") }}" />
</head>
<body style="display: flex; justify-content:center ; align-items: center;height: 100vh;overflow: hidden;">
    <div class="container">
      <form name="form1" class="box" method="post" action="{{ route('register') }}">
        @csrf
        <h4>Sign Up</span></h4>
        <h5>Sign Up your account.</h5>
        <input type="text" name="name" placeholder="Name" autocomplete="off" />
        <input type="email" name="email" placeholder="Email" autocomplete="off" />
        <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off" />
        <input type="password" name="password_confirmation" placeholder="Passsword" id="pwd" autocomplete="off" />
        <a href="#" class="forgetpass">Forget Password?</a>
        <button type="submit" class="btn1">Sign Up</button>
        <!-- <input type="submit" value="Sign in" class="btn1" /> -->
      </form>
    </div>
</body>
</html>
