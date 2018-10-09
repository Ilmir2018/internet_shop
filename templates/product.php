<div class="second">
<div class="one">
<h1><?=$product['name']?></h1>
<p><?=$product['description']?></p>
<?php foreach ($images as $image):?>
<img width="300" src="images/<?=$image['path']?>" alt="">
<?php endforeach; ?>
</div>
<div class="two">
<p><?=$product['contents']?></p>
</div>
</div>
