<?php
/**
 * @file
 * Template to display a row
 * 
 * - $inner: The rendered string of the row's contents.
 */
$attrs = ($class) ? 'class="' . $class . '"': '';
$attrs .= ($iehint > 0) ? ' iehint="' . $iehint . '"' : '';
?>
<?php if ($attrs != ''):?>
<tr <?php print $attrs?>>
<?php else:?>
<tr>
<?php endif;?>
  <?php print $inner ?>
</tr>
<?php if(is_numeric(strpos($class, 'single'))): ?>
<tr class="arrow">
  <td colspan='7'>
    <div class="cal-arrow-wrapper"></div>
  </td>
</tr>
<?php endif; ?>
