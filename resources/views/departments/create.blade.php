     @extends('admin.master')


     @section('content')
     <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

         <?php //dd($blockids);
         ?>

         <div class="col-md-12 grid-margin stretch-card">
             <div class="card">
                 <div class="card-body">
                     <h4 class="card-title">Create Department</h4>
                     <p class="card-description">
                         <a href="{{ route('departments.index') }}" class="btn btn-success">Back</a>
                     </p>
                     <form class="forms-sample" enctype="multipart/form-data" action="{{ route('departments.store') }}" method="post">
                         @csrf

                         <div class="form-group">
                             <label for="name">Name</label>
                             <input type="text" class="form-control" name="name" id="name"
                                 value="{{ old('name') }}">
                             @error('name')
                                 <span style="color:red !important;">{{ $message }}</span>
                             @enderror
                         </div>

                         <div class="form-group">
                             <label for="hod">Hod Id</label>
                             <select name="hodid" id="" class="form-control">
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
                             <input type="file" class="form-control" id="name"name="image" value="{{ old('image') }}">
                             @error('image')
                                 <span style="color:red !important;">{{ $message }}</span>
                             @enderror
                         </div>


                         <div class="form-group">
                             <label for="Description">Description</label>
                             <textarea name="description" id="editor" cols="30" rows="10" name="description" class="form-control">

                   </textarea id="editor">
                             @error('description')
                                 <span style="color:red !important;">{{ $message }}</span>
                             @enderror
                         </div>


                         <button type="submit" class="btn btn-primary me-2">Create</button>
                         <a href="{{ route('departments.index') }}" class="btn btn-light">Cancel</a>
                     </form>
                 </div>
             </div>
         </div>
         <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
     @endsection
