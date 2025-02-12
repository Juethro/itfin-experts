<?php

namespace App\Http\Controllers;

use App\Mail\Enquiry;
use App\Models\Message as ModelMessage;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEnquiry(Request $request){

        // Ambil nilai lang langsung sebagai string, default ke 'id' jika tidak ada
        $lang = $request->input('lang', 'id');

        // Pesan error dalam bahasa Indonesia
        $messages_id = [
            'name.required' => 'Nama wajib diisi.',
            'name.regex' => 'Nama hanya boleh berisi huruf dan spasi.',
            'name.min' => 'Nama harus memiliki minimal 3 karakter.',
            'name.max' => 'Nama tidak boleh lebih dari 100 karakter.',

            'phone.required' => 'Nomor telepon wajib diisi.',
            'phone.regex' => 'Nomor telepon hanya boleh berisi angka.',
            'phone.digits_between' => 'Nomor telepon harus memiliki panjang antara 8 hingga 15 digit.',

            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter.',

            'subject.required' => 'Subjek wajib diisi.',
            'subject.min' => 'Subjek harus memiliki minimal 3 karakter.',
            'subject.max' => 'Subjek tidak boleh lebih dari 150 karakter.',

            'messageContent.required' => 'Pesan wajib diisi.',
            'messageContent.min' => 'Pesan harus memiliki minimal 5 karakter.',
            'messageContent.max' => 'Pesan tidak boleh lebih dari 1000 karakter.',
        ];

        // Pesan error dalam bahasa Inggris
        $messages_en = [
            'name.required' => 'Name is required.',
            'name.regex' => 'Name can only contain letters and spaces.',
            'name.min' => 'Name must be at least 3 characters.',
            'name.max' => 'Name cannot be more than 100 characters.',

            'phone.required' => 'Phone number is required.',
            'phone.regex' => 'Phone number can only contain numbers.',
            'phone.digits_between' => 'Phone number must be between 8 and 15 digits.',

            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'email.max' => 'Email cannot exceed 255 characters.',

            'subject.required' => 'Subject is required.',
            'subject.min' => 'Subject must be at least 3 characters.',
            'subject.max' => 'Subject cannot be more than 150 characters.',

            'messageContent.required' => 'Message is required.',
            'messageContent.min' => 'Message must be at least 5 characters.',
            'messageContent.max' => 'Message cannot be more than 1000 characters.',
        ];

        // Pilih pesan berdasarkan bahasa
        $messages = $lang == 'en' ? $messages_en : $messages_id;

        try {
            // Validasi dengan pesan yang dipilih
            $data = $request->validate([
                'name' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:100'],
                'phone' => ['required', 'regex:/^[0-9]+$/', 'digits_between:8,15'],
                'email' => ['required', 'email', 'max:255'],
                'subject' => ['required', 'min:3', 'max:150'],
                'messageContent' => ['required', 'min:5', 'max:1000'],
            ], $messages);

            
            // Simpan ke database
            ModelMessage::create($data);
    
            // Kirim email (Pastikan konfigurasi mail sudah benar)
            Mail::to(env('MAIL_TO_ADDRESS'))->send(new Enquiry($data));
    
            // Kembalikan response JSON berhasil
            return response()->json([
                'success' => true,
                'message' => $lang === 'en' ? 'Message sent successfully!' : 'Pesan berhasil dikirim!'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Tangkap error validasi dan return JSON
            return response()->json([
                'success' => false,
                'errors' => $e->validator->errors()
            ], 422);
        }
    }
}
