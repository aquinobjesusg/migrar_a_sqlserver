<?php

namespace App\Http\Livewire\Tablas;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use PDF;

class CrudPersonal_access_tokensComponent extends Component
{
public $view = "livewire.tablas.crud-personal_access_tokens-component";
    public $registros = null;
public $tabla ="personal_access_tokens";
public $objeto ="objpersonal_access_tokens";

public $rutabase ="/rutapersonal_access_tokens";

public $nombreCrud = "dicc.Verpersonal_access_tokens"; 

 public $rutalista = "/usuarios/verlistpersonal_access_tokens"; 

    public $btn_agregar = 1;
    public $btn_editar = 1;
    public $btn_eliminar = 1;

    public $btn_ver = 1;

    public $btn_lista = 1;
    public $btn_detalle = 1;

    public $btn_pdf = 0;

    public $btn_excel = 1;

    public $btn_importar = 1;

    function __construct() {
        $this->view = "livewire.crud.crud-roles-component";
        $this->registros = DB::table($this->tabla)->get();
        $this->registros = $this->registros->toArray();
        $this->btn_detalle = 0;
    }

    public function verformulario($ruta)
    {
        return redirect($this->rutabase . "/" . $ruta);
    }

    public function verformulario1($ruta,$id)
    {
        return redirect($this->rutabase . "/" . $ruta . "/" . $id);
    }

    public function render()
    {
        return view($this->view);
    }
}


