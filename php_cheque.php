<html>
	<body>
		<?php	
			$c_date=$_GET['ch_date'];
			$c_part=$_GET['ch_part'];
			$c_bank=$_GET['ch_bank'];
			$c_nar=$_GET['ch_nar'];
			$c_no=$_GET['ch_no'];
			$c_amt=$_GET['ch_amt'];
			
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("millinum",$conn);
			
			
			
			mysql_query("insert into bank(BankName) values('$c_bank')");
			$result=mysql_query("select BankID from bank where BankName='$c_bank'");
			$row=mysql_fetch_array($result);
			$bk_id=$row['BankID'];
			
			mysql_query("insert into chequeparticular(Ch_Name) values('$c_part')");
			$result1=mysql_query("select Ch_Pr_ID from chequeparticular where Ch_Name='$c_part'");
			$row1=mysql_fetch_array($result1);
			$ch_id=$row1['Ch_Pr_ID'];

			mysql_query("insert into Check_Table(Date,ParticularsID,BankID,Naration,ChequeNo,Amount) values('$c_date','$ch_id','$bk_id','$c_nar','$c_no','$c_amt')")or die(mysql_error());
			echo "<script> alert('Thank you');</script>";
			echo " values are Inserted ";
			header('location:cheque.html');
		?>
	</body>
</html>
	