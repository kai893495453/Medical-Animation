<?php 
	require_once "../include/config.php";
	require_once "../include/common.fun.php";
	$option = get_all("select * from news_type");
?>
<form action="upload_do.php" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td>作者</td>
			<td><input type="text" name="username"><input type="hidden" name="publish_date" value="<?php echo time(); ?>"></td>
		</tr>
		<tr>
			<td>标题</td>
			<td><input type="text" name="title"></td>
		</tr>
		<tr>
			<td>内容</td>
			<td><textarea name="content" id="" cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
			<td>选择图片</td>
			<td><input type="file" name="file"></td>
		</tr>
		<tr>
			<td>产品信息</td>
			<td><textarea name="info" id="" cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
			<td>标签</td>
			<td>
				<select name="tag" id="">
					<?php foreach ($option as $key => $value):?>
					<option value="<?php echo $value['ntid']; ?>"><?php echo $value['typename']; ?></option>
					<?php endforeach; ?>
				</select>
			</td>
		</tr>
	</table>
		<input type="submit" value="提交">
</form>