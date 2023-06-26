<div>
                        
    @php
    //Recuperer les fichiers disponible dans le dossier app/Src
        $path = dirname(__DIR__,3).DIRECTORY_SEPARATOR."app".DIRECTORY_SEPARATOR."Src";
        $files = scandir($path);
        $files = array_diff(scandir($path), array('.', '..'));
        $files = array_values(array_diff(scandir($path), array('..', '.')));

        # if you have PHP >= 5.3, I'd use this (remove ext from files name)
        $files = array_map(function($e){
            return pathinfo($e, PATHINFO_FILENAME);
        },$files);
        //dd($files)
        //An elegant way to prefix array values (PHP 5.3+):
        $prefixed_array = preg_filter('/^/', '/formBuilder/', $files);
        # dump
        //dd($prefixed_array);
        //Mapped Array
        //$mapped_array = mapkeys($array_with_keys, $array_with_values);
        $mapped_array = array_combine($prefixed_array, $files);
        //dd($mapped_array)
    @endphp
     
</div>


<div class="sidebar">
    <ul class="side_links">
        @foreach ($mapped_array as $key=> $item)
            <li>
                <a href="{{$key}}">{{$item}}</a>
            </li>
        @endforeach
        {{-- <li>
            <a href="/formBuilder/Files">Application</a>
        </li>
        <li>
            <a href="/formBuilder/Client">Client</a>
        </li> --}}
        {{-- <li>
            <a href="#Application">Application</a>
        </li>
        <li>
            <a href="#Bootstrap">Bootstrap</a>
        </li>
        <li>
            <a href="#Resources">Resources</a>
        </li>
        <li>
            <a href="#Repository">Repository</a>
        </li>
        <li>
            <a href="#Components">Components</a>
        </li> --}}
    </ul>
</div>