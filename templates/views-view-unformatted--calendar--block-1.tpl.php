<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<?php
/** custom display
 * Generate days structure
 */
/* Creacio de dies */
$days = array();
$today = time();
for ($i = 0 ; $i < 30; $i++) {
  /* creem el array buit per la clau del dia */
  $days[date('Y-m-d', $today)] = array();
  /* incrementem el timestap amb un dia */
  $today = strtotime("+1 day", $today);
}
?>

<?php foreach ($rows as $id => $row): ?>
<?php 
  /* coprovem que el dia de levent esta en els 30seguents */

if (array_key_exists(date('Y-m-d', strtotime($row[0]->calendar_start)), $days)) {
  $days[date('Y-m-d', strtotime($row[0]->calendar_start))] = $row[0]->rendered;
}
?>
<?php endforeach; ?>

<div id="cal-line">
<?php 
/** mostrem el html que volem **/
$j = 0;
foreach ($days as $date => $rendered) {
  /* si es un dels 5 primers dies no mostrem el mes */
  $j++;
  if(date('d', strtotime($date)) == '1' && $j >= 0) {
    print('<div class="month-label">'.t(date('F', strtotime($date))).'</div>');
  }
  if(!empty($rendered)) {
    print('<span class="day event"><span class="num">' . date('d', strtotime($date)) . '</span><div class="events">'.$rendered.'</div></span>');
  } else {
    print('<span class="day"><span class="num">' . date('d', strtotime($date)) . '</span></span>');
  }
}
?>
<?php $options = array('absolute' => TRUE);
      $url = url('calendari'); ?>
  <span class="day cal_link"><a href="<?php print($url);?>">.</a></span>
</div>
