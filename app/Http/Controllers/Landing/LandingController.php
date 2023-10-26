<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

use Inertia\Inertia;

class LandingController extends Controller
{
    public function index()
    {
        $logo       = asset('img/logo.png');
        $supportUrl = config('cannabot.support_url');
        $inviteUrl  = config('cannabot.invite_url');

        return Inertia::render('Landing/Index', [
            'logo'       => $logo,
            'supportUrl' => $supportUrl,
            'inviteUrl'  => $inviteUrl,
        ]);
    }
}
