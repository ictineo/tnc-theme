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

dsm(date('Y-m-d', strtotime($row[0]->calendar_start)));
dsm($days);
if (array_key_exists(date('Y-m-d', strtotime($row[0]->calendar_start)), $days)) {
  dsm($row);
  $days[date('Y-m-d', strtotime($row[0]->calendar_start))] = $row[0]->rendered;
}
?>
<?php endforeach; ?>

<div id="cal-line">
<?php 
dsm($days);
/** mostrem el html que volem **/
$j = 0;
foreach ($days as $date => $rendered) {
  /* si es un dels 5 primers dies no mostrem el mes */
  $j++;
  if(date('d', strtotime($date)) == '1' && $j > 6) {
    print('<div class="month-label">'.t(date('F', strtotime($date))).'</div>');
  }
  if(!empty($rendered)) {
    print('<span class="day event">' . date('d', strtotime($date)) . '<div class="events">'.$rendered.'</div></span>');
  } else {
    print('<span class="day">' . date('d', strtotime($date)) . '</span>');
  }
}
?>
</div>
