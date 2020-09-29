<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<title>Arsip Surat Kecamatan Neglasari Tangerang</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<!-- 
Tamarillo Template
http://www.templatemo.com/tm-399-tamarillo
-->
<meta name="author" content="" />
<!-- favicons -->
<link rel="shortcut icon" href="images/logo.png">
<!-- bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<!-- fancybox CSS -->
<link href="css/jquery.lightbox.css" rel="stylesheet" />
<!-- flex slider CSS -->
<link href="css/flexslider.css" rel="stylesheet" />
<!-- custom styles for this template -->
<link href="css/templatemo_style.css" rel="stylesheet" />
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-push-1 col-sm-6">
                
            </div>
            <div class="col-md-3 hidden-xs"></div>
            <div class="col-xs-3 col-xs-offset-20 visible-xs">
                <a href="#" id="mobile_menu"><span class="glyphicon glyphicon-align-justify"></span></a>
            </div>
            <div class="col-xs-24 visible-xs" id="mobile_menu_list">
                <ul>
                    <li><a href="#templatemo_slideshow">Home</a></li>
                    <li><a href="#templatemo_about">Penjelasan Program</a></li>
                  
                </ul>
            </div>
            <div class="col-md-16 col-sm-18 hidden-xs" id="templatemo-nav-bar">
                <ul class="nav navbar-right">
                    <li><a href="#templatemo_slideshow">Home</a></li>
                    <li><a href="#templatemo_about">Penjelasan Program</a></li>
                    
                </ul>
            </div>
        </div>
    </div>
</header><!-- end of templatemo_header -->
<section id="templatemo_slideshow">
    <div class="container">
        <div id="main-slider" class="flexslider">
        <ul class="slides">
            <li class="row">
                 <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM tampilan WHERE nama = 'gambar1' ");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                <img src="administrator/admin/crud/gambar/<?php echo $d['wallpaper'] ?>" alt="slider image 1" />
                <?php
            }

            ?>
                <div class="flex-button"><a href="administrator/index.php">Login</a></div>
            </li>
            <li class="row">
                 <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM tampilan WHERE nama = 'gambar2' ");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                <img src="administrator/admin/crud/gambar/<?php echo $d['wallpaper'] ?>" alt="slider image 1" />
                    <?php
            }

            ?>
                <div class="flex-button"><a href="administrator/index.php">Login</a></div>
                
            </li>
            <li class="row">
                 <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM tampilan WHERE nama = 'gambar3' ");
                     while($d = mysqli_fetch_array($data)){
                      ?>
               <img src="administrator/admin/crud/gambar/<?php echo $d['wallpaper'] ?>" alt="slider image 1" />
                   <?php
            }

            ?>
             
                 <div class="flex-button"><a href="administrator/index.php">Login</a></div>
            </li>
            <li class="row">
                 <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM tampilan WHERE nama = 'gambar4' ");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                       <img src="administrator/admin/crud/gambar/<?php echo $d['wallpaper'] ?>" alt="slider image 1" />
                           <?php
            }

            ?>
                <div class="flex-button"><a href="administrator/index.php">Login</a></div>
            </li>
        </ul>
        </div><!-- end of main-slider -->
    </div>	
</section><!-- end of templatemo_slideshow -->
<section id="templatemo_about">
    <div class="container">
        <div class="row">
            <h1>Penjelasan Fitur</h1>
        </div>
        <div class="row">
            <div class="col-md-1"></div>	
            <div class="col-md-5 col-sm-7 col-xs-24">
                 <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM tampilan WHERE kode = 1  ");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                      
         
                <img src="administrator/admin/crud/gambar/<?php echo $d['gambar'] ?>" alt="image 1"/>
                                 <?php
            }

            ?>
            </div>
            <div class="col-md-1"></div>	
            <div class="col-md-16">
                     <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM tampilan WHERE kode = 1  ");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                      
         
             
         
                <h2><?php echo $d['judul'];?></h2>

                                 <?php
            }

            ?>
              <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM tampilan WHERE kode = 1  ");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                <p>
                  <?php echo $d['tulisan'];?>

                </p>

                <?php
              }
              ?>
               
            </div>
        </div><!-- end of row -->
        <div class="clear"></div>
        <div class="row">
            <div class="col-md-1"></div>	
             <div class="col-md-5 col-sm-7 col-xs-24">
                 <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM tampilan WHERE kode = 2  ");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                      
         
                <img src="administrator/admin/crud/gambar/<?php echo $d['gambar'] ?>" alt="image 1"/>
                                 <?php
            }

            ?>
            </div>
            <div class="col-md-1"></div>	
             <div class="col-md-16">
                     <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM tampilan WHERE kode = 2  ");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                      
         
             
         
                <h2><?php echo $d['judul'];?></h2>

                                 <?php
            }

            ?>
              <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM tampilan WHERE kode = 2  ");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                <p>
                  <?php echo $d['tulisan'];?>

                </p>

                <?php
              }
              ?>
               
            </div>
        </div><!-- end of row -->
        <div class="clear"></div>
        <div class="row">
            <div class="col-md-1"></div>	
              <div class="col-md-5 col-sm-7 col-xs-24">
                 <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM tampilan WHERE kode = 3  ");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                      
         
                <img src="administrator/admin/crud/gambar/<?php echo $d['gambar'] ?>" alt="image 1"/>
                                 <?php
            }

            ?>
            </div>
            <div class="col-md-1"></div>	
                   <div class="col-md-16">
                     <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM tampilan WHERE kode = 3  ");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                      
         
             
         
                <h2><?php echo $d['judul'];?></h2>

                                 <?php
            }

            ?>
              <?php 
                     include 'koneksi.php';
                     $no = 1;
                     $data = mysqli_query($koneksi,"SELECT * FROM tampilan WHERE kode = 3  ");
                     while($d = mysqli_fetch_array($data)){
                      ?>
                <p>
                  <?php echo $d['tulisan'];?>

                </p>

                <?php
              }
              ?>
               
            </div>
        </div><!-- end of row -->
    </div> 
</section><!-- end of templatemo_about -->
<div class="container">
    <div class="solidline"></div>
</div><!-- solid line -->
<!-- end of templatemo_services -->
<!-- solid line -->

 <!-- end of templatemo_blog -->
<!-- solid line -->

 <!-- end of templatemo_gallery -->
<section id="templatemo_contact">
    <div class="container">
        <div class="row" id="templatemo_contact_gray_wap">
            <div class="col-md-24 col-sm-24">
                <h1 class="margin_top">Kritik dan Saran</h1>
            </div>
            
           
            <div class="col-md-1"></div>
            <div class="col-md-9  col-sm-18 col-sm-push-3">
                <form id="contact-form" action="add_pesan.php" method="post">
                    <label>
                        <span>Nama </span>
                        <input name="nama" type="text" />
                  </label>
                    <label>
                        <span>Nomor hp</span>
                        <input name="no_hp" type="number" maxlength="12"  />
                  </label>
                    <label>
                        <span>Perihal</span>
                        <input name="perihal" type="text" id="subject" />
                  </label>
                    <label>
                        <span>Peasn</span>
                        <textarea name="pesan" id="message"></textarea>
                    </label>
                    <label>
                        <input type="submit" value="Kirim data">
                    </label>
                </form>
            </div>	
        </div> <!-- end of row -->
        <div class="row" id="templatemo_footer">
            <?php 
                $tgl = date('yy');
                ?>
            <div class="col-md-24" >
                <p>Copyright &copy; <?php echo $tgl; ?>  KECAMATAN NEGLASARI</p>
            </div>
        </div><!-- end of templatemo_footer -->
    </div>	
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
</section><!-- end of templatemo_contact -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrollto.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.lightbox.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script src="js/templatemo_script.js"></script>
<!-- templatemo 399 tamarillo -->
</body>
</html>