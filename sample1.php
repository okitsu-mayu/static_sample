<?php
require_once('templete/head.php');
?>
<title>
<?php 
if($lang == "en"){
	print "sample1";
}else{
	print "サンプル1";
}
?>
</title>
</head>
<?php
require_once('templete/header.php');
?>
<div id='content'>
<?php if($lang == "en"){ ?>
	Sample1 English
<?php }else{ ?>
	サンプル1 日本語版
<?php } ?>
</div>
<?php
require_once('templete/footer.php');
?>
