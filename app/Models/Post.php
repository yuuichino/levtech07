<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


public function getByLimit(int $limit_count = 10)
{
	//updated_atで降順に並べた後、limitで件数制限かける
	return $this->orderBy('updated_at','DESC')->limit($limit_count)->get();
}
}
