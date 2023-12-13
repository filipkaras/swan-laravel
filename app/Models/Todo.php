<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Abbasudo\Purity\Traits\Filterable;

class Todo extends Model
{
    use HasFactory;
    use Sortable;
    use Filterable;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
