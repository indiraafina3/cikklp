<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Input Data Mahasiswa</title>
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
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/misc.css">
	<link rel="stylesheet" href="css/blue-scheme.css">
	
	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>

	<link rel="shortcut icon" href="" type="image/x-icon" />

</head>
<body>
	<div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Menu</a>
					            	<ul>
					            		<li><a href="inputmhs.php">1. Input Nama Mahasiswa Pengusulan KKLP</a></li>
					            		<li><a href="project-slideshow.php">2. Daftar Nama Mahasiswa KKLP</a></li>
					            		<li><a href="portfolio.html">3. Form Pengusulan KKLP</a></li>
					            		<li><a href="project-slideshow.html">4. Daftar Riwayat Pengusulan KKLP</a></li>
					            	</ul>
					            </li>
            <li><a href="#">KKLP</a>
									<ul>
										<li><a href="blog.html">About</a></li>
										<li><a href="blog-single.html">Services</a></li>
                                        <li><a href="#">Contact</a></li>
									</ul>
					            </li><!-- 
            <li><a href="archives.html">Archives</a></li>
            <li><a href="contact.html">Contact</a></li> -->
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->
<?php include 'header.php'; ?>
<section style="align-items: center;">
	<div class="container">
	<br><br><br><br><br>
   <h4>Data Mahasiswa </h4>
    <table class="table table-bordered">
        <tr><th width="10">NO</th>
            <th>NIM</th>
            <th width="130">Nama</th>
            <th width="200">Prodi</th>
            <th width="120">Jurusan</th>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

    </table>

    <a href="input_penulis.php" class="btn btn-info btn-sm">Tambah Data</a>

	</section> <!-- /.cta -->

	<section class="light-content services">
		<div class="container">
		</div> <!-- /.container -->
	</section> <!-- /.services -->

<?php include 'footer.php'; ?>

	<!-- Scripts -->
	<script src="js/min/plugins.min.js"></script>
	<script src="js/min/medigo-custom.min.js"></script>

</body>
</html>