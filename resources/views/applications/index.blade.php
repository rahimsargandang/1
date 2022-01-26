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

  <div class="container">
  <div class="row justify-content-center">
  <div class="col-md-8"> 
    


  <div class="card">
  <div class="card-header">{{ __('Candidate Application') }}</div>
    <!-- <div class="row justify-content-center "> -->
        <!-- <div class="col-md-5"> -->
        <div class="card-body">
      <form method ="post" enctype="multipart/form-data" action="{{ route('candidate.store') }}">
      {{ csrf_field() }}
 <!-- <div class="form-group pt-2"> -->
  <!-- <div class="row mb-3">
    <label for="candidateapplicationname">Name</label>
    <input type="text" class="form-control" id="name"  name ="name"placeholder="Name"> -->
    <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
  </div>
  <div class="row mb-3">
                            <label for="matricnum" class="col-md-4 col-form-label text-md-right">{{ __('Matric Number') }}</label>

                            <div class="col-md-6">
                                <input id="matricnum" type="text" placeholder="Matric Number" class="form-control @error('matricnum') is-invalid @enderror" name="matricnum" value="{{ old('matricnum') }}" required autocomplete="matricnum" autofocus>

                                @error('matricnum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $matricnum }}</strong>
                                    </span>
                                @enderror
                            </div>
                       
  </div>
  <!-- <div class="form-group pt-2">
    <label for="candidateapplicationmatricnum">Matric Number</label>
    <input type="text" class="form-control" id="matricnum"  name ="matricnum" placeholder="Matric Number">
  </div> -->
  <div class="row mb-3">
                            <label for="strength" class="col-md-4 col-form-label text-md-right">{{ __('Strength') }}</label>

                            <div class="col-md-6">
                                
                            <textarea class="form-control" style="" class="form-control" id="strength" name="strength" rows="3" ></textarea>
                                @error('strength')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
  </div>
  <!-- <div class="form-group pt-2">
    <label for="candidatestrength">Strength</label>
    <textarea class="form-control" style="" class="form-control" id="strength" name="strength" rows="3" ></textarea>
  </div> -->
  <div class="row mb-3">
                            <label for="cgpa" class="col-md-4 col-form-label text-md-right">{{ __('CGPA') }}</label>
                            <div class="col-md-6">
                              <input type="number" placeholder="4.00" step="0.01" min="0" max="4.0" class="form-control" id="cgpa" name ="cgpa" placeholder="CGPA">
                            </div>
                        
  </div>
  <!-- <div class="form-group pt-2">
    <label for="candidatecgpa">CGPA</label>
    <input type="text" class="form-control" id="cgpa" name ="cgpa" placeholder="CGPA">
  </div> -->
  <div class="row mb-3">
                            <label for="faculty" class="col-md-4 col-form-label text-md-right">{{ __('Faculty') }}</label>

                            <div class="col-md-6">
          
                                <select class="form-select" id="faculty" name="faculty" >
                                <option selected>Select Faculty</option>
                                <option value="CITRA">CITRA</option>
                                <option value="FEP">FEP</option>
                                <option value="FFAR">FFAR</option>
                                <option value="FKAB">FKAB</option>
                                <option value="FPEND">FPEND</option>
                                <option value="FPER">FPER</option>  
                                <option value="FPERG">FPERG</option>                 
                                <option value="FPI">FPI</option>
                                <option value="FSK">FSK</option>
                                <option value="FST">FST</option>
                                <option value="FSSK">FSSK</option>
                                <option value="FTSM">FTSM</option>
                                <option value="FUU">FUU</option> 
                            </select>

                                @error('faculty')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
  </div>
  <div class="row mb-3">
                            <label for="party" class="col-md-4 col-form-label text-md-right">{{ __('Party') }}</label>

                            <div class="col-md-6">
          
                                <select class="form-select" id="party" name="party" >
                                <option selected>Select Party</option>
                                <option value="Inspirasi Varsiti">Inspirasi Varsiti</option>
                                <option value="Kongres Siswa">Kongres Siswa</option>
                                <option value="Republican">Republican</option>
                                <option value="Demokrat">Demokrat</option>
                                <option value="Pendaulat">Pendaulat</option>
                                <option value="Bebas">Bebas</option>
                            </select>

                                @error('party')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
  </div>
  <div class="row mb-3">
                            <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>

                            <div class="col-md-6">
          
                                <select class="form-select" id="elecarea" name="elecarea" >
                                <option selected>Select Electoral Area</option>
                                <option value="Umum">Umum</option>
                                <option value="Fakulti">Fakulti</option>
                            </select>

                                @error('area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
  </div>

  <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                            <div class="col-md-6">
                            <input type="file" class="form-control" id="image" name="image" />
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
  </div>
  <div class="row mb-3">
  <div class="col-md-6 offset-md-5">
                  <img id="preview-image-before-upload" src="https://media.discordapp.net/attachments/702060431577055273/931017734752469042/noiamge.jpg"
                      alt="preview image" style="max-height: 300px; max-width:200px">
              </div>
              </div>
                            
<input type="hidden" name="status" id="status" value="Pending" />                            

  <div class="row mb-0 ">
                            <div class="col-md-6 offset-md-5">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    {{ __('Submit') }}
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you confirm to submit?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Form will be evaluate by JPMPP
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</div>
                            
                        </div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript">
     
$(document).ready(function (e) {

  
   $('#image').change(function(){
           
    let reader = new FileReader();

    reader.onload = (e) => { 

      $('#preview-image-before-upload').attr('src', e.target.result); 
    }

    reader.readAsDataURL(this.files[0]); 
  
   });
  
});

</script>
</body>
</html>
@endsection