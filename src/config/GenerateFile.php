<?php

namespace Alsace\FormGenerator\config;

use Illuminate\Console\GeneratorCommand;

class GenerateFile extends GeneratorCommand
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repo {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a repo file in app\src folder';
    protected $type = 'Repo file';

    protected function getNameInput()
    {
        return str_replace('.', '/', trim($this->argument('name')));
    }
    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        $stub = parent::buildClass($name);

        return  $stub;
    }
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $filename = dirname(__DIR__,2).DIRECTORY_SEPARATOR."boilerplates".DIRECTORY_SEPARATOR."form.stub";
        return  $filename;
    }
    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Src';
    }

    
}
