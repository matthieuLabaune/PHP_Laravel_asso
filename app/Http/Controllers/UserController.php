<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Models\License;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::with('licenses')->get();
        return view('users.index', ['users' => $users]);
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * @param StoreUser $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUser $request, User $user)
    {
        /*User::create($request->all());*/
        $user = new User();
        $user->create($request->all());
        return redirect()->route('users.index');
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    /**
     * @param UpdateUser $request
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(UpdateUser $request, User $user)
    {
        $validated = $request->validated();
        $user->update($validated->all());
        $user->save();

        return view('users.show', ['user' => $user]);
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
