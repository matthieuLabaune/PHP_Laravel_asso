<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Création de fiche adhérent') }}
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
                                 class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-700 active:bg-blue-700 transition duration-150 ease-in-out"
                                 href="{{route('users.show', $user->id)}}">
                                  <svg class="svg-icon -ml-1 mr-2 h-5 w-5 text-white"
                                       viewBox="0 0 20 20"
                                       fill="currentColor">
							        <path
                                        d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z"></path>
                                  </svg>

                                Retour à la fiche
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
                        {{-- FORMULAIRE D'EDITION --}}
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                {{-- CIVILITÉ --}}
                                <div class="form-group has-feedback col-md-6 mb-3 ">
                                    <label>Rôle</label>
                                    <div>
                                        @if($user->role == 1)
                                            <input type="radio" id="membre" name="role" value="0">
                                            <label for="membre">Membre</label><br>
                                            <input type="radio" id="1" name="role" value="1" checked="checked">
                                            <label for="admin">Admin</label><br>
                                        @else
                                            <input type="radio" id="membre" name="role" value="0" checked="checked">
                                            <label for="membre">Membre</label><br>
                                            <input type="radio" id="1" name="role" value="1">
                                            <label for="admin">Admin</label><br>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group has-feedback col-md-6 mb-3">
                                    <label>Civilité</label>
                                    <div>
                                        @if($user->gender == 'male')
                                            <input type="radio" id="male" name="gender" value="male" checked="checked">
                                            <label for="male">Monsieur</label><br>
                                            <input type="radio" id="female" name="gender" value="female">
                                            <label for="female">Madame</label><br>
                                        @else
                                            <input type="radio" id="male" name="gender" value="male">
                                            <label for="male">Monsieur</label><br>
                                            <input type="radio" id="female" name="gender" value="female"
                                                   checked="checked">
                                            <label for="female">Madame</label><br>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label for="first_name">Prénom</label>
                                    <input type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           id="first_name"
                                           name="first_name"
                                           value="{{$user->first_name}}">
                                    @error('first_name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label for="name">Nom</label>
                                    <input type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           id="name"
                                           name="name"
                                           value="{{$user->name}}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label for="birthdate">Date de naissance</label>
                                    <input type="text"
                                           class="form-control @error('birthdate') is-invalid @enderror"
                                           id="birthdate"
                                           name="birthdate"
                                           value="{{$user->birthdate}}">
                                    @error('birthdate')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- CONTACT --}}
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label for="email">Adresse email</label>
                                    <input type="text"
                                           class="form-control  @error('email') is-invalid @enderror"
                                           id="email"
                                           name="email"
                                           value="{{$user->email}}">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label for="phone">Téléphone</label>
                                    <input type="text"
                                           class="form-control  @error('phone') is-invalid @enderror"
                                           id="phone"
                                           name="phone"
                                           value="{{$user->phone}}">
                                    @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- ADRESSE --}}
                            <div class="form-group mb-3">
                                <label for="address_1">Adresse</label>
                                <input type="text"
                                       class="form-control  @error('address_1') is-invalid @enderror"
                                       id="address_1"
                                       name="address_1"
                                       value="{{$user->address_1}}">
                                @error('address_1')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
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
                                           class="form-control  @error('city') is-invalid @enderror"
                                           id="city"
                                           name="city"
                                           value="{{$user->city}}">
                                    @error('city')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-3 mb-3">
                                    <label for="zip_code">Code postal</label>
                                    <input type="text"
                                           class="form-control  @error('zip_code') is-invalid @enderror"
                                           id="zip_code"
                                           name="zip_code"
                                           value="{{$user->zip_code}}">
                                    @error('zip_code')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="font-bold leading-7 text-gray-900 sm:text-2xl mt-3">Adhésion(s)</div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="field">
                                        <label class="label">Catégorie</label>
                                        <div class="select">
                                            <select name="cats[]">
                                                @foreach($licenses as $license)
                                                    <option
                                                        value="{{ $license->id }}" {{ in_array($license->id, old('cats') ?: $user->licenses->pluck('id')->all()) ? 'selected' : '' }}>{{ $license->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                @foreach($user->licenses as $license)
                                    <div class="col-md-3">
                                        <label for="created_at">Durée <span class="text-muted">(en {{ $license->unity }})</span></label>
                                        <input type="text"
                                               class="form-control"
                                               id="created_at"
                                               value="{{ $license->duration }}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="created_at">Prix <span class="text-muted">(€)</span></label>
                                        <input type="text"
                                               class="form-control"
                                               id="price"
                                               name="price"
                                               value="{{ $license->price }}">
                                    </div>
                                @endforeach
                                {{--   {{ dd($license->pivot->payment_type) }}--}}
                               {{-- <div class="col-md-3">
                                    <div class="col-md-3">
                                        <div class="field">
                                            <label class="label">Payement</label>
                                            <div class="select">
                                                <select name="cats[]">
                                                    @foreach($user->licenses as $license)
                                                        <option
                                                            value="{{ $license->id }}" {{ in_array($license->id, old('cats') ?: $user->licenses->pluck('id')->all()) ? 'selected' : '' }}>{{ $license->pivot->payment_type }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                            </div>


                            <div class="col-md-6 mt-3 mb-3">
                                {{-- BOUTON SUBMIT --}}
                                <button
                                    class="btn inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:shadow-outline-green focus:border-green-700 active:bg-green-700 transition duration-150 ease-in-out"
                                    type="submit">
                                    Valider les modifications
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
