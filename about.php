<? include("display.php");?>
<? include("config.php");?>
<?=$top?>
<style>
    h2{font-size:16px;font-weight: bold;}
    ul{padding-left:20px;}
    underline{text-decoration:underline}
    h3{font-size: 14px;}
</style>
<a name="des"></a>
<h2>发布须知</h2>
<ol>
    一、每条树洞字数限制140字，超出将<b>无法</b>发布
    <br/>
	二、每条树洞会间隔3~10分钟，逐一同步到新浪微博。由于接口频率限制，内容较多时可能等待数小时甚至顺延到下一整点或第二天发布
    <br/>
    <span style="">三、由于微博限制，树洞增设分类板块，对于未能发布的<b>兼职、二手交易、失物拾物</b>信息，将会放到各个分类页面中供大家浏览。</span><img src='image/beta.png' style='padding-bottom:3px'>
	<br/>
    四、凌晨时段不会发布，将按队列顺延到早上发布；请勿重复发布相似信息，未发布的内容将会重新排队等待发布
    <br/>
    五、拼车信息可直接发布到页面右侧的拼车日历。
</ol>
<br/><br/>
<h2>关于openSTU</h2>
　　openSTU为汕大非官方平台，为促进信息交流，以汕大树洞为主，以网页端、新浪微博、手机端、微信公众号等多个渠道提供信息交流平台，同时提供基于日历为分类的拼车日历、校内网站导航等功能应用。
    <br>
　　开发团队自2010年上线以来稳定运行至今，欢迎对互联网行业、传媒行业兴趣的师弟师妹联系参与到openSTU平台的开发运维工作中。
<br/><br/>
<h2>联系</h2>
<ol>
    BUG提交、疑问、建议、广告、团队开发、合作等事宜，请联系邮箱admin@openSTU.com或私信@汕大TreeHole
</ol>
<?
if(!$admin)statistic("about.php",2,"统计");
?>
<br/><br/>
<div class="clear"></div>
<?=$end?>