@extends('layout.master')

@section('content')

 @include('layout.navigation')
        @include('layout.header')
        @include('layout.portfoliogrid')
        @include('layout.about')
        @include('layout.contact')
        @include('layout.portfoliomodal')
        @include('layout.footer')

@endsection
       
