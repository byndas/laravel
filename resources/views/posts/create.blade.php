@extends('layouts.app');

@section('title', 'Create the post')

@section('content')
{{-- don't ever create actions that save, modify, or delete data on behalf of the user using the GET http verb since that is the easiest way to be hacked --}}
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @include('posts.partials.form')
    <div><input type="submit" value="Create" class="btn btn-primary btn-block"></div>

</form>
@endsection
