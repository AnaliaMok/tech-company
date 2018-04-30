<?php namespace Amok\Clients\Models;

use Model;

/**
 * Model
 */
class Work extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'amok_clients_work';
}
