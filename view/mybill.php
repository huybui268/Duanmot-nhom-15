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
 extract($cart);

?>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Giỏ Hàng Của Tôi </h2>
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
                    <th></th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Đơn giá</th>
                    <th>Màu</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Trạng Thái Đặt Hàng</th>
                    <th></th>
                    <th></th>
                    
                </tr>
                <?php foreach ($cart as $bill) {
                        extract($bill);
                        $ttdh=get_ttdh($bill_status);
                        $hinh = $image_path . $img;
                        ?>
                             <td>
                                <?php echo $id ?>
                             </td>
                            <td>
                                <?php echo $name?><br>
                               
                            </td>
                            <td><img src="<?php echo $hinh ?>" alt="" width="70px" height="50px"></td>
                            <td><?php echo number_format($price) ?> VND</td>
                            <td><?php echo $mau ?></td>
                            <td><?php echo $soluong ?></td>
                            <td><?php echo number_format($thanhtien) ?> VND</td>
                           <td><?php echo $ttdh?></td> 
                        
                           <?php
                             if($bill_status == 0 ){
                                ?>   
                             
                             <td><a href="index.php?act=deletemybill&id=<?php echo $id ?>"><input type="button" value="Hủy Đơn"></a></td>
                             <?php
                             }
                             ?>
                             <?php
                            if($bill_status == 1 ){
                              ?>   
                           
                           <td><a href="index.php?act=deletemybill&id=<?php echo $id ?>"><input type="button" value="Hủy Đơn"></a></td>
                           <?php
                           }else{
                            ?>
                            <td></td>
                            <?php
                           }
                          ?>
                      
                       
                      
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
            <div class="button1">
              
                  <a onclick="return confirm('Bạn có chắc chắn muốn xóa hết')" href="index.php?act=deletemybill"><input type="submit" value="Hủy Đặt hàng"></a>
            </div>
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