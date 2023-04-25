<?php 

namespace Kingpatje\Meta\Models;

use Illuminate\Database\Eloquent\Model;

class MetaData extends Model {

    protected $fillable = [
        'key',
        'value',
    ];

    public function metaable()
    {
        return $this->morphTo();
    }

}