@extends('layouts.app')

@section('content')

    <div class="bg-light">

        <!-- HERO -->
        @include('gdpr.hero')
        
        <!-- CONTENT -->
        @include('gdpr.content')

    </div>

    @include('footer')
@endsection
