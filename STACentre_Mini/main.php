<?php
require '../../../zb_system/function/c_system_base.php';
require '../../../zb_system/function/c_system_admin.php';
$zbp->Load();
$action = 'root';
if (!$zbp->CheckRights($action)) {
  $zbp->ShowError(6);
  die();
}
if (!$zbp->CheckPlugin('STACentre_Mini')) {
  $zbp->ShowError(48);
  die();
}

$blogtitle = '伪静态设置助手';
$host = $zbp->host;
$staURL = STACentre_Mini_a("{$host}zb_users/plugin/STACentre/main.php", "伪静态管理中心", "", 'target="_blank"');
require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
?>
<div id="divMain">
  <div class="divHeader"><?php echo $blogtitle; ?></div>
  <div class="SubMenu">
    <a href="main.php" title="首页"><span class="m-left m-now">首页</span></a>
    <?php require "about.php"; ?>
  </div>
  <div id="divMain2">
    <h3>步骤（为了让你们会用真是操碎了心）</h3>
    <p>1、点击链接 → <?php echo $staURL; ?>；</p>
    <p>2、点一键设置；</p>
    <p>3、点击提交；</p>
    <p>4.1、Apache、IIS 7 及以上：直接点「<code>创建.htaccess</code>」或「<code>创建 web.config</code>」；</p>
    <p>4.2、Nginx：①宝塔的站点设置内自己找，这点探究能力都没有还想开网站？②不是宝塔话也请自己探究，我觉得很简单就是很简单；</p>
    <p>4.3、为什么你会用到剩下的几个环境？？？？</p>
    <p>5、<b>本插件及「静态管理中心」插件在设置完成后均可以停用；</b></p>
    <p>6、www，https，目录结尾斜线等设置请参考下边的集中贴链接；</p>
    <h3>其他</h3>
    <p>1、建议仅设置文章和用户的别名，用户别名可以用中文，文章别名则可使用自动生成，TAG 和分类不需要别名；</p>
    <p>2、文章没有别名时会使用 ID，本插件已自动开启相应选项（系统内置）；</p>
    <p>3、「教程」301 相关集中贴：
      <a href="https://bbs.zblogcn.com/thread-95517.html" rel="noreferrer" target="_blank" title="[教程]301相关集中贴-Z-BlogPHP-ZBlogger技术交流中心">https://bbs.zblogcn.com/thread-95517.html</a>；
    </p>
    <p>4、「JavaScript」文章自动别名生成函数：
      <a href="https://bbs.zblogcn.com/thread-103247.html" rel="noreferrer" target="_blank" title="【JavaScript】文章自动别名生成函数-博友杂谈-ZBlogger技术交流中心">https://bbs.zblogcn.com/thread-103247.html</a>；
      「也可以直接用这个插件：<a href="https://app.zblogcn.com/?id=29911" rel="noreferrer" target="_blank" title="「水水」自动别名">「水水」自动别名</a>」；
    </p>
    <h3>姑且给张截图，不能再多了</h3>
    <p><img src="doc/001.png" alt="web环境"></p>
  </div>
</div>

<?php
function STACentre_Mini_a($href, $title, $text = "", $o = "")
{
  if (empty($text)) {
    $text = $href;
  }
  return "<a href=\"{$href}\" title=\"{$title}\" {$o}>$text</a>";
}
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>
