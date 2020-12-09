<!-- vendor css -->
<link href=".system/lib/admin/spectrum-colorpicker/spectrum.css" rel="stylesheet">
<link href=".system/lib/admin/select2/css/select2.min.css" rel="stylesheet">
<link href=".system/lib/admin/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
<link href=".system/lib/admin/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
<link href=".system/lib/admin/amazeui-datetimepicker/css/amazeui.datetimepicker.css" rel="stylesheet">
<link href=".system/lib/admin/jquery-simple-datetimepicker/jquery.simple-dtpicker.css" rel="stylesheet">
<link href=".system/lib/admin/pickerjs/picker.min.css" rel="stylesheet">

<script defer src=".public/js/admin/categories/insert.js"></script>

<div class="sbs-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
    <div class="container">
    
        <?php
            include_once 'admin/view/categories/menu.php';
        ?>

        <div class="sbs-content-body pd-lg-l-40 d-flex flex-column">
            <div class="sbs-content-breadcrumb">
                <span><a href="admin.php">Admin</a></span>
                <span><a href="admin.php?ctrl=categories">Danh mục</a></span>
                <span>Quản lí phân loại: <?= $category['name'] ?></span>
            </div>
            <h2 class="sbs-content-title">Quản lí phân loại: <?= $category['name'] ?></h2>
            <!-- <div class="sbs-content-label mg-b-5">#1 - Simple Table</div>
            <p class="mg-b-15">admin - 01/01/2001</p> -->

            <form class="" action="admin.php?ctrl=hashtags&act=manage&id=<?= $category['id'] ?>" method="post">
                <input type="hidden" name="category" value="<?= $category['id'] ?>" required>

                <?php

                    $output = '';
                    $active = ($category['active'] > 1)
                            ? '<span class="tx-success"><em>Hoạt động</em></span>' : '<span class="hl-txt"><em>Tạm ẩn</em></span>';
                    $output .=
                        '<div class="sbs-content-label mg-b-5">#'.$category['id'].' - '.$category['name'].'</div>
                        <p class="mg-b-15">'.$active.'</p>';

                    $hashtags = '';
                    $get_hashtags = get_hashtags($category['id']);
                    if($get_hashtags != NULL)
                        foreach($get_hashtags as $hashtag)
                        {
                            $hashtags .=
                                '<div class="col-lg-3 mg-b-10">
                                    <input type="hidden" name="ids[]" value="'.$hashtag['id'].'" required>
                                    <input class="form-control" placeholder="#hashtag" type="text" name="names[]" value="'.$hashtag['name'].'" required>
                                </div>';
                        }
                    else
                        $hashtags .=
                                '<div class="col-lg-3 mg-b-10">
                                    <p><em>Không tồn tại phân loại</em></p>
                                </div>';
                    $output .=
                        '<div class="row row-sm mg-b-40">
                            '.$hashtags.'
                        </div>';

                    echo $output;

                ?>

                <div class="hide" id="hashtags_insert">
                <div class="row row-sm mg-b-40">
                    <div class="col-lg-3 mg-b-10">
                        <input class="form-control" placeholder="#hashtag" type="text" name="hashtags[]">
                    </div>
                    <span class="btn btn-icon main-txt hl-hv mg-b-10" id="add_hashtag">
                        <i class="icon-plus-circle"></i>
                    </span>
                </div><!-- row -->
                </div>

                <div class="row row-xs wd-xl-80p">
                    <div class="col-sm-6 col-md-3">
                        <!-- <button type="submit" value="Thêm danh mục" >Thêm danh mục</button> -->
                        <input type="submit" value="Cập nhật phân loại" name="update" class="btn btn-main btn-block">
                    </div>
                </div>
            </form>

            <hr class="mg-y-30">

            

            <div class="ht-40"></div>

        </div><!-- sbs-content-body -->
    </div><!-- container -->
</div><!-- sbs-content -->