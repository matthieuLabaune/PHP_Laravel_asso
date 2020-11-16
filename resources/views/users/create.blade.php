<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Création de fiche adhérent') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

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

                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                {{-- CIVILITÉ --}}
                                <div class="form-group has-feedback col-md-6 mb-3">
                                    <label>Rôle</label>
                                    <div>
                                        <input type="radio" id="membre" name="role" value="0"
                                               class="@error('role') is-invalid @enderror">
                                        <label for="membre">Membre</label><br>
                                        <input type="radio" id="membre" name="role" value="1"
                                               class="@error('role') is-invalid @enderror">
                                        <label for="admin">Admin</label><br>
                                        @error('role')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group has-feedback col-md-6 mb-3">
                                    <label>Civilité</label>
                                    <div>
                                        <input type="radio" id="male" name="gender" value="male"
                                               class="@error('gender') is-invalid @enderror">
                                        <label for="male">Monsieur</label><br>
                                        <input type="radio" id="female" name="gender" value="female"
                                               class="@error('gender') is-invalid @enderror">
                                        <label for="female">Madame</label><br>
                                        @error('gender')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="first_name">Prénom</label>
                                    <input type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           id="first_name"
                                           name="first_name"
                                           placeholder="Macron"
                                           value="{{ old('first_name') }}">
                                    @error('first_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="name">Nom</label>
                                    <input type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           id="name"
                                           name="name"
                                           placeholder="Emmanuel"
                                           value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="birthdate">Date de naissance</label>
                                    <input type="text"
                                           class="form-control @error('birthdate') is-invalid @enderror"
                                           id="birthdate"
                                           name="birthdate"
                                           placeholder="21/12/1977"
                                           value="{{ old('birthdate') }}">
                                    @error('birthdate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- CONTACT --}}
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email">Adresse email</label>
                                    <input type="text"
                                           class="form-control @error('email') is-invalid @enderror"
                                           id="email"
                                           name="email"
                                           placeholder="manuel42@msn.fr"
                                           value="{{ old('email') }}">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone">Téléphone</label>
                                    <input type="text"
                                           class="form-control @error('phone') is-invalid @enderror"
                                           id="phone" name="phone"
                                           placeholder="08 15 16 23 42"
                                           value="{{ old('phone') }}">
                                    @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- ADRESSE --}}
                            <div class="mb-3">
                                <label for="address_1">Adresse</label>
                                <input type="text"
                                       class="form-control @error('address_1') is-invalid @enderror"
                                       id="address_1"
                                       name="address_1"
                                       placeholder="55 Rue du Faubourg Saint-Honoré"
                                       value="{{ old('address_1') }}">
                                @error('address_1')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="address_2">Complément d'adresse <span class="text-muted">(Optionnel)</span></label>
                                <input type="text"
                                       class="form-control"
                                       id="address_2"
                                       name="address_2"
                                       placeholder="Bureau de l'Élysée"
                                       value="{{ old('address_2') }}">
                            </div>
                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="city">Ville</label>
                                    <input type="text"
                                           class="form-control @error('city') is-invalid @enderror"
                                           id="city"
                                           name="city"
                                           placeholder="Paris"
                                           value="{{ old('city') }}">
                                    @error('city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip_code">Code postal</label>
                                    <input type="text"
                                           class="form-control @error('zip_code') is-invalid @enderror"
                                           id="zip_code"
                                           name="zip_code"
                                           placeholder="75008"
                                           value="{{ old('zip_code') }}">
                                    @error('zip_code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            {{-- BOUTON SUBMIT CRÉATION --}}
                            <button class="btn btn-primary" type="submit">Valider les modifications</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
