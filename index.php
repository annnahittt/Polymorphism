<?php
global $publications;
require_once './data.php';


foreach ($publications as $item){
    echo get_class($item);
    echo '<pre>';
    print_r($item->printItem());
    echo '</pre>';
    echo '<hr/>';
}
