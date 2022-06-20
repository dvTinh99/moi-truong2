<?php
/*
* Template Name: giay-phep
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
        <div id="content">
        <div id="main-content" class="wrap__page">
            <div class="container">
            <div class="bread-crumb">
                    <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<a>','</a>' );
                            }
                        ?>
                    </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="box_mucluc">
                            <div class="fix-toc">
                                <div class="toctitle" style="line-height: 25px;"><img class="toctoggle"
                                        src="https://cdn.thuvienphapluat.vn/images/mluc.png"
                                        alt="Mục lục bài viết" />Mục lục bài viết</div>
                                <ul>
                                    <li class="toclevel-1">
                                        <a href="javascript:void(0)" onclick="_scrollTo('ancho1')"><span
                                                class="id-list">1. Giấy phép môi trường là gì?</span></a>
                                    </li>
                                    <li class="toclevel-1">
                                        <a href="javascript:void(0)" onclick="_scrollTo('ancho2')"><span
                                                class="id-list">2. Đối tượng phải có giấy phép môi trường</span></a>
                                    </li>
                                    <li class="toclevel-1">
                                        <a href="javascript:void(0)" onclick="_scrollTo('ancho3')"><span
                                                class="id-list">3. Thời hạn của giấy phép môi trường </span></a>
                                    </li>
                                    <li class="toclevel-1">
                                        <a href="javascript:void(0)" onclick="_scrollTo('ancho4')"><span
                                                class="id-list">4. Hồ sơ, trình tự đề nghị cấp giấy phép môi
                                                trường</span></a>
                                    </li>
                                    <li class="toclevel-2">
                                        <a href="javascript:void(0)" onclick="_scrollTo('ancho5')"><span
                                                class="id-list">&nbsp;4.1. Hồ sơ đề nghị cấp giấy phép môi
                                                trường</span></a>
                                    </li>
                                    <li class="toclevel-2">
                                        <a href="javascript:void(0)" onclick="_scrollTo('ancho6')"><span
                                                class="id-list">&nbsp;4.2. Trình tự, thủ tục cấp giấy phép môi
                                                trường</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="newcontent">
                            <p><img alt="Đối tượng nào phải có giấy phép môi trường?"
                                    src="https://cdn.thuvienphapluat.vn//uploads/tintuc/2022/04/23/GIAY-PHEP-MOI-TRUONG.png"
                                    style="width: 560px; height: 291px;" /></p>

                            <p><em>Đối tượng nào phải có giấy phép môi trường? (Ảnh minh họa)</em></p>
                            <br>
                            <h2 id="ancho1">
                                <span class="id-list" style="font-size: 14px;"><strong>1. Giấy phép môi trường là
                                        gì?</strong></span>
                            </h2>

                            <p>
                                Giấy phép môi trường là văn bản do cơ quan quản lý nhà nước có thẩm quyền cấp cho tổ
                                chức, cá nhân có hoạt động sản xuất, kinh doanh, dịch vụ được phép xả chất thải ra môi
                                trường, quản lý chất thải, nhập khẩu phế liệu từ nước
                                ngoài làm nguyên liệu sản xuất kèm theo yêu cầu, điều kiện về bảo vệ môi trường theo quy
                                định của pháp luật.
                            </p>

                            <p>(Khoản 8 Điều 3 <a
                                    href="https://thuvienphapluat.vn/van-ban/Tai-nguyen-Moi-truong/Luat-so-72-2020-QH14-Bao-ve-moi-truong-2020-431147.aspx"
                                    target="_blank">Luật Bảo vệ môi trường 2020</a>)</p>
                            <br>

                            <h2 id="ancho2">
                                <span class="id-list" style="font-size: 14px;"><strong>2. Đối tượng phải có giấy phép
                                        môi
                                        trường</strong></span>
                            </h2>

                            <p>Các đối tượng sau đây phải có giấy phép môi trường:</p>

                            <p>
                                - Đối tượng 1: Dự án đầu tư nhóm I, nhóm II và nhóm III có phát sinh nước thải, bụi, khí
                                thải xả ra môi trường phải được xử lý hoặc phát sinh chất thải nguy hại phải được quản
                                lý theo quy định về quản lý chất thải khi đi vào vận
                                hành chính thức.
                            </p>

                            <p>Các đối tượng trên mà thuộc trường hợp dự án đầu tư công khẩn cấp theo quy định của pháp
                                luật về đầu tư công được miễn giấy phép môi trường.</p>

                            <p>- Đối tượng 2: Dự án đầu tư, cơ sở, khu sản xuất, kinh doanh, dịch vụ tập trung, cụm công
                                nghiệp hoạt động trước ngày 01/01/2022 có tiêu chí về môi trường như đối tượng 1.</p>

                            <p>(Điều 39 <a
                                    href="https://thuvienphapluat.vn/van-ban/Tai-nguyen-Moi-truong/Luat-so-72-2020-QH14-Bao-ve-moi-truong-2020-431147.aspx"
                                    target="_blank">Luật Bảo vệ môi trường 2020</a>)</p>
                            <br>
                            <h2 id="ancho3">
                                <span class="id-list" style="font-size: 14px;"><strong>3. Thời hạn của giấy phép môi
                                        trường
                                    </strong></span>
                            </h2>

                            <p>Thời hạn của giấy phép môi trường được quy định như sau:</p>

                            <p>- 07 năm đối với dự án đầu tư nhóm I;</p>

                            <p>- 07 năm đối với cơ sở sản xuất, kinh doanh, dịch vụ, khu sản xuất, kinh doanh, dịch vụ
                                tập trung, cụm công nghiệp hoạt động trước ngày 01/01/2022 có tiêu chí về môi trường như
                                dự án đầu tư nhóm I;</p>

                            <p>
                                - 10 năm đối với đối tượng không thuộc quy định tại điểm a và điểm b khoản 4 Điều 40
                                <a href="https://thuvienphapluat.vn/van-ban/Tai-nguyen-Moi-truong/Luat-so-72-2020-QH14-Bao-ve-moi-truong-2020-431147.aspx"
                                    target="_blank">Luật Bảo vệ môi trường 2020</a>;
                            </p>

                            <p>
                                - Thời hạn của giấy phép môi trường có thể ngắn hơn thời hạn quy định tại các điểm a, b
                                và c khoản 4 Điều 40
                                <a href="https://thuvienphapluat.vn/van-ban/Tai-nguyen-Moi-truong/Luat-so-72-2020-QH14-Bao-ve-moi-truong-2020-431147.aspx"
                                    target="_blank">Luật Bảo vệ môi trường 2020</a> theo đề nghị của chủ dự án đầu tư,
                                cơ sở, chủ đầu tư xây
                                dựng và kinh doanh hạ tầng khu sản xuất, kinh doanh, dịch vụ tập trung, cụm công nghiệp
                                (sau đây gọi chung là chủ dự án đầu tư, cơ sở).
                            </p>

                            <p>(Khoản 4 Điều 40 <a
                                    href="https://thuvienphapluat.vn/van-ban/Tai-nguyen-Moi-truong/Luat-so-72-2020-QH14-Bao-ve-moi-truong-2020-431147.aspx"
                                    target="_blank">Luật Bảo vệ môi trường 2020</a>)</p>
                            <br>
                            <h2 id="ancho4">
                                <span class="id-list" style="font-size: 14px;"><strong>4. Hồ sơ, trình tự đề nghị cấp
                                        giấy phép môi
                                        trường</strong></span>
                            </h2>
                            <br>
                            <h3 id="ancho5">
                                <span class="id-list" style="font-size: 14px;">
                                    <strong><em>4.1. Hồ sơ đề nghị cấp giấy phép môi trường</em></strong>
                                </span>
                            </h3>

                            <p>- Văn bản đề nghị cấp giấy phép môi trường;</p>

                            <p>- Báo cáo đề xuất cấp giấy phép môi trường;</p>

                            <p>- Tài liệu pháp lý và kỹ thuật khác của dự án đầu tư, cơ sở, khu sản xuất, kinh doanh,
                                dịch vụ tập trung, cụm công nghiệp.</p>
                            <h3 id="ancho6">
                                <span class="id-list" style="font-size: 14px;">
                                    <strong><em>4.2. Trình tự, thủ tục cấp giấy phép môi trường</em></strong>
                                </span>
                            </h3>

                            <p>
                                - Chủ dự án đầu tư, cơ sở gửi hồ sơ đề nghị cấp giấy phép môi trường đến cơ quan có thẩm
                                quyền quy định tại Điều 41 của
                                <a href="https://thuvienphapluat.vn/van-ban/Tai-nguyen-Moi-truong/Luat-so-72-2020-QH14-Bao-ve-moi-truong-2020-431147.aspx"
                                    target="_blank">Luật Bảo vệ môi trường 2020</a>.
                            </p>

                            <p>Hồ sơ được gửi trực tiếp hoặc qua đường bưu điện hoặc bản điện tử thông qua hệ thống dịch
                                vụ công trực tuyến;</p>

                            <p>- Cơ quan có thẩm quyền cấp giấy phép môi trường có trách nhiệm tổ chức tiếp nhận và kiểm
                                tra tính đầy đủ, hợp lệ của hồ sơ;</p>

                            <p>Công khai nội dung báo cáo đề xuất cấp giấy phép môi trường, trừ thông tin thuộc bí mật
                                nhà nước, bí mật của doanh nghiệp theo quy định của pháp luật; tham vấn ý kiến của cơ
                                quan, tổ chức, cá nhân có liên quan;</p>

                            <p>Kiểm tra thực tế thông tin dự án đầu tư, cơ sở, khu sản xuất, kinh doanh, dịch vụ tập
                                trung, cụm công nghiệp; tổ chức việc thẩm định, cấp giấy phép môi trường.</p>

                            <p>Quy trình tiếp nhận, giải quyết thủ tục hành chính và thông báo kết quả được thực hiện
                                trực tiếp, qua đường bưu điện hoặc gửi bản điện tử thông qua hệ thống dịch vụ công trực
                                tuyến theo đề nghị của chủ dự án đầu tư, cơ sở;</p>

                            <p>
                                - Trường hợp dự án đầu tư, cơ sở, khu sản xuất, kinh doanh, dịch vụ tập trung, cụm công
                                nghiệp có hoạt động xả nước thải vào công trình thủy lợi, cơ quan cấp giấy phép môi
                                trường phải lấy ý kiến bằng văn bản và đạt được sự đồng
                                thuận của cơ quan nhà nước quản lý công trình thủy lợi đó trước khi cấp giấy phép môi
                                trường;
                            </p>

                            <p>
                                - Trường hợp dự án đầu tư, cơ sở nằm trong khu sản xuất, kinh doanh, dịch vụ tập trung,
                                cụm công nghiệp, cơ quan cấp giấy phép môi trường phải lấy ý kiến bằng văn bản của chủ
                                đầu tư xây dựng và kinh doanh hạ tầng khu sản xuất,
                                kinh doanh, dịch vụ tập trung, cụm công nghiệp đó trước khi cấp giấy phép môi trường.
                            </p>

                            <p>(Điều 43 <a
                                    href="https://thuvienphapluat.vn/van-ban/Tai-nguyen-Moi-truong/Luat-so-72-2020-QH14-Bao-ve-moi-truong-2020-431147.aspx"
                                    target="_blank">Luật Bảo vệ môi trường 2020</a>)</p>

                            <p>
                                &gt;&gt;&gt; Xem thêm:&nbsp;
                                <strong>
                                    <a href="https://thuvienphapluat.vn/phap-luat/giay-phep-moi-truong-duoc-cap-lai-khi-nao-trinh-tu-thu-tuc-cap-lai-giay-phep-moi-truong-nhu-the-nao-439578-3075.html?rel=phap_luat_tintuc"
                                        target="_blank">
                                        Giấy phép môi trường được cấp lại khi nào? Trình tự, thủ tục cấp lại giấy phép
                                        môi trường như thế nào?
                                    </a>
                                </strong>
                            </p>

                            <p>
                                <strong>
                                    <a href="https://thuvienphapluat.vn/phap-luat/giay-phep-moi-truong-bi-thu-hoi-khi-nao-sau-khi-thu-hoi--giay-phep-moi-truong-chu-du-an-dau-tu-co-d-3139.html?rel=phap_luat_tintuc"
                                        target="_blank">
                                        Giấy phép môi trường bị thu hồi khi nào? Sau khi thu hồi giấy phép môi trường,
                                        chủ dự án đầu tư có được cấp mới hay thay thế lại không?
                                    </a>
                                </strong>
                            </p>

                            <p>
                                <strong>
                                    <a href="https://thuvienphapluat.vn/phap-luat/du-an-san-xuat-phan-bon-hoa-hoc-co-thuoc-doi-tuong-phai-co-giay-phep-moi-truong-khong-7931.html?rel=phap_luat_tintuc"
                                        target="_blank">
                                        Dự án sản xuất phân bón hóa học có thuộc đối tượng phải có giấy phép môi trường
                                        không?
                                    </a>
                                </strong>
                            </p>

                            <p>
                                <strong>
                                    <a href="https://thuvienphapluat.vn/phap-luat/thoi-su-phap-luat/thu-tuc-cap-lai-giay-phep-moi-truong-bi-thu-hoi-theo-quy-dinh-phap-luat-moi-nhat-nam-2022-8691.html?rel=phap_luat_reindex"
                                        target="_blank">
                                        Thủ tục cấp lại Giấy phép môi trường bị thu hồi theo quy định pháp luật mới nhất
                                        năm 2022?
                                    </a>
                                </strong>
                            </p>

                        </div>
                    </div>

                </div>

                <!-- #secondary -->
            </div>
        </div>
    </div>
        <?php get_footer(); ?>