<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserEquipmentBuyRequest;
use App\Models\UserEquipment;
use App\Repositories\UserEquipmentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserEquipmentController extends Controller
{
    protected $userEquipmentRepository;

    public function __construct(UserEquipmentRepository $userEquipmentRepository)
    {
        $this->userEquipmentRepository = $userEquipmentRepository;
    }

    public function store(UserEquipmentBuyRequest $request)
    {
        $this->userEquipmentRepository->buy($request->model_type, $request->model_id);
        return 'ok';
    }

    public function get()
    {
        return $this->userEquipmentRepository->get();
    }
}
