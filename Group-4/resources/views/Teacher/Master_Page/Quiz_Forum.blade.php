@extends('Teacher.Layout.Master_Layout')

@section('CSS')
<link rel="stylesheet" href="{{ asset('Css/Teacher/Quiz_Forum_Styles.css') }}">
@endsection


@section('Navigation')
    @include('Teacher.Component.NavigationBar')  
@endsection

@section('Teacher_Body')
    @include('Teacher.Master_Body.Forum_Body')
@endsection


@section('Fixed_Navigation')
    @include('Teacher.Component.Fixed_Navigation')
@endsection

@section('footer')
    @include('Teacher.Component.Footer')    
@endsection