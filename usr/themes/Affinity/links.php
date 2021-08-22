<?php
require_once 'init.php';
define('TEMPLATE_PATH', TPLS_PATH.Option::get('nonce_templet').'/');
$CACHE = Cache::getInstance();
$options_cache = $CACHE->readCache('options');
extract($options_cache);
$navibar = unserialize($navibar);
$curpage = CURPAGE_HOME;
$site_title = '友情链接 - '.Option::get('blogname');
$site_key = '张凯个人博客友情链接,张凯个人博客链接,张凯个人博客友情链接索引';
$site_description = '张凯个人博客所有标签列表页面';
include View::getView('header');
?>
<style type="text/css">
.main{width: 95%;
margin: 0 auto;}
/*bav*/
.ltitle a:visited{
text-decoration: none;
color: #5f5e5e;
}
.article{margin-top: -15px;}
.logtitle{color:#FFF;text-shadow:0 -1px 1px #333;font-size:20px;border-left: 5px solid #D3D3D3;margin-left: -30px;}
.ltitle{padding-left: 15px;font-size: 1.5em;}
.loglist{padding: 15px;margin-top: 40px;}
.logneirong{float: left;
width: 65%;
line-height: 25px;
margin-top: 20px;}
.logimg{float: right;
width: 35%;margin-top: 20px;}
.logimg img{width: 255px;
height: 165px;}
</style>

<div padding:10px;display: table;height:100%">
<div style="font-size:16px;padding-bottom:5px;margin-bottom:10px;border-bottom:1px solid #00aff0">现在位置：<a title="返回首页" href="<?php echo BLOG_URL; ?>">首页</a> ? 友情链接列表</div>
<div class="main">
<div class="article">
		<?php {
			global $CACHE; 
			$link_cache = $CACHE->readCache('link');
		?>
      	<?php foreach($link_cache as $value): ?>
			<div class="loglist">
				<div class="logtitle">
					<div class="">&nbsp&nbsp<a href="<?php echo $value['url']; ?>" class="tag-item" title="<?php echo $value['des']; ?>" target="_black"><?php echo $value['link']; ?></a></div>
				</div>
                
				<div class="logneirong">
					<?php echo $value['des']; ?>
    			</div>
</div>        
<?php endforeach; ?>
<?php }?>
</div>
</div>
</div>
</div>
<div style="clear:both"></div>
<?php include View::getView('footer');?>