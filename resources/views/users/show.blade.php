<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fiche adhérent') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="lg:flex lg:items-center lg:justify-between p-3 m-3">
                    <div class="flex-1 min-w-0">
                        {{--<-- TITRE DE LA FICHE ->>--}}
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                            Fiche n° {{$user -> id }} ·
                            @if($user->is_admin === '1')
                                <span
                                    class="text text-success">Admin</span>
                            @else
                                <span
                                    class="text text-danger">Adhérent</span>
                            @endif
                        </h2>
                        {{--<-- INFORMATIONS DE SUIVI ->>--}}
                        <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap">
                            <div class="mt-2 flex items-center text-sm leading-5 text-gray-500 sm:mr-6">
                                <!-- Heroicon name: briefcase -->
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400"
                                     xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                          clip-rule="evenodd"/>
                                </svg>
                                Fiche créée le : {{$user->created_at}}
                            </div>
                            <div class="mt-2 flex items-center text-sm leading-5 text-gray-500 sm:mr-6">
                                <!-- Heroicon name: location-marker -->
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-purple-700"
                                     xmlns="http://www.w3.org/2000/svg"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                                </svg>
                                Fiche modifiée le : {{$user->updated_at}}
                            </div>
                        </div>
                    </div>

                    {{--<-- BOUTONS DE MODIFICATION ET DE SUPPRESSION ->>--}}
                    <div class="mt-5 flex lg:mt-0 lg:ml-4">
                        <span class="hidden sm:block shadow-sm rounded-md">
                              <a type="button"
                                 class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-purple-600 hover:bg-purple-500 focus:outline-none focus:shadow-outline-purple focus:border-purple-700 active:bg-purple-700 transition duration-150 ease-in-out"
                                 href="{{route('users.edit', $user->id)}}">
                                <!-- Heroicon name: pencil -->
                                <svg class="-ml-1 mr-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20"
                                     fill="currentColor">
                                  <path
                                      d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                                </svg>
                                Édition
                              </a>
                        </span>
                        <span class="sm:ml-3 shadow-sm rounded-md">

                             <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                @csrf
                                 @method('DELETE')
                                  <button type="submit"
                                          role="button"
                                          class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:shadow-outline-red focus:border-red-700 active:bg-red-700 transition duration-150 ease-in-out">
                                      <svg class="-ml-1 mr-2 h-5 w-5"
                                           xmlns="http://www.w3.org/2000/svg"
                                           fill="none"
                                           viewBox="0 0 24 24"
                                           stroke="currentColor">
                                      <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                    Suppression
                                  </button>
                             </form>
                        </span>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="container m-5">
                    <div class="col-md-8 border border-2 rounded p-3">
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
                                            <input type="radio" id="membre" name="role" value="0" checked="checked"
                                                   disabled>
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
                                            <input type="radio" id="male" name="gender" value="male" checked="checked"
                                                   disabled>
                                            <label for="male">Monsieur</label><br>
                                            <input type="radio" id="female" name="gender" value="female" disabled>
                                            <label for="female">Madame</label><br>
                                        @else
                                            <input type="radio" id="male" name="gender" value="male" disabled>
                                            <label for="male">Monsieur</label><br>
                                            <input type="radio" id="female" name="gender" value="female"
                                                   checked="checked"
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
                            <div>
                                <h2>Adhésion(s) :</h2>
                                <ul>
                                    @foreach($user->licenses as $license)
                                        <li>{{ $license->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</x-app-layout>
