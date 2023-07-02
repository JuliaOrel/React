<?php
namespace App\Services\Interfaces;
use App\Presenters\RequestParamsPresenter;

interface ICityService
{
    public function index(RequestParamsPresenter $params);
}
