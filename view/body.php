<style>
.search{
    float: right;
    height: 50px;
    padding-right:100px;
}
.block-slider li img{
    width:900px;
    height:250px;
}
.block-slider{
    text-align: center;
}
</style>
<div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					
					<li><img src="../assets/anh0.jpg" alt="Slide">
					
					</li>
                    <li><img src="../assets/anh1.jpg" alt="Slide">
					
					</li>
                    <li><img src="../assets/anh2.jpg" alt="Slide">
					
					</li>
                    <li><img src="../assets/anh4.jpg" alt="Slide">
					
					</li>

				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    <!-- body -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                       <h2 class="section-title">Sản  Phẩm Hot Hit</h2>    
                                           
                         <div class="product-carousel">
                       
                            <?php
                            // $i=1;
                            foreach ($spnew as $key => $sp) {
                                extract($sp);
                                $hinh = $image_path . $img;
                                $linhcart ="index.php?act=ctsp&idsp=".$id;
                                $linksp="index.php?act=ctsp&idsp=".$id;
                                // if(($i==2)||($i==5)||($i==8)){
                                //     $mr="";
                                // }else{
                                //     $mr="mr";
                                // }
               
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
                                // $i+=1;
                            }
                                ?>
                      
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    <br>
    <br>
    <div class="search">
                                        <div class="boxfooter searchbox">
                                            <form action="index.php?act=danhmucsp" method="POST">
                                                <input type="text" placeholder="Từ khóa tìm kiếm" name="keyword">
                                            </form>
                                        </div>  
                                    </div>  

    <br>
    <br>
    <div class="product-widget-area">
       
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                       <h2 class="section-title">Sản  Phẩm Hot Hit</h2>    
                                           
                         <div class="product-carousel">
                       
                            <?php
                            // $i=1;
                            foreach ($spnew as $key => $sp) {
                                extract($sp);
                                $hinh = $image_path . $img;
                                $linhcart ="index.php?act=ctsp&idsp=".$id;
                                $linksp="index.php?act=ctsp&idsp=".$id;
                                // if(($i==2)||($i==5)||($i==8)){
                                //     $mr="";
                                // }else{
                                //     $mr="mr";
                                // }
               
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
                                // $i+=1;
                            }
                                ?>
                      
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    </div> <!-- End product widget area -->
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                       <h2 class="section-title">Sản  Phẩm Bán Chạy</h2>    
                                           
                         <div class="product-carousel">
                       
                            <?php
                            // $i=1;
                            foreach ($spnew as $key => $sp) {
                                extract($sp);
                                $hinh = $image_path . $img;
                                $linhcart ="index.php?act=ctsp&idsp=".$id;
                                $linksp="index.php?act=ctsp&idsp=".$id;
                                // if(($i==2)||($i==5)||($i==8)){
                                //     $mr="";
                                // }else{
                                //     $mr="mr";
                                // }
               
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
                                // $i+=1;
                            }
                                ?>
                      
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
