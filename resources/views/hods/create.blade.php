@extends('admin.master')


@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <?php //dd($blockids);
    ?>

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create New Hod</h4>
                <p class="card-description">
                    <a href="{{ route('hods.index') }}" class="btn btn-success">Back</a>
                </p>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('hods.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name">Doctor</label>
                       
                            <select name="doctor" id="" class="form-control">
                                @forelse ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @empty
                            <option value="" class="text-red">{{ __("No Doctor Found!") }}</option>
                            @endforelse
                            </select>
                        @error('doctor')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>
                   
                   <div>
                        <button type="submit" class="btn btn-primary me-2">Create</button>
                    <a href="{{ route('hods.index') }}" class="btn btn-light">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>
   
@endsection
