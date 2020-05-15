<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;
$state = explode(" ",$params['NEW_VALUE']);
if ($state[0]=="CURR")
{
if ($this->getProperty('effect') != $state[1])
  $this->setProperty('effect', $state[1]);
if ($this->getProperty('brightness') != $state[2])
  $this->setProperty('brightness', $state[2]); 
if ($this->getProperty('speed') != $state[3])
  $this->setProperty('speed', $state[3]); 
if ($this->getProperty('scale') != $state[4])
  $this->setProperty('scale', $state[4]);
if ($this->getProperty('status') != $state[5])
  $this->setProperty('status', $state[5]); 
if ($this->getProperty('timer_work') != $state[8])
{
  $this->setProperty('timer_work', $state[8]); 
  if ($state[8] == 0)
      $this->setProperty('timer_state', 1); 
}
if ($this->getProperty('button_lock') != $state[9])
  $this->setProperty('button_lock', $state[9]); 

if ($state[1] == 16)
{
    // effect Color
    $rgbHex = hsvToHex(intval($state[4]/255*360),100,intval($state[2]/255*100));
    $this->setProperty('color', $rgbHex); 
}
else
    $this->setProperty('color', "000000"); 
}

if ($state[0]=="TMR")
{
if ($this->getProperty('timer_work') != $state[1])
  $this->setProperty('timer_work', $state[1]); 
if ($this->getProperty('timer_state') != $state[2])
  $this->setProperty('timer_state', $state[2]); 
}
if ($state[0]=="ALMS")
{
$this->setProperty('almset_1', $state[1]);
$this->setProperty('almset_2', $state[2]);
$this->setProperty('almset_3', $state[3]);
$this->setProperty('almset_4', $state[4]);
$this->setProperty('almset_5', $state[5]);
$this->setProperty('almset_6', $state[6]);
$this->setProperty('almset_7', $state[7]);
$this->setProperty('almtime_1', date('H:i', mktime(0,$state[8])));
$this->setProperty('almtime_2', date('H:i', mktime(0,$state[9])));
$this->setProperty('almtime_3', date('H:i', mktime(0,$state[10])));
$this->setProperty('almtime_4', date('H:i', mktime(0,$state[11])));
$this->setProperty('almtime_5', date('H:i', mktime(0,$state[12])));
$this->setProperty('almtime_6', date('H:i', mktime(0,$state[13])));
$this->setProperty('almtime_7', date('H:i', mktime(0,$state[14])));
$this->setProperty('dawn_state', $state[15]);
}

$this->setProperty('alive', 1);

