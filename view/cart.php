<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Giỏ Hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <!-- <h2 class="sidebar-title">Search Products</h2>
                        <form action="#">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form> -->
                    </div>
                    
                    
                 
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Sản Phẩm Khác</h2>
                        <?php
                                                            $i=1;
                                                            foreach ($spnew as $key => $sp) {
                                                                extract($sp);
                                                                $hinh = $image_path . $img;
                                                                $linksp="index.php?act=ctsp&idsp=".$id;
                                                                if(($i==2)||($i==5)||($i==8)){
                                                                    $mr="";
                                                                }else{
                                                                    $mr="mr";
                                                                }
                                            
                                                                echo ' 
                                                                    <h2><a class="item_name" href="'. $linksp .'">'.$name.'</a></h2>
                                                            ';
                                                                $i+=1;
                                                            }
                                                                ?>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                         <th>ID</th>
                                          <th> Name</th>
                                            <th class="product-thumbnail">Image</th>
                                            <th class="product-name">Giá</th>
                                            
                                            <th class="product-quantity">Số Lượng</th>
                                            <th class="product-subtotal">Màu</th>
                                             <th class="product-price">Thành Tiền</th>
                                          <th class="product-remove">Chức Năng</th>
                                        </tr>
                                    </thead>
                                    <tbody id="order">
                                        <tr class="cart_item">
                                        <?php 
                                        $tong = 0;
                        $i = 0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh = $image_path.$cart[2];
                            $tongtien = $cart[3]*$cart[4];
                            $tong += $tongtien; 
                            
                       
                            ?>
   
                            <tr>
                                <td><?php $cart[0] ?></td>
                                <td><?php echo $cart[1] ?></td>
                                <td><img src="<?php echo $hinh ?>" alt="" width="70px" height="50px"></td>
                                <td>
                                    <?php echo number_format($cart[3]) ?> VND
                                <input type="hidden" name="price" id="price" value="<?php echo $cart[3] ?>">
                                  </td>
                                <td>
                                    <!-- <a onclick="giam(this)">-</a><span ><?php echo $cart[4] ?></span><a  onclick="tang(this)">+</a> -->
                                    <input type="number" name="soluong" value="<?= $cart[4] ?>" min="1" id="quantity_<?= $cart[0] ?>" oninput="updateQuantity(<?= $cart[0] ?>)">
                                </td>
                                <td><?php echo $cart[5] ?></td>
                                <td><?php echo number_format($tongtien) ?> VND
                                <input type="hidden" name="tongtien" id="tongtien" value="<?php echo $tongtien ?>">
                                
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
                                                       <?php if(isset($_SESSION['user'])){ ?><a href="index.php?act=sp"><input type="button" name="thaydoi" value="Mua Thêm Sản Phẩm "></a><br>   
                                                        <br>
                                <a href="index.php?act=bill"><input type="button" value="Đặt hàng"></a>
                                <a href=""><input type="button" name="reset" value="Cập Nhật"></a>
             

                            <?php } else { ?>
                                <p style="color:red;">Vui lòng đăng nhập để đặt hàng</p>
                            <?php } ?>
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa hết')" href="index.php?act=deletecart"><input type="button" value="Xóa hết"></a><br><br>

                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </form>

                           

                            <div class="related-products-wrapper">
                                                            <h2 class="related-products-title">Sản Phẩm Khác</h2>
                                                            <div class="related-products-carousel">
                                                            
                                                                <?php
                                                            $i=1;
                                                            foreach ($spnew as $key => $sp) {
                                                                extract($sp);
                                                                $hinh = $image_path . $img;
                                                                $linksp="index.php?act=ctsp&idsp=".$id;
                                                                if(($i==2)||($i==5)||($i==8)){
                                                                    $mr="";
                                                                }else{
                                                                    $mr="mr";
                                                                }
                                            
                                                                echo ' 
                                                                <div class="single-product">
                                                                    <div class="product-f-image">
                                                                        <img src="'. $hinh .'" alt="">
                                                                        <div class="product-hover">
                                                                            <a href="'.$linksp.'" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                            <a href="index.php?act=spct" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <h2><a class="item_name" href="'. $linksp .'">'.$name.'</a></h2>
                                                                    
                                                                    <div class="product-carousel-price">
                                                                        <ins>'. number_format($price).'  VND</ins> 
                                                                        <del>'. number_format($gia).' VND</del>
                                                                    </div> 
                                                            
                                                            
                                                            </div>';
                                                                $i+=1;
                                                            }
                                                                ?>
                               
                                                  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
           function updateQuantity(id, index) {
        // lấy giá trị của ô input
        let newQuantity = $('#quantity_' + id).val();
        console.log(newQuantity);
        let price = $('#price').val();
        let tongtien = $('#tongtien').val();
        tongtien = price*newQuantity;
        console.log(tongtien);

        if (newQuantity <= 0) {
            newQuantity = 1
        }

    //     // Gửi yêu cầu bằng ajax để cập nhật giỏ hàng
        // $.ajax({
        //     type: 'POST',
        //     url: 'updatesl.php',
        //     data: {
        //         id: id,
        //         quantity: newQuantity,
        //         tongtien: tongtien,
        //     },
        //     success: function(response) {
        //         // Sau khi cập nhật thành công
        //         $.post('tablesl.php', function(data) {
        //             $('#order').html(data);
        //         })
        //     },
        //     error: function(error) {
        //         console.log(error);
        //     },
        // });
    }
    


                </script>
                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
  