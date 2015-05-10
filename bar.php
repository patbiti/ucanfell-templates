<div class="floatingLayer">
	<ul>
		<li class="floatingLayer_01"></li>
        <li class="floatingLayer_02"></li>
        <li class="floatingLayer_03"></li>
        <li class="floatingLayer_04"></li>
	</ul>
    <script type="text/javascript">
    	function rightBar() {
        	$(window).scroll(function () {
            	var scroll_top = $(document).scrollTop();
           		if (scroll_top >= 100) {
                	$(".floatingLayer").show();}
                else
                   {$(".floatingLayer").hide();}           
        	});
			 $(".floatingLayer_04").click(function () {
            	location.hash = "top";
           		 $(".floatingLayer").hide();
       		 });	
        	
    	}
        rightBar();
    </script>
</div>