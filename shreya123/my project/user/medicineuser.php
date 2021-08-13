<?php

	include "headeruser.php";
	
?>
   <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>All Categories</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <?php
				$con=mysqli_connect("localhost","root","","hp");
				$q="select * from category";
				$c=mysqli_query($con,$q);
				while($r=mysqli_fetch_array($c))
				{
					?>
				<div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                       
						
                       <div class="single-product">
                                <div class="product-f-image">
                                    
                                    <a href="product.php?id=<?php echo $r['Category_id'];?>">			
						
									<img src="../admin/upload/<?php echo $r['Category_image'];?>" style="height:250px; border-radius:20px; width:300px;" alt="">
                        
                        
                                </div>
                                
                               <h2><?php echo $r['Category_name'];?></a></h2>
                                
                               
                            </div> 
                       
                    </div>
                </div>
            		
					<?php
				}
			    ?>
            </div>
            
           
        </div>
    </div>

<?php

include "footeruser.php";

?>