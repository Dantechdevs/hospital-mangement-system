@extends('admin.master')
@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Blocks Information</h4>
       
        <a href="{{ route('blocks.create') }}" class="btn btn-primary">Create</a>
        <div class="table-responsive col-lg-12" >
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Blockfloor</th>
               
               <th>Details</th>
              </tr>
            </thead>
            <tbody>
             
          @if($blocks->count()>0)
 @foreach ($blocks as $block)
           <tr>
            <td>{{$block->id}}</td>
            <td>{{$block->blockfloor}}</td>
          
           
            <td>
                <a class="btn btn-primary" href="{{ route('blocks.show',$block->id) }}">View</a>
            </td>
          </tr>
           
           @endforeach
          @else
          <p>No Blocks Found</p>
          @endif
          
            </tbody>

          </table>
            {{$blocks->links() }}
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection
