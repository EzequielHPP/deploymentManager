<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sites extends Model
{
    // Table associated
    protected $table = 'sites';
    // Allow fill on these fields
    protected $fillable = ['name', 'local_url', 'local_path', 'remote_url', 'remote_path', 'git_project_url'];

    public function logs()
    {
        return $this->hasMany('App\WebsiteLog', 'website_id', 'id');
    }
}
