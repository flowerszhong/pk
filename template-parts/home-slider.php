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


		<li><a href="https://s.click.taobao.com/BGDORYw"><img src="http://nba17pk.com/wp-content/uploads/2017/11/nbastore3.jpg"><span>NBA官方旗舰店 双11 特惠，先领券 再下单</span></a></li>

		<li><a href="http://nba17pk.com/sikana-how-to-play-basketball.html"><img src="http://nba17pk.com/wp-content/uploads/2017/10/sikana-bb.jpg"><span>系列视频教程：Sikana 篮球入门及提高</span></a></li>



		<li><a href="http://nba17pk.com/kobesmuse.html"><img src="http://nba17pk.com/wp-content/uploads/2017/11/kobe-muse.jpg"><span>科比纪录大片《MUSE》中文字幕完整版</span></a></li>






		<li><a href="http://nbachina.qq.com/a/20170823/007891.htm"><img src="http://img1.gtimg.com/chinanba/pics/hv1/145/63/2234/145282060.jpg"><span>勇士队赛程公布：14组背靠背 最长6连客场</span></a></li>



	</ul>



	<div class="custom-navigation">



	  <a href="#" class="flex-prev"></a> 



	  <a href="#" class="flex-next"></a>



	</div>



</div>