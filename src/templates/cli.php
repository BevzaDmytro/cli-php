<!DOCTYPE HTML>
<html>
<head>

</head>

<body>
<?php if(!empty($commandsData)) {?>
    <p> > <?=  $command ?> </p>
    <p><?= $commandResult ?> </p>
<?php } ?>
<form action="index.php" method="post">
    <input type="text" name="command">
    <button style="display: none" type="submit"></button>
</form>
</body>
</html>