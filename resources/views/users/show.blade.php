@extends('layout')

@section('content')

    {{-- Informations de suivi de la fiche membre/admin --}}
    <div class="container mx-auto">
        <div class="col-md-8 border rounded p-3">
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
            <form class="needs-validation" novalidate>
                <div class="row">
                        {{-- CIVILITÉ --}}
                        <div class="form-group has-feedback col-md-6 mb-3 ">
                            <label>Rôle</label>
                            <div>
                                @if($user->role == 1)
                                    <input type="radio" id="membre" name="role" value="0" disabled>
                                    <label for="membre">Membre</label><br>
                                    <input type="radio" id="1" name="role" value="1" checked="checked" disabled>
                                    <label for="admin">Admin</label><br>
                                @else
                                    <input type="radio" id="membre" name="role" value="0" checked="checked" disabled>
                                    <label for="membre">Membre</label><br>
                                    <input type="radio" id="1" name="role" value="1" disabled>
                                    <label for="admin">Admin</label><br>
                                @endif
                            </div>
                        </div>

                        <div class="form-group has-feedback col-md-6 mb-3">
                            <label>Civilité</label>
                            <div>
                                @if($user->gender == 'male')
                                    <input type="radio" id="male" name="gender" value="male" checked="checked" disabled>
                                    <label for="male">Monsieur</label><br>
                                    <input type="radio" id="female" name="gender" value="female" disabled>
                                    <label for="female">Madame</label><br>
                                @else
                                    <input type="radio" id="male" name="gender" value="male" disabled>
                                    <label for="male">Monsieur</label><br>
                                    <input type="radio" id="female" name="gender" value="female" checked="checked"
                                           disabled>
                                    <label for="female">Madame</label><br>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="first_name">Prénom</label>
                            <input type="text"
                                   class="form-control"
                                   id="first_name"
                                   value="{{$user->first_name}}"
                                   disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="name">Nom</label>
                            <input type="text"
                                   class="form-control"
                                   id="name"
                                   value="{{$user->name}}"
                                   disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="birthdate">Date de naissance</label>
                            <input type="text"
                                   class="form-control"
                                   id="birthdate"
                                   value="{{$user->birthdate}}"
                                   disabled>
                        </div>
                    </div>

                    {{-- CONTACT --}}
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email">Adresse email</label>
                            <input type="text" class="form-control"
                                   id="email"
                                   value="{{$user->email}}"
                                   disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone">Téléphone</label>
                            <input type="text"
                                   class="form-control"
                                   id="phone"
                                   value="{{$user->phone}}"
                                   disabled>
                        </div>
                    </div>

                    {{-- ADRESSE --}}
                    <div class="mb-3">
                        <label for="address_1">Adresse</label>
                        <input type="text"
                               class="form-control"
                               id="address_1"
                               value="{{$user->address_1}}"
                               disabled>
                    </div>
                    <div class="mb-3">
                        <label for="address_2">Complément d'adresse <span class="text-muted">(Optionnel)</span></label>
                        <input type="text"
                               class="form-control"
                               id="address_2"
                               value="{{$user->address_2}}"
                               disabled>
                    </div>
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="city">Ville</label>
                            <input type="text"
                                   class="form-control"
                                   id="city"
                                   value="{{$user->city}}"
                                   disabled>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip_code">Code postal</label>
                            <input type="text"
                                   class="form-control"
                                   id="zip_code"
                                   value="{{$user->zip_code}}"
                                   disabled>
                        </div>
                    </div>
            </form>

            {{-- BOUTONS EDITION ET DELETE --}}
            <hr class="mb-4">
            <div class="row">
                <div>
                    <a class="btn btn-primary m-3" href="{{route('users.edit', $user->id)}}" role="button">Modifier</a>
                </div>
                <div>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger m-3" role="button">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
