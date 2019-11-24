@extends('layout')

@section('content')
@foreach($users as $user)
{{$user->email}}
{{$user->password}}
{{$user->nature}}
{{user->grade}}
@endforeach
@endsection