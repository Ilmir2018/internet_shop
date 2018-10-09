<form action="" enctype="multipart/form-data" method="post">
    <p>Ваше имя</p>
    <input type="text" name="name">
    <p>Введите свой отзыв пожалуйста:</p>
    <textarea name="content" id="" cols="30" rows="10"></textarea>
    <input type="submit">
</form>

<?php
foreach ($row as $rows){
?>
<p>Имя: <?=$rows['name']?></p>
    <p>Коментарий: <?=$rows['content']?></p>
<?php }?>