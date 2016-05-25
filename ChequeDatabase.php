<html>
	<head>
		<title>
			 company cheque detail
		</title>
		<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
		<link rel="stylesheet" href="css/chequedetail.css" /> 
	</head>
	<body>
		<br>
		<font class="font1"> Company &nbsp;&nbsp;Cheque &nbsp;&nbsp; Detail</font>
		<dropdown style="position:absolute; top:0px; left:0px;">
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
					<th>BANK NAME</th>
					<th>NARATION</th>
					<th>CHEQUE NO.</th>
					<th>AMOUNT</th>
				</tr>
			</thead>
			<?php
				$conn=mysql_connect("localhost","root","");
				mysql_select_db("millinum",$conn)or die(mysql_error());
				$result=mysql_query("SELECT ID,Date,BankName,Ch_Name,NARATION,ChequeNo,Amount FROM  check_table T1 JOIN bank T2  ON T2.BankID=T1.BankID join  chequeparticular T3 on t3.Ch_Pr_ID =T1.ParticularsID")or die (mysql_query());
			
				
				while($row=mysql_fetch_array($result))
				{
					echo "<tr>";
						echo "<td>".$row['ID']."</td>";
						echo "<td>".$row['Date']."</td>";
						echo "<td>".$row['Ch_Name']."</td>";
						echo "<td>".$row['BankName']."</td>";
						echo "<td>".$row['NARATION']."</td>";
						echo "<td>".$row['ChequeNo']."</td>";
						echo "<td>".$row['Amount']."</td>";
					echo "</tr>";
				}
			?>
		</table>
		</div>	
	</body>
</html>