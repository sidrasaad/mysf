<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // protected $table = 'todos';

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function assigned_user(){

        return $this->belongsTo(User::class,'assigned_to','id');
    }

    public function getDueDateAttribute($due_date)
    {
        $due_date = explode('-', $due_date);
        $due_date = $due_date[2] . '-' . $due_date[1] . '-' . $due_date[0];
        return $due_date;
    }

}
