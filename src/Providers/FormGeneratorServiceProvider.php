<?php
    namespace Alsace\FormGenerator\Providers;
    use Alsace\FormGenerator\config\GenerateFile;

    use Illuminate\Support\ServiceProvider;

    class FormGeneratorServiceProvider extends ServiceProvider{

        public function boot(){
            if($this->app->runningInConsole()){
                $this->commands([
                    GenerateFile::class
                ]);
            }
        }

        /* public function register(){

        } */
    }
?>