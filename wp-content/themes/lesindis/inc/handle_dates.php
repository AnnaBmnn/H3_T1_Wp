<?php

function convert_date_to_day_and_number_day($date){
    $dateformatstring = "l d";
    $unixtimestamp = strtotime($date);
    return date_i18n($dateformatstring, $unixtimestamp);
}

function convert_date_to_month($date){
    $dateformatstring = "M";
    $unixtimestamp = strtotime($date);
    return date_i18n($dateformatstring, $unixtimestamp);
}
