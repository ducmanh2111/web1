<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Dashboard</title>
  <base href="{{asset('')}}">
  <!-- Fontfaces CSS-->

  <link href="backend/css/font-face.css" rel="stylesheet" media="all">
  <link href="backend/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="backend/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="backend/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="backend/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  @yield('addcss')

  <link href="backend/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="backend/vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="backend/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="backend/vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="backend/vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="backend/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">


  <!-- Main CSS-->
  <link href="backend/css/theme.css" rel="stylesheet" media="all">
  <script type="text/javascript">
    function confirm_delete (msg) {
    if (window.confirm(msg))
    {
      return true;
    }
    return false;
    }
  </script>


</head>

<body class="">
  <div class="page-wrapper">
    <!-- HEADER MOBILE-->

                    <!-- END HEADER MOBILE-->

                    <!-- MENU SIDEBAR-->
                    <aside class="menu-sidebar d-none d-lg-block">
                      <div class="logo">
                        <a href="#">
                          <img src="images/icon/logo.png" alt="Admin AnaShop" />
                        </a>
                      </div>

                      <div class="menu-sidebar__content js-scrollbar1">
                        <nav class="navbar-sidebar">
                          <ul class="list-unstyled navbar__list">
                            <li class="active has-sub">

                              <a  href="{{asset('/admin/category')}}">
                                <i class=""></i>Danh muc san pham</a>
                              </li>
                              <li class="active has-sub">
                                  <a class="js-arrow" href="#">
                                      <i class=""></i>Products</a>
                                  <ul class="list-unstyled navbar__sub-list js-sub-list">
                                      <li>
                                          <a href="{{asset('/admin/product/addpro')}}">Add New Product</a>
                                      </li>
                                      <li>
                                          <a href="{{asset('/admin/product')}}">View Products</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="active has-sub">
                                  <a class="js-arrow" href="#">
                                      <i class=""></i>Promotion</a>
                                  <ul class="list-unstyled navbar__sub-list js-sub-list">
                                      <li>
                                          <a href="{{asset('/admin/promotion/create')}}">Add New Promotion</a>
                                      </li>
                                      <li>
                                          <a href="{{asset('/admin/promotion/list')}}">View Promotions</a>
                                      </li>
                                  </ul>
                              </li>
                            </ul>
                          </nav>
                        </div>

                      </aside>

                      <!-- END MENU SIDEBAR-->

                      <!-- PAGE CONTAINER-->
                      <div class="page-container">
                        <!-- HEADER DESKTOP-->
                        <header class="header-desktop">
                          <div class="section__content section__content--p30">
                            <div class="container-fluid">
                              <div class="header-wrap">
                                <form class="form-header" action="" method="POST">
                                  <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                  <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                  </button>
                                </form>
                                <div class="header-button">

<div class="account-wrap">
  <div class="account-item clearfix js-item-menu">
    <div class="image">
      <img src="images/icon/avatar-01.jpg" alt="John Doe" />
    </div>
    <div class="content">
      <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
    </div>
    <div class="account-dropdown js-dropdown">
      <div class="info clearfix">

    <div class="content">
      <h5 class="name">
        <a href="#">{{Auth::user()->name}}</a>
      </h5>
      <span class="email">{{Auth::user()->email}}</span>
    </div>
  </div>
  <div class="account-dropdown__body">
    <div class="account-dropdown__item">
      <a href="#">
        <i class="zmdi zmdi-account"></i>Account</a>
      </div>
      <div class="account-dropdown__item">
        <a href="#">
          <i class="zmdi zmdi-settings"></i>Setting</a>
        </div>

    <div class="account-dropdown__footer">
      <a href="{{asset('logout')}}">
        <i class="zmdi zmdi-power"></i>Logout</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</header>
<!-- HEADER DESKTOP-->
<!-- MAIN CONTENT-->
@yield('main')
<!-- END MAIN CONTENT-->


<!-- END PAGE CONTAINER-->
</div>

</div>

<!-- Jquery JS-->
<script src="backend/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="backend/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="backend/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="backend/vendor/slick/slick.min.js">
</script>
<script src="backend/vendor/wow/wow.min.js"></script>
<script src="backend/vendor/animsition/animsition.min.js"></script>
<script src="backend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="backend/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="backend/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="backend/vendor/circle-progress/circle-progress.min.js"></script>
<script src="backend/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="backend/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="backend/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="backend/js/main.js"></script>

</body>

</html>
<!-- end document-->
<script src="ckeditor/ckeditor.js"></script>
<script> CKEDITOR.replace('editor1', {
      filebrowserBrowseUrl:" {{ asset('ckfinder/ckfinder.html') }}",
      filebrowserImageBrowseUrl: "{{ asset('ckfinder/ckfinder.html?type=Images') }}",
      filebrowserFlashBrowseUrl: "{{ asset('ckfinder/ckfinder.html?type=Flash') }}",
      filebrowserUploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
      filebrowserImageUploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
      filebrowserFlashUploadUrl: "{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}" ,

  });     CKEDITOR.config.autoParagraph = false; </script>
