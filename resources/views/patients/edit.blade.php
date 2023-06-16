@extends('admin.master')


@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <?php //dd($blockids);
    /*
     'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'sex' => $request->sex,
            'dob' => $request->dob,
            'age' => $request->age,
            'birthplace' => $request->birthplace,
            'nationality' => $request->nationality,
            'occupation' => $request->occupation,
            'image' => $request->$imageName
    */
    ?>

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add New Patient</h4>
                <p class="card-description">
                    <a href="{{ route('patients.index') }}" class="btn btn-success">Back</a>
                </p>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('patients.update',$patient->id) }}" method="post">
                    @csrf
                    @method('put')
{{-- patient name --}}
                    <div class="form-group">
                        <label for="name">Patient Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $patient->name }}">
                        @error('name')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- patient phone --}}
                    <div class="form-group">
                        <label for="phone">Patient Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone"
                            value="{{ $patient->phone }}">
                        @error('phone')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- patient address --}}
                    <div class="form-group">
                        <label for="address">Patient Address</label>
                        <input type="text" class="form-control" name="address" id="address"
                            value="{{ $patient->address }}">
                        @error('address')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- patient sex --}}
                    <div class="form-group">
                        <label for="hod">Sex</label>
                        <select name="sex" id="sex" class="form-control" value="{{ $patient->sex }}">
                           
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                           
                        </select>
                        @error('sex')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- patient dob --}}
                    <div class="form-group">
                        <label for="dob">Patient D.o.b</label>
                        <input type="date" class="form-control" name="dob" id="dob"
                            value="{{ $patient->dob }}">
                        @error('dob')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- patient age --}}
                    <div class="form-group">
                        <label for="age">Patient Age</label>
                        <input type="text" class="form-control" name="age" id="age"
                            value="{{ $patient->age }}">
                        @error('age')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- patient birthplace --}}
                    <div class="form-group">
                        <label for="birthplace">Patient BirthPlace</label>
                        <input type="text" class="form-control" name="birthplace" id="birthplace"
                            value="{{ $patient->birthplace }}">
                        @error('birthplace')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- patient nationality --}}
                    <div class="form-group">
                        <label for="nationality">Patient Nationality</label>
                        <input type="text" class="form-control" name="nationality" id="nationality"
                            value="{{ $patient->nationality }}">
                        @error('nationality')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- patient occupation --}}
                    <div class="form-group">
                        <label for="occupation">Patient Address</label>
                        <input type="text" class="form-control" name="occupation" id="occupation"
                            value="{{ $patient->occupation }}">
                        @error('occupation')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>
                       {{-- patient Gaurdian --}}
                       <div class="form-group">
                        <label for="gaurdian">Patient Gaurdian</label>
                        <input type="text" class="form-control" name="guardian" id="gaurdian"
                            value="{{ $patient->guardian }}">
                        @error('guardian')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>

                     {{-- patient Religion --}}
                     <div class="form-group">
                        <label for="hod">Religion</label>
                        <select name="religion" id="religion" class="form-control">
                           
                                <option value="christianity">Christianity</option>
                                <option value="muslim">Muslim</option>
                                <option value="other">Other</option>
                        </select>
                       
                    </div> @error('religion')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                     {{-- patient CivilStatus --}}
                     <div class="form-group">
                        <label for="hod">CivilStatus</label>
                        <select name="CivilStatus" id="CivilStatus" class="form-control">
                           
                                <option value="employed">Employed</option>
                                <option value="unemployed">unEmployed</option>
                                <option value="other">Other</option>
                        </select>
                       
                    </div> @error('CivilStatus')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    {{-- patient image--}}
                  <div class="form-group">
                        <label for="image">Patient Image</label>
                        <input type="file" class="form-control" id="name"name="image" value="{{ $patient->image }}">
                       <img width="50px" height="50px" src="{{  asset('patients/images'.'/'.$patient->image) }}" alt="">
                    </div>
                   
              
                    <div class="container">
                       <button type="submit" class="btn btn-primary me-2">Add </button>
                       <a href="{{ route('patients.index') }}" class="btn btn-light">Cancel</a>
                   </div>
                </form>
            </div>
        </div>
    </div>
  
@endsection
