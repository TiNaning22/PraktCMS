@extends('layouts.main')

@section('contents')
    <h1>Wellcome Back, {{ auth()->user()->name }}</h1>
@endsection