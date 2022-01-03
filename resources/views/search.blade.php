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
    <div class="container">
       <div class="row">
          <div class="col-md-6" style="margin-top:40px">
             <h4>Search Everything</h4><hr>
             <form action="{{ route('search') }}" method="GET">
        
                <div class="form-group">
                   <label for="">Enter keyword</label>
                   <input type="text" class="form-control" name="query" placeholder="Search here....." value="{{ request()->input('query') }}">
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
                           <th>Strength</th>
                       </tr>
                   </thead>
                   <tbody>
                       @if(count($candidates) > 0)
                           @foreach($candidates as $candidate_search)
                              <tr>
                                  <td>{{ $candidate_search->name }}</td>
                                  <td>{{ $candidate_search->matricnum }}</td>
                                  <td>{{ $candidate_search->strength }}</td>
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
</body>
</html>
@endsection          


    