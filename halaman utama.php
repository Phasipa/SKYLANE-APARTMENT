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
	<div class="cards-catalog">
				<div class="card-catalog">
					<?php
					include 'koneksi.php';
					$sql = "SELECT * FROM tb_catalog";
					$result = mysqli_query($koneksi, $sql);
					if (mysqli_num_rows($result) == 0) {
						echo "
						<h3 style='text-align: center; color: red;'>Data Kosong</h3>
				";
					}
					while ($data = mysqli_fetch_assoc($result)) {
						echo "
						<div class='card'>
							<div class='card-image'>
								<img src='img_catalog/$data[photo]' alt='tidak ada gambar' />
							</div>
							<div class='card-content'>
								<h5>$data[catalog]</h5>
								<p class='description'>$data[description]</p>
								<p class='price'> $data[price] </p>
								<button class='btn_belanja' type='submit' onclick='bukaModal(\"id=$data[id]\")'>Beli</button>
							</div>
					</div>
                  ";
					}
					?>
				</div>
			</div>
			<!--  Modal -->
			<div id="myModal" class="modal-container" onclick="tutupModal()">
				<div class="modal-dialog" onclick="event.stopPropagation()">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title " style="color:  #ffb72b;">Formulit Pembayaran</h1>
							<button type="button" class="btn-close" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<form>
								<input type="hidden" name="catalog_id" id="catalog_id" value="">
								<input type="hidden" name="catalog_name" id="catalog_name" value="">
								<input type="hidden" name="price" id="price" value="">
								<div class="form-group">
									<label class="labelmodal" for="recipient-name" class="col-form-label">Nama :</label>
									<input class="inputdata" type="text" class="form-control" id="recipient-name">
								</div>
								<div class="form-group">
									<label class="labelmodal" for="handphone" class="col-form-label">No. Hp :</label>
									<input class="inputdata" type="text" class="form-control" id="handphone">
								</div>
								<div class="form-group">
									<label class="labelmodal" for="alamat-text" class="col-form-label">Alamat:</label>
									<textarea class="inputalamat" class="form-control" id="alamat-text"></textarea>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" onclick="tutupModal()">Keluar</button>
							<button type="button" class="btn btn-yellow" onclick="bukaModal2()">Lanjutkan</button>
						</div>
					</div>
				</div>
			</div>
			<!-- Modal 2 -->
			<div id="myModal2" class="modal-container" onclick="tutupModal2()">
				<div class="modal-dialog" onclick="event.stopPropagation()">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title" style="color:  #ffb72b;">Data Transaksi</h1>
							<button type="button" class="btn-close" aria-label="Close" onclick="tutupModal2()"></button>
						</div>
						<form action="transaction/transaction-proses.php" method="post">
							<div class="modal-body">
								<h4> Kategori</h4>
								<div class="form-group">
									<label class="labelmodal" for="detail-kategori" class="col-form-label">Kategori :</label>
									<input class="inputdata" type="text" name="detail-kategori" class="form-control" id="detail-kategori" readonly>
								</div>
								<div class="form-group">
									<label class="labelmodal" for="detail-harga" class="col-form-label">Harga :</label>
									<input class="inputdata" type="text" name="detail-harga" class="form-control" id="detail-harga" readonly>
								</div>
								<h4>Penyewa</h4>
								<div class="form-group">
									<label class="labelmodal" for="detail-nama" class="col-form-label">Nama :</label>
									<input class="inputdata" name="detail-nama" type="text" class="form-control" id="detail-nama" readonly>
								</div>
								<div class="form-group">
									<label class="labelmodal" for="detail-nomorhp" class="col-form-label">No. Hp :</label>
									<input class="inputdata" name="detail-nomor" type="text" class="form-control" id="detail-nomorhp" readonly>
								</div>
								<div class="form-group">
									<label class="labelmodal" for="detail-alamat" class="col-form-label">Alamat:</label>
									<textarea class="inputalamat" name="detail-alamat" class="form-control" id="detail-alamat" readonly></textarea>
								</div>
								<input type="hidden" name="detail-status" value="succes">

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" onclick="kembaliKeModalPertama()">Kembali</button>
								<button name="simpan" type="submit" class="btn btn-yellow" onclick="lakukanPembayaran()">Lakukan
									Pembayaran</button>
							</div>
						</form>
					</div>
				</div>
			</div>

		</main>
	</div>
	<script>
		var selectedcatalogId;
		// Fungsi Modal
		function bukaModal(catalogId) {
			console.log('catalogId:', catalogId);
			selectedcatalogId = catalogId;
			var xhr = new XMLHttpRequest();
			xhr.onreadystatechange = function() {
				if (xhr.readyState == 4 && xhr.status == 200) {
					var catalogData = JSON.parse(xhr.responseText);

					// Perbarui input tersembunyi
					document.getElementById('catalog_id').value = catalogId;
					document.getElementById('catalog_name').value = catalogData.catalog;
					document.getElementById('price').value = catalogData.price;
					document.getElementById("myModal").style.display = "flex";
				}
			};
			xhr.open("GET", "get_kategori.php?" + catalogId, true);
			xhr.send();
		}

		function tutupModal() {
			document.getElementById("myModal").style.display = "none";
		}

		function tutupModal2() {
			document.getElementById("myModal2").style.display = "none";
		}

		function bukaModal2() {
			tutupModal(); // Tutup modal pertama
			document.getElementById("myModal2").style.display = "flex";

			var nama = document.getElementById("recipient-name").value;
			var nomorhp = document.getElementById("handphone").value;
			var alamat = document.getElementById("alamat-text").value;
			// kategori
			var kategori = document.getElementById("catalog_name").value;
			var harga = document.getElementById("price").value;

			document.getElementById("detail-nama").value = nama;
			document.getElementById("detail-nomorhp").value = nomorhp;
			document.getElementById("detail-alamat").value = alamat;
			document.getElementById("detail-kategori").value = kategori;
			document.getElementById("detail-harga").value = harga;

		}

		function kembaliKeModalPertama() {
			tutupModal2();
			bukaModal();
		}

		function lakukanPembayaran() {
			alert("Pembayaran berhasil!");
			tutupModal2();
			document.getElementById("recipient-name").value = "";
			document.getElementById("handphone").value = "";
			document.getElementById("alamat-text").value = "";
		}
	</script>	
  <footer>
    <h4>&copy; SKYLANE APARTEMENT</h4>
  </footer>
</div>
<script src="javascript/script.js"></script>
</body>
</html>
