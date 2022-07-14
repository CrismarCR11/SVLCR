<?php

namespace App\Http\Livewire;

use Livewire\Component;
//importar modelo
use App\Models\Category;
//para subir imagenes
use Livewire\WithFileUploads;
//para el paginado de los componentes
use Livewire\WithPagination;

use Illuminate\Support\Facades\Storage;

class CategoriesController extends Component
{

    use WithFileUploads;
    use WithPagination;

    //cargar los componentes
    public $name, $search, $image, $selected_id, $pageTitle, $componentName; 
    private $pagination = 2;

    //asignando valor
    //metodo mount para iniciar propiedades
    public function mount()
    {
        $this->pageTitle = 'Listado';
        $this->componentName = 'Categories';
    }
    public function paginationView()
    {
        return 'vendor.livewire.bootstrap';
    }


    public function render()
    {   
        //obtener todos los registros
        if(strlen($this->search) > 0)
            $data = Category::where('name', 'like', '%' . $this->search . '%')->paginate($this->pagination);
        else
            $data = Category::orderBy('id','desc')->paginate($this->pagination);
            
        //vista que usaremos
        return view('livewire.category.categories', ['categories' => $data])
        //plantillas que suaremos
        ->extends('layouts.theme.app')
        //el contenido
        ->section('content');


    }
}
