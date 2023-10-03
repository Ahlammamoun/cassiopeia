<?php

namespace App\Models;


class Cursus

{

    private $show = [

    
            [
        
                'title' => 'MBA Buisness',
                'diplôme' => 'Bac + 5',
                'accessibilité' => 'sur concours',
                'success' => '80%',
                'difficulté' => '6',
                'poster' => 'https://media.istockphoto.com/id/1398994132/fr/photo/femme-daffaires-heureuse-utilisant-une-tablette-num%C3%A9rique-jeune-femme-daffaires-de-premier.jpg?s=612x612&w=0&k=20&c=vFfNvsYtWhGhoFBK1UOBYrLXIU2GHUvhyd0mFjFSTYA=',
        
        
        
            ],
        
        
            [
        
                'title' => 'expert finanicer',
                'diplôme' => 'Bac + 6',
                'accessibilité' => 'sur concours',
                'success' => '89%',
                'difficulté' => '3',
                'poster' => 'https://img.freepik.com/photos-gratuite/femme-affaires-dans-bureau-moderne-hommes-affaires-travaillant_1139-954.jpg',
        
        
            ],
        
        
        
            [
        
                'title' => 'commerce international',
                'diplôme' => 'Bac + 4',
                'accessibilité' => 'sur concours',
                'success' => '82%',
                'difficulté' => '4',
                'poster' => 'https://thumbs.dreamstime.com/b/belle-femme-moyen-orientale-portant-veste-d-affaires-et-lunettes-forte-personne-montrant-muscle-bras-confiant-fier-de-la-puissance-217575902.jpg',
        
        
            ],
        
        
        
        
            [
        
                'title' => 'Master en gestion',
                'diplôme' => 'Bac + 7',
                'accessibilité' => 'sur concours',
                'success' => '75%',
                'difficulté' => '5',
                'poster' => 'https://www.egc-vendee.fr/wp-content/uploads/2023/02/comment-devenir-directeur-des-operations.jpg',
        
        
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