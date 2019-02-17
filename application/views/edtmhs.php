<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Edit Data Mahasiswa</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
	Medigo Template
	http://www.templatemo.com/preview/templatemo_460_medigo
    -->
    
	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/";?>bootstrap/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/misc.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/";?>css/blue-scheme.css">
	
	<!-- JavaScripts -->
	<script src="<?php echo base_url()."assets/";?>js/jquery-1.10.2.min.js"></script>
	<script src="<?php echo base_url()."assets/";?>js/jquery-migrate-1.2.1.min.js"></script>

	<link rel="shortcut icon" href="" type="image/x-icon" />

</head>
<body>
	<div class="responsive_menu">
        <ul class="main_menu">
       <li class="active"><a href="<?php echo base_url(); ?>index.php/welcome/home">Home</a></li>
					            <li><a href="#">KKLP</a>
					            <ul>
					            		<li><a href="<?php echo base_url(); ?>index.php/Lihat/index">Daftar Mahasiswa</a></li>
					            		<li><a href="<?php echo base_url(); ?>index.php/Lihatkklp/index">Daftar KKLP</a></li>
					            		<?php if ($this->session->userdata('username') == 'admin') {
					            			echo '<li><a href="'. base_url(). 'index.php/Suratpeng/index">Daftar Surat Pengantar dan Lembar Penilaian</a></li>';
					            		} else { echo '<li><a href="'. base_url(). 'index.php/input/index">Input Mahasiswa</a></li>', '<li><a href="'. base_url(). 'index.php/Daftar/index">Input Pengusulan KKLP</a></li>';}?>
					            		</ul>
					            </li>
            <li><a href="#">MENU</a>
									<ul>
										<li><a href="<?php echo base_url(); ?>index.php/welcome/about">About</a></li>
										<li><a href="<?php echo base_url(); ?>index.php/welcome/services">Services</a></li>
                                        <li><a href="<?php echo base_url(); ?>index.php/welcome/contact">Contact</a></li>
									</ul>
					            </li>
					  


					           	<li class="active"><a href="<?php echo base_url(); ?>index.php/input/login">LOGOUT/<?php echo $this->session->userdata('username') ?><span class="sr-only"></span></a></li>
			<!-- 
            <li><a href="archives.html">Archives</a></li>
            <li><a href="contact.html">Contact</a></li> -->
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->
<?php include 'header.php'; ?>
<section style="align-items: center;">
	<div class="container">
	<br><br><br><br><br>

         <h3>Form Input Data Mahasiswa </h3>
     <form action="<?php echo base_url(); ?>index.php/Input/do_update" method="POST">
       <div class="form-group">
         <label>NIM </label>
         <?php if ($this->session->userdata('username') == 'admin') {
					            			echo '<input type="text" name="nim" class="form-control" placeholder="" value="'. $nim. '" required>';
					            		} else { echo '<input type="text" readonly="" name="nim" class="form-control" placeholder="" value="'. $nim. '" required>';}?>
          </div>
         <div class="form-group">
           <label>Nama</label>
           <input type="text" name="nama" class="form-control" placeholder="" value="<?php echo $nama;?>" required>
         </div>


         <div class="form-group">
          <label>Program Studi</label>
          <select name="prodi" class="form-control">
             <option value="<?php echo $prodi;?>">--Pilihan--</option>
             <option name="prodi" value="S1 Teknik Informatika">Program Sarjana Teknik Informatika</option>
             <option name="prodi" value="S1 Sistem Informasi">Program Sarjana Sistem Informasi</option>
             <option name="prodi" value="D3 Teknik Informatika">Program Diploma Tiga Teknik Informatika</option>
             <option name="prodi" value="D3 Sistem Informasi">Program Diploma Tiga Sistem Informasi</option>
             </select>
          </div>

         <div class="form-group">
             <button type="submit" class="btn btn-primary">Simpan Data</button>
           </div>
       </form>

	</section> <!-- /.cta -->

	<section class="light-content services">
		<div class="container">
		</div> <!-- /.container -->
	</section> <!-- /.services -->

<?php include 'footer.php'; ?>

	<!-- Scripts -->
	<script src="<?php echo base_url()."assets/";?>js/min/plugins.min.js"></script>
	<script src="<?php echo base_url()."assets/";?>js/min/medigo-custom.min.js"></script>

</body>
</html>