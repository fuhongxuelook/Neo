<?php

namespace App\Entity\Schema\Model;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ItemModel extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'items';

    /**
     * 通过ID查询模块
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param mixed $id
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeQueryById($query, $id)
    {
        return $query->where('id', $id);
    }

    public function scopeQueryLikeCategory($query, $filter)
    {
        return $query->where('tag', 'like', '%'.$filter.'%');
    }

    public function scopeQueryBetweenPrice($query, $filter)
    {
        return $query->whereBetween('price', $filter);
    }

    public function scopeQueryOrder($query, $filter)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopeQueryStyle($query)
    {
        return $query->where('tag', 'like', '%style%');
    }
}
