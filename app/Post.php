<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        //updated_atで降順に並べたあと、limitで件数制限をかける
        //orderByメソッドはレコード（データベースの行）の並べ替えを行う
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
