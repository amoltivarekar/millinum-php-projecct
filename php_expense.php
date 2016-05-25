<html>
	<body>
		<?php
			$eid=$_GET['ex_id'];
			$edate=$_GET['ex_date'];
			$epartic=$_GET['ex_par'];
			$epur=$_GET['ex_pur'];
			$edes=$_GET['ex_des'];
			$eamt=$_GET['ex_amt'];
			
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("millinum",$conn);
			
			mysql_query("insert into particulars(PrName) values('$epartic')");
			echo " part inserted";
			$result=mysql_query("select Pa_ID from particulars where PrName='$epartic'");
			$row=mysql_fetch_array($result);
			$pr_id=$row['Pa_ID'];
			
			mysql_query("insert into expencedb(Date,ParticularsID,Purpose,Description,Amount) values('$edate','$pr_id','$epur','$edes','$eamt')");
			echo "<script> alert('Thank you ');</script>";
			echo " values are Inserted ";
			header('location:expense.html');
			
		?>
	</body>
</html>
			