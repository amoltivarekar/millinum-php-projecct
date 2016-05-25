<html>
	<body>
		<?php
			$cname=$_GET['comp_name'];
			$name=$_GET['c_name'];
			$addr=$_GET['c_address'];
			$mobno=$_GET['c_mob'];
			$email=$_GET['c_email'];
			$VatNo=$_GET['vattno'];
			$cstNo=$_GET['csttno'];
			$reference=$_GET['c_refr'];
			$ino=$_GET['c_invoice'];
			$cdate=$_GET['c_date'];
			$total=$_GET['c_total'];
			$addvat=$_GET['vat'];
			$grandtotal=$_GET['c_Gtotal'];
			$amountword=$_GET['amount'];
			$chequedate=$_GET['chdate'];
			$paid=$_GET['rdb1'];
			$painding=$_GET['rdb2'];
			$cu_csh=$_GET['c_total'];
			$cu_che=$_GET['c_total'];
			$cu_ch_no=$_GET['c_chequeno'];
			$cu_bank=$_GET['c_bkname'];
			$c_delivery=$_GET['delivery'];
			
			$srno1=$_GET['sr1'];
			$srno2=$_GET['sr2'];
			$srno3=$_GET['sr3'];
			$srno4=$_GET['sr4'];
			$srno5=$_GET['sr5'];
			$srno6=$_GET['sr6'];
			$srno7=$_GET['sr7'];
			$srno8=$_GET['sr8'];
			$srno9=$_GET['sr9'];
			$srno10=$_GET['sr10'];

			$desc1=$_GET['des1'];
			$desc2=$_GET['des2'];
			$desc3=$_GET['des3'];
			$desc4=$_GET['des4'];
			$desc5=$_GET['des5'];
			$desc6=$_GET['des6'];
			$desc7=$_GET['des7'];
			$desc8=$_GET['des8'];
			$desc9=$_GET['des9'];
			$desc10=$_GET['des10'];

			$qnty1=$_GET['qty1'];
			$qnty2=$_GET['qty2'];
			$qnty3=$_GET['qty3'];
			$qnty4=$_GET['qty4'];
			$qnty5=$_GET['qty5'];
			$qnty6=$_GET['qty6'];
			$qnty7=$_GET['qty7'];
			$qnty8=$_GET['qty8'];
			$qnty9=$_GET['qty9'];
			$qnty10=$_GET['qty10'];

			$unitp1=$_GET['unit1'];
			$unitp2=$_GET['unit2'];
			$unitp3=$_GET['unit3'];
			$unitp4=$_GET['unit4'];
			$unitp5=$_GET['unit5'];
			$unitp6=$_GET['unit6'];
			$unitp7=$_GET['unit7'];
			$unitp8=$_GET['unit8'];
			$unitp9=$_GET['unit9'];
			$unitp10=$_GET['unit10'];

			$discount1=$_GET['disc1'];
			$discount2=$_GET['disc2'];
			$discount3=$_GET['disc3'];
			$discount4=$_GET['disc4'];
			$discount5=$_GET['disc5'];
			$discount6=$_GET['disc6'];
			$discount7=$_GET['disc7'];
			$discount8=$_GET['disc8'];
			$discount9=$_GET['disc9'];
			$discount10=$_GET['disc10'];

			$amnt1=$_GET['amt1'];
			$amnt2=$_GET['amt2'];
			$amnt3=$_GET['amt3'];
			$amnt4=$_GET['amt4'];
			$amnt5=$_GET['amt5'];
			$amnt6=$_GET['amt6'];
			$amnt7=$_GET['amt7'];
			$amnt8=$_GET['amt8'];
			$amnt9=$_GET['amt9'];
			$amnt10=$_GET['amt10'];

		

			$total=$_GET['c_total'];


			$conn=mysql_connect("localhost","root","");
			mysql_select_db("millinum",$conn)or die(mysql_error());
			
			mysql_query("insert into reference(RefName) values('$reference')");
			$res=mysql_query("select RefId from reference where RefName='$reference'");
			$row=mysql_fetch_array($res);
			$r_id = $row['RefId'];
			
			/*mysql_query("insert into bankcustomer (BankName) values('$cu_bank')");
			$result=mysql_query("SELECT BankID from bankcustomer where BankName='$cu_bank'");
			$row1=mysql_fetch_array($result);
			$bkid=$row1['BankID'];
			
			mysql_query("insert into bank(BankName) values('$c_bank')");
			$result=mysql_query("select BankID from bank where BankName='$c_bank'");
			$row=mysql_fetch_array($result);
			$bk_id=$row['BankID'];*/

			$result1=mysql_query("SELECT ID from customerdb where Name='$name'");
			$row2=mysql_fetch_array($result1);
			$id=$row2['ID'];
			

			$result2=mysql_query("SELECT idp from product where Productinfo='$desc1'");
			$row3=mysql_fetch_array($result2);
			$pid1=$row3['idp'];

			$result3=mysql_query("SELECT idp from product where Productinfo='$desc2'");
			$row4=mysql_fetch_array($result3);
			$pid2=$row4['idp'];

			$result4=mysql_query("SELECT idp from product where Productinfo='$desc3'");
			$row5=mysql_fetch_array($result4);
			$pid3=$row5['idp'];

			$result5=mysql_query("SELECT idp from product where Productinfo='$desc4'");
			$row6=mysql_fetch_array($result5);
			$pid4=$row6['idp'];

			$result6=mysql_query("SELECT idp from product where Productinfo='$desc5'");
			$row7=mysql_fetch_array($result6);
			$pid5=$row7['idp'];

			$result7=mysql_query("SELECT idp from product where Productinfo='$desc6'");
			$row8=mysql_fetch_array($result7);
			$pid6=$row8['idp'];

			$result8=mysql_query("SELECT idp from product where Productinfo='$desc7'");
			$row9=mysql_fetch_array($result8);
			$pid7=$row9['idp'];

			$result9=mysql_query("SELECT idp from product where Productinfo='$desc8'");
			$row10=mysql_fetch_array($result9);
			$pid8=$row10['idp'];

			$result10=mysql_query("SELECT idp from product where Productinfo='$desc9'");
			$row11=mysql_fetch_array($result10);
			$pid9=$row11['idp'];

			$result11=mysql_query("SELECT idp from product where Productinfo='$desc10'");
			$row12=mysql_fetch_array($result11);
			$pid10=$row12['idp'];	
			echo $pid1;
			mysql_query("insert into customerdb(Name,CName,Address,MobileNo,EmailID,VatNo,ReferenceID,delivery,invoiceno,date) 
				values('$name','$cname','$addr','$mobno','$email','$VatNo','$r_id','$c_delivery','$ino','$cdate')")or die(mysql_error());
			
			mysql_query("insert into invoice(InvoiceNo) values('$ino')")or die(mysql_error()); 

			mysql_query("insert into cstchequedb(amtwrd,paid,painding,CashAmount,ChequeAmount,chequeno,BankName,chequedate,invoiceno)
			 values('$amountword','$paid','$painding','$total','$total','$cu_ch_no','$cu_bank','$chequedate','$ino')")or die(mysql_error());
			
			mysql_query("insert into  discription(SrNo,Pid,Qty,discription,unitprice,discount,amount,usid,invoiceno)
			 values('$srno1','$pid1','$qnty1','$desc1','$unitp1','$discount1','$amnt1','$id','$ino'),
			 ('$srno2','$pid2','$qnty2','$desc2','$unitp2','$discount2','$amnt2','$id','$ino'),
			 ('$srno3','$pid3','$qnty3','$desc3','$unitp3','$discount3','$amnt3','$id','$ino'),
			 ('$srno4','$pid4','$qnty4','$desc4','$unitp4','$discount4','$amnt4','$id','$ino'),
			 ('$srno5','$pid5','$qnty5','$desc5','$unitp5','$discount5','$amnt5','$id','$ino'),
			 ('$srno6','$pid6','$qnty6','$desc6','$unitp6','$discount6','$amnt6','$id','$ino'),
			 ('$srno7','$pid7','$qnty7','$desc7','$unitp7','$discount7','$amnt7','$id','$ino'),
			 ('$srno8','$pid8','$qnty8','$desc8','$unitp8','$discount8','$amnt8','$id','$ino'),
			 ('$srno9','$pid9','$qnty9','$desc9','$unitp9','$discount9','$amnt9','$id','$ino'),
			 ('$srno10','$pid10','$qnty10','$desc10','$unitp10','$discount10','$amnt10','$id','$ino')")or die(mysql_error());
			
			mysql_query("insert into total(total,addvat,grandtotal,invoiceno) values('$total','$addvat','$grandtotal','$ino') ")or die(mysql_error());


			echo "<script> alert('Thank you ');</script>";
			echo "values are inserted";
			
			/* $i=1;
			while($i<=10)
			{
				$result=mysql_query("select  lower(Product_info) from product where lower(product_info) = lower('$des.$i')");
				$n = mysql_affected_rows();
				if($n==1)
				{
					while($row= mysql_fetch_array($result))
					{
						mysql_query("select id from product where Product_info = $row['Product_info']");
					}
					$i++;
				}
			} */
			
			
			header('location:sales1.html');
	
		?>
	</body></html>
