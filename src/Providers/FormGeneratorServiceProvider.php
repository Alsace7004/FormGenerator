<?php



    namespace Alsace\FormGenerator\Providers;
    use Alsace\FormGenerator\config\GenerateFile;
    use Alsace\FormGenerator\View\Components\Alert;
    use Alsace\FormGenerator\View\Components\Input;
    use Alsace\FormGenerator\View\Components\Button;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Support\Facades\File;

    class FormGeneratorServiceProvider extends ServiceProvider{

        public function boot(){
            if($this->app->runningInConsole()){
                $this->commands([
                    GenerateFile::class
                ]);
            }
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
            $this->loadViewsFrom(__DIR__.'/../views','FormGenerator');

            // if 'src/helpers.php' does not work, try with 'helpers.php'
            if (file_exists($file = app_path('Src/helpers.php'))) { 
                require $file;
            } 
            /* if (File::exists(__DIR__ . '/helpers.php')) {
              
                require __DIR__ . '/helpers.php';
            } */
        }

        /* public function register(){

        } */
    }
?>