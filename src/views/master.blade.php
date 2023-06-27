{{-- @extends('FormGenerator::index')


@section('content') --}}

<div class="container">
    

    @if(isset($arrayobj))
        <h6>Formulaire d'ajout</h6>
        @foreach ($arrayobj as $k=>$item)
            @foreach ($item as $x=>$it)
                <div class="mb-3" style="border:1px solid #eeeeee">
                    {{($item[$x]->render())}}
                </div> 
            @endforeach
        @endforeach
    @endif

    @if(isset($data))
        <h6>Liste</h6>
        <div class="mb-3" style="border:1px solid #eeeeee">
            {{($data)}}
        </div> 
    @endif
    
    {{-- 
        <div class="mb-3" style="border:1px solid #eeeeee">
            {{($firstnameField->render())}}
        </div> 
        <div class="mb-3" style="border:1px solid #eeeeee">
            {{($lastnameField->render())}}
        </div>
        <div class="col-auto">
            {{($SubmitButton->render())}}
        </div>  
    --}}
    
    {{-- form end here --}}
</div>

{{-- @endsection --}}