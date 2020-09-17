<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function show(User $user)
  {
    if ($user->id == Auth::user()->id) {
      return view('admin.users.profile', [
        'user' => $user,
      ]);
    } else {
      return redirect()
        ->route('admin-index')
        ->with('danger', 'Nie możesz tego zrobić.');
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function updateProfile(Request $request, User $user)
  {
    if (
      $request->validate([
        'current_password' => ['required', new MatchOldPassword()],
      ])
    ) {
      $inputs = request()->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => [
          'required',
          'string',
          'email',
          'max:255',
          'unique:users,email,' . $user->id,
        ],
      ]);

      $user->update($inputs);

      return redirect()
        ->route('admin-index')
        ->with('success', 'Twoje informacje został zaktualizowane.');
    }
  }

  public function changePassword(Request $request, User $user)
  {
    $request->validate([
      'current_password_change' => ['required', new MatchOldPassword()],
      'new_password' => ['required'],
      'new_confirm_password' => ['same:new_password'],
    ]);

    User::find(auth()->user()->id)->update([
      'password' => Hash::make($request->new_password),
    ]);

    return redirect()
      ->route('admin-index')
      ->with('success', 'Twoje hasło zostało zmienione.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\User  $user
   * @return \Illuminate\Http\Response
   */
  public function destroy(User $user)
  {
    //
  }
}
