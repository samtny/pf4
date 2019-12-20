@extends('layouts.default')

@section('title', 'Home')

@section('breadcrumb')
    {{ Breadcrumbs::render('home') }}
@endsection

@section('content')
    <h1>Home</h1>
@endsection
