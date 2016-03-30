<?php 
$son = get_one("select * from nav where n_id = {$_GET['id']}");
$father = get_one("select * from nav where n_id = {$son['fid']}");
echo "<a href='{$father['alink']}'>{$father['name']}</a> > <a href='{$son['alink']}?id={$son['n_id']}'>{$son['name']}</a>";
?>