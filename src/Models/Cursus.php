<?php

namespace App\Models;


class Cursus

{

    private $show = [

    
            [
        
                'title' => 'MBA Buisness',
                'diplôme' => 'Bac + 5',
                'accessibilité' => 'sur concours uniquement',
                'success' => '80% de réussite',
                'difficulté' => '6',
                'poster' => 'https://media.istockphoto.com/id/1398994132/fr/photo/femme-daffaires-heureuse-utilisant-une-tablette-num%C3%A9rique-jeune-femme-daffaires-de-premier.jpg?s=612x612&w=0&k=20&c=vFfNvsYtWhGhoFBK1UOBYrLXIU2GHUvhyd0mFjFSTYA=',
                'description' => '40 heures de cours par semaine, 8 en mathématiques appliquées, 12 en histoire, 5 en physique, 10 en gestion et 5 en philosophie'
        
        
            ],
        
        
            [
        
                'title' => 'expert finanicer',
                'diplôme' => 'Bac + 6',
                'accessibilité' => 'sur concours uniquement',
                'success' => '89% de réussite',
                'difficulté' => '3',
                'poster' => 'https://img.freepik.com/photos-gratuite/femme-affaires-dans-bureau-moderne-hommes-affaires-travaillant_1139-954.jpg',
                'description' => '45 heures de cours par semaine, 13 en mathématiques experts, 12 en géographie, 5 en finance, 10 en comptabilité et 5 en art'
        
            ],
        
        
        
            [
        
                'title' => 'commerce international',
                'diplôme' => 'Bac + 4',
                'accessibilité' => 'sur concours uniquement',
                'success' => '82% de réussite',
                'difficulté' => '4',
                'poster' => 'https://thumbs.dreamstime.com/b/belle-femme-moyen-orientale-portant-veste-d-affaires-et-lunettes-forte-personne-montrant-muscle-bras-confiant-fier-de-la-puissance-217575902.jpg',
                'description' => '38 heures de cours par semaine, 6 en physique appliquées, 12 en géopolitique, 10 en philosophie, 5 en sport et 5 en anglais'
        
            ],
        
        
        
        
            [
        
                'title' => 'Master en gestion',
                'diplôme' => 'Bac + 7',
                'accessibilité' => 'sur concours uniquement',
                'success' => '75% de réussite',
                'difficulté' => '5',
                'poster' => 'https://www.egc-vendee.fr/wp-content/uploads/2023/02/comment-devenir-directeur-des-operations.jpg',
                'description' => '50 heures de cours par semaine, 8 en anglais appliquées, 5 en espagnole, 5 en anglais, 10 en math expert et 15 en géopolitique'
        
            ],
        
        
        
        
        
        
        
        
        
        


    ];

            
    public function getAllCursus()
    {
        return $this->show;

            
    }

    public function getCursusById($id)
    {
        return $this->show[$id];
    }

}