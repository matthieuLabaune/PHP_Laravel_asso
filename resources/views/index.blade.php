@extends('layout')

@section('content')


    <!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
    <div class="container mx-auto">
        <h1>Liste des membres de l'association </h1>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">

                    <span class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"></span>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
                                Identité
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
                                Contact
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
                                Coordonnées postales
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">
                                Rôle
                            </th>
                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-700 uppercase tracking-wider">

                            </th>
                            <th class="px-6 py-3 bg-gray-50"></th>
                        </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            @if($user->gender === 'male')
                                                <div class="text-sm leading-5 text-gray-900"> Mr</div>
                                            @else
                                                <div class="text-sm leading-5 text-gray-900"> Mme</div>
                                            @endif

                                            {{--<img class="h-10 w-10 rounded-full"
                                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60"
                                                 alt="">--}}
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm leading-5 font-medium text-gray-900">
                                                {{$user -> name}} {{$user->first_name}}
                                            </div>
                                            <div class="text-sm leading-5 text-gray-500">
                                                {{$user->first_name}}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="text-sm leading-5 text-gray-900"> {{ $user-> email}}</div>
                                    <div class="text-sm leading-5 text-gray-900">{{ $user-> phone}}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap">
                                    {{--                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    </span>--}}
                                    <div class="text-sm leading-5 text-gray-900">    {{ $user-> city }}
                                        - {{ $user-> zip_code }}  </div>
                                    <div class="text-sm leading-5 text-gray-900">{{ $user-> address_1}}</div>

                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
                                    @if($user->is_admin === '1')
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-300 text-green-800"> Admin </span>
                                    @else
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-300 text-green-800"> Membre </span>
                                    @endif

                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                                    <a href="{{route('users.show', $user->id)}}" class="text-indigo-600 hover:text-indigo-900">Voir</a>
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Editer</a>
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Supprimer</a>
                                </td>
                            </tr>
                            <!-- More rows... -->
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

