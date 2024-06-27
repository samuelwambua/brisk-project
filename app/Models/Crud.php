<?php namespace App\Models;

use CodeIgniter\Model;

class crud extends Model
{
    protected $table = 'Posts';
    protected $primaryKey = 'post_id';
    protected $allowedFields = [
        'title',
        'content'
    ];

}



?>
