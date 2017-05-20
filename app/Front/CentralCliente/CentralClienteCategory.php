<?php

namespace App\Front\CentralCliente;

use Illuminate\Database\Eloquent\Model;

class CentralClienteCategory extends Model
{
    //
    protected $table = 'central_cliente_categories';
    
	protected $fillable = ['name'];

	public function tickets()
	{
		return $this->hasMany(Ticket::class);
	}
}
