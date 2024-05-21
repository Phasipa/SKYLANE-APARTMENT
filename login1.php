<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="icon" href="pict/logo.png" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
	href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
			rel="stylesheet"
		/>
  <link
	rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="container">
     <header>
	  <nav>
	    <div class="logo">
		 <img src="pict/logo.png" alt="" style="width: 70px;" />
	    </div>
	    <input type="checkbox" id="click" />
	    <label for="click" class="menu-btn">
	       <i class="fas fa-bars"></i>
	    </label>
	    <ul>
		<li><a href="halaman utama.php">Home</a></li>
		<li><a href="#">Catalog</a></li>

	    </ul>
        </nav>
	</header>
	<main>
	  <div class="center">
	    <div class="form-login">
		 <h3>Login</h3>
		 <form action="login-proses.php" method="post">
		   <input class="input" type="text" name="username" id="username" placeholder="Username" />
	         <input class="input" type="password" name="password" id="password" placeholder="Password" />
			<button type="submit" class="btn_login" name="login" id="login"> Login </button>
		 </form>
		 <a href="registrasi1.php" class="link-registrasi">
                  Registrasi Disini
		</a>
	    </div>
	  </div>
	</main>
	<footer>
    <center>
	   <h4>&copy; SKYLANE APARTEMENT</h4>
    </center>
      </footer>
   </div>
</body>
<script src="javascript/login.js"></script>
</html>
