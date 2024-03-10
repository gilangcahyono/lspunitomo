<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function __construct()
    {
        $this->upsertUser();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return [
            'users' => User::all(),
            'total' => User::count(),
        ];
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
    public function show(string $id)
    {
        //
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

    public function upsertUser(): void
    {
        $res1 = Http::get(url('/api/students'))->json();
        $res2 = Http::get(url('/api/lecturers'))->json();

        $students = collect($res1)->map(function ($student) {
            return [
                'name' => $student['name'],
                'username' => $student['nim'],
                'password' => $student['pin'],
                // 'role' => 'student',
            ];
        });

        $lecturers = collect($res2)->map(function ($lecturer) {
            return [
                'name' => $lecturer['name'],
                'username' => $lecturer['nidn'],
                'password' => $lecturer['pin'],
                // 'role' => 'lecturer',
            ];
        });

        $users = $students->concat($lecturers);

        foreach ($users as $user) {
            User::updateOrCreate([
                'name' => $user['name'],
                'username' => $user['username'],
                'password' => $user['password'],
            ]);
        }
    }
}
