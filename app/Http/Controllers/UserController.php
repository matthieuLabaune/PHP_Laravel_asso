<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Models\License;
use App\Models\Membership;
use App\Models\Team;
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
        $licences = License::all();
        $memberships = Membership::all();
        return view('users.create', ['licenses' => $licences, 'memberships' => $memberships]);
    }

    /**
     * @param StoreUser $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUser $request, Team $team)
    {
        $user = User::create($request->all());
        $user->licenses()->attach($request->cats);
        return redirect()->route('users.index');
        /*
         * IF TEAMS ARE ENABLED IN JETSTREAM
         *
                if ($request->user()->hasTeamPermission($team, 'read')) {
                    $user = User::create($request->all());
                    $user->licenses()->attach($request->cats);
                } else {
                    return redirect()->back()->withErrors(['Vous ne pouvez pas créer un utilisateur. Authorisation refusée !']);
                }
                return redirect()->route('users.index');*/
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(User $user)
    {
        $this->authorize('update', $user);

        $user->with('licenses')->get();
        return view('users.show', ['user' => $user]);
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);

        $licenses = License::all();
        return view('users.edit', ['user' => $user, 'licenses' => $licenses]);
    }

    /**
     * @param UpdateUser $request
     * @param User $user
     * @param Team $team
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function update(UpdateUser $request, User $user)
    {
        $this->authorize('update', $user);

        $user->update($request->all());
        $user->licenses()->sync($request->cats);
        return view('users.show', ['user' => $user]);

        /*
       * IF TEAMS ARE ENABLED IN JETSTREAM
       *
      if ($request->user()->hasTeamPermission($team, 'read')) {
          $user->update($request->all());
          $user->licenses()->sync($request->cats);
      } else {
          return redirect()->back()->withErrors(['Vous ne pouvez pas éditer un utilisateur. Authorisation refusée !']);
      }
      return view('users.show', ['user' => $user]);
        */
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
