<?php

namespace App\Http\Middleware;

use Closure;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //code kiem tra user đã login chưa
        if (\Auth::check()) { // hàm kiểm tra user đã login chưa
            //lấy ra user đang login
            $user= \Auth::user();
            // dd($user);
            //ktra role user có phải là admin
            if ($user->role == 'admin') {
                //nếu đúng -> tiếp đi tiếp
                return $next($request);  
            } else {
            //nếu sai -> về home
                return redirect()->route('home');
            }
        } else {
        //chưa login thì chuyển về trang login
            return redirect()->route('login');
        }


    }
}
