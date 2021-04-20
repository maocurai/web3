@if($errors->any())
    <div class="container alert alert-danger mt-5">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif
@if(session('success'))
<div class="container alert alert-success mt-5">
{{ session('success') }}
</div>
@endif
@if(session('error'))
<div class="container alert alert-danger mt-5">
{{ session('error') }}
</div>
@endif