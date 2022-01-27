@extends('admin.layouts.admin-dash-layout')

@section('content')
<div class="row justify-content-center"></div>
<br>
<div class="container">
<div class="container">
<div class="row justify-content-center">

                    <div class="col-md-10col-3">

                        <div class="card">
                        <div class="card-header row justify-content-center">{{ __('Candidate Information') }}</div>   
                        
                            <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">

                                <tr>
                                    <th class="border-top-0" scope="col">No.</th>
                                    <th class="border-top-0" scope="col">Image</th>
                                    <th class="border-top-0" scope="col">Name</th>
                                    <th class="border-top-0" scope="col">Matric Number</th>
                                    <!-- <th class="border-top-0" scope="col">Strength</th> -->
                                    <!--  <th class="border-top-0" scope="col">CGPA</th> -->
                                    <th class="border-top-0" scope="col">Faculty</th>
                                    <th class="border-top-0" scope="col">Status</th>
                                    <th class="border-top-0" scope="col"></th>

                                </tr>
                                </thead>
                                <tbody>
                            @foreach ($candidate_lists as $show)
                                    <tr>
                                        <td>{{ $show->id}}</td>
                                        <td><img src="{{ asset('storage/'.$show->image)}}" width="100px" height="100px"alt="image"></td>
                                        <td>{{ $show->name}}</td>
                                        <td>{{ $show->matricnum}}</td>
                                        <!-- <td>{{ $show->strength}}</td>
                                        <td>{{ $show->cgpa}}</td> -->
                                        <td>{{ $show->faculty}}</td>
                                        <td>{{ $show->status}}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$show->id}}" data-id="{{$show->id}}">{{ __('Details') }}
                                            </button>

                                            <div class="modal fade" id="exampleModal{{ $show->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Candidate Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                             <table class="table table-bordered table-striped">

                                            <tbody>
                                                <div class="mb-2">
                                                <img src="{{ asset('storage/'.$show->image) }}" width="100px" height="100px" alt="Image">
                                            </div>

                                            <tr>
                                                <th scope="row">Name</th>
                                                <td>{{ $show->name}}</td>
                                            </tr>
                                             <tr>
                                                <th scope="row">Matric Num</th>
                                                <td>{{ $show->matricnum}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Strength</th>
                                                <td>{{ $show->strength}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">CGPA</th>
                                                <td>{{ $show->cgpa}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Faculty</th>
                                                <td>{{ $show->faculty}}</td>
                                             </tr>
                                            <tr>
                                                <th scope="row">Party</th>
                                                <td>{{ $show->party}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Electoral Area</th>
                                                <td>{{ $show->elecarea}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Status</th>
                                                <td>{{ $show->status}}</td>
                                            </tr>

                                        </tbody>

                                        </table>
                                     </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                        </div>
                                        
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