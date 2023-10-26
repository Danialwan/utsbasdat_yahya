<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function restore(string $id){
        $data = [
            'delete' => 0
        ];
        DB::table('role')->where('id', $id)->update($data);
        return redirect('/Karyawan')->with('success','Berhasil merestore data');
    }

    public function index()
    {
        //
    }

    public function show_restore(){
        $data =  DB::table('role')->where('delete',1)->get();
        return view('Role.restore')->with('roles',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Role.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Session::flash('nama_role', $request->nama_role);

        $request -> validate([
            'nama_role' => 'required',
        ],[
            'nama_role.required' => 'Nama Role wajib di isi',
        ]);
        $data = [
            'nama_role' => $request->input('nama_role'),
            'created_at' => now(),
            'updated_at' => now()
        ];

        DB::table('Role')->insert($data);
        return redirect('Karyawan')->with('success','Berhasil memasukan data');
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
    public function edit(string $id)
    {
        $data = DB::table('Role')->where('id', $id)->first();
        return view('Role.Edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request -> validate([
            'nama_role' => 'required',
        ],[
            'nama_role.required' => 'Nama Role wajib di isi',
        ]);
        $data = [
            'nama_role' => $request->input('nama_role'),
        ];

        DB::table('Role')->where('id', $id)->update($data);
        return redirect('Karyawan')->with('success','Berhasil memasukan data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = [
            'delete' => 1
        ];
        DB::table('role')->where('id',$id)->update($data);
        return redirect('/Karyawan')->with('success','Berhasil menghapus data');
    }
}
