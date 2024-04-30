<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::create([
            'title' => 'Parasite',
            'genre' => 'comedy',
            'duration' => '2 hours 12 minutes',
            'views' => '21.1k',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BYWZjMjk3ZTItODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg',
            'overall_rating' => 7.2,
            'description' => 'A poor family, the Kims, con their way into becoming the servants of a rich family, the Parks. But their easy life gets complicated when their deception is threatened with exposure.'
        ]);

        Movie::create([
            'title' => 'The Favourite',
            'genre' => 'drama',
            'duration' => '1 hour 59 minutes',
            'views' => '15.6k',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMTg1NzQwMDQxNV5BMl5BanBnXkFtZTgwNDg2NDYyNjM@._V1_.jpg',
            'overall_rating' => 7.5,
            'description' => 'In early 18th century England, a frail Queen Anne occupies the throne and her close friend, Lady Sarah, governs the country in her stead. When a new servant, Abigail, arrives, her charm endears her to Sarah.'
        ]);

        Movie::create([
            'title' => 'The Farewell I',
            'genre' => 'comedy',
            'duration' => '1 hour 40 minutes',
            'views' => '18.2k',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMWE3MjViNWUtY2VjYS00ZDBjLTllMzYtN2FkY2QwYmRiMDhjXkEyXkFqcGdeQXVyODQzNTE3ODc@._V1_.jpg',
            'overall_rating' => 6.9,
            'description' => 'A Chinese family discovers their grandmother has only a short while left to live and decide to keep her in the dark, scheduling a wedding to gather before she dies.'
        ]);

        Movie::create([
            'title' => 'Marriage Story',
            'genre' => 'drama',
            'duration' => '2 hours 16 minutes',
            'views' => '23.7k',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BZGVmY2RjNDgtMTc3Yy00YmY0LTgwODItYzBjNWJhNTRlYjdkXkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_.jpg',
            'overall_rating' => 8.8,
            'description' => 'Noah Baumbach\'s incisive and compassionate look at a marriage breaking up and a family staying together.'
        ]);

        Movie::create([
            'title' => 'Booksmart',
            'genre' => 'comedy',
            'duration' => '1 hour 42 minutes',
            'views' => '19.5k',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BYzE0ZTY1NGUtOTYxMS00NWYzLWE1NGMtMDU3YzViZDZjZTZkXkEyXkFqcGdeQXVyMTA4NjE0NjEy._V1_.jpg',
            'overall_rating' => 8.2,
            'description' => 'On the eve of their high school graduation, two academic superstars and best friends realize they should have worked less and played more. Determined not to fall short of their peers, the girls try to cram four years of fun into one night.'
        ]);

        Movie::create([
            'title' => 'Inception',
            'genre' => 'action',
            'duration' => '2 hours 28 minutes',
            'views' => '35.9k',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_.jpg',
            'overall_rating' => 8.8,
            'description' => 'A thief who enters the dreams of others to steal their secrets encounters a complex task when he is asked to perform the inverse operation: planting an idea into someone\'s mind.'
        ]);

        Movie::create([
            'title' => 'The Dark Knight',
            'genre' => 'action',
            'duration' => '2 hours 32 minutes',
            'views' => '42.6k',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_.jpg',
            'overall_rating' => 9.0,
            'description' => 'When the menace known as The Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham. The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.'
        ]);

        Movie::create([
            'title' => 'Interstellar',
            'genre' => 'sci-fi',
            'duration' => '2 hours 49 minutes',
            'views' => '28.3k',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktYzJlM2Q4N2Q5MDZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
            'overall_rating' => 8.6,
            'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.'
        ]);

        Movie::create([
            'title' => 'The Shawshank Redemption',
            'genre' => 'drama',
            'duration' => '2 hours 22 minutes',
            'views' => '38.4k',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTAwMzUyOTc@._V1_.jpg',
            'overall_rating' => 9.3,
            'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.'
        ]);

        Movie::create([
            'title' => 'Forrest Gump',
            'genre' => 'drama',
            'duration' => '2 hours 22 minutes',
            'views' => '41.2k',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BNWIwODRlZTUtY2U3ZS00Yzg1LWJhNzYtMmZiYmEyNmU1NjMzXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_.jpg',
            'overall_rating' => 8.8,
            'description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.'
        ]);

        // Add more sample movie records...
    }
}
