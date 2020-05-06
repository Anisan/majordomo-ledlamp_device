<?php

$this->device_types['ledlamp'] = array(
    'TITLE'=>'LedLamp',
    'PARENT_CLASS'=>'SDevices',
    'CLASS'=>'SLedLamp',
    'DESCRIPTION'=>'LedLamp @gunner47',
    'PROPERTIES'=>array( 
        'state'=>array('DESCRIPTION'=>'MQTT state', 'ONCHANGE'=>'stateUpdated'),
        'cmnd'=>array('DESCRIPTION'=>'MQTT command'),
        'effect'=>array('DESCRIPTION'=>'Effect','_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'0=Sparkles,1=Fire,2=White fire,3=Rainbow vertical,4=Rainbow horizontal,5=Rainbow diagonal,6=Colors,7=Madness,8=Clouds,9=Lava,10=Plasma,11=Rainbow,12=Rainbow stripe,13=Zebra,14=Forest,15=Ocean,16=Color,17=Snow', 'ONCHANGE'=>'paramsUpdated'),
        'brightness'=>array('DESCRIPTION'=>'Brightness','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated'),
        'speed'=>array('DESCRIPTION'=>'Speed','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated'),
        'scale'=>array('DESCRIPTION'=>'Scale','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated'),
    ),
    'METHODS'=>array(
        'stateUpdated'=>array('DESCRIPTION'=>'MQTT state updated event'), 
        'paramsUpdated'=>array('DESCRIPTION'=>'Params updated event'), 
        'switch'=>array('DESCRIPTION'=>'Switch'),
        'turnOn'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_ON,'_CONFIG_SHOW'=>1),
        'turnOff'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_OFF,'_CONFIG_SHOW'=>1), 
        'statusUpdated'=>array('DESCRIPTION'=>'Status updated','CALL_PARENT'=>1), 
    ),
);
