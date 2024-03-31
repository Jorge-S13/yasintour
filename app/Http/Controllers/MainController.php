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
    private object $process;
    private object $aboutPage;
    private object $servicesPage;
    private object $countryPage;
    private object $destinationPage;
    private object $mainForm;
    private object $kassaPage;
    private object $contactPage;
    private object $contactForm;

    public function __construct()
    {
        $this->process = \App\Models\MainPage::first();
        $this->aboutPage = \App\Models\AboutPage::first();
        $this->servicesPage = \App\Models\ServicesPage::first();
        $this->countryPage = \App\Models\CountryPage::first();
        $this->destinationPage = \App\Models\TourPage::first();
        $this->mainForm = \App\Models\MainForm::first();
        $this->kassaPage = \App\Models\AviakassaPage::first();
        $this->contactPage = \App\Models\ContactPage::first();
        $this->contactForm = \App\Models\ContactForm::first();
    }
    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function __invoke()
    {

        return view('pages.home',[
            'process' => $this->process,
            'aboutPage' => $this->aboutPage,
            'servicesPage' => $this->servicesPage,
            'countryPage' => $this->countryPage,
            'destinationPage' => $this->destinationPage,
            'mainForm' => $this->mainForm,
        ]);
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function about()
    {
        return view('pages.about',['aboutPage' => $this->aboutPage]);
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function aviakassa()
    {
        return view('pages.aviakassa',['kassaPage' => $this->kassaPage]);
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function services()
    {
        return view('pages.services',['servicesPage' => $this->servicesPage]);
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function countries()
    {
        $country = Country::all();
        return view('pages.packages',['country' => $country,'countryPage' => $this->countryPage,'mainForm' => $this->mainForm]);
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function tours()
    {
        $destination = Destination::all();
        return view('pages.destination',['destination' => $destination,'destinationPage' => $this->destinationPage]);
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
        return view('pages.contact',['contactPage' => $this->contactPage,'contactForm' => $this->contactForm]);
    }
}
