<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\IsAllowed;

class Authenticate extends Middleware
{
    public function handle($request, Closure $next, ...$guards)
    {
        $this->authenticate($request, $guards);

        $allowResources = [
            'admin' => [
                'view-admin-dashboard',
                'edit-admin-dashboard',
                'delete-admin-dashboard',
            ],
            'guest' => [
                'view-admin-dashboard',
            ]
        ];

        $allowUserResources = $allowResources[Auth::user()->roles()->first()->title];

//        dd($allowUserResources);

        $aclResources = [
            'view-admin-dashboard',
            'edit-admin-dashboard',
            'delete-admin-dashboard',
        ];
        foreach ($aclResources as $item){
            Gate::define($item, function (User $user) use ($item, $allowUserResources){
                if (in_array($item, $allowUserResources, true)){
                    return true;
                 }
                return false;
            });
        }
        return $next($request);
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
