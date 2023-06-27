<?php



    namespace Alsace\FormGenerator\Providers;
    use Alsace\FormGenerator\config\GenerateFile;
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
            $files = dirname(__DIR__).DIRECTORY_SEPARATOR."helpers.php";
            //dd($files);
            if (file_exists($files)) { 
                require $files;
            }
        }

        /* public function register(){

        } */
    }
?>