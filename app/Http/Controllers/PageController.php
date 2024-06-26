<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Bill;
use App\Models\Customer;
use App\Models\BillDetail;
use App\Models\Category;


class PageController extends Controller
{   
    use ValidatesRequests;
    public function index()
    {
       
        $products = Product::all();
        return view('pages.home', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.product', compact('product'));
    }

    public function showCategory($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return redirect()->back()->with('error', 'Category not found');
        }

        $products = Product::where('category_id', $id)->get();

        return view('pages.category', compact('category', 'products'));
    }

    public function addToCart(Request $request,$id){
        $product=Product::find($id);
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($product,$id);
        $request->session()->put('cart',$cart);
        return redirect()->back();
     }
    
     public function delCartItem($id){
        $oldCart=Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        }else Session::forget('cart');
        return redirect()->back();
    }

    public function getCheckout(){
        return view('pages.checkout');
    }
    
    public function postCheckout(Request $request){
    
        
        $cart=Session::get('cart');
        $customer=new Customer();
        $customer->name=$request->input('name');
        $customer->gender=$request->input('gender');
        $customer->email=$request->input('email');
        $customer->address=$request->input('address');
        $customer->phone_number=$request->input('phone_number');
        $customer->note=$request->input('notes');
        $customer->save();
    
        $bill=new Bill();
        $bill->id_customer=$customer->id;
        $bill->date_order=date('Y-m-d');
        $bill->total=$cart->totalPrice;
        $bill->payment=$request->input('payment_method');
        $bill->note=$request->input('notes');
        $bill->save();
    
        foreach($cart->items as $key=>$value)
        {
            $bill_detail=new BillDetail();
            $bill_detail->id_bill=$bill->id;
            $bill_detail->id_product=$key;
            $bill_detail->quantity=$value['qty'];
            $bill_detail->unit_price=$value['price']/$value['qty'];
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->route('pages.index')->with('success', 'Đặt hàng thành công!');
    
    }

    public function getSignin(){
       
        return view('pages.dangky');
    }
    
    public function postSignin(Request $req){
        $validated = $req->validate(
            [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20',
                'phone' => 'required',
                'name' => 'required',
                'repassword' => 'required|same:password'
            ],
            [
                'email.required' => 'Vui lòng nhập email',
                'email.email' => 'Không đúng định dạng email',
                'email.unique' => 'Email đã có người sử dụng',
                'password.required' => 'Vui lòng nhập mật khẩu',
                'repassword.same' => 'Mật khẩu không giống nhau',
                'password.min' => 'Mật khẩu ít nhất 6 ký tự'
            ]
        );
    
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password =Hash::make ($req->password); // Mã hóa mật khẩu
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->level = 3;  //level=1: admin; level=2:kỹ thuật; level=3: khách hàng
        $user->save();
    
        return redirect()->back()->with('success', 'Tạo tài khoản thành công');
    }
    
    
    public function getLogin(){
        return view('pages.dangnhap');
    }
    
    public function postLogin(Request $req){
        $this->validate($req,
        [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
        ],
        [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 ký tự'
        ]
        );
        $credentials=['email'=>$req->email,'password'=>$req->password];
        if(Auth::attempt($credentials)){//The attempt method will return true if authentication was successful. Otherwise, false will be returned.
            return redirect()->route('pages.index')->with(['flag'=>'alert','message'=>'Đăng nhập thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }
    }
    
    public function getLogout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('pages.index');
    }

    public function getInputEmail(){
        return view('emails.input-email');
    }

//hàm xử lý gửi email
    public function postInputEmail(Request $req){
        $email=$req->txtEmail;
        //validate

        // kiểm tra có user có email như vậy không
        $user=User::where('email',$email)->get();
        //dd($user);
        if($user->count()!=0){
            //gửi mật khẩu reset tới email
            $sentData = [
                'title' => 'Mật khẩu mới của bạn là:',
                'body' => '123456'
            ];
            Mail::to($email)->send(new \App\Mail\SendMail($sentData));
            Session::flash('message', 'Send email successfully!');
            return view('pages.dangnhap');  //về lại trang đăng nhập của khách
        }
        else {
              return redirect()->route('getInputEmail')->with('message','Your email is not right');
        }
    }//hết postInputEmail
}


    

