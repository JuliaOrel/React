<?php
namespace App\Services\Interfaces;
use App\Presenters\RequestParamsPresenter;
use Illuminate\Http\Request;

interface ICityService extends ICachable
{
    public function index(RequestParamsPresenter $params);

    public function store(array $data);
}
