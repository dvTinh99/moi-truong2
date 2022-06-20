<!-- <ul id="menu-danh-muc-bao-ho-lao-dong" class="menu">
    <li id="menu-item-10314" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-10314">
        <a href="https://baoholaodongdanang.com/danh-muc/bao-ho-lao-dong/thiet-bi-bao-ve-dau/">Thiết
            bị bảo vệ đầu</a>
        <ul class="sub-menu">
            <li id="menu-item-10358" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-10358">
                <a href="https://baoholaodongdanang.com/danh-muc/bao-ho-lao-dong/thiet-bi-bao-ve-dau/non-bao-ho/">Nón
                    bảo hộ</a>
            </li>
            <li id="menu-item-10359" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-10359">
                <a href="https://baoholaodongdanang.com/danh-muc/bao-ho-lao-dong/thiet-bi-bao-ve-dau/non-bao-ho-ket-hop/">Nón
                    bảo hộ kết hợp</a>
            </li>
            <li id="menu-item-10360" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-10360">
                <a href="https://baoholaodongdanang.com/danh-muc/bao-ho-lao-dong/thiet-bi-bao-ve-dau/non-vai/">Nón
                    vải</a>
            </li>
            <li id="menu-item-10361" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-10361">
                <a href="https://baoholaodongdanang.com/danh-muc/bao-ho-lao-dong/thiet-bi-bao-ve-dau/trum-dau-mu-y-te-thuc-pham/">Trùm
                    đầu, mũ y tế, thực phẩm</a>
            </li>
        </ul>
    </li>
</ul> -->

<?php
$menu_name = 'sidebar-menu';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object($locations[$menu_name]);
$menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));
?>

<nav>

    <?php
show($menuitems,0,0);
    ?>
</nav>

<?php
    function show($categories, $parent_id, $i){

        $is_parent = false;
        if($parent_id == 0) {
            echo '<ul id="mega_menu" class="menu">';
            $is_parent = true;
        }else{
            echo '<ul id="mega_menu" class="sub-menu">';
        }
        foreach ($categories as $item)
        {
            $thumbnail_id = get_term_meta($item->object_id, 'thumbnail_id', $is_parent);
            $image_url = wp_get_attachment_image_url($thumbnail_id, 'small');
            // Nếu là chuyên mục con thì hiển thị
            if ($item->menu_item_parent == $parent_id)
            {
               

                $has_child = hasChild($categories,$item->ID);
                if($has_child){
                    echo '<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children">
                <a title="" class="w-full d-flex items-center" href="'.$item->url.'"><span>'.$item->title.'</span>';
                }else{
                    echo '<li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item">
                    <a title="" class="w-full d-flex items-center" href="'.$item->url.'"><span>'.$item->title.'</span>';
                }
                echo '</a>';

                if($has_child){
                    // nếu có child thì thêm dấu mũi tên
                    show($categories, $item->ID, $i+1);
                }
            }
        }
        echo '</li></ul>';
    }

    function getImg($url, $is_parent = false){
        if($is_parent && $url){
            return '
            <img
              width="17"
              height="17"
              src="'.$url.'"
              class="_mi _before _image"
              alt=""
              loading="lazy"
              aria-hidden="true"
              style="flex-shrink: 0;"
            />';
        }else return;
    }
    function hasChild($categories,$parent_id){
        foreach ($categories as  $item)
        {
            if ($item->menu_item_parent == $parent_id)
            {
                return true;
            }
        }
        return false;
    }
?>
