@extends('frontend.master')
@section('main')
<div class="site">

	<section class="noo-page-heading eff heading-6">
		<div class="container">
			<div class="noo-heading-content">
				<h1 class="page-title eff">Shop Detail</h1>
				<div class="noo-page-breadcrumb eff">
					<a href="index-7.html" class="home">Organici</a>/<span>Shop Detail</span>
				</div>
			</div>
		</div>
	</section>
	<div class="main">
		<div class="commerce single-product noo-shop-main">
			<div class="container">
				<div class="row">
					<div class="noo-main col-md-9">
						<!-- PRODUCT -->
						<div class="product">
							<div class="single-inner">
								<div class="images">
									<div class="product-simple-image">
										<a href="{{url('/storage/'.$product_detail->pro_image)}}" data-rel="prettyPhoto">
											<img width="300" height="381" src="{{url('/storage/'.$product_detail->pro_image)}}" alt="" />
										</a>
									</div>
								</div>
								<div class="summary entry-summary">
									<h1 class="product_title entry-title">{{$product_detail->pro_name}}</h1>
									@if(($product_detail->promotion)!= 0)

									<strong style="color:red; font-size:20px; margin-right:50px;"> {{$product_detail->promotion}} %off</strong>
									<p class="price"><span class="amount" style="text-decoration:line-through;">&#36;{{@$product_detail->pro_price}}</span>-> <span class="amount">&#36;{{@$product_detail->pro_price/100*$product_detail->promotion}}</span></p>

									@else
									<p class="price"><span class="amount" >&#36;{{@$product_detail->pro_price}}</span></p>
									@endif
									<div class="product_meta">
										<span class="posted_in">Category: <a href="{{asset('/shop/'.$product_detail->pro_cat_id)}}" target="_self">{{$product_detail->cat_name}}</a></span>
										<span class="tagged_as">Tags: <a href="#">cucumbers</a>,  <a href="{{asset('/shop/'.$product_detail->pro_cat_id)}}">{{$product_detail->cat_name}}</a></span>
									</div>
									<form class="cart">
										<div class="quantity">
											<input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4"/>
										</div>
										<button type="submit" class="single_add_to_cart_button button">Add to cart</button>
									</form>
									<div class="yith-wcwl-add-to-wishlist">
										<div class="yith-wcwl-add-button">
											<a href="#" class="add_to_wishlist"></a>
										</div>
									</div>
									<div class="clear"></div>

								</div>
							</div>
							<!-- Description+review -->
							<div class="commerce-tabs">
								<ul class="nav nav-tabs tabs">
									<li class="active">
										<a data-toggle="tab" href="#tab-1">Description</a>
									</li>
									<li>
										<a data-toggle="tab" href="#tab-2">Reviews</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab-1">
										<p class="description">{{$product_detail->pro_description}}</p>
									</div>
									<div id="tab-2" class="tab-pane fade">
										<div id="comments" class="comments-area">
											<h2 class="comments-title">3 Comments</h2>
											<ol class="comments-list">
												<li class="comment">
													<div class="comment-wrap">
														<div class="comment-img">
															<img alt='' src='../../../placehold.it/100x100' height='80' width='80' />
														</div>
														<article class="comment-block">
															<header class="comment-header">
																<cite class="comment-author">
																	admin
																</cite>
																<div class="comment-meta">
																	<span class="time">
																		4 months ago
																	</span>
																</div>
															</header>
															<div class="comment-content">
																<p>fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus</p>
															</div>
															<span class="comment-reply">
																<a class='comment-reply-link' href='#'><i class="fa fa-reply"></i> Reply</a>
															</span>
														</article>
													</div>
													<ol class="children">
														<li class="comment">
															<div class="comment-wrap">
																<div class="comment-img">
																	<img alt='' src='../../../placehold.it/100x100' height='80' width='80' />
																</div>
																<article class="comment-block">
																	<header class="comment-header">
																		<cite class="comment-author">
																			admin
																		</cite>
																		<div class="comment-meta">
																			<span class="time">
																				4 months ago
																			</span>
																		</div>
																	</header>
																	<div class="comment-content">
																		<p>fSames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus</p>
																	</div>
																	<span class="comment-reply">
																		<a class='comment-reply-link' href='#'><i class="fa fa-reply"></i> Reply</a>
																	</span>
																</article>
															</div>
														</li><!-- #comment-## -->
													</ol><!-- .children -->
												</li><!-- #comment-## -->
												<li class="comment">
													<div class="comment-wrap">
														<div class="comment-img">
															<img alt='' src='../../../placehold.it/100x100' height='80' width='80' />
														</div>
														<article class="comment-block">
															<header class="comment-header">
																<cite class="comment-author">
																	admin
																</cite>
																<div class="comment-meta">
																	<span class="time">
																		4 months ago
																	</span>
																</div>
															</header>
															<div class="comment-content">
																<p>fames ac turpis egestas. Ut non enim eleifend felis pretium feugiat. Vivamus quis mi. Phasellus</p>
															</div>
															<span class="comment-reply">
																<a class='comment-reply-link' href='#'><i class="fa fa-reply"></i> Reply</a>
															</span>
														</article>
													</div>
												</li><!-- #comment-## -->
											</ol> <!-- /.comments-list -->

											<div id="respond-wrap">
												<div id="respond" class="comment-respond">
													<h3 id="reply-title" class="comment-reply-title">
														<span>Leave your thought</span>
													</h3>
													<!-- SIGN IN TO COMMENT -->
													<form class="comment-form">
														<div class="row">
															<div class="comment-form-author col-sm-6">
																<input id="author" name="author" type="text" placeholder="Enter Your Name*" class="form-control" value="" size="30" />
															</div>
															<div class="comment-form-email col-sm-6">
																<input id="email" name="email" type="text" placeholder="Enter Your Email*" class="form-control" value="" size="30" />
															</div>
															<div class="col-sm-12">
																<div class="comment-form-comment">
																	<textarea class="form-control" placeholder="Enter Your Comment" id="comment" name="comment" cols="40" rows="6"></textarea>
																</div>
															</div>
														</div>
														<div class="form-submit">
															<input name="submit" type="submit" id="submit" class="submit" value="Post Comments" />
														</div>
													</form>
												</div><!-- #respond -->
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="related products">
								<h2>Related Products</h2>
								<div class="products row product-grid">
									@foreach($related_product as $product)

									<div class="masonry-item noo-product-column col-md-4 col-sm-6 product">
										<div class="noo-product-inner">
											<div class="noo-product-thumbnail">
												<a href="{{asset('/shop-detail/'.$product->pro_id)}}" target="_self">
													<img width="600" height="760" src="{{url('/storage/'.$product->pro_image)}}" alt="" />
												</a>
												<div class="noo-rating">
													<div class="star-rating">
														<span style="width:20%"></span>
													</div>
												</div>
											</div>
											<div class="noo-product-title">
												<h3><a href="{{asset('/shop-detail/'.$product->pro_id)}}" arget="_self">{{$product->pro_name}}</a></h3>
												@if(($product->promotion)!= 0)

												<strong style="color:red; font-size:20px; margin-right:50px;"> {{$product->promotion}} off</strong>



												<span class="price"><span class="amount" style="text-decoration:line-through;">&#36;{{$product->pro_price}}</span></span> -> <span class="price"><span class="amount">&#36;{{@$product->pro_price/100*$product->promotion}}</span></span>


												@else
												<span class="price"><span class="amount" >&#36;{{@$product->pro_price}}</span></span>
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
							</div>
						</div>
					</div>
					<div class="noo-sidebar col-md-3">
						<div class="noo-sidebar-wrap">
							<div class="widget commerce widget_product_search">
								<h3 class="widget-title">Search</h3>
								<form class="commerce-product-search">
									<input type="search" id="commerce-product-search-field" class="search-field" placeholder="Search Products&hellip;" value="" name="s"/>
									<input type="submit" value="Search"/>
								</form>
							</div>
							<div class="widget commerce widget_product_categories">
								<h3 class="widget-title">Categories</h3>
								<ul class="product-categories">
									<li><a href="#">Bread</a></li>
									<li><a href="#">Featured</a></li>
									<li><a href="#">Fruit</a></li>
									<li><a href="#">Fruit Box</a></li>
									<li><a href="#">Fruits</a></li>
									<li><a href="#">Others</a></li>
									<li><a href="#">Package</a></li>
									<li><a href="#">Vegetable</a></li>
									<li><a href="#">Vegetable Box</a></li>
								</ul>
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
