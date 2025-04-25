<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDetallePedidoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'pedido_id' => 'required|exists:pedidos,id',
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
            'precio_unitario' => 'required|numeric|min:0'
        ];
    }

    public function messages()
    {
        return [
            'producto_id.exists' => 'El producto seleccionado no existe',
            'pedido_id.exists' => 'El pedido seleccionado no existe'
        ];
    }
}
