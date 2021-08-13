<?php

	include "headeruser.php";

if(!isset($_SESSION['user']))
{
	?>
	<script>
		alert("You have to login First");
		window.location="loginuser.php"
	</script>
	<?php
}	
?>
   <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Select Product Here</h2>
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
				$cid=$_REQUEST['id'];
				$q="select * from productdetail where Category_id=".$cid;
				$c=mysqli_query($con,$q);
				while($r=mysqli_fetch_array($c))
				{
					?>
				<div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                       
						<a href="productdetail.php?id=<?php echo $r['P_id'];?>">			
						<div class="product-upper">
                            <img src="../admin/upload/<?php echo $r['Product_image'];?>" style="height:250px; border-radius:20px; width:430px;" alt="">
                        </div>
                        <h2><?php echo $r['Product_name'];?></a></h2>
                        
                       
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