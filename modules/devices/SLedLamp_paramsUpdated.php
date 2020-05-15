<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

if (strpos($params['SOURCE'], "CURR") !== FALSE ) return;
if (strpos($params['SOURCE'], "TMR") !== FALSE ) return;
if (strpos($params['SOURCE'], "ALMS") !== FALSE ) return;

if ( $params['PROPERTY'] == "effect")
    $this->setProperty('cmnd', 'EFF'.$params['NEW_VALUE']);
if ( $params['PROPERTY'] == "brightness")
    $this->setProperty('cmnd', 'BRI'.$params['NEW_VALUE']);
if ( $params['PROPERTY'] == "speed")
    $this->setProperty('cmnd', 'SPD'.$params['NEW_VALUE']);
if ( $params['PROPERTY'] == "scale")
    $this->setProperty('cmnd', 'SCA'.$params['NEW_VALUE']);

$prop = explode("_",$params['PROPERTY']);

if ( $prop[0] == "almset")
{
    $lock = "ON";
    if ($params['NEW_VALUE'] == 0) $lock = "OFF";
    $this->setProperty('cmnd', 'ALM_SET'.$prop[1].' '.$lock);
}

if ( $prop[0] == "almtime")
{
    $tm = explode(":",$params['NEW_VALUE']);
    $min = $tm[0]*60 + $tm[1];
    $this->setProperty('cmnd', 'ALM_SET'.$prop[1].' '.$min);
}


if ( $params['PROPERTY'] == "dawn_state")
    $this->setProperty('cmnd', 'DAWN'.$params['NEW_VALUE']);

if ( $params['PROPERTY'] == "button_lock")
{
    $lock = "ON";
    if ($params['NEW_VALUE'] == 0) $lock = "OFF";
    $this->setProperty('cmnd', 'BTN '.$lock);
}

if ( $params['PROPERTY'] == "timer_state")
{
//1=Off,2=1 min,3=5 min,4=10 min,5=15 min,6=30 min,7=45 min,8=60 min
    $state = "1";
    $sec = 60;
    if ($params['NEW_VALUE'] == 1)
        $state = "0";
    if ($params['NEW_VALUE'] == 3) $sec = 300;
    if ($params['NEW_VALUE'] == 4) $sec = 600;
    if ($params['NEW_VALUE'] == 5) $sec = 900;
    if ($params['NEW_VALUE'] == 6) $sec = 1800;
    if ($params['NEW_VALUE'] == 7) $sec = 2700;
    if ($params['NEW_VALUE'] == 8) $sec = 3600;
    $this->setProperty('cmnd', 'TMR_SET '.$state.' '.$params['NEW_VALUE'].' '.$sec);
}

