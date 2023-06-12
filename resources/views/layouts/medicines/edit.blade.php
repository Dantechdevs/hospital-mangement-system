@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Medicine</h2>
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
    <form action="{{ route('medicines.update',$medicine->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" id="" value="{{ $medicine->price}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label>Quantity</label>
                <input type="text" name="quantity" id="" value="{{ $medicine->quantity}}" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label>Code</label>
                <input type="text" name="code" id="" value="{{ $medicine->code}}" class="form-control">
                </div>
            </div>
           
           
        
          
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>
@endsection
