<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;
$state = explode(" ",$params['NEW_VALUE']);
if ($state[0]=="CURR")
{
$this->setProperty('effect', $state[1]);
$this->setProperty('brightness', $state[2]); 
$this->setProperty('speed', $state[3]); 
$this->setProperty('scale', $state[4]);
$this->setProperty('status', $state[5]); 
}
