<?php

namespace App\Services\Interfaces;

use App\Presenters\RequestParamsPresenter;

interface ICachable
{
    public function index(RequestParamsPresenter $params);
}
