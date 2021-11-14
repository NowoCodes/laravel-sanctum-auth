<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Validator;

class AuthController extends BaseController
{
  public function login(Request $request): JsonResponse
  {
    if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
      $authUser = auth()->user();
      $success['token'] = $authUser->createToken('authtoken')->plainTextToken;
      $success['name'] = $authUser->name;

      return $this->sendResponse($success, 'User signed in');
    }

    return $this->sendError('Unauthorised.', ['error' => 'Unauthorised']);
  }

  public function register(Request $request): JsonResponse
  {
    $validator = Validator::make($request->all(), [
      'name' => 'required',
      'email' => 'required|email|unique:users,email',
      'password' => 'required',
      'confirm_password' => 'required|same:password',
    ]);

    if ($validator->fails()) {
      return $this->sendError('Error Validation', $validator->errors());
    }

    $input = $request->all();
    $input['password'] = bcrypt($input['password']);
    $user = User::create($input);
    $success['token'] = $user->createToken('authtoken')->plainTextToken;
    $success['name'] = $user->name;

    return $this->sendResponse($success, 'User created successfully');
  }



//  public function login(Request $request)
//  {
//    try {
//      $request->validate([
//        'email' => 'email|required',
//        'password' => 'required',
//      ]);
//
//      $credentials = request(['email', 'password']);
//      if (!Auth::attempt($credentials)) {
//        return response()->json([
//          'status_code' => 500,
//          'message' => 'Unauthorized'
//        ]);
//      }
//
//      $user = Auth::user();
//      $tokenResult = $user->createToken('authtoken')->plainTextToken;
//      return response()->json([
//        'status_code' => 200,
//        'access_token' => $tokenResult,
//        'token_type' => 'Bearer',
//      ]);
//    } catch (Exception $error) {
//      return response()->json([
//        'status_code' => 500,
//        'message' => 'Error in Login'
//      ]);
//    }
//  }
}
