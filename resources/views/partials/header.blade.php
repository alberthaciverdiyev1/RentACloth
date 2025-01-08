<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <div class="lng_dropdown me-2">
                            <select name="countries" class="custome_select">
                                <option value='en' data-image="/images/eng.png" data-title="English">English
                                </option>
                                <option value='fn' data-image="/images/fn.png" data-title="France">France</option>
                                <option value='us' data-image="/images/us.png" data-title="United States">United
                                    States</option>
                            </select>
                        </div>
                        <ul class="contact_detail text-center text-lg-start">
                            <li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-end">
                        <ul class="header_list">
                            <li><a href="/wishlist"><i class="ti-heart"></i><span>Wishlist</span></a></li>
                            <li><a href="/login"><i class="ti-user"></i><span>Login</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img class="logo_light" src="images/logo_light.png" alt="logo" />
                    <img class="logo_dark" src="images/logo_dark.png" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="dropdown">
                            <a class="nav-link active" href="/">Home</a>

                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a href="{{route('home')}}" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">Shop</a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Woman's</li>
                                            <li>
                                                <a class="dropdown-item nav-link nav_item" asp-action="ShopList" asp-controller="Shop">
                                                    Vestibulum
                                                    sed</a></li>
                                            <li>
                                                <a class="dropdown-item nav-link nav_item" asp-controller="ShopController" asp-action="ShopList">
                                                    Donec
                                                    porttitor</a></li>
                                            <li>
                                                <a class="dropdown-item nav-link nav_item" asp-controller="ShopController" asp-action="ShopList">
                                                    Donec vitae
                                                    facilisis</a></li>
                                            <li>
                                                <a class="dropdown-item nav-link nav_item" asp-controller="ShopController" asp-action="ShopList">
                                                    Curabitur
                                                    tempus</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" asp-controller="ShopController" asp-action="ShopList" >Vivamus in
                                                    tortor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Men's</li>
                                            <li><a class="dropdown-item nav-link nav_item" asp-controller="ShopController" asp-action="ShopList" >Donec
                                                    vitae ante ante</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" asp-controller="ShopController" asp-action="ShopList" >Etiam ac
                                                    rutrum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" asp-controller="ShopController" asp-action="ShopList" >Quisque
                                                    condimentum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" asp-controller="ShopController" asp-action="ShopList" >Curabitur
                                                    laoreet</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="order-completed.html">Vivamus in tortor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Kid's</li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-left-sidebar.html">Quisque
                                                    condimentum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-right-sidebar.html">Etiam ac
                                                    rutrum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-thumbnails-left.html">Donec vitae ante
                                                    ante</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-thumbnails-left.html">Donec
                                                    porttitor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Accessories</li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-left-sidebar.html">Quisque
                                                    condimentum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-right-sidebar.html">Etiam ac
                                                    rutrum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-thumbnails-left.html">Donec vitae ante
                                                    ante</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-thumbnails-left.html">Donec
                                                    porttitor</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="d-lg-flex menu_banners row g-3 px-3">
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="/images/menu_banner1.jpg" alt="menu_banner1">
                                            <div class="banne_info">
                                                <h6>10% Off</h6>
                                                <h4>New Arrival</h4>
                                                <a href="#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="/images/menu_banner2.jpg" alt="menu_banner2">
                                            <div class="banne_info">
                                                <h6>15% Off</h6>
                                                <h4>Men's Fashion</h4>
                                                <a href="#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="/images/menu_banner3.jpg" alt="menu_banner3">
                                            <div class="banne_info">
                                                <h6>23% Off</h6>
                                                <h4>Kids Fashion</h4>
                                                <a href="#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-mega-menu">
                            <a class="dropdown-toggle nav-link" asp-controller="ShopController" asp-action="RentList" data-bs-toggle="dropdown">Rent</a>
                            <div class="dropdown-menu">
                                <ul class="mega-menu d-lg-flex">
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Woman's</li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-list-left-sidebar.html">Vestibulum sed</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-left-sidebar.html">Donec porttitor</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-right-sidebar.html">Donec vitae facilisis</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-list.html">Curabitur tempus</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-load-more.html">Vivamus in tortor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Men's</li>
                                            <li><a class="dropdown-item nav-link nav_item" href="shop-cart.html">Donec
                                                    vitae ante ante</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="checkout.html">Etiam ac
                                                    rutrum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="wishlist.html">Quisque
                                                    condimentum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item" href="compare.html">Curabitur
                                                    laoreet</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="order-completed.html">Vivamus in tortor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Kid's</li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-left-sidebar.html">Quisque
                                                    condimentum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-right-sidebar.html">Etiam ac
                                                    rutrum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-thumbnails-left.html">Donec vitae ante
                                                    ante</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-thumbnails-left.html">Donec
                                                    porttitor</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-col col-lg-3">
                                        <ul>
                                            <li class="dropdown-header">Accessories</li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail.html">Donec vitae facilisis</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-left-sidebar.html">Quisque
                                                    condimentum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-right-sidebar.html">Etiam ac
                                                    rutrum</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-thumbnails-left.html">Donec vitae ante
                                                    ante</a></li>
                                            <li><a class="dropdown-item nav-link nav_item"
                                                    href="shop-product-detail-thumbnails-left.html">Donec
                                                    porttitor</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="d-lg-flex menu_banners row g-3 px-3">
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="/images/menu_banner1.jpg" alt="menu_banner1">
                                            <div class="banne_info">
                                                <h6>10% Off</h6>
                                                <h4>New Arrival</h4>
                                                <a href="#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="/images/menu_banner2.jpg" alt="menu_banner2">
                                            <div class="banne_info">
                                                <h6>15% Off</h6>
                                                <h4>Men's Fashion</h4>
                                                <a href="#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="header-banner">
                                            <img src="/images/menu_banner3.jpg" alt="menu_banner3">
                                            <div class="banne_info">
                                                <h6>23% Off</h6>
                                                <h4>Kids Fashion</h4>
                                                <a href="#">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a class="nav-link nav_item" href="{{route('contact_us')}}">Contact</a></li>
                        <li><a class="nav-link nav_item"  href="{{route('about_us')}}">About</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i
                                class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <div class="search_overlay"></div>
                    </li>
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#"
                            data-bs-toggle="dropdown"><i class="linearicons-cart"></i><span
                                class="cart_count">2</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="/images/cart_thamb1.jpg" alt="cart_thumb1">Variable
                                        product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed
                                        consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span
                                                class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span
                                            class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons">
                                    <a href="/cart" class=" btn-fill-out rounded-0 checkout">View Cart</a>
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->
