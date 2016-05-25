<html>
	<body>
		<?php
			$pch_name=$_GET['p_name'];
			$pch_date=$_GET['p_date'];
			$pch_chdate=$_GET['ch_date'];
			$pch_invoiceno=$_GET['p_invoiceno'];
			$pch_email=$_GET['p_emailid'];
			$pch_address=$_GET['p_address'];
			$pch_mob=$_GET['p_tel'];
			$p_vat=$_GET['p_vat'];
			$pch_vat=$_GET['vat'];
			$pch_ga=$_GET['p_Gtotal'];
			$pch_ch=$_GET['c_chequeno'];
			$pch_bankname=$_GET['c_bkname'];
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("millinum",$conn);
			
			/*$res=" select count(*)from particularinfo where p-name='$pch_name' "
			if(sql_affected_rows('$res')==1)
			{
				mysql_query("select p-name,Address,e-mail,mob-no from particularinfo");or die(mysql_error()); 
			}
			else
			{*/
				mysql_query("insert into purchaseclint(PName,Address,EMail,MobNo) values('$pch_name','$pch_address','$pch_email','$pch_mob')")or die(mysql_error());
			/*}*/
			mysql_query("insert into  purchaseaccount(PdDate,PdInvoiceNumber,PdvatTinNo,PdGrandTotal,PdChequeNo,PdChequeDate,PdBankName) values('$pch_date','$pch_invoiceno','$p_vat','$pch_ga','$pch_ch','$pch_chdate','$pch_bankname')")or die(mysql_error());
			header('location:purchase.html');
		?>
	</body>
</html>