<?php
if (!Schema::hasTable(antecedentes)) {
Schema::create('antecedentes', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codantecedente',4);
$table->string('descripcion',40);
$table->string('codtipo',2);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(antece_paciente)) {
Schema::create('antece_paciente', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();

$table->string('codeantecedente',4);

$table->string('descripcion',50);
$table->string('tipo',2);
$table->string('tipo2',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(bancos)) {
Schema::create('bancos', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('cod_banco',6);
$table->string('nombre_banco',150);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(baremo_quiru)) {
Schema::create('baremo_quiru', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();

$table->string('cod_inter',3);
$table->string('cod_clini',3);
$table->string('ced_paciente',8);
$table->string('nom_interven',300);
$table->string('nom_paciente',200);
$table->datetime('fecha_creado')->nullable();
$table->datetime('fecha_opera')->nullable();

$table->double('monto_opera');
$table->string('tipo_rol',1);
$table->string('pagada',1);



$table->string('diagnostico',100);
$table->double('monto_abono');
$table->double('monto_resta');
$table->string('empre',30);


$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(categoria)) {
Schema::create('categoria', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codigo',10);
$table->string('categoria',200);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(clinicas)) {
Schema::create('clinicas', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('cod_clin',3);
$table->string('nom_clin',50);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(cola)) {
Schema::create('cola', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->datetime('fecha')->nullable();




$table->string('turno',1);
$table->string('motivo',30);
$table->double('monto');



$table->string('tipo',10);

$table->string('sms',1);
$table->string('sms_text',160);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(cola_dia_no_labor)) {
Schema::create('cola_dia_no_labor', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->datetime('dia')->nullable();
$table->string('tipo',10);
$table->string('motivo',100);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(constancia_obs)) {
Schema::create('constancia_obs', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();



$table->string('titulo',50);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(consultas)) {
Schema::create('consultas', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->datetime('fecha')->nullable();

$table->double('peso');
$table->double('talla');
$table->double('fc');
$table->double('pp');
$table->double('circcefalica');
$table->double('circtoraxica');
$table->double('circabdominal');
$table->string('tasentado',7);
$table->string('taacostado',7);
$table->string('tapie',7);

$table->string('eliminado',1);











$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(consultorios)) {
Schema::create('consultorios', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codigo',10);
$table->string('consultorio',100);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(cuentas_x_pagar)) {
Schema::create('cuentas_x_pagar', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->double('nro_cxp');
$table->string('origen_cxp',2);
$table->datetime('fec_cxp')->nullable();
$table->string('edo_cxp',1);
$table->string('tipo_cxp',1);
$table->string('conc_cxp',4);
$table->string('cxp_codigo',20);
$table->string('cxp_descripcion',150);
$table->datetime('fec_docum')->nullable();
$table->string('cxp_nro_control',25);
$table->string('cxp_nro_factura',25);
$table->string('cxp_referencia',25);
$table->double('cxp_mto_neto');
$table->double('cxp_ret_isrl');
$table->double('cxp_m_ret_isrl');
$table->double('cxp_iva');
$table->double('cxp_mto_iva');
$table->double('cxp_mto_total');
$table->double('cxp_ret_iva');
$table->double('cxp_m_ret_iva');
$table->double('cxp_mto_total_pagar');
$table->double('cxp_saldo_a_pagar');
$table->string('cxp_chekear',1);
$table->string('cxp_forma',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(cuentas_x_pagar_mov)) {
Schema::create('cuentas_x_pagar_mov', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->double('nro_registro');
$table->double('nro_cxp');
$table->double('nro_mov');
$table->datetime('fecha_emision')->nullable();
$table->string('nro_documento',100);
$table->string('tip_documento',2);
$table->double('monto_pagar');
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(department)) {
Schema::create('department', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();

$table->string('dept_name',40);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(detalles_factura_cliente)) {
Schema::create('detalles_factura_cliente', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('cod_inventario',2);

$table->string('tipo_articulo',25);
$table->string('nombre',50);
$table->double('precio');
$table->double('descuento');

$table->datetime('fecha_doc')->nullable();
$table->string('tipo_precio',3);
$table->double('total_articulo');
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(detalles_presupuesto_plantilla)) {
Schema::create('detalles_presupuesto_plantilla', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('cod_inventario',2);

$table->string('tipo_articulo',25);
$table->string('nombre',50);
$table->double('precio');
$table->double('descuento');

$table->datetime('fecha_doc')->nullable();
$table->string('tipo_documento',3);
$table->double('total_articulo');
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(diagnosticos)) {
Schema::create('diagnosticos', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codediagnostico',5);
$table->string('descripcion',100);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(diagnostico_paciente)) {
Schema::create('diagnostico_paciente', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('codediagnostico',5);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(dias_semana)) {
Schema::create('dias_semana', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->datetime('fecha')->nullable();
$table->string('dia_semana',10);


$table->string('descripcion',100);
$table->string('tipo_dia',10);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(doctores)) {
Schema::create('doctores', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();

$table->string('apellidos',30);
$table->string('nombres',30);
$table->string('clinica',60);

$table->string('telefono',108);
$table->string('ciudad',30);

$table->string('codeespecial',3);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(emision_pagos)) {
Schema::create('emision_pagos', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->double('nro_emision');
$table->datetime('fecha_emision')->nullable();
$table->string('descripcion',100);
$table->string('cod_banco',6);
$table->string('estado',1);
$table->double('monto_pagar');
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(emision_pagos_detalle)) {
Schema::create('emision_pagos_detalle', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->double('nro_registro');
$table->double('nro_emision');
$table->double('nro_cxp');
$table->double('nro_mov');
$table->string('origen_cxp',2);
$table->string('cxp_codigo',20);
$table->string('cxp_descripcion',150);
$table->datetime('fecha_emision')->nullable();
$table->string('nro_documento',100);
$table->string('tip_documento',2);
$table->double('saldo_pagar');
$table->double('monto_pagar');
$table->string('estado',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(employee)) {
Schema::create('employee', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('emp_fname',30);
$table->string('emp_lname',30);

$table->string('street',40);
$table->string('city',20);
$table->string('state',4);
$table->string('zip_code',9);
$table->string('phone',10);
$table->string('status',1);
$table->string('ss_number',11);
$table->double('salary');
$table->datetime('start_date')->nullable();
$table->datetime('termination_date')->nullable();
$table->datetime('birth_date')->nullable();
$table->string('bene_health_ins',1);
$table->string('bene_life_ins',1);
$table->string('bene_day_care',1);
$table->string('sex',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(especial)) {
Schema::create('especial', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codeespecial',3);
$table->string('especialidad',50);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(evolucion)) {
Schema::create('evolucion', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('especialidad',100);
$table->string('ciudad',20);
$table->string('logo',500);
$table->string('linea_1',90);
$table->string('linea_2',90);
$table->string('linea_3',90);
$table->string('lineag_1',115);
$table->string('lineag_2',115);

$table->datetime('fecha')->nullable();
$table->string('rif',100);
$table->string('reporte_vacio',1);
$table->string('moneda',10);
$table->string('impuesto',20);
$table->double('por_impues');
$table->string('am_pm',1);
















$table->string('lunes',1);
$table->string('martes',1);
$table->string('miercoles',1);
$table->string('jueves',1);
$table->string('viernes',1);
$table->string('sabado',1);
$table->string('domingo',1);
$table->string('feriado',100);
$table->string('cedula',20);
$table->string('min_salud',20);
$table->string('col_med',20);
$table->string('cita_previa',1);
$table->string('telefono',20);
$table->string('cobra_honorarios',1);
$table->double('por_cobranza');
$table->double('por_retención_seg');
$table->double('por_retención_part');
$table->string('accionista',1);
$table->string('consultorio',10);
$table->string('contrasena',20);
$table->string('paga_iva',1);
$table->string('sms_proveedor',1);
$table->string('sms_user',20);
$table->string('sms_clave',20);

$table->string('sms_telefono_llamada',30);
$table->string('sms_sexo_medico',1);
$table->string('correo_med',100);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(examenes)) {
Schema::create('examenes', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codeexamen',8);
$table->string('examen',100);
$table->string('codetipo',10);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(examen_fisico)) {
Schema::create('examen_fisico', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();











$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(examen_obs)) {
Schema::create('examen_obs', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();



$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(examen_paciente)) {
Schema::create('examen_paciente', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('codeexamen',8);
$table->string('resultado',30);
$table->string('vinculante',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(facturas_compras)) {
Schema::create('facturas_compras', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->integer('id_factura_compra')->unsigned();
$table->string('cod_prov',6);
$table->integer('id_tipo_concepto')->unsigned();
$table->datetime('fecha')->nullable();
$table->string('estado',1);
$table->string('nro_seniat',25);
$table->string('nro_factura',25);
$table->double('mto_neto');
$table->double('mto_porc_iva');
$table->double('mto_iva');
$table->double('mto_porc_ret_iva');
$table->double('mto_ret_iva');
$table->double('mto_porc_ret_isrl');
$table->double('mto_ret_isrl');
$table->double('mto_total_general');
$table->double('nro_cxp');
$table->double('mto_total');
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(facturas_compras_detalle)) {
Schema::create('facturas_compras_detalle', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->integer('id_registro')->unsigned();
$table->integer('id_fac_prov')->unsigned();
$table->string('des_concepto',100);
$table->double('cantidad');
$table->double('monto');
$table->double('monto_total');
$table->integer('id_factura_compra')->unsigned();
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(factura_cliente)) {
Schema::create('factura_cliente', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();

$table->string('cedu_rif',15);
$table->datetime('fecha_factura')->nullable();
$table->datetime('fecha_vence_fact')->nullable();
$table->datetime('fecha_cance_fact')->nullable();
$table->string('cliente',2);
$table->string('status_factura',1);
$table->string('tipo_factura',1);
$table->string('paciente',10);
$table->string('nom_paciente',60);
$table->string('tipo_precio',1);
$table->string('nro_orden',10);
$table->double('total_costo');
$table->double('total_neto');
$table->double('total_bruto');
$table->double('total_final');
$table->double('total_descuento');
$table->double('descuento_linea');


$table->double('monto_pac');
$table->double('monto_emp');


$table->string('tipo_doc',3);

$table->double('nro_cxp');
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(failed_jobs)) {
Schema::create('failed_jobs', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('uuid',255);


});
}
 
if (!Schema::hasTable(files)) {
Schema::create('files', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('title',255);
$table->string('name',255);
});
}
 
if (!Schema::hasTable(formato_print)) {
Schema::create('formato_print', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codigo',4);
$table->string('titulo',200);

$table->string('tipo',10);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(gsistema)) {
Schema::create('gsistema', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->integer('id_medico')->unsigned();
$table->string('nomcorto',30);
$table->string('clave',6);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(his_con_pre_factura)) {
Schema::create('his_con_pre_factura', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->integer('id_registro')->unsigned();


$table->string('codigo',8);
$table->string('descripcion',45);
$table->double('cantidad');
$table->double('monto');
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(hospitalizacion)) {
Schema::create('hospitalizacion', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();





$table->string('habitacion',1);
$table->string('hospital',60);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(imagen_consulta)) {
Schema::create('imagen_consulta', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();



$table->string('imagen',256);

$table->string('tipo',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(imagen_pacientes)) {
Schema::create('imagen_pacientes', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();

$table->string('imagen',256);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(implante)) {
Schema::create('implante', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->datetime('fecha_reporte')->nullable();
$table->datetime('fecha_opera')->nullable();



$table->string('estabilizada',1);
$table->string('componente_femoral',1);
$table->string('componente_tibial',10);
$table->string('componente_tibial_it',10);
$table->string('componente_pastelar',1);
$table->string('reque_metilmeticatrilato',1);
$table->string('reque_metilmeticatrilato_cant',10);
$table->string('reque_steridrape',1);
$table->string('reque_steridrape_cant',10);
$table->string('reque_coban_esteril',1);
$table->string('reque_coban_esteril_cant',10);
$table->string('reque_autosutura',1);
$table->string('reque_autosutura_cant',10);
$table->string('reque_orthopack',1);
$table->string('reque_orthopack_cant',10);
$table->string('sistema',100);
$table->string('marca',20);
$table->string('tipo',20);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(informe)) {
Schema::create('informe', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('para',50);

$table->datetime('fecha')->nullable();
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(intenven_servi)) {
Schema::create('intenven_servi', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codigo',3);
$table->string('nombre',300);
$table->double('precio_principal');
$table->double('precio_auxiliar');
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(interven_consulta)) {
Schema::create('interven_consulta', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('codigo_inter',3);

$table->string('descripcion',100);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(listado)) {
Schema::create('listado', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('tipo',5);
$table->string('descripcion_tipo',30);
$table->string('segundo',5);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(motivos_consulta)) {
Schema::create('motivos_consulta', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codemotivo',4);
$table->string('descripcion',40);
$table->string('tipo',2);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(motivo_cita)) {
Schema::create('motivo_cita', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codigo',10);
$table->string('tipo_atencion',100);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(motivo_consulta_paciente)) {
Schema::create('motivo_consulta_paciente', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codemotivo',4);


$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(motivo_factura)) {
Schema::create('motivo_factura', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codigo',8);
$table->string('descripcion',45);
$table->double('monto');
$table->double('monto_seg');
$table->string('tipo',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(motivo_factura_prov)) {
Schema::create('motivo_factura_prov', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->integer('id_fac_prov')->unsigned();
$table->string('des_concepto',100);
$table->double('monto');
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(operadores)) {
Schema::create('operadores', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('primera',15);
$table->string('segunda',10);
$table->string('nonbre',50);
$table->string('nivel',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(orden_ingreso)) {
Schema::create('orden_ingreso', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->datetime('fecha_operacion')->nullable();
$table->datetime('fecha_reporte')->nullable();


$table->string('reco_ingresar',1);
$table->string('reco_depi',1);
$table->string('reco_llevar',1);
$table->string('reco_cedroxin',1);
$table->string('reco_ejercicios',1);
$table->string('reco_terapia',1);
$table->string('reco_control',1);
$table->string('reco_higiene',1);
$table->string('reco_ropa',1);
$table->string('reco_tomar',1);
$table->string('reco_clexane',1);
$table->string('reco_ejercicios_res',1);
$table->string('reco_sangre',1);
$table->string('reco_avisar',1);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(ortopedia)) {
Schema::create('ortopedia', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('botas',1);
$table->string('zapatos',1);
$table->string('soporte',6);
$table->string('thomas',8);
$table->string('normal',1);
$table->string('tacon_int',5);
$table->string('tacon_ext',5);
$table->string('suela_int',5);
$table->string('suela_ext',5);
$table->string('borde_int_rect',1);
$table->string('borde_int_abdu',1);
$table->string('suela_normal',1);
$table->string('suela_antirres',1);
$table->string('aparatos',20);

$table->string('plantilla',1);
$table->string('aae',15);
$table->string('api',7);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(pacientes)) {
Schema::create('pacientes', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('nac',1);
$table->string('cedula',8);
$table->string('apellidos',50);
$table->string('nombres',50);
$table->string('sexo',1);
$table->datetime('fnacimiento')->nullable();
$table->string('lnacimiento',30);
$table->string('codeestado',1);
$table->string('direccion',200);
$table->string('telefono',20);
$table->datetime('fingreso')->nullable();
$table->string('escolaridad',60);
$table->string('ocupacion',60);
$table->string('codesegemp',3);

$table->string('foto_pac',300);
$table->string('profesion',50);
$table->string('email',100);
$table->string('dependencia',30);

$table->string('historia_aa',10);
$table->string('categoria',10);
$table->string('sms',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(paciente_no_regi)) {
Schema::create('paciente_no_regi', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();

$table->string('apellidos',100);
$table->string('nombres',100);
$table->string('celular',30);
$table->string('motivo',10);
$table->datetime('fecha')->nullable();

$table->string('registrado',1);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(pago_quiru)) {
Schema::create('pago_quiru', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->datetime('fecha')->nullable();
$table->double('monto_total');
$table->double('abono');
$table->double('resta');
$table->string('pago',1);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(palm_lista)) {
Schema::create('palm_lista', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->integer('id_codigo')->unsigned();
$table->string('nombre_tabla',12);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(pantece)) {
Schema::create('pantece', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();

$table->string('codante',4);
$table->string('detalle',250);
$table->string('tipo',2);
$table->string('descrip',50);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(password_resets)) {
Schema::create('password_resets', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('email',255);
$table->string('token',255);
});
}
 
if (!Schema::hasTable(pbcatcol)) {
Schema::create('pbcatcol', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('pbc_tnam',129);

$table->string('pbc_ownr',129);
$table->string('pbc_cnam',129);

$table->string('pbc_labl',254);

$table->string('pbc_hdr',254);


$table->string('pbc_mask',31);



$table->string('pbc_ptrn',31);
$table->string('pbc_bmap',1);
$table->string('pbc_init',254);
$table->string('pbc_cmnt',254);
$table->string('pbc_edit',31);
$table->string('pbc_tag',254);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(pbcatedt)) {
Schema::create('pbcatedt', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('pbe_name',30);
$table->string('pbe_edit',254);




$table->string('pbe_work',32);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(pbcatfmt)) {
Schema::create('pbcatfmt', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('pbf_name',30);
$table->string('pbf_frmt',254);


$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(pbcattbl)) {
Schema::create('pbcattbl', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('pbt_tnam',129);

$table->string('pbt_ownr',129);


$table->string('pbd_fitl',1);
$table->string('pbd_funl',1);


$table->string('pbd_ffce',18);


$table->string('pbh_fitl',1);
$table->string('pbh_funl',1);


$table->string('pbh_ffce',18);


$table->string('pbl_fitl',1);
$table->string('pbl_funl',1);


$table->string('pbl_ffce',18);
$table->string('pbt_cmnt',254);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(pbcatvld)) {
Schema::create('pbcatvld', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('pbv_name',30);
$table->string('pbv_vald',254);


$table->string('pbv_msg',254);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(pcola)) {
Schema::create('pcola', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();



$table->datetime('fecha')->nullable();

$table->string('hora_ini',5);

$table->string('motivo',100);


$table->string('tipo',10);
$table->string('turno',1);
$table->string('fechac',10);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(pconsult)) {
Schema::create('pconsult', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('enfactual',250);
$table->string('evolu',250);
$table->string('tratami',250);
$table->string('exa_fi',250);
$table->string('image',250);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(pdiagno)) {
Schema::create('pdiagno', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('codedia',5);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(personal_access_tokens)) {
Schema::create('personal_access_tokens', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('tokenable_type',255);

$table->string('name',255);
$table->string('token',64);

$table->timestamp('last_used_at')->nullable();
$table->timestamp('expires_at')->nullable();
});
}
 
if (!Schema::hasTable(pmoti_co)) {
Schema::create('pmoti_co', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codmoti',4);


$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(ppacient)) {
Schema::create('ppacient', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('cedula',8);
$table->string('apellidos',25);
$table->string('nombres',25);
$table->string('sexo',1);
$table->datetime('fnacimient')->nullable();
$table->string('telefono',20);
$table->string('codesegemp',3);


$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(pprocedi)) {
Schema::create('pprocedi', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('procedi1',250);
$table->string('procedi2',250);
$table->string('procedi3',250);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(precipe)) {
Schema::create('precipe', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('codmedi',8);
$table->string('indicacio',250);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(presupuesto)) {
Schema::create('presupuesto', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('cedula',8);
$table->string('nombre',45);
$table->string('direccion',60);
$table->string('telefono',20);

$table->datetime('fecha')->nullable();
$table->string('cliente',50);


$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(presupuesto_operatorio)) {
Schema::create('presupuesto_operatorio', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('diagnostico',300);
$table->string('intervencion',100);


$table->string('arco_c',1);
$table->string('astroscopio',1);
$table->string('sangre_qx_tipo_1',40);
$table->string('sangre_qx_tipo_2',10);
$table->double('sangre_qx_tipo_1_cantidad');
$table->double('sangre_qx_tipo_2_cantidad');
$table->double('material_sintesis');
$table->double('instrumental_traumatologico');
$table->double('honorarios');

$table->datetime('fecha')->nullable();
$table->string('estado',1);
$table->string('clinica',10);
$table->string('procedencia',10);
$table->double('h_1_ayudante');

$table->double('h_2_ayudante');
$table->double('h_anestesiologo');
$table->string('rx_postoperatoria',1);
$table->string('rx_torax',1);
$table->double('h_tratante');
$table->string('fluoroscopio',1);
$table->double('h_artroscopio');
$table->string('eval_preoperatoria',1);
$table->string('otros_estudios_de_imagenes',100);
$table->string('interconsultas',100);
$table->string('otro_1_tex',40);
$table->double('otro_1_deta');
$table->string('otro_2_tex',40);
$table->double('otro_2_deta');
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(presupuesto_planti)) {
Schema::create('presupuesto_planti', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();

$table->string('tipo_precio',1);
$table->double('total_costo');
$table->double('total_final');

$table->string('tipo_doc',3);
$table->string('nom_presupuesto',100);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(proveedor)) {
Schema::create('proveedor', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('cod_prov',6);
$table->string('proveedor',150);
$table->string('rif',20);
$table->string('direccion',300);
$table->string('telefono',20);
$table->string('contacto',100);
$table->string('celular',20);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(pvademe)) {
Schema::create('pvademe', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codmedi',8);
$table->string('nombrege',35);
$table->string('nombreco',35);
$table->string('dosifi',250);
$table->string('uso',50);
$table->string('presenta',50);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(p_ante)) {
Schema::create('p_ante', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codante',4);
$table->string('codtipo',2);
$table->string('descrip',40);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(p_diagno)) {
Schema::create('p_diagno', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codiagn',5);
$table->string('descrip',50);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(p_epecial)) {
Schema::create('p_epecial', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codespe',3);
$table->string('especiali',50);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(p_examen)) {
Schema::create('p_examen', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codexa',8);
$table->string('codetip',10);
$table->string('examen',45);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(p_motic)) {
Schema::create('p_motic', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codmoti',4);
$table->string('descrip',40);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(p_seg)) {
Schema::create('p_seg', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codeseg',3);
$table->string('nombre',60);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(p_tipoe)) {
Schema::create('p_tipoe', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codexam',10);
$table->string('descrip',40);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(radiologias)) {
Schema::create('radiologias', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('coderadio',8);
$table->string('estudio',45);
$table->string('codetipo',10);

$table->string('tipo',40);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(radiologia_obs)) {
Schema::create('radiologia_obs', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();



$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(radiologia_paciente)) {
Schema::create('radiologia_paciente', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('coderadio',8);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(recipe2)) {
Schema::create('recipe2', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('codemedicina',8);


$table->string('descripcion',200);

$table->datetime('fecha')->nullable();

$table->string('comple',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(recipes)) {
Schema::create('recipes', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('codemedicina',8);



$table->string('descripcion',200);
$table->datetime('fecha')->nullable();

$table->string('comple',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(recipe_detalle)) {
Schema::create('recipe_detalle', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();



$table->datetime('fe_emision')->nullable();


$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(recipe_grupo)) {
Schema::create('recipe_grupo', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codigo',4);
$table->string('tratamiento',100);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(recipe_grupo_detalle)) {
Schema::create('recipe_grupo_detalle', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codigo',4);
$table->string('codemedicina',8);
$table->string('descripcion',100);



$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(recipe_obs)) {
Schema::create('recipe_obs', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();



$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(referencia)) {
Schema::create('referencia', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();




$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(registro_empleados)) {
Schema::create('registro_empleados', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->double('nro_empleado');
$table->datetime('fecha_creacion')->nullable();
$table->string('status',1);
$table->string('cedula_empleado',20);
$table->string('nombre_empleado',100);
$table->string('tipo_nomina',2);
$table->string('frecuencia_nomina',2);
$table->double('monto_s1');
$table->double('monto_s2');
$table->double('monto_s3');
$table->double('monto_s4');
$table->double('monto_total');
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(registro_empleados_eje)) {
Schema::create('registro_empleados_eje', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->double('nro_nomina');
$table->string('descripcion',100);
$table->datetime('fecha_aplicacion')->nullable();
$table->string('status',1);
$table->string('tipo_nomina',2);
$table->string('frecuencia_nomina',2);
$table->double('monto_total');
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(registro_empleados_eje_detalle)) {
Schema::create('registro_empleados_eje_detalle', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->double('nro_nomina');
$table->double('nro_empleado');
$table->double('nro_cxp');
$table->double('monto_empleado');
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(reg_empl_frec_nomina)) {
Schema::create('reg_empl_frec_nomina', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('frecuencia_nomina',2);
$table->string('nombre_frecuencia',50);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(reg_empl_tipo_nomina)) {
Schema::create('reg_empl_tipo_nomina', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('tipo_nomina',2);
$table->string('nombre_nomina',50);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(reposo_paciente)) {
Schema::create('reposo_paciente', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('codereposo',1);
$table->datetime('fdesde')->nullable();


$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(representante)) {
Schema::create('representante', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();

$table->string('nombre',40);
$table->string('codeparentesco',1);
$table->string('direccion',60);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(roles)) {
Schema::create('roles', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('name',255);



});
}
 
if (!Schema::hasTable(seg_emp)) {
Schema::create('seg_emp', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codesegemp',3);
$table->string('nombre',60);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(sms_compra)) {
Schema::create('sms_compra', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();

$table->datetime('fecha_compra')->nullable();
$table->double('monto_compra');

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(sms_enviados)) {
Schema::create('sms_enviados', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->double('conta');
$table->string('usuario',10);
$table->string('medico',60);
$table->string('proveedor',1);
$table->string('numero',11);
$table->string('mensaje',150);
$table->datetime('fecha')->nullable();
$table->string('tipo',1);


$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(sms_envio_pac)) {
Schema::create('sms_envio_pac', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();


$table->string('numero_cel',14);
$table->string('texto_sms',160);

$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(sysopciones)) {
Schema::create('sysopciones', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();

$table->string('caso',50);
$table->string('contexto',50);
$table->string('modulo',50);
$table->string('menu',50);
$table->string('submenu',50);

$table->string('ruta',50);
$table->string('icon',50);
$table->integer('activo');
$table->string('title',50);
$table->string('imagen',50);
$table->string('role',191);
});
}
 
if (!Schema::hasTable(tipos_conceptos)) {
Schema::create('tipos_conceptos', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->integer('id_tipo_concepto')->unsigned();
$table->string('des_concepto',100);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(tipos_documentos)) {
Schema::create('tipos_documentos', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('tip_documento',2);
$table->string('des_documento',100);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(tipos_examenes)) {
Schema::create('tipos_examenes', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codetipo',10);
$table->string('tipo',40);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(tipo_antecedente)) {
Schema::create('tipo_antecedente', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codetipo',2);
$table->string('descripcion',40);
$table->string('tipoantecedente',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(users)) {
Schema::create('users', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('name',255);
$table->string('email',255);
$table->timestamp('email_verified_at')->nullable();
$table->string('password',255);


$table->string('remember_token',100)->nullable();
$table->string('avatar',255);
$table->string('role',255);





});
}
 
if (!Schema::hasTable(vademecum)) {
Schema::create('vademecum', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codemedicina',8);
$table->string('nombregenerico',35);
$table->string('nombrecomercial',35);


$table->string('presentacion',50);
$table->double('concentracion');
$table->double('cada');

$table->double('pvc');
$table->double('pvs');
$table->double('dosis');
$table->string('sico',1);
$table->string('nombrecomercial1',40);
$table->string('nombrecomercial2',40);
$table->string('nombrecomercial3',40);

$table->string('sicome',1);
$table->string('sicome1',1);
$table->string('sicome2',1);
$table->string('sicome3',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
if (!Schema::hasTable(vademecum_m)) {
Schema::create('vademecum_m', function (Blueprint $table) {
$table->increments('id');
$table->timestamps();
$table->string('codemedicina',200);
$table->string('nombregenerico',35);
$table->string('nombrecomercial',35);


$table->string('presentacion',35);
$table->double('concentracion');
$table->double('cada');

$table->double('pvc');
$table->double('pvs');
$table->double('dosis');
$table->string('sico',1);
$table->string('nombrecomercial1',40);
$table->string('nombrecomercial2',40);
$table->string('nombrecomercial3',40);

$table->string('sicome',1);
$table->string('sicome1',1);
$table->string('sicome2',1);
$table->string('sicome3',1);
$table->string('usercreated_at',30);
$table->string('userupdated_at',30);
});
}
 
