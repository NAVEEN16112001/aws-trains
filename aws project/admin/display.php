<?php
	session_start();
	
$con= mysqli_connect('localhost','root','');
$tbl_name="datastore";

mysqli_select_db($con,"userregister") or die("cannot select db");

$sql="SELECT * FROM $tbl_name";
$result=$con->query($sql);
if($result -> num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        $row["name"];
        $row["age"];
        $row["sex"];
        $row["facility"];
        $row["quota"];
        $row["from"];
        $row["to"];
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title> Reservation </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link href="css/Default.css" rel="stylesheet">
	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});

	</script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
</head>
<body>

		
			
			<div >
				<table  class="table">
				<col width="90">
					<col width="90">
				<col width="90">
				<col width="110">
				<col width="90">
				<col width="90">
				<col width="90">
				<col width="90">
				<tr>
					<th style="width:10px;border-top:0px;">NAME</th>
					<th style="width:100px;border-top:0px;">Age</th>
					<th style="width:100px;border-top:0px;">SEX</th>
					<th style="width:100px;border-top:0px;">FAC</th>
					<th style="width:100px;border-top:0px;">QUOTA</th>
					<th style="width:100px;border-top:0px;">FROM</th>
					<th style="width:100px;border-top:0px;">TO</th>
				</tr>	
				<?php
				
				$n=1;
				while($row=mysqli_fetch_array($result)){
					if($n%2!=0)
					{
				?>
				<tr class="text-error">
					<th style="width:100px;"> <?php echo $row['name']; ?> </th>
					<th style="width:100px;"> <?php echo $row['age']; ?> </th>
					<th style="width:100px;"> <?php echo $row['sex']; ?> </th>
					<th style="width:100px;"> <?php echo $row['facility']; ?> </th>
					<th style="width:100px;"> <?php echo $row['quota']; ?> </th>
					<th style="width:100px;"> <?php echo $row['from']; ?> </th>
                    <th style="width:100px;"> <?php echo $row['to']; ?> </th>
				</tr>
			
				<?php
					}
					$n++;
				}
				?>
				
				
				</table>

			</div>
		</div>
			
	
</body>
</html>	












