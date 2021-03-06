@extends('app')

@section('title')
Comment
@endsection

@section('content')
<div class="container">
<h1>Comment page</h1>
@foreach($data as $el)
<div class="media text-muted pt-3">
    <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_178e5f35649%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_178e5f35649%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2211.5390625%22%20y%3D%2216.9%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
    <strong class="d-block text-gray-dark">{{ $el->name }}</strong>
    {{ $el->text }}
    </p>
</div>
@endforeach

<h2 class="mt-5">Add comment</h2>
<form action="{{ route('comment-form') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="Email">User name</label>
        <input type="text" name="name" placeholder="Enter your user name" id="name" class="form-control">
        <label for="text">Comment</label>
        <textarea name="text" id="text" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Send</button>
</form>
</div>
@endsection