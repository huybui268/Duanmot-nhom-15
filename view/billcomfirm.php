<?php
if (isset($bill)) {
    extract($bill);
}
$pttt=get_pttt($bill_pttt);
?>
<style>
.cuoi{
    padding-left:600px;
}
</style>

            
            <div class="boxcontent_bill" style="text-align:center">
                <div class=" mb10 formds_loai">
                    <h2>Cảm ơn quý khách đã mua hàng</h2>
                </div>
            </div><br><br>
<div class="cuoi">
            <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
            <div class="boxcontent_bill" style="">
                <div class=" mb10 formds_loai">
                   Mã đơn hàng: DA1-<?php echo $id ?>
                   <br>
                   Ngày đặt hàng: <?php echo date("d/m/Y", strtotime($ngaydathang)) ?>
                   <br>
                   Tổng đơn hàng: <?php echo number_format($total) ?> VND
                   <br>
                   Phương thức thanh toán: <?php echo $pttt ?>
                </div>
            </div><br><br>

            <div class="boxtitle">THÔNG TIN NGƯỜI NHẬN</div>
            <div class="boxcontent_bill" style="">
                <div class=" mb10 formds_loai">
                    Người đặt hàng: <?php echo $bill_name ?><br>
                    Địa chỉ: <?php echo $bill_address ?><br>
                    Email: <?php echo $bill_email ?><br>
                    Số điện thoại: <?php echo $bill_tel ?><br>
                </div>
            </div><br><br>

          
   </div>