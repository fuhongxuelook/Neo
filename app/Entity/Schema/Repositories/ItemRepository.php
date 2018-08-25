<?php

namespace App\Entity\Schema\Repositories;

use App\Entity\Schema\Model\ItemModel;

class ItemRepository
{

    /**
     *
     *  推荐列表
     * @return array
     */
    public static function itemRecommends()
    {
        $field = array('id','name','image_id','thumb_id','price');
        return ItemModel::get($field)->toArray();
    }

    public static function itemFilter($params)
    {
        list($category,$price,$order) = $params;
        $object = self::buildCategoryQuery($category);
        self::buildPriceQuery($price, $object);
        self::buildOrderQuery($order, $object);
        $list = $object ? $object->get()->toArray()
            : ItemModel::get()->toArray();
        
        return $list;
    }

    private static function buildCategoryQuery($category)
    {
        if ($category == '类别') {
            return null;
        }
        $categoryMap = array(
            '鸟布鲸' => 'niao',
            '学院派' => 'university',
            '画风'   => 'style',
            '流浪的艺术' => 'homeless'
        );
        return ItemModel::queryLikeCategory($categoryMap[$category]) ;
    }

    private static function buildPriceQuery($price, &$object)
    {
        if ($price == '价格') {
            return $object;
        }
        $priceMap = array(
            '0~100'   => array(0,100),
            '100~400' => array(100,400),
            '400~800' => array(400,800),
            '800+'    => array(800,9999),
        );
        return $object ? $object->queryBetweenPrice(
            $priceMap[$price]
        ) : ItemModel::queryBetweenPrice(
            $priceMap[$price]
        );
    }

    private static function buildOrderQuery($order, &$object)
    {
        if ($order == '排序') {
            return $object;
        }
        return $object ? $object->queryOrder($order) :
        ItemModel::queryOrder($order);
    }

    /**
     * 物品的信息
     * @param int $id
     * @return array
     */
    public static function itemInfo($id)
    {
        $field = array('id','name','image_id','thumb_id','price');
        return ItemModel::queryById($id)->get($field)->toArray();
    }

    public static function style()
    {
        return ItemModel::queryStyle()->get()->toArray();
    }
}
