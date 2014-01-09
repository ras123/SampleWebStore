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

    public function listTabs($tabCollection)
    {
        $menu_item = $tabCollection->tab('rasblog', "Ras's Blog", 'posts', 1000);
        $menu_item->addSecondLevel('posts', 'Posts', 'posts');
        $menu_item->addSecondLevel('comments', 'Comments', 'comments');
    }
}