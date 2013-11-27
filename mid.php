<?php 
	mysql_connect("localhost","root","") && mysql_select_db("message") or die("error");
	$query = "SELECT * FROM messages";
	$result = mysql_query($query);
?>
<html>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<head>
	<title>GuestBook</title>
</head>

<body>
	<div class = "span11 well" style = "margin-left:75px;margin-top:80px;background-image:url(back.jpg)">
		<div class = "span10 well" style = "background-image:url(log.png)">
			<center><h3><font face = "Adobe Caslon Pro Bold">Message(s)</font></h3></center>
		</div>
		<div class = "span10 well" style = "background-color:transparent">
			<div class = "container-flow">
				<div class = "row-flow">
					<?php
						if(mysql_num_rows($result) > 0){
							while($row = mysql_fetch_assoc($result)){ 
								 if( $row['is_approved']  == ('Y')){
								?>

					<div class = "span1 well" style = "width:700px;height:80px;background-image:url(log.png)">
						<div class = "span2 well">
							<?=$row['name']?><br>
							<?=$row['date_posted']?>
						</div>
						<div class = "span5 well" style ="width:420px;height:40px">
							<?=$row['message']?>
						</div>
					

					</div>
					<?php
					}else{
							
						}
					
					}}else{
						echo "no record";
					}

					?>
					<a href="front.php"><input type = "submit" class = "btn btn-success" value = "Back" style = "width:200px;margin-left:200px;background-color:Orange;"></a>
					<a href="back.php"><input type = "submit" class = "btn btn-success" value = "View Message Data" style = "width:200px;background-color:Red;" ></a>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
