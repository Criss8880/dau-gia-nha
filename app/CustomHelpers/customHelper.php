<?php
use  \Carbon\Carbon;

function Last12Months()
{
  $currentMonth = Carbon::today();// Get the current date
  $months = [];


  for ($i = 0; $i < 13; $i++) {
    $months[] = $currentMonth->copy();
    $currentMonth->subMonth();
  }
  usort($months, function ($a, $b) {
    return $a <=> $b;
  });

  return $months;
}

?>
