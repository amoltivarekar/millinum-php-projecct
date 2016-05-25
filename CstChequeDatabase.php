<html>
	<head>
		<title>
			customer detail
		</title>
		<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
		<link rel="stylesheet" href="css/CustomerChequeDetail.css" />
	</head>
	<body>
		<br>
		<font class="font1">Customer &nbsp; cheque &nbsp; Detail</font>
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
			<li class="animate" onclick="window.location='ExpenseDatabase.php'">
				Expense DB
				<i class="fa fa-arrows-alt float-right"></i>
			</li>
			<li class="animate" onclick="window.location='InvoiceDatabase.php'">
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
						<th>NAME</th>
						<th>Payment Mode</th>
						<th>CASH</th>
						<th>CHEQUE</th>
						<th>CHEQUE NO.</th>
						<th>BANK NAME</th>
					</tr>
				</thead>
				
				<?php
					$conn=mysql_connect("localhost","root","");
					mysql_select_db("millinum",$conn)or die(mysql_error());
					
					$result=mysql_query("SELECT UserId,PaymentMode,CashAmount,ChequeAmount,ChNo,BankName from cstchequedb t1 JOIN bankcustomer t2 ON t1.BankName=t2.BankName");
					while($row=mysql_fetch_array($result))
					{
						echo "<tr>";
							echo "<td>".$row['UserId']."</td>";
							echo "<td>".$row['PaymentMode']."</td>";
							echo "<td>".$row['CashAmount']."</td>";
							echo "<td>".$row['ChequeAmount']."</td>";
							echo "<td>".$row['ChNo']."</td>";
							echo "<td>".$row['BankName']."</td>";
						echo "</tr>";
					}
				?>
			</table>
		</div>
	</body>
</html>
