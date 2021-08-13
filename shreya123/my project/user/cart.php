<?php
	include "headeruser.php";
	
	$con=mysqli_connect("localhost","root","","hp");
	if(isset($_POST['btnok']))
	{
		$add=$_POST['Add'];
		$un=$_SESSION['user'];
		$dt=date("d-m-y");
		$q="select sum(total) from cart where U_name='$un'";
		$c=mysqli_query($con,$q);		
		$r=mysqli_fetch_array($c);
		$cc=$r['sum(total)'];
		mysqli_query($con,"Insert into order_master values('','$un','$add','$dt','$cc')");
		
		$ac=mysqli_query($con,"select * from order_master where User_name='$un' ORDER BY O_id DESC");
		$rc=mysqli_fetch_array($ac);
		$oid=$rc['O_id'];
		$q="select * from cart where U_name='$un'";
		$c=mysqli_query($con,$q);
		while($rcc=mysqli_fetch_array($c))
		{
			$pn=$rcc['P_name'];
			$qn=$rcc['Quantity'];
			$pr=$rcc['Price'];
			$tt=$rcc['total'];
			
			mysqli_query($con,"Insert into item_master values('','$oid','$pn','$qn','$pr','$tt')");
			
			
		}
		mysqli_query($con,"DELETE from cart where U_name='$un'");
		?>
		<script>
			alert("Order Placed Succesfully");
			window.location="Myorder.php";
		</script>
		<?php
	}
	
	
	$un=$_SESSION['user'];
	$q="select * from cart where U_name='$un'";
	$c=mysqli_query($con,$q);
	
	
	
?>
 <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
       <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
              
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									while($rr=mysqli_fetch_array($c))
									{
										$pnmm=$rr['P_name'];
										$qq="select * from productdetail where Product_name='$pnmm'";
										$cc=mysqli_query($con,$qq);
										$r=mysqli_fetch_array($cc);
										$pim=$r['Product_image'];
										
										?>
									
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a onclick="return confirm('Are You sure You want to Delete this item from cart??')" title="Remove this item" class="remove" href="deletecart.php?cid=<?php echo $rr['C_id'];?>">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="../admin/upload/<?php echo $pim;?>"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.html"><?php echo $rr['P_name'];?></a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount"><?php echo $rr['Price'];?></span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <?php echo $rr['Quantity'];?>
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount"><?php echo $rr['total'];?></span> 
                                            </td>
                                        </tr>
										<?php
										}
									?>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                    
                                                            
															<Textarea placeholder="Address" name="Add" cols=20 rows=2></textarea>
															<br><input type="submit" value="Place Order" name="btnok" />
		                                       
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>

                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
             
                    
                    
            
<?php

include "footeruser.php";

?>