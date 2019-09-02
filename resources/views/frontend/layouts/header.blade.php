
		<div class="noo-spinner">
			<div class="spinner">
				<div class="cube1"></div>
				<div class="cube2"></div>
			</div>
		</div>
<header class="noo-header header-5 header-static">
  <div class="navbar-wrapper">
    <div class="navbar navbar-default">
      <div class="container">
        <div class="menu-position">
          <div class="navbar-header pull-left">
            <div class="noo_menu_canvas">
              <div class="btn-search noo-search">
                <i class="fa fa-search"></i>
              </div>
              <div data-target=".nav-collapse" class="btn-navbar">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <a href="index-7.html" class="navbar-brand">
              <img class="noo-logo-img noo-logo-normal" src="/frontend/images/logo_black.png" alt="">
            </a>
          </div>
          <nav class="noo-header-anchor">
            <ul>
              <li>
                <div>
                  <span>CALL US NOW</span>
                  <a href="#">0123-88-89-0999</a>
                </div>
                <div>
                  <span><i class="fa fa-phone"></i></span>
                </div>
              </li>

              <li>
                <div>
                  <a href="cart.html">
                    <span class="has-cart">
                      <i class="fa fa-shopping-cart"></i>
                      <em>0</em>
                    </span>
                  </a>
                </div>
                <div>
                  <a href="cart.html"><span>MY CART</span></a>
                  <span class="price"><span class="amount">&#36;0.00</span></span>
                </div>
								<div>
									<a href="cart.html">
										<span class="">
											<i class="fa fa-user"></i>
										</span>
									</a>
								</div>
								<div>
									@if(Auth::check())
											<div class="login">
													<a href="#"><span class="hidden-xs">Chào bạn {{ Auth::user()->username }}</span></a>
											</div>
									
											<div class="login">
													<a href="{{ route('user.getLogout') }}"><span class="hidden-xs">{{trans('messeage.logout')}}</span></a>
											</div>
									@else
											<div class="login">
													<a href="{{ route('user.getLogin') }}">Login</a>
											</div>
											<div class="login">
													<a href="{{ route('user.getRegister') }}">Register</a>
											</div>
											<!-- <a href="{{route('user.getLogin')}}"><span>Login</span></a> -->

									@endif
                </div>
              </li>

            </ul>
          </nav>
          <nav class="pull-right noo-main-menu">
            <ul class="nav-collapse navbar-nav">
              <li class="menu-item-has-children current-menu-item">
                <a href="{{url('/')}}" target="_self">Home</a>

              </li>

              <li><a href="{{url('/out-story')}} " target="_self">Our Story</a></li>
              <li class="menu-item-has-children noo_megamenu mega-col-columns-3">
                <a href="{{asset('/shop/1')}} "target="_self" >Shop</a>
                <ul class="sub-menu">
                  <li class="menu-item-has-children">
                    <h4>Category</h4>
                    <ul class="sub-menu">
                      @foreach($categories as $category)
                      <li><a href="{{asset('/shop/'.$category -> id)}}" target="_self">{{$category ->cat_name}}</a></li>
                      @endforeach
                    </ul>
                  </li>


                  <li>
                    <div class="noo_megamenu_widget_area">
                      <div class="widget commerce widget_products">
                        <h3 class="widget-title">Featured</h3>
                        <ul class="product_list_widget">
                          @foreach($head_featured_products as $head_featured_product)
                          <li>
                            <a href="{{asset('/shop-detail/'.$head_featured_product->pro_id)}}">
                              <img width="100" height="100" src="{{url('/storage/'.$head_featured_product->pro_image)}}" alt="" />
                              <span class="product-title">{{$head_featured_product->pro_name}}</span>
                            </a>
                            <span class="amount">&#36;10.00</span>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="noo_megamenu_widget_area">
                      <div class="widget commerce widget_products">
                        <h3 class="widget-title">Sales</h3>
                        <ul class="product_list_widget">
                          @foreach($head_sale_products as $head_sale_product)
                          <li>
                            <a href="{{asset('/shop-detail/'.$head_sale_product->pro_id)}}">
                              <img width="100" height="100" src="{{url('/storage/'.$head_sale_product->pro_image)}}" alt="" />
                              <span class="product-title">{{$head_sale_product->pro_name}}</span>
                            </a>
                            <span class="amount" style="text-decoration: line-through;">&#36;{{$head_sale_product->pro_price}}</span>-><span class="amount">&#36;{{($head_sale_product->pro_price)/100*$head_sale_product->discount}}</span>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>


              <li><a href="contact.html">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="search-header5">
    <div class="remove-form"></div>
    <div class="container">
      <form class="form-horizontal">
        <label class="note-search">Type and Press Enter to Search</label>
        <input type="search" name="s" class="form-control" value="" placeholder="Search...">
        <input type="submit" value="Search">
      </form>
    </div>
  </div>
</header>
