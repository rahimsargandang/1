@extends('navbar')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Application Form</title>

</head>
<body>


<form method ="post" action="{{ route('candidate.store') }}">
  {{ csrf_field() }}

  <div class="container">
  <div class="row justify-content-center">
        <div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('Candidate Application') }}</div>
    <div class="row justify-content-center ">
        <div class="col-md-5">

  <div class="form-group pt-2">
    <label for="candidateapplicationname">Name</label>
    <input type="text" class="form-control" id="name"  name ="name"placeholder="Name">

  </div>
  <div class="form-group pt-2">
    <label for="candidateapplicationmatricnum">Matric Number</label>
    <input type="text" class="form-control" id="matricnum"  name ="matricnum" placeholder="Matric Number">
  </div>
  <div class="form-group pt-2">
    <label for="candidatestrength">Strength</label>
    <textarea class="form-control" style="" class="form-control" id="strength" name="strength" rows="3" ></textarea>

  </div>
  <div class="form-group pt-2">
    <label for="candidatecgpa">CGPA</label>
    <input type="text" class="form-control" id="cgpa" name ="cgpa" placeholder="CGPA">
  </div>


  <div class="form-group pt-2">
                            <label class="my-1 me-2" for="faculty">Faculty</label>
                            <select class="form-select" id="faculty" name="faculty" >
                                <option selected>Select Faculty</option>
                                <option value="FTSM">FTSM</option>
                                <option value="FSK">FSK</option>
                                <option value="FEB">FEB</option>
                            </select>
                        
                        <div class="row mb-6 pt-2 pb-2" >
                            <div class="col-md-8 offset-md-5">
                            
<input type="hidden" name="status" id="status" value="Pending" />                            
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</body>
</html>
@endsection