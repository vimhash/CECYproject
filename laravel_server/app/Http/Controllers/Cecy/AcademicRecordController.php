<?php

namespace App\Http\Controllers\Cecy;

use App\Http\Controllers\Controller;
use App\Models\Cecy\AcademicRecord;
use Illuminate\Http\Request;

class AcademicRecordController extends Controller
{
    public function index(Request $request)
    {
        $academic_record = AcademicRecord::all();

        return response()->json([
                'data' => [
                    'type' => 'academic_record',
                    'attributes' => $academic_record
                ]]
            , 200);
    }

    public function filter(Request $request)
    {
        $academic_record = AcademicRecord::where('name', $request->name)->orderBy('name')->get();
        return response()->json([
                'data' => [
                    'type' => 'academic_record',
                    'attributes' => $academic_record
                ]]
            , 200);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        AcademicRecord::create($data);
        return response()->json([
            'data' => [
                'attributes' => $data,
                'type' => 'academic_record'
            ]
        ], 201);
    }

    public function update(Request $request, $id, AcademicRecord $AcademicRecord)
    {
        $data = $request->json()->all();

        $AcademicRecord = AcademicRecord::where('id', $id)->update([
            'name'=>$data['name']
        ]);
        return response()->json([
            'data' => [
                'type' => 'academic_record',
                'attributes' => $data
            ]
        ], 200);
    }

    public function destroy($id)
    {
        $academic_record = AcademicRecord::destroy($id);
        return response()->json([
            'data' => [
                'attributes' => $id,
                'type' => 'academic_record'
            ]
        ], 201);
    }
}
