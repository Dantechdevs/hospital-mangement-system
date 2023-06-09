@extends('admin.master')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">departments Information</h4>
       
        <a href="{{ route('departments.create') }}" class="btn btn-primary">Create</a>
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
             
          @if($departments->count()>0)
 @foreach ($departments as $department)
           <tr>
            <td>{{$department->id}}</td>
            <td>{{$department->name}}</td>
           <td><img width="50px" height="50px" src="{{  asset('department/images'.'/'.$department->photo_path) }}" alt=""></td>
           
            <td>
                <a class="btn btn-primary" href="{{ route('departments.show',$department->id) }}">View</a>
            </td>
          </tr>
           
           @endforeach
          @else
          <p>No Departments Found</p>
          @endif
          
            </tbody>

          </table>
            {{$departments->links() }}
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection
