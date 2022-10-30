<?php

namespace Database\Seeders;

use App\Models\barang as ModelsBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       ModelsBarang::insert(
            [
                [
                    'namaBarang' => 'Baju Kemeja Batik Santai Kekinian',
                    'fotoBarang' => 'f1.jpg',
                    'harga' => '50000',
                    'stok' => '200',
                    'ukuran' => 'M, L, XL, XXL',
                    'reviewBarang' => '100% Katun, bahan eksklusif yang halus dan terasa nyaman di kulit. 
                    Bahannya yang licin juga membuat kemeja tidak mudah terkena noda membandel. Pas dan terlihat 
                    keren untuk Anda yang berukuran umum.  terasa ringan di badan dan terasa adem 
                    digunakan.',
                ],
                [
                    'namaBarang' => 'Baju Kemeja Batik Santai Kekinian',
                    'fotoBarang' => 'f2.jpg',
                    'harga' => '40000',
                    'stok' => '100',
                    'ukuran' => 'M, L, XL, XXL',
                    'reviewBarang' => 'Baju Kemeja pantai bermotif Kemeja hawai Banyak pilihan warna dan ukuran
                    Desain casual cocok untuk santai Bahan 100% Rayon, sejuk dan nyaman banyak pilihan warna dapatkan harga termurah di toko kami,
                    Karena kami produksi langsung',
                ],
                [
                    'namaBarang' => 'Celana Hawai Santai Kekinian Perempuan',
                    'fotoBarang' => 'f7.jpg',
                    'harga' => '60000',
                    'stok' => '300',
                    'ukuran' => 'M, L, XL, XXL',
                    'reviewBarang' => 'Bagi pecinta celana panjang / Long Pants  wajib banget nih kalian punya produk ini
                    Karena bukan hanya tampilan nya yang bagus, kami juga sangat detail dan hati-hati dalam pengerjaan nya
                    Jahitan nya sangat rapih, dan kami juga memilih kain yang terbaik
                    Produk ini terbuat dari kain Fleece ya ka',
                ],
                [
                    'namaBarang' => 'Celana Hawai Santai Kekinian Perempuan',
                    'fotoBarang' => 'f8.jpg',
                    'harga' => '60000',
                    'stok' => '200',
                    'ukuran' => 'M, L, XL, XXL',
                    'reviewBarang' => 'Bagi pecinta celana pendek / Short Pants  wajib banget nih kalian punya produk ini
                    Karena bukan hanya tampilan nya yang bagus, kami juga sangat detail dan hati-hati dalam pengerjaan nya
                    Jahitan nya sangat rapih, dan kami juga memilih kain yang terbaik
                    Produk ini terbuat dari kain Fleece ya ka',
                ],
                [
                    'namaBarang' => 'Baju Koko Kekinian Untuk Pria',
                    'fotoBarang' => 'n1.jpg',
                    'harga' => '90000',
                    'stok' => '500',
                    'ukuran' => 'M, L, XL, XXL',
                    'reviewBarang' => 'Kain rayon dan nyaman dipakai .Cocok untuk santai bepergian atau liburan
                    jahitan rapi dan tersedia berbagai warna  terasa ringan di badan dan terasa adem 
                    digunakan. ',
                ],
                [
                    'namaBarang' => 'Celana Pria pendek Keren Kekinian',
                    'fotoBarang' => 'n6.jpg',
                    'harga' => '40000',
                    'stok' => '50',
                    'ukuran' => 'M, L, XL, XXL',
                    'reviewBarang' => 'Produk kami menggunakan bahan American Drill grade A, yang nyaman digunakan. 
                    untuk tampilan kasual namun tetap modis dengan detail 6 saku belakang + depan dan samping. 
                    sangat cocok untuk dipakai beraktifitas sehari-hari ',
                ],
            ]
        );
    }
}
