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
                'poster' => 'https://www.egc-vendee.fr/wp-content/uploads/2023/02/comment-devenir-directeur-des-operations.jpg',
        
        
        
            ],
        
        
            [
        
                'title' => 'expert finanicer',
                'diplôme' => 'Bac + 6',
                'accessibilité' => 'sur concours',
                'success' => '89%',
                'difficulté' => '3',
                'poster' => 'https://www.egc-vendee.fr/wp-content/uploads/2023/02/comment-devenir-directeur-des-operations.jpg',
        
        
            ],
        
        
        
            [
        
                'title' => 'commerce international',
                'diplôme' => 'Bac + 4',
                'accessibilité' => 'sur concours',
                'success' => '82%',
                'difficulté' => '4',
                'poster' => 'https://www.egc-vendee.fr/wp-content/uploads/2023/02/comment-devenir-directeur-des-operations.jpg',
        
        
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