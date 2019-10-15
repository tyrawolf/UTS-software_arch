<?php
    namespace App\Repository;
    use App\modelKontak as kontak;

    class kontakRepository implements kontakInterface{
        public function create($nama,$telepon,$email,$alamat){
            $newkontak = new kontak;
            $newkontak->nama=$nama;
            $newkontak->telepon=$telepon;
            $newkontak->email=$email;
            $newkontak->alamat=$alamat;
            $newkontak->save();
        }
        public function all(){
            return kontak::all();
        }
        public function get($id){
            return kontak::findOrFail($id);
        }
        public function update(int $id,$nama,$telepon,$email,$alamat){
            kontak::findOrFail($id)->update(['nama'=>$nama,'telepon'=>$telepon,'email'=>$email,'alamat'=>$alamat]);
        }
        public function delete(int $id){
            $newkontak = kontak::find($id);
            $newkontak->delete();
        }
        public function search($nama){
            return kontak::findOrFail($nama);
        }

    }
?>