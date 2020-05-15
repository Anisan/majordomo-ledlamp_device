<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

if (strpos($params['SOURCE'], "CURR") !== FALSE ) return;
if (strpos($params['SOURCE'], "TMR") !== FALSE ) return;
if (strpos($params['SOURCE'], "ALMS") !== FALSE ) return;


$hsv = hexToHsv($params['NEW_VALUE']);
$this->setProperty('effect', 16); // set effect Color 
$this->setProperty('brightness', intval($hsv[2]*255)); 
$this->setProperty('scale', intval($hsv[0]/360*255));

