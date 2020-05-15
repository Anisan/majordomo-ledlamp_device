<?php

$this->device_types['ledlamp'] = array(
    'TITLE'=>'LedLamp',
    'PARENT_CLASS'=>'SDevices',
    'CLASS'=>'SLedLamp',
    'DESCRIPTION'=>'LedLamp @gunner47',
    'PROPERTIES'=>array( 
        'state'=>array('DESCRIPTION'=>'MQTT state', 'ONCHANGE'=>'stateUpdated'),
        'cmnd'=>array('DESCRIPTION'=>'MQTT command'),
        'effect'=>array('DESCRIPTION'=>'Effect','_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'0=Sparkles,1=Fire,2=White fire,3=Rainbow vertical,4=Rainbow horizontal,5=Rainbow diagonal,6=Colors,7=Madness,8=Clouds,9=Lava,10=Plasma,11=Rainbow,12=Rainbow stripe,13=Zebra,14=Forest,15=Ocean,16=Color,17=Snow,18=Snowstorm,19=Starfall,20=Matrix,21=Lighters,22=Lighter traces,23=Paintball,24=Cube,25=White color', 'ONCHANGE'=>'paramsUpdated'),
        'brightness'=>array('DESCRIPTION'=>'Brightness','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated','DATA_KEY'=>1),
        'speed'=>array('DESCRIPTION'=>'Speed','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated'),
        'scale'=>array('DESCRIPTION'=>'Scale','_CONFIG_TYPE'=>'num', 'ONCHANGE'=>'paramsUpdated'),
        'color'=>array('DESCRIPTION'=>'Color (effect Color)','_CONFIG_TYPE'=>'rgb','ONCHANGE'=>'colorUpdated','DATA_KEY'=>1),
        'timer_work'=>array('DESCRIPTION'=>'Timer work'),
        'timer_state'=>array('DESCRIPTION'=>'Timer state','_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'1=Off,2=1 min,3=5 min,4=10 min,5=15 min,6=30 min,7=45 min,8=60 min', 'ONCHANGE'=>'paramsUpdated'),
        'button_lock'=>array('DESCRIPTION'=>'Button locked','_CONFIG_TYPE'=>'yesno', 'ONCHANGE'=>'paramsUpdated'),
        'almset_1'=>array('DESCRIPTION'=>'Alarm 1 set','_CONFIG_TYPE'=>'yesno', 'ONCHANGE'=>'paramsUpdated'),
        'almtime_1'=>array('DESCRIPTION'=>'Alarm 1 time (hh:mm)','_CONFIG_TYPE'=>'text', 'ONCHANGE'=>'paramsUpdated'),
        'almset_2'=>array('DESCRIPTION'=>'Alarm 2 set','_CONFIG_TYPE'=>'yesno', 'ONCHANGE'=>'paramsUpdated'),
        'almtime_2'=>array('DESCRIPTION'=>'Alarm 2 time (hh:mm)','_CONFIG_TYPE'=>'text', 'ONCHANGE'=>'paramsUpdated'),
        'almset_3'=>array('DESCRIPTION'=>'Alarm 3 set','_CONFIG_TYPE'=>'yesno', 'ONCHANGE'=>'paramsUpdated'),
        'almtime_3'=>array('DESCRIPTION'=>'Alarm 3 time (hh:mm)','_CONFIG_TYPE'=>'text', 'ONCHANGE'=>'paramsUpdated'),
        'almset_4'=>array('DESCRIPTION'=>'Alarm 4 set','_CONFIG_TYPE'=>'yesno', 'ONCHANGE'=>'paramsUpdated'),
        'almtime_4'=>array('DESCRIPTION'=>'Alarm 4 time (hh:mm)','_CONFIG_TYPE'=>'text', 'ONCHANGE'=>'paramsUpdated'),
        'almset_5'=>array('DESCRIPTION'=>'Alarm 5 set','_CONFIG_TYPE'=>'yesno', 'ONCHANGE'=>'paramsUpdated'),
        'almtime_5'=>array('DESCRIPTION'=>'Alarm 5 time (hh:mm)','_CONFIG_TYPE'=>'text', 'ONCHANGE'=>'paramsUpdated'),
        'almset_6'=>array('DESCRIPTION'=>'Alarm 6 set','_CONFIG_TYPE'=>'yesno', 'ONCHANGE'=>'paramsUpdated'),
        'almtime_6'=>array('DESCRIPTION'=>'Alarm 6 time (hh:mm)','_CONFIG_TYPE'=>'text', 'ONCHANGE'=>'paramsUpdated'),
        'almset_7'=>array('DESCRIPTION'=>'Alarm 7 set','_CONFIG_TYPE'=>'yesno', 'ONCHANGE'=>'paramsUpdated'),
        'almtime_7'=>array('DESCRIPTION'=>'Alarm 7 time (hh:mm)','_CONFIG_TYPE'=>'text', 'ONCHANGE'=>'paramsUpdated'),
        'dawn_state'=>array('DESCRIPTION'=>'Dawn option','_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'1=1 min,2=5 min,3=10 min,4=15 min,5=30 min,6=45 min,7=60 min', 'ONCHANGE'=>'paramsUpdated'),
    ),
    'METHODS'=>array(
        'stateUpdated'=>array('DESCRIPTION'=>'MQTT state updated event'), 
        'paramsUpdated'=>array('DESCRIPTION'=>'Params updated event'), 
        'colorUpdated'=>array('DESCRIPTION'=>'Color updated event'), 
        'switch'=>array('DESCRIPTION'=>'Switch'),
        'turnOn'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_ON,'_CONFIG_SHOW'=>1),
        'turnOff'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_OFF,'_CONFIG_SHOW'=>1), 
        'statusUpdated'=>array('DESCRIPTION'=>'Status updated','CALL_PARENT'=>1), 
    ),
);
