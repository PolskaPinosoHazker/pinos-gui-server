<?php
namespace app\forms;

use std, gui, framework, app;


class MainForm extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        $this->wallpaper->visible = false;
        $this->tray->visible = false;
        $this->trayIcon->visible = false;
        $this->timer->enable = true;
    }

}
