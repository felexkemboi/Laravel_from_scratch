<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];



    public function tasks(){
    	return $this->hasMany(Task::class);
    }

     public function addTask($task)
     {
		/*return Task::forcecreate([
    	'project_id' => $this->id,
    	'description' => $description
    	]); */
        $this-> tasks()-> create($task);
    }
}
