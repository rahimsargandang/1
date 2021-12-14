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
<<<<<<< HEAD
<form method ="post" action="/submitItem" accept-charset="UTF-8">
  {{ csrf_field() }}
<div class="container">
=======
<form>
  <div class="container">
  <div class="row justify-content-center">
        <div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('Candidate Application') }}</div>
>>>>>>> 7513fd3937083ecdbc8e428e9cefa34362bd010f
    <div class="row justify-content-center ">
        <div class="col-md-5">

  <div class="form-group pt-2">
    <label for="candidateapplicationname">Name</label>
<<<<<<< HEAD
    <input type="text" class="form-control" id="name"  name ="name"placeholder="Name">
=======
    <br>
    <input type="text" class="form-control" id="candidateapplicationname"  placeholder="Name">
>>>>>>> 7513fd3937083ecdbc8e428e9cefa34362bd010f
  </div>
  <div class="form-group pt-2">
    <label for="candidateapplicationmatricnum">Matric Number</label>
    <input type="text" class="form-control" id="matricnum"  name ="matricnum" placeholder="Matric Number">
  </div>
  <div class="form-group pt-2">
    <label for="candidatestrength">Strength</label>
<<<<<<< HEAD
    <input type="text" style="height:100px" class="form-control" id="strength" name ="strength" aria-describedby="emailHelp" >
=======
    <textarea class="form-control" style="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" rows="3" ></textarea>
>>>>>>> 7513fd3937083ecdbc8e428e9cefa34362bd010f
  </div>
  <div class="form-group pt-2">
    <label for="candidatecgpa">CGPA</label>
    <input type="text" class="form-control" id="cgpa" name ="cgpa" placeholder="CGPA">
  </div>
<<<<<<< HEAD
  <div class="form-group">
                            <label class="my-1 me-2" for="faculty">Faculty</label>
                            <select class="form-select" id="faculty" name ="faculty" aria-label="Default select example">
=======
  <div class="form-group pt-2">
                            <label class="my-1 me-2" for="country">Faculty</label>
                            <select class="form-select" id="country" aria-label="Default select example">
>>>>>>> 7513fd3937083ecdbc8e428e9cefa34362bd010f
                                <option selected>Select Faculty</option>
                                <option value="FTSM">FTSM</option>
                                <option value="FSK">FSK</option>
                                <option value="FEB">FEB</option>
                            </select>
                        </div>
                        <div class="row mb-6 pt-2 pb-2" >
                            <div class="col-md-8 offset-md-5">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>
</div>
</div>
</div>
  
</div>
</div>
</div>
</form>
</body>
</html>
@endsection