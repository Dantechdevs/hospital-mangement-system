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
            <h4 class="card-title">Prescription Details</h4>
           
            
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Doctor</th>
                    <th>patient</th>
                    <th>medicine</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>View</th>
                  </tr>
                </thead>
                <tbody>
                 
               @foreach ($prescriptions as $prescription)
               <tr>
                <td>{{$prescription-> doctor id}}</td>
                <td>{{$prescription->patient}}</td>
                <td>{{$prescription->medicine}}</td>
               
                <td>
                    <a class="btn btn-primary" href="{{ route('prescriptions.edit',$prescription->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('prescriptions.destroy',$prescription->id) }}" method="POST" >
                      @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                    <a class=" btn btn-primary" href="{{ route('prescriptions.show',$prescription->id) }}">Show</a>
                </td>
              </tr> 
               @endforeach
               {{$prescriptions->links() }}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

