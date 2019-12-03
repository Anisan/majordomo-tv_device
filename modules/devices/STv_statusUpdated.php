<?php

$status = $this->getProperty('status');
if ($status) {
    $path_icons = $this->getProperty('path_icons');
    $name = $this->getProperty('name');
    //https://epg.it999.ru/
    $this->setProperty('icon', $path_icons.$name.'.png');
}
else
{
    $this->setProperty('icon', './cms/scenes/styles/common/i_tv_on.png');
}