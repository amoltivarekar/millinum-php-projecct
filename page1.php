
<html>
	<body>
		<?php
			$name=$_GET['uid'];
			$lname=$_GET['pwd'];
			$con=mysql_connect("localhost","root","");

			mysql_select_db("millinum",$con);

			$result=mysql_query("select * from admin ");
			$row = mysql_fetch_array($result);
			if($name == $row['uname'] &&  $lname == $row['password'])
			{
				echo "id and password";
				
				header('Location:firstpage.html');
			}
			else
			{
				echo "<script> alert('Enter The valid password And Username');</script>";
			}
		?>
	</body>
</html>
