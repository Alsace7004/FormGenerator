<?php



if(! function_exists('myowntest')){
    function myowntest(){
        return 'This is my own test';
    }
}

if(! function_exists('hello')){
    function hello(){
        echo 'am from the hello function';
    }
}
if(! function_exists('check_src_folder_files')){
    function check_src_folder_files(){
        $path = dirname(__DIR__,4).DIRECTORY_SEPARATOR."app".DIRECTORY_SEPARATOR."Src";
        //dd($path);
        $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));
        $files = array_values(array_diff(scandir($path), array('..', '.')));
        dd($files);
    }
}   

if(! function_exists('files_list')){
    function file_list(){
                    $path = dirname(__DIR__,3).DIRECTORY_SEPARATOR."app".DIRECTORY_SEPARATOR."Src";
                    $path = dirname(__DIR__).DIRECTORY_SEPARATOR."Src";
                    //dd($path);
                    $files = scandir($path);
                    $files = array_diff(scandir($path), array('.', '..'));
                    $files = array_values(array_diff(scandir($path), array('..', '.')));
                    //dd($files);
                    //return $files;
    }
}



?>