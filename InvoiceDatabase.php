<html>
	<head>
		<title>
			invoice detail
		</title>
		<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;" />
		<link rel="stylesheet" href="css/invoicedetail.css" />	
	</head>
	<body>
		<br>
		<font class="font1">Invoice &nbsp;&nbsp; Detail </font>
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
				<li class="animate" onclick="window.location='product.php'">
					product ID
					<i class="fa fa-arrows-alt float-right"></i>
				</li>
			</ul>
	</dropdown>
	<form name="f1">
	<select id="invoiceid" name="invoicename"  class="select1" onchange=window.location=f1.invoicename.value>
			<option value="">Select Bill</option>
			<option value="InvoiceDatabase.php">Sale-vat Bill</option>
			<option value="InvoiceNon-vat.php">Sale-non-vat Bill</option>
	</select>
	</form>
	<div>
		<?php
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("millinum",$conn)or die(mysql_error());
			
			$result=mysql_query("SELECT InvoiceNo FROM invoice")or die (mysql_error());
			echo "<select id='invoiceid' name='invoicename' value='invoiceno' class='select'>";
			echo "<option>Select Invoice No.</option>";
			while($row=mysql_fetch_array($result))
			{
				echo "<option>".$row['InvoiceNo']."</option>";
			}
			echo "</select>";
			
			
		
		echo "<div class='textinfo1'>";
			echo "<h3>Sale - vat Bill </h3>";
		echo "</div>";
		$sql="SELECT CName,name,Address,MobileNo,EmailID,VatNo,delivery,T1.invoiceno,ReferenceID,date,SrNo,
			discription,Qty,unitprice,discount,amount,total,addvat,grandtotal,amtwrd,paid,painding,chequeno,Bankname,chequedate
			 FROM customerdb T1 JOIN discription T2 ON T1.invoiceno=T2.invoiceno JOIN total T3 ON T1.invoiceno=T3.invoiceno 
			 JOIN cstchequedb T4 ON T3.invoiceno=T4.invoiceno";
		$result2=mysql_query($sql)or die(mysql_error());

		$sql2="SELECT SrNo,discription,Qty,unitprice,discount,amount FROM discription";
		$result3=mysql_query($sql2)or die(mysql_error());

		while($row=mysql_fetch_array($result2))
		{
		echo "<div class='color'>";
					echo "<div class='textinfo'>";
						echo "<div class='pad'>";
							echo "<br>";
							echo "<table width='100%'>";
								echo "<tr>";
									echo "<td>";
										echo "<b>COMPANY NAME</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' class='textsize' name='comp_name' value='".$row['CName'] . "'>";
									echo "</td>";
									echo "<td>";
										echo "<b>INVOICE NO.</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' class='textsize' name='c_invoice' value='".$row['invoiceno']."'>";
									echo "</td>";
								echo "</tr>";
							
								echo "<tr>";
									echo "<td>";
										echo "<b>CUSTOMER NAME</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' class='textsize' name='c_name' placeholder='    full name' value='".$row['name']."'>";
									echo "</td>";
									echo "<td>";
										echo "<b>DATE</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='date'  name='c_date' class='textsize' value='".$row['date']."'>";
									echo "</td>";
								echo "</tr>";
						
								echo "<tr>";
									echo "<td>";
										echo "<b>ADDRESS</b>";
									echo "</td>";
									echo "<td>";
										echo "<textarea rows='4' cols='31' name='c_address'  value='".$row['Address']."'></textarea>";
									echo "</td>";
									echo "<td>";
										echo "<b>REFERENCE</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' class='textsize' name='c_refr' placeholder='    some name' value='".$row['ReferenceID']."'>";
									echo "</td>";
								echo "</tr>";
							
								echo "<tr>";
									echo "<td>";
										echo "<b>MOB NO. </b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='tel' class='textsize' name='c_mob' placeholder='    +919845678673' value='".$row['MobileNo']."'>";
									echo "</td>";
									echo "<td>";
										echo "<b>PAYMENT TERM</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' class='textsize' name='c_pterm' VALUE='  Immediate'>";
									echo "</td>";
								echo "</tr>";					
						
								echo "<tr>";
									echo "<td>";
										echo "<b>E-MAIL ID</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='email' class='textsize' name='c_email' placeholder='    somename@somedomain.com' value='".$row['EmailID']."'>";
									echo "</td>";
									echo "<td>";
										echo "<b>DESPATCH / DELIVERY </b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' class='textsize' name='c_dis' value='".$row['delivery']."'>";
									echo "</td>";
								echo "</tr>";
						
								echo "<tr>";
									echo "<td>";
										echo "<b>CUST VAT-TIN NO.</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' class='textsize' name='c_vatno' placeholder='    279305C w.e.f. 07-04-06' value='".$row['VatNo']."'>";
									echo "</td>";
								echo "</tr>";
							echo "</table>";
					
							
							echo "<br>";
							echo "<table border='collapse' width='100%' >";
								echo "<tr>";
									echo "<th width='0px'>";
										echo "<b>SR.NO</b>";
									echo "</th>";
									echo "<th width='250px'>";
										echo "<b>DESCRIPTION</b>";
									echo "</th>";
									echo "<th>";
										echo "<b>QTY</b>";
									echo "</th>";
									echo "<th>";
										echo "<b>UNIT PRICE</b>";
									echo "</th>";
									echo "<th>";
										echo "<b>DISCOUNT</b>";
									echo "</th>";
									echo "<th>";
										echo "<b>AMOUNT</b>";
									echo "</th>";
								echo "</tr>";
								while($row=mysql_fetch_array($result2))
								{
									echo "<tr>";
										echo "<td >";
											echo "<input type='text' size='5px' class='width1' name='sr1' value='".$row['SrNo']."'>";
										echo "</td>";
										echo "<td>";
											echo "<input type='text'  size='5px' class='width1' name='des1' value='".$row['discription']."'>";
										echo "</td>";
										echo "<td>";
											echo "<input type='text' size='5px' class='width1' id='a'  name='qty1' value='".$row['Qty']."'>";
										echo "</td>";
										echo "<td>";
											echo "<input type='text' size='5px' class='width1' id='b' name='unit1' value='".$row['unitprice']."'>";
										echo "</td>";
										echo "<td>";
											echo "<input type='text' size='5px' class='width1' id='c'  onfocus='value='0''   onblur='abcd()' name='disc1' value='".$row['discount']."'>";
										echo "</td>";
										echo "<td>";
											echo "<input type='text' size='5px' class='width1' id='d'  readonly onfocus='identy1()' name='amt1' value='".$row['amount']."'>";
										echo "</td>";
									echo "</tr>";
								}

								echo "<tr>";
									echo "<td colspan='3' rowspan='3'>";
									echo "<b class='ml' >AMOUNT IN WORDS : </b>";
									echo "<br><br><input type='text' placeholder='    Like Five Thousand Only' class='widthamt' name='amount' value='".$row['amtwrd']."'>";
									
									echo "<td>";
										echo "<b>TOTAL</b>";
									echo "</td>";
									echo "<th>";
										echo "<input type='text'  size='5px' class='width1' readonly>";
									echo "</th>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' name='c_total' id='id10'  readonly value='".$row['total']."'>";
									echo "</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td>";
										echo "<b>ADD VAT @</b>";
									echo "</td>";
									echo "<th>";
										echo "<select name='c_vat' class='width1' id='vat'>";
											echo "<option value='5'>5%</option>";
											echo "<option value='12.36'>12.36%</option>";
											echo "<option value='12.50'>12.50%</option>";
										echo "</select>";
									echo "</th>";
									echo "<td>";
										echo "<input type='text'  size='5px' class='width1' id='av'  name='vat' readonly value='".$row['addvat']."'>";
									echo "</td>";
								echo "</tr>";
								echo "<tr>";
									
									echo "<td>";
										echo "<b>GRAND TOTAL</b>";
									echo "</td>";
									echo "<th>";
										echo "<input type='text'  size='5px' class='width1' readonly>";
									echo "</th>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' name='c_Gtotal' id='gt'  readonly value='".$row['grandtotal']."'>";
									echo "</td>";
								echo "</tr>";
							echo "</table>";
							echo "<br>";
							
							
							
							echo "<b>AMOUNT </b><b class='mk'>:</b> &nbsp; &nbsp;";
							echo "<b>PAID</b><input type='text' name='rdb1' class='ml1' id='id11' onblur='painding()' value='".$row['paid']."'>&nbsp; &nbsp;";
							echo "<b>PAINDING</b><input type='text' name='rdb2' class='ml1' id='id12' readonly value='".$row['painding']."'>";              
							echo "<hr>";
							echo "<div class='hide' >";
								echo "<table width='100%'>";
									echo "<tr>";
										echo "<td>";
											echo "<b>PAYMENT</b> &nbsp; <b>:</b><input type='radio' name='rad' value='cash' class='ml' ><b>CASH</b> <input type='radio' name='rad' value='cheque' class='ml'><b>CHEQUE</b><input type='radio' name='rad' value='E-pay' class='ml' > <b>E-PAY.</b>";
										echo "</td>";
										echo "<td>";
											echo "<b>VAT-TIN NO.</b> &nbsp;<input type='text' width='100%' value='23564'>";
										echo "</td>";
									echo "<tr>";
									echo "<tr>";
										echo "<td>";
											echo "<b>CHEQUE NO.</b> &nbsp; <input type='text' width='100%' class='text2' placeholder='    Cheque No.' name='c_chequeno' value='".$row['chequeno']."'> &nbsp;&nbsp;&nbsp;&nbsp; <b>DATE</b> &nbsp;<input type='date' width='100%' name='chdate' value='".$row['chequedate']."'>";
										echo "</td>";
										echo "<td>";
											echo "<b>CST-TIN NO.</b> &nbsp;<input type='text' width='100%' value='45789'>";
										echo "</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td>";
											echo "<b>BANK NAME</b> &nbsp; <input type='text' width='100%' class='text5' placeholder='    Bank Name' name='c_bkname' value='".$row['Bankname']."'>";
										echo "</td>";
									echo "</tr>";
									echo "<br>";
									echo "<tr>";
										echo "<td>";
											echo "<b>RECEIVING</b> &nbsp; <b>SIGNATURE</b> <b>:</b> __________________";
										echo "</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td>";
											echo "<b>RECEIVING</b> &nbsp; <b>NAME</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b> __________________";
										echo "</td>";
									echo "</tr>";
								echo "</table>";
							
							echo "<hr>";
							echo "<br>";
							
							echo "</div>";
							echo "<div class='center'>";
								echo "<input type='submit' name='submitButton' value='save' class='button'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
								echo "<input type='reset' name='resetButton' value='reset' class='button'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
								echo "<input type='button' name='printButton' value='print' class='button'>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				echo "</div>";}
				?>
			
			
	
	</body>
</html>