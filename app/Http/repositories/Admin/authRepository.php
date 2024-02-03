<?php 
namespace App\Http\repositories\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\loginRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\interfaces\Admin\authInterface;
use Illuminate\Support\Facades\Session;

class authRepository implements authInterface
{
    public function viewLogin ()
    {
        return view('Admin.auth.login');
    }

    public function login (loginRequest $request)
    {
        $credentials = $request->only('email' , 'password') ;
        if (Auth::attempt($credentials))
        {
            return redirect(route('admin.index'));
        }
        Alert::error('error' , 'User Not Found');
        return redirect()->back();
    }

    public function logout ()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('admin.login'));
    }
}
?>