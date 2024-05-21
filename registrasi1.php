<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registrasi</title>
  <link rel="icon" href="pict/logo.png" />
  <link rel="stylesheet" href="css/style.css" />
<body>
  <div class="container">
	<header>
   	  <nav>
	    <div class="logo">
			<img src="pict/logo.png" alt="" style="width: 70px;"/>
		   </div>
		   <input type="checkbox" id="click" />
		   <label for="click" class="menu-btn">
			  <i class="fas fa-bars"></i>
		   </label>
		   <ul>
		  <li><a href="halaman utama.php">Home</a></li>
		  <li><a href="#">Catalog</a></li>
		  <li><a href="login1.php" class="btn_login">Login</a></li>
		</ul>
	   </nav>
      </header>
	<main>
  	  <div class="center">
	     <div class="form-login">
		  <h3>Registrasi</h3>
		  <form action="proses-registrasi.php" method="post">
		    <input class="input" type="email" name="email" placeholder="Email" />
		    <input class="input" type="text" name="username" placeholder="Username"/>
		    <input class="input" type="password" name="password"  placeholder="Password" />
  		    <button type="submit" class="btn_login" name="registrasi1" id="registrasi1"> Registrasi </button>
		  </form>
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
</html>
