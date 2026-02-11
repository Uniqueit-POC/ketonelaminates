<?php

class unique 
{ 
    
    public function imageupload($name)
    {
    
             $path="../Images/";  
            $file_name = $_FILES[$name]['name'];
            $file_tmp = $_FILES[$name]['tmp_name'];
            move_uploaded_file($file_tmp,$path.$file_name);

    }
    public function imagedelete($name)
    {
        $path="../Images";  
        unlink($path.$name);
    }
    public function width($name)
    {
        $file_tmp = $_FILES[$name]['tmp_name'];
        $size = getimagesize($file_tmp);
        return $size[0];
    }
    public function height($name)
    {
        $file_tmp = $_FILES[$name]['tmp_name'];
        $size = getimagesize($file_tmp);
        return $size[1];
    }


}
