
<div class="quick-view-wrap">
    <div class="quick-content woocommerce eff">
        <button title="Close (Esc)" class="quickview-close mfp-close"></button>
        <div class="quick-left">
            <img width="600" height="760" src="{{url('/storage/'.$product_detail->pro_image)}}" alt="" />
        </div>
        <div class="quick-right">
            <h1 class="product_title entry-title">{{$product_detail->pro_name}}</h1>
            <p class="price"><span class="amount">$10.00</span></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            <div class="product_meta">
                <span class="posted_in">Category: <a href="#">Bread</a></span>
                <span class="tagged_as">Tags: <a href="#">bread</a>, <a href="#">french bread</a></span>
            </div>
            <form class="cart">
                <div class="quantity">
                    <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" />
                </div>
                <button type="button" class="single_add_to_cart_button button">Add to cart</button>
            </form>
        </div>
    </div>
</div>
