@extends('admin.layouts.admin-dash-layout')

@section('content')

<div class="row justify-content-center"> </div>
<br>
<div class="container">
<div class="container">
<div class="row justify-content-center">

                    <div class="col-md-10col-3">

                        <div class="card">
                        <div class="card-header row justify-content-center">{{ __('Approve Candidate') }}</div>
                            <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="table-light">

                                <tr>
                                    <th >No.</th>
                                    <th>Image</th>
                                    <th >Name</th>
                                    <th >Matric Numberr</th>
                                    <th >Strength</th>
                                    <th >CGPA</th>
                                    <th >Faculty</th>
                                    <th >Status</th>
                                    <th >Action</th>

                                </tr>
                                </thead>
                            <tbody>
                            @foreach ($candidate_approved as $candidateshow)
                                    <tr>
                                        <td>{{ $candidateshow->id}}</td>
                                        <td><img src="{{ asset('storage/'.$candidateshow->image)}}" width="100px" height="100px"alt="image"></td>
                                        <td>{{ $candidateshow->name}}</td>
                                        <td>{{ $candidateshow->matricnum}}</td>
                                        <td>{{ $candidateshow->strength}}</td>
                                        <td>{{ $candidateshow->cgpa}}</td>
                                        <td>{{ $candidateshow->faculty}}</td>
                                        <td>{{ $candidateshow->status}}</td>

                                        <td>
                                            <a class="btn btn-success" href="{{url('approved',$candidateshow->id)}}">Approve </a>
                                    
                                            <a class="btn btn-danger" href="{{url('rejected',$candidateshow->id)}}">Reject </a>
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