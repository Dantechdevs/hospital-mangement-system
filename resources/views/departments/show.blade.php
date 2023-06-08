     @extends('admin.master')


     @section('content')
         {{-- show --}}
         <div class="col-lg-12 grid-margin stretch-card">
             <div class="card">
                 <div class="card-body">
                     <h4 class="card-title"><span style="color:orange; font-weight: bold;">Department
                             Name:</span>{{ $department->name }} Details</h4>
                     <a href="{{ route('blocks.index') }}" class="btn btn-primary">Back</a>
                     <div class="table-responsive col-lg-12">
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th>
                                         Image
                                     </th>
                                    
                                     <th>Edit</th>
                                     <th>Delete</th> 
                                    
                                 </tr>
                             </thead>
                             <tbody>


                                 <tr>


                                     <td>
                                         <img width="50px" height="50px"
                                             src="{{ asset('department/images' . '/' . $department->photo_path) }}"
                                             alt="">
                                     </td>

                                     <td>
                                         <a class=" btn btn-primary  "
                                             href="{{ route('departments.edit', $department->id) }}">Edit</a>
                                     </td>
                                     <td>
                                         <form action="{{ route('departments.destroy', $department->id) }}" method="POST">
                                             @csrf
                                             @method('DELETE')
                                             <input type="submit" value="Delete!" class="btn btn-danger">
                                         </form>
                                     </td>
                                     
                                     <td>
                                     
                                  </td>
                                 </tr>

                             </tbody>

                         </table>
                         <div class="container">
                          <strong>
                            Description
                          </strong>
                          <p >
                            {{ $department->description }} <br>
                        </p>
                         </div>

                     </div>
                 </div>
             </div>
         </div>
         </div>
         </div>
     @endsection
