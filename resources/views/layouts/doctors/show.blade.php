@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Doctor Infomation</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('doctors.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $doctor->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <span style="color:green;">Joined on:{{$doctor->created_at}}</span>
            <div class="form-group">
                <strong>Details:</strong>
                {{ $doctor->detail }}
            </div>
        </div>
    </div>
@endsection
