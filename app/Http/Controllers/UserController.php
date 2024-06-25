<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;


class UserController extends Controller
{
    use ValidatesRequests;
    public function index()
    {
        $users = User::all();
        return view('admin.user.user-list', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('admin.user.user-add');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required',
            'address' => 'required',
            'level' => 'required',
        ]);

        // Create a new User instance
        $user = new User();
        $user->fill($request->only([
            'name', 'email', 'password', 'phone', 'address', 'level',
        ]));
        $user->save();

        // Redirect back to the list of users
        return redirect()->route('users.index')->with('success', 'Thêm mới người dùng thành công.');
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.user-edit', compact('user'));
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'phone' => 'required',
            'address' => 'required',
            'level' => 'required',
        ]);

        // Find the user to update
        $user = User::findOrFail($id);
        $user->fill($request->only([
            'name', 'email', 'phone', 'address', 'level',
        ]));
        $user->save();

        // Redirect back to the list of users
        return redirect()->route('users.index')->with('success', 'Thông tin người dùng đã được cập nhật thành công.');
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('users.index')->with('success', 'Người dùng đã được xóa thành công.');
    }
    public function getLogin()
    {
        return view('admin.login');
    }

    public function postLogin(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6|max:20'
        ], [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Không đúng định dạng email',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu ít nhất 6 ký tự',
            'password.max' => 'Mật khẩu tối đa 20 ký tự'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('admin/dashboard')->with(['flag' => 'alert', 'message' => 'Đăng nhập thành công']);
        } else {
            return redirect()->back()->with(['flag' => 'danger', 'message' => 'Đăng nhập không thành công']);
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('admin.getLogin');
    }
    public function dashboard()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $userCount = User::count();

        return view('admin.dashboard', compact('productCount', 'categoryCount', 'userCount'));
    }
}
