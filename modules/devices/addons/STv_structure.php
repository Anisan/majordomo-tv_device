<?php

//@include_once(ROOT . 'languages/STv_' . SETTINGS_SITE_LANGUAGE . '.php');
//@include_once(ROOT . 'languages/STv_default' . '.php');

$this->device_types['tv'] = array(
    'TITLE'=>'Television',
    'PARENT_CLASS'=>'SDevices',
    'CLASS'=>'STv',
    'DESCRIPTION'=>'Television devices',
    'PROPERTIES'=>array( 
        'channel'=>array('DESCRIPTION'=>'Channel'),
        'name'=>array('DESCRIPTION'=>'Channel name','ONCHANGE'=>'statusUpdated'),
        'icon'=>array('DESCRIPTION'=>'Channel icon'),
        'progname'=>array('DESCRIPTION'=>'Program name'),
        'detail'=>array('DESCRIPTION'=>'Detail'),
        'starttime'=>array('DESCRIPTION'=>'Start time'),
        'endtime'=>array('DESCRIPTION'=>'End time'),
        'volume'=>array('DESCRIPTION'=>'Volume'),
        'mute'=>array('DESCRIPTION'=>'Mute'),
        'view_name'=>array('DESCRIPTION'=>'View name (auto complete)'),
        'source'=>array('DESCRIPTION'=>'Source','ONCHANGE'=>'statusUpdated'),
        'path_icons'=>array('DESCRIPTION'=>'Path channel icons pack','_CONFIG_TYPE'=>'text'),
    ),
    'METHODS'=>array(
        'switch'=>array('DESCRIPTION'=>'Switch'),
        'turnOn'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_ON,'_CONFIG_SHOW'=>1),
        'turnOff'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_OFF,'_CONFIG_SHOW'=>1), 
        'statusUpdated'=>array('DESCRIPTION'=>'Status updated','CALL_PARENT'=>1), 
    ),
);
