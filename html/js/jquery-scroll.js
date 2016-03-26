/**
 * [scroll 传入对象就能滚动]
 * @param  {[jQDom]} obj		[传入jquery选择对象]
 * @param  {[String]} direction [移动的方向]
 * @param  {[number]} mar 		[每次移动的距离]
 * @param  {[number]} current 	[循环次数]
 * @param  {[number]} stayTime 	[静止等待时间]
 */
jQuery.fn.scroll = function(direction,mar,current,stayTime,prev,next){
	var _t = this;
	var count = 0;
	var interval = "";
	setListener(prev,next,current)
	init();
	console.log()
	function init(){
		_t.css({position:"absolute"})
		interval = setInterval(function(){
			count++;
			if (count>=current){count=0;}
			anim(_t,direction,count*mar);
		},stayTime)
	}
	/**
	 * [setListener 监听事件]
	 */
	function setListener(p,n,c){
		//鼠标经过对象时
		_t.hover(function(){
			clearInterval(interval);
		},function(){
			interval = setInterval(function(){
				count++;
				if (count>=current){count=0;}
				anim(_t,direction,count*mar);
			},stayTime)
		})
		//鼠标按上一个的时候
		if(p!=null&&p!=undefined){
			p.click(function(){
				if(count>0){
					count--;
					anim(_t,direction,count*mar);
				}
			})
		}
		//鼠标按下一个的时候
		if(n!=null&&n!=undefined){
			n.click(function(){
				if (count<c-1){
					count++;
					anim(_t,direction,count*mar);
				}
			})
		}
	}
	/**
	 * [anim 动画函数]
	 */
	function anim(obj,direction,mar){
		var o={}
		o[direction]=mar+"px";
		obj.animate(o);
	}
}