<style>
    .slider-container{
    	position: relative;
    	background: #000;
    	margin-top: 20px;
    }
	.slides{
	}
	.slides li img{
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

		<li><a href="http://nbachina.qq.com/a/20170823/011126.htm"><img src="http://img1.gtimg.com/chinanba/pics/hv1/237/63/2234/145282152.jpg"><span>凯尔特人官宣签下欧文 安吉：他还未到巅峰</span></a></li>

		<li><a href="http://nbachina.qq.com/a/20170823/007891.htm"><img src="http://img1.gtimg.com/chinanba/pics/hv1/8/39/2232/145145753.jpg"><span>威少十大不可思议进球 极限三分绝杀勇士</span></a></li>

		<li><a href="http://nbachina.qq.com/a/20170823/007891.htm"><img src="http://img1.gtimg.com/chinanba/pics/hv1/20/250/2233/145264595.jpg"><span>视频-上赛季火箭25佳球 哈登奔袭上篮演绝杀</span></a></li>

		<li><a href="http://nbachina.qq.com/a/20170823/007891.htm"><img src="http://img1.gtimg.com/chinanba/pics/hv1/145/63/2234/145282060.jpg"><span>勇士队赛程公布：14组背靠背 最长6连客场</span></a></li>

	</ul>

	<div class="custom-navigation">

	  <a href="#" class="flex-prev"></a> 

	  <a href="#" class="flex-next"></a>

	</div>

</div>