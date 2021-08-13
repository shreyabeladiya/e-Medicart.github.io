<?php
	include "headeruser.php";
	
	$con=mysqli_connect("localhost","root","","hp");
	
	$un=$_SESSION['user'];
	$q="select * from order_master where User_name='$un'";
	$c=mysqli_query($con,$q);
	
	
	
?>
 <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>My Order History</h2>
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
                            
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr align="left">
                                            <th class="product-remove">Order_details</th>
                                                <th>Item_details</th>                                    </tr>
                                    </thead>
                                    <tbody>
									<?php
									while($rr=mysqli_fetch_array($c))
									{					
										?>
									
                                        <tr class="cart_item">
                                           <td class="product-subtotal">
                                                <b>User Name : </b><?php echo $un;?>
												<br>
												<b>Delivery Address : </b><?php echo $rr['Delivaryaddress'];?>
												<br>
												<b> Date  : </b> <?php echo $rr['Date'];?>
												<br/>
											
											</td>
											<td>
											<?php
												$cc=mysqli_query($con,"Select * from item_master where o_id=".$rr['O_id']);
												while($rc=mysqli_fetch_array($cc))
												{
													?>
													<br>
													<b>Product Name : </b><?php echo $rc['Product_name'];?>
													<br/>
													<b>Quantity : </b><?php echo $rc['Quantity'];?><br/>
													<b>Price : </b><?php echo $rc['price'];?>
													
													<?php
												}
												?>
												</td>
                                        </tr>
										
										<?php
										}
									?>
                                       
                                    </tbody>
                                </table>
                          

                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
             
                    
                    
            
<?php

include "footeruser.php";

?>