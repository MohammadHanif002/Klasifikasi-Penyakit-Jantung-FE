<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PasienController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function predict(Request $request)
    {
        $fields = ['age', 'sex', 'cp', 'trestbps', 'chol', 'fbs', 'restecg', 'thalach', 'exang', 'oldpeak', 'slope'];

        $fitur = [];

        foreach ($fields as $field) {
            $fitur[] = $request->input($field);
        }

        // Validasi sederhana
        if (count($fitur) !== 11) {
            return back()->withErrors(['features' => 'Semua field harus diisi.']);
        }

        // Kirim ke API Flask
        $response = Http::post('http://127.0.0.1:5000/predict', [
            'features' => $fitur
        ]);

        $hasil = $response->json();
        // if (!isset($hasil['prediction'])) {
        //     return back()->withErrors(['prediction' => 'Gagal menerima prediksi dari model.']);
        // }

        // Kirim ke view hasil.blade.php
        return view('hasil', [
            'prediction' => $hasil['prediction'],
            'age' => $request->age,
            'sex' => $request->sex,
            'cp' => $request->cp,
            'trestbps' => $request->trestbps,
            'chol' => $request->chol,
            'fbs' => $request->fbs,
            'restecg' => $request->restecg,
            'thalach' => $request->thalach,
            'exang' => $request->exang,
            'oldpeak' => $request->oldpeak,
            'slope' => $request->slope,
        ]);
    }
}