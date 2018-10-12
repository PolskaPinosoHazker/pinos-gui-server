<?php
namespace app\modules;

use std, gui, framework, app;


class MainModule extends AbstractModule
{

    /**
     * @event timer.action 
     */
    function doTimerAction(ScriptEvent $e = null)
    {    
        $this->wallpaper->visible = true;
        $this->tray->visible = true;
        $this->trayIcon->visible = true;
        $this->progressIndicator->visible = false;
        $this->timer->enable = false;
    }

}
