<?php 
	mysql_connect("localhost","root","") && mysql_select_db("message") or die("error");
	$app = 
	$query = "SELECT * FROM messages";
	$result = mysql_query($query);
?>
<html>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<head>
	<title>GuestBook</title>
</head>
<body>
	<div class = "span12 well" style = "margin-left:3px;margin-top:50px;width:1007px;background-image:url(back.jpg)">
		<div class = "span12 well" style = "width:930;background-image:url(log.png)">
			<center><h3><font face = "Adobe Caslon Pro Bold" >Message Data(s)</font></h3></center>
		</div>
		<div class = "span11 well" style = "width:930">
		<div>
			
			<table>

			<tr><thead><td><div style = "margin-left:35px"><h4>ID</h4>
			</div></td>
			<td><div style = "margin-left:50px"><h4>Name</h4></div></td>
			<td><div style = "margin-left:90px"><h4>Email</h4></div></td>
			<td><div style = "margin-left:140px"><h4>Message</h4></div></td>
			<td><div style = "margin-left:70px"><h4>Date Posted</h4></div></td>
			<td><div style = "margin-left:10px"><h4>Approve</h4></div></td>
			<td><div style = "margin-left:50px"><h4>Action</h4></div></td>
			</thead></tr></table>
			<?php
				if(mysql_num_rows($result) > 0){
					while($row = mysql_fetch_assoc($result)){ ?>
		</div>

		<div>
			<?php if( $row['is_approved']  == ('N')){ 

				?>
			<div class = "span well" style = "height:40px;width:15px"><?=$row['id']?></div>
			<div class = "span1 well" style = "height:40px;width:40px"><?=$row['name']?></div>
			<div class = "span1 well" style = "height:40px;width:120px"><?=$row['email']?></div>
			<div class = "span3 well" style = "height:40px;width:160px"><?=$row['message']?></div>
			<div class = "span1 well" style = "height:40px;"><?=$row['date_posted']?></div>
			<div class = "span well" style = "height:40px;"><?=$row['is_approved']?></div>
			<div class = "span2 well" style = "height:40px;width:100px" >
				<a href="update.php?id=<?=$row['id'];?>"><input type = "button" class = "btn btn-success" value = "Approve" style = "width:50px;background-color:orange;"></a>
				<a href="delete.php?id=<?=$row['id'];?>"><input type = "button" class = "btn btn-success" value = "Delete" style = "width:45px;background-color:Red;"></a>
				<?php
						}else{
							?>

			<div class = "span well" style = "height:40px;width:15px"><?=$row['id']?></div>
			<div class = "span1 well" style = "height:40px;width:40px"><?=$row['name']?></div>
			<div class = "span1 well" style = "height:40px;width:120px"><?=$row['email']?></div>
			<div class = "span3 well" style = "height:40px;width:160px"><?=$row['message']?></div>
			<div class = "span1 well" style = "height:40px;"><?=$row['date_posted']?></div>
			<div class = "span well" style = "height:40px;"><?=$row['is_approved']?></div>
			<div class = "span2 well" style = "height:40px;width:100px" >
				<a href="reject.php?id=<?=$row['id'];?>"><input type = "button" class = "btn btn-success" value = "Reject" style = "width:50px;background-color:orange;"></a>
				<a href="delete.php?id=<?=$row['id'];?>"><input type = "button" class = "btn btn-success" value = "Delete" style = "width:45px;background-color:Red;"></a>
							<?php
						}
					}
					}else{
						echo "no record";
					}
					?>

			</div>
		</div>
		<a href="mid.php"><input type = "button" class = "btn btn-success" value = "Messages" style = "background-color:Blue; height: 30px; width:300px;margin-left:330px"></a><br>
		<a href="front.php"><input type = "button" class = "btn btn-success" value = "Create Message" style = "background-color:Blue; height: 30px; width:300px;margin-left:330px;margin-top:10px"></a>
			
		</div>
	</div>
</body>
</html>
