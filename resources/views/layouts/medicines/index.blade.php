@extends('admin.master')
@section('content')

  
   
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Medicines Details</h4>
           
            
            <div class="table-responsive">
              <div class="container">
                <div class="col-md-12">
                  <a href="{{route('medicines.create')}}" class="btn btn-primary">Add New</a>
                </div>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Code</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>View</th>
                  </tr>
                </thead>
                <tbody>
                 
               @foreach ($medicines as $medicine)
               <tr>
                <td>{{$medicine->id}}</td>
                <td>{{$medicine->price}}</td>
                <td>{{$medicine->quantity}}</td>
                <td>{{$medicine->code}}</td>
                
                
               
                <td>
                    <a class="btn btn-primary" href="{{ route('medicines.edit',$medicine->id) }}">Edit</a>
                </td>
                <td>
                    <form action="{{ route('medicines.destroy',$medicine->id) }}" method="POST" >
                      @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                    <a class=" btn btn-primary" href="{{ route('medicines.show',$medicine->id) }}">Show</a>
                </td>
              </tr> 
               @endforeach
               {{$medicines->links() }}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection

