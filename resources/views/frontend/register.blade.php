@extends('frontend.master')
@section('main')
<div class="site">

  <section class="noo-page-heading eff">
    <div class="container">
      <div class="noo-heading-content">
        <h1 class="page-title eff">My Account</h1>
        <div class="noo-page-breadcrumb eff">
          <a href="index-7.html" class="home">Organici</a>/<span>My Account</span>
        </div>
      </div>
    </div>
  </section>
  	<div class="main">
      <div class="commerce commerce-account noo-shop-main">
        <div class="container">
          <div class="row">
            <div class="noo-main col-md-12">
              <div id="customer_login">
                <div class="col-md-6">
                  <h2>Register</h2>
                  <form class="register" action="POST">
                    <div class="form-row form-row-wide">
                      <label for="reg_email">
                        Email address
                        <span class="required">*</span>
                      </label>
                      <input type="email" class="input-text" name="email" id="reg_email" value="" />
                    </div>
                    <div class="form-row form-row-wide">
                      <label for="reg_password">
                        Password
                        <span class="required">*</span>
                      </label>
                      <input type="password" class="input-text" name="password" id="reg_password" />
                    </div>
                    <div class="form-row">
                      <input type="submit" class="button" name="register" value="Register" />
                    </div>
                  </form>
                </div>
                <div class="col-md-6">
                    <img src="/frontend/images/slider/image_slider1.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="noo-footer-shop-now">
        <div class="container">
          <div class="col-md-7">
            <h4>- Every day fresh -</h4>
            <h3>organic food</h3>
          </div>
          <img src="images/organici-love-me.png" class="noo-image-footer" alt="" />
        </div>
      </div>
    </div>

  </div>
  <a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>
ored from tk-themes.net/html-organici/html/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Aug 2019 09:55:47 GMT -->
@endsection
