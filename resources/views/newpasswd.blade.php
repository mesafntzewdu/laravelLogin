<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Set new password</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="{{ asset('asset/css/style.css')}}">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Reset password</header>

      <form action="" method="post">
        <input type="password" name="passwd" placeholder="Enter new password">
        <input type="password" name="cpasswd" placeholder="Confirm new password">
        <input type="button" class="button" value="Submit" >
      </form>

      </div>
    </div>
  </div>
</body>
</html>
