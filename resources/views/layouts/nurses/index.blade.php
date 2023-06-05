@extends('admin.master')
@section('content')

  
   
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Nurses Information</h4>
           
            
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Qualification</th>
                    <th>Photo_path</th>
                    <th>register</th>
                    <th>position</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>View</th>
                  </tr>
                </thead>
                <tbody>
                 
               @foreach ($nurses as $nurse)
               <tr>
                <td>{{$nurse->id}}</td>
                <td>{{$nurse->name}}</td>
                <td>{{$nurse->email}}</td>
                <td>{{$nurse->phone}}</td>
                <td>{{$nurse->gender}}</td>
                <td>{{$nurse->addressl}}</td>
                <td>{{$nurse->qualification}}</td>
                <td>{{$nurse->Photo_path}}</td>
                <td>{{$nurse->register}}</td>
                <td>{{$nurse->position}}</td>
                
               
                <td>
                    <a class="btn btn-primary" href="{{ route('nurses.edit',$nurse->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('nurses.destroy',$nurse->id) }}" method="POST" >
                      @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                    <a class=" btn btn-primary" href="{{ route('nurses.show',$nurse->id) }}">Show</a>
                </td>
              </tr> 
               @endforeach
               {{$nurses->links() }}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection

