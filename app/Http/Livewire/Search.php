<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Integer;

class Search extends Component
{
    public string $query = '';
    public $searchResults = [];
    public int $selectedIndex = 0;

    public function incrementIndex()
    {
        if ($this->selectedIndex === count($this->searchResults) - 1) {
            $this->selectedIndex = 0;
            return;
        }
        $this->selectedIndex++;
    }

    public function decrementInde()
    {
        if ($this->selectedIndex === 0) {
            $this->selectedIndex = (count($this->searchResults) - 1);
            return;
        }
        $this->selectedIndex--;
    }

    public function showUser()
    {
        if ($this->searchResults) {
            return redirect()->route('users.show', [$this->searchResults[$this->selectedIndex]['id']]);
        }
    }


    public function updatedQuery()
    {
        $words = '%' .$this->query . '%'
        ;

        if (strlen($this->query) > 2) {

            $this->searchResults = User::where('name', 'like', $words)
                ->orWhere('first_name', 'like', $words)
                ->orWhere('email', 'like', $words)
                ->get();

            /* $this->searchResults = DB::select('select * from users where first_name or name or email like ?', ['%' . $words . '%']);*/
            /*
                        $this->searchResults = DB::table('users')
                            ->selectRaw('*')
                            ->where('name', 'like', '%' . $words . '%')
                            ->orWhere('first_name', 'like', $words)
                            ->orWhere('email', 'like', $words)
                            ->get();
            */

        }
    }

    public function render()
    {
        return view('livewire.search');
    }
}


