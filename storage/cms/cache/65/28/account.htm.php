<?php 
class Cms56c42b2e829b0_1164378387Class extends \Cms\Classes\PageCode
{
public function onInit()
{
    //$this->imageUploader->bindModel('files', Project::find(1));
    //new Project;
    $this->imageUploader->bindModel('photoTest', new \Rainlab\User\Models\User);


    //var_dump($this->page);

//Auth::user->id
//echo '<pre>';
    //print_r(Auth::user->id);
       // echo '</pre>';
//die();

}

}
