@extends('admin.master')
@section('content')
<?php //dd($hods);?>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Hods Information</h4>
       
        <a href="{{ route('hods.create') }}" class="btn btn-primary">Create</a>
        <div class="table-responsive col-lg-12" >
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Hod Name</th>
               
               <th>Details</th>
              </tr>
            </thead>
            <tbody>
             
          @if($hods->count()>0)
 @foreach ($hods as $hod)
           <tr>
            <td>{{$hod->id}}</td>
            <td>{{$hod->doctor->name}}</td>
          
           
            <td>
                <a class="btn btn-primary" href="{{ route('hods.show',$hod->id) }}">View</a>
            </td>
          </tr>
           
           @endforeach
          @else
          <p>No hods Found</p>
          @endif
          
            </tbody>

          </table>
            {{$hods->links() }}
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
@endsection
