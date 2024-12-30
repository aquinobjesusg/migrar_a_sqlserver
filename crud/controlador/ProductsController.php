<?php

namespace App\Http\Controllers\tablas;

use App\Modelo\Products;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoriasRequest;
use App\Http\Requests\UpdateCategoriasRequest;
use DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
public $tabla = "products";
public $vista = "cruds.crud-products-";
public $ruta = "products";
    public $registro = null;

    public function __construct() { 
    
    }
    
    public function index()
    {
       $this->registros = DB::table($this->tabla)->get();
       $registros = $this->registros;
   
       return view($this->vista.'index', [
           'registros' => $registros
         ]);
    }
   
    public function create()
    {
        return view( $this->vista.'create');
    }
   
    public function store(Request $request)
    {

       $id = DB::table($this->tabla)->max('id');  
       $id = $id  + 1;

       DB::table($this->tabla)->updateOrInsert(
[ 'id'  => $id ,'name'  => $request->name ,'details1'  => $request->details1 ,'details2'  => $request->details2 ,'price1'  => $request->price1 ,'price2'  => $request->price2 ,'shipping_cost'  => $request->shipping_cost ,'description'  => $request->description ,'category_id'  => $request->category_id ,'brand_id'  => $request->brand_id ,'image_path1'  => $request->image_path1 ,'image_path2'  => $request->image_path2 ,'image_path3'  => $request->image_path3 ,'image_path4'  => $request->image_path4 ,'video_path1'  => $request->video_path1 ,'sucursal_id'  => $request->sucursal_id ,'pack_products_id'  => $request->pack_products_id ,'pack_price'  => $request->pack_price ,'tx_peso'  => $request->tx_peso ,'tx_tamanio'  => $request->tx_tamanio ,'tx_presentacion'  => $request->tx_presentacion ,'tx_tamanio_carga'  => $request->tx_tamanio_carga ,'tx_tamanio_venta'  => $request->tx_tamanio_venta ,'tx_contornos'  => $request->tx_contornos ,'tx_contiene'  => $request->tx_contiene ,'fe_vencimiento'  => $request->fe_vencimiento ,'fe_expedicion'  => $request->fe_expedicion ,'stock_min'  => $request->stock_min ,'stock_max'  => $request->stock_max ,'in_pedido'  => $request->in_pedido ,'tx_adicionales'  => $request->tx_adicionales ,'tx_alergenos'  => $request->tx_alergenos ,'in_envio_gratis'  => $request->in_envio_gratis ,'in_oferta'  => $request->in_oferta ,'tx_datos_vencimiento'  => $request->tx_datos_vencimiento ,'tx_valores_nutricionales'  => $request->tx_valores_nutricionales ,'tx_conservacion'  => $request->tx_conservacion ,'tx_recomendacion_consumo'  => $request->tx_recomendacion_consumo ,'tx_envase_enbalaje'  => $request->tx_envase_enbalaje ,'in_fragil'  => $request->in_fragil ,'in_por_encargo'  => $request->in_por_encargo ,'in_olor_fuerte'  => $request->in_olor_fuerte ,'ca_valoracion'  => $request->ca_valoracion ,'tx_vencimiento'  => $request->tx_vencimiento ,'in_valido'  => $request->in_valido  ] 
       );
        return redirect()->route($this->$ruta.'.index');
    }
   
    public function show($id)
    {
       $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
       $registros = $this->registros;
       return view($this->vista.'show',compact('registros'));
    }
   
    public function edit($id)
    {
        $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
        $registros = $this->registros;
        return view($this->vista.'edit',compact('registros'));
    }
   
    public function update(Request $request, $id)
    {
       
       $affected = DB::table($this->tabla)->where('id', $id)->update(
[ 'name'  => $request->name ,'details1'  => $request->details1 ,'details2'  => $request->details2 ,'price1'  => $request->price1 ,'price2'  => $request->price2 ,'shipping_cost'  => $request->shipping_cost ,'description'  => $request->description ,'category_id'  => $request->category_id ,'brand_id'  => $request->brand_id ,'image_path1'  => $request->image_path1 ,'image_path2'  => $request->image_path2 ,'image_path3'  => $request->image_path3 ,'image_path4'  => $request->image_path4 ,'video_path1'  => $request->video_path1 ,'sucursal_id'  => $request->sucursal_id ,'pack_products_id'  => $request->pack_products_id ,'pack_price'  => $request->pack_price ,'tx_peso'  => $request->tx_peso ,'tx_tamanio'  => $request->tx_tamanio ,'tx_presentacion'  => $request->tx_presentacion ,'tx_tamanio_carga'  => $request->tx_tamanio_carga ,'tx_tamanio_venta'  => $request->tx_tamanio_venta ,'tx_contornos'  => $request->tx_contornos ,'tx_contiene'  => $request->tx_contiene ,'fe_vencimiento'  => $request->fe_vencimiento ,'fe_expedicion'  => $request->fe_expedicion ,'stock_min'  => $request->stock_min ,'stock_max'  => $request->stock_max ,'in_pedido'  => $request->in_pedido ,'tx_adicionales'  => $request->tx_adicionales ,'tx_alergenos'  => $request->tx_alergenos ,'in_envio_gratis'  => $request->in_envio_gratis ,'in_oferta'  => $request->in_oferta ,'tx_datos_vencimiento'  => $request->tx_datos_vencimiento ,'tx_valores_nutricionales'  => $request->tx_valores_nutricionales ,'tx_conservacion'  => $request->tx_conservacion ,'tx_recomendacion_consumo'  => $request->tx_recomendacion_consumo ,'tx_envase_enbalaje'  => $request->tx_envase_enbalaje ,'in_fragil'  => $request->in_fragil ,'in_por_encargo'  => $request->in_por_encargo ,'in_olor_fuerte'  => $request->in_olor_fuerte ,'ca_valoracion'  => $request->ca_valoracion ,'tx_vencimiento'  => $request->tx_vencimiento ,'in_valido'  => $request->in_valido  ] 
       );
   
        return redirect()->route($this->$ruta.'.index');
    }
   
    public function destroy($id)
    {
       $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
       return redirect()->route( $this->$ruta.'.index');
    }

}

