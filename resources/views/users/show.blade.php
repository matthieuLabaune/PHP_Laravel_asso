@extends('layout')

@section('content')

    <!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
    <div class="container mx-auto">

        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:leading-9 sm:truncate">
                    Fiche membre n° {{$user -> id }}
                </h2>
                <div class="mt-1 flex flex-col sm:mt-0 sm:flex-row sm:flex-wrap">
                    <div class="mt-2 flex items-center text-sm leading-5 text-gray-500 sm:mr-6">
                        <!-- Heroicon name: briefcase -->
                        <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                            />
                        </svg>
                        Membre créé le : {{$user->created_at}}
                    </div>
                    <div class="mt-2 flex items-center text-sm leading-5 text-gray-500 sm:mr-6">
                        <!-- Heroicon name: location-marker -->
                        <svg class="h-6 w-6 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                        Dernière modification le : {{$user->updated_at}}
                    </div>
                </div>
            </div>
            <div class="mt-5 flex lg:mt-0 lg:ml-4">
    <span class="hidden sm:block shadow-sm rounded-md">
      <button type="button"
              class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:text-gray-800 active:bg-gray-50 transition duration-150 ease-in-out">
        <!-- Heroicon name: pencil -->
        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
             fill="currentColor">
          <path
              d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
        </svg>
        Modifier
      </button>
    </span>

                <span class="hidden sm:block ml-3 shadow-sm rounded-md">
      <button type="button"
              class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:text-gray-800 active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
        <!-- Heroicon name: link -->
        <svg class="-ml-1 mr-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
             fill="currentColor">
          <path fill-rule="evenodd"
                d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z"
                clip-rule="evenodd"/>
        </svg>
        Supprimer
      </button>
    </span>

                <!-- Dropdown -->
                <span class="ml-3 relative shadow-sm rounded-md sm:hidden">
      <button type="button"
              class="inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:shadow-outline focus:border-blue-300 transition duration-150 ease-in-out"
              id="mobile-menu" aria-haspopup="true">
        More
          <!-- Heroicon name: chevron-down -->
        <svg class="-mr-1 ml-2 h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
             fill="currentColor">
          <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"/>
        </svg>
      </button>

      <div class="origin-top-right absolute right-0 mt-2 -mr-1 w-48 rounded-md shadow-lg" aria-labelledby="mobile-menu"
           role="menu">
        <div class="py-1 rounded-md bg-white shadow-xs">
          <a href="#"
             class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
             role="menuitem">Edit</a>
          <a href="#"
             class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
             role="menuitem">View</a>
        </div>
      </div>
    </span>
            </div>
        </div>

        <div class="hidden sm:block">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name"
                                               class="block text-sm font-medium leading-5 text-gray-700">Nom</label>
                                        <input id="name"
                                               class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                               value="{{$user->name}}" disabled>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="last_name"
                                               class="block text-sm font-medium leading-5 text-gray-700">Prénom</label>
                                        <input id="first_name"
                                               class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                               value="{{$user->first_name}}" disabled>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="first_name"
                                               class="block text-sm font-medium leading-5 text-gray-700">Date de
                                            naissance</label>
                                        <input id="name"
                                               class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                               value="{{$user->birthdate}}" disabled>
                                    </div>
                                </div>

                                <div class="grid grid-cols-6 gap-6 mt-5">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email"
                                               class="block text-sm font-medium leading-5 text-gray-700">Adresse
                                            email</label>
                                        <input id="email"
                                               class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                               value="{{$user->email}}" disabled>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="phone"
                                               class="block text-sm font-medium leading-5 text-gray-700">Téléphone</label>
                                        <input id="phone"
                                               class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                               value="{{$user->phone}}" disabled>
                                    </div>
                                </div>

                                <div class="grid grid-cols-6 gap-6 mt-5">
                                    <div class="col-span-6">
                                        <label for="address_1"
                                               class="block text-sm font-medium leading-5 text-gray-700">Adresse postale</label>
                                        <input id="address_1"
                                               class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                               value="{{$user->address_1}}" disabled>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="address_2"
                                               class="block text-sm font-medium leading-5 text-gray-700">Complément
                                            d'adresse</label>
                                        <input id="address_2"
                                               class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                               value="{{$user->address_2}}" disabled>
                                    </div>

                                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                        <label for="city"
                                               class="block text-sm font-medium leading-5 text-gray-700">Ville</label>
                                        <input id="city"
                                               class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                               value="{{$user->city}}" disabled>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                        <label for="zip_code" class="block text-sm font-medium leading-5 text-gray-700">Code
                                            postal</label>
                                        <input id="zip_code"
                                               class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                               value="{{$user->zip_code}}" disabled>
                                    </div>

                                </div>
                            </div>
                            {{-- <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                 <button
                                     class="py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-500 focus:outline-none focus:shadow-outline-blue active:bg-indigo-600 transition duration-150 ease-in-out">
                                     Save
                                 </button>
                             </div>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
