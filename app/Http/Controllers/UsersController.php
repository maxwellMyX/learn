<?php

namespace App\Http\Controllers;

use App\Modules\UsersService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $request;

    private $usersService;

    public function __construct(Request $request, UsersService $usersService)
    {
        $this->request = $request;
        $this->usersService = $usersService;
    }

    public function create()
    {
        return view('users.create');
    }

}
