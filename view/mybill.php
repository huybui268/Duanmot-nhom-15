<style>
    .single-sidebar {
        width: 100%;
        float: left;
        padding-left: 50px;
    }

    .boxtrai {
        width: 80%;
        float: right;
    }

    .headerr .boxtitle {
        padding-left: 250px;
    }

    .headerr .mb10 {
        width: 1000px;
        padding-left: 250px;
    }

    .button {
        padding-left: 250px;
    }

    .button1 {
        padding-left: 630px;

    }

    .button2 {
        text-align: center;

    }



    .tach {
        display: flex;
    }

    .gio {
        background-color: #C0C0C0;
        border-radius: 5px;
        padding:20px;
        width: 350px;
    }
</style>
<?php
 extract($listbill);

?>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Đơn Hàng Của Tôi </h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->
<br>
<div class="headerr">
    <div class="boxtitle">
        <h3>Đơn hàng của tôi</h3>
    </div>
    <div class="boxcontent formtk">
        <div class=" mb10 formds_loai">
            <table border="1" class="mb10" style="border:#ccc;">
                <tr>
                <th>Mã đơn hàng</th>
                        <th>Khách hàng</th>
                        <th>Số lượng hàng</th>
                        <th>Tổng giá tiền</th>
                        <th>Ngày đặt</th>
                        <th>Thanh toán</th>
                        <th>Tình trạng</th></th>
                        <th>Chức năng</th>
                        <td></td>
                    
                </tr>
               <?php foreach ($listbill as $bill) {
                        extract($bill);
                        $countsp=loadall_cart_count($id);
                        $ttdh=get_ttdh($bill_status);
                        $pttt=get_pttt($bill_pttt); ?>
                        <tr>
                            <td>DA1-<?php echo $id ?></td>
                            <td>
                                <?php echo $bill_name ?><br>
                                <?php echo $bill_email ?><br>
                                <?php echo $bill_address ?><br>
                                <?php echo $bill_tel ?>
                            </td>
                            <td><?php echo $countsp ?></td>
                            <td><?php echo number_format($total) ?> VND</td>
                            <td><?php echo date("d/m/Y", strtotime($ngaydathang)) ?></td>
                            <td><?php echo $pttt ?></td>
                            <td><?php echo $ttdh ?></td>
                            <td>
                                <?php
                                if ($bill_status == 0 ) {
                                    ?>
                                    <a href="index.php?act=updatebill&iddh=<?php echo $id ?>" onclick="return confirm('Bạn có chắc chắn muốn hủy không')"><input type="button" value="Hủy"></a>  
                             <?php   }
                                ?>
                                  <?php
                                if ($bill_status == 1 ) {
                                    ?>
                                    <a href="index.php?act=updatebill&iddh=<?php echo $id ?>" onclick="return confirm('Bạn có chắc chắn muốn hủy không')"><input type="button" value="Hủy"></a>  
                             <?php   }else{ ?>
                                <!-- <a href="index.php?act=updatebill&iddh=<?php echo $id ?>" onclick="return confirm('Bạn có chắc chắn muốn khôi phục không')"><input type="button" value="Khôi Phục"></a> -->
<?php
                             }
                                ?>

<?php
                                if ($bill_status == 6 ) {
                                    ?>
                                    <a href="index.php?act=updatebill1&iddh=<?php echo $id ?>" onclick="return confirm('Bạn có chắc chắn muốn đặt lại không')"><input type="button" value="Đặt lại "></a>  
                            
                             <?php   } ?>   
                                          
                        </td>
                        <td><a href="index.php?act=listcart&idbill=<?php echo $id ?>"><input type="button" value="Chi Tiết Đơn"></a></td>
                        </tr>
                    <?php } ?>
            </table>
        </div>
        <br>
        <div class="tach">
            <div class="button">
                <a href="index.php?act=ctsp"><input type="submit" name="thaydoi" value="Mua Thêm Sản Phẩm "></a><br>
                <br>
            </div>
            <!-- <div class="button1">
              
                  <a onclick="return confirm('Bạn có chắc chắn muốn xóa hết')" href="index.php?act=updatebill"><input type="submit" value="Hủy Đặt hàng"></a>
            </div> -->
            <br>
            
            <br><br>
        </div>
       
    </div>
    </form>
    <br>

</div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
              
                                      
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>