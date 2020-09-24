<?php
if (count($error) > 0) : ?>
<div>
    <?php foreach ($error as $e) : ?>
    <p><?php echo $e ?></p>
    <?php endforeach;?>
</div>
<?php endif; ?>