<!-- vendor css -->
<link href=".system/lib/admin/spectrum-colorpicker/spectrum.css" rel="stylesheet">
<link href=".system/lib/admin/select2/css/select2.min.css" rel="stylesheet">
<link href=".system/lib/admin/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet">
<link href=".system/lib/admin/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
<link href=".system/lib/admin/amazeui-datetimepicker/css/amazeui.datetimepicker.css" rel="stylesheet">
<link href=".system/lib/admin/jquery-simple-datetimepicker/jquery.simple-dtpicker.css" rel="stylesheet">
<link href=".system/lib/admin/pickerjs/picker.min.css" rel="stylesheet">

<!-- flatpickr_4.2.3.css -->
<link href=".system/lib/flatpickr_4.2.3/flatpickr.css" rel="stylesheet">

<div class="sbs-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
    <div class="container">
    
        <?php
            include_once 'menu.php';
        ?>

        <div class="sbs-content-body pd-lg-l-40 d-flex flex-column">
            <div class="sbs-content-breadcrumb">
                <span><a href="admin.php">Admin</a></span>
                <span><a href="admin.php?ctrl=promotions">Khuyến mãi</a></span>
                <span>Chỉnh sửa khuyến mãi</span>
            </div>
            <h2 class="sbs-content-title">Chỉnh sửa khuyến mãi</h2>

            <form class="" action="admin.php?ctrl=promotions&act=update" method="post">
                <input name="id" required type="hidden" value="<?= $promotion['id'] ?>">
                <div class="row row-sm mg-b-20">
                    <div class="col-lg-8 needs-validation was-validated">
                        <p class="sbs-content-label mg-b-10">Tên khuyến mãi</p>
                        <div class="form-group has-success mg-b-0">
                            <input class="form-control" placeholder="Tên khuyến mãi" name="name" required type="text" value="<?= $promotion['name'] ?>">
                        </div><!-- form-group -->
                    </div><!-- col -->
                    <div class="col-lg-4 mg-t-20 mg-lg-t-0 needs-validation was-validated">
                        <p class="sbs-content-label mg-b-10">Loại giảm giá</p>
                        <div class="row pd-t-10">
                            <div class="col-lg-6">
                                <label class="rdiobox">
                                    <input name="type" type="radio" id="type1" <?= ($promotion['type'] == 1) ? 'checked' : '' ?> value="1">
                                    <span>Phần trăm (%)</span>
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label class="rdiobox">
                                    <input name="type" type="radio" id="type2" <?= ($promotion['type'] == 2) ? 'checked' : '' ?> value="2">
                                    <span>Giá (VNĐ)</span>
                                </label>
                            </div>
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->
                <div class="row row-sm mg-b-20">
                    <div class="col-lg-4 needs-validation was-validated">
                        <p class="sbs-content-label mg-b-10">Giá trị giảm</p>
                        <div class="input-group has-success mg-b-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="discount_extension"><?= ($promotion['type'] == 1) ? '%' : 'VNĐ' ?></span>
                            </div>
                            <input type="number" class="form-control" name="discount" id="discount" min="0" <?= ($promotion['type'] == 1) ? 'max="100"' : '' ?> required placeholder="Giá trị giảm" aria-label="Amount (to the nearest dollar)" value="<?= $promotion['discount'] ?>">
                            <div class="input-group-append">
                                <span class="input-group-text" id="discount_step">.00</span>
                            </div>
                        </div><!-- form-group -->
                    </div><!-- col -->
                    <div class="col-lg-4 mg-t-20 mg-lg-t-0 needs-validation was-validated">
                        <p class="sbs-content-label mg-b-10">Giá sản phẩm tối thiểu</p>
                        <div class="input-group has-success mg-b-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">VNĐ</span>
                            </div>
                            <input type="number" class="form-control" name="min" required placeholder="Giá sản phẩm tối thiểu" aria-label="Amount (to the nearest dollar)" value="<?= $promotion['min'] ?>">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div><!-- input-group -->
                    </div><!-- col-4 -->
                    <div class="col-lg-4 mg-t-20 mg-lg-t-0 needs-validation was-validated">
                        <p class="sbs-content-label mg-b-10">Giá sản phẩm tối đa</p>
                        <div class="input-group has-success mg-b-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text">VNĐ</span>
                            </div>
                            <input type="number" class="form-control" name="max" required placeholder="Giá sản phẩm tối đa" aria-label="Amount (to the nearest dollar)" value="<?= $promotion['max'] ?>">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div><!-- input-group -->
                    </div><!-- col-4 -->
                </div><!-- row -->
                <div class="row row-sm mg-b-20">
                    <div class="col-lg-4">
                        <p class="sbs-content-label mg-b-10">Ngày bắt đầu</p>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                </div>
                            </div>
                            <input type="text" value="<?= $promotion['begin'] ?>" name="begin" id="begin" data-input="" class="flatpickr-input form-control" readonly>
                        </div>
                    </div>
                    <div class="col-lg-4 mg-b-20">
                        <p class="sbs-content-label mg-b-10">Ngày kết thúc</p>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                </div>
                            </div>
                            <input type="text" value="<?= $promotion['end'] ?>" name="end" id="end" class="form-control flatpickr-input">
                        </div>
                    </div>
                    <div class="col-lg-4 mg-b-20">
                        <p class="sbs-content-label mg-b-10">Trạng thái</p>
                        <div class="input-group">
                            <div class="sbs-toggle-group-demo">
                                <table class="sbs-table-reference mg-t-0">
                                    <tbody>
                                        <tr>
                                            <td class="pt-1 pb-1">
                                                <div class="sbs-toggle-group-demo mg-t-2 mg-b-2">
                                                    <div class="sbs-toggle sbs-toggle-success <?= ($promotion['active'] == 2) ? 'on' : '' ?>"><span></span></div>  
                                                    <input name="active" required type="hidden" value="1">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-8">
                        <p class="sbs-content-label mg-b-10">Nội dung khuyến mãi</p>
                        <textarea rows="8" class="form-control mg-t-5" placeholder="Mô tả" name="description" required><?= $promotion['description'] ?></textarea>
                    </div>
                </div><!-- row -->

                <div class="row row-xs wd-xl-80p">
                    <div class="col-sm-6 col-md-3">
                        <input type="submit" value="Hoàn thành" name="update" class="btn btn-main btn-block">
                    </div>
                </div>
            </form>

            <hr class="mg-y-30">

            <!-- Date box -->
            <div class="ht-40"></div>
        </div><!-- sbs-content-body -->
    </div><!-- container -->
</div><!-- sbs-content -->


<script defer src=".system/lib/admin/jquery-ui/ui/widgets/datepicker.js"></script>
<script defer src=".system/lib/admin/spectrum-colorpicker/spectrum.js"></script>
<script defer src=".system/lib/admin/jquery.maskedinput/jquery.maskedinput.js"></script>
<script defer src=".system/lib/admin/select2/js/select2.min.js"></script>
<script defer src=".system/lib/admin/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<script defer src=".system/lib/admin/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>
<script defer src=".system/lib/admin/jquery-simple-datetimepicker/jquery.simple-dtpicker.js"></script>
<script defer src=".system/lib/admin/pickerjs/picker.min.js"></script>

<!-- flatpickr_4.2.3.js -->
<script src=".system/lib/flatpickr_4.2.3/flatpickr.js"></script>

<script defer src=".public/js/admin/promotions/insert.js"></script>
  <!--  Flatpickr  -->
