<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use HasFactory;
    
    //論理削除を行うことで、発行されるSQLがDELETE文からUPDATE文になり、deleted_atに実行日時が設定される
    //（delete_atに値が設定されると、削除扱いとなる）
    use SoftDeletes; 
   
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
    
    protected $fillable = [
        //fillが可能なプロパティをここに記入
        'title',
        'body',
    ];

}
