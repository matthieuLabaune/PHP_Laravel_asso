@extends('layout')

@section('content')

    <div>
        <h1>Liste des membres de l'association </h1>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>N°</th>
                    <th></th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Adresse email</th>
                    <th>Téléphone</th>
                    <th>Ville</th>
                    <th>Code postal</th>
                    <th>Adresse</th>
                    <th>Rôle</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user -> id}}</td>
                        <td>
                            @if($user->gender === 'male')
                                <div class="text-sm leading-5 text-gray-900"> Mr</div>
                            @else
                                <div class="text-sm leading-5 text-gray-900"> Mme</div>
                            @endif
                        </td>
                        <td>{{$user -> name}}</td>
                        <td>{{$user->first_name}}</td>
                        <td>{{ $user-> birthdate}}</td>
                        <td>{{ $user-> email}}</td>
                        <td>{{ $user-> phone}}</td>
                        <td> {{ $user-> city }}</td>
                        <td> {{ $user-> zip_code }}</td>
                        <td>{{ $user-> address_1}}</td>
                        <td>
                            @if($user->is_admin === '1')
                                <span
                                    class="text text-success">Admin</span>
                            @else
                                <span
                                    class="text text-danger">Membre</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('users.show', $user->id)}}"
                               class="text">Voir</a>
                            <a href="{{route('users.edit', $user->id)}}" class="text">Éditer</a>
                            <a href="#" class="text">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

