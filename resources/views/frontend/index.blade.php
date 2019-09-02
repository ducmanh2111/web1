@extends('frontend.master')
@section('main')

<div class="site">

	<div class="main">
		<!-- SLIDE  -->
		<div class="noo-slider-wrap">
			<ul class="noo-slider-image">
				@foreach($slides as $slide)
				<li>
					<div class="image-style">
						<a href="#">
							<img width="610" height="520" src="{{url('/storage/'.$slide->image)}}" alt="" />
						</a>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
		<!-- Featured product  -->
		<div class="noo-simple-product-wrap">
			<ul class="noo-simple-product-slider">
				@foreach($featured_products as $featured_product )
				<li>
					<a href="#">
						<div class="noo-simple-slider-item" data-bg="{{url('/storage/'.$featured_product->pro_image)}}">
							<div class="n-simple-content">
								<h3>{{$featured_product -> pro_name}}</h3>
								<span class="price"><span class="amount">&#36;{{$featured_product -> pro_price}}/1</span></span>
							</div>
						</div>
					</a>
				</li>
				@endforeach
			</ul>
		</div>

		<div class="noo-height-product pt-8 pb-10">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="noo-product-grid-wrap commerce product-style2">
							<div class="noo-sh-title">
								<img width="40" height="39" src="/frontend/images/icon_p.png" alt=""/>
								<h2>NEW products</h2>
								<p> There are many variations of passages of Lorem Ipsum available</p>
							</div>
							<div class="noo-product-filter masonry-filters">
								<ul class="noo-header-filter" data-option-key="filter">
									<li>
										<a data-option-value="*" href="" class="selected">
											<span>All products</span>
										</a>
									</li>
									@foreach($categories as $category)
									<li>
										<a data-option-value=".{{$category ->cat_name}}" href="#fruit">
											<span>{{$category ->cat_name}}</span>
										</a>
									</li>
									@endforeach
								</ul>
							</div>
							<div class="noo-product-grid products row product-grid noo-grid-4">
								@foreach($cat_products as $cat_product)

								<div class="{{$cat_product-> cat_name}} masonry-item noo-product-column col-md-4 col-sm-6 product">
									<div class="noo-product-inner">
										<div class="noo-product-thumbnail">
											<a href="{{asset('/shop-detail/'.$cat_product->pro_id)}}">
												<img width="600" height="760" src="{{url('/storage/'.$cat_product->pro_image)}}" alt="" />
											</a>
											<!-- <div class="noo-rating">
												<div class="star-rating">
													<span style="width:0%"></span>
												</div>
											</div> -->
										</div>
										<div class="noo-product-title">
											<h3><a href="{{asset('/shop-detail/'.$cat_product->pro_id)}}">{{$cat_product->pro_name}}</a></h3>
											@if($cat_product->promotion != 0)
											<strong style="color :red; font-size: 15px; padding-right: 30px;" > {{$cat_product->promotion}}% off</strong>

											<span class="price">
												<span class="amount">&#36;{{$cat_product -> pro_price}}</span>  -> 	<span class="amount" style="text-decoration:line-through;">&#36;{{$cat_product -> pro_price/100*$cat_product->promotion}}</span>

											</span>
											@else
											<span class="price">
												<span class="amount">&#36;{{$cat_product -> pro_price}}</span>
											</span>
											@endif
											<div class="noo-product-action">
												<div class="noo-action">
													<a href="ajax/product-quickview.html" class="noo-quick-view" onclick="showQuickView(); ">
														<i class="fa fa-search"></i>
													</a>
													<a href="#" class="button product_type_simple add_to_cart_button"></a>
													<div class="yith-wcwl-add-to-wishlist">
														<div class="yith-wcwl-add-button">
															<a href="#" class="add_to_wishlist"></a>
														</div>
													</div>
													<div class="clear"></div>
													<a href="{{asset('/shop-detail/'.$cat_product->pro_id)}}" class="link-detail">
														<i class="fa fa-link"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="newsletter">
			<div class="noo-sh-mailchimp">
				<div class="container">
					<div class="row">
						<div class="col-md-5 col-xs-12">
							<h3 class="noo-mail-title">Subscribe to us!</h3>
							<p class="noo-mail-desc">
								Enter Your email address for our mailing list to keep yourself update.
							</p>
						</div>
						<div class="col-md-7 col-xs-12">
							<form>
								<div class="newsletter-form-fields">
									<input type="email" name="EMAIL" placeholder="Email address" required />
									<input type="submit" value="submit"/>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>

@endsection
