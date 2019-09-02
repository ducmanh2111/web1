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
								<h2>Login</h2>
								@if (session('notice'))
										<div class="alert alert-{{ session('flag') }} alert-dismissible fade in">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
												{{ session('notice') }}
										</div>
								@endif
								<form class="login" method="POST">
									{{ csrf_field() }}

									<div class="form-row form-row-wide {{ $errors->has('email') ? ' has-error' : '' }}">
										<label for="username">
											Username or email address
											<span class="required">*</span>
										</label>
										<input type="text" class="input-text" name="email" id="email" value="" />
										@if($errors->has('email'))
												<span class="help-block">{{ $errors->first('email') }}</span>
										@endif
									</div>
									<div class="form-row form-row-wide {{ $errors->has('password') ? ' has-error' : '' }}">
										<label for="password">
											Password
											<span class="required">*</span>
										</label>
										<input class="input-text" type="password" name="password" id="password" />
										@if($errors->has('password'))
												<span class="help-block">{{ $errors->first('password') }}</span>
										@endif
									</div>
									<div class="form-row">
										<input type="submit" class="button" name="login" value="Login"  target="_self"/>
									</div>
									<div class="lost_password">
										<a href="#">Lost your password?</a>
									</div>
								</form>
							</div>
							<div class="col-md-6">
								<img src="/frontend/images/slider/image_slider3.jpg" alt="">
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
