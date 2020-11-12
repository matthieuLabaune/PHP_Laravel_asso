@extends('layout')

@section('content')

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

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="first_name">Prénom</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder=""
                               value="{{$user->first_name}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder=""
                               value="{{$user->name}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="birthdate">Date de naissance</label>
                        <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="" value="{{$user->birthdate}}">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="email">Adresse email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder=""
                               value="{{$user->email}}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="phone">Téléphone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder=""
                               value="{{$user->phone}}">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address_1">Adresse</label>
                    <input type="text" class="form-control" id="address_1" name="address_1" placeholder=""
                           value="{{$user->address_1}}">
                </div>

                <div class="mb-3">
                    <label for="address_2">Complément d'adresse <span class="text-muted">(Optionnel)</span></label>
                    <input type="text" class="form-control" id="address_2" name="address_2" placeholder=""
                           value="{{$user->address_2}}">
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="city">Ville</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder=""
                               value="{{$user->city}}">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="zip_code">Code postal</label>
                        <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder=""
                               value="{{$user->zip_code}}">
                    </div>
                </div>
                <button class="btn btn-success btn-lg btn-block" type="submit">Enregistrer les modifications</button>
            </form>
        </div>
    </div>

@endsection
