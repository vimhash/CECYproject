<?php

namespace App\Http\Controllers\Cecy;

use App\Http\Controllers\Controller;
use App\Models\Cecy\Agreements;
use Illuminate\Http\Request;

class CourseInstructorController extends Controller
{
    public function index(Request $request)
    {
        $agreements = Agreements::all();

        return response()->json([
                'data' => [
                    'type' => 'agreements',
                    'attributes' => $agreements
                ]]
            , 200);
    }

    public function filter(Request $request)
    {
        $agreements = Agreements::where('name', $request->name)->orderBy('name')->get();
        return response()->json([
                'data' => [
                    'type' => 'agreements',
                    'attributes' => $agreements
                ]]
            , 200);
    }

    public function store(Request $request)
    {
        $data = $request->json()->all();

        Agreements::create([
            "name" => $data["name"],
        ]);
        return response()->json([
            'data' => [
                'attributes' => $data,
                'type' => 'agreements'
            ]
        ], 201);
    }

    public function update(Request $request, $id, Agreements $Agreements)
    {
        $data = $request->json()->all();

        $Agreements = Agreements::where('id', $id)->update([
            'name'=>$data['name']
        ]);
        return response()->json([
            'data' => [
                'type' => 'agreements',
                'attributes' => $data
            ]
        ], 200);
    }

    public function destroy($id)
    {
        $agreements = Agreements::destroy($id);
        return response()->json([
            'data' => [
                'attributes' => $id,
                'type' => 'agreements'
            ]
        ], 201);
    }
}
