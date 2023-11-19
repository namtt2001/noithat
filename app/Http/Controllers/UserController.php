<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(){
        return view('page.login');
    }

    public function register(){
        return view('page.register');
    }
    public function postRegister(Request $request){

        $existingUser = User::where('email', $request->input('email'))->first();
        if ($existingUser) {
            // Email đã tồn tại, hiển thị thông báo lỗi
            return redirect()->back()->with('error', 'Email đã tồn tại trong hệ thống.');
        } else {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->address = $request->input('address');
            $user->phone = $request->input('phone');
            $user->password = $request->input('password');
            $user->role = 0;
            $user->save();
            return redirect()->route('login')->with('success', 'Người dùng đã được thêm thành công!');
      }

    }
    public function postLogin(Request $request){
        $data = [
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ];
        if(Auth::attempt($data)){
            $user = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
            if ($user->role === 1) {
                // Xử lý cho vai trò 'admin'
                return redirect()->route('admin.index');
            } elseif ($user->role === 0) {
                // Xử lý cho vai trò 'user'
                return redirect()->route('index');
            } else {
                // Vai trò không hợp lệ
                return redirect()->intended('login');
                }
         }
     }
     public function logout(){
        Auth::logout();
        return redirect()->back();
      }
      public function index()
    {
        $user = User::all();
        return view('admin.user.index', compact ('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $existingUser = User::where('email', $request->input('email'))->first();
        if ($existingUser) {
            // Email đã tồn tại, hiển thị thông báo lỗi
            return redirect()->back()->with('error', 'Email đã tồn tại trong hệ thống.');
        } else {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->address = $request->input('address');
            $user->phone = $request->input('phone');
            $user->password = $request->input('password');
            $user->role = $request->input('role');
            $user->save();
            return redirect()->route('admin.user')->with('success', 'Người dùng đã được thêm thành công!');
      }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }








    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone' => $request->phone,

            'role' => $request->role,
        ]);
            return redirect()->route('admin.user')->with('success', 'Người dùng đã được thêm thành công!');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.user');
    }



}
