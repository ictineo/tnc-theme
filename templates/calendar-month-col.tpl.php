<?php
/**
 * @file
 * Template to display a column
 * 
 * - $item: The item to render within a td element.
 */
$id = (isset($item['id'])) ? 'id="' . $item['id'] . '" ' : '';
$date = (isset($item['date'])) ? ' data-date="' . $item['date'] . '" ' : '';
$day = (isset($item['day_of_month'])) ? ' data-day-of-month="' . $item['day_of_month'] . '" ' : '';
$headers = (isset($item['header_id'])) ? ' headers="'. $item['header_id'] .'" ' : '';

/** canviem la caixa de dia pels item que son de dia i no d'events **/
if(is_numeric(strpos($item['class'], 'date-box'))) {
  $item['entry'] = "<div class='num-day'>". date('d', strtotime($item['date'])) . "</div><div class='month'>" . t(date('F', strtotime($item['date']))) . "</div><div class='txt-day'>". t(date('l', strtotime($item['date']))) . "</div>";
}
?>
<td <?php print $id?>class="<?php print $item['class'] ?>" colspan="<?php print $item['colspan'] ?>" rowspan="<?php print $item['rowspan'] ?>"<?php print $date . $headers . $day; ?>>
  <div class="inner">
    <?php print $item['entry'] ?>
  </div>
</td>
