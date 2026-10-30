<?php

namespace App\Http\Controllers;

class WisataController extends Controller
{
    private function dataWisata()
    {
        return [
            [
                'slug' => 'pantai-karang-tawulan',
                'nama' => 'Pantai Karang Tawulan',
                'lokasi' => 'Cikalong, Tasikmalaya',
                'kategori' => 'Pantai',
                'deskripsi' => 'Pantai dengan pemandangan laut lepas dan tebing karang.',
                'aktivitas' => [
                    'Menikmati pemandangan',
                    'Fotografi',
                    'Bersantai'
                ]
            ],
            [
                'slug' => 'situ-gede',
                'nama' => 'Situ Gede',
                'lokasi' => 'Mangkubumi, Tasikmalaya',
                'kategori' => 'Danau',
                'deskripsi' => 'Danau dengan suasana tenang dan pemandangan alam.',
                'aktivitas' => [
                    'Berjalan santai',
                    'Fotografi',
                    'Menikmati alam'
                ]
            ],
            [
                'slug' => 'curug-dengdeng',
                'nama' => 'Curug Dengdeng',
                'lokasi' => 'Cipatujah, Tasikmalaya',
                'kategori' => 'Air Terjun',
                'deskripsi' => 'Air terjun bertingkat dengan panorama alam.',
                'aktivitas' => [
                    'Menikmati air terjun',
                    'Fotografi',
                    'Wisata alam'
                ]
            ],
            [
                'slug' => 'gunung-galunggung',
                'nama' => 'Gunung Galunggung',
                'lokasi' => 'Sukaratu, Tasikmalaya',
                'kategori' => 'Pegunungan',
                'deskripsi' => 'Gunung dengan pemandangan kawah yang menarik.',
                'aktivitas' => [
                    'Menikmati pemandangan',
                    'Mendaki tangga',
                    'Fotografi'
                ]
            ],
            [
                'slug' => 'kampung-naga',
                'nama' => 'Kampung Naga',
                'lokasi' => 'Salawu, Tasikmalaya',
                'kategori' => 'Budaya',
                'deskripsi' => 'Kampung adat yang mempertahankan tradisi Sunda.',
                'aktivitas' => [
                    'Wisata budaya',
                    'Belajar tradisi',
                    'Fotografi'
                ]
            ],
        ];
    }

    public function index()
    {
        $destinasi = $this->dataWisata();

        return view('pages.destinasi', compact('destinasi'));
    }

    public function kategori()
    {
        $destinasi = $this->dataWisata();

        $kategori = collect($destinasi)
            ->pluck('kategori')
            ->unique()
            ->values();

        return view('pages.kategori', compact('kategori'));
    }

    public function show($slug)
    {
        $destinasi = collect($this->dataWisata())
            ->firstWhere('slug', $slug);

        abort_if($destinasi === null, 404);

        return view('pages.detail', compact('destinasi'));
    }
}