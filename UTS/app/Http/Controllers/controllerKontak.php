<?php

namespace App\Http\Controllers;
use App\modelKontak as kontak;
use App\Repository\kontakRepository;
use App\Repository\kontakInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Searchable\Search;

class controllerKontak extends Controller
{
    private $kontakRepo;

    public function __construct(kontakInterface $repo){
        $this->kontakRepo = $repo;
    }

    public function index(){
        $listkontak=kontak::all();
        return view('kontak.index',compact('listkontak'));
    }
    
    public function new_form(){
        return view('kontak.new');
    }

    public function edit(int $id){
        $edit = kontak::findOrFail($id);
        return view('kontak.edit',compact('edit'));
    }

    public function update(Request $request){
        $this->kontakRepo->update($request->id,$request->nama,$request->telepon,$request->email,$request->alamat);
        return redirect(route('kontakIndex'));
    }

    public function delete(int $id){
        $this->kontakRepo->delete($id);
        return redirect(route('kontakIndex'));
    }
    public function detail($id){
        $detailkontak = $this->kontakRepo->get($id);
        return view('kontak.detail',compact('detailkontak'));
    }
    public function add(Request $request){
        $this->kontakRepo->create($request->nama,$request->telepon,$request->email,$request->alamat);
        return redirect()->route('kontakIndex');
    }
    public function search(Request $request){
        $listkontak = kontak::when($request->keyword,function($query)use($request){
            $query->where('nama','like',"%{$request->keyword}%");
        })->get();
        
    return view('kontak.index',compact('listkontak'));
    }
}
