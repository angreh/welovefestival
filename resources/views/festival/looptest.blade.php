@extends('layouts.master')

@section('content')
    @foreach ($names_varlay as $user)
        <p>This is user {{ $user }}!<br /></p>
    @endforeach
@endsection