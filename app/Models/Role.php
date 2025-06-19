<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * Tabla asociada al modelo.
     */
    protected $table = 'roles';

    /**
     * Campos asignables mediante asignación masiva.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'level', // Ej. 1: usuario, 2: encargado, 3: admin_empresa, 4: superadmin
    ];

    /**
     * Tipos de datos convertibles.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'name' => 'string',
            'slug' => 'string',
            'description' => 'string',
            'level' => 'integer',
        ];
    }

    /**
     * Relación: Un rol tiene muchos usuarios.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}