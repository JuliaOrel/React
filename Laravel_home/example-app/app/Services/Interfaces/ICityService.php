<?php
namespace App\Services\Interfaces;
use App\Presenters\RequestParamsPresenter;
use Illuminate\Http\Request;

interface ICityService extends ICachable
{
    public function index(RequestParamsPresenter $params);

    public function store(array $data);
    public function show($id);
    public function edit($id);
    public function update($id, array $data);

    public function destroy($id);
}
