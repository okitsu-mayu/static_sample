<?php
require_once('templete/head.php');
?>
<title>
<?php 
if($lang == "en"){
	print "raibowreeltokyo";
}else{
	print "レインボー・リール東京";
}
?>
</title>
</head>
<?php
require_once('templete/header.php');
?>
<div id='content'>
<?php if($lang == "en"){ ?>
	English(ここに英語版のHTMLを書く)
<?php }else{ ?>
	ここに日本語版のHTMLを書く
<?php }?>
</div>
<?php
require_once('templete/footer.php');
?>
