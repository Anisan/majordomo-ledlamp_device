<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

if ( $params['PROPERTY'] == "effect")
    $this->setProperty('cmnd', 'EFF'.$params['NEW_VALUE']);
if ( $params['PROPERTY'] == "brightness")
    $this->setProperty('cmnd', 'BRI'.$params['NEW_VALUE']);
if ( $params['PROPERTY'] == "speed")
    $this->setProperty('cmnd', 'SPD'.$params['NEW_VALUE']);
if ( $params['PROPERTY'] == "scale")
    $this->setProperty('cmnd', 'SCA'.$params['NEW_VALUE']);

