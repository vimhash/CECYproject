<?php

namespace App\Http\Controllers\Cecy;

use App\Http\Controllers\Controller;
use App\Models\Cecy\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $schedules = Schedule::all();

        return response()->json([
                'data' => [
                    'type' => 'schedules',
                    'attributes' => $schedules
                ]]
            , 200);
    }

    public function filter(Request $request)
    {
        $schedules = Schedule::where('type', $request->type)->orderBy('name')->get();
        return response()->json([
                'data' => [
                    'type' => 'schedules',
                    'attributes' => $schedules
                ]]
            , 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->json()->all();
        
        Schedule::create($data);
        return response()->json([
            'data' => [
                'attributes' => $schedules,
                'type' => 'schedules'
            ]
        ], 201);
    }




    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Schedule $Schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $Schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Schedule $Schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $Schedule)
    {
        //
    }
}
