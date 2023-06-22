<?php

    namespace Alsace\FormGenerator\Providers;
    use Alsace\FormGenerator\config\GenerateFile;
    use Alsace\FormGenerator\View\Components\Alert;
    use Alsace\FormGenerator\View\Components\Input;
    use Alsace\FormGenerator\View\Components\Button;
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

            $this->loadViewComponentsAs('FormGenerator',[
                Alert::class,
                Input::class,
                Button::class,
            ]);
        }

        /* public function register(){

        } */
    }
?>