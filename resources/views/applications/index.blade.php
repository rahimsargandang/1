@extends('adminnavbar')
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
<form>
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-5">

  <div class="form-group">
    <label for="candidateapplicationname">Name</label>
    <input type="text" class="form-control" id="candidateapplicationname"  placeholder="Name">
  </div>
  <div class="form-group">
    <label for="candidateapplicationmatricnum">Matric Number</label>
    <input type="text" class="form-control" id="candidateapplicationmatricnum"  placeholder="Matric Number">
  </div>
  <div class="form-group">
    <label for="candidatestrength">Strength</label>
    <input type="text" style="height:100px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="candidatecgpa">CGPA</label>
    <input type="text" class="form-control" id="candidatecgpa" placeholder="CGPA">
  </div>
  <div class="form-group">
                            <label class="my-1 me-2" for="country">Faculty</label>
                            <select class="form-select" id="country" aria-label="Default select example">
                                <option selected>Select Faculty</option>
                                <option value="1">FTSM</option>
                                <option value="2">FSK</option>
                                <option value="3">FEB</option>
                            </select>
                        </div>
                        <div class="row mb-6 pt-2" >
                            <div class="col-md-8 offset-md-5">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
  
</div>
</div>
</div>
</form>
</body>
</html>
@endsection