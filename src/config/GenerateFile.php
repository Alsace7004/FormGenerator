<?php

namespace Alsace\FormGenerator\config;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateFile extends Command
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repo {file_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate repo files';
    
    private function createFile($name, $address){
        $createfile = fopen($address.'/'.$name, 'x');
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
        //

        $file_name = $this->argument('file_name');
        $path = "app/src/";
        $full_file_name = $file_name."."."php";
        
        //verify if directory exist or not and then create it
        if(!File::exists($path)) {
            File::makeDirectory($path, 0777, true); //creates directory
        }
        $this->createFile($full_file_name,$path); //create the file by the way
 
        echo "Le fichier {$full_file_name} a été créer dans le dossier {$path}  ";
    }
}
