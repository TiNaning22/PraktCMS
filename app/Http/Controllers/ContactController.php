<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('contact', compact('contacts'));
    }

    public function store(Request $request)
    {
    if (empty($request->nama) || empty($request->email) || empty($request->pesan_user)) {
        return redirect()->route('contact')->with('error', 'Tidak boleh ada inputan kosong. Semua wajib diisi!');
    }

    $request->validate([
        'nama' => 'required',
        'email' => 'required|email',
        'pesan_user' => 'required',
    ]);

    
    try {
        DB::beginTransaction(); 
        $contacts = new Contact();
        $contacts->nama = $request->nama;
        $contacts->email = $request->email;
        $contacts->pesan = $request->pesan_user;
        $contacts->save();

        $this->sendEmail($request->all());

        DB::commit();
            return redirect()->route('contact')->with('success', 'Yeeyy! Pesan Anda Telah Terkirim!');
    }       catch (\Exception $e) {
            DB::rollBack();
        return redirect()->route('contact')->with('error', 'Oh no! Gagal Mengirim Pesan');
    }
}

    private function sendEmail($data)
    {

        Mail::send('email.contacts', $data, function($message) use ($data) {
            $message->to($data['email'], $data['nama'])
                    ->subject('Email dari Buku Tamu');
        });
    }
}