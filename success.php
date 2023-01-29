<?php
if(count($success) > 0): ?>
<div class="error">
	<?php foreach($success as $msg): ?>
		<h3> <?php echo $msg; ?></h3>
	<?php endforeach ?>
</div>
<?php endif ?>