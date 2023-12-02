<style>
    .search{
    float: right;
    height: 50px;
    padding-right:100px;
}
</style>
<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                       <h2 class="section-title">Sản Phẩm Được Tìm Thấy </h2>     
                         <div class="product-carousel">
                       
                         <?php
                            $i = 1;
                            foreach ($dssp as $sp) {
                                extract($sp);
                                $hinh = $image_path . $img;
                                $linksp="index.php?act=ctsp&idsp=$id";
                                if ($i % 3 == 0) {
                                    $mr = "";
                                } else {
                                    $mr = "mr";
                                }
                                $i++;
                                 ?>
                                
                                <div class="single-product" <?php echo $mr ?>>
                                    <div class="product-f-image">
                                        <img src="<?php echo $hinh ?>" alt="">
                                        <div class="product-hover">
                                            <a href="<?php echo $linksp ?>" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="<?php echo $linksp ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>
                                    
                                    <h2><a class="item_name" href="<?php echo $linksp ?>"><?php echo $name ?></a></h2>
                                    
                                    <div class="product-carousel-price">
                                        <ins><?php echo number_format($price) ?>  VND</ins> 
                                        <del><?php number_format($gia) ?> VND</del>
                                    </div> 
                               
                            
                            </div>;
                               
                           <?php 
                            $i+=1;
                        }
                                ?>
                      
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    <div class="search">
                                        <div class="boxfooter searchbox">
                                            <form action="index.php?act=danhmucsp" method="POST">
                                                <input type="text" placeholder="Từ khóa tìm kiếm" name="keyword">
                                            </form>
                                        </div>  
                                    </div>  

    <br>
    <br>
    <br>