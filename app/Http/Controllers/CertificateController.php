<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificateController extends Controller
{
    public function showCertificationForm()
    {
        return view('certificates.create');
    }

    // Метод для сохранения данных сертификата
    public function store(Request $request)
    {
        // Валидация данных формы
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Создание нового экземпляра сертификата
        $certificate = new Certificate();
        $certificate->name = $request->input('title');
        $certificate->description = $request->input('description');
        $certificate->user_id = Auth::id();
        // Сохранение сертификата в базе данных
        $certificate->saveOrFail();

        return redirect()->route('certificates')->with('success', 'Сертификат успешно создан!');
    }
}
