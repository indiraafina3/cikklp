<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Daftar KKLP</title>
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
   <h4>Data KKLP </h4>
   <p>*SP = Surat Pengantar<br>
   *LP = Lembar Penilaian</p>
    <table class="table table-bordered">
        <tr>
        	<th width="10">NO</th>
            <th width="110">Instansi</th>
            <th width="110">Kelompok</th>
            <th width="110">Keterangan</th>
            <th width="110">Action</th>
        </tr>
        </tr>
        <?php $no = 1;
        foreach($data as $d) {?>
        <tr>
        	<td><?php echo $no; ?></td>
            <td><?php echo $d['instansi'];?></td>
            <td><?php echo '1. '. $d['nama1']. '<br>'. '2. '. $d['nama2']. '<br>'. '3. '. $d['nama3'];?></td>
            <td><?php echo $d['status'];?></td>
            <td> <a href="<?php echo base_url()."index.php/Input/lihat_data_kklp/".$d['id'];?>" class="main-button accent-color">LIHAT</a>
            	<?php if ($this->session->userdata('username') == 'admin') {
					            			echo '<a href="'. base_url(). 'index.php/Input/edit_data_kklp/' .$d['id']. '" class="main-button accent-color">EDIT</a>';
					            		} else { echo "";}
					            		?>
               	 <?php if ($this->session->userdata('username') == 'admin') {
					            			echo '<a href="'. base_url(). 'index.php/Input/do_delete_kklp/' .$d['id']. '" class="main-button accent-color">DELETE</a>';
					            		} else { echo "";}
					            		?>
				<?php if ($this->session->userdata('username') == 'admin') {
					            			if ($d['status'] != '') {
					            			echo '<a href="'. base_url(). 'index.php/Input/edt_sp/' .$d['id']. '" target="_blank" class="main-button accent-color">SP</a>';
					            		} else { echo "";
					            		}
					            		} else { echo "";}
					            		?>
				<?php if ($this->session->userdata('username') == 'admin') {
					            			if ($d['status'] != '') {
					            			echo '<a href="'. base_url(). 'index.php/Input/cetak_lp/' .$d['id']. '"" target="_blank" class="main-button accent-color">LP</a>';
					            		} else { echo "";}
					            		} else { echo "";}
					            		?>
                </td></td>
        </tr>
         <?php $no++;
    } ?>

    </table>

    <a href="<?php echo base_url(); ?>index.php/Daftar/index" class="main-button accent-color">Tambah Data KKLP</a>

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