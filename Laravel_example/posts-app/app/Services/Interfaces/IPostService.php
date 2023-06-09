<?php

namespace App\Services\Interfaces;

use App\Presenters\RequestParamsPresenter;

interface IPostService extends ICachable
{
    public function index(RequestParamsPresenter $params);
}
