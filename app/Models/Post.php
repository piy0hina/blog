<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function getByLimit(int $limit_count = 2)
    {
        // updated_atで降順に並べ、limitでlimit_countにある数で件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 2)
    {
        // updated_atで降順に並べ、limit_countにある数でページネーションする（ページを分ける）
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}
