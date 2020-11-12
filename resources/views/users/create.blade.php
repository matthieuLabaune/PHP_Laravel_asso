@extends('layout')

@section('content')

    {{-- Informations de suivi de la fiche membre/admin --}}
    <div class="container mx-auto">
        <div class="col-md-8 border border-2 rounded p-3">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                Fiche du membre n° ·
                {{-- @if($user->is_admin === '1')
                     <span
                         class="text text-success">Admin</span>
                 @else
                     <span
                         class="text text-danger">Membre</span>
                 @endif--}}
            </h2>
            <hr class="mb-4">
            <div>
                <h5>Informations de suivi</h5>
                <div class="row">
                    <div class="col-md-6">
                        <p class="text-muted"> Membre créé le : </p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-muted"> Modifié le : </p>
                    </div>
                </div>
            </div>
            <hr class="mb-4">

            <form action="{{ route('users.store')}}" method="POST">
                @csrf
                @method('POST')
                <div class="row">
                    {{-- CIVILITÉ --}}
                    <div class="form-group has-feedback col-md-6 mb-3">
                        <label>Rôle</label>
                        <div>
                            <input type="radio" id="membre" name="role" value="0">
                            <label for="membre">Membre</label><br>
                            <input type="radio" id="1" name="role" value="1">
                            <label for="admin">Admin</label><br>
                        </div>
                    </div>
                    <div class="form-group has-feedback col-md-6 mb-3">
                        <label>Civilité</label>
                        <div>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Monsieur</label><br>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Madame</label><br>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="first_name">Prénom</label>
                        <input type="text"
                               class="form-control"
                               id="first_name"
                               name="first_name"
                               placeholder="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="name">Nom</label>
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name"
                               placeholder="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="birthdate">Date de naissance</label>
                        <input type="text"
                               class="form-control"
                               id="birthdate"
                               name="birthdate"
                               placeholder="">
                    </div>
                </div>

                {{-- CONTACT --}}
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email">Adresse email</label>
                        <input type="text"
                               class="form-control"
                               id="email"
                               name="email"
                               placeholder="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="phone">Téléphone</label>
                        <input type="text"
                               class="form-control"
                               id="phone" name="phone"
                               placeholder="">
                    </div>
                </div>

                {{-- ADRESSE --}}
                <div class="mb-3">
                    <label for="address_1">Adresse</label>
                    <input type="text"
                           class="form-control"
                           id="address_1"
                           name="address_1"
                           placeholder="">
                </div>
                <div class="mb-3">
                    <label for="address_2">Complément d'adresse <span class="text-muted">(Optionnel)</span></label>
                    <input type="text"
                           class="form-control"
                           id="address_2"
                           name="address_2"
                           placeholder="">
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="city">Ville</label>
                        <input type="text"
                               class="form-control"
                               id="city"
                               name="city"
                               placeholder="">
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip_code">Code postal</label>
                        <input type="text"
                               class="form-control"
                               id="zip_code"
                               name="zip_code"
                               placeholder="">
                    </div>
                </div>
                {{-- BOUTON SUBMIT CRÉATION --}}
                <button class="btn btn-primary" type="submit">Valider les modifications</button>
            </form>
        </div>
    </div>

@endsection
