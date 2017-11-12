<?php
/*
Template Name: ajax
 */
?>
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<title>接收其它网站的数据</title> 
<?php 
if (! (is_user_logged_in() and current_user_can('manage_options'))) {
    die("未登录，或不是管理员");
}
?>
<script src="//cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
<style>
    body{
        background-color: gray;
        padding: 5px;
    }
    input[type=text]{
        display: block;
        width:380px;
        margin-bottom: 10px;
    }
    label{
        color:white;
        display: block;
        margin-bottom: 3px;
    }
    textarea{
        display: block;
        width:380px;
        height:70px;
        margin-bottom: 15px;
    }
    ul li{
        display: inline-block;
        margin-right: 5px;
        border:1px solid green;
        padding: 3px;
        list-style-position: outside;
        cursor: pointer;
    }

    ul li.checked{
        border:1px solid red;
        color:white;
    }

    ul{
        padding: 0;
        margin:0;
        display: block;
        margin-bottom: 10px;
    }
</style>
<script>
    function receiveInfoFromAnotherDomain(){ 
        window.addEventListener("message",function(ev){ 
                console.log("the receiver callback func has been invoked"); 
                $('#send').val('发送');
                var data = JSON.parse(ev.data); 
                var title = data.title; 
                var content = data.content; 
                var tags = data.tags;
                var thumbnail = data.thumbnail;

                if(title){
                    $('#title').val(title);
                }

                if(content){
                    $('#content').val(content);
                }
                if(tags){
                    $('#tags').val(tags);
                }
               
                if(thumbnail){
                    $('#thumbnail').val(thumbnail);
                }
            } 
             
        ); 
    } 

    $(function () {
        $('#send').on('click',function() {
            var tms = Number(new Date());
            $.ajax({
                url: '<?php echo home_url('ajaxreciever.php') ?>',
                type: 'POST',
                dataType: 'default',
                data: {
                    'title':$('#title').val(),
                    'content':$('#content').val(),
                    'img':$('#thumbnail').val(),
                    'tags':$('#tags').val(),
                    'postname':$('#postname').val(),
                    'categories': $('#cates').val()
                },
            })
            .done(function(data) {
            })
            .fail(function(data) {
            })
            .always(function(data) {
                console.log("complete");
                if(data.statusText == 'OK'){
                    $('#send').val('发送成功！')
                }
            });
            
        });
        
        $('#tag-list').on('click', 'li', function() {
            $(this).toggleClass('checked');
            var tags = [];
            $('#tag-list li.checked').each(function(index,item) {
                tags.push($(item).text());
            });
            var tag_string = tags.join(',');
            $('#tags').val(tag_string);
        });

        $('#imgs').on('click', 'li', function() {
            $(this).toggleClass('checked');
            $('#thumbnail').val($(this).attr('data-url'));
        });

        $('#cates-list').on('click', 'li', function() {
            $(this).toggleClass('checked');
            var cates = [];
            $('#cates-list li.checked').each(function(index,item) {
                cates.push($(item).attr('data-id'));
            });
            var cates_string = cates.join(',');
            $('#cates').val(cates_string);
        });

        


    });
</script>
</head> 
<body onload="receiveInfoFromAnotherDomain();"> 
 
 <form action="">
     <input type="text" id="title" placeholder="标题">
     <textarea id="content">内容...</textarea>
     <input type="text" id="thumbnail" placeholder="缩略图">
     <ul id="imgs">
         <li data-url="aa">缩略图1</li>
         <li data-url="bb">缩略图2</li>
         <li data-url="cc">缩略图3</li>
         <li data-url="dd">缩略图4</li>
         <li data-url="ee">缩略图5</li>
         <li data-url="">清除</li>
     </ul>
     <input type="text" id="postname" placeholder="slug">
     <input type="text" id="cates" placeholder="目录">
     <ul id="cates-list">
         <li data-id="7">资讯</li>
         <li data-id="6">训练</li>
     </ul>
     <input type="text" id="tags" placeholder="标签">
     <ul id="tag-list">
        <li>kobe</li>
        <li>下载 </li>
        <li>传球 </li>
        <li>假动作 </li>
        <li>励志 </li>
        <li>周最佳 </li>
        <li>周琦 </li>
        <li>奇才 </li><li>库里 </li>
        <li>急停跳投 </li>
        <li>日报 </li>
        <li>明星教学 </li>
        <li>湖人 </li>
        <li>球哥 </li>
        <li>球评 </li>
        <li>科比 </li>
        <li>纪录片 </li>
        <li>绝杀 </li>
        <li>视频 </li>
        <li>试探步</li> 
    </ul>
<hr>
    <input type="button" id="send" value="发送">
 </form>
 
 
</body> 
</html> 
