<?php 
class Cms56c2f687d1078_936357608Class extends \Cms\Classes\PageCode
{
public function onInit()
{
    //$this->imageUploader->bindModel('files', Project::find(1));
    //new Project;
    $this->imageUploader->bindModel('photo', new \Responsiv\Uploader\Models\Photo);
}

}
