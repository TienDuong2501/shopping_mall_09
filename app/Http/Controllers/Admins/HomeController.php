<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\InterfaceRepository\HomeAdminInterfaceRepository;

class HomeController extends Controller
{
    protected $homeAdminRepository;

    public function __construct(HomeAdminInterfaceRepository $homeAdminRepository)
    {
        $this->homeAdminRepository = $homeAdminRepository;
    }


    public function index()
    {
        return view('admin.home.index');
    }

    public function getAmountUser()
    {
        return $this->homeAdminRepository->getAmountUser();
    }


    public function getAmountProduct()
    {
        return $this->homeAdminRepository->getAmountProduct();
    }
    

    public function getAmountOrder()
    {
        return $this->homeAdminRepository->getAmountOrder();
    }
}
