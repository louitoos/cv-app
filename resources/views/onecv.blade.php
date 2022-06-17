@extends('layouts.app')


@section('content')
    <h1>Mon cv</h1>
    <li>
        {{$cv->first_name}}
        {{$cv->last_name}}
        {{$cv->year}}
        {{$cv->gender}}
        {{$cv->degre}}
        {{$cv->experience}}
        {{$cv->phone}}
        {{$cv->email}}
    </li>
@endsection