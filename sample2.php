<?php
require_once('templete/head.php');
?>
<title>
<?php 
if($lang == "en"){
	print "sample2";
}else{
	print "サンプル2";
}
?>
</title>
</head>
<?php
require_once('templete/header.php');
?>
<div id='content'>
<?php if($lang == "en"){ ?>
	The page is only available in Japanese.
<?php }else{ ?>
	サンプル2 日本語しかないページのイメージ
<?php } ?>
</div>
<?php
require_once('templete/footer.php');
?>
