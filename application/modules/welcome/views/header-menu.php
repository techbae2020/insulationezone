
<section class="top-nav-wrap">
                <div class="container">
                    <div class="top-nav">
                        <div class="row justify-content-between">
                            <div class="top-nav-left d-none d-lg-block">
                                <span>Welcome to Insulation Zone</span>
                            </div>
                            <div class="top-nav-right">
                                <ul class="list-inline top-nav-right-list">
                                    <li>
                                        <a href="en/contact.html">
                                            <i class="las la-phone"></i>
                                            Contact
                                        </a>
                                    </li>
                                    <li>
                                        <a href="en/compare.html">
                                            <i class="las la-random"></i>
                                            Compare
                                        </a>
                                    </li>
                                   <li>
                                        <i class="las la-language"></i>
                                        <select class="custom-select-option arrow-black" onchange="location = this.value">
                                            <option value="ar.html" >Arabic</option>
                                            <option value="https://fleetcart.envaysoft.com/en" selected>English</option>
                                        </select>
                                    </li>
                                    <li>
                                        <i class="las la-money-bill"></i>
                                        <select class="custom-select-option arrow-black" onchange="location = this.value">
                                            <option value="en.html"> SAR</option>
                                            <option value="en.html" selected>USD</option>
                                        </select>
                                    </li>                       
                                    <li>
                                        <a href="<?php echo site_url('welcome/login');?>">
                                            <i class="las la-sign-in-alt"></i>
                                            Login
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <header class="header-wrap">
                <div class="header-wrap-inner">
                    <div class="container">
                        <div class="row flex-nowrap justify-content-between position-relative">
                            <div class="header-column-left">
                                <div class="sidebar-menu-icon-wrap">
                                    <div class="sidebar-menu-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                                <a href="<?php echo site_url();?>" class="header-logo">
                                    <!-- <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 147 31"
                                        preserveAspectRatio="xMinYMid meet">
                                        <g>
                                            <g transform="translate(-164 -55)">
                                                <g transform="translate(-457.529 -7971.529)">
                                                    <rect width="29" height="29" rx="3" transform="translate(622.529 8028.529)" fill="#0068e1" id="logo_f_bg"/>
                                                    <circle cx="2.062" cy="2.062" r="2.062" transform="translate(642.715 8048.341)" fill="#ffb135"/>
                                                    <g transform="translate(622.529 8028.529)">
                                                        <circle cx="23" cy="23" r="23" transform="translate(-25 -26)" fill="#ffffff" opacity="0.1"/>
                                                        <circle cx="23" cy="23" r="23" transform="translate(15 23)" fill="#ffffff" opacity="0.1"/>
                                                    </g>
                                                    <g transform="translate(630.791 8033.531)">
                                                        <g transform="translate(-200.084 -174)" stroke-miterlimit="10" fill="#0068e1" id="logo_f_text">
                                                            <path d="M 200.4339904785156 192.5772552490234 L 200.4339904785156 174.3499908447266 L 212.1227569580078 174.3499908447266 L 211.3375701904297 177.8291931152344 L 204.426025390625 177.8291931152344 L 204.0760192871094 177.8291931152344 L 204.0760192871094 178.1791839599609 L 204.0760192871094 181.8428344726563 L 204.0760192871094 182.1928405761719 L 204.426025390625 182.1928405761719 L 211.1689147949219 182.1928405761719 L 211.5615844726563 185.6720428466797 L 204.426025390625 185.6720428466797 L 204.0760192871094 185.6720428466797 L 204.0760192871094 186.0220336914063 L 204.0760192871094 191.9179992675781 L 200.4339904785156 192.5772552490234 Z" stroke="none" fill="#0068e1" id="logo_f_text_inner"/>
                                                            <path d="M 200.7839965820313 174.6999969482422 L 200.7839965820313 192.158203125 L 203.7260284423828 191.6256561279297 L 203.7260284423828 186.0220336914063 L 203.7260284423828 185.3220367431641 L 204.426025390625 185.3220367431641 L 211.1698608398438 185.3220367431641 L 210.8561859130859 182.5428314208984 L 204.426025390625 182.5428314208984 L 203.7260284423828 182.5428314208984 L 203.7260284423828 181.8428344726563 L 203.7260284423828 178.1791839599609 L 203.7260284423828 177.4791870117188 L 204.426025390625 177.4791870117188 L 211.0577392578125 177.4791870117188 L 211.6849517822266 174.6999969482422 L 200.7839965820313 174.6999969482422 M 200.0839996337891 174 L 212.560546875 174 L 211.6173706054688 178.1791839599609 L 204.426025390625 178.1791839599609 L 204.426025390625 181.8428344726563 L 211.4816284179688 181.8428344726563 L 211.9533081054688 186.0220336914063 L 204.426025390625 186.0220336914063 L 204.426025390625 192.2103271484375 L 200.0839996337891 192.9962921142578 L 200.0839996337891 174 Z" stroke="none" fill="#ffffff"/>
                                                        </g>
                                                    </g>
                                                </g>
                                                <text transform="translate(201 80)" fill="#6e6e6e" font-size="22" font-family="Arial, Helvetica, sans-serif">
                                                    <tspan x="0" y="0">FleetCart</tspan>
                                                </text>
                                            </g>
                                        </g>
                                    </svg> -->
                                    <img src="<?php echo base_url();?>assets/images/logo.jpeg" alt="">
                                </a>
                            </div>
                            <header-search
                                :categories="[{&quot;slug&quot;:&quot;mens-fashion&quot;,&quot;name&quot;:&quot;Men&#039;s Fashion&quot;},{&quot;slug&quot;:&quot;shirts&quot;,&quot;name&quot;:&quot;Shirts&quot;},{&quot;slug&quot;:&quot;jackets&quot;,&quot;name&quot;:&quot;Jackets&quot;},{&quot;slug&quot;:&quot;electronics&quot;,&quot;name&quot;:&quot;Electronics&quot;}]"
                                :most-searched-keywords="[]"
                                initial-query=""
                                initial-category=""
                            >
                            </header-search>
                            <div class="header-column-right d-flex">
                                <a href="en/login.html" class="header-wishlist">
                                    <div class="icon-wrap">
                                        <i class="lar la-heart"></i>
                                        <div class="count" v-text="wishlistCount"></div>
                                    </div>
                                    <span>Favorites</span>
                                </a>
                                <div class="header-cart">
                                    <div class="icon-wrap">
                                        <i class="las la-cart-arrow-down"></i>
                                        <div class="count" v-text="cart.quantity"></div>
                                    </div>
                                    <span v-html="cart.subTotal.inCurrentCurrency.formatted"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <section class="navigation-wrap">
                <div class="container">
                    <div class="navigation-inner">
                        <div class="category-nav show">
                            <div class="category-nav-inner">ALL CATEGORIES<i class="las la-bars"></i></div>
                                <div class="category-dropdown-wrap">
                                    <div class="category-dropdown">
                                        <ul class="list-inline mega-menu vertical-megamenu">
                                            <li class="fluid-menu">
                                                <a href="en/categories/mens-fashion/products.html" class="nav-link menu-item" target="_self" data-text="Men&#039;s Fashion">
                                                    <span class="menu-item-icon">
                                                        <i class="las la-tshirt"></i>
                                                    </span>
                                                    Bradford  Insulation                                     
                                                </a>                                            
                                                 <ul class="list-inline fluid-menu-wrap" style="background-image: url(<?php echo base_url();?>assets/images/VNwyPPjdR15wlVWqB2iOYVDnZjW2X2qI7sDq5yan.webp);">
                                                    <li>
                                                        <div class="fluid-menu-content">
                                                            <div class="fluid-menu-list">
                                                                <ul class="list-inline fluid-sub-menu-list">            
                                                                    <li>
                                                                        <a href="en/categories/shirts/products.html" target="_self">
                                                                        Shirts
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="en/categories/all-clothing/products.html" target="_self">
                                                                        All Clothing
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="en/categories/sportswear/products.html" target="_self">
                                                                        Sportswear
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="en/categories/tees-polos/products.html" target="_self">
                                                                        Belts
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="en/categories/pants/products.html" target="_self">
                                                                        Pants
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="en/categories/formal-shoes/products.html" target="_self">
                                                                        Formal Shoes
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>                               
                                                    </div>
                                                </li>
                                            </ul>
                                            </li>
                                            <li class="fluid-menu">
                                            <a href="en/categories/mens-fashion/products.html" class="nav-link menu-item" target="_self" data-text="Men&#039;s Fashion">
                                                <span class="menu-item-icon">
                                                    <i class="las la-tshirt"></i>
                                                </span>
                                                Earthwool Insulation                                        
                                            </a>                                            
                                             <ul class="list-inline fluid-menu-wrap" style="background-image: url(<?php echo base_url();?>assets/images/VNwyPPjdR15wlVWqB2iOYVDnZjW2X2qI7sDq5yan.webp);">
                                                <li>
                                                    <div class="fluid-menu-content">
                                                        <div class="fluid-menu-list">
                                                            <ul class="list-inline fluid-sub-menu-list">            
                                                                <li>
                                                                    <a href="en/categories/shirts/products.html" target="_self">
                                                                    Shirts
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="en/categories/all-clothing/products.html" target="_self">
                                                                    All Clothing
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="en/categories/sportswear/products.html" target="_self">
                                                                    Sportswear
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="en/categories/tees-polos/products.html" target="_self">
                                                                    Belts
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="en/categories/pants/products.html" target="_self">
                                                                    Pants
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="en/categories/formal-shoes/products.html" target="_self">
                                                                    Formal Shoes
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>                               
                                                </div>
                                            </li>
                                        </ul>
                                            </li>
                                            <li class="fluid-menu">
                                        <a href="en/categories/electronics/products.html" class="nav-link menu-item" target="_self" data-text="Electronics">
                                            <span class="menu-item-icon">
                                                <i class="las la-car-battery"></i>
                                            </span>        
                                            Ecowool Insulation
                                        </a>
                                        <ul class="list-inline fluid-menu-wrap" style="background-image: url(<?php echo base_url();?>assets/images/sYz5yv4PFARhTermBT1eIeQFM1kbKgLLZFPwq0XM.webp);">
                                            <li>
                                                <div class="fluid-menu-content">
                                                    <div class="fluid-menu-list">
                                                        <ul class="list-inline fluid-sub-menu-list">                                                   
                                                            <li>
                                                                <a href="en/categories/iphone/products.html" target="_self">
                                                                    iPhone
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="en/categories/featured/products.html" target="_self">
                                                                    Featured
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="en/categories/refurbished/products.html" target="_self">
                                                                    Refurbished
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="en/categories/brands/products.html" target="_self">
                                                                    Brands
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                            </li>
                                            <li class="fluid-menu">
                                        <a href="en/categories/electronics/products.html" class="nav-link menu-item" target="_self" data-text="Electronics">
                                            <span class="menu-item-icon">
                                                <i class="las la-car-battery"></i>
                                            </span>        
                                            Fletcher Insulation
                                        </a>
                                        <ul class="list-inline fluid-menu-wrap" style="background-image: url(<?php echo base_url();?>assets/images/sYz5yv4PFARhTermBT1eIeQFM1kbKgLLZFPwq0XM.webp);">
                                            <li>
                                                <div class="fluid-menu-content">
                                                    <div class="fluid-menu-list">
                                                        <ul class="list-inline fluid-sub-menu-list">                                                   
                                                            <li>
                                                                <a href="en/categories/iphone/products.html" target="_self">
                                                                    iPhone
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="en/categories/featured/products.html" target="_self">
                                                                    Featured
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="en/categories/refurbished/products.html" target="_self">
                                                                    Refurbished
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="en/categories/brands/products.html" target="_self">
                                                                    Brands
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                            </li>
                                            <li class="fluid-menu">
                                                <a href="en/categories/mens-fashion/products.html" class="nav-link menu-item" target="_self" data-text="Men&#039;s Fashion">
                                                    <span class="menu-item-icon">
                                                        <i class="las la-tshirt"></i>
                                                    </span>
                                                    Knauf Insulation                                        
                                                </a>                                            
                                                    <ul class="list-inline fluid-menu-wrap" style="background-image: url(<?php echo base_url();?>assets/images/VNwyPPjdR15wlVWqB2iOYVDnZjW2X2qI7sDq5yan.webp);">
                                                        <li>
                                                            <div class="fluid-menu-content">
                                                                <div class="fluid-menu-list">
                                                                    <ul class="list-inline fluid-sub-menu-list">            
                                                                        <li>
                                                                            <a href="en/categories/shirts/products.html" target="_self">
                                                                            Shirts
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="en/categories/all-clothing/products.html" target="_self">
                                                                            All Clothing
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="en/categories/sportswear/products.html" target="_self">
                                                                            Sportswear
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="en/categories/tees-polos/products.html" target="_self">
                                                                            Belts
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="en/categories/pants/products.html" target="_self">
                                                                            Pants
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="en/categories/formal-shoes/products.html" target="_self">
                                                                            Formal Shoes
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>                               
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="" class="btn btn-primary btn-sidebar">Wall Insulation</a>
                                            </li>
                                          
                                            <li>
                                                <a href="" class="btn btn-primary btn-sidebar">Ceiling Insulation</a>
                                            </li>
                                            <li>
                                                <a href="" class="btn btn-primary btn-sidebar">Underfloor Insulation</a>
                                            </li>
                                            <li class="more-categories">
                                                <!-- <a href="en/categories.html" class="menu-item">
                                                    <span class="menu-item-icon">
                                                        <i class="las la-plus-square"></i>
                                                    </span>
                                                    All Categories
                                                </a> -->
                                            </li>   
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    <nav class="navbar navbar-expand-sm">
                    <ul class="navbar-nav mega-menu horizontal-megamenu">
                        <li class="nav-item">
                            <a href="<?php echo site_url('welcome/products');?>" class="nav-link menu-item" target="_self" data-text="Shop">     
                                Shop
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('welcome/brands');?>" class="nav-link menu-item" target="_self" data-text="Brands">
                                Brands
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('welcome/booking');?>" class="nav-link menu-item" target="_self" data-text="booking">
                                Booking
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('welcome/about');?>" class="nav-link menu-item" target="_self" data-text="About Us">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('welcome/products');?>" class="nav-link menu-item" target="_self" data-text="Terms Of Use">
                                Terms Of Use
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('welcome/products');?>" class="nav-link menu-item" target="_self" data-text="FAQ">        
                                FAQ
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                <span class="navigation-text">
                    Free shipping over $100+
                </span>
            </div>
        </div>
    </section> 