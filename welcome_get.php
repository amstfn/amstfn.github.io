<html>
    <body><head><title>calculator</title></head>
<?php
if(isset($_GET['num1'])||isset($_GET['num2'])){
    $z=$_GET['num1']*$_GET['num2'];
    echo $z;
    exit();
}
?>
</body>
</html>