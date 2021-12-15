@extends('adminnavbar')

@section('content')
<div class="row justify-content-center">Approve Candidate </div>
<div class="container">
<div class="container">
<div class="row justify-content-center">

                    <div class="col-md-10col-3">

                        <div class="card">
                        
                            <div class="table-responsive">
                            <table class="table ">
                                <thead class="table-light">

                                <tr>
                                    <th class="border-top-0" scope="col">No.</th>
                                    <th class="border-top-0" scope="col">Name</th>
                                    <th class="border-top-0" scope="col">CGPA</th>
                                    <th class="border-top-0" scope="col">Email Address</th>
                                    <th class="border-top-0" scope="col">Status</th>


                                </tr>
                                </thead>
                                <tbody>
                            @foreach ($candidate_approved as $show)
                                    <tr>
                                        <td>{{ $show->id}}</td>
                                        <td>{{ $show->name}}</td>
                                        <td>{{ $show->matricnum}}</td>
                                        <td>{{ $show->strength}}</td>
                                        <td>{{ $show->cgpa}}</td>
                                        <td>{{ $show->faculty}}</td>
                                        <td>{{ $show->status}}</td>
                                       
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
</div>
</div>

                @endsection