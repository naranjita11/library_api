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
                "image_path" => "/resources/data/evelyn_waugh.jpeg",
                "quotes" => ["Punctuality is the virtue of the bored.", "One forgets words as one forgets names. One's vocabulary needs constant fertilizing or it will die.", "The human mind is inspired enough when it comes to inventing horrors; it is when it tries to invent a Heaven that it shows itself cloddish."]
            ],
            [
                "name" => "Hunter S. Thompson",
                "bio" => "Hunter Stockton Thompson was an American journalist and author, and the founder of the gonzo journalism movement. He first rose to prominence with the publication of Hell's Angels (1967), a book for which he spent a year living and riding with the Hells Angels motorcycle club to write a first-hand account of the lives and experiences of its members.",
                "image_name" => "A photo of Hunter S Thompson",
                "image_path" => "/resources/data/hunter_s_thompson.jpeg",
                "quotes" => ["Buy the ticket, take the ride.", "Never turn your back on fear. It should always be in front of you, like a thing that might have to be killed."]
            ],
            [
                "name" => "Joseph Heller",
                "bio" => "Joseph Heller was an American author of novels, short stories, plays, and screenplays. His best-known work is the 1961 novel Catch-22, a satire on war and bureaucracy, whose title has become a synonym for an absurd or contradictory choice. ",
                "image_name" => "A photo of Joseph Heller",
                "image_path" => "/resources/data/joseph_heller.jpeg",
                "quotes" => ["He had decided to live forever or die in the attempt.", "The enemy is anybody who's going to get you killed, no matter which side he is on."]
            ],
            [
                "name" => "Eric Ambler",
                "bio" => "Eric Clifford Ambler OBE was an English author of thrillers, in particular spy novels, who introduced a new realism to the genre. He also worked as a screenwriter. Ambler used the pseudonym Eliot Reed for books co-written with Charles Rodda.",
                "image_name" => "A photo of Eric Ambler",
                "image_path" => "/resources/data/eric_ambler.jpeg",
                "quotes" => ["'Good' did not triumph. 'Evil' did not triumph. The two resolved, destroyed each other and created new 'evils', new 'goods' which slew each other in their turn."]
            ],
            [
                "name" => "Jon Duckett",
                "bio" => "Jon Duckett has been helping companies create innovative digital solutions for over 15 years, designing and delivering web and mobile projects for small businesses and tech startups through to global brands like Diesel, Philips, Nike, Wrangler, and Xerox.
                During this time, he has has written and co-authored over a dozen books on web design and programming.",
                "image_name" => "A photo of Jon Duckett",
                "image_path" => "/resources/data/jon_duckett.jpeg",
            ],
            [
                "name" => "Kazuo Ishguro",
                "bio" => "Sir Kazuo Ishiguro OBE FRSA FRSL is a British novelist, screenwriter, musician, and short-story writer. He was born in Nagasaki, Japan, and moved to Britain in 1960 when he was five. Ishiguro is one of the most celebrated contemporary fiction authors in English",
                "image_name" => "A photo of Kazuo Ishiguro",
                "image_path" => "/resources/data/kazuo_ishiguro.jpeg",
                "quotes" => ["As a writer, I'm more interested in what people tell themselves happened rather than what actually happened.", "Memories, even your most precious ones, fade surprisingly quickly. But I don’t go along with that. The memories I value most, I don’t ever see them fading."]
            ],
            [
                "name" => "Ben Goldacre",
                "bio" => "Ben Michael Goldacre MBE is a British physician, academic, and science writer. As of March 2015, he is a senior clinical research fellow at the Centre for Evidence-Based Medicine, part of the University of Oxford’s Nuffield Department of Primary Care Health Sciences.",
                "image_name" => "A photo of Ben Goldacre",
                "image_path" => "/resources/data/ben_goldacre.jpeg",
                "quotes" => ["You cannot reason people out of a position that they did not reason themselves into.", "Repeat after me: pharma being shit does not mean magic beans cure cancer."]
            ],
            [
                "name" => "Kate Fox",
                "bio" => "Kate Fox is a social anthropologist, co-director of the Social Issues Research Centre and a Fellow of the Institute for Cultural Research. She has written several books, including Watching the English: The Hidden Rules of English Behaviour.",
                "image_name" => "A photo of Kate Fox",
                "image_path" => "/resources/data/kate_fox.jpeg",
                "quotes" => ["A truly English protest march would see us all chanting: 'What do we want? GRADUAL CHANGE! When do we want it? IN DUE COURSE!", "Moderation is all very well, but only in moderation.", "Even the English, who understand it, are not exactly riotously amused by the understatement. At best, a well-timed, well-turned understatement only raises a slight smirk."]
            ],
            [
                "name" => "Peter Wohlleben",
                "bio" => "Peter Wohlleben is a German forester and author who writes on ecological themes in popular language. He is the author of the New York Times Bestseller The Hidden Life of Trees: What They Feel, How They Communicate, which was translated from German into English in 2016.",
                "image_name" => "A photo of Peter Wohlleben",
                "image_path" => "/resources/data/peter_wohlleben.jpeg",
                "quotes" => ["Trees, it turns out, have a completely different way of communicating: they use scent.", "Every species want to survive, and each takes from the others what it needs. All are basically ruthless, and the only reason everything doesn't collapse is because there are safeguards against those who demand more than their due."]
            ],
            [
                "name" => "Angela Carter",
                "bio" => "Angela Olive Pearce, who published under the name Angela Carter, was an English novelist, short story writer, poet, and journalist, known for her feminist, magical realism, and picaresque works. She is best known for her book The Bloody Chamber, which was published in 1979.",
                "image_name" => "A photo of Angela Carter",
                "image_path" => "/resources/data/angela_carter.jpeg",
                "quotes" => ["Comedy is tragedy that happens to other people.", "Language is power, life and the instrument of culture, the instrument of domination and liberation."]
            ],
            [
                "name" => "Gabriel García Márquez",
                "bio" => "Gabriel García Márquez was a Colombian novelist, short-story writer, screenwriter, and journalist, known affectionately as Gabo or Gabito throughout Latin America.",
                "image_name" => "A photo of Gabriel García Márquez",
                "image_path" => "/resources/data/gabriel_garcia_marquez.jpeg",
                "quotes" => ["What matters in life is not what happens to you but what you remember and how you remember it."]
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
