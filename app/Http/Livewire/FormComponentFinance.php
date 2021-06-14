<?php

namespace App\Http\Livewire;

use App\Models\Finance;
use App\Models\User;
use Livewire\Component;

class FormComponentFinance extends Component
{
    public $code_adherent;


    public $cotisation;

    public $searchTerm;
    
    public $searchResult = [];

    

    public function searchForAdherentByUuidOrName($uuid, $name, $limit){
        return User::query()
                ->where('id', 'LIKE', "%{$uuid}%")
                    ->where(function($query) use($name) {
                        return $query->where('id', 'LIKE', "%{$name}%")
                                        ->orWhere('firstname', 'LIKE', "%{$name}%");     
                    })->take($limit)
                        ->get();
                    
                        
                            
    }
    public function getCodeAdherent($code){
        $this->code_adherent = $code;
        $this->searchTerm = $code;
    }
    public function updated(){
        
        $this->searchResult = $this->searchForAdherentByUuidOrName($this->searchTerm, $this->searchTerm, 10);

    } 

    public function formSubmit(){
        $finance = Finance::create([
            'code_adherent' => $this->code_adherent,
            'cotisation' => $this->cotisation
        ]);
        if ($finance){
            return back()->with('success', 'Structure ajoutée avec succées');
        }else{
            return back()->with('error', 'Il y aune erreur sil vous plais essayer plus tard');
        }
    }
    public function render()
    {
        return view('livewire.form-component-finance');
    }
}
