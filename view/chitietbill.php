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
<div class="headerr">
    <div class="boxtitle">
        <h3>Đơn hàng của tôi</h3>
    </div>
    <div class="boxcontent formtk">
        <div class=" mb10 formds_loai">
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
                            
                        </td>
                        </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
           
        </form>
        <br>
        </div>