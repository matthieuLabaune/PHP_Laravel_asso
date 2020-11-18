<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Index des licenses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="m-2">
                    <div class="col-md-3 mt-3 mb-3">
                        <a class="btn bg-green-300 hover:bg-green-200 text-gray-800 font-semibold py-2 px-4 rounded shadow"
                           href="{{route('licenses.create')}}"
                           role="button">Nouveau type de licence</a>
                    </div>

                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead>
                                        <tr>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                N°
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Nom
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Prix
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Durée
                                            </th>
                                            <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Adhérents
                                            </th>
                                            {{--<<th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                Adhésion
                                            </th>--}}
                                            <th class="px-6 py-3 bg-gray-50"></th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($licenses as $license)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    {{$license->id}}
                                                </td>

                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    {{$license->name}}
                                                </td>

                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    {{$license->price}}
                                                </td>

                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    {{$license->duration}} {{$license->unity}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-no-wrap">
                                                    @foreach($license->users as $user)
                                                        <a href=" {{route('users.show', $user->id)}}"> {{ $user->name }} </a>
                                                        ;
                                                    @endforeach
                                                </td>

                                                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 lg:focus:font-light">
                                                    <div class="inline-flex">
                                                        <a class="btn bg-blue-200 hover:bg-blue-700 text-gray-800  rounded-full shadow mr-1"
                                                           href="{{route('licenses.show', $license->id)}}">
                                                            <svg class="fill-current w-4 h-4" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M18.125,15.804l-4.038-4.037c0.675-1.079,1.012-2.308,1.01-3.534C15.089,4.62,12.199,1.75,8.584,1.75C4.815,1.75,1.982,4.726,2,8.286c0.021,3.577,2.908,6.549,6.578,6.549c1.241,0,2.417-0.347,3.44-0.985l4.032,4.026c0.167,0.166,0.43,0.166,0.596,0l1.479-1.478C18.292,16.234,18.292,15.968,18.125,15.804 M8.578,13.99c-3.198,0-5.716-2.593-5.733-5.71c-0.017-3.084,2.438-5.686,5.74-5.686c3.197,0,5.625,2.493,5.64,5.624C14.242,11.548,11.621,13.99,8.578,13.99 M16.349,16.981l-3.637-3.635c0.131-0.11,0.721-0.695,0.876-0.884l3.642,3.639L16.349,16.981z"></path>
                                                            </svg>
                                                        </a>
                                                        <a class="btn bg-purple-200 hover:bg-purple-700 text-gray-800 rounded-full shadow mr-1"
                                                           href="{{route('licenses.edit', $license->id)}}">
                                                            <svg class="fill-current w-4 h-4" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M8.749,9.934c0,0.247-0.202,0.449-0.449,0.449H4.257c-0.247,0-0.449-0.202-0.449-0.449S4.01,9.484,4.257,9.484H8.3C8.547,9.484,8.749,9.687,8.749,9.934 M7.402,12.627H4.257c-0.247,0-0.449,0.202-0.449,0.449s0.202,0.449,0.449,0.449h3.145c0.247,0,0.449-0.202,0.449-0.449S7.648,12.627,7.402,12.627 M8.3,6.339H4.257c-0.247,0-0.449,0.202-0.449,0.449c0,0.247,0.202,0.449,0.449,0.449H8.3c0.247,0,0.449-0.202,0.449-0.449C8.749,6.541,8.547,6.339,8.3,6.339 M18.631,4.543v10.78c0,0.248-0.202,0.45-0.449,0.45H2.011c-0.247,0-0.449-0.202-0.449-0.45V4.543c0-0.247,0.202-0.449,0.449-0.449h16.17C18.429,4.094,18.631,4.296,18.631,4.543 M17.732,4.993H2.46v9.882h15.272V4.993z M16.371,13.078c0,0.247-0.202,0.449-0.449,0.449H9.646c-0.247,0-0.449-0.202-0.449-0.449c0-1.479,0.883-2.747,2.162-3.299c-0.434-0.418-0.714-1.008-0.714-1.642c0-1.197,0.997-2.246,2.133-2.246s2.134,1.049,2.134,2.246c0,0.634-0.28,1.224-0.714,1.642C15.475,10.331,16.371,11.6,16.371,13.078M11.542,8.137c0,0.622,0.539,1.348,1.235,1.348s1.235-0.726,1.235-1.348c0-0.622-0.539-1.348-1.235-1.348S11.542,7.515,11.542,8.137 M15.435,12.629c-0.214-1.273-1.323-2.246-2.657-2.246s-2.431,0.973-2.644,2.246H15.435z"></path>
                                                            </svg>
                                                        </a>
                                                        <form action="{{ route('licenses.destroy', $license->id) }}"
                                                              method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                    class="btn bg-red-200 hover:bg-red-700 text-gray-800 rounded-full shadow mr-1"
                                                                    role="button">
                                                                <svg class="fill-current w-4 h-4"
                                                                     viewBox="0 0 20 20">
                                                                    <path
                                                                        d="M17.114,3.923h-4.589V2.427c0-0.252-0.207-0.459-0.46-0.459H7.935c-0.252,0-0.459,0.207-0.459,0.459v1.496h-4.59c-0.252,0-0.459,0.205-0.459,0.459c0,0.252,0.207,0.459,0.459,0.459h1.51v12.732c0,0.252,0.207,0.459,0.459,0.459h10.29c0.254,0,0.459-0.207,0.459-0.459V4.841h1.511c0.252,0,0.459-0.207,0.459-0.459C17.573,4.127,17.366,3.923,17.114,3.923M8.394,2.886h3.214v0.918H8.394V2.886z M14.686,17.114H5.314V4.841h9.372V17.114z M12.525,7.306v7.344c0,0.252-0.207,0.459-0.46,0.459s-0.458-0.207-0.458-0.459V7.306c0-0.254,0.205-0.459,0.458-0.459S12.525,7.051,12.525,7.306M8.394,7.306v7.344c0,0.252-0.207,0.459-0.459,0.459s-0.459-0.207-0.459-0.459V7.306c0-0.254,0.207-0.459,0.459-0.459S8.394,7.051,8.394,7.306"></path>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

