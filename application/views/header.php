<?php

?>
	<header class="site-header clearfix">
		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="pull-left logo">
						<a href="<?php echo base_url(); ?>index.php/welcome/home">
							<img src="<?php echo base_url()."assets/";?>images/lo.png" width="280px" alt="STMIK KHARISMA">
						</a>
					</div>	<!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li class=""><a href="<?php echo base_url(); ?>index.php/welcome/home">Home</a></li>
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
					            <!-- <li><a href="archives.html">Archives</a></li>
					            <li><a href="contact.html">Contact</a></li> -->
							</ul> <!-- /.sf-menu -->
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
					    <div class="responsive-navigation visible-sm visible-xs">
					        <a href="#nogo" class="menu-toggle-btn">
					            <i class="fa fa-bars"></i>
					        </a>
					    </div> <!-- /responsive_navigation -->

					</div> <!-- /.main-navigation -->

				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->