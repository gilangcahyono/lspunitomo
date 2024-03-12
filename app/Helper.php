<?php

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

function getUsers()
{
  $res1 = Http::get(url('http://localhost:2002/students'))->json();
  $res2 = Http::get(url('http://localhost:2002/lecturers'))->json();
  $users = [...$res1, ...$res2];
  return collect($users);
}

function getUserActive()
{
  $user =  getUsers()->firstWhere('nim', auth()->user()->username);
  return $user ? $user : getUsers()->firstWhere('nidn', auth()->user()->username);
}

function upsertUser()
{
  $response = getUsers();

  $users = $response->map(fn ($user) => [
    'username' => !Arr::exists($user, 'nim') ? $user['nidn'] : $user['nim'],
    'password' => $user['pin'],
  ]);

  foreach ($users as $user) {
    User::updateOrCreate(
      [
        'username' => $user['username'],
      ],
      [
        'username' => $user['username'],
        'password' => $user['password'],
      ]
    );
  }
}
