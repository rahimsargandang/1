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
                                    <th class="border-top-0" scope="col">No.</th>
                                    <th class="border-top-0" scope="col">Name</th>
                                    <th class="border-top-0" scope="col">CGPA</th>
                                    <th class="border-top-0" scope="col">Email Address</th>
                                    <th class="border-top-0" scope="col">Status</th>


                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Stiphen Mark</td>
                                    <td>4.00</td>
                                    <td>stiphen@mail.com</td>
                                    <td><span class="">Approved</span></td>


                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Yamini padal</td>
                                    <td>4.00</td>
                                    <td>yamini@mail.com</td>
                                    <td>
                                        <span class="">Pending</span></td>


                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Lois mary</td>
                                    <td>4.00</td>
                                    <td>loismary@mail.com</td>
                                    <td><span class="">Rejected</span>  </td>

                                </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
</div>
</div>

                @endsection