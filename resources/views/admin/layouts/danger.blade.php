@if ($message = Session::get('success'))
<div class="alert alert-danger">
    <p>{{ $message }}</p>
</div>
@endif