<style>
   li {
list-style: none;
}

</style>


                         
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div> -->
                    
                    <div class="single-sidebar">
                    <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="boxcontent row">
                <?php foreach ($sp_cungloai as $sp_cl) { 
                    extract($sp_cl);
                    $hinh = $image_path . $img;
                    $link="index.php?act=ctsp&idsp=$id";
                    ?>
                
                    <li><a href="<?php echo $link ?>"><?php echo $name ?></a></li>
                    <!-- <li><a href="<?php echo $link ?>"><?php echo $hinh ?></a></li> -->

                
                    <?php } ?>
            </div>
                    </div>
                    
               </div>

               <?php extract($sp); 
  $hinh = $image_path . $img;
 ?>
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="index.php">Home</a>
                            <a href=""><?php echo $name ?></a>
                        </div>
                        
                        <div class="row">
                        <form action="index.php?act=addtocart" method="post">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                    <img src="<?php echo $hinh ?>">
                                     <input type="hidden" name="hinh" value="<?php echo $hinh ?>">
                                    </div>
                                    
                                    <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">
                                        <?php echo $name ?> 
                                         <input type="hidden" name="id" value="<?php echo $id ?>">
                                        <input type="hidden" name="ten" value="<?php echo $name ?>">
                                    </h2>
                                      
                                        
                                        <input type="hidden" name="price" value="<?php echo $price ?>">
                                        <label for=""> Số Lượng</label>
                                        <input type="number" name="soluong" min=1>
                                        <br> 
                                    <div class="product-inner-price">
                                         <ins><?php echo number_format($price) ?> VND </ins> 
                                        <del><?php echo number_format($gia)  ?> VND</del>
                                    </div>    
                                   
                                    <div class=" mb10 formds_loai"><h5>Màu Sắc:
                                       
                                        <input type="radio" value="pink" name="mau" checked>Pink

                                        <input type="radio" value="blue" name="mau">Blue
                                        <input type="radio" value="black" name="mau">Black
                                        <input type="radio" value="gray" name="mau">Gray
                                        <input type="radio" value="green" name="mau">Green
                                    </h5>
                                    </div>
                                    <div class="add"><a href="">
                                    <button name="addtocart">Thêm vào giỏ hàng</button>
                                        
                                    </div>
                           </form>   
                                    
                                    <div class="product-inner-category">
                                        <!-- <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p> -->
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                

                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                            <div class="cuoi">
                   
                                                <h3>Mô tả sản phẩm: </h3>
                                                <?php echo $mota_dai?>
                                                </div>
                                                <div class="boxtitle">BÌNH LUẬN</div>
                                            <div class="boxcontent3">
                                                <table>
                                                    <?php foreach($binhluan as $bl) { 
                                                        extract($bl);
                                                        ?>
                                                    <tr><td><?php echo $user ?>:...</td>
                                                        <td><?php echo $noidung ?></td>
                                                        <td>-<?php echo date("d/m/Y", strtotime($ngaybinhluan)) ?></td>
                                                    </tr>
                                                        <?php } ?>
                                                </table>
                                            </div>
                                            <div class="box_search">
                                                <?php if(isset($_SESSION['user'])){ ?>
                                                    <form action="index.php?act=ctsp&idsp=<?=$sp['id']?>" method="POST">
                                                    <input type="hidden" name="idpro" value="<?=$sp['id']?>">
                                                    <input type="text" name="noidung">
                                                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                                                </form>
                                                <?php } else{ ?>
                                                <h2 style="color: red;">Bạn cần đăng nhập để bình luận</h2>
                                                <?php } ?>
                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        
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
                               
                                                
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    let totalProduct = document.getElementById('totalProduct');
    function addToCart(productId, productName, productPrice) {
        // console.log(productId, productName, productPrice);
        // Sử dụng jQuery
        $.ajax({
            type: 'POST',
            // Đường dẫ tới tệp PHP xử lý dữ liệu
            url: 'addToCart.php',
            data: {
                id: productId,
                name: productName,
                price: productPrice
            },
            success: function(response) {
                totalProduct.innerText = response;
                alert('Bạn đã thêm sản phẩm vào giỏ hàng thành công!')
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script> -->