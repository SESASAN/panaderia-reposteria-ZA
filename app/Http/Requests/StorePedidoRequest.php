<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePedidoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cliente_id' => 'required|exists:clientes,id',
            'fecha_entrega' => 'required|date|after_or_equal:today',
            'metodo_pago' => 'required|in:transferencia'
        ];
    }
}
