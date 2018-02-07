<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{


	use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';
}
