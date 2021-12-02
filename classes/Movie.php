<?php


class Movie
{
    public $title = "";
    public $img = "";
    public $categories = [];
    public $score = "";
    public $released = false;
    


    function __construct($movie_title)
    {
        $this->title = $movie_title;
    }
    /****************************************************************************** */
    //funzioni IMG
    public function setImg($imgPath)
    {
        $root = "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/";
        $this->img = $root . $imgPath;
    }

    public function getImg()
    {
        return $this->img;
    }

    //https://www.themoviedb.org/t/p/w600_and_h900_bestv2/aKfxlsL0o2M4aBmX8NMFXlXFKCg.jpg
    //https://www.themoviedb.org/t/p/w600_and_h900_bestv2/sSdRI34rbqXj21SruV52AUoXRkE.jpg

    /****************************************************************************** */
    //funzioni CATEGORIES

    public function setCategories($categoriesString)
    {
        $this->categories = explode(",", $categoriesString);
    }

    public function getCategories()
    {
        return $this->categories;
    }

    /****************************************************************************** */
    //funzioni SCORE

    public function setScore($scorePercentage)
    {
        $this->score = ($scorePercentage * 5) / 100;
    }

    public function getScore()
    {
        return $this->score;
    }

    /****************************************************************************** */
    //funzioni RELEASED 

    public function setRelease($releaseDate)
    {
        if (isset($releaseDate)) {
            $this->released = true;
        }
    }

    public function getRelease()
    {
        return $this->released;
    }
}
