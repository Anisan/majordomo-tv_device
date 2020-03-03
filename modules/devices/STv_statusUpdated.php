<?php

$status = $this->getProperty('status');
if ($status) {
    $path_icons = $this->getProperty('path_icons');
    $name = $this->getProperty('name');
    $source = $this->getProperty('source');
    if ($source != 'tv' && $source!="")
        $name = $source;
    //https://epg.it999.ru/
    if (file_exists(ROOT.$path_icons.$name.'.png')) 
        $this->setProperty('icon', ROOTHTML.$path_icons.$name.'.png');
    else
        $this->setProperty('icon', ROOTHTML.'cms/scenes/styles/common/i_tv_on.png');
    
    if ($source != 'tv')
        $this->setProperty('view_name', ucfirst($source));
    else
    {
        $channel = $this->getProperty('channel');
        $this->setProperty('view_name', $channel.". ".ucfirst($name));
    }    
}
else
{
    $this->setProperty('icon', ROOTHTML.'cms/scenes/styles/common/i_tv_off.png');
    $this->setProperty('view_name', 'Turning off');
}