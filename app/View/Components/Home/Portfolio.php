<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Arr;

use function url;
use function view;
class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['IT'],
                'title' => 'Module Odoo de gestion des réservations pour la restauration universitaire. (Odoo framework)',
                'image' => url('/img/odoo.png'),
                'github' => 'https://github.com/Omarouhga/gr_cu'
            ],
            [
                'category' => ['IT'],
                'title' => 'Analyse discriminante pour l\'amélioration de la satisfaction des étudiants (R)',
                'image' => url('/img/add.png'),
                'github' => 'https://github.com/Omarouhga/Anayse-discriminatoire-Etude-de-cas-'
             ],
            [
                'category' => ['IT'],
                'title' => 'Mon premier projet en HTML et Css',
                'image' => url('/img/zozor.png'),
                'github' => 'https://github.com/Omarouhga/My-first-html-css-website'
            ],
            [
                'category' => ['Industriel'],
                'title' => 'Problème de Tournées de Véhicules (VRP)',
                'image' => url('/img/vrp.jpg'),
                'github' => 'https://github.com/Omarouhga/vehicule-routing-problem'
            ],
            // [
            //     'category' => ['Industriel'],
            //     'title' => 'Conception d\'un surpresseur multi-usage (Automatisme)',
            //     'image' => url('/img/surpresseur.png'),
            //     'github' => '#'
            // ],
            [
                'category' => ['IT'],
                'title' => 'Application desktop de gestion scolaire (Java)',
                'image' => url('/img/gs.png'),
                'github' =>  'https://github.com/Omarouhga/gestion_ecole_app_desktop_java.git'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }
    

   
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
