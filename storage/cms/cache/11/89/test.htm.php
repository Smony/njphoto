<?php 
class Cms56c2f261ca6c4_853109446Class extends \Cms\Classes\PageCode
{
public function onInit()
{
    //$this->imageUploader->bindModel('files', Project::find(1));
    //new Project;
    $this->imageUploader->bindModel('photo', new \Responsiv\Uploader\Models\Photo);
}

}
