<div class="inline-block relative">
    <input
        class="bg-gray-200 text-gray-700 border-2 focus:outline-none placeholder-gray-500 px-1 py-2 rounded-full w-56"
        placeholder="Recherche..."
        wire:model="query"
        wire:keydown.arrow-down="incrementIndex"
        wire:keydown.arrow-up="decrementInde"
        wire:keydown.enter="showUser"
    >
    <svg class="w-6 h-6 text-gray-500 absolute top-0 right-0 mt-2 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
    </svg>

    @if(strlen($query) > 2)
        <div class="absolute border bg-gray-100 text-md w-56 mt-1">

            <div>
                @if(count($searchResults) > 0 && !empty($searchResults))
                    @foreach($searchResults as $index => $searchResult)
                        <p class="p-1 {{$index === $selectedIndex ? 'text-green-500' : '' }}">{{$searchResult->name }} {{$searchResult->first_name}} {{ $searchResult->email }}</p>
                    @endforeach

                @else
                    <span class="text-orange-500 p-1">Aucun résultat pour {{$query}} :(</span>
                @endif
            </div>
        </div>
    @endif

</div>
