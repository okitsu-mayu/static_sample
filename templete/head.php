<?php
if (isset($_COOKIE["lang"])){
    $lang = $_COOKIE["lang"];
}else{
    $lang = "ja";
}
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
