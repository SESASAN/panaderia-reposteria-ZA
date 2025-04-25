<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'slug',
        'descripcion',
        'precio',
        'imagen',
        'categoria_id'
    ];

    protected function nombre(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => strtolower($value),
            get: fn ($value) => ucfirst($value)
        );
    }

    protected function precio(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => round($value, 2)
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Relación: Un producto pertenece a una categoría
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    // Generación automática del slug
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($producto) {
            $producto->slug = \Illuminate\Support\Str::slug($producto->nombre);
        });

        static::updating(function ($producto) {
            $producto->slug = \Illuminate\Support\Str::slug($producto->nombre);
        });
    }
}
