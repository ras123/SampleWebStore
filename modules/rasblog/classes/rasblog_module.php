<?php
/**
 * Created by PhpStorm.
 * User: ras
 * Date: 05/01/14
 * Time: 8:37 PM
 */
class RasBlog_Module extends Core_ModuleBase
{
    /**
     * Creates the module information object.
     * @return Core_ModuleInfo
     */
    protected function createModuleInfo()
    {
        return new Core_ModuleInfo(
            "Ras Blog",
            "LemonStand blogging feature",
            "Ras");
    }
}