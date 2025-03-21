<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        if (in_array($locale, ['en', 'id'])) {
            session()->put('locale', $locale);
        }
        return redirect()->back();
    }
} 