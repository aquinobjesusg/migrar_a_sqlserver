<?php

namespace App\Http\Livewire\Tablas;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use PDF;

class CrudPbcattblComponent extends Component
{
public $view = "livewire.tablas.crud-pbcattbl-component";
    public $registros = null;
public $tabla ="pbcattbl";
public $objeto ="objpbcattbl";

public $rutabase ="/rutapbcattbl";

public $nombreCrud = "dicc.Verpbcattbl"; 

 public $rutalista = "/usuarios/verlistpbcattbl"; 

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


