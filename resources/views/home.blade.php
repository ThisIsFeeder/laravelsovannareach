@extends('master')

@section('content-header')
    {{-- @include('layouts.master.dashboard.dashboard-content-header') --}}
@endsection
@section('content')
    {{-- @include('layouts.master.dashboard.dashboard-content') --}}
    @include('category.category')
@endsection