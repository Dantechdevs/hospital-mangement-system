@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Medicine Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('medicines.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id:</strong>
                {{ $medicine->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <span style="color:rgb(62, 0, 128);">Joined on:{{$medicine->created_at}}</span>
            <div class="form-group">
                <strong>Price:</strong>
                {{ $medicine->detail }}
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <span style="color:rgb(62, 0, 128);">Joined on:{{$medicine->created_at}}</span>
        <div class="form-group">
            <strong>Quantity:</strong>
            {{ $medicine->detail }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <span style="color:rgb(62, 0, 128);">Joined on:{{$medicine->created_at}}</span>
        <div class="form-group">
            <strong>Code:</strong>
            {{ $medicine->detail }}
        </div>
    </div>
@endsection
