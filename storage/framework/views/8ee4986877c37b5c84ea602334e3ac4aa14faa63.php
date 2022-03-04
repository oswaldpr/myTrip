<?php
/** @var  string $label */
/** @var  mixed $value */

$label = $label ?? null;
?>

<div class="result-field row">
    <?php if($label): ?>
        <span class="col-2 col-form-label label labelWrapper">
        <label><b><?php echo $label; ?></b>:</label>
    </span>
    <?php endif; ?>
    <span class="col-10 resultWrap controls">
        <?php echo $value; ?>
    </span>
</div>

<?php /**PATH /home/oswald/devlocal/tripBuilder/src/resources/views/templates/elements/displayElement.blade.php ENDPATH**/ ?>