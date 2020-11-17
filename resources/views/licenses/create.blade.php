<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Création d\'une license') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                {{-- Informations de suivi de la fiche membre/admin --}}
                <div class="container mx-auto">
                    <div class="col-md-8 border border-2 rounded p-3">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                            Fiche de licence n° ·
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
                                    <p class="text-muted"> Créée le : </p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-muted"> Modifiée le : </p>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">

                        <form action="{{ route('licenses.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="name">Nom</label>
                                    <input type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           id="name"
                                           name="name"
                                           value="{{ old('name') }}">
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="price">Prix</label>
                                    <input type="text"
                                           class="form-control @error('price') is-invalid @enderror"
                                           id="price"
                                           name="price"
                                           value="{{ old('price') }}">
                                    @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="duration">Durée</label>
                                    <input type="text"
                                           class="form-control @error('duration') is-invalid @enderror"
                                           id="duration"
                                           name="duration"
                                           value="{{ old('duration') }}">
                                    @error('duration')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            {{-- BOUTON SUBMIT --}}
                            <button class="btn btn-primary" type="submit">Valider les modifications</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
