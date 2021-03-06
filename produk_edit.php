<?php 
    include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan Perhitungan Penjualan "Toko Dinar"</title>
  <link rel="shortcut icon" href="assets/dist/img/icon.png" type="image/x-icon" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
</head>

<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="index.php" class="logo">
      <span class="logo-mini"><b>A</b>PS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Aplikasi</b>PPAM</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dist/img/icon.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>PPAM</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Mobile</a>
        </div>
      </div>

      <ul class="sidebar-menu">
        <li class="header">MENU</li>
         <li class="treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Beranda</span>
            <span class="pull-right-container">
            </span>
          </a>
        <a href="tabelProduk.php">
			<i class="fa fa-dashboard"></i> <span>Daftar Produk</span> <br/>			
            <span class="pull-right-container">
            </span>
        </a>   		  
		<a href="input.php">
			<i class="fa fa-dashboard"></i> <span>Transaksi</span> <br/>			
            <span class="pull-right-container">
            </span>
        </a>   
        </li>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Edit Produk "Toko Dinar"
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Selamat datang</li>
      </ol>
    </section>


    <section class="content">
      <div class="row">
        <div class="col-md-6">
          	<div class="box box-primary">
	            <div class="box-header with-border">
	           
	            </div>
	            <form role="form" method="post" action="produk_edit_simpan.php">
	              <div class="box-body">
					<?php
						$id_produk = $_GET["id_produk"] ;
						$sql_cek = "select * from produk where id_produk = '$id_produk'";
						$hasil = mysqli_query($kon, $sql_cek);
						if(!$hasil) die("Gagal query..");

						$data=mysqli_fetch_array($hasil);
						$nama_produk= $data["nama_produk"];
						$harga_produk= $data["harga_produk"];
						$jumlah_produk= $data["jumlah_produk"];
					?>
							<div class ="table-responsive" >
                                    <table class="table table-hover">
                                        <center>
										<input type="hidden" name="id_produk" value="<?php echo $id_produk;?>" />
											<tr>
												<td>Nama Produk</td>
												<td><input type="text" class="form-control" name="nama_produk" value="<?php echo $nama_produk;?>" /></td>
											</tr>
											
											<tr>
												<td>Harga Produk</td>
												<td><input type="text" class="form-control" name="harga_produk" value="<?php echo $harga_produk;?>" /></td>
											</tr>
											
											<tr>
												<td>Jumlah Produk</td>
												<td><input type="text" class="form-control" name="jumlah_produk" value="<?php echo $jumlah_produk;?>" /></td>
											</tr>

											<tr>
												<td colspan="2" align="center">
													<input type="submit" class="btn btn-primary" value="Simpan" name="proses" />
													<input type="reset" class="btn btn-primary" value="Reset" name="reset" />
												</td>
											</tr>
										</center>
                                    </table> 
									</div>
	              	<div class="form-group">
	              	</div>
	              </div>
	            </form>
          	</div>
        </div>
      </div>
    </section>
  </div>
 

  <footer class="main-footer">
 <div class="pull-right hidden-xs">
    <b>Kelompok :</b> Ummah, April, Riska
    </div>
    Copyright &copy; 2018 <a href="https://drive.google.com/drive/folders/1N9rYyzJdSttKNzSzBzxOl9_rWOF8Ax-F?ogsrc=32/" target="_blank" title="Link Penjualan"><strong>PPAM</strong></a>
  </footer>


<script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/fastclick/fastclick.js"></script>
<script src="assets/dist/js/app.min.js"></script>
<script src="assets/dist/js/demo.js"></script>
</body>
</html>