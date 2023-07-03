<?php
namespace App\Services\Interfaces;
use App\Presenters\RequestParamsPresenter;

interface ICityService extends ICachable
{
    public function index(RequestParamsPresenter $params);
}
