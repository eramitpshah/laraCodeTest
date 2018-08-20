<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class categorys extends Model
{
    use Searchable;

    public $fillable = ['category_title','category_description'];

    public $primaryKey = 'id';

    public $timestamps = true;
    /**
     * Get the index name for the model.
     *
     * @return string
    */
    
}
