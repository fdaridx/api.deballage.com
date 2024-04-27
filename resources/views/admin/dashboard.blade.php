@extends('admin.app')
@section('content')
<p>User : {{ Auth::user() }}</p>

@endsection