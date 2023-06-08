@extends('admin.master')


@section('content')

      {{-- show --}}
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title"><span style="color:orange; font-weight: bold;">Hod
                    Name:</span><b>{{ $hod->doctor->name }}</b></h6>
                <a href="{{ route('hods.index') }}" class="btn btn-primary">Back</a>
                <div class="table-responsive col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                  Hod  Department
                                </th>
                                <th>
                                    Doctor Image
                                </th>
                               
                                <th>Edit</th>
                                <th>Delete</th> 
                               
                            </tr>
                        </thead>
                        <tbody>


                            <tr>

<td>
    {{ $hod->doctor->department }}
</td>
                                <td>
                                    <img width="50px" height="50px"
                                        src="{{ asset('department/images' . '/' ) }}"
                                        alt="">
                                </td>

                                <td>
                                    <a class=" btn btn-primary  "
                                        href="{{ route('hods.edit', $hod->id) }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('hods.destroy', $hod->doctor->id) }}" method="POST">
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
                    <hr>
                    
                    <div class="container">
                     <strong>
                       Doctors Bio
                     </strong>
                     <p >
                        {{ $hod->doctor->detail }} <br>
                   </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
