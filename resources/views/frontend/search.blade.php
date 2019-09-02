@extends('frontend.master')
@section('main')
<section class="noo-page-heading eff">
	<div class="container">
		<div class="noo-heading-content">
			<h1 class="page-title eff">Result</h1>

			<div class="noo-page-breadcrumb eff">
        <h2 class="home">Find {{ count($search_product) }} product</h2>
			</div>
		</div>
	</div>
</section>
		<div class="site">

			<!-- SORT -->
			<div class="main">
				<div class="commerce noo-shop-main">
					<div class="container">
						<div class="row">
							<div class="noo-main col-md-9">
                @if(count($search_product) == 0)
                    <h3>Can't find the product</h3>
                @else
								<div class="noo-catalog">
									<p class="commerce-result-count">Showing 1&ndash;{{count($search_product)}} results</p>
									<div class="product-style-control pull-right">
										<!-- <span class="noo-list"><a href="shop-list.html"><i class="fa fa-th-list"></i></a></span> -->
										<span class="noo-grid active"><i class="fa fa-th-large"></i></span>
									</div>
									<form class="commerce-ordering">
										<select name="orderby" class="orderby">
											<option value="" selected='selected'>Default sorting</option>
											<option value="">Sort by popularity</option>
											<option value="">Sort by average rating</option>
											<option value="">Sort by newness</option>
											<option value="">Sort by price: low to high</option>
										</select>
									</form>
								</div>
								<!-- LIST PRODUCT  -->

								<div class="noo-product-grid products row product-grid">
									@foreach($search_product as $cat_product)

									<div class=" masonry-item noo-product-column col-md-4 col-sm-6 product">

										<div class="noo-product-inner">
											<div class="noo-product-thumbnail">
												<a href="shop-detail.html">
													<img width="600" height="760" src="{{url('/storage/'.$cat_product->pro_image)}}" alt="" />
												</a>

												<!-- <div class="noo-rating">
													<div class="star-rating">
													</div>
												</div> -->

											</div>
											<div class="noo-product-title">
												<h3><a href="shop-detail.html">{{$cat_product->pro_name}}</a></h3>
												@if(($cat_product->promotion)!= 0)

													<strong style="color:red; font-size:20px; margin-right:50px;"> {{$cat_product->promotion}} off</strong>



												<span class="price"><span class="amount" style="text-decoration:line-through;">&#36;{{@$cat_product->pro_price}}</span></span> -> <span class="price"><span class="amount">&#36;{{@$cat_product->pro_price/100*$cat_product->promotion}}</span></span>


												@else
												<span class="price"><span class="amount">&#36;3.95</span></span>
												@endif
												<div class="noo-product-action">
													<div class="noo-action">
														<a href="#" class="button product_type_simple add_to_cart_button">
															<span>Add to cart</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									@endforeach

								</div>
								<span style="a{target="_self"}">{!!$search_product->links()!!}</span>
@endif
							</div>
							<div class="noo-sidebar col-md-3">
								<div class="noo-sidebar-wrap">
									<div class="widget commerce widget_product_search">
										<h3 class="widget-title">Search</h3>
										<form action="{{route('search')}}" method="get" target="_self">
											<input type="search" class="search" placeholder="Search Products&hellip;" value="" name="s"/>
											<input type="submit" value="Search"/>
										</form>
									</div>
									<!-- CATEGORY -->
									<div class="widget commerce widget_product_categories">
										<h3 class="widget-title">Categories</h3>
										<ul class="product-categories">
											@foreach($categories as $category)

											<li><a href="{{asset('/shop/'.$category -> id)}}" data-option-value=".{{$category ->cat_name}}"  target="_self"> {{$category ->cat_name}}</a></li>
												@endforeach
										</ul>
									</div>
									<!-- FILTER -->
									<div class="widget commerce widget_price_filter">
										<h3 class="widget-title">Filter by price</h3>
										<form>
											<div class="price_slider_wrapper">
												<div class="price_slider" style="display:none;"></div>
												<div class="price_slider_amount">
													<input type="text" id="min_price" name="min_price" value="" data-min="0" placeholder="Min price"/>
													<input type="text" id="max_price" name="max_price" value="" data-max="15" placeholder="Max price"/>
													<button type="submit" class="button">Filter</button>
													<div class="price_label" style="display:none;">
														Price: <span class="from"></span> &mdash; <span class="to"></span>
													</div>
													<div class="clear"></div>
												</div>
											</div>
										</form>
									</div>


									<div class="widget commerce widget_product_tag_cloud">
										<h3 class="widget-title">Product Tags</h3>
										<div class="tagcloud">
											<a href="#">apple</a>
											<a href="#">bread</a>
											<a href="#">broccoli</a>
											<a href="#">brown bread</a>
											<a href="#">carrot</a>
											<a href="#">celery</a>
											<a href="#">cookie</a>
											<a href="#">cucumbers</a>
											<a href="#">detox juicing</a>
											<a href="#">french bread</a>
											<a href="#">fruits</a>
											<a href="#">green apple</a>
											<a href="#">lemon</a>
											<a href="#">lime</a>
											<a href="#">mango</a>
										</div>
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
@endsection
