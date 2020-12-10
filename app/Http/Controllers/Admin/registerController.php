<?php

namespace App\Http\Controllers\Admin;

use App\guru;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(auth()->id());
        $user = User::where('NIP', 'not like', "%12345678%")->get();
        return view('admin.register.index',[
            'user'=>$user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $addGuru=DB::table('guru')
            ->leftJoin('users','guru.NIP','=','users.NIP')
            ->whereNull('users.NIP')
            ->select('guru.NIP','guru.nm_guru')
            ->get();
        return view('admin.register.create',[
            'guru'=> $addGuru,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request,[
            'NIP'=>'required|unique:users',
            'password'=>['required', 'string', 'min:8'],
        ],[
            'NIP.unique'=>'NIP sudah memiliki Akun',
        ]);

        $user = User::create([
            'NIP' => $request['NIP'],
            'password' => Hash::make($request['password']),
            'sandi' => ($request['password']),
        ]);
        $user->assignRole($request['hak']);
        return redirect()->route('User.index')
            ->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addGuru=DB::table('guru')
            ->leftJoin('users','guru.NIP','=','users.NIP')
            ->whereNull('users.NIP')
            ->select('guru.NIP','guru.nm_guru')
            ->get();
        return view('admin.register.edit',[
            'users'=>$id,
            'guru'=> $addGuru,
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect()->route('User.index')
            ->with('success','Data Berhasil Ditambahkan');
    }
}
