@extends('adminnavbar')

@section('content')

<div class="row justify-content-center"> Candidate Information </div>
<div class="container">
<div class="container">
<div class="row justify-content-center">

                    <div class="col-md-10col-3">

                        <div class="card">
                        
                            <div class="table-responsive">
                            <table class="table ">
                                <thead class="table-light">

                                <tr>
                                    <th >No.</th>
                                    <th >Name</th>
                                    <th >Matric Numberr</th>
                                    <th >Strength</th>
                                    <th >CGPA</th>
                                    <th >Faculty</th>

                                </tr>
                                </thead>
                            <tbody>
                            @foreach ($candidate_lists as $candidateshow)
                                    <tr>
                                        <td>{{ $candidateshow->id}}</td>
                                        <td>{{ $candidateshow->name}}</td>
                                        <td>{{ $candidateshow->matricnum}}</td>
                                        <td>{{ $candidateshow->strength}}</td>
                                        <td>{{ $candidateshow->cgpa}}</td>
                                        <td>{{ $candidateshow->faculty}}</td>
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