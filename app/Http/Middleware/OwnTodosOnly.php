<?php

namespace App\Http\Middleware;

use App\Models\Todo;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OwnTodosOnly
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $ownerId = $request->route()->parameter('todo')?->user_id;

        if ($ownerId && $ownerId !== auth()->id()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        return $next($request);
    }
}
