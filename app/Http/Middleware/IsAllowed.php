<?php


namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class IsAllowed
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $resource)
    {
        if (Gate::allows($resource)) {
            return $next($request);
        }
        echo 'нет прав';
//        abort(403);
    }
}
