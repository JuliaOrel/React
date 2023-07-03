<?php

namespace App\Services\Interfaces;

use App\Presenters\RequestParamsPresenter;
use Illuminate\Http\Request;

interface ICachable
{
    public function index(RequestParamsPresenter $params);

}
