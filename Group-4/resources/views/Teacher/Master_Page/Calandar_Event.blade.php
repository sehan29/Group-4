@extends('Teacher.Layout.Master_Layout')

@section('CSS')
<link rel="stylesheet" href="{{ asset('Css/Teacher/Calandar_Styles.css') }}">
@endsection

@section('Navigation')
    @include('Teacher.Component.NavigationBar')  
@endsection

@section('Header')
    @include('Teacher.Component.Calandar_Event_Header')
@endsection

@section('Teacher_Body')
    @include('Teacher.Master_Body.Calandar_Event')
@endsection


@section('Fixed_Navigation')
    @include('Teacher.Component.Fixed_Navigation')
@endsection

@section('footer')
    @include('Teacher.Component.Footer')    
@endsection