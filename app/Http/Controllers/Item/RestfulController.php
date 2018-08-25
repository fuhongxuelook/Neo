<?php
namespace App\Http\Controllers\Item;

use App\Entity\Engine\ItemService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;

header('Access-Control-Allow-Origin:*');  
// 响应类型  
header('Access-Control-Allow-Methods:*');  
// 响应头设置  
header('Access-Control-Allow-Headers:x-requested-with,content-type');

class RestfulController extends Controller 
{

	private $service;
	private $request;

	function __construct(ItemService $service,ItemRequest $request) 
    {
		$this->service = $service;
		$this->request = $request;
	}

	/**
	 * Home模块页面入口文件
 	 */
	public function itemRecommends() 
    {
        $list = $this->service->itemRecommends();
        return response(['code' => 200, 'msg'=>'成功', 'data'=> $list]);
    }

    public function itemInfo()
    {
    	$list = $this->service->itemInfo($this->request->toParamsBean());
    	return response(['code' => 200, 'msg'=>'成功', 'data'=> $list]);
    }

    public function itemFilter()
    {
    	$list = $this->service->itemFilter($this->request->toParamsBean());
    	return response(['code' => 200, 'msg'=>'成功', 'data'=> $list]);
    }
}
