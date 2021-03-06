<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class EmailConfirm
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        /** @var User $user */
        $user = auth()->guard($guard)->user();
        if (!$user->is_confirmed) {
            //跳轉至重送驗證信頁面
            return redirect()->route('confirm-mail.resend')->with('warning', '尚未完成信箱驗證');
        }

        return $next($request);
    }
}
