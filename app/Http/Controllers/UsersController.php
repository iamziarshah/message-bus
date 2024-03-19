<?php

namespace App\Http\Controllers;

use App\Events\UserDataSaved;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Log;

class UsersController extends Controller
{
    public function store(UserRequest $userRequest)
    {
        $data = [
            'email' => $userRequest->email,
            'firstName' => $userRequest->firstName,
            'lastName' => $userRequest->lastName
        ];

        Log::info('User Data Saved: ' . json_encode($data));
        event(new UserDataSaved($data));
        return response()->json([
            'status' => '200',
            'success' => true,
            'message' => 'User data saved successfully',
        ]);

    }
}
