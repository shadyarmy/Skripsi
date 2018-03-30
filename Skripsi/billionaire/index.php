<head>
  <meta charset="UTF-8">
  <title>Login | Billionaire Store</title>  
      <link rel="stylesheet" href="assets/css/login/style.css">  
</head>
<body>
  <hgroup>
    <img src="img/bs.JPEG" alt="bs">  
  </hgroup>
<form role = "form" action="cek_login.php" method="post">
  <div class="group">
    <input type="text" name="username"><span class="highlight"></span><span class="bar"></span>
    <label>Username</label>
  </div>
  <div class="group">
    <input type="password" name="password"><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
  </div>
  <button type="submit" class="button buttonBlue" name="login">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="assets/js/login/index.js"></script>

</body>
</html>
