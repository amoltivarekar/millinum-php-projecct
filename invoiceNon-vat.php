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
			echo "<h3>Sale -non vat Bill </h3>";
		echo "</div>";
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
										echo "<input type='text' class='textsize' name='comp_name' placeholder='    Company Name'>";
									echo "</td>";
									
								echo "</tr>";
							
								echo "<tr>";
									echo "<td>";
										echo "<b>CUSTOMER NAME</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' class='textsize' name='c_name' placeholder='    full name'>";
									echo "</td>";
									echo "<td>";
										echo "<b>INVOICE NO.</b>";
									echo "</td>";
									echo "<td>
										<input type='text' class='textsize' name='c_invoice' value='   MM-'>
									</td>";
									
								echo "</tr>";
						
								echo "<tr>";
									echo "<td>";
										echo "<b>DATE</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='date'  name='c_date' class='textsize' >";
									echo "</td>";
									echo "<td>";
										echo "<b>REFERENCE</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' class='textsize' name='c_refr' placeholder='    some name'>";
									echo "</td>";
									
									
								echo "</tr>";
							
								echo "<tr>";
									echo "<td>";
										echo "<b>E-MAIL ID</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='email' class='textsize' name='c_email' placeholder='    somename@somedomain.com'>";
									echo "</td>";
									echo "<td>";
										echo "<b>VAT-TIN NO.</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' class='textsize' name='c_vatno' placeholder='    279305209557C w.e.f. 07-04-06'>";
									echo "</td>";
								echo "</tr>";					
						
								echo "<tr>";
									echo "<td>";
										echo "<b>ADDRESS</b>";
									echo "</td>";
									echo "<td>";
										echo "<textarea rows='4' cols='31' name='c_address' placeholder='  Enter Customer Address.....'></textarea>";
									echo "</td>";
									
									echo "<td>";
										echo "<b>MOB NO. </b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='tel' class='textsize' name='c_mob' placeholder='    +919845678673'>";
									echo "</td>";
								echo "</tr>";
						
								echo "<tr>";
									
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
										echo "<b>AMOUNT</b>";
									echo "</th>";
								echo "</tr>";
								echo "<tr>";
									echo "<td >";
										echo "<input type='text' size='5px' class='width1' name='sr1'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text'  size='5px' class='width1' name='des1'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='a'  name='qty1'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='b' name='unit1'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='d' value='' readonly onfocus='identy1()' name='amt1'>";
									echo "</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td >";
										echo "<input type='text' size='5px' class='width1' name='sr2'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text'  size='5px' class='width1' name='des2'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='e' name='qty2' >";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='f' name='unit2'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='h' value='' readonly onblur='identy2()' name='amt2'>";
									echo "</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td >";
										echo "<input type='text' size='5px' class='width1' name='sr3' >";
									echo "</td>";
									echo "<td>";
										echo "<input type='text'  size='5px' class='width1' name='des3'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='i' name='qty3' >";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='j' name='unit3'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='l' value=''  readonly onblur='identy3()' name='amt3'>";
									echo "</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' name='sr4'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text'  size='5px' class='width1' name='des4'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='m' name='qty4' >";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='n' name='unit4' >";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='p' value='' readonly onblur='identy4()' name='amt4'>";
									echo "</td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<td >";
										echo "<input type='text' size='5px' class='width1' name='sr5'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text'  size='5px' class='width1' name='des5'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='q' name='qty5' >";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='r' name='unit5'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='t' value='' readonly onblur='identy5()' name='amt5'>";
									echo "</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td >";
										echo "<input type='text' size='5px' class='width1' name='sr6'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text'  size='5px' class='width1' name='des6'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='u'   name='qty6'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='v' name='unit6'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='x' value='' readonly onblur='identy6()' name='amt6'>";
									echo "</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td >";
										echo "<input type='text' size='5px' class='width1' name='sr7'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text'  size='5px' class='width1' name='des7'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='y'   name='qty7'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='z' name='unit7'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='z1' value='' readonly onblur='identy7()' name='amt7'>";
									echo "</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td >";
										echo "<input type='text' size='5px' class='width1' name='sr8'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text'  size='5px' class='width1' name='des8'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='id1'   name='qty8'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='id2' name='unit8'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='id4' value='' readonly onblur='identy8()' name='amt8'>";
									echo "</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td >";
										echo "<input type='text' size='5px' class='width1' name='sr9'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text'  size='5px' class='width1' name='des9'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='c1'   name='qty9'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='d1' name='unit9'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='d_1' value='' readonly onblur='identy9()' name='amt9'>";
									echo "</td>";
								echo "</tr>";
								echo "<tr>";
									echo "<td >";
										echo "<input type='text' size='5px' class='width1' name='sr10'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text'  size='5px' class='width1' name='des10'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='e1'  name='qty10'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='f1' name='unit10'>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' id='f_1' value='' readonly onblur='identy10()' name='amt10'>";
									echo "</td>";
								echo "</tr>";

								echo "<tr>";
									echo "<td colspan='3' rowspan='1'>";
									echo "<b class='ml' >AMOUNT IN WORDS : </b>";
									echo "<br><input type='text' placeholder='    Like Five Thousand Only' class='widthamt' name='amount'>";
									
									echo "<td>";
										echo "<b>TOTAL</b>";
									echo "</td>";
									echo "<td>";
										echo "<input type='text' size='5px' class='width1' name='c_total' id='id10'  readonly>";
									echo "</td>";
								echo "</tr>";
								
							echo "</table>";
							echo "<br>";
							
							
							
							echo "<b>AMOUNT </b><b class='mk'>:</b> &nbsp; &nbsp;";
							echo "<b>PAID</b><input type='text' name='rdb1' class='ml1' id='id11' onblur='painding()'>&nbsp; &nbsp;";
							echo "<b>PAINDING</b><input type='text' name='rdb2' class='ml1' id='id12' readonly>";              
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
											echo "<b>CHEQUE NO.</b> &nbsp; <input type='text' width='100%' class='text2' placeholder='    Cheque No.' name='c_chequeno'> &nbsp;&nbsp;&nbsp;&nbsp; <b>DATE</b> &nbsp;<input type='date' width='100%' name='chdate'>";
										echo "</td>";
										echo "<td>";
											echo "<b>CST-TIN NO.</b> &nbsp;<input type='text' width='100%' value='45789'>";
										echo "</td>";
									echo "</tr>";
									echo "<tr>";
										echo "<td>";
											echo "<b>BANK NAME</b> &nbsp; <input type='text' width='100%' class='text5' placeholder='    Bank Name' name='c_bkname'>";
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
				echo "</div>";
				?>
	
	</body>
</html>