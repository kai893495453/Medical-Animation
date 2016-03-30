<form action="addNav_do.php" method="post">
	<table>
		<tr><td>名称</td><td><input type="text" name="data[name]"></td></tr>
		<tr><td>路径</td><td><input type="text" name="data[alink]"><input type="hidden" name="data[fid]" value="<?php echo $_GET['id']; ?>"></td></tr>
		<tr><td><input type="submit" value="提交"></td></tr>
	</table>
</form>