@extends('admin.master')


@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <?php //dd($blockids);
    ?>

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create New Block</h4>
                <p class="card-description">
                    <a href="{{ route('blocks.index') }}" class="btn btn-success">Back</a>
                </p>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('blocks.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="name">BlockFloor</label>
                        <input type="text" class="form-control" name="blockfloor" id="name"
                            value="{{ old('blockfloor') }}">
                        @error('blockfloor')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">BlockCode</label>
                        <input type="number" class="form-control" name="blockcode" id="name"
                            value="{{ old('blockcode') }}">
                        @error('blockcode')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>



                    <div>
                        <button type="submit" class="btn btn-primary me-2">Create</button>
                    <a href="{{ route('blocks.index') }}" class="btn btn-light">Cancel</a>
                   
                    </div>
                </form>
            </div>
        </div>
    </div>
   
@endsection
