<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言</title>
</head>
<body>
	<form action="leave.php" method="post">
		<table border="1" align="center">
			<tr>
				<td><textarea name="content" cols="30" rows="10"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" style="width:100%"></td>
			</tr>
		</table>
	</form>
</body>
</html>