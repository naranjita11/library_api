<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Faker\Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Author::factory(10)->hasBooks(2)->create();
         $authors = [  
              [
                "name" => "Evelyn Waugh",
                "bio" => "Arthur Evelyn St. John Waugh was an English writer of novels, biographies, and travel books; he was also a prolific journalist and book reviewer. His most famous works include the early satires Decline and Fall and A Handful of Dust, the novel Brideshead Revisited, and the Second World War trilogy Sword of Honour.",
                "image_name" => "A photo of Evelyn Waugh",
                "image_path" => "/public/resources/data/evelyn_waugh.jpeg",
                "quotes" => ["1", "2", "3"]
            ],
            [
                "name" => "Hunter S. Thompson",
                "bio" => "Hunter Stockton Thompson was an American journalist and author, and the founder of the gonzo journalism movement. He first rose to prominence with the publication of Hell's Angels (1967), a book for which he spent a year living and riding with the Hells Angels motorcycle club to write a first-hand account of the lives and experiences of its members.",
                "image_name" => "A photo of Hunter S Thompson",
                "image_path" => "/public/resources/data/hunter_s_thompson.jpeg",
            ],
            [
                "name" => "Joseph Heller",
                "bio" => "Joseph Heller was an American author of novels, short stories, plays, and screenplays. His best-known work is the 1961 novel Catch-22, a satire on war and bureaucracy, whose title has become a synonym for an absurd or contradictory choice. ",
                "image_name" => "A photo of Joseph Heller",
                "image_path" => "/public/resources/data/joseph_heller.jpeg",
            ],
            [
                "name" => "Eric Ambler",
                "bio" => "Eric Clifford Ambler OBE was an English author of thrillers, in particular spy novels, who introduced a new realism to the genre. He also worked as a screenwriter. Ambler used the pseudonym Eliot Reed for books co-written with Charles Rodda.",
                "image_name" => "A photo of Eric Ambler",
                "image_path" => "/public/resources/data/eric_ambler.jpeg",
            ],
            [
                "name" => "Jon Duckett",
                "bio" => "Jon Duckett has been helping companies create innovative digital solutions for over 15 years, designing and delivering web and mobile projects for small businesses and tech startups through to global brands like Diesel, Philips, Nike, Wrangler, and Xerox.
                During this time, he has has written and co-authored over a dozen books on web design and programming.",
                "image_name" => "A photo of Jon Duckett",
                "image_path" => "/public/resources/data/jon_duckett.jpeg",
            ],
            [
                "name" => "Kazuo Ishguro",
                "bio" => "Sir Kazuo Ishiguro OBE FRSA FRSL is a British novelist, screenwriter, musician, and short-story writer. He was born in Nagasaki, Japan, and moved to Britain in 1960 when he was five. Ishiguro is one of the most celebrated contemporary fiction authors in English",
                "image_name" => "A photo of Kazuo Ishiguro",
                "image_path" => "/public/resources/data/kazuo_ishiguro.jpeg",
            ],
            [
                "name" => "Ben Goldacre",
                "bio" => "Ben Michael Goldacre MBE is a British physician, academic, and science writer. As of March 2015, he is a senior clinical research fellow at the Centre for Evidence-Based Medicine, part of the University of Oxford’s Nuffield Department of Primary Care Health Sciences.",
                "image_name" => "A photo of Ben Goldacre",
                "image_path" => "/public/resources/data/ben_goldacre.jpeg",
            ],
            [
                "name" => "Kate Fox",
                "bio" => "Kate Fox is a social anthropologist, co-director of the Social Issues Research Centre and a Fellow of the Institute for Cultural Research. She has written several books, including Watching the English: The Hidden Rules of English Behaviour.",
                "image_name" => "A photo of Kate Fox",
                "image_path" => "/public/resources/data/kate_fox.jpeg",
            ],
            [
                "name" => "Peter Wohlleben",
                "bio" => "Peter Wohlleben is a German forester and author who writes on ecological themes in popular language. He is the author of the New York Times Bestseller The Hidden Life of Trees: What They Feel, How They Communicate, which was translated from German into English in 2016.",
                "image_name" => "A photo of Peter Wohlleben",
                "image_path" => "/public/resources/data/peter_wohlleben.jpeg",
            ],
            [
                "name" => "Angela Carter",
                "bio" => "Angela Olive Pearce, who published under the name Angela Carter, was an English novelist, short story writer, poet, and journalist, known for her feminist, magical realism, and picaresque works. She is best known for her book The Bloody Chamber, which was published in 1979.",
                "image_name" => "A photo of Angela Carter",
                "image_path" => "/public/resources/data/angela_carter.jpeg",
            ],
            [
                "name" => "Gabriel García Márquez",
                "bio" => "Gabriel García Márquez was a Colombian novelist, short-story writer, screenwriter, and journalist, known affectionately as Gabo or Gabito throughout Latin America.",
                "image_name" => "A photo of Gabriel García Márquez",
                "image_path" => "/public/resources/data/gabriel_garcia_marquez.jpeg",
            ]
        ];

        foreach($authors as $author) {
            
            if (isset($author["quotes"])) {
                $quotes = $author["quotes"];
                unset($author["quotes"]);
            }

            $authorInDB = Author::create($author);
            if (isset($quotes)) {
                $authorInDB->setQuotes($quotes);
            }
            unset($quotes); 
        }
    }
}
