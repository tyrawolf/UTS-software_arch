<?php
    namespace App\Repository;
    use App\modelKontak;

    interface kontakInterface{
        public function create(char $nama, char $telepon,char $email,text $alamat);
        public function all();
        public function get(int $id);
        public function update(int $id,$nama,$telepon,$email,$alamat);
        public function delete(int $id);
    }
?>