<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\User;
use App\Repositories\UserRepositoryInterface;

class UserController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function index()
    {
        $users = $this->userRepository->index();
        return view('user.index',compact('users',$users));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required|min:5|max:255',
                'email'=> 'required|email',
                'password' => 'required|min:6,|max:20'
            ]
            ,
            [
                'name.required' => 'Không được để trống tên',
                'name.min' => 'Tên cần ít nhất 5 kí tự',
                'name.max' => 'Tên không quá 255 kí tự ',
                'email.email' => 'Không đúng định dạng email',
                'email.required'=> 'Không được để trống email',
                'password.required' => 'Không được để trống mật khẩu',
                'password.min' => 'Mật khẩu cần ít nhất 6 kí tự',
                'password.max' => 'Mật khẩu không quá 20 kí tự '
            ]);
        $data = $request->all();
        $this->userRepository->store($data);
        return redirect()->action('UserController@index')->with('mess','Thêm thành công');
    }

    public function show($id)
    {
        $user = $this->userRepository->show($id);
        return view('user.edit',[
            'user' => $user
        ]);
    }
    public function edit($id)
    {
        $user = $this->userRepository->show($id);
        return view('user.edit', compact('user','id'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,
            [
                'name' => 'required|min:5|max:255',
                'email'=> 'required|email|max:100',
                'password' => 'required|min:6,|max:20'
            ]
            ,
            [
                'name.required' => 'Không được để trống tên',
                'name.min' => 'Tên cần ít nhất 5 kí tự',
                'name.max' => 'Tên không quá 255 kí tự ',
//                'name.unique' => 'Tên đã tồn tại ',
                'email.email' => 'Không đúng định dạng email',
                'email.required'=> 'Không được để trống email',
                'email.max' => 'Email không quá 100 kí tự',
//                'email.unique' => 'Email đã được dùng',
                'password.required' => 'Không được để trống mật khẩu',
                'password.min' => 'Mật khẩu cần ít nhất 6 kí tự',
                'password.max' => 'Mật khẩu không quá 20 kí tự '
            ]);
        $data = $request->all();
        $this->userRepository->update($data,$id);
        return redirect('user')->with('mess','Sửa thành công');
    }

    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return redirect('user')->with('mess','Xóa thành công');
    }
}
