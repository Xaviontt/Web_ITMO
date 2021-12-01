<?php
session_start();

if (!isset($_SESSION['data'])) $_SESSION['data'] = array();

date_default_timezone_set('Europe/Moscow');
$data = $_SESSION['data'];

if (!$_POST['x'] || !$_POST['y'] || !$_POST['r']) {
    echo "Ухади";
    return false;
}

$x = (float) $_POST['x'];
$y = (float) $_POST['y'];
$r = (float) $_POST['r'];

if (
    !is_numeric($x) &
    ($x < -3 & $x > 3)
    ) return false;


if (
    is_numeric($y) &
    ($y < -4 & $y > 4)
) return false;


if (
    is_numeric($r) &
    ($r < 1 & $r > 5)
) return false;


$time_now = date('H:i:s');

$start_script_time = microtime(true);

$hit = checkHit($x, $y, $r);


$script_time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];
$script_time = substr($script_time, 0, 7);

$data[] = ['x' => $x, 'y' => $y, 'r' => $r, 'hit' => $hit, 'query_time' => $time_now, 'script_time' => $script_time];

$_SESSION['data'] = $data;



function checkHit($x, $y, $r) {
    if ((($x <= $r/2) && ($x >= 0) && ($y >= 0) && ($y <= $r)) ||
        (($x >= 0) && ($x <= $r/2) && ($y <= 0) && ($y >= -$r)) ||
        (($x**2 + $y**2) <= (($r**2)/2) && ($x <= 0) && ($y <= 0))) return "да";
    else return "нет";
}

require 'table.php';