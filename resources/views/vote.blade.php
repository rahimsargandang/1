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
                <div class="card text-dark bg-info mb-3" style="max-width: 35rem;">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
                </svg>
                
            
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                <div class=" mt-3 mb-2 col-md-10 offset-md-10" style="margin:0 auto">
                    In this section, Voter must vote 2 candidate only. Choose wisely!
                </div>

  </div>
                <tr>
                    
                    <th class="border-top-0" scope="col">Image</th>
                    <th class="border-top-0" scope="col">Name</th>
                    <th class="border-top-0" scope="col">Party</th>
                    <th class="border-top-0" scope="col">Vote</th>
                    
                    

                </tr>
                </thead>

                <tbody>

                @foreach($candidates as $candidate)
                <tr>
                    <td><img src="{{ asset('storage/'.$candidate->image)}}" width="150px" height="150px"alt="image"></td>
                    <td ><div class="mt-5 mb-4">{{$candidate->name}}</div></td>
                    <td ><div class="mt-5 mb-4">{{$candidate->party}}</div></td>
                    <td><div class="form-check mb-4 mt-5">
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


                <table class="table table-bordered">
                <thead class="table-light">
                <div class="card text-dark bg-info mb-3" style="max-width: 35rem;">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
                </svg>
                
            
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                <div class=" mt-3 mb-2 col-md-10 offset-md-10" style="margin:0 auto">
                    In this section, Voter must vote 2 candidate only. Choose wisely!
                </div>

  </div>
  <tr>
                    
                    <th class="border-top-0" scope="col">Image</th>
                    <th class="border-top-0" scope="col">Name</th>
                    <th class="border-top-0" scope="col">Party</th>
                    <th class="border-top-0" scope="col">Vote</th>
                    
                    

                </tr>
                </thead>

                <tbody>

                @foreach($candidates as $candidate)
                <tr>
                    <td><img src="{{ asset('storage/'.$candidate->image)}}" width="150px" height="150px"alt="image"></td>
                    <td ><div class="mt-5 mb-4">{{$candidate->name}}</div></td>
                    <td ><div class="mt-5 mb-4">{{$candidate->party}}</div></td>
                    <td><div class="form-check mb-4 mt-5">
                        <label class="form-check-label" for="defaultCheck1">
                        <input class="form-check-input" type="checkbox" name="candidate2Id[]" value="{{$candidate->id}}" id="candidate2Id[]" onclick="return v2limit()">
                        </label>
                        </div>
                    </td>
                    
                    
                </tr>

                
                
                <script>

                    function v2limit(){
                        var a = document.getElementsByName('candidate2Id[]');
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




