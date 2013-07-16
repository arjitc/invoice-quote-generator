<!DOCTYPE html>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
<div class="container">
  <div class="well">
<form action="final.php" method="post">
Company Name <input type="text" name="cname"><br>
Customer Name <input type="text" name="custname"><br>
Company Website <input type="text" name="cweb"><br>
Customer Email  <input type="text" name="cemail"><br>
Quote number <input type="text" name="quoten"><br>
Date  <input type="date" name="bday"><br>
<table class="table">
<tr>
<td>Product</td>
<td>Quandity</td>
<td>Price per</td>
</tr>
<tr>
<td><input type="text" name="product"></td>
<td><input type="text" name="quandity"></td>
<td><input type="text" name="priceper"></td>
</tr>
</table>
<br>
<button type="submit" class="btn">Generate Quote</button>
</form>
</div>
</div>
