<?php

$val_x = $_GET['val_x'] ?? null;
$val_y = $_GET['val_y'] ?? null;
$val_r = $_GET['val_r'] ?? null;

if ((0<=$val_x && $val_x<=$val_r && 0<=$val_y && $val_y<=$val_r/2 && $val_y<=-($val_x/2)+2) ||
    ($val_x*$val_x+$val_y*$val_y<=$val_r*$val_r/4 && $val_x<=0 && $val_y>=0) ||
    (-$val_r<=$val_x && $val_x<=0 && -$val_r<=$val_y && $val_y<=0)) {
    header('Content-Type: text/plain');
    echo 'true';
} else {
    header('Content-Type: text/plain');
    echo 'false';
}
