@extends('app')

@section('title')
Registration
@endsection

@section('content')
<div class="container">
<h1>Registration page</h1>
<form action="{{ route('registration-form') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="Email">User name</label>
        <input type="text" name="name" placeholder="Enter your user name" id="name" class="form-control">
        <label for="Email">Email</label>
        <input type="text" name="email" placeholder="Enter email" id="name" class="form-control">
        <label for="Email">Password</label>
        <input type="text" name="password" placeholder="Enter password" id="password" class="form-control">
        <label for="Email">Repeate password</label>
        <input type="text" name="passwordRepeate" placeholder="Repeate password" id="passwordRepeate" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Sign up</button>
</form>
</div>
@endsection