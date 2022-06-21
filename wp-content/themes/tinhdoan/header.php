<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="mcn-logo col-md-4">
                    <h1>
                        <a href="https://baoholaodongvatuvanmoitruongdn.com"><img style="width: 300px;" src="<?php bloginfo('template_directory') ?>/html/images/logo-moitruong.jpg" alt="logo_page" /></a>
                    </h1>
                </div>
                <div class="header-right col-md-8">
                    <ul class="header__phone s1 row">
                        <li class="col-md-4 col-sm-4"><i class="fa fa-phone" aria-hidden="true"></i>0944750583
                        </li>
                        <li class="col-md-4 col-sm-4"><i class="fa fa-mobile"></i> 0905007482</li>
                        <li class="col-md-4 col-sm-4"><i class="fa fa-fax"></i>0236.3.55.16.57</li>
                    </ul>
                    <ul class="header__phone s2 row" style="margin-top: 12px;">
                        <li class="col-sm-4">
                            <div class="d-flex">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div>
                                    <p>Hỗ trợ khách hàng 24/24</p>
                                    <p>0944 750 583</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-sm-4">
                            <div class="d-flex">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div>
                                    <p>Bảo hộ lao động</p>
                                    <p>0905 274 461</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-sm-4">
                            <div class="d-flex">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div>
                                    <p>Tư vấn môi trường</p>
                                    <p>0905 007 482</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <p class="header__local text-right"><i class="fa fa-map-marker" aria-hidden="true"></i>
                        Tổ 4 Thôn Phước Hưng, xã Hòa Nhơn Huyện Hòa Vang TP Đà Nẵng
                    </p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="header-bot">
        <div class="container">
            <div class="mcn-menu pull-left">
                <a href="#menu-mobile" class="menu-mobile _toggle-menu"><span>Menu Mobile</span></a>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_id' => 'menu-menu-top',
                        'menu_class' => 'menu hidden-sm hidden-xs'
                    )
                );
                ?>
            </div>
            <!-- end tm-menu -->

            <div class="clear"></div>
        </div>
    </div>
    <!-- end header-bot -->
    <nav id="menu-mobile">
        <ul>
        <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_id' => 'menu-menu-top-1',
                        // 'menu_class' => 'menu hidden-sm hidden-xs'
                    )
                );
                ?>
        </ul>
        <a class="_close _toggle-menu" href="javascript:void(0)"></a>
    </nav>
</header>