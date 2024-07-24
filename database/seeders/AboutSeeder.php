<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => 'Property',
            'deskripsi' => ' Selamat datang di WanProperty, platform terdepan untuk informasi dan layanan properti di Indonesia. Kami berdedikasi untuk menyediakan solusi lengkap bagi kebutuhan properti Anda, mulai dari jual beli, sewa, hingga konsultasi properti. Dengan jaringan yang luas dan pengalaman yang mendalam, kami hadir untuk membantu Anda menemukan properti impian dengan mudah dan cepat.
 
 Visi Kami
 
 Menjadi platform properti terbaik dan terpercaya di Indonesia, yang mampu memberikan pengalaman pencarian properti yang mudah, aman, dan menyenangkan bagi semua pengguna.
 
 Misi Kami
 
 Memberikan Layanan Terbaik: Kami berkomitmen untuk menyediakan layanan berkualitas tinggi dengan mengutamakan kepuasan pelanggan. Tim kami siap membantu Anda dengan informasi yang akurat dan dukungan yang responsif.
 
 Platform yang Inovatif: Kami terus berinovasi untuk menghadirkan fitur-fitur canggih yang memudahkan proses pencarian dan transaksi properti, sehingga Anda dapat menemukan dan membeli properti dengan lebih efisien.
 
 Jaringan yang Luas: Kami bekerja sama dengan berbagai agen properti, pengembang, dan pemilik properti terkemuka untuk menawarkan pilihan properti yang beragam dan berkualitas di seluruh Indonesia.
 
 Transparansi dan Keamanan: Kami menjamin transparansi dalam setiap transaksi dan berkomitmen untuk menjaga keamanan data dan privasi pengguna kami.
 
 Layanan Kami
 
 Pencarian Properti: Temukan properti sesuai kebutuhan Anda dengan mudah melalui fitur pencarian kami yang user-friendly dan informatif.
 Jual Beli Properti: Kami membantu proses jual beli properti Anda dari awal hingga akhir dengan dukungan profesional yang handal.
 Sewa Properti: Temukan properti sewaan terbaik dengan berbagai pilihan yang sesuai dengan anggaran dan preferensi Anda.
 Konsultasi Properti: Dapatkan saran dan konsultasi dari para ahli properti kami untuk membantu Anda membuat keputusan yang tepat.
 Mengapa Memilih Kami?
 
 Kepercayaan: Kami adalah platform terpercaya dengan reputasi yang baik di industri properti.
 Komprehensif: Kami menyediakan informasi yang lengkap dan up-to-date tentang properti di berbagai lokasi.
 User-Friendly: Platform kami dirancang untuk memudahkan pengguna dalam mencari dan menemukan properti dengan cepat dan efisien.
 Dukungan Profesional: Tim kami terdiri dari para profesional yang berpengalaman dan siap membantu Anda kapan saja.
 Terima kasih telah mengunjungi WanProperty. Kami berharap dapat menjadi mitra terpercaya Anda dalam menemukan dan mewujudkan properti impian Anda. Jika Anda memiliki pertanyaan atau membutuhkan bantuan lebih lanjut, jangan ragu untuk menghubungi kami.',
            'foto' => 'assets/images/about.jpg',
        ]);
    }
}
