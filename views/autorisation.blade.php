@extends('app')

@section('title')
Autorisation
@endsection

@section('content')

<div class="container">
<h1>Autorisation page</h1>
<form action="{{ route('autorisation-form') }}" method="post">
    @csrf 
    <!-- защищенный ключ -->
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="text" name="email" placeholder="Enter email" id="name" class="form-control">
        <label for="Email">Password</label>
        <input type="text" name="password" placeholder="Enter password" id="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
@endsection