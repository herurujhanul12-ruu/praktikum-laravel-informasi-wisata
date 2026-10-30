<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $destinasi = [
            [
                'slug' => 'pantai-karang-tawulan',
                'nama' => 'Pantai Karang Tawulan',
                'lokasi' => 'Cikalong, Tasikmalaya',
                'kategori' => 'Pantai',
                'deskripsi' => 'Pantai dengan pemandangan laut yang indah.'
            ],
            [
                'slug' => 'situ-gede',
                'nama' => 'Situ Gede',
                'lokasi' => 'Mangkubumi, Tasikmalaya',
                'kategori' => 'Danau',
                'deskripsi' => 'Danau dengan suasana alam yang tenang.'
            ],
            [
                'slug' => 'curug-dengdeng',
                'nama' => 'Curug Dengdeng',
                'lokasi' => 'Cipatujah, Tasikmalaya',
                'kategori' => 'Air Terjun',
                'deskripsi' => 'Air terjun bertingkat dengan pemandangan alam.'
            ],
        ];

        return view('pages.home', compact('destinasi'));
    }

    public function tentang()
    {
        return view('pages.tentang');
    }

    public function panduan()
    {
        $panduan = [
            'Periksa lokasi sebelum berangkat.',
            'Siapkan perlengkapan wisata.',
            'Bawa air minum secukupnya.',
            'Jaga kebersihan lingkungan.',
            'Patuhi aturan tempat wisata.'
        ];

        return view('pages.panduan', compact('panduan'));
    }
}