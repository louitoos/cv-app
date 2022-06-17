@extends('layouts.app')


@section('content')
    <h1>Mes cv</h1>
    <ol>
        @foreach ($cvs as $cv)
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
        @endforeach
    </ol>
@endsection