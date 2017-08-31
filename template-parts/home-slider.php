<style>
    .slider-container{
    	position: relative;
    	background: #000;
    	margin-top: 20px;
    }
	.slides{
		max-height: 420px;
	}
	.slides li img{
		max-height: 400px;
		width:100%;
	}
	.slides li span{
		color:#fff;
		font-size: 20px;
		display: block;
		height: 50px;
		line-height: 50px;
		padding-left: 20px;
		overflow: hidden;
	}

	.flex-control-nav{
		right: 20px;
		bottom: 10px;
		width:100px;
	}

	

	.custom-navigation a{
		position: absolute;
		top:40%;
		height: 50px;
		width:33px;
		z-index: 999;
		display: none;
	}

	.slider-container:hover .custom-navigation a{
		display: block;
	}

	.custom-navigation a.flex-prev{
		left:0;
		background:url('<?php echo get_template_directory_uri() .'/img/icon-prev.png'; ?>');
	}

	.custom-navigation a.flex-next{
		right:0;
		background:url('<?php echo get_template_directory_uri() .'/img/icon-next.png'; ?>');
	}


	
</style>
<div class="slider-container" id="slider-container">
	<ul class="slides">

		<li><a href="http://www.3pang.org/tag/fresh"><img src="http://www.3pang.org/wp-content/uploads/2017/05/slider1.jpg"><span>专题 清新妹子</span></a></li>

		<li><a href="http://www.3pang.org/tag/riho-yoshioka"><img src="http://www.3pang.org/wp-content/uploads/2017/05/slide2.jpg"><span>清新妹子 吉冈里帆</span></a></li>

		<li><a href="http://www.3pang.org/tag/elder"><img src="http://www.3pang.org/wp-content/uploads/2017/05/1510271608a92865f54e459465_2.jpg"><span>长者专辑</span></a></li>

		<li><a href="http://www.3pang.org/tag/pvp"><img src="http://www.3pang.org/wp-content/uploads/2017/06/CilEmlcsXy2AEtLXAABxdPP1R0k325.jpg"><span>王者荣耀 搞笑合集</span></a></li>

	</ul>

	<div class="custom-navigation">

	  <a href="#" class="flex-prev"></a> 

	  <a href="#" class="flex-next"></a>

	</div>

</div>