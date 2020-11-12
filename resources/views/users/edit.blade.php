@extends('layout')

@section('content')

    {{-- Informations de suivi de la fiche membre/admin --}}
    <div class="container mx-auto">
        <div class="col-md-8 border border-2 rounded p-3">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                Fiche du membre n° {{$user -> id }} ·
                @if($user->is_admin === '1')
                    <span
                        class="text text-success">Admin</span>
                @else
                    <span
                        class="text text-danger">Membre</span>
                @endif
            </h2>

            <hr class="mb-4">
            <div>
                <h5>Informations de suivi</h5>
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-muted"> Membre créé le : {{$user->created_at}} </p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted"> Modifié le : {{$user->updated_at}} </p>
                    </div>
                </div>
            </div>
            <hr class="mb-4">

            {{-- FORMULAIRE D'EDITION --}}
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">

                    {{-- CIVILITÉ --}}
                    <div class="form-group col-md-6 mb-3">
                        <label for="first_name">Prénom</label>
                        <input type="text"
                               class="form-control"
                               id="first_name"
                               name="first_name"
                               value="{{$user->first_name}}">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="name">Nom</label>
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name"
                               value="{{$user->name}}">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="birthdate">Date de naissance</label>
                        <input type="text"
                               class="form-control"
                               id="birthdate"
                               name="birthdate"
                               value="{{$user->birthdate}}">
                    </div>
                </div>

                {{-- CONTACT --}}
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="email">Adresse email</label>
                        <input type="text"
                               class="form-control"
                               id="email"
                               name="email"
                               value="{{$user->email}}">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="phone">Téléphone</label>
                        <input type="text"
                               class="form-control"
                               id="phone"
                               name="phone"
                               value="{{$user->phone}}">
                    </div>
                </div>

                {{-- ADRESSE --}}
                <div class="form-group mb-3">
                    <label for="address_1">Adresse</label>
                    <input type="text"
                           class="form-control"
                           id="address_1"
                           name="address_1"
                           value="{{$user->address_1}}">
                </div>
                <div class="form-group mb-3">
                    <label for="address_2">Complément d'adresse <span class="text-muted">(Optionnel)</span></label>
                    <input type="text"
                           class="form-control"
                           id="address_2"
                           name="address_2"
                           value="{{$user->address_2}}">
                </div>
                <div class="form-group row">
                    <div class="col-md-5 mb-3">
                        <label for="city">Ville</label>
                        <input type="text"
                               class="form-control"
                               id="city"
                               name="city"
                               value="{{$user->city}}">
                    </div>
                    <div class="form-group col-md-3 mb-3">
                        <label for="zip_code">Code postal</label>
                        <input type="text"
                               class="form-control"
                               id="zip_code"
                               name="zip_code"
                               value="{{$user->zip_code}}">
                    </div>
                </div>
                {{-- BOUTON SUBMIT --}}
                <button class="btn btn-primary" type="submit">Valider les modifications</button>
            </form>
        </div>
    </div>
@endsection
