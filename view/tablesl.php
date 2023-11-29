                        <?php
                        session_start();
                        include "../model/pdo.php";
                        include "../model/sanpham.php";
                        include "../model/danhmuc.php";
                        include "../model/binhluan.php";
                        include "../model/taikhoan.php";
                        include "../model/cart.php";


                        include "../global.php";


                        // Kiểm tra xem giỏ hàng có dữ liệu hay không
                        if (!empty($_SESSION['mycart'])) {
                            // $cart = $_SESSION['cart'];
            
                            // // Tạo mảng chứa ID các sản phẩm trong giỏ hàng
                            // $productId = array_column($cart, 'id');
                            
                            // // Chuyển đôi mảng id thành một cuỗi để thực hiện truy vấn
                            // $idList = implode(',', $productId);
                            
                            // // Lấy sản phẩm trong bảng sản phẩm theo id
                            // $dataDb = loadone_sanphamCart($idList);
                            // // var_dump($dataDb);
                        

                            $tong = 0;
                            $i = 0;
                            foreach ($_SESSION['mycart'] as $key => $cart) {
                                $hinh = $image_path.$cart[2];
                                $tongtien = $cart[3]*$cart[4];
                                $tong += $tongtien; 
                                
                           
                                ?>
       
                                <tr>
                                    <td><?= $key +1 ?></td>
                                    <td><?php echo $cart[1] ?></td>
                                    <td><img src="<?php echo $hinh ?>" alt="" width="70px" height="50px"></td>
                                    <td><?php echo number_format($cart[3]) ?> VND</td>
                                    <td>
                                        <!-- <a onclick="giam(this)">-</a><span ><?php echo $cart[4] ?></span><a  onclick="tang(this)">+</a> -->
                                        <input type="number" name="soluong" value="<?= $cart[4] ?>" min="1" id="quantity_<?= $cart[0] ?>" oninput="updateQuantity(<?= $cart[0] ?>, <?= $key ?>)">
                                    </td>
                                    <td><?php echo $cart[5] ?></td>
                                    <td><?php echo number_format($tongtien) ?> VND
                                    <input type="hidden" name="tongtien" value="<?php echo $tongtien ?>">
                                    
                                </td>
    
                                    <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="index.php?act=deletecart&idcart=<?php echo $i ?>"><input type="button" name="xoacart" value="Xóa"></a></td>
                                    
                                </tr>
                                <?php $i += 1; ?>
                            <?php } ?>
                            <tr>
                                <td colspan="7">Tổng giá đơn hàng</td>
                                <td colspan="1"> <?php echo number_format($tong) ?> VND</td>
                            </tr>
                                            </tr>
                                            <tr>
                                                <td class="actions" colspan="6">
                                                           <?php if(isset($_SESSION['user'])){ ?><a href="index.php?act=ctsp"><input type="button" name="thaydoi" value="Mua Thêm Sản Phẩm "></a><br>   
                                                            <br>
                                    <a href="index.php?act=bill"><input type="button" value="Đặt hàng"></a>
                                    <a href=""><input type="button" name="reset" value="Cập Nhật"></a>
                 
    
                                <?php } else { ?>
                                    <p style="color:red;">Vui lòng đăng nhập để đặt hàng</p>
                                <?php } ?>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa hết')" href="index.php?act=deletecart"><input type="button" value="Xóa hết"></a><br><br>
    
                                                </td>
                                                
                                            </tr>
                        <?php
                            }


                        ?>