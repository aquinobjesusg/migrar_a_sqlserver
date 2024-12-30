@extends('dashboard1')

@section('content-table')

<?php use App\Modelo\Products;$products = Products::all(); ?>

<div class="card">

<h5 class="card-header">PRODUCTS</h5>



<div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
<a class="btn btn-sm btn-outline-secundary" href="{{ route('products.create') }}"><img src="/bootstrap-icons/icons/plus.svg" /><span class="d-none d-xl-inline-block">Nueva</span></a>
          </div>

        </div>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
<th>ID</th><th>NAME</th><th>DETAILS1</th><th>DETAILS2</th><th>PRICE1</th><th>PRICE2</th><th>SHIPPING_COST</th><th>DESCRIPTION</th><th>CATEGORY_ID</th><th>BRAND_ID</th><th>IMAGE_PATH1</th><th>IMAGE_PATH2</th><th>IMAGE_PATH3</th><th>IMAGE_PATH4</th><th>VIDEO_PATH1</th><th>SUCURSAL_ID</th><th>PACK_PRODUCTS_ID</th><th>PACK_PRICE</th><th>TX_PESO</th><th>TX_TAMANIO</th><th>TX_PRESENTACION</th><th>TX_TAMANIO_CARGA</th><th>TX_TAMANIO_VENTA</th><th>TX_CONTORNOS</th><th>TX_CONTIENE</th><th>FE_VENCIMIENTO</th><th>FE_EXPEDICION</th><th>STOCK_MIN</th><th>STOCK_MAX</th><th>IN_PEDIDO</th><th>TX_ADICIONALES</th><th>TX_ALERGENOS</th><th>IN_ENVIO_GRATIS</th><th>IN_OFERTA</th><th>TX_DATOS_VENCIMIENTO</th><th>TX_VALORES_NUTRICIONALES</th><th>TX_CONSERVACION</th><th>TX_RECOMENDACION_CONSUMO</th><th>TX_ENVASE_ENBALAJE</th><th>IN_FRAGIL</th><th>IN_POR_ENCARGO</th><th>IN_OLOR_FUERTE</th><th>CA_VALORACION</th><th>TX_VENCIMIENTO</th><th>IN_VALIDO</th>
            <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
          @foreach($products as $pro)
            <tr>
<td>{{$pro->id}}</td><td>{{$pro->name}}</td><td>{{$pro->details1}}</td><td>{{$pro->details2}}</td><td>{{$pro->price1}}</td><td>{{$pro->price2}}</td><td>{{$pro->shipping_cost}}</td><td>{{$pro->description}}</td><td>{{$pro->category_id}}</td><td>{{$pro->brand_id}}</td><td>{{$pro->image_path1}}</td><td>{{$pro->image_path2}}</td><td>{{$pro->image_path3}}</td><td>{{$pro->image_path4}}</td><td>{{$pro->video_path1}}</td><td>{{$pro->sucursal_id}}</td><td>{{$pro->pack_products_id}}</td><td>{{$pro->pack_price}}</td><td>{{$pro->tx_peso}}</td><td>{{$pro->tx_tamanio}}</td><td>{{$pro->tx_presentacion}}</td><td>{{$pro->tx_tamanio_carga}}</td><td>{{$pro->tx_tamanio_venta}}</td><td>{{$pro->tx_contornos}}</td><td>{{$pro->tx_contiene}}</td><td>{{$pro->fe_vencimiento}}</td><td>{{$pro->fe_expedicion}}</td><td>{{$pro->stock_min}}</td><td>{{$pro->stock_max}}</td><td>{{$pro->in_pedido}}</td><td>{{$pro->tx_adicionales}}</td><td>{{$pro->tx_alergenos}}</td><td>{{$pro->in_envio_gratis}}</td><td>{{$pro->in_oferta}}</td><td>{{$pro->tx_datos_vencimiento}}</td><td>{{$pro->tx_valores_nutricionales}}</td><td>{{$pro->tx_conservacion}}</td><td>{{$pro->tx_recomendacion_consumo}}</td><td>{{$pro->tx_envase_enbalaje}}</td><td>{{$pro->in_fragil}}</td><td>{{$pro->in_por_encargo}}</td><td>{{$pro->in_olor_fuerte}}</td><td>{{$pro->ca_valoracion}}</td><td>{{$pro->tx_vencimiento}}</td><td>{{$pro->in_valido}}</td>
              <td>
                <div class="btn-group me-2">
 <a class="btn btn-sm btn-outline-secundary" href="{{ route('products.show',$pro->id) }}">         <img src="/bootstrap-icons/icons/eye.svg" />        <span class="d-none d-xl-inline-block">Ver</span>    </a>
<a class="btn  btn-sm btn-outline-secundary" href="{{ route('products.edit',$pro->id) }}"><img src="/bootstrap-icons/icons/newspaper.svg" ><span class="d-none d-xl-inline-block">Editar</span></a>
<div class='btn btn-sm btn-outline-secundary'><form action='{{ route("products.destroy",$pro->id) }}' method='POST'>@csrf @method('DELETE')<img src='/bootstrap-icons/icons/trash.svg' /><button type='submit' class='btn  d-none d-xl-inline-block'>Borrar</button></form></div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
          </div>
        </div>
@endsection

