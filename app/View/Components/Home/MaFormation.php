<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Arr;

use function url;
use function view;
class MaFormation extends Component
{
    public array $items = [];

    public array $tabs = [];
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['S1'],
                'title' => 'Technologies Web & Base de donnée',
                'image' => url('/img/twbd.jpg'),
                'github' => 'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S1'],
                'title' => 'Recherche Opérationnelle',
                'image' => url('/img/ro.jpg'),
                'github' => 'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
             ],
            [
                'category' => ['S2'],
                'title' => 'Réseaux & Cloud Computing',
                'image' => url('/img/rcc.jpg'),
                'github' => 'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S2'],
                'title' => 'Programmation Orientée Objet Avancée',
                'image' => url('/img/poo.jpg'),
                'github' => 'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S2'],
                'title' => 'Informatique Industrielle',
                'image' => url('/img/ii.jpg'),
                'github' => 'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S2'],
                'title' => 'Implementing Digital Projects 1',
                'image' => url('/img/idp.webp'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S3'],
                'title' => 'Traitement et valorisation des rejets industriels',
                'image' => url('/img/tvri.jpg'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S3'],
                'title' => 'Génie Logiciel',
                'image' => url('/img/glpng.png'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S3'],
                'title' => 'Usine Connecté et IoT',
                'image' => url('/img/uciotjpg.jpg'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S3'],
                'title' => 'Electrotechnique & Machines Electriques ',
                'image' => url('/img/mee.jpg'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S3'],
                'title' => 'Automatisme & Instrumentation Industrielle ',
                'image' => url('/img/aii.jpeg'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S3'],
                'title' => 'Gestion des approvisionnements et des stocks',
                'image' => url('/img/gasjpg.jpg'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S4'],
                'title' => 'Logistique et Transport',
                'image' => url('/img/lt.jpg'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S4'],
                'title' => 'Systèmes interactifs & applications mobile',
                'image' => url('/img/siam.png'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S4'],
                'title' => 'Contrôle Qualité Logicielle',
                'image' => url('/img/qql.webp'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S4'],
                'title' => 'Techniques de Production & Lean management',
                'image' => url('/img/tplm.png'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S4'],
                'title' => 'Intégration Energétique pour l\'industrie',
                'image' => url('/img/ieijpg.jpg'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S4'],
                'title' => 'Analyse des données et Big Data',
                'image' => url('/img/add.webp'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S4'],
                'title' => 'Implementing Digital Projects 2 (Projet de fin d\'année)',
                'image' => url('/img/idp2svg.svg'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S5'],
                'title' => 'Pilotage de la performance et Tableaux de Bord ',
                'image' => url('/img/pptb.png'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S5'],
                'title' => 'Supply Chain Management ',
                'image' => url('/img/scm.webp'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S5'],
                'title' => 'Cyber Sécurité ',
                'image' => url('/img/csjpg.jpg'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S5'],
                'title' => 'Robotique',
                'image' => url('/img/r.webp'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S5'],
                'title' => 'Simulation des processus industriels',
                'image' => url('/img/spi.jpg'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S5'],
                'title' => 'Data Driven Optimization',
                'image' => url('/img/ddo.jpg'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S5'],
                'title' => 'Maintien en Condition Opérationnelle',
                'image' => url('/img/mco.png'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ],
            [
                'category' => ['S6'],
                'title' => 'Projet de Fin d’Etudes (PFE)',
                'image' => url('/img/pde.jpg'),
                'github' =>  'https://ensabm.usms.ac.ma/transformation-digitale-industrielle/'
            ]
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.ma-formation');
    }
}
