<!DOCTYPE html>
<html lang="en">
  <head>
	<link rel="icon" href="pict/logo.png" />
	<title>Home</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />	
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
	<link
		rel="stylesheet"			
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
	<header>
        <nav>
	    <div class="logo">
		<img src="pict/logo.png" alt="" style="width: 50px;" />
          </div>
	    <input type="checkbox" id="click" />
	    <label for="click" class="menu-btn">
	      <i class="fas fa-bars"></i>
	    </label>
	    <ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">Catalog</a></li>
		<li><a href="login1.php" class="btn_login">Login</a></li>
          </ul>
	  </nav>
	</header>
	<body>
	<main>
        <div class="sky">
	     <div class="sky-text">
		 <h1>WELCOME TO SKYLANE APARTEMENT</h1>
         <h2>Find Your New Apartement, Make It Home</h2>
		 <p> Your cozy apartement is waiting for you. Find your perfect space now</p>
		<button type="button" class="btn_getStarted">Get Started</button>
	     </div>
           <div class="sky-img">
	       <img src="pict/sky.png" alt="" style="width: 200px; margin-left: 50px;" />
           </div>
	  </div>
  </main>
</main>
	<div class="slides">
		<div class="slide">
		<img src="pict/luxury.png" alt="">
	</div>
	<div class="slide">
		<img src="pict/studio.png" alt="">
	</div>
	<div class="slide">
		<img src="pict/family.png" alt="">
	</div>
		<div class="navigation">
		<a clasaxs = "prev" onclick = "plusSlides(-1)">&#10094;</a>
		<a class = "next" onclick = "plusSlides(-1)">&#10095;</a>
	</div>
	</div>
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);
		function plusSlides(n) {
	showSlides(slideIndex += n);
	}
		function showSlides(n) {
		var i;
		var slides = document.getElementsByClassName("slide");
			if (n > slides.length)
			{
				slideIndex = 1;
			}
			if (n < 1)	
			{
				slideIndex = slides.length
			}
			for (i = 0; i < slides.length; i++)
			{
				slides[i].style.display = "none";
			}
				slides[slideIndex-1].style.display = "block";
		}
	</script>	
  <footer>
    <h4>&copy; SKYLANE APARTEMENT</h4>
  </footer>
</div>
<script src="javascript/script.js"></script>
</body>
</html>