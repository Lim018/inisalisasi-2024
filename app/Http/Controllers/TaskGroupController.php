<?php

namespace App\Http\Controllers;

use App\Models\TaskGroup;
use Illuminate\Http\Request;

class TaskGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        TaskGroup::insert([
            'task_group_name' => $request->task_group_name,
            'active' => 1
        ]);

        return redirect()->back()->with('success', 'Tugas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show( $task_group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $task_group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(  $task_group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $task_group)
    {
        //
    }
}
