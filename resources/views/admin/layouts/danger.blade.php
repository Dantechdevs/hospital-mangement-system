@if ($message = Session::get('danger'))
<div class="alert alert-danger">
    <p>{{ $message }}</p>
</div>
@endif