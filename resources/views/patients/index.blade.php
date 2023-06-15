@extends('admin.master')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Patients Information</h4>
       
        <a href="{{ route('patients.create') }}" class="btn btn-primary">Create</a>
        <div class="table-responsive col-lg-12" >
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
               <th>Details</th>
              </tr>
            </thead>
            <tbody>
             
          @if($patients->count()>0)
 @foreach ($patients as $patient)
           <tr>
            <td>{{$patient->id}}</td>
            <td>{{$patient->name}}</td>
           <td><img width="50px" height="50px" src="{{  asset('patients/images'.'/'.$patient->image) }}" alt=""></td>
           
            <td>
                <a class="btn btn-primary" href="{{ route('patients.show',$patient->id) }}">View</a>
            </td>
          </tr>
           
           @endforeach
          @else
          <p>No Patients Found</p>
          @endif
          
            </tbody>

          </table>
            {{$patients->links() }}
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection
