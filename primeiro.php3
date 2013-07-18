<html>
<head><title>Aprender PHP</title></head>
<body>

<?php
echo "Primeiro Script";
?>

</body>
</html>

<?php
if ($texto != "") 
echo "Você digitou \"$texto\"<br><br>";
?>

<form method=post action="<? echo $PATH_INFO; ?>">
<input type="text" name="texto" value="" size=10>
<br>
<input type="submit" name="sub" value="Enviar!">
</form>

</body>
</html>