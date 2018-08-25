<?php

namespace App\Policies;

use App\User;
use App\Entity\Schema\Repositories\ItemRepository;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function demo(ItemRepository $user,ItemRepository $param) 
    {
        dd($param);
    }

   
}
