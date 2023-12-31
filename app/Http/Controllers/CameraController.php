<?php

namespace App\Http\Controllers;

use App\Http\Requests\CameraRequest;
use App\Models\Camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Camera::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CameraRequest $request)
    {
        return Camera::create($request->all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CameraRequest $request)
    {
        return Camera::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Camera::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return Camera::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return Camera::findOrFail($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Camera::findOrFail($id)->delete();
    }
}
