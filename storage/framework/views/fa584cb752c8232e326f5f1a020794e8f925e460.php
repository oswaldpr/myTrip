<?php
/** @var  string $name */
/** @var  string $label */
/** @var  string $selected */
/** @var  array $options */

$selected = $selected ?? '';
?>
<div class="form-group row element-wrapper element-wrapper-<?php echo $name; ?>">
    <div class="col-6 col-form-label label label-wrapper label-wrapper-<?php echo $name; ?>">
        <label for=<?php echo $name; ?>><?php echo $label; ?> </label>
    </div>
    <div class="col-6 select-wrapper controls controls-<?php echo $name; ?>">
        <select class="form-control" id="address_unitType" name="<?php echo $name; ?>" tabindex="-1">
            <?php
            foreach ($options as $optionKey => $optionValue) {
                $selectedStr = $selected ? 'selected' : '';
                echo '<option value="' . $optionKey . '" ' . $selectedStr . '>' . $optionValue . '</option>';
            }
            ?>
        </select>
    </div>
</div>
<?php /**PATH /home/oswald/devlocal/tripBuilder/src/resources/views/templates/selectElement.blade.php ENDPATH**/ ?>