<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shirk-to-fit=no">
    <title>Framework Básico: <?php if(isset($this->titulo)) { echo $this->titulo; } ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams["ruta_css"]; ?>materialize.min.css">
    <script src="<?php echo $_layoutParams["ruta_js"]; ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo $_layoutParams["ruta_js"]; ?>materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container" style="margin-top: 70px; margin-bottom: 70px;">
<?php

if ($this->_msg->hasMessages()){
    echo $this->_msg->display();
}

?>
