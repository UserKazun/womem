<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $table = 'memo';

    protected $fillable = ['user_id', 'title', 'description'];
}
