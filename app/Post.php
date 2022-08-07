<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
];

    public function getPaginate(int $limit_count = 10)
=======

    public function getPaginateByLimit(int $limit_count = 10)
{
    // updated_atで降順に並べたあと、limitで件数制限をかける
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);

    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        //updated_atで降順に並べたあと、limitで件数制限をかける
        //orderByメソッドはレコード（データベースの行）の並べ替えを行う
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

}
}