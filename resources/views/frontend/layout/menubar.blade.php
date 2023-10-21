<div class="header-wrap classicHeader animated d-flex">
    <div class="container-fluid">        
        <div class="row align-items-center">
            <!--Desktop Logo-->
            <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                <a href="{{route('frontend.index')}}">
                    <img src="frontend/assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                </a>
            </div>
            <!--End Desktop Logo-->
            <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                <div class="d-block d-lg-none">
                    <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        <i class="icon anm anm-times-l"></i>
                        <i class="anm anm-bars-r"></i>
                    </button>
                </div>
                <!--Desktop Menu-->
                <nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                    <ul id="siteNav" class="site-nav medium center hidearrow">
                        <li class="lvl1 parent megamenu"><a href="#">Home <i class="anm anm-angle-down-l"></i></a>

                        </li>
                        <li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-angle-down-l"></i></a>
                            <div class="megamenu style4">
                                <ul class="grid grid--uniform mmWrapper">
                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Shop Pages</a>
                                        <ul class="subLinks">
                                            <li class="lvl-2"><a href="shop-left-sidebar.html" class="site-nav lvl-2">Left Sidebar</a></li>
                                            <li class="lvl-2"><a href="shop-right-sidebar.html" class="site-nav lvl-2">Right Sidebar</a></li>
                                            <li class="lvl-2"><a href="shop-fullwidth.html" class="site-nav lvl-2">Fullwidth</a></li>
                                            <li class="lvl-2"><a href="shop-grid-3.html" class="site-nav lvl-2">3 items per row</a></li>
                                            <li class="lvl-2"><a href="shop-grid-4.html" class="site-nav lvl-2">4 items per row</a></li>
                                            <li class="lvl-2"><a href="shop-grid-5.html" class="site-nav lvl-2">5 items per row</a></li>
                                            <li class="lvl-2"><a href="shop-grid-6.html" class="site-nav lvl-2">6 items per row</a></li>
                                            <li class="lvl-2"><a href="shop-grid-7.html" class="site-nav lvl-2">7 items per row</a></li>
                                            <li class="lvl-2"><a href="shop-listview.html" class="site-nav lvl-2">Product Listview</a></li>
                                        </ul>
                                    </li>
                                      
                                </ul>
                              </div>
                        </li>
                    <li class="lvl1 parent megamenu"><a href="#">Product <i class="anm anm-angle-down-l"></i></a>
                        <div class="megamenu style2">
                            <ul class="grid mmWrapper">
                                <li class="grid__item one-whole">
                                    <ul class="grid">
                                        <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#" class="site-nav lvl-1">Product Page</a>
                                            <ul class="subLinks">
                                                <li class="lvl-2"><a href="product-layout-1.html" class="site-nav lvl-2">Product Layout 1</a></li>
                                                <li class="lvl-2"><a href="product-layout-2.html" class="site-nav lvl-2">Product Layout 2</a></li>
                                                <li class="lvl-2"><a href="product-layout-3.html" class="site-nav lvl-2">Product Layout 3</a></li>
                                                <li class="lvl-2"><a href="product-with-left-thumbs.html" class="site-nav lvl-2">Product With Left Thumbs</a></li>
                                                <li class="lvl-2"><a href="product-with-right-thumbs.html" class="site-nav lvl-2">Product With Right Thumbs</a></li>
                                                <li class="lvl-2"><a href="product-with-bottom-thumbs.html" class="site-nav lvl-2">Product With Bottom Thumbs</a></li>
                                            </ul>
                                        </li>
             
                                    </ul>
                                </li>
                                  <li class="grid__item large-up--one-whole imageCol"><a href="#"><img src="frontend/assets/images/megamenu-bg2.jpg" alt=""></a></li>
                            </ul>
                          </div>
                    </li>
                    <li class="lvl1 parent dropdown"><a href="#">Pages <i class="anm anm-angle-down-l"></i></a>
                      
                    </li>
                    <li class="lvl1 parent dropdown"><a href="#">Blog <i class="anm anm-angle-down-l"></i></a>
                      
                    </li>
                    <li class="lvl1"><a href="#"><b>Buy Now!</b> <i class="anm anm-angle-down-l"></i></a></li>
                  </ul>
                </nav>
                <!--End Desktop Menu-->
            </div>
            <!--Mobile Logo-->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                <div class="logo">
                    <a href="route('frontend.index')">
                        <img src="frontend/assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                    </a>
                </div>
            </div>
            <!--Mobile Logo-->
            <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                <div class="site-cart">
                    <a href="#" class="site-header__cart" title="Cart">
                        <i class="icon anm anm-bag-l"></i>
                        <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span>
                    </a>
                    <!--Minicart Popup-->
                    <div id="header-cart" class="block block-cart">
                        <ul class="mini-products-list">
                            <li class="item">
                                <a class="product-image" href="#">
                                    <img src="frontend/assets/images/product-images/cape-dress-1.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
                                </a>
                                <div class="product-details">
                                    <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                    <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                    <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                    <div class="variant-cart">Black / XL</div>
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <span class="label">Qty:</span>
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                            <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money">$59.00</span>
                                        </div>
                                     </div>
                                </div>
                            </li>
                            <li class="item">
                                <a class="product-image" href="#">
                                    <img src="frontend/assets/images/product-images/cape-dress-2.jpg" alt="Elastic Waist Dress - Black / Small" title="" />
                                </a>
                                <div class="product-details">
                                    <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                    <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                    <a class="pName" href="cart.html">Elastic Waist Dress</a>
                                    <div class="variant-cart">Gray / XXL</div>
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <span class="label">Qty:</span>
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                            <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                       <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money">$99.00</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="total">
                            <div class="total-in">
                                <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                            </div>
                             <div class="buttonSet text-center">
                                <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                            </div>
                        </div>
                    </div>
                    <!--EndMinicart Popup-->
                </div>
                <div class="site-header__search">
                    <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>