<?php

namespace App\Http\Controllers\Cecy;

use App\Http\Controllers\Controller;
use App\Models\Cecy\CoursesContent;
use Illuminate\Http\Request;

class CoursesContentController extends Controller
{
    public function index(Request $request)
    {
        $course_content = CoursesContent::all();

        return response()->json([
                'data' => [
                    'type' => 'course_content',
                    'attributes' => $course_content
                ]]
            , 200);
    }

    public function filter(Request $request)
    {
        $course_content = CoursesContent::where('name', $request->name)->orderBy('name')->get();
        return response()->json([
                'data' => [
                    'type' => 'course_content',
                    'attributes' => $course_content
                ]]
            , 200);
    }

    public function store(Request $request)
    {
        $data = $request->json()->all();

        CoursesContent::create([
            "name" => $data["name"],
        ]);
        return response()->json([
            'data' => [
                'attributes' => $data,
                'type' => 'course_content'
            ]
        ], 201);
    }

    public function update(Request $request, $id, CoursesContent $CoursesContent)
    {
        $data = $request->json()->all();

        $CoursesContent = CoursesContent::where('id', $id)->update([
            'name'=>$data['name']
        ]);
        return response()->json([
            'data' => [
                'type' => 'course_content',
                'attributes' => $data
            ]
        ], 200);
    }

    public function destroy($id)
    {
        $course_content = CoursesContent::destroy($id);
        return response()->json([
            'data' => [
                'attributes' => $id,
                'type' => 'course_content'
            ]
        ], 201);
    }
}
