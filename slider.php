<div class="roll_20140624" id="rollimg">
	<div class="roll_nav">
    	<div class="roll_nav1">
        	 <div class="roll_nav_login">
            	<input type="text" value="账号"/>
                <input type="text" value="密码"/>
            	<a href="#">登录</a>
                <a href="#">注册</a>
            </div>
            <a href="#" class="roll_nav_logo"><img src="images/logo.png"/></a>
            <span class="roll_nav_list">
                <a href="#">首页</a>
                <a href="#">频道</a>
                <a href="#">专题</a>
                <a href="#">系列</a>
                <a href="#">幕后</a>
                <a href="#">活动</a>
            </span>
    
        </div>
    </div>
	<div class="top">
		<ul>
			<li>
                <div class="image" style="background:url(images/banner02.jpg) no-repeat 50% 0">
                	<a href="#" target="_blank"></a>
                </div>
            </li>
			<li>
                <div class="image" style="background:url(images/banner01.jpg) no-repeat 50% 0">
                	<a href="#" target="_blank"></a>
                </div>
            </li>
			<li>
                <div class="image" style="background:url(images/banner01.jpg) no-repeat 50% 0">
               		<a href="#" target="_blank"></a>
                </div>
            </li>
		</ul>
	</div>
	<div class="no_list"></div>
    <a href="javascript:;" class="top_btn_prev"></a>
    <a href="javascript:;" class="top_btn_next"></a>  
</div>
<script type="text/javascript">
function funRoll(div){
	var obj=$("#"+div),
		top=obj.find(".top"),
		lis=top.find("li"),
		len=lis.length-1,
		list=obj.find(".no_list"),
		btnPrev=obj.find(".top_btn_prev"),
		btnNext=obj.find(".top_btn_next");
	var str="",curr=0;
	for(var i=0;i<=len;i++){
		str+='<a href="javascript:void(0);"></a>';
	}
	list.html(str);
	var as=list.find("a");
	var timer=null;
	function funPlay(){
		timer=setInterval(funGo,3000);
	}
	function funPause(){
		clearInterval(timer);
	}
	function funGo(){
		curr=funNext(curr);
		funShow(curr);
	}
	function funPrev(curr_){
		var index=curr_;
		index-=1;
		if(index<0) index=len;
		return index;
	}
	function funNext(curr_){
		var index=curr_;
		index+=1;
		if(index>len) index=0;
		return index;
	}
	function funShow(curr_){
		//top.animate({"scrollLeft":curr_*960},{"duration":200});
		for(var i=0;i<=len;i++){
			if(i==curr_) continue;
			//$(lis[i]).fadeOut("slow");
			$(lis[i]).find(".image").fadeOut("slow");
			//$(lis[i]).find(".text_bg").css("display","none");
			//$(lis[i]).find(".text").fadeOut("slow");
			$(lis[i]).css("display","none");
		}
		$(lis[curr_]).fadeIn("fast");
		
		$(lis[curr_]).css("display","block");
		$(lis[curr_]).find(".image").fadeIn("slow");
		//$(lis[curr_]).find(".text_bg").css("display","block").css("zoom","1");
		//$(lis[curr_]).find(".text").fadeIn(100);
		as.removeClass("active");
		$(as[curr_]).addClass("active");
		//curr=curr_;
	}
	btnNext.click(function(){
		curr=funNext(curr);
		funShow(curr);
		$(this).blur();
	});
	btnPrev.click(function(){
		curr=funPrev(curr);
		funShow(curr);
		$(this).blur();
	});
	obj.hover(function(){funPause()},function(){funPlay()})
	this.inits=function(){
		funShow(curr);
		//curr=funNext(curr);
		funPlay();
		as.each(function(s,a){
			a=$(a);
			a.click(function(){
				funShow(s);
				curr=s;
				$(this).blur();
			});
		});
	}
}
(new funRoll("rollimg")).inits();
</script>