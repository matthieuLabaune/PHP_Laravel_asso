<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Models\License;
use App\Models\Membership;
use App\Models\User;


class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::with('memberships.license')->get();
        return view('users.index', ['users' => $users]);
    }

    /**
     * @return mixed
     */
    public function create()
    {
        $licences = License::all();
        $memberships = Membership::all();
        return view('users.create', ['licenses' => $licences, 'memberships' => $memberships]);
    }

    /**
     * @param StoreUser $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUser $request)
    {
        $user = User::create($request->all());
        /*     $user->licenses()->attach($request->cats);*/
        return redirect()->route('users.index');
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(User $user)
    {
/*        $user = User::with('memberships')->get();*/
        return view('users.show', ['user' => $user]);
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);

        /*        $licenses = License::all();*/
        return view('users.edit', ['user' => $user/*, 'licenses' => $licenses*/]);
    }

    /**
     * @param UpdateUser $request
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(UpdateUser $request, User $user)
    {
        $this->authorize('update', $user);

        $user->update($request->all());
        /*        $user->licenses()->sync($request->cats);*/
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
