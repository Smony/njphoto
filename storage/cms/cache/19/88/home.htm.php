<?php 
use RainLab\Pages\Classes\Page;
class Cms56b1e8c37fca2_1558483305Class extends \Cms\Classes\LayoutCode
{

public function onStart()
{
    $page = Page::find('chairs');
    $this['chairsPages'] = $page->getChildren();
}

}
