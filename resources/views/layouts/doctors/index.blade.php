@extends('admin.master')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Doctors Information</h4>
           
            
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>View</th>
                  </tr>
                </thead>
                <tbody>
                 
               @foreach ($doctors as $doctor)
               <tr>
                <td>{{$doctor->id}}</td>
                <td>{{$doctor->name}}</td>
                <td>{{$doctor->department}}</td>
               
                <td>
                    <a class="btn btn-primary" href="{{ route('doctors.edit',$doctor->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('doctors.destroy',$doctor->id) }}" method="POST" >
                      @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                    <a class=" btn btn-primary" href="{{ route('doctors.show',$doctor->id) }}">Show</a>
                </td>
              </tr> 
               @endforeach
               {{$doctors->links() }}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

