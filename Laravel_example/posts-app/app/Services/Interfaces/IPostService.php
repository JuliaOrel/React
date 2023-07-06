<?php

namespace App\Services\Interfaces;

use app\Presenters\RequestParamsPresenter;

interface IPostService
{
    public function index(RequestParamsPresenter $params);
}
