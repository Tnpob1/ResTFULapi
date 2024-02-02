<?php

namespace App\Http\Controllers;

use App\Models\MjuStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MjuStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = MjuStudent::all();
        return $student;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'student_code' => 'required|string|max:15',
            'first_name' => 'required|string|max:50',
            'first_name_en' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'last_name_en' => 'required|string|max:50',
            'major_id' => 'required|exists:majors,major_id',
            'idcard' => 'required||digits:13',
            // 'birthdate' => 'required||date',
            // 'gender' => 'required||string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'nick_name' => 'required|string',
        ]);

        MjuStudent::create($validated);

        return response()->json(['message' => 'Student created successfully'], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(MjuStudent $mju){
        Log::info("mju->".$mju);

        return response()->json(
            [
                'message' => 'Student get successfully',
                'get Data by' => 'Tinnapob',
                'data' => $mju
            ],
            200
        );









    // // ดึงข้อมูลของนักศึกษาจากฐานข้อมูลโดยใช้ ID
    // $mjuStudentd = MjuStudent::pluck('student_id')->toArray();

    // // ตรวจสอบว่าพบนักศึกษาหรือไม่
    // if ($mjuStudentd) {

    //     return view('students.show', ['student' => $mjuStudentd]);
    // } else {
    //     // จัดการกรณีที่ไม่พบนักศึกษา
    //     return response()->json(['error' => 'Student not found'], 404);
    // }
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
