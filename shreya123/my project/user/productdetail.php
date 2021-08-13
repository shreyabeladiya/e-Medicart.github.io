<?php
	include "headeruser.php";
	$con=mysqli_connect("localhost","root","","hp");
	if(isset($_POST['btnok']))
	{
		$un=$_SESSION['user'];
		$pn=$_POST['pn'];
		$qn=$_POST['quantity'];
		$pr=$_POST['pr'];
		$tpr=$qn*$pr;
		$query="Insert into cart values('','$un','$pn','$qn','$pr','$tpr')";
		$c=mysqli_query($con,$query);
		if($c)
		{
			?>
			<script>
				alert("Succefully Add into cart");
				window.location="medicineuser.php";
			</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert("Errrorr");
				
			</script>
			<?php
		}
	}
	
	$cid=$_REQUEST['id'];
	$q="select * from productdetail where P_id=".$cid;
	$c=mysqli_query($con,$q);
	while($r=mysqli_fetch_array($c))
	{
				
				$pn=$r['Product_name'];
				$pi=$r['Product_image'];
				$md=$r['Menufacturedate'];
				$ed=$r['Expiredate'];
				$pr=$r['Price'];
				$pd=$r['description'];
				$cn=$r['Company_name'];
				$q1="select * from category where Category_id=".$r['Category_id'];
				$c1=mysqli_query($con,$q1);
				while($r1=mysqli_fetch_array($c1))
				{
					$cnm=$r1['Category_name'];
				}
	}
	
?>
  <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Related Products</h2>
                        
                    </div>
                    
                    <div class="single-sidebar">
                        
						<?php
						
						$con=mysqli_connect("localhost","root","","hp");
						$cid=$_REQUEST['id'];
						$q="select * from productdetail where P_id=".$cid;
						$c=mysqli_query($con,$q);
						while($rr=mysqli_fetch_array($c))
						{
						?>
                        <div class="thubmnail-recent">
                            <img src="../admin/upload/<?php echo $rr['Product_image'];?>" class="recent-thumb" alt="">
                            <h2><a href=""><?php echo $rr['Product_name'];?></a></h2>
                            <div class="product-sidebar-price">
                                <ins>Rs.&nbsp;&nbsp;<?php echo $pr;?> </ins>
                            </div>                             
                        </div>
                        <?php
						}
						?>
						
                    </div>
                    
                    
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href=""><?php echo $cnm;?></a>
                            <a href=""><?php echo $pn;?></a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="../admin/upload/<?php echo $pi;?>" style="height:350px; width:300px;" alt="">
                                    </div>
                                    
                                   
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name"><?php echo $pn;?></h2>
                                    <div class="product-inner-price">
                                        <b>Price : </b><ins><?php echo $pr;?></ins>
                                    </div> 
									<div class="product-inner-price">
                                       <b> Manufacturing-Date : </b><ins><?php echo $md;?></ins><br>
										<br><b>Expired-Date : </b><ins><?php echo $md;?></ins>
										
                                    </div>
									<div class="product-inner-price">
                                       	<b>Company : </b><ins><?php echo $cn;?></ins>
                                    </div>
									<div class="product-inner-price">
                                       	<b>Description : </b><ins><?php echo $pd;?></ins>
                                    </div>    
                                    
                                    <form action="#" method="post" class="cart">
                                        <div class="quantity">
										<input type="hidden" name="pn" value="<?php echo $pn;?>"/>
										<input type="hidden" name="pr" value="<?php echo $pr;?>"/>
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <input class="add_to_cart_button" type="submit" name="btnok" value="Add to cart"/>
                                    </form>   
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                       
                    </div>                    
                </div>
            </div>
        </div>
    </div>

<?php

include "footeruser.php";

?>