@extends('admin.master')


@section('content')


         {{-- show --}}
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title"><span style="color:orange; font-weight: bold;">Details for:</span><b>{{ $block->blockfloor }}</b></h6>
                <a href="{{ route('blocks.index') }}" class="btn btn-primary">Back</a>
                <div class="table-responsive col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                 Blockfloor
                                </th>
                                <th>
                                   BloclCode
                                </th>
                               
                                <th>Edit</th>
                                <th>Delete</th> 
                               
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                              <td>
                                {{ $block->blockfloor }}
                              </td>
<td>
  {{ $block->blockcode }}
</td>

                                <td>
                                    <a class=" btn btn-primary  "
                                        href="{{ route('hods.edit', $block->id) }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('hods.destroy', $block->id) }}" method="POST">
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
                    
                    

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection