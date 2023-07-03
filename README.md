# FormGenerator
Un package pour générer des formulaires
## Pour generer un fichier repo
        php artisan make:repo nom_du_repo
### Exemple Pour generer un fichier repo
        Ex: php artisan make:repo User
#### Exemple de fonction builder
Voici ici un example de création de formulaire:

    public function builder()
    {
        $firstname = Tag::get('input')
                            ->id('id_firstname')
                            ->name('firstname')
                            ->class('form-control mb-3')
                            ->required('required')
                            ->placeholder('Votre firstname please...');
        $lastname =  Tag::get('input')
                            ->id('id_lastname')
                            ->name('lastname')
                            ->class('form-control mb-3')
                            ->placeholder('Votre lastname please...');
        $btn = Tag::get('button','valider')->id('id_button')->name('button_name')->class('btn btn-primary');

        $oForm = new Form('/users/login/');
        $oForm->addTag($firstname);
        $oForm->addTag($lastname);
        $oForm->addTag($btn);

        return view('FormGenerator::index',compact('oForm'));
    }

#### Affichage au niveau de la vue

        {{($oForm->render())}}
