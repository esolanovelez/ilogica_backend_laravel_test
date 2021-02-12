@extends('layouts.app')

@section('content')
    @include('navegation')
    
        <!-- HERO -->
        @include('home.hero')

        <!-- CONTENT -->
        @include('home.content')

    @include('footer')
@endsection
