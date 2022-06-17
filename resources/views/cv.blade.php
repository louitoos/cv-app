@extends('layouts.app')

@section('content')
    <div class='section'>
        <h1>Creation de cv</h1>
    </div>

    <form action="{{route('creation')}}" method="POST">
        {{ csrf_field() }}
        <section name="infos">
            <div>
                Description
            </div>
            <br>
            <div id="div_nom">
                <div class="">
                    Nom
                    <span class="">(Obligatoire)</span>
                </div>
            </div>
            <div class="w-75">
                <input name="name" type="text" isrequired="true">
                    @if($errors->has('name'))
                        <p>{{ $errors->first('name')}}</p>
                    @endif 
            </div>
            <br>
            <div id="div_prénom">
                <div class="">
                    Prénom
                    <span class="">(Obligatoire)</span>
                </div>
            </div>
            <div class="w-75">
                <input name="prenom"  type="text" isrequired="true">
                    @if($errors->has('prenom'))
                        <p>{{ $errors->first('prenom')}}</p>
                    @endif 
            </div>
            <br>
            <div class="">
                Age
                <span class="">(Obligatoire)</span>
            </div>
            <div class="w-75">
                <input name="age" type="text" isrequired="true">
                    @if($errors->has('age'))
                        <p>{{ $errors->first('age')}}</p>
                    @endif 
            </div>
            <br>
            <div id="id_civilite" class="">
                <div class="">
                    Civilité
                    <span class="">(Obligatoire)</span>
                </div>
                <div class="w-75">
                    <input  tab_index="0" type="radio" name="civilité" value="Mr" isrequired="true">
                    Mr
                    <input  tab_index="0" type="radio" name="civilité" value="Mme" isrequired="true">
                    Mme
                </div>
            </div>
            <br>
            <div id="id_diplome">
                <div class="">
                    Dernier diplome obtenue
                    <span class="">(Obligatoire)</span>
                </div>
                <div class="w-75">
                    <input name="diplome" type="text" isrequired="true">
                        @if($errors->has('diplome'))
                            <p>{{ $errors->first('diplome')}}</p>
                        @endif 
                </div>
            </div>
            <br>
       <!--experience-->
            <div>
                Expérience
            </div>
            <br>
            <div id="experience">
                <div class="">
                    Expérience pro
                    <span class="">(Obligatoire)</span>
                </div>
                <div class="w-75">
                    <textarea name="experience" isrequired="true" style="width: 580px; height: 120px;"></textarea>
                        @if($errors->has('experience'))
                            <p>{{ $errors->first('experience')}}</p>
                        @endif 
                </div>
            </div>
        
            <br>
        <!--contact-->
            <div>
                Contact
            </div>
            <br>
            <div id="id_mail">
                <div class="">
                    Adresse mail
                    <span class="">(Obligatoire)</span>
                </div>
                <div class="w-75">
                    <input name="email" type="email" isrequired="true">
                        @if($errors->has('email'))
                            <p>{{ $errors->first('email')}}</p>
                        @endif 
                </div>
            </div>
            <div id="id_tel">
                <div class="">
                    Numéro de téléphone
                    <span class="">(Obligatoire)</span>
                </div>
                <div class="w-75">
                    <input name="tel" type="text" isrequired="true">
                        @if($errors->has('tel'))
                            <p>{{ $errors->first('tel')}}</p>
                        @endif 
                </div>
            </div>
        </section>
        <br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection