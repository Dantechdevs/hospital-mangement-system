@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Medicines</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('medicines.index') }}"> Back</a>
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('medicines.store') }}" method="POST">
    @csrf
     <div class="row">
     
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <label for="price">price</label>
               <input type="text" value="{{old('price')}}" name="price"class="form-control">
             
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <label for="price">Quantity</label>
               <input type="text" value="{{old('quantity')}}" name="quantity"class="form-control">
             
            </div>
        </div>
       
       
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <label for="price">Code</label>
               <input type="text" value="{{old('code')}}" name="code" class="form-control">
             
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
