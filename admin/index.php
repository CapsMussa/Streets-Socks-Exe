
<form action="/admin/index.php" method="post" enctype="multipart/form-data">
  Название товара:<input type="text" name="nazv"/><br>
  Цена:<input type="text" name="rub"><br>
  Размер:<input type="text" name="size"><br>
  <button type="submit" name="sub">Создать</button><br>
</form>

<?php

$a = $_POST['nazv'];
$b = $_POST['rub'];
$c = $_POST['size'];
$flo = fopen( "bd/".$a.".php", 'w+');
fputs($flo, "<div class=\"block\">
    <div class=\"sub\">
   <div class=\"img\"></div>
        Размер носков $c
        <form action=\"/\">
            <button type=\"submit\" class=\"submit\">В корзину</button>
        </form>
        <h3 style=\"margin-top:5px;\">$b руб</h3>
    </div>
</div>");
fclose($flo);
//////////////////////////////////////////////



?>