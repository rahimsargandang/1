@extends('navbar')

@section('content')

        @if(session('flashMessage'))
        <div class= "container mt-3 text-center alert alert-success">
        {{session ('flashMessage')}} 
        </div>
        @endif   

        @if(session('flashMessageProblem'))
        <div class= "container mt-3 text-center alert alert-danger">
        {{session ('flashMessageProblem')}} 
        </div>
        @endif   


<div class="container">

    <div class="row">
        <div class="text-center">
            <img  src="https://www.ukm.my/pkk//wp-content/logo/en/Alternatelogo_blacktext.png" width="800"  >

        </div>
        <div class="col-9">


        </div>

    </div>
</div>
@endsection
