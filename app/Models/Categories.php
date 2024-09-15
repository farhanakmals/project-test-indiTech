<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $table = 'categories_list';

    protected $fillable = [
        'category_name',
    ];

    public function category()
    {
        return $this->belongsToMany(Ticket::class, 'ticket_category')->withTimestamps();
    }
}