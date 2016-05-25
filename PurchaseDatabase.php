<html>
	<head>
		<title>
			purchase detail
		</title>
		<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
		<link rel="stylesheet" href="css/purchasedetail.css" />
	</head>
	<body>
		<br>
		<font class="font1">Purchase &nbsp;&nbsp; Detail</font>
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
			<li class="animate" onclick="window.location='InvoiceDatabase.html'">
				Invoice DB
				<i class="fa fa-arrows-alt float-right"></i>
			</li>	
			<li class="animate" onclick="window.location='product.php'">
				product ID
				<i class="fa fa-arrows-alt float-right"></i>
			</li>
		</ul>
	</dropdown>
		<br><br>
		<div class="padd">
		<table width="80%" >
			<thead>
				<tr>
					<th>Sr.no</th>
					<th>Per_Name</th>
					<th>Date</th>
					<th>Invoice-No</th>
					<th>Address</th>
					<th>Grand-total</th>
					<th>Description</th>
				</tr>
			</thead>
			
			<?php
				$conn=mysql_connect("localhost","root","");
				mysql_select_db("millinum",$conn) or die(mysql_error());
				
				$result=mysql_query("SELECT PId,PName,PdDate,PdInvoiceNumber,Address,PdGrandTotal FROM purchaseaccount purchaseclint")or die (mysql_error());
				while($row=mysql_fetch_array($result))
				{
					echo"<tr>";
							echo "<td>".$row['PId']."</td>";
							echo "<td>".$row['PName']."</td>";
							echo "<td>".$row['PdDate']."</td>";
							echo "<td>".$row['PdInvoiceNumber']."</td>";
							echo "<td>".$row['Address']."</td>"
							echo "<td>".$row['PdGrandTotal']."</td>";
							echo "<td>".$row['Description']."</td>";
					echo "</tr>";
				}
			?>
		</table>
		</div>	
	</body>
</html>