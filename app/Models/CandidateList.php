<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateList extends Model
{
    
        protected $table = 'candidate_lists';
        protected $fillable = [
            'name',
            'matricnum',
            'strength',
            'cgpa',
            'faculty',
        ];
    
}

