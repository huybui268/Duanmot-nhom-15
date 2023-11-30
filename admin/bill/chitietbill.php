<div class="row">
    <div class="row formtitle mb10">
        <h1> </h1>
    </div>
    <div class="row formcontent">
        <form action="#" method="post">
            <div class="row mb10 formds_loai">
                <table border="1" class="mb10">
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Đơn giá</th>
                    <th>Màu</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Chức năng</th>
                </tr>
                <?php foreach ($cart as $bill) {
                        extract($bill);
                        $hinh = $image_path . $img;
                        ?>
 
                            <td>
                                <?php echo $name?><br>
                               
                            </td>
                            <td><img src="<?php echo $hinh ?>" alt="" width="70px" height="50px"></td>
                            <td><?php echo number_format($price) ?> VND</td>
                            <td><?php echo $mau ?></td>
                            <td><?php echo $soluong ?></td>
                            <td><?php echo $thanhtien ?></td>
                           <td>
                            <!-- <a href="index.php?act=updatecart&id=<?php echo $id ?>"><input type="button" value="Sửa"></a> -->
                            <a href="index.php?act=deletecart&id=<?php echo $id ?>"><input type="button" value="Xóa"></a>
                        </td>
                        </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
           
        </form>
    </div>
</div>