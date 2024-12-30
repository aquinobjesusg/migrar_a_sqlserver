<?php

namespace App\Modelo;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $primaryKey = "id";
    protected $fillable = ['id','name','details1','details2','price1','price2','shipping_cost','description','category_id','brand_id','image_path1','image_path2','image_path3','image_path4','video_path1','created_at','updated_at','sucursal_id','pack_products_id','pack_price','tx_peso','tx_tamanio','tx_presentacion','tx_tamanio_carga','tx_tamanio_venta','tx_contornos','tx_contiene','fe_vencimiento','fe_expedicion','stock_min','stock_max','in_pedido','tx_adicionales','tx_alergenos','in_envio_gratis','in_oferta','tx_datos_vencimiento','tx_valores_nutricionales','tx_conservacion','tx_recomendacion_consumo','tx_envase_enbalaje','in_fragil','in_por_encargo','in_olor_fuerte','ca_valoracion','tx_vencimiento','in_valido'];
 
}

