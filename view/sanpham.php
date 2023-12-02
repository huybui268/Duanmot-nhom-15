<style>
    ul {
list-style: none;
}
</style>
<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                       <h2 class="section-title">Sản  Phẩm </h2>     
                       <ul>
            <?php
            foreach ($dsdm as $key => $dm) {
                extract($dm);
                $link="index.php?act=danhmucsp&iddm=$id";
                ?>
                <li><a href="<?php echo $link ?>"><?php echo $name ?></a></li>
            <?php } ?>
            </ul>
                         <div class="product-carousel">
                       
                            <?php
                            $i=1;
                            foreach ($spnew as $key => $sp) {
                                extract($sp);
                                $hinh = $image_path . $img;
                                $linhcart ="index.php?act=ctsp&idsp=".$id;
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
                                            <a href="'.$linksp.'" class="view-details-link"><i class="fa fa-link"></i> See details</a>
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
    </div> <!-- End main content area -->
   
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                          
                         <div class="product-carousel">
                       
                            <?php
                            $i=1;
                            foreach ($spnew as $key => $sp) {
                                extract($sp);
                                $hinh = $image_path . $img;
                                $linhcart ="index.php?act=ctsp&idsp=".$id;
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
                                            <a href="'.$linksp.'" class="view-details-link"><i class="fa fa-link"></i> See details</a>
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
    </div> <!-- End main content area -->