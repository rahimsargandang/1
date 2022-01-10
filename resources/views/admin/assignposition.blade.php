@extends('admin.layouts.admin-dash-layout')

@section('content')
<div class="row justify-content-center"></div>
<br>
<div class="container">
<div class="container">
<div class="row justify-content-center">

                    <div class="col-md-10col-3">

                        <div class="card">
                        <div class="card-header row justify-content-center">{{ __('Assign Position') }}</div>   
                        
                            <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">

                                <tr>
                                    <th class="border-top-0" scope="col">No.</th>
                                    <th class="border-top-0" scope="col">Name</th>
                                    <th class="border-top-0" scope="col">Matric Number</th>
                                    <th class="border-top-0" scope="col">Strength</th>
                                    <th class="border-top-0" scope="col">Faculty</th>
                                    <th class="border-top-0" scope="col">Votes</th>
                                    <th class="border-top-0" scope="col">Position</th>
                                    

                                </tr>
                                </thead>
                                <tbody>
                            @foreach ($assignpos as $show)
                                    <tr>
                                        <td>{{ $show->id}}</td>
                                        <td>{{ $show->name}}</td>
                                        <td>{{ $show->matricnum}}</td>
                                        <td>{{ $show->strength}}</td>
                                        <td>{{ $show->faculty}}</td>
                                        <td>{{ $show->votes_count}}</td>
                                        <td>
                                        </td>
                                       
                                       
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