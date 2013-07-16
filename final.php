<!DOCTYPE html>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
<br>
<?php
$cname=htmlspecialchars($_POST["cname"]);
$custname=htmlspecialchars($_POST["custname"]);
$product=htmlspecialchars($_POST["product"]);
$quoten=htmlspecialchars($_POST["quoten"]);
$quandity=htmlspecialchars($_POST["quandity"]);
$priceper=htmlspecialchars($_POST["priceper"]);
$cemail=htmlspecialchars($_POST["cemail"]);
$cweb=htmlspecialchars($_POST["cweb"]);
?>
<div class="container">
      <div class="row">
    		<div class="span4 well">
    			<address>
			        <strong><?php echo $cname; ?></strong><br>
		    	</address>
    		</div>
    		<div class="span4">
          <div class="well">
    			<table class="invoice-head">
    				<tbody>
    					<tr>
    						<td class="pull-right"><strong>Customer name</strong></td>
    						<td><?php echo $custname; ?></td>
    					</tr>
    					<tr>
    						<td class="pull-right"><strong>Quote #</strong></td>
    						<td><?php echo $quoten; ?></td>
    					</tr>
    					<tr>
    						<td class="pull-right"><strong>Date</strong></td>
    						<td><?php echo $_POST["bday"]; ?></td>
    					</tr>
    				</tbody>
    			</table>
          </div>
    		</div>
    	</div>
    	<div class="row">
    		<div class="span8">
    			<h2>Invoice</h2>
    		</div>
    	</div>
    	<div class="row">
		  	<div class="span8 well invoice-body">
		  		<table class="table table-bordered">
					<thead>
						<tr>
							<th><center>Product</center></th>
              <th><center>Quandity</center></th>
							<th><center>Price Per</center></th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td><center><?php echo $product; ?></center></td>
						<td><center><?php echo $quandity; ?></center></td>
            <td><center>$<?php echo $priceper; ?></center></td>
						</tr><tr>
							<td><strong>Total</strong></td>
							<td colspan = "2"><center><strong>$<?php echo ($quandity*$priceper); ?></strong></center></td>
						</tr>
					</tbody>
				</table>
		  	</div>
  		</div>
  		<div class="row">
  			<div class="span8 well invoice-thank">
  				<h5 style="text-align:center;">Thank You!</h5>
  			</div>
  		</div>
  		<div class="row">
  	    	<div class="span3">
  		        <strong>Contact us at / Visit us at</strong></a>
  	    	</div>
  	    	<div class="span3">
  		        <strong>Email:</strong> <?php echo $cemail; ?></a>
  	    	</div>
  	    	<div class="span3">
  		        <strong>Website:</strong> <?php echo $cweb; ?></a>
  	    	</div>
  		</div>
    </div>
