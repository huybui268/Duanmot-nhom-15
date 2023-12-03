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

    .button3 {
        padding-left: 30px;
        padding-bottom: 25px;

    }

    .button3 input {
        width: 250px;
    }

    .tach {
        display: flex;
    }

    .gio {
        background-color: #C0C0C0;
        border-radius: 5px;
        padding: 20px;
        width: 350px;
    }
</style>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Thông tin đặt hàng</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->
<br>
<div class="headerr">
    <div class="boxtitle">
        <h3>THÔNG TIN GIỎ HÀNG</h3>
    </div>
    <div class="boxcontent formtk">
        <div class=" mb10 formds_loai">
            <table border="1" class="mb10" style="border:#ccc;">
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Đơn giá</th>
                    <th>Màu</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
                <?php $tong = 0;
                        $i = 0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh = $image_path . $cart[2];
                            $tongtien = $cart[3] * $cart[4];
                            $tong += $tongtien; ?>
                <tr>
                    <td>
                        <?php echo $cart[1] ?>
                    </td>
                    <td><img src="<?php echo $hinh ?>" alt="" width="70px" height="50px">
                    </td>
                    <td>
                        <?php echo number_format($cart[3]) ?> VND
                    </td>
                    <td>
                        <?php echo$cart[5] ?>
                    </td>
                    <td>
                        <?php echo $cart[4] ?>
                    </td>
                    <td>
                        <?php echo number_format($tongtien) ?> VND
                    </td>
                </tr>
                <?php $i += 1; ?>
                <?php } ?>
                <tr>
                    <td colspan="5">Tổng giá đơn hàng</td>
                    <td>
                        <?php echo number_format($tong) ?> VND
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <div class="tach">
            <div class="button">
                <a href="index.php?act=sp"><input type="submit" name="thaydoi" value="Thay Đổi Mặt Hàng "></a><br>
                <br>
            </div>
            <div class="button1">
                <a href="index.php?act=sp"><input type="submit" name="thaydoi" value="Mua Thêm Sản Phẩm "></a><br>
            </div>
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
                <div class="single-sidebar">
                    <form action="index.php?act=billcomfirm" method="post">
                        <div class="boxtitle">
                            <h3>THÔNG TIN ĐẶT HÀNG</h3>
                        </div>
                        <div class="boxcontent formtk">
                            <div class=" mb10 formds_loai">
                                <?php
                    if (isset($_SESSION['user'])) {
                        $name = $_SESSION['user']['user'];
                        $address = $_SESSION['user']['address'];
                        $email = $_SESSION['user']['email'];
                        $tel = $_SESSION['user']['tel'];
                    } else {
                        $name = "";
                        $address = "";
                        $email = "";
                        $tel = "";
                    }
                    ?>
                                Người đặt hàng: <input type="text" name="name" value="<?php echo $name ?>" required>
                                Địa chỉ: <input type="text" name="address" value="<?php echo $address ?>" required>
                                <br>
                                Email: <input type="text" name="email" value="<?php echo $email ?>" required>
                                Số điện thoại: <input type="text" name="tel" value="<?php echo $tel ?>" required>
                            </div>
                        </div><br><br>

                        <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                        <div class="thanhtoan ">
                            <div class=" mb10 formds_loai">
                                <input type="radio" value="1" name="pttt" checked>Trả tiền khi nhận hàng
                                <br>
                                <input type="radio" value="2" name="pttt">Chuyển khoản ngân hàng
                                <br>
                                <input type="radio" value="3" name="pttt">Thanh toán online
                            </div>
                        </div><br><br>

                </div>
            </div>


            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <div class="row mb">
                            <div class="boxtrai mr">
                                <div class="gio">
                                    <?php
                                        $tongtien = $tong + 30000;
                                        ?>
                                    <div class="boxtitle">
                                        <h2>Tổng tiền giỏ hàng</h2>
                                    </div>
                                    <br>
                                    <h4>Tiền Tạm Tính:
                                        <?php echo number_format($tong) ?> VND
                                    </h4>
                                    <br>
                                    <h4>Phí Vận Chuyển: 30,000 VND </h4>
                                    <br>
                                    <h3>Tổng Tiền :
                                        <?php echo number_format($tongtien) ?> VND
                                        <input type="hidden" name="tongtien" value="<?php echo $tongtien ?>">

                                    </h3>
                                    <div class="button3">
                                        <a href="index.php?act=billcomfirm"><input type="submit" name="dathang"
                                                value="Đồng Ý Đặt Hàng"></a>
                                    </div>
                                </div>
                                <br>

                                <br>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>