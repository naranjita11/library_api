<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                "author_id" => 1,
                "title" => "Men at Arms",
                "synopsis" => "The protagonist is Guy Crouchback, heir of a declining aristocratic English Roman Catholic family. Guy has spent his thirties at the family villa in Italy (based on the Earl of Carnarvon's 1885 villa Altachiara in Portofino[1][2]). Crouchback has been shunning the world after the failure of his marriage and has decided to return to England at the very beginning of the Second World War, in the belief that the creeping evils of modernity, gradually apparent in the Soviet Union and Nazi Germany, have become all too clearly displayed as a real and embodied enemy.",
                "pages" => 256,
                "image_name" => "Men at Arms Book Cover",
                "image_path" => "/public/resources/data/evelyn_waugh_men_at_arms.jpg",
                "publication_date" => "1952-01-01",
                "rrp" => "12.99"
            ],

            [
                "author_id" => 1,
                "title" => "Officers and Gentlemen",
                "synopsis" => "Sent back to the UK in disgrace at the end of the first novel, Guy Crouchback — heir of a declining aristocratic English Roman Catholic family—manages to find a place in a fledgling commando brigade, training on a Scottish island under an old friend, Tommy Blackhouse. Tommy is also the man for whom Guy's wife Virginia left him. Another trainee is Ivor Claire, whom Guy regards as the flower of English chivalry. He (Guy) learns to exploit the niceties of military ways of doing things with the assistance of Colonel \"Jumbo\" Trotter, an elderly Halberdier who knows all the strings to pull.",
                "image_name" => "Officers and Gentlemen",
                "image_path" => "/public/resources/data/evelyn_waugh_officers_and_gentlemen.jpg",
                "pages" => 267,
                "publication_date" => "1955-03-07",
                "rrp" => "15.99"
            ],

            [
                "author_id" => 1,
                "title" => "Unconditional Surrender",
                "synopsis" => "Guy Crouchback spends 1941–1943 in Britain, mostly at desk jobs. He turns 40 and, with the German invasion of Russia and Britain's subsequent alliance with the Soviet Union, feels the futility of the war. American soldiers are all over London. Virginia has fallen on hard times and is reduced to selling her furs. She had been persuaded to accompany Trimmer, her former hairdresser who was set up as a war hero for media consumption. She becomes pregnant by him and searches futilely for an abortionist. Eventually she decides to look for a husband instead. Crouchback is chosen for parachute training prior to being sent into action one last time. The commanding officer at the training center is Ludovic. In the previous volume, Officers and Gentlemen, Ludovic had deserted from his unit in Crete, and in the process murdered two men, one while escaping from the island by boat. Crouchback was also on board, and although he was delirious and barely aware of his surroundings, Ludovic fears exposure if the two meet. Already a misfit as an officer, Ludovic becomes increasingly paranoid and isolated.",
                "image_name" => "Unconditional Surrender",
                "image_path" => "/public/resources/data/evelyn_waugh_unconditional_surrounding.jpg",
                "pages" => 244,
                "publication_date" => "1949-03-07",
                "rrp" => "19.99"
            ],

            [
                "author_id" => 2,
                "title" => "Kingdom of Fear",
                "synopsis" => "The book seems to begin as memoir or an autobiography, but rapidly devolves into numerous fragmented accounts of Thompson's exploits which could be termed as a type of Gonzo biography. There is a rough adherence to actual chronology though many events in the book are not in order. However, some continuity does exist throughout the work, for example, the \"Witness\" segments, dealing with Gail Palmer's sexual assault lawsuit against Thompson, appearing once every section in roughly the same area. In addition to these larger narratives, there are also several sections which hold no connection to each other in any way, with the exception of some of the same people or places from a previous section being mentioned.",
                "image_name" => "Kingdom of Fear",
                "image_path" => "/public/resources/data/hunter_s_thompson_kingdom_of_fear.jpg",
                "pages" => 275,
                "publication_date" => "2003-12-07",
                "rrp" => "9.99",
            ],

            [
                "author_id" => 2,
                "title" => "Hells Angels",
                "synopsis" => "The book details Thompson's experiences living with the Hells Angels, a notorious motorcycle club in California. The author spent over a year embedded with one chapter, learning their unique subculture and immersing himself in their lifestyle. He recounts his time spent traveling through California by motorcycle, and describes the contrast between the general lawlessness of the club and the exaggerated fear that very lawlessness engenders in society.",
                "pages" => 320,
                "image_name" => "Hells Angels",
                "image_path" => "/public/resources/data/hunter_s_thompson_hells_angels.jpg",
                "publication_date" => "1967-03-01",
                "rrp" => "9.99"
            ],
            [
                "author_id" => 3,
                "title" => "Catch 22",
                "synopsis" => "This scathing war satire follows Capt. John Yossarian (Alan Arkin), a pilot stationed in the Mediterranean who flies bombing missions during World War II. Attempting to cope with the madness of armed conflict, Yossarian struggles to find a way out of his wartime reality. Surrounded by eccentric military officers, such as the opportunistic 1st Lt. Milo Minderbinder (Jon Voight), Yossarian must resort to extreme measures to escape his dire and increasingly absurd situation.",
                "image_name" => "Catch 22",
                "image_path" => "/public/resources/data/joseph_heller_catch_22.jpg",
                "pages" => 400,
                "publication_date" => "1960-03-01",
                "rrp" => "12.99"
            ],

            [
                "author_id" => 4,
                "title" => "Journey into Fear",
                "synopsis" => "An American engineer in Istanbul, Howard Graham (Joseph Cotten), becomes the target of a Nazi assassination due to his involvement in improving the Turkish navy. With the help of police Colonel Haki (Orson Welles), Graham escapes from his hotel to board a ship to safety, leaving behind his wife (Ruth Warrick). On board, he encounters a number of passengers, including the dancer Josette Martel (Dolores del Río). However, the passenger Peter Banat (Jack Moss) is not who he appears to be.",
                "image_name" => "Journey into Fear",
                "image_path" => "/public/resources/data/eric_ambler_journey_into_fear.jpg",
                "pages" => 200,
                "publication_date" => "1940-03-01",
                "rrp" => "6.99"
            ],

            [
                "author_id" => 4,
                "title" => "Epitaph for a Spy",
                "synopsis" => "Wrongly accused of espionage after a photo lab technician and a French secret agent (Julien Mitchell) discover incriminating surveillance photos on his camera, Peter Vadassy (James Mason), an Austrian medical student on holiday on the French Riviera, returns to his room at the Hotel Reserve. Under threat of deportation, Vadassy launches an investigation into his fellow guests and struggles to unmask the spy who framed him in a place where suspicions abound and trust is a luxury he can't afford.",
                "image_name" => "Epitaph for a Spy",
                "image_path" => "/public/resources/data/epitaph_for_a_spy.jpg",
                "pages" => 204,
                "publication_date" => "1944-03-01",
                "rrp" => "7.99"
            ],

            [
                "author_id" => 5,
                "title" => "HTML & CSS",
                "synopsis" => "A full-color introduction to the basics of HTML and CSS from the publishers of Wrox! Every day, more and more people want to learn some HTML and CSS. Joining the professional web designers and programmers are new audiences who need to know a little bit of code at work (update a content management system or e-commerce store) and those who want to make their personal blogs more attractive. Many books teaching HTML and CSS are dry and only written for those who want to become programmers, which is why this book takes an entirely new approach.",
                "pages" => 601,
                "publication_date" => "2011-03-01",
                "rrp" => "1.99"
            ],

            [
                "author_id" => 5,
                "title" => "JAVASCRIPT & J QUERY",
                "synopsis" => "This full-color book adopts a visual approach to teaching JavaScript & jQuery, showing you how to make web pages more interactive and interfaces more intuitive through the use of inspiring code examples, infographics, and photography.",
                "pages" => 1000,
                "publication_date" => "2012-03-01",
                "rrp" => "109.99"
            ],
            [
                "author_id" => 6,
                "title" => "Nocturnes",
                "synopsis" => "An exploration of love, need, and the ineluctable force of the past, Nocturnes reveals these individuals to us with extraordinary precision and subtlety, and with the arresting psychological and emotional detail that has marked all of Kazuo Ishiguro’s acclaimed works of fiction.",
                "pages" => 240,
                "publication_date" => "2011-03-01",
                "rrp" => "7.99"
            ],
                
            [
                "author_id" => 7,
                "title" => "Bad Science",
                "synopsis" => "We often swallow scientific-sounding language used in advertisements or on the news without any further thought. But if we analyze it a little, we often find that it’s merely pseudoscience. Bad Science shows us that this bogus science can lead to serious misunderstandings, injustice and even death.",
                "pages" => 342,
                "publication_date" => "2011-03-01",
                "rrp" => "8.99"
            ],
                
            [
                "author_id" => 8,
                "title" => "Watching the English",
                "synopsis" => "In Watching the English, Kate Fox takes a revealing look at the quirks, habits and foibles of the English people. She puts the English national character under her anthropological microscope, and finds a strange and fascinating culture, governed by complex sets of unspoken rules and Byzantine codes of behaviour.",
                "pages" => 414,
                "publication_date" => "2011-03-01",
                "rrp" => "8.99"
            ],
        // ​
            [
                "author_id" => 9,
                "title" => "The Hidden Life of Trees",
                "synopsis" => "In The Hidden Life of Trees: What They Feel, How They Communicate―Discoveries from A Secret World, Peter Wohlleben shows us that these are all but appearances. Having worked as a forester for over 30 years, he has accumulated plenty of observations that the life of the trees is much more elaborate than we can perceive at a first glance. Most of his observations are also backed up by scientific research.",
                "pages" => 266,
                "publication_date" => "2011-03-01",
                "rrp" => "9.99"
            ],
            
            [
                "author_id" => 10,
                "title" => "Book of Fairy Tales",
                "synopsis" => "This stunning collection contains lyrical tales, bloody tales and hilariously funny and ripely bawdy stories from countries all around the world- from the Arctic to Asia - and no dippy princesses or soppy fairies. Instead, we have pretty maids and old crones; crafty women and bad girls; enchantresses and midwives; rascal aunts and odd sisters.",
                "pages" => 486,
                "publication_date" => "2011-03-01",
                "rrp" => "12.99"
            ],
            
            [
                "author_id" => 10,
                "title" => "Wise Children",
                "synopsis" => "Wise Children (1991) was the last novel written by Angela Carter. The novel follows the fortunes of twin chorus girls, Dora and Nora Chance, and their bizarre theatrical family. It explores the subversive nature of fatherhood, the denying of which leads Nora and Dora to frivolous \"illegitimate\" lechery.",
                "pages" => 234,
                "publication_date" => "2011-03-01",
                "rrp" => "7.99"
            ],
            
            [
                "author_id" => 11,
                "title" => "Leaf Storm",
                "synopsis" => "The narrative of Leaf Storm shifts between the perspectives of three generations of one family as the three characters (father, daughter and grandson respectively) find themselves in a spiritual limbo after the death of a man passionately hated by the entire village yet inextricably linked to the patriarch of the family.",
                "pages" => 117,
                "publication_date" => "2011-03-01",
                "rrp" => "6.99"
            ],
            
            [
                "author_id" => 11,
                "title" => "100 Years of Solitude",
                "synopsis" => "This is the author’s epic tale of seven generations of the Buendía family that also spans a hundred years of turbulent Latin American history, from the postcolonial 1820s to the 1920s. Patriarch José Arcadio Buendía builds the utopian city of Macondo in the middle of a swamp. At first prosperous, the town attracts Gypsies and hucksters—among them the old writer Melquíades, a stand-in for the author. A tropical storm lasting nearly five years almost destroys the town, and by the fifth Buendía generation its physical decrepitude is matched by the family’s depravity. A hurricane finally erases all traces of the city.",
                "pages" => 342,
                "publication_date" => "2011-03-01",
                "rrp" => "7.99"
            ]
        ];

        foreach($books as $book) {
            Book::create($book);
        }
    }
}
