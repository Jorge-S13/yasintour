<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Destination;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function __invoke()
    {
        $process = \App\Models\MainPage::first();
        $aboutPage = \App\Models\AboutPage::first();
        $servicesPage = \App\Models\ServicesPage::first();
        $countryPage = \App\Models\CountryPage::first();
        $destinationPage = \App\Models\TourPage::first();
        $mainForm = \App\Models\MainForm::first();
        return view('pages.home',compact(
            'process',
            'aboutPage',
            'servicesPage',
            'countryPage',
            'destinationPage',
            'mainForm',
        ));
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function about()
    {
        $aboutPage = \App\Models\AboutPage::first();
        return view('pages.about',compact('aboutPage'));
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function aviakassa()
    {
        $kassaPage = \App\Models\AviakassaPage::first();
        return view('pages.aviakassa',compact('kassaPage'));
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function services()
    {
        $servicesPage = \App\Models\ServicesPage::first();
        return view('pages.services',compact(['servicesPage']));
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function countries()
    {
        $country = Country::all();
        $countryPage = \App\Models\CountryPage::first();
        $mainForm = \App\Models\MainForm::first();
        return view('pages.packages',compact('country','countryPage','mainForm'));
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function tours()
    {
        $destination = Destination::all();
        $destinationPage = \App\Models\TourPage::first();
        return view('pages.destination',compact('destination','destinationPage'));
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function booking()
    {
        return view('pages.booking');
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function team()
    {
        return view('pages.team');
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function testimonial()
    {
        return view('pages.testimonial');
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function contact()
    {
        $contactPage = \App\Models\ContactPage::first();
        $contactForm = \App\Models\ContactForm::first();
        return view('pages.contact',compact('contactPage','contactForm'));
    }
}
