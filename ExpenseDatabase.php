<html>
	<head>
		<title>
			expenses detail
		</title>
		<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
		<link rel="stylesheet" href="css/expensedetail.css">
	</head>
	<body>
		<br>
		<font class="font1">Expense &nbsp;&nbsp; Detail</font>
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
					<th>SR NO.</th>
					<th>DATE</th>
					<th>PARTICULARS</th>
					<th>PURPOSE</th>
					<th>DESCRIPTION</th>
					<th>AMOUNT</th>
				</tr>
			</thead>
			<?php
				$conn=mysql_connect("localhost","root","");
				mysql_select_db("millinum",$conn)or die(mysql_error());
				$result=mysql_query("SELECT ExID,Date,PrName,Purpose,Description,Amount FROM   particulars T1 JOIN  expencedb T2 ON T1.Pa_ID = T2.ParticularsID") or die(mysql_error());
							
				while($row = mysql_fetch_array( $result )) 
				{
					echo"<tr>";
						echo"<td>".$row['ExID']."</td>";
						echo"<td>".$row['Date']."</td>";
						echo"<td>".$row['PrName']."</td>";
						echo"<td>".$row['Purpose']."</td>";
						echo"<td>".$row['Description']."</td>";
						echo"<td>".$row['Amount']."</td>";
					echo"</tr>";
				}
			?>
		</table>
		</div>	
	</body>
</html>