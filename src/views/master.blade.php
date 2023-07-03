{{-- @extends('FormGenerator::index')


@section('content') --}}

<div class="container">
    

    @if(isset($arrayobj))
        <h6>Formulaire d'ajout {{repo_file_name_on_builder()}}</h6>
        @foreach ($arrayobj as $k=>$item)
            @foreach ($item as $x=>$it)
                <div class="mb-3" style="border:1px solid #eeeeee">
                    {{($item[$x]->render())}}
                </div> 
            @endforeach
        @endforeach
    @endif

    @if(isset($oForm))
        <h6>Formulaire d'ajout {{repo_file_name_on_builder()}}</h6>
                <div class="mb-3" style="border:1px solid #eeeeee">
                    {{($oForm->render())}}
                </div> 
    @endif
       

    @if(isset($data))
        <div class="col-auto d-flex justify-content-between align-items-center">
            <h6>Liste {{repo_file_name_on_list()}}</h6> 
            <a class="btn btn-primary btn-sm mb-3" href="create={{repo_file_name_on_list()}}">Ajouter {{repo_file_name_on_list()}}</a>
        </div>  
        <div class="mb-3" style="border:1px solid #eeeeee">
            {{($data->renderTable())}}
        </div>
    @endif


    
    {{-- form end here --}}
</div>

{{-- @endsection --}}