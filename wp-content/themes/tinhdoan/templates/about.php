<?php
/*
* Template Name: about
*/
?>
<!DOCTYPE html>
<html>

<head>
    <title>Trang chủ</title>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,500&subset=latin,vietnamese,latin-ext" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" type="text/css"
        href="https://baoholaodongdanang.com/wp-content/themes/baoholaodongdanang/css/bootstrap.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/boostrap.css" />
    <!-- <link rel="stylesheet" type="text/css"
        href="https://baoholaodongdanang.com/wp-content/themes/baoholaodongdanang/css/jquery.mmenu.all.css" /> -->
    <!-- <link rel="stylesheet" type="text/css"
        href="https://baoholaodongdanang.com/wp-content/themes/baoholaodongdanang/fonts/font-awesome.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css"
        href="https://baoholaodongdanang.com/wp-content/themes/baoholaodongdanang/css/slick.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/slick.css" />
    <!-- <link rel="stylesheet" type="text/css"
        href="https://baoholaodongdanang.com/wp-content/themes/baoholaodongdanang/css/common.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/common.css" />
    <!-- <link rel="stylesheet" type="text/css"
        href="https://baoholaodongdanang.com/wp-content/themes/baoholaodongdanang/css/css-hex.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/css-hex.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/html/css/jquery.mmenu.all.css">

    <!-- This site is optimized with the Yoast SEO plugin v7.9.1 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="Công ty Bảo hộ lao động tại Đà Nẵng, cung cấp bảo hộ lao động giá sĩ, miễn phí vận chuyển nội thành các mặt hàng. Quần áo Bảo hộ lao động. Giày bảo hộ lao động. Mũ bảo hộ lao động. Áo phản quang. Găng tay bảo hộ. Găng tay chống hóa chất. Găng tay phủ sơn. Khẩu trang hoạt tính. Mặt nạ phòng độc. Nút tai chống ồn. Bình chữa cháy. Vòi chữa cháy. Cọc tiêu giao thông. Cọc phân làn inox." />
    <link rel="canonical" href="https://baoholaodongdanang.com/" />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="BẢO HỘ LAO ĐỘNG ĐÀ NẴNG - BẢO HỘ LAO ĐỘNG GIÁ SỈ" />
    <meta property="og:description" content="Công ty Bảo hộ lao động tại Đà Nẵng, cung cấp bảo hộ lao động giá sĩ, miễn phí vận chuyển nội thành các mặt hàng. Quần áo Bảo hộ lao động. Giày bảo hộ lao động. Mũ bảo hộ lao động. Áo phản quang. Găng tay bảo hộ. Găng tay chống hóa chất. Găng tay phủ sơn. Khẩu trang hoạt tính. Mặt nạ phòng độc. Nút tai chống ồn. Bình chữa cháy. Vòi chữa cháy. Cọc tiêu giao thông. Cọc phân làn inox." />
    <meta property="og:url" content="https://baoholaodongdanang.com/" />
    <meta property="og:site_name" content="Công ty TNHH Thương mại và Kỹ thuật Hưng Phương" />
    <meta property="og:image" content="https://baoholaodongdanang.com/wp-content/uploads/2021/12/Why-Workers-Dont-Wear-Personal-Protective-Equipment-PPE-1-e1639208371268.jpg" />
    <meta property="og:image:secure_url" content="https://baoholaodongdanang.com/wp-content/uploads/2021/12/Why-Workers-Dont-Wear-Personal-Protective-Equipment-PPE-1-e1639208371268.jpg" />
    <meta property="og:image:width" content="550" />
    <meta property="og:image:height" content="367" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Công ty Bảo hộ lao động tại Đà Nẵng, cung cấp bảo hộ lao động giá sĩ, miễn phí vận chuyển nội thành các mặt hàng. Quần áo Bảo hộ lao động. Giày bảo hộ lao động. Mũ bảo hộ lao động. Áo phản quang. Găng tay bảo hộ. Găng tay chống hóa chất. Găng tay phủ sơn. Khẩu trang hoạt tính. Mặt nạ phòng độc. Nút tai chống ồn. Bình chữa cháy. Vòi chữa cháy. Cọc tiêu giao thông. Cọc phân làn inox." />
    <meta name="twitter:title" content="BẢO HỘ LAO ĐỘNG ĐÀ NẴNG - BẢO HỘ LAO ĐỘNG GIÁ SỈ" />
    <link rel="icon" href="<?php bloginfo('template_directory') ?>/html/images/cropped-logo-uchat-1-32x32.jpg" sizes="32x32" />




</head>

<body data-rsssl="1" class="home blog woocommerce-no-js">
    <div id="wrapper">
        <?php get_header(); ?>
        <div class="container">
        <div class="bread-crumb">
                    <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a>','</a>' );
                            }
                        ?>
                    </div>


        <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="ct-post">
                <div class="mcn-title-post text-left custom-title-page">
                    <h2><span style=" font-weight: bold;">Giới Thiệu</span></h2>
                </div>
                <article class="content-post">
                    <p>
                        <span style="font-size: 14pt;">
                            Như chúng ta đã biết, cùng với sự phát triển mạnh mẽ của nền kinh tế thì vấn đề bảo vệ môi
                            trường và bảo vệ an toàn lao động vừa là yêu cầu của pháp luật vừa&nbsp;là một trong những
                            yếu tố cần thiết cho sự phát triển an
                            toàn và bền vững của doanh nghiệp. Hiện nay để thực hiện quy định pháp luật về bảo vệ môi
                            trường và bảo đảm an toàn trong lao động sản xuất các doanh nghiệp phải tìm nhiều nhà cung
                            cấp dịch vụ khác nhau vừa gây lãng phí
                            và tiêu tốn nhiều thời gian cho doanh nghiệp.
                        </span>
                    </p>
                    <p>
                        <span style="font-size: 14pt;">
                            Công ty CÔNG TY TNHH THƯƠNG MẠI VÀ KỸ THUẬT CÔNG NGHỆ QUÝ HẠNH với đội ngũ cán bộ nhiều năm
                            kinh nghiệm
                            trong công tác an toàn vệ sinh lao động; xử lý môi trường (nước cấp, nước thải, khí thải);
                            tư vấn hồ sơ môi trường cho hàng trăm
                            doanh nghiệp sản xuất kinh doanh trên địa bàn Đà Nẵng và khu vực miền Trung. Phương châm
                            chúng tôi mang lại sự tiện nghi cho khách hàng bằng việc cung cấp các dịch vụ và giải pháp
                            toàn diện và chất lượng cho doanh nghiệp
                            bao gồm:
                        </span>
                    </p>
                    <p>
                        <span style="font-size: 14pt;">
                            <strong><span style="color: #ff0000;">I. LĨNH VỰC BẢO HỘ LAO ĐỘNG</span><br /> </strong>
                        </span>
                    </p>
                    <p>
                        <span style="font-size: 14pt;">
                            Công ty TNHH Thương mại và Kỹ Thuật Quý Hạnh là&nbsp;<a href="http://baohovietnam.com/">nhà
                                cung cấp thiết bị bảo hộ lao động</a>&nbsp;uy tín
                            tại khu vực miền Trung. Hiện nay chúng tôi là nhà phân phối tin cậy của
                            nhiều hãng Bảo hộ Lao động uy tín trên thế giới như: Jogger, Sseda, Eagle, 3M, King, … và là
                            đại lý cấp 1 của các&nbsp;thương hiệu&nbsp;Bảo hộ Lao động uy trong nước.&nbsp;Công ty luôn
                            là lựa chọn tối ưu cho các đối tác.
                        </span>
                    </p>
                    <p>
                        <span style="font-size: 14pt;">
                            <strong><em>Mặt hàng bảo hộ lao động Quý Hạnh cung cấp:</em></strong>
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            + Các trang&nbsp;
                            <span style="color: #0391db;">
                                <strong>
                                    <em><a style="color: #0391db;"
                                            href="https://baoholaodongdanang.com/vn/san-pham-1/bao-ve-dau/">thiết bị bảo
                                            vệ đầu</a></em>
                                </strong>
                            </span>
                            &nbsp;như:&nbsp;Mũ bảo hộ,&nbsp;mũ kepi,&nbsp;mũ cách điện, mũ bảo hộ cách nhiệt&nbsp;mũ y
                            tế trùm đầu&nbsp;..
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            +<a href="https://baoholaodongdanang.com/vn/san-pham-2/bao-ve-mat-va-mat/">&nbsp;</a>
                            <span style="color: #0391db;">
                                <strong>
                                    <em><a style="color: #0391db;"
                                            href="https://baoholaodongdanang.com/vn/san-pham-2/bao-ve-mat-va-mat/">Thiết
                                            bị bảo vệ mặt và&nbsp;mắt</a>:</em>
                                </strong>
                            </span>
                            &nbsp;Kính bảo hộ lao động,&nbsp;Kính an toàn,&nbsp;Bồn rửa mắt khẩn cấp,&nbsp;Kính hàn,
                            Kính nhìn lò&nbsp;…
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            +&nbsp;
                            <strong>
                                <em>
                                    <span style="color: #0391db;"><a style="color: #0391db;"
                                            href="https://baoholaodongdanang.com/vn/san-pham-18/bao-ve-tai/">Thiết bị
                                            bảo vệ tai:</a></span>
                                </em>
                            </strong>
                            &nbsp;Nút bị tai chống ồn,&nbsp;Ốp tai phone chống ồn&nbsp;…
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            +&nbsp;
                            <em>
                                <strong>
                                    <span style="color: #0391db;"><a style="color: #0391db;"
                                            href="https://baoholaodongdanang.com/vn/san-pham-3/bao-ve-ho-hap/">Thiết bị
                                            bảo vệ đường hô hấp</a>:</span>
                                </strong>
                            </em>
                            &nbsp;Khẩu trang các loại,&nbsp;Mặt nạ phòng độc các loại&nbsp;…
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            +&nbsp;
                            <strong>
                                <em>
                                    <span style="color: #0391db;"><a style="color: #0391db;"
                                            href="https://baoholaodongdanang.com/vn/san-pham-6/quan-ao-bao-ho/">Trang
                                            phục bảo hộ:</a></span>
                                </em>
                            </strong>
                            &nbsp;Quần áo bảo hộ lao động,&nbsp;Áo phản quang,&nbsp;Áo bảo hộ,&nbsp;Quần bảo hộ,Áo phao
                            cứu hộ,&nbsp;Quần áo mưa&nbsp;…
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            +&nbsp;
                            <span style="color: #0391db;">
                                <strong>
                                    <em><a style="color: #0391db;"
                                            href="https://baoholaodongdanang.com/vn/san-pham-4/bao-ve-tay/">Thiết bị bảo
                                            vệ tay:</a></em>
                                </strong>
                            </span>
                            &nbsp;Găng tay sợi,&nbsp;Găng tay da,&nbsp;Găng tay vải bạt,&nbsp;Găng tay cao su,&nbsp;Găng
                            tay y tế&nbsp;…
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            +&nbsp;
                            <span style="color: #0391db;">
                                <strong>
                                    <em><a style="color: #0391db;"
                                            href="https://baoholaodongdanang.com/vn/san-pham-5/bao-ve-chan/">Thiết bị
                                            bảo vệ chân</a>:</em>
                                </strong>
                            </span>
                            &nbsp;Giày da bảo hộ,&nbsp;Ủng da bảo hộ,&nbsp;Giày – Ủng cao su,&nbsp;Dép trong nhà
                            xưởng&nbsp;…
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            +&nbsp;
                            <span style="color: #0391db;">
                                <strong>
                                    <em><a style="color: #0391db;"
                                            href="https://baoholaodongdanang.com/vn/san-pham-19/an-toan-dien/">Thiết bị
                                            an toàn chống điện giật: </a></em>
                                </strong>
                            </span>
                            Sao cách điện, bộ tiếp địa di dộng, Bút thử điện, thảm cách điện
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            +&nbsp;
                            <span style="color: #0391db;">
                                <strong>
                                    <em><a style="color: #0391db;"
                                            href="https://baoholaodongdanang.com/vn/san-pham-8/thiet-bi-an-toan-tren-cao/">Thiết
                                            bị an toàn trên cao</a>:</em>
                                </strong>
                            </span>
                            &nbsp;Dây an toàn,&nbsp;Thang dây thoát hiểm, Dây cứu nạn …
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            +&nbsp;
                            <span style="color: #0391db;">
                                <strong>
                                    <em>
                                        <a style="color: #0391db;"
                                            href="https://baoholaodongdanang.com/vn/san-pham-21/thiet-bi-canh-bao-an-toan-giao-thong/">Thiết
                                            bị cảnh báo an toàn</a>
                                        <a style="color: #0391db;"
                                            href="https://baoholaodongdanang.com/vn/san-pham-21/thiet-bi-canh-bao-an-toan-giao-thong/">
                                            giao thông</a>
                                    </em>
                                </strong>
                            </span>
                            :&nbsp;Cọc tiêu giao thông,&nbsp;Biển báo giao thông, rào chắn an toàn,&nbsp;bảng chỉ
                            đường&nbsp;…
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            +
                            <span style="color: #0391db;">
                                <strong>
                                    <em><a style="color: #0391db;"
                                            href="https://baoholaodongdanang.com/vn/san-pham-17/thiet-bi-phong-chay-chua-chay/">Thiết
                                            bị PCCC:</a></em>
                                </strong>
                            </span>
                            Bình chữa cháy, Tiêu lệnh PCCC, tủ PCCC…
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            <strong><span style="color: #ff0000;">II. LĨNH VỰC BẢO VỆ MÔI TRƯỜNG VÀ AN TOÀN LAO
                                    ĐỘNG</span><br /> </strong>
                        </span>
                    </p>
                    <p style="text-align: justify;"><span style="font-size: 14pt;">– Cung cấp máy móc thiết bị, vật liệu
                            lọc nước, hóa chất xử lý nước và môi trường;</span></p>
                    <p style="text-align: justify;"><span style="font-size: 14pt;">– Tư vấn, thiết kế, thi công hệ thống
                            xử lý nước thải, nước cấp, nước uống đóng chai, hệ thống xử lý khí thải;</span></p>
                    <p style="text-align: justify;"><span style="font-size: 14pt;">– Bảo trì và vận hành các hệ thống xử
                            lý môi trường;</span></p>
                    <p style="text-align: justify;"><span style="font-size: 14pt;">– Thi công bọc phủ composite chống
                            thấm chống ăn mòn cho các công trình công nghiệp;</span></p>
                    <p style="text-align: justify;"><span style="font-size: 14pt;">– Giám sát môi trường định kỳ, môi
                            trường lao động;</span></p>
                    <p style="text-align: justify;"><span style="font-size: 14pt;">– Huấn luyện an toàn vệ sinh lao
                            đông;</span></p>
                    <p style="text-align: justify;"><span style="font-size: 14pt;">– Tư vấn quản lý môi trường và An
                            toàn – Vệ sinh lao động tại doanh nghiệp (miễn phí);</span></p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            Với đội ngũ nhân viên trẻ được đào tạo trong và ngoài nước có trình độ chuyên môn cao, sáng
                            tạo, năng động sẽ luôn làm hài lòng quý khách hàng với chất lượng sản phẩm tốt nhất cũng như
                            chi phí tư vấn, vận hành và dịch vụ
                            bảo trì tối ưu.
                        </span>
                    </p>
                    <p style="text-align: justify;">
                        <span style="font-size: 14pt;">
                            Công ty chúng tôi&nbsp;rất mong muốn trở thành đối tác tin cậy của các cơ quan, doanh
                            nghiệp, cùng chung tay góp phần bảo vệ môi trường, bảo đảm an toàn vệ sinh lao động cho sự
                            phát triển của doanh nghiệp.
                        </span>
                    </p>
                </article>
               
            </div>
        </div>

        <div class="col-md-3" id="menu_introduct">
            <div class="sidebar widget__left">
                <!-- WIDGET TÙY CHỌN SIDEBAR -->
                <section id="nav_menu-7" class="widget widget_nav_menu">
                    <span class="widget-title">Danh mục sản phẩm</span>
                    <div class="menu-danh-muc-bao-ho-lao-dong-container">
                        <?php get_template_part('sidebar')?>
                    </div>
                </section>
                <div class="sb-hotline">
                    <span><i class="m-ic ic-sbhotline"></i> 0905007482</span>
                </div>
            </div>
            <!-- end sidebar -->
        </div>
    </div>
        <?php get_footer(); ?>