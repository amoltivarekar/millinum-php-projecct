<html>
	<head>
		<title>
			product_details
		</title>
		<link rel="stylesheet" href="css/prd.css" />

	</head>
	<body>
		<body >
		<br>
		<section>
		<font class="font3">Product info</font>
			
		<dropdown style="position:fixed; top:0px; left:0px;">
		<input id="toggle2" type="checkbox">
		<label for="toggle2" class="animate">
			Menu
				<i class="fa fa-list float-right"></i>
		</label>
		<ul class="animate">
			<li class="animate" onclick="window.location='firstpage.html'">
				Home
				<i class="fa fa-arrows-alt float-right"></i>
			</li>
			<li class="animate" onclick="window.location='sales1.html'">
				sale-vat
				<i class="fa fa-arrows-alt float-right"></i>
			</li>
			<li class="animate" onclick="window.location='sales2.html'">
				sale-non-vat
				<i class="fa fa-arrows-alt float-right"></i>
			</li>
			<li class="animate" onclick="window.location='purchase.html'">
				Purchase
				<i class="fa fa-code float-right"></i>
			</li>
			<li class="animate"onclick="window.location='cheque.html'">
				Cheque
				<i class="fa fa-arrows-alt float-right"></i>
			</li>
			<li class="animate" onclick="window.location='expense.html'">
				Expense
				<i class="fa fa-code float-right"></i>
			</li>
			<li class="animate" onclick="window.location='ledger.php'">
				ledger
				<i class="fa fa-arrows-alt float-right"></i>
			</li>
			<li class="animate" onclick="window.location='CustomerDatabase.php'">
				Customer DB
				<i class="fa fa-code float-right"></i>
			</li>
			<li class="animate" onclick="window.location='PurchaseDatabase.php'" >
				Purchase DB
				<i class="fa fa-arrows-alt float-right"></i>
			</li>
			<li class="animate" onclick="window.location='ChequeDatabase.php'">
				Company Cheque DB
				<i class="fa fa-code float-right"></i>
			</li>
			<li class="animate" onclick="window.location='CstChequeDatabase.php'">
				Customer Cheque DB
				<i class="fa fa-code float-right"></i>
			</li>
			<li class="animate" onclick="window.location='ExpenseDatabase.php'">
				Expense DB
				<i class="fa fa-arrows-alt float-right"></i>
			</li>
			<li class="animate" onclick="window.location='InvoiceDatabase.php'">
				Invoice DB
				<i class="fa fa-arrows-alt float-right"></i>
			</li>
				
		</ul>
		
	</dropdown><br>
			<div class="prd_box">
			<form action="product_id.php">
				<div class="color">
					<div class="textinfo">
						<div class="pad">
							<br>
							<br>
							<table width="100%">
								<tr>
									<td>
										<b>Product Name:</b>
									</td>
									<td>
										<input type="text" class="textsize" name="pname" placeholder="    Product Name">
									</td>
								</tr>
							</table>
							<br>
							<br>
							<br>
							<div class="center">
								<input type="submit" name="submitButton" value="submit" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="reset" name="resetButton" value="reset" class="button">
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			</section>
			
			<div class="padd">
			<table width="80%" >
				<thead>
					<tr>
						<th>ID</th>
						<th>PRODUCT NAME</th>
						
					</tr>
				</thead>
				
				<?php
					$conn=mysql_connect("localhost","root","");
					mysql_select_db("millinum",$conn)or die(mysql_error());
					$result=mysql_query("SELECT idp,productinfo from product")or die (mysql_error());
					
					while($row=mysql_fetch_array($result))
					{
						echo "<tr>";
							echo"<td>".$row['idp']."</td>";
							echo"<td>".$row['productinfo']."</td>";	
						echo "</tr>";
					}
				?>
			</table>
		</div>
	</body>
</html>