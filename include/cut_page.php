<?php 
	/**
	 * [分页描述]
	 * @param  [int] $pagesize  [一页多少条]
	 * @param  [int] $page      [第几页]
	 * @param  [int] $totalpage [数组总长度]
	 * @return [string]         [返回一个字符串拼接的html内容]
	 */
	function cut_page($pagesize,$page,$totalpage){
		$html = "";
		$all_total = ceil($totalpage/$pagesize);
		$start_pos = max($page-1,1);
		$end_pos = min($page+1,$all_total);
		//如果当前页面不在第一页，就显示上一页
		if($page>1){
			$prev = $page-1;
			$html .="<a href=?id={$_GET['id']}&page={$prev} class=\"prevPage fl\">&laquo; 上一页</a>";
		}
		//向左偏移1个
		for($i=$start_pos;$i<$page;$i++){
			$html .= "<a href=\"?id={$_GET['id']}&page={$i}\" class=\"nextNumber fl\">{$i}</a>";
		}
		//当前位置
		$html .= "<a href=\"#\" class=\"numberCurrent fl\">{$page}</a>";
		for($i=$end_pos;$i>$page;$i--){
			$html .= "<a href=\"?id={$_GET['id']}&page={$i}\" class=\"nextNumber fl\">{$i}</a>";
		}
		//拿当前的page与页面数量总和判断
		if($page<$all_total){
			$next = $page+1;
			$html .= "<a href=?id={$_GET['id']}&page={$next} class=\"fl lastItem\">下一页 &raquo;</a>";
		}
		$html .= "<span class=\"fl\">共{$all_total}页，到第</span> <input class=\"fl\" name=\"page\" type=\"text\" /><input type=\"hidden\" name=\"id\" value={$_GET['id']}>
          <span class=\"fl\">页</span> <input class=\"fl\" name=\"confirmSkip\" type=\"submit\" value=\"确定\" />";
		return $html;
	}
?>