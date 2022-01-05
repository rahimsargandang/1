@extends('navbar')

@section('content')

<div class="container">

    <form action="{{route('castVote')}}" method="post">
    {{ csrf_field() }}
        <fieldset class="form-group text-center">
            <div class="row">
            <div class="col-sm-5" style="margin:0 auto">

                <h3 class="mt-3 mb-5">VOTE CANDIDATE</h3>

                <table class="table table-bordered">
                <thead class="table-light">

                <tr>
                    <th class="border-top-0" scope="col">Name</th>
                    <th class="border-top-0" scope="col">Vote</th>
                    
                    

                </tr>
                </thead>

                <tbody>

                @foreach($candidates as $candidate)
                <tr>
                    <td>{{$candidate->name}}</td>
                    <td><div class="form-check mb-3 mt-2">
                        <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" name="candidateId[]" value="{{$candidate->id}}" id="candidateId[]" onclick="return vlimit()">
                        </label>
                        </div>
                    </td>
                    
                    
                </tr>
                
                <script>

                    function vlimit(){
                        var a = document.getElementsByName('candidateId[]');
                        var newvar = 0;
                        var count;
                        for(count=0; count<a.length; count++){
                            if(a[count].checked==true){
                                newvar = newvar+1;
                            }
                        }
                        if(newvar>=3){
                            document.getElementById('notvalid').innerHTML="Please select only 2 candidate!"
                            return false;

                        }
                    }

                </script>
                
                @endforeach

                
                    
                </div>
                </tbody>
                </table>
                <div style="color:red" id="notvalid"></div>

                <div class="form-group row">
                <div class="col-sm-10 mt-5" style="margin:0 auto">
                    <button type="submit" class="btn btn-block btn-primary">VOTE</button>

                </div>



            </div>
            </div>
        </fieldset>
    </form>



</div>

@endsection
