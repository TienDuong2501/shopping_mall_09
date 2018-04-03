<?php
namespace App\Repositories\EloquentRepository;

use App\Repositories\InterfaceRepository\HomeAdminInterfaceRepository;
use App\Model\Product;
use App\Model\User;
use App\Model\Order;

class HomeAdminRepository implements HomeAdminInterfaceRepository
{
    public function getAmountUser()
    {
        $countUser = User::count();
        return response()->json(['countUser' => $countUser]);
    }

    public function getAmountProduct()
    {
        $countProduct = Product::count();
        return response()->json(['countProduct' => $countProduct]);
    }

    public function getAmountOrder()
    {
        $countOrder = Order::count();
        return response()->json(['countOrder' => $countOrder]);
    }
}
