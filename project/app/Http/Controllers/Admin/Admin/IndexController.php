<?php

namespace App\Http\Controllers\Admin\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;                 
use Hash;   //laravel  框架自己的加密
use Phone;    //导入自定义一个A类
use App\Models\User; //模型

use App\Http\Requests\AdminUserInsert;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   



         //$data=DB::table('users')->get();

         $index=$request->input('sousuo');

         $data=User::where('username','like',"%".$index."%")->paginate(3);
         //$data=DB::table('users')->where('username','like',"%".$index."%")->paginate(3);
        
        return view('Admin.Admin.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('Admin.Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data=$request->except(['_token','repassword']);
       $data['password']=Hash::make($data['password']);
       $data['status']=1;
       $data['token']=str_random(50);

       $table=User::create($data);
       //$table=DB::table('users')->insert($data);

       if($table){
            return redirect('/admin')->with('success','添加成功');
       }else{
        return redirect('/admin')->with('error','添加失败');
       }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

        $data=User::find($id)->info;
        
       return view('Admin.Admin.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        //$data=User::where('id','=',$id)->first();
        $data=User::find($id);

        return view('Admin.Admin.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   

        $update=$request->except(['_token','_method']);
        
         $data=DB::table('users')->where('id','=',$id)->update($update);
        if($data){
            return redirect('/admin')->with('success','修改成功');
       }else{
        return redirect('/admin')->with('error','修改失败');
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table=User::where('id','=',$id)->delete();


         if($table){
            return redirect('/admin')->with('success','删除成功');
       }else{
        return redirect('/admin')->with('error','删除失败');
       }
    }

    public function address($id){
        $data=User::find($id)->add;
       // dd($data);
       return view('Admin.Admin.address',['data'=>$data]);
    }

   

}
