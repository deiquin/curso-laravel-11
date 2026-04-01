<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    //
    protected $table = "categorias";

    //public $id = 1;
    //public $nombre ="deivis";

    // public function __construct($id, $nombre)
    // {
    //     $this->id = $id;
    //     $this->nombre = $nombre;
    // }

        public function getRouteKeyName() {
        return 'slug';
    }

}
