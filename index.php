<?php 

    class Movie{
        public $title;
        public $director;
        public $musicBy;
        public $year;

        // Construttore
        public function __construct($_title, $_director, $_musicBy, $_year){
            $this -> title = $_title;
            $this -> director = $_director;
            $this -> musicBy = $_musicBy;
            $this -> year = $_year;
        }

        // Metodo
        public function before68(){
            if( $this -> year < 1968 ){
                return 'This movie has been realized before 1968';
            }else{
                return 'This movie has been realized after 1968';
            }
        }
    }

    // Creo due instanze
    $theGoodTheBad = new Movie( 'The good, the bad and the ugly', 'Sergio Leone', 'Ennio Morricone', 1966 );
    $fullMetalJacket = new Movie( 'Full Metal Jacket', 'Stanley Kubrick', 'Abigail Mead', 1987 );

    // Stampo dati del film
    // Primo
    echo '<h2>Primo film:</h2>';
    echo '<p> - Titolo: ' . $theGoodTheBad -> title . '</p>';
    echo '<p> - Regista: ' . $theGoodTheBad -> director . '</p>';
    echo '<p> - Musica: ' . $theGoodTheBad -> musicBy . '</p>';
    echo '<p> - Anno: ' . $theGoodTheBad -> year . '</p>';
    // Utilizzo il metodo
    echo '<p>- ' . $theGoodTheBad -> before68() . '</p>';

    // Secondo
    echo '<h2>Secondo film:</h2>';
    echo '<p> - Titolo: ' . $fullMetalJacket -> title . '</p>';
    echo '<p> - Regista: ' . $fullMetalJacket -> director . '</p>';
    echo '<p> - Musica: ' . $fullMetalJacket -> musicBy . '</p>';
    echo '<p> - Anno: ' . $fullMetalJacket -> year . '</p>';
    // Utilizzo il metodo
    echo '<p>- ' . $fullMetalJacket -> before68() . '</p>';

?>