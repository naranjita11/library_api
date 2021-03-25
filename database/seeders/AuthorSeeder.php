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
                "bio" => "Arthur Evelyn St. John Waugh was an English writer of novels, biographies, and travel books; he was also a prolific journalist and book reviewer. His most famous works include the early satires Decline and Fall (1928) and A Handful of Dust (1934), the novel Brideshead Revisited (1945), and the Second World War trilogy Sword of Honour (1952–1961). He is recognised as one of the great prose stylists of the English language in the 20th century. Waugh was the son of a publisher, educated at Lancing College and then at Hertford College, Oxford. He worked briefly as a schoolmaster before he became a full-time writer. As a young man, he acquired many fashionable and aristocratic friends and developed a taste for country house society. He travelled extensively in the 1930s, often as a special newspaper correspondent; he reported from Abyssinia at the time of the 1935 Italian invasion. He served in the British armed forces throughout the Second World War, first in the Royal Marines and then in the Royal Horse Guards.",
                "image_name" => "A photo of Evelyn Waugh",
                "image_path" => "/resources/data/evelyn_waugh.jpg",
                "quotes" => ["Punctuality is the virtue of the bored.", "One forgets words as one forgets names. One's vocabulary needs constant fertilizing or it will die.", "The human mind is inspired enough when it comes to inventing horrors; it is when it tries to invent a Heaven that it shows itself cloddish."]
            ],
            [
                "name" => "Hunter S. Thompson",
                "bio" => "Hunter Stockton Thompson was an American journalist and author, and the founder of the gonzo journalism movement. He first rose to prominence with the publication of Hell's Angels (1967), a book for which he spent a year living and riding with the Hells Angels motorcycle club to write a first-hand account of the lives and experiences of its members. In 1970, he wrote an unconventional magazine feature titled 'The Kentucky Derby Is Decadent and Depraved' for Scanlan's Monthly, which both raised his profile and established him as a writer with counterculture credibility. It also set him on a path to establishing his own subgenre of New Journalism that he called 'Gonzo', which was essentially an ongoing experiment in which the writer becomes a central figure and even a participant in the events of the narrative.",
                "image_name" => "A photo of Hunter S Thompson",
                "image_path" => "/resources/data/hunter_s_thompson.jpg",
                "quotes" => ["Buy the ticket, take the ride.", "Never turn your back on fear. It should always be in front of you, like a thing that might have to be killed."]
            ],
            [
                "name" => "Joseph Heller",
                "bio" => "Joseph Heller was an American author of novels, short stories, plays, and screenplays. His best-known work is the 1961 novel Catch-22, a satire on war and bureaucracy, whose title has become a synonym for an absurd or contradictory choice. During World War II, Heller flew 60 combat missions as a bombardier with the U.S. Air Force in Europe. After receiving an M.A. at Columbia University in 1949, he studied at the University of Oxford (1949–50) as a Fulbright scholar. He taught English at Pennsylvania State University (1950–52) and worked as an advertising copywriter for the magazines Time (1952–56) and Look (1956–58) and as promotion manager for McCall’s (1958–61), meanwhile writing Catch-22 in his spare time.",
                "image_name" => "A photo of Joseph Heller",
                "image_path" => "/resources/data/joseph_heller.jpg",
                "quotes" => ["He had decided to live forever or die in the attempt.", "The enemy is anybody who's going to get you killed, no matter which side he is on."]
            ],
            [
                "name" => "Eric Ambler",
                "bio" => "Eric Ambler began his writing career in the early 1930s, and quickly established a reputation as a thriller writer of extraordinary depth and originality. He is often credited as the inventor of the modern political thriller.Ambler began his working life at an engineering firm, then as a copywriter at an advertising agency, while in his spare time he worked on his ambition to become a playwright. His first novel was published in 1936 and as his reputation as a novelist grew he turned to writing full time. During the war he was seconded to the Army Film Unit, where he wrote, among other projects, The Way Ahead with Peter Ustinov.",
                "image_name" => "A photo of Eric Ambler",
                "image_path" => "/resources/data/eric_ambler.jpg",
                "quotes" => ["'Good' did not triumph. 'Evil' did not triumph. The two resolved, destroyed each other and created new 'evils', new 'goods' which slew each other in their turn."]
            ],
            [
                "name" => "Jon Duckett",
                "bio" => "Jon Duckett has been helping companies create innovative digital solutions for over 15 years, designing and delivering web and mobile projects for small businesses and tech startups through to global brands like Diesel, Philips, Nike, Wrangler, and Xerox.
                During this time, he has has written and co-authored over a dozen books on web design and programming.",
                "image_name" => "A photo of Jon Duckett",
                "image_path" => "/resources/data/jon_duckett.jpg",
            ],
            [
                "name" => "Kazuo Ishguro",
                "bio" => "Sir Kazuo Ishiguro OBE FRSA FRSL is a British novelist, screenwriter, musician, and short-story writer. He was born in Nagasaki, Japan, and moved to Britain in 1960 when he was five. Ishiguro is one of the most celebrated contemporary fiction authors in English",
                "image_name" => "A photo of Kazuo Ishiguro",
                "image_path" => "/resources/data/kazuo_ishiguro.jpg",
                "quotes" => ["As a writer, I'm more interested in what people tell themselves happened rather than what actually happened.", "Memories, even your most precious ones, fade surprisingly quickly. But I don’t go along with that. The memories I value most, I don’t ever see them fading."]
            ],
            [
                "name" => "Ben Goldacre",
                "bio" => "Ben Michael Goldacre MBE is a British physician, academic, and science writer. As of March 2015, he is a senior clinical research fellow at the Centre for Evidence-Based Medicine, part of the University of Oxford's Nuffield Department of Primary Care Health Sciences.[6] He is a founder of the AllTrials campaign and OpenTrials[4] to require open science practices in clinical trials. Goldacre is known in particular for his Bad Science column in The Guardian, which he wrote between 2003 and 2011, and is the author of four books: Bad Science (2008), a critique of irrationality and certain forms of alternative medicine; Bad Pharma (2012), an examination of the pharmaceutical industry, its publishing and marketing practices, and its relationship with the medical profession;[9] I Think You'll Find It's a Bit More Complicated Than That,[10] a collection of his journalism; and Statins, about evidence-based medicine.[11] Goldacre frequently delivers free talks about bad science—he describes himself as a 'nerd evangelist'.",
                "image_name" => "A photo of Ben Goldacre",
                "image_path" => "/resources/data/ben_goldacre.jpg",
                "quotes" => ["You cannot reason people out of a position that they did not reason themselves into.", "Repeat after me: pharma being shit does not mean magic beans cure cancer."]
            ],
            [
                "name" => "Kate Fox",
                "bio" => "Kate Fox is a social anthropologist, co-director of the Social Issues Research Centre and a Fellow of the Institute for Cultural Research. She has written several books, including Watching the English: The Hidden Rules of English Behaviour. In 1989, Fox became co-director of MCM Research Ltd., and continues to provide consulting services. She is now a co-director of the Social Issues Research Centre, based in Oxford, England. Recent topics include social effects of alcohol and the purposes of small talk. Fox is currently writing a book about that 'examine[s] many aspects of 21st-century life and obsessions - including mobile phones, social media, online dating, shopping, celebrity, reality TV, computer games, selfies, etc - from an evolutionary/anthropological perspective'",
                "image_name" => "A photo of Kate Fox",
                "image_path" => "/resources/data/kate_fox.jpg",
                "quotes" => ["A truly English protest march would see us all chanting: 'What do we want? GRADUAL CHANGE! When do we want it? IN DUE COURSE!", "Moderation is all very well, but only in moderation.", "Even the English, who understand it, are not exactly riotously amused by the understatement. At best, a well-timed, well-turned understatement only raises a slight smirk."]
            ],
            [
                "name" => "Peter Wohlleben",
                "bio" => "Peter Wohlleben is a German forester and author who writes on ecological themes in popular language. He is the author of the New York Times Bestseller The Hidden Life of Trees: What They Feel, How They Communicate, which was translated from German into English in 2016. Wohlleben began publishing books about his views on ecology and forest management in 2007. The appearance of his Das geheime Leben der Bäume through Random House's Ludwig imprint led to profiles and reviews in all the major German newspapers, including skeptical pieces in the business press. The book was featured in a cover story in Der Spiegel and appeared on the Spiegel bestseller list. His 2015 book about natural forests, Das geheime Leben der Bäume:Was sie fühlen, wie sie kommunizieren – die Entdeckung einer verborgenen Welt, (The Hidden Life of Trees: What they Feel, How they Communicate: Discoveries from a Secret World) introduces readers to the world of trees, including Wood-Wide Web, through which nutrition and signals are exchanged among trees.",
                "image_name" => "A photo of Peter Wohlleben",
                "image_path" => "/resources/data/peter_wohlleben.jpg",
                "quotes" => ["Trees, it turns out, have a completely different way of communicating: they use scent.", "Every species want to survive, and each takes from the others what it needs. All are basically ruthless, and the only reason everything doesn't collapse is because there are safeguards against those who demand more than their due."]
            ],
            [
                "name" => "Angela Carter",
                "bio" => "Angela Olive Pearce, who published under the name Angela Carter, was an English novelist, short story writer, poet, and journalist, known for her feminist, magical realism, and picaresque works. She is best known for her book The Bloody Chamber, which was published in 1979. In 2008, The Times ranked Carter tenth in their list of 'The 50 greatest British writers since 1945'. In 2012, Nights at the Circus was selected as the best ever winner of the James Tait Black Memorial Prize.",
                "image_name" => "A photo of Angela Carter",
                "image_path" => "/resources/data/angela_carter.jpg",
                "quotes" => ["Comedy is tragedy that happens to other people.", "Language is power, life and the instrument of culture, the instrument of domination and liberation."]
            ],
            [
                "name" => "Gabriel García Márquez",
                "bio" => "Gabriel García Márquez was a Colombian novelist, short-story writer, screenwriter, and journalist, known affectionately as Gabo throughout Latin America. Considered one of the most significant authors of the 20th century, particularly in the Spanish language, he was awarded the 1972 Neustadt International Prize for Literature and the 1982 Nobel Prize in Literature. He pursued a self-directed education that resulted in leaving law school for a career in journalism. From early on he showed no inhibitions in his criticism of Colombian and foreign politics.",
                "image_name" => "A photo of Gabriel García Márquez",
                "image_path" => "/resources/data/gabriel_garcia_marquez.jpg",
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
