@extends('layouts.app')


@section('content')
    {{-- @if($errors->any())
        {{var_dump($errors)}}
    @endif --}}
    <form method="POST" action="{{route('formulaire')}}">
        {{ csrf_field() }}

        <p> <input type="email" name="email" placeholder="email" value="{{old('email')}}"></p>
        @if($errors->has('email'))
            <p>{{ $errors->first('email')}}</p>
        @endif

        <p> <input type="text" name="name" placeholder="Pseudo" value="{{old('name')}}"></p>
        @if($errors->has('name'))
        <p>{{ $errors->first('name')}}</p>
        @endif

        <p> <input type="password" name="password" placeholder="mot de passe" value="{{old('password')}}"></p>
        @if($errors->has('password'))
            <p>{{ $errors->first('password')}}</p>
        @endif

        <p> <input type="submit" value="Connexion"></p>

    </form>
@endsection