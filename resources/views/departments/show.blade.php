     @extends('admin.master')


     @section('content')

        <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" ><span style="color:orange; font-weight: bold;">Department Name:</span>{{ $department->name }}</h4>
                  <div class="media">
                   
                    <div class="media-body">
                    	<img width="50px" height="50px" src="{{ asset(  $department->photo_path) }}" alt="">
                      <p class="card-text">
                      	{{ $department->description }}
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row">
                	<div class="col-md-6 d-flex ">
                		 <a class=" btn btn-primary  " href="{{route('departments.edit',$department->id) }}">Edit</a> 
                		 <form action="{{ route('departments.destroy',$department->id)}}" method="POST" >
                               @csrf
                              @method('DELETE')
                                     <input  type="submit" value="Delete!" class="btn btn-danger">
                               </form>
                	</div>
                	<div class="col-md-6 ">
                		 
                               <span style="color:orange; font-weight: bold;">Created On:</span>{{ $department->created_at }}
                	</div>
                	
                </div>
              </div>
            </div>
     @endsection