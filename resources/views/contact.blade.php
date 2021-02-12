@extends('layouts.app')

@section('content')

    <div class="bg-light">

        <!-- HERO -->
        @include('contact.hero')
        
        <!-- CONTENT -->
        @include('contact.content')

    </div>

    @include('footer')
@endsection
