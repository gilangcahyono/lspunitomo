<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->upsertStudent();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $response = Http::get('https://dummyjson.com/users')['users'];

        // return $response[0]['address']['city'];

        // foreach ($response as $res) {
        //     echo $res->address;
        // }

        return Student::all();
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }

    public function upsertStudent()
    {
        $response = Http::get('https://dummyjson.com/users')['users'];

        foreach ($response as $res) {
            Student::updateOrCreate([
                'user_id' => $res['id'],
                'name' => $res['firstName'] . ' ' . $res['lastName'],
                'birthdate' => $res['birthDate'],
                'gender' => $res['gender'],
                'phone' => $res['phone'],
                'address' => $res['address']['city'],
            ]);
        }
    }
}
