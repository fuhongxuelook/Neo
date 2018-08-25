<?php

namespace App\Entity\Engine;

use App\Entity\Schema\Repositories\ItemRepository;
use App\Entity\Params\ItemParams;
use Illuminate\Support\Facades\Gate;

class ItemService
{
    /**
     * 用户推荐列表
     * @return array
     */
    public function itemRecommends()
    {
        $list = ItemRepository::itemRecommends();
        return $list;
    }

    public function guessULike(ItemParams $params)
    {
        $id = $params->getId();
    }

    public function itemInfo(ItemParams $params)
    {
        $id = $params->getId();
        $list = ItemRepository::itemInfo($id);
        return $list;
    }

    public function itemFilter(ItemParams $params)
    {
        $param = array();
        $param[0] = $params->getCategory();
        $param[1] = $params->getPrice();
        $param[2] = $params->getOrder();
        $list = ItemRepository::itemFilter($param);
        return $list;
    }

    public function itemStyle()
    {
        $list = ItemRepository::itemStyle();
        return $list;
    }
}
