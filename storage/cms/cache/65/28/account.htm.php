<?php 
class Cms56cad07b5b45b_395299390Class extends \Cms\Classes\PageCode
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
