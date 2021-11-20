<?php  
session_start();

?>


<html>
    <headd>
        <title> search trains </title>
        <link href="../css/search.css" rel="stylesheet"></link>
        <link rel="shortcut icon" href="images/favicon.png"></link>
        <link href="../css/bootstrap.min.css" rel="stylesheet"></link>
	<link href="../css/Default1.css" rel="stylesheet"></link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
    <style>
        body{
            background-image: url("../images/train.jfif");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-blend-mode:darken;
        }
        .table{
border: 10px solid black;
padding: 15px;
line-height: 5px;
        }
        .span4{
            background-color:goldenrod;
            padding: 20px;
margin-left: 30%;
margin-top: 5%;
height: 150px;
width: 500px;
        }
        .text{
            color: white;
            background-color: black;
            border: 5px solid  black;
            text-align: center;
            margin-left: 30%;
            margin-right: 40%;
            margin-top: 10%;
        }
        </style>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
    </head>
    <body bgcolor="darkkhaki">
<div class="text">
    <H1> SEARCH PNR NUMBER </H1>
</div>
    <div class="span4">
			<form method="post" action="display.php">
			<table class="table">
				<tr>
					<th style="border-top:0px;"><label> ENTER PNR NUMBER <label></th>
					<td style="border-top:0px;"><input type="text" class="input-block-level" name="from" id="fr" ></td>
				</tr>
				<tr>
					<td style="border-top:0px;"><input class="btn btn-info" type="submit" href="display.php" value="OK"></td>
					<td style="border-top:0px;"><a href="reservation.php" class="btn btn-info" type="reset" value="Reset">Reset</a></td>
				</tr>
			</table>
			</form>
			</div>
    </body>
</html>

