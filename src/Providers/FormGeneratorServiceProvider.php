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
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
            $this->loadViewsFrom(__DIR__.'/../views','FormGenerator');
        }

        /* public function register(){

        } */
    }
?>