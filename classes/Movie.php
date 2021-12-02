<?php 


    class Movie {
        public $title = "";
        public $categories = [];
        public $score = "";
        public $released = false;


       function __construct($movie_title)
        {
            $this->title = $movie_title;
        }

        /****************************************************************************** */
        //funzioni CATEGORIES

        public function setCategories($categoriesString) {
            $this->categories = explode(",", $categoriesString);
        }

        public function getCategories() {
            return $this->categories ;
        }

         /****************************************************************************** */
        //funzioni SCORE

        public function setScore($scorePercentage) {
            $this->score = ($scorePercentage * 5)/ 100;
        }

        public function getScore() {
            return $this->score;
        }

         /****************************************************************************** */
        //funzioni RELEASED 

        public function setRelease($releaseDate) {
            if (isset($releaseDate)) {
                $this->released = true;
            }
        }
            
            public function getRelease() {
                return $this->released;
            }
        


    }
