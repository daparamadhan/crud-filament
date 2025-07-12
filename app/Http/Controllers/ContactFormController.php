<?php

namespace App\Http\Controllers;

use App\Models\Contact; // <-- PENTING! Pastikan ini ada!
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log; // Gunakan ini untuk debug

class ContactFormController extends Controller
{
    /**
     * Handle the submission of the contact form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submit(Request $request)
    {
        // Log ini akan muncul di storage/logs/laravel.log jika request berhasil mencapai controller
        Log::debug('Contact form submission received.');

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Your message has been sent successfully! We will get back to you soon.'
            ], 200);

        } catch (\Exception $e) {
            // Log error lebih detail jika ada masalah saat menyimpan ke database
            Log::error('Error submitting contact form: ' . $e->getMessage(), [
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
                'exception' => $e->getTraceAsString()
            ]);

            return response()->json([
                'status' => 'error',
                'message' => 'An unexpected error occurred. Please try again later.'
            ], 500);
        }
    }
}