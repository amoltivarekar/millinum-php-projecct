<html>
	<head>
		<title>
			ledger
		</title>
		<link rel="stylesheet" href="css/ledger.css" />
	</head>
	<body bgcolor="white">
		<br><br><br>
		<section>
			<font class="font3">Ledger</font>
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
			<li class="animate" onclick="window.location='product.php'">
				product ID
				<i class="fa fa-arrows-alt float-right"></i>
			</li>
		</ul>
	</dropdown>
			<br><br>
			
			<div class="textinfo">
				<br>
				<form action="<?=$_SERVER['PHP_SELF'];?>">
				<div class="padd1">
					<table width="80%">
						<tr>
							<td>
								<b>Name</b>
							</td>
							<td>
								&nbsp;<input type="text" class="text1" name="name1" placeholder="    Particulars Name">
							</td>
						</tr>
					</table>
					<br>
					<table width="80%" >
						<tr>
							<td>
								<b>From</b>
							</td>
							<td>
								<input type="date" class="date1" name="date1" placeholder="  Enter  Date">
							</td>
							<td>
								<b>To</b>
							</td>
							<td>
								<input type="date" class="date2" name="date2" placeholder="  Enter  Date">
							</td>
						</tr>
					</table>
				</div>
				
				<br>
				<br>
				<br>
				
				<div class="center">
					<button name="subject" type="submit" value="save" onclick="ShowData()">SUBMITE</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button name="subject" type="cancel" value="cancel">RESET</button>
				</div>
			</div>	
			</form>
		</section>
			<div class="padd">
				<table width="80%" >
				<thead>
					<tr>
						<th>CUSTOMER NAME</th>
						<th>DATE</th>
						<th>AMOUNT</th>
						<th>PAID</th>
						<th>PAINDING</th>
						<th>INVOICE NO</th>
						
					</tr>
				</thead>
				<br><br>
				<?php
				if(isset($_GET['date1'])) 
				{ 
					ShowData();
				}
				function ShowData()
				{
					$startdate= $_GET['date1'];
					$endDate= $_GET['date2'];
					$name=$_GET['name1'];
					
					$conn=mysql_connect("localhost","root","");
					mysql_select_db("millinum",$conn)or die(mysql_error());
					$result=mysql_query("select * from invoicedb where (DateOfBill between '$startdate' and '$endDate')&&(CustomerName='$name') ");
						while($row= mysql_fetch_array($result))
						{
							echo "<tr>";
								echo "<td>".$row['CustomerName']."</td>";
								echo "<td>".$row['DateOfBill']."</td>";
								echo "<td>".$row['GrandTotal']."</td>";
								echo "<td>".$row['Paid']."</td>";
								echo "<td>".$row['painding']."</td>";
								echo "<td>".$row['InvoiceNo']."</td>";								
							echo "</tr>";
						}
				}
				?>
			</table>
	</body>
</html>