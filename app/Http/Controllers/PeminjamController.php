<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\peminjaman;

class PeminjamController extends Controller
{
    public function datapeminjam()
    {
      $peminjam_list = peminjaman::orderBy('nim', 'asc') ->Paginate(10);
      $jumlah_peminjaman = peminjaman::count();
      return view('peminjam.datapeminjam', compact('mahasiswa', 'peminjam_list', 'jumlah_peminjaman'));
    }
    public function store(Request $request)
    {
      $input = $request->all();
      peminjaman::create($input);
      return redirect('peminjaman');
    }
    public function show($id)
    {
      $mahasiswa = 'peminjaman';
      $peminjaman = peminjaman::findOrFail($id);
      return view('peminjam.show', compact('mahasiswa','peminjaman'));
    }
    public function edit($id)
    {
      $peminjaman =peminjaman::findOrFail($id);
      return view('peminjam.edit', compact('peminjaman'));
    }
    public function update($id, Request $request)
    {
      $peminjaman = peminjaman::findOrFail($id);
      $peminjaman->update($request->all());
      return redirect('datapeminjam');
    }
    public function destroy($id){
      $peminjaman = peminjaman::findOrFail($id);
      $peminjaman->delete();
      return redirect('datapeminjam');
    }
}
