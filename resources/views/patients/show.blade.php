@extends('admin.master')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Patients Details</h4>
       
        <a href="{{ route('patients.index') }}" class="btn btn-primary">Back</a>
        <div class="table-responsive col-lg-12" >
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Edit</th>
               <th>Delete</th>
              </tr>
            </thead>
            <tbody>
             
       
           <tr>
            <td>{{$patient->id}}</td>
            <td>{{$patient->name}}</td>
           <td><img width="50px" height="50px" src="{{  asset('patients/images'.'/'.$patient->image) }}" alt=""></td>
           <td><a href="{{ route('patients.edit',$patient->id) }}" class="btn btn-success">Edit</a></td>
            <td>
                <form action="{{ route('patients.destroy',$patient->id) }}" method="post">
                    @csrf
                    @method('delete')
                     <button class="btn btn-danger " >delete</button>
                </form>
               
            </td>
          </tr>
           
         
          
            </tbody>

          </table>
          <h4>More Details</h4>
          <p><strong>Patient address: </strong>{{ $patient->address }}</p> <hr>
          <p><strong>Patient Phone: </strong>{{ $patient->phone }}</p> <hr>
          <p><strong>Patient Sex: </strong>{{ $patient->sex}}</p> <hr>
          <p><strong>Patient D.o.B: </strong>{{ $patient->dob }}</p> <hr>
          <p><strong>Patient Age :</strong>{{ $patient->age}}</p> <hr>
          <p><strong>Patient birthplace: </strong>{{ $patient->birthplace }}</p> <hr>
          <p><strong>Patient Nationality: </strong>{{ $patient->nationality }}</p> <hr>
          <p><strong>Patient Occupation: </strong>{{ $patient->occupation }}</p> <hr>
          <p><strong>Patient CivilStatus: </strong>{{ $patient->CivilStatus }}</p> <hr>
          <p><strong>Patient Religion: </strong>{{ $patient->religion }}</p> <hr>
          <p><strong>Patient Gaurdian: </strong>{{ $patient->gaurdian}}</p> <hr>

        
          
          
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection
