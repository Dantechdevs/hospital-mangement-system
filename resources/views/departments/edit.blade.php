@extends('admin.master')


@section('content')
    <?php// dd($department);
    ?>

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Department</h4>
                <p class="card-description">
                    <a href="{{ route('departments.index') }}" class="btn btn-success">Back</a>
                </p>
                <form class="forms-sample" enctype="multipart/form-data" action="{{ route('departments.update',$department->id ) }}" method="post">
                    @csrf
                    @method('put')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $department->name ?? old('name') }}">
                        @error('name')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Hod Id</label>
                        <select name="hodid" id="" class="form-control">
                            <option value="{{ $department->hod_id }}">{{ $department->hod_id }}</option>
                            @foreach ($hods as $hod)
                                <option value="{{ $hod->doctor_id }}">{{ $hod->doctor_id }}</option>
                            @endforeach
                        </select>
                        @error('hodid')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Block Id</label>
                        <select name="blockid" id="" class="form-control">
                        <option value="{{ $department->block_id }}">{{ $department->block_id }}</option>
                            @foreach ($blockids as $blockid)
                                <option value="{{ $blockid->blockcode }}">{{ $blockid->blockcode }}</option>
                            @endforeach
                        </select>
                        @error('blockid')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="image">Department Image</label>
                        <input type="file" class="form-control" id="name" name="image" value="{{ old('image') }}">
                        <img src="{{asset('department/images'.'/'.$department->photo_path )}}" alt="" srcset="">
                        @error('image')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                        <br>
                      <div>
                        <img src="{{ $department->photo_path }}" alt="" srcset="">
                      </div>
                    </div>


                    <div class="form-group">
                        <label for="Description">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" name="description" class="form-control" value="{{ $department->description }}">

              </textarea>
                        @error('description')
                            <span style="color:red !important;">{{ $message }}</span>
                        @enderror
                    </div>


               <div class="container">
                <button type="submit" class="btn btn-success me-2">update</button>
                <a href="{{ route('departments.index') }}" class="btn btn-light">Cancel</a>
               </div>
                </form>
            </div>
        </div>
    </div>
@endsection
