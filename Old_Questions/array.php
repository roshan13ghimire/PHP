<?php
$a = ['mango','banana','apple','grapes'];
?>
<html>
    <head>
        <title>
            List of fruits
        </title>
    </head>
    <body>
<?php
for ($i = 0;$i<4;$i++){
    ?>
    <ul>
        <li><?php echo $a[$i];?></li>
    </ul>
    <?php
}
?>
<body>
</html>