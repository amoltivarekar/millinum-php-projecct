<html>
	<body>
		<?php
			$pname=$_GET['pname'];
			
			$conn=mysql_connect("localhost","root","");
			mysql_select_db("millinum",$conn)or die(mysql_error());
			
			mysql_query("insert into product(Productinfo) values('$pname')")or die(mysql_error());
			
			echo "<script> alert('thank you');</script>";
			echo "values are inserted";
			
			
			header('location:product.php');
		?>
	</body>
</html>