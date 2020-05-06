<?php

if ($params['NEW_VALUE'] == $params['OLD_VALUE']) return;

if ($params['NEW_VALUE'] == 1)
    $this->setProperty('cmnd', 'P_ON');
else
    $this->setProperty('cmnd', 'P_OFF');
