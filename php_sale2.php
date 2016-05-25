<html>
	<body>
		<?php
			$cname=$_GET['comp_name'];
			$name=$_GET['c_name'];
			$addr=$_GET['c_address'];
			$mobno=$_GET['c_mob'];
			$email=$_GET['c_email'];
			$VatNo=$_GET['c_vatno'];
			$reference=$_GET['c_refr'];
			
			$cu_csh=$_GET['c_total'];
			$cu_che=$_GET['c_total'];
			$cu_ch_no=$_GET['c_chequeno'];
			$cu_bank=$_GET['c_bkname'];
			$cu_toatl=$_GET['c_total'];
			
			
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("millinum",$conn)or die(mysql_error());
			
			mysql_query("insert into reference(RefName) values('$reference')");
			$res=mysql_query("select RefId from reference where RefName='$reference'");
			$row=mysql_fetch_array($res);
			$r_id = $row['RefId'];
			
			mysql_query("insert into bankcustomer (BankName) values('$cu_bank')");
			$result=mysql_query("SELECT BankID from bankcustomer where BankName='$cu_bank'");
			$row1=mysql_fetch_array($result);
			$bkid=$row1['BankID'];
			
			$result1=mysql_query("SELECT ID from customerdb where Name='$name'");
			$row2=mysql_fetch_array($result1);
			$id=$row2['ID'];
			
			mysql_query("insert into customerdb(Name,CName,Address,MobileNo,EmailID,VatNo,ReferenceID) values('$name','$cname','$addr','$mobno','$email','$VatNo','$r_id')")or die(mysql_error());
			
			
			mysql_query("insert into cstchequedb(CashAmount,ChequeAmount,ChNo,BankNo,UserId) values('$cu_toatl','$cu_toatl','$cu_ch_no','$bkid','$id')")or die(mysql_error());

			
			echo "<script> alert('Thank you ');</script>";
			echo "values are inserted";
			header('location:sales2.html');
	
		?>
	</body>
</html>
