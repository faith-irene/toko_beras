<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>It.Next - IT Service Responsive Html Theme</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- custom online -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- site icons -->
<link rel="icon" href="<?= base_url('assets/main_pages'); ?>/images/fevicon/fevicon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="<?= base_url('assets/main_pages'); ?>/css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="<?= base_url('assets/main_pages'); ?>/css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="<?= base_url('assets/main_pages'); ?>/css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="<?= base_url('assets/main_pages'); ?>/css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="<?= base_url('assets/main_pages'); ?>/css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="<?= base_url('assets/main_pages'); ?>/css/animate.css" />
<!-- font awesome -->
<link rel="stylesheet" href="<?= base_url('assets/main_pages'); ?>/fa/css/all.css" />

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<style>
  .dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdowns {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 99;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">540 Lorem Ipsum New York, AB 90218</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <!-- <div class="social_icon">
              <ul class="list-inline">
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div> -->
          </div>
          <div class="float-right">
            <div class="make_appo dropdowns">
              <!-- <li class="dropdown" >
                <img src=""><a class="btn white_btn dropdown-toggle" data-toggle="dropdown" href="#"><?= $akun; ?></a>
                
              </li> -->
              <button onclick="myFunction()" class="dropbtn"><?= $akun; ?></button>
              <div id="myDropdown" class="dropdown-content">
                <div class="header mx-auto">
                  <img src="<?= base_url('assets/img/') ?>wendy.jpg" width="100" height="100" class="img-thumbnail rounded-circle mt-2 mx-auto d-block" alt="">
                  <p class="text-center" >administrator</p>
                </div>
                <div class="footer mt-1">
                  <a href="#" class="pull-left" data-toggle="tooltip" data-placement="bottom" title="Edit profile" ><i class="fa fa-cogs"></i></a>
                  <a href="<?= base_url('auth/logout'); ?>" data-toggle="tooltip" data-placement="right" title="logout" class="pull-right"><i class="text-danger fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="it_home.html"><img src="<?= base_url('assets/img/') ?>logo.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="active" href="<?= base_url('admin'); ?>">Home</a>
                 <!--  <ul>
                    <li><a href="it_home.html">It Home Page</a></li>
                    <li><a href="it_home_dark.html">It Dark Home Page</a></li>
                  </ul> -->
                </li>
                <li> <a href="#">Forms</a>
                  <ul>
                    <li><a href="<?= base_url('admin/barang_masuk') ?>">Barang masuk</a></li>
                    <li><a href="it_service_detail.html">Barang keluar</a></li>
                  </ul>
                </li>
                <li> <a href="#">Tables</a>
                  <ul>
                    <li><a href="it_blog.html">Tabel barang masuk</a></li>
                    <li><a href="it_blog_grid.html">Tabel barang keluar</a></li>
                    <li><a href="it_blog_detail.html">Tabel jenis</a></li>
                  </ul>
                </li>
                <li> <a href="#">Report</a></li>
                <li> <a href="it_shop.html">Management</a>
                  <ul>
                    <li><a href="it_shop.html">My profile</a></li>
                    <li><a href="it_shop_detail.html">User list</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <!-- <div class="search_icon">
              <ul>
                <li><a href="#" data-toggle="modal" data-target="#search_bar"><i class="fa fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div> -->
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->
<script>
  /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<script>
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>