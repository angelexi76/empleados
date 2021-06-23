<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'empleados_id'
        ];

    public function tareas(){
        return $this->belongsTo(Tareas::class);
    }
    public function empleados(){
        return $this->belongsToMany(Empleados::class);
    }

    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }
    

        public function store()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'empleados_id' => 'required'
        ]);
    
        }   
        
}   

