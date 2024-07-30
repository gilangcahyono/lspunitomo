<?php

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

function userMapping($users)
{
  return collect($users)->map(fn ($user) => ([
    'person' => !Arr::exists($user, 'nim') ? 'lecturer' : 'student',
    'username' => !Arr::exists($user, 'nim') ? $user['nidn'] : $user['nim'],
    'email' => $user['email'],
    'password' => $user['pin'],
    'type' => 'internal',
  ]));
}

function getAccounts()
{
  $students = getStudents();
  $lecturers = getLecturers();
  $users = collect([...$students, ...$lecturers])->map(fn ($user) => ([
    'username' => !Arr::exists($user, 'nim') ? $user['nidn'] : $user['nim'],
    'password' => $user['pin'],
  ]));
  return $users;
}

function getUsers()
{
  $students = getStudents();
  $lecturers = getLecturers();
  return collect([...$students, ...$lecturers]);
}

function getUserActive()
{
  $user =  getUsers()->firstWhere('nim', auth()->user()->username);
  return $user ? $user : getUsers()->firstWhere('nidn', auth()->user()->username);
}

function getStudents()
{
  $students = Http::get(url(env('API_URL') . '/students'))->json();
  return collect($students);
}

function getLecturers()
{
  $lecturers = Http::get(url(env('API_URL') . '/lecturers'))->json();
  return collect($lecturers);
}

// function checkUserRole(array $roles = [])
// {
//   return  auth()->user()->role->whereIn('level', $roles)->first();
// }

function lateSchedule($scheduleDateTime)
{
  // Konversi string tanggal jadwal menjadi objek Carbon
  $scheduleTime = Carbon::parse($scheduleDateTime);

  // Mendapatkan waktu sekarang
  $currentTime = Carbon::now();

  // Memeriksa apakah waktu sekarang telah melewati jadwal yang ditentukan
  return $currentTime->gt($scheduleTime);
}

function downloadFile($file)
{
  return response()->download($file)->deleteFileAfterSend(true);
}
