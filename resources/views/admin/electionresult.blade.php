@extends('admin.layouts.admin-dash-layout')

@section('content')
<div class="row justify-content-center"></div>
<br>
<div class="container">
<div class="container">
<div class="row justify-content-center">

                    <div class="col-md-10col-3">

                        <div class="card">
                        <div class="card-header row justify-content-center">{{ __('Public Election Votes') }}</div>   
                        
                            <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">

                                <tr>
                                    <th class="border-top-0" scope="col">No.</th>
                                    <th class="border-top-0" scope="col">Image</th>
                                    <th class="border-top-0" scope="col">Name</th>
                                    <th class="border-top-0" scope="col">Matric Number</th>
                                    <th class="border-top-0" scope="col">Faculty</th>
                                    <th class="border-top-0" scope="col">Party</th>
                                    <th class="border-top-0" scope="col" style="width: 600px">Voting Progress</th>
                                    <th class="border-top-0" scope="col">Votes count</th>
                                    

                                </tr>
                                </thead>
                                <tbody>
                            @foreach ($elecres as $show)
                                    <tr>
                                        <td>{{ $show->id}}</td>
                                        <td><img src="{{ asset('storage/'.$show->image)}}" width="100px" height="100px"alt="Image"></td>
                                        <td>{{ $show->name}}</td>
                                        <td>{{ $show->matricnum}}</td>
                                        <td>{{ $show->faculty}}</td>
                                        <td>{{ $show->party}}</td>
                                        <td><div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{$show->votes_count}}%"></div>
</div></td>
                                        <td>{{ $show->votes_count}}</td>
                                       
                                       
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>

                            
                            </div>
                        </div>

                        <div class="card">
                        <div class="card-header row justify-content-center">{{ __('Faculty Election Votes') }}</div>   
                        
                            <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">

                                <tr>
                                    <th class="border-top-0" scope="col">No.</th>
                                    <th class="border-top-0" scope="col">Image</th>
                                    <th class="border-top-0" scope="col">Name</th>
                                    <th class="border-top-0" scope="col">Matric Number</th>
                                    <th class="border-top-0" scope="col">Faculty</th>
                                    <th class="border-top-0" scope="col">Party</th>
                                    <th class="border-top-0" scope="col" style="width: 600px">Voting Progress</th>
                                    <th class="border-top-0" scope="col">Votes count</th>
                                    

                                </tr>
                                </thead>
                                <tbody>
                            @foreach ($elecresF as $showF)
                                    <tr>
                                        <td>{{ $showF->id}}</td>
                                        <td><img src="{{ asset('storage/'.$showF->image)}}" width="100px" height="100px"alt="Image"></td>
                                        <td>{{ $showF->name}}</td>
                                        <td>{{ $showF->matricnum}}</td>
                                        <td>{{ $showF->faculty}}</td>
                                        <td>{{ $showF->party}}</td>
                                        <td><div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{$showF->votes_count}}%"></div>
</div></td>
                                        <td>{{ $showF->votes_count}}</td>
                                       
                                       
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>

                            
                            </div>
                        </div>
                    </div>
            </div>
        </div>

</div>
@endsection