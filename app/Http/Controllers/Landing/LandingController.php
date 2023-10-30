<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

use Inertia\Inertia;

class LandingController extends Controller
{
    /**
     * Show the landing page.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Landing/Index');
    }

    /**
     * Show the support page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function support()
    {
        return redirect()->away(config('cannabot.support_url'));
    }

    /**
     * Show the invite page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function invite()
    {
        return redirect()->away(config('cannabot.invite_url'));
    }
}
