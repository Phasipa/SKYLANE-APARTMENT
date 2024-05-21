<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <link rel="icon" href="../assets/icon.png" />
   <link rel="stylesheet" href="../css/admin.css" />
   <!-- Boxicons CDN Link -->
   <link
	href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>SKYLANE APARTEMENT Admin | Transaction</title>
</head>
   <body>
	<div class="sidebar">
	   <div class="logo-details">
		<i class="bx bx-catalog"></i>
		<span class="logo_name">SKYLANE APARTEMENT</span>
	   </div>
	   <ul class="nav-links">
		<li>
		   <a href="../admin.php" class="active">
		      <i class="bx bx-grid-alt"></i>
			<span class="links_name">Dashboard</span>
		   </a>
		</li>
		<li>
		   <a href="../catalog/catalog.php">
			<i class="bx bx-box"></i>
			<span class="links_name">Catalog</span>
		   </a>
		</li>
		<li>
		   <a href="../transaction/transaction.php">
			<i class="bx bx-list-ul"></i>
			<span class="links_name">Transaction</span>
	         </a>
		</li>
		<li>
		   <a href="#">
			<i class="bx bx-log-out"></i>
			<span class="links_name">Log out</span>
		   </a>
		</li>
	   </ul>
	</div>
	<section class="home-section">
	   <nav>
		<div class="sidebar-button">
		   <i class="bx bx-menu sidebarBtn"></i>
		</div>
		<div class="profile-details">
		   <span class="admin_name">SKYLANE APARTEMENT Admin</span>
		</div>
	   </nav>
	   <div class="home-content">
		<h3>Trasaction</h3>
		<button type="button" class="btn btn-tambah">
		   <a href="transaction-entry.html">Tambah Data</a>
		</button>
		<table class="table-data">
		   <thead>
			<tr>
			  <th style="width: 20%">Nama</th>
			  <th>Jenis Apartemen</th>
			  <th style="width: 20%">Harga</th>
			  <th style="width: 20%">Tanggal Sewa</th>
              <th style="width: 20%">Lama Sewa</th>
              <th style="width: 20%">Tanggal Habis Masa Sewa</th>
			  <th>Action</th>
			</tr>
		   </thead>
		   <tbody>
			<tr>
			   <td>Lalu Hari</td>
			   <td>Penthouse</td>
			   <td>41,5 Juta</td>
			   <td>09-06-2023</td>
               <td>5 Tahun</td>
               <td>09-06-2028</td>
			   <td><a href="">Edit</a> | <a href="">Hapus</a></td>
			</tr>
		   </tbody>
		</table>
	   </div>
	</section>
   <script>
	let sidebar = document.querySelector(".sidebar");
	let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
		 sidebar.classList.toggle("active");
		  if (sidebar.classList.contains("active")) {
					sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
		  } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
			};
   </script>
</body>
</html>
