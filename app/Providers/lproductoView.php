<?php

namespace Illuminate\Database\Eloquent\Model;

class listaView extends Model
{
	protected $tabla = 'productoView';
	protected $primaryKey = 'id';
	protected $nombre = ['nombre'];
	protected $apellido = ['categoria'];
	protected $funcion = ['cantidad'];

} 