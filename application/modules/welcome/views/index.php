<!DOCTYPE html>
<html lang="en"> 
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <base >
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>Insulation Zone | Home page</title>
        <?php $this->load->view('header');?>
		
		</head>

    <body
        class="page-template ltr"
        data-theme-color="#0068e1"
        style="--color-primary: #0068e1;
            --color-primary-hover: #0055b8;
            --color-primary-transparent: rgba(0, 104, 225, 0.8);
            --color-primary-transparent-lite: rgba(0, 104, 225, 0.3);"
    >
    <div class="wrapper" id="app">
    <?php $this->load->view('header-menu');?>    
    <section class="home-section-wrap">
        <div class="container">
            <div class="row">
                <div class="home-section-inner">
                    <div class="home-slider-wrap">
                        <div class="home-slider"
                        data-speed="1000"
                        data-autoplay="1"
                        data-autoplay-speed="5000"
                        data-fade="0"
                        data-dots="1"
                        data-arrows="1"
                    >
                        <div class="slide">
                            <img src="<?php echo base_url();?>assets/images/wall-and-ceiling-insulation.jpg" data-animation-in="zoomInImage" class="slider-image animated">
                                <div class="slide-content align-left">
                                    <div class="captions">
                                        <span class="caption caption-1" data-animation-in="fadeInRight" data-delay-in="">
                                            <b>Wall Ceiling</b> Insulation
                                        </span>
                                        <span
                                            class="caption caption-2"
                                            data-animation-in="fadeInRight"
                                            data-delay-in="0.3"
                                        >
                                            There are a upgrade for the quality and control in the home
                                        </span>
                                        <a href="#" class="btn btn-primary btn-slider" data-animation-in="fadeInUp" data-delay-in="0.7"  target="_blank">
                                                SHOP NOW
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <img src="<?php echo base_url();?>assets/images/earthwool.jfif" data-animation-in="zoomInImage" class="slider-image animated">
                                <div class="slide-content align-right">
                                    <div class="captions">
                                        <span
                                            class="caption caption-1"
                                            data-animation-in="fadeInLeft"
                                            data-delay-in="0"
                                        >
                                            <b>Earthwool</b>Insulation
                                        </span>
                                        <span
                                            class="caption caption-2"
                                            data-animation-in="fadeInLeft"
                                            data-delay-in="0.3"
                                        >
                                            VR 3D glasses with remote control gamepad at best price
                                        </span>
                                        <a  href="#" class="btn btn-primary btn-slider" data-animation-in="fadeInUp" data-delay-in="0.7" target="_self" >
                                            BUY NOW
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="slide">
                                <img src="<?php echo base_url();?>assets/images/knuf-insulation.jpg" data-animation-in="zoomInImage" class="slider-image animated">
                                <div class="slide-content align-left">
                                    <div class="captions">
                                        <span
                                            class="caption caption-1"
                                            data-animation-in="fadeInRight"
                                            data-delay-in="0"
                                        >
                                            <b>Knuf</b> Insulation
                                        </span>
                                        <span
                                            class="caption caption-2"
                                            data-animation-in="fadeInRight"
                                            data-delay-in="0.3"
                                        >
                                            The creative's shop for flying cameras and flight controllers
                                        </span>
                                        <a href="#" class="btn btn-primary btn-slider" data-animation-in="fadeInUp" data-delay-in="0.7" target="_self">
                                            ORDER NOW
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="home-banner-wrap">
                        <a href="#"
                            class="banner"
                            target="_self"
                        >
                            <img src="<?php echo base_url();?>assets/images/5siKhRlEDQFmbiJRwCNBW3rDsbG7m1r2PibvtNeF.webp" alt="banner">
                        </a>
                        <a href="#"
                            class="banner m-t-30"
                            target="_blank"
                        >
                            <img src="<?php echo base_url();?>assets/images/yl6rNkswnKQzh7mouQ0HpagRLwBpnq3Mt9LZMRak.webp" alt="banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- <featured-categories :data="{&quot;title&quot;:&quot;Top Categories in Sales and Trending&quot;,&quot;subtitle&quot;:&quot;Last Month upto 1500+ Products Sales From this catagory. You can choose a product from here and save money.&quot;,&quot;categories&quot;:[{&quot;name&quot;:&quot;Laptops&quot;,&quot;logo&quot;:{&quot;id&quot;:1331,&quot;filename&quot;:&quot;laptop-145x145-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/2cZfkz85nXxlSTySz6R8m34u5UQLfiRQVyKjF8hm.webp&quot;}},{&quot;name&quot;:&quot;Mobiles&quot;,&quot;logo&quot;:{&quot;id&quot;:1330,&quot;filename&quot;:&quot;mobile-145x145.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/UAP07Ygha9iXNfG1Rh6DYWrwVQ3HfkuqetLaLc6M.webp&quot;}},{&quot;name&quot;:&quot;Tablets&quot;,&quot;logo&quot;:{&quot;id&quot;:1335,&quot;filename&quot;:&quot;tablet-145x145.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/dzeszBwEcUnjWoixHvGYJD7uD2j6BWsy7TBK7tcJ.webp&quot;}},{&quot;name&quot;:&quot;Watches&quot;,&quot;logo&quot;:{&quot;id&quot;:1333,&quot;filename&quot;:&quot;watch-145x145.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/0Ae4WkaGunLTgTDf24i2ui0hhGB2kZPRVS5k7rn8.webp&quot;}},{&quot;name&quot;:&quot;Men&#039;s Fashion&quot;,&quot;logo&quot;:{&quot;id&quot;:1332,&quot;filename&quot;:&quot;sunglass-145x145.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/4vy12UtugCqB76AoWvy0cAHlzKb1HZsklmkOQ6hK.webp&quot;}},{&quot;name&quot;:&quot;Televisions&quot;,&quot;logo&quot;:{&quot;id&quot;:1334,&quot;filename&quot;:&quot;television-145x145-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/sjBHD1SNqe4BgkqmvqmWAB7U759HOZPVJRvV1Qbr.webp&quot;}}]}"></featured-categories>     -->
    
    <banner-three-column-full-width :data="{&quot;background&quot;:{&quot;image&quot;:{&quot;id&quot;:982,&quot;filename&quot;:&quot;banner-bg-min.png&quot;,&quot;path&quot;:&quot;<?php echo base_url();?>\/assets\/images\/vm21euwszrldK6E9iEtqsm2WtiJ4OyaA7VIGHPe3.webp&quot;},&quot;call_to_action_url&quot;:null,&quot;open_in_new_window&quot;:false},&quot;banner_1&quot;:{&quot;image&quot;:{&quot;id&quot;:974,&quot;filename&quot;:&quot;03@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/SnNz5B0YIEGCw1OdLhFJbqF7hfCNc80adaLCdqOE.webp&quot;},&quot;call_to_action_url&quot;:&quot;#&quot;,&quot;open_in_new_window&quot;:false},&quot;banner_2&quot;:{&quot;image&quot;:{&quot;id&quot;:977,&quot;filename&quot;:&quot;04@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/3YFgcINuEaLyLvy6QjxKwKVDMALI9qzmXEN7Vqx3.webp&quot;},&quot;call_to_action_url&quot;:&quot;#&quot;,&quot;open_in_new_window&quot;:false},&quot;banner_3&quot;:{&quot;image&quot;:{&quot;id&quot;:976,&quot;filename&quot;:&quot;05@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/pmQxhyWNznFCMZvc4KTv4HNk4RfG3eBlNqR0xsCt.webp&quot;},&quot;call_to_action_url&quot;:&quot;#&quot;,&quot;open_in_new_window&quot;:false}}"></banner-three-column-full-width>
    <product-tabs-one :data="[&quot;Featured&quot;,&quot;Special&quot;,&quot;New Arrival&quot;,&quot;Latest&quot;]"></product-tabs-one>
    <top-brands :top-brands="[{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/asus\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1312,&quot;filename&quot;:&quot;Brand 01 \u2013 7@3x-min.png&quot;,&quot;path&quot;:&quot;<?php echo base_url();?>\/assets\/images\/JnH5uK3QY3mOamQ8NsHCbtqj0xULHsjOTHtHTbeO.webp&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/acer\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1313,&quot;filename&quot;:&quot;Brand 01 \u2013 6@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/rCfwklCfNTBKz4JGeloPqqI7BTS8PdYibzEkB8mS.webp&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/adidas\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1305,&quot;filename&quot;:&quot;Brand 01 \u2013 1@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/H0BnQ6XoB6vBb1YAkRg22mncLS76Yv0zGz4T4M04.webp&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/apple\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1319,&quot;filename&quot;:&quot;Brand 01 \u2013 11@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/jZG1juhijMhWSrn8B4jgsX5x4Vb8dOTdZTtGNACo.webp&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/beats\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1306,&quot;filename&quot;:&quot;Brand 01 \u2013 4@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/3IcUp71JfyiH3wkWU0omhlcs0xqgdWzmY3Z4imMO.webp&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/dell\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1314,&quot;filename&quot;:&quot;Brand 01 \u2013 9@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/8bmlnpJluQBwAAJolyS708652aY6Kj8dEmYQ7woo.webp&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/hp\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1315,&quot;filename&quot;:&quot;Brand 01 \u2013 10@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/j2WP3lfi8JTanXQsxrNDclJAb2RHKxBOtlQwlK2g.webp&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/huawei\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1317,&quot;filename&quot;:&quot;Brand 01 \u2013 5@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/SbgS1CCecSpvvnBeBmG6xP49q2NymXQzJpiHbMAi.webp&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/lg\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1307,&quot;filename&quot;:&quot;Brand 01 \u2013 13@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/P9UF8sprnzBNqEnbAd2j82UA4b0fzk85uIZp4H4s.webp&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/msi\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1308,&quot;filename&quot;:&quot;Brand 01 \u2013 12@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/8DfT3LNUhYbei3YrhJ1FscMVKiPPQi43LdCY29Am.webp&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/levis\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1303,&quot;filename&quot;:&quot;Brand 01@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/Quysi8IloZADWNe2ZxeK98PN4FgHpoQWBXSnhlQV.webp&quot;}},{&quot;url&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/en\/brands\/samsung\/products&quot;,&quot;logo&quot;:{&quot;id&quot;:1318,&quot;filename&quot;:&quot;Brand 01 \u2013 8@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/nshpkDL124reDq8apPXBcpVrnV8ABDzC88R5gg3K.webp&quot;}}]"></top-brands>
    <flash-sale-and-vertical-products :data="{&quot;flash_sale_title&quot;:&quot;Best &lt;b&gt;Deals&lt;\/b&gt;&quot;,&quot;vertical_products_1_title&quot;:&quot;Watches&quot;,&quot;vertical_products_2_title&quot;:&quot;Backpacks&quot;,&quot;vertical_products_3_title&quot;:&quot;Shirts&quot;}"></flash-sale-and-vertical-products>
    <banner-two-column :data="{&quot;banner_1&quot;:{&quot;image&quot;:{&quot;id&quot;:1339,&quot;filename&quot;:&quot;06 \u2013 1@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/kSSkGodUfAKYy1UVZ8CicO8oay5PKO4L3DdEE9Tw.webp&quot;},&quot;call_to_action_url&quot;:&quot;#&quot;,&quot;open_in_new_window&quot;:false},&quot;banner_2&quot;:{&quot;image&quot;:{&quot;id&quot;:1338,&quot;filename&quot;:&quot;07 \u2013 1@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/VVyvSfw4dAZI57qelPofORurzNNc7rDlsxVbTO5m.webp&quot;},&quot;call_to_action_url&quot;:&quot;#&quot;,&quot;open_in_new_window&quot;:false}}"></banner-two-column>
    <product-grid :data="[&quot;Mobiles&quot;,&quot;Fashion&quot;,&quot;Laptops&quot;,&quot;Tablets&quot;]"></product-grid>
    <banner-three-column :data="{&quot;banner_1&quot;:{&quot;image&quot;:{&quot;id&quot;:787,&quot;filename&quot;:&quot;08@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/QXeAdEOGLNAIj5Ntx7prAuuHRJmqNebRckNhV5WS.webp&quot;},&quot;call_to_action_url&quot;:&quot;#&quot;,&quot;open_in_new_window&quot;:false},&quot;banner_2&quot;:{&quot;image&quot;:{&quot;id&quot;:785,&quot;filename&quot;:&quot;09@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/tUZc6W65OryxcoIDT1umT0irIynod8t904Q7bRbG.webp&quot;},&quot;call_to_action_url&quot;:&quot;#&quot;,&quot;open_in_new_window&quot;:false},&quot;banner_3&quot;:{&quot;image&quot;:{&quot;id&quot;:786,&quot;filename&quot;:&quot;10@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/32Z48wigiMEXJZLDUN20Ea0f7NTMKZHf93qHFtLg.webp&quot;},&quot;call_to_action_url&quot;:&quot;#&quot;,&quot;open_in_new_window&quot;:false}}"></banner-three-column>
    <product-tabs-two :data="{&quot;title&quot;:&quot;Hot Best Sellers&quot;,&quot;tabs&quot;:[&quot;Latest Products&quot;,&quot;Recently Viewed&quot;,&quot;On Sale&quot;,&quot;Top Selling&quot;]}"></product-tabs-two>
    <banner-one-column :banner="{&quot;image&quot;:{&quot;id&quot;:1102,&quot;filename&quot;:&quot;11@3x-min.png&quot;,&quot;path&quot;:&quot;https:\/\/fleetcart.envaysoft.com\/storage\/media\/kRb5N2mGVnso21KKTsxenE4GuH3fjej5r2m8vY8V.webp&quot;},&quot;call_to_action_url&quot;:&quot;#&quot;,&quot;open_in_new_window&quot;:true}"></banner-one-column>
    
    <?php $this->load->view('side-footer-menu');?>
    </div>
   <?php $this->load->view('footer');?>
    
    </body>
</html>
