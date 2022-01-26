@extends('navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Search with pagination</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container ">
        <div class="form-group text-center">
       <div class="row">
          <div class="col-sm-12" style="margin-top:40px">
             <h4>Search Candidate</h4><hr>
             <form action="{{ route('search') }}" method="GET">
        
                <div class="form-group">
                   <label for="">Enter keyword</label>
                   <input type="text" class="form-control mt-4 text-center" name="query" placeholder="Search here....." value="{{ request()->input('query') }}">
                   <br>
                   <span class="text-danger">@error('query'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                 <button type="submit" class="btn btn-primary">Search</button>
                </div>
             </form>
             <br>
             <br>
             <hr>
             <br>
             @if(isset($candidates))

               <table class="table table-hover">
                   <thead>
                       <tr>
                           <th>Name</th>
                           <th>Matric Num</th>
                           <th>Party</th>
                           <th>Image</th>
                       </tr>
                   </thead>
                   <tbody>
                       @if(count($candidates) > 0)
                           @foreach($candidates as $candidate_search)
                              <tr>
                                  <td>{{ $candidate_search->name }}</td>
                                  <td>{{ $candidate_search->matricnum }}</td>
                                  <td>{{ $candidate_search->party }}</td>
                                  <td> 
                                      <img src="{{ asset('storage/'.$candidate_search->image) }}" width="100px" height="100px" alt="Image">
                                  </td>
                                  <td>
                                    <div class="row mb-0">
                                      <div class="col-md-6 offset-md-4">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $candidate_search->id }}" data-id="{{$candidate_search->id}}">{{ __('Details') }}
                                        </button>
                              
                                      <div class="modal fade" id="exampleModal{{ $candidate_search->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Candidate Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                      <table class="table table-bordered table-striped">

                                    <tbody>
                                    <div class="mb-2">
                                    <img src="{{ asset('storage/'.$candidate_search->image) }}" width="100px" height="100px" alt="Image">
                                    </div>

                                      <tr>
                                        <th scope="col">Name</th>
                                        <td>{{ $candidate_search->name }}</td>
                                        </tr>
                                    <tr>
                                        <th scope="row">Matric Num</th>
                                        <td>{{ $candidate_search->matricnum }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Strength</th>
                                        <td colspan="1">{{ $candidate_search->strength }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Faculty</th>
                                        <td>{{ $candidate_search->faculty }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Party</th>
                                        <td colspan="1">{{ $candidate_search->party }}</td>
                                    </tr>

                                    </tbody>

                                        </table>
                                     </div>
                                    <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                  </td>
                              </tr>
                           @endforeach
                       @else

                          <tr><td>No result found!</td></tr>
                       @endif
                   </tbody>
               </table>

               <div class="pagination-block">
                   <?php //{{ $candidates->links('layouts.paginationlinks') }} ?>
                   {{  $candidates->appends(request()->input())->links('layouts.paginationlinks') }}
               </div>

             @endif
          </div>
       </div>
    </div>
    </div>
</body>
</html>
@endsection          


    