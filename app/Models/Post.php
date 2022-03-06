<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // you can change the name of the table
    protected $table = 'posts';
    // setting the primary key = false to disable
    protected $primaryKey = 'post_id';
    // set to false to disable
    protected $timestamp = true;
    // change the timestamp format here
    // protected $dateFormat = 'h:m:s';

    protected $foreignKey ='user_id';


    protected $fillable = [
        'title',
        'body',
        'user_id',
    ];
    public function User(){
        return $this->belongsTo(User::class);
    }
}


