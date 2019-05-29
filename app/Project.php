<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table = 'projects';

    protected $guarded = [];

    public function path()
    {
        return "/projects/{$this->id}";
    }
}
