<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SongsMetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('songs_meta')->delete();
        
        \DB::table('songs_meta')->insert(array (
            0 => 
            array (
                'name' => 'summary',
                'value' => 'Written by Benny Andersson, Björn Ulvaeus & Stig Anderson, this song appeared on ABBA\'s 1975 self-titled album. According to the Mamma Mia Songfacts, ABBA\'s manager Stig Anderson would often come up with titles that singers Ulvaeus and Andersson would write lyrics around, and this is an example of that. The phrase "Mamma Mia" is an Italian saying that literally means "My Mother" and is used to express surprise.

When released as a 45rpm single, In much of the world, the b-side was "Intermezzo No. <a href="http://www.last.fm/music/ABBA/_/Mamma+Mia">Read more on Last.fm</a>.',
                'song_id' => 3,
                'created_at' => '2018-04-28 12:17:42',
                'updated_at' => '2018-04-28 12:17:42',
            ),
            1 => 
            array (
                'name' => 'summary',
                'value' => ' <a href="http://www.last.fm/music/ABBA/_/Take+a+Chance+on+Me">Read more on Last.fm</a>.',
                'song_id' => 5,
                'created_at' => '2018-04-28 12:17:44',
                'updated_at' => '2018-04-28 12:17:44',
            ),
            2 => 
            array (
                'name' => 'summary',
                'value' => '"Dream On" is the first single by Aerosmith from their 1973 debut album, Aerosmith. Written by lead singer Steven Tyler, this blues-influenced power ballad became their first major hit. Although it peaked at #59 when it was originally released as a single in 1973, it became a Top 10 single in 1976, peaking at #6, when it was re-released as a single. This song was first played live in Willimantic, CT at the Shaboo Inn.
Song was re-done by Aerosmith in 2007 for the game "Guitar Hero: Aerosmith". <a href="http://www.last.fm/music/Aerosmith/_/Dream+On">Read more on Last.fm</a>.',
                'song_id' => 11,
                'created_at' => '2018-04-28 12:17:53',
                'updated_at' => '2018-04-28 12:17:53',
            ),
            3 => 
            array (
                'name' => 'summary',
            'value' => '"Hand in My Pocket" is a song written by Alanis Morissette and Glen Ballard, and produced by Ballard for Morissette\'s third album, Jagged Little Pill (1995). Its protagonist discusses the everyday troubles and worries that she encounters, but focuses on finding ways to stay relaxed and determined. It was released as the album\'s second single in 1995 and became Morissette\'s second number-one hit on Billboard\'s U.S. Modern Rock Tracks chart. "Hand in My Pocket" also received substantial airplay on pop radio <a href="http://www.last.fm/music/Alanis+Morissette/_/Hand+in+My+Pocket">Read more on Last.fm</a>.',
                'song_id' => 12,
                'created_at' => '2018-04-28 12:17:54',
                'updated_at' => '2018-04-28 12:17:54',
            ),
            4 => 
            array (
                'name' => 'summary',
                'value' => '"Hands Clean" is a pop-rock song performed by Alanis Morissette, featured on her 2002 album Under Rug Swept. It released as the album\'s first single on February 4, 2002.

The narrative voice of the song alternates between verses, forming a kind of dialogue between two people, which apparently chronicles a love affair that an underage Morissette had with a record executive. She reportedly said in an interview to US Weekly that the song is about an affair she had with a man who was 29 years old when she was 14. <a href="http://www.last.fm/music/Alanis+Morissette/_/Hands+Clean">Read more on Last.fm</a>.',
                'song_id' => 13,
                'created_at' => '2018-04-28 12:17:56',
                'updated_at' => '2018-04-28 12:17:56',
            ),
            5 => 
            array (
                'name' => 'summary',
            'value' => '"Head over Feet" is a song written by Alanis Morissette and Glen Ballard, and produced by Ballard for Morissette\'s third album, Jagged Little Pill (1995). It was released as the album\'s fifth single (sixth in the United States) in 1996 and presented a softer sound than the previous singles from the album. "Head over Feet" became Morissette\'s first number-one hit on Billboard\'s U.S. Adult Top 40 chart and topped the Top 40 Mainstream chart, but it was her first song not to enter the top twenty on the Modern Rock Tracks chart. <a href="http://www.last.fm/music/Alanis+Morissette/_/Head+Over+Feet">Read more on Last.fm</a>.',
                'song_id' => 14,
                'created_at' => '2018-04-28 12:17:57',
                'updated_at' => '2018-04-28 12:17:57',
            ),
            6 => 
            array (
                'name' => 'summary',
            'value' => '"Ironic" is a song written by Alanis Morissette and Glen Ballard and produced by Ballard for Morissette\'s third album Jagged Little Pill (1995). It was released as the album\'s fourth single in 1996.

Musically, the song is a glossy take on a basic grunge music format with delicate, sparsely-instrumented verses alternating with loud, aggressive chorus sections. Lyrically, it comprises a series of vignettes describing situations that end with the question "Isn\'t it ironic?" <a href="http://www.last.fm/music/Alanis+Morissette/_/Ironic">Read more on Last.fm</a>.',
                'song_id' => 15,
                'created_at' => '2018-04-28 12:17:59',
                'updated_at' => '2018-04-28 12:17:59',
            ),
            7 => 
            array (
                'name' => 'summary',
                'value' => '"Uninvited" is a song written and recorded by Alanis Morissette, and co-produced by Morissette and Rob Cavallo for the soundtrack of the 1998 film City of Angels. Morissette\'s first new recording since her international debut album \'Jagged Little Pill\', it was released as a single from the album in March 1998. The song, which was prominently featured in the film\'s trailer, is driven by four piano notes and builds to an instrumental climax. Besides the film soundtrack <a href="http://www.last.fm/music/Alanis+Morissette/_/Uninvited">Read more on Last.fm</a>.',
                'song_id' => 17,
                'created_at' => '2018-04-28 12:18:01',
                'updated_at' => '2018-04-28 12:18:01',
            ),
            8 => 
            array (
                'name' => 'summary',
                'value' => 'According to the You Oughta Know Songfacts, the song is rumored to be about the actor Dave Coulier, who Morissette went out with for a while when she was 16 and he was 31 In a 2008 interview with the Calgary Herald, Coulier claimed that this song was about their rocky former relationship <a href="http://www.last.fm/music/Alanis+Morissette/_/You+Oughta+Know">Read more on Last.fm</a>.',
                'song_id' => 18,
                'created_at' => '2018-04-28 12:18:03',
                'updated_at' => '2018-04-28 12:18:03',
            ),
            9 => 
            array (
                'name' => 'summary',
            'value' => '"You Learn" is a rock song written by Alanis Morissette and Glen Ballard, and produced by Ballard for Morissette\'s third album Jagged Little Pill (1995).

In the song the first glimpse of Morissette\'s insightful, new-age guru appears for the first time, speaking of the importance of poor decision making in life and explaining that every decision that people make will teach a valuable lesson. A line from "You Learn" is the source of the title of Jagged Little Pill. <a href="http://www.last.fm/music/Alanis+Morissette/_/You+Learn">Read more on Last.fm</a>.',
                'song_id' => 19,
                'created_at' => '2018-04-28 12:18:04',
                'updated_at' => '2018-04-28 12:18:04',
            ),
            10 => 
            array (
                'name' => 'summary',
            'value' => '"Back to Black" is a song by English singer-songwriter Amy Winehouse from her second studio album, Back to Black (2006). Written by Winehouse and Mark Ronson and produced by Ronson, according to the Back to Black Songfacts, the song is about Winehouse\'s break up with then boyfriend Blake Fielder-Civil. They later got together again and got married in 2007 before spiltting up again a couple of years later.

The song was released as the album\'s third single on 30 April 2007 in the United Kingdom and 7 March 2008 in the rest of the world. <a href="http://www.last.fm/music/Amy+Winehouse/_/Back+to+Black">Read more on Last.fm</a>.',
                'song_id' => 22,
                'created_at' => '2018-04-28 12:18:08',
                'updated_at' => '2018-04-28 12:18:08',
            ),
            11 => 
            array (
                'name' => 'summary',
            'value' => '"Rehab" is a song by English singer-songwriter Amy Winehouse from her second studio album, Back to Black (2006). Written by Winehouse and produced by Mark Ronson, it was released as the album\'s lead single in the United Kingdom on 23 October 2006. The lyrics are autobiographical, describing a protagonist\'s drinking habits and refusal to enter rehabilitation clinics.

The song received widespread critical acclaim and enjoyed commercial success in Winehouse\'s native England and abroad. <a href="http://www.last.fm/music/Amy+Winehouse/_/Rehab">Read more on Last.fm</a>.',
                'song_id' => 23,
                'created_at' => '2018-04-28 12:18:10',
                'updated_at' => '2018-04-28 12:18:10',
            ),
            12 => 
            array (
                'name' => 'summary',
                'value' => ' <a href="http://www.last.fm/music/Amy+Winehouse/_/Valerie">Read more on Last.fm</a>.',
                'song_id' => 24,
                'created_at' => '2018-04-28 12:18:12',
                'updated_at' => '2018-04-28 12:18:12',
            ),
            13 => 
            array (
                'name' => 'summary',
                'value' => '"The House of the Rising Sun" is a folk song from the United States. Also called "House of the Rising Sun" or occasionally "Rising Sun Blues", it tells of a life gone wrong in New Orleans. Depending on the version, the song may be sung from the perspective of a woman or a man. The most successful version was recorded by the English rock group The Animals in 1964, which was a number one hit in the United Kingdom, United States, Sweden and Canada. The Animals\' version was also a part of the soundtrack for the Martin Scorsese 1995 film Casino. <a href="http://www.last.fm/music/The+Animals/_/The+House+of+the+Rising+Sun">Read more on Last.fm</a>.',
                'song_id' => 25,
                'created_at' => '2018-04-28 12:18:13',
                'updated_at' => '2018-04-28 12:18:13',
            ),
            14 => 
            array (
                'name' => 'summary',
            'value' => '"Dangerous Woman" is a song recorded by American singer Ariana Grande, serving as the lead single for her third studio album of the same name (2016). It was written by Johan Carlsson, Ross Golan and Max Martin, with Martin and Carlsson both serving as record and vocal producers. The song was first released along with the pre-order of the album on iTunes Store on March 11, 2016 and was sent to US contemporary hit and rhythmic radio on March 15, 2016. <a href="http://www.last.fm/music/Ariana+Grande/_/Dangerous+Woman">Read more on Last.fm</a>.',
                'song_id' => 27,
                'created_at' => '2018-04-28 12:18:16',
                'updated_at' => '2018-04-28 12:18:16',
            ),
            15 => 
            array (
                'name' => 'summary',
            'value' => '"Into You" is a song recorded by American singer Ariana Grande, serving as the second single from her third studio album, Dangerous Woman (2016). It was written by Grande, Max Martin, Savan Kotecha, Alexander Kronlund, and Ilya Salmanzadeh with Salmanzadeh and Martin serving as producers. <a href="http://www.last.fm/music/Ariana+Grande/_/Into+You">Read more on Last.fm</a>.',
                'song_id' => 28,
                'created_at' => '2018-04-28 12:18:18',
                'updated_at' => '2018-04-28 12:18:18',
            ),
            16 => 
            array (
                'name' => 'summary',
                'value' => 'A song about a space aged lover named Arabella serves as track four on the Arctic Monkeys 5th album AM. It furthers the album’s motif of passion’s incessant pull, both for better and worse, with the titular woman’s unavoidable appeal.
<a href="http://www.last.fm/music/Arctic+Monkeys/_/Arabella">Read more on Last.fm</a>.',
                'song_id' => 31,
                'created_at' => '2018-04-28 12:18:22',
                'updated_at' => '2018-04-28 12:18:22',
            ),
            17 => 
            array (
                'name' => 'summary',
                'value' => 'The new song was first played live at a concert in May 2013 in Ventura, California, and was the opening number for both of their Scandinavian gigs at Hultsfred Festival in Sweden and again at the Danish NorthSide festival on June 14 and June 16 respectively. 

The song ‘Do I Wanna Know’ was released for download on iTunes on the morning of June 19. Despite a midweek release, the song entered the UK singles chart at number 11, making it the band\'s highest charting single since "Fluorescent Adolescent" in 2007. <a href="http://www.last.fm/music/Arctic+Monkeys/_/Do+I+Wanna+Know%3F">Read more on Last.fm</a>.',
                'song_id' => 32,
                'created_at' => '2018-04-28 12:18:23',
                'updated_at' => '2018-04-28 12:18:23',
            ),
            18 => 
            array (
                'name' => 'summary',
                'value' => 'According to Songfacts, Fluorescent Adolescent was written by Alex Turner with his ex girlfriend, Johanna Bennett, during a Mediterranean holiday, when they were reminiscing about characters they knew at school.  The video for the song was based on John Cooper Clarke\'s poem "Out of Control Fairground", which was written specially for the release of the single. <a href="http://www.last.fm/music/Arctic+Monkeys/_/Fluorescent+Adolescent">Read more on Last.fm</a>.',
                'song_id' => 33,
                'created_at' => '2018-04-28 12:18:25',
                'updated_at' => '2018-04-28 12:18:25',
            ),
            19 => 
            array (
                'name' => 'summary',
                'value' => 'The song was released as a digital download in the UK on 27 February 2012 and debuted at #23 on the UK Singles Chart, the band\'s highest charting single since "Crying Lightning" reached #12 in 2009.

The oficial video was filmed by Aaron Brown and Ben Chappell of Focus Creeps and features former Sex Pistol and current DJ Steve Jones can be seen introducing the song during his KROQ show while the band lip-synch the song in a car.


<a href="http://www.last.fm/music/Arctic+Monkeys/_/R+U+Mine%3F">Read more on Last.fm</a>.',
                'song_id' => 34,
                'created_at' => '2018-04-28 12:18:26',
                'updated_at' => '2018-04-28 12:18:26',
            ),
            20 => 
            array (
                'name' => 'summary',
                'value' => 'The song, about prostitution in the Neepsend district of Sheffield, was originally known as "Scummy." <a href="http://www.last.fm/music/Arctic+Monkeys/_/When+the+Sun+Goes+Down">Read more on Last.fm</a>.',
                'song_id' => 36,
                'created_at' => '2018-04-28 12:18:29',
                'updated_at' => '2018-04-28 12:18:29',
            ),
            21 => 
            array (
                'name' => 'summary',
                'value' => 'Released April 23, 2002

"Complicated" is a song by Avril Lavigne and was her first single, released in 2002 from her debut album, Let Go. It was written by Lavigne and The Matrix (Scott Spock, Lauren Christy, and Graham Edwards), and produced by The Matrix. The single reached number one in Australia, New Zealand and Mexico, number two on the Billboard Hot 100, spending 16 consecutive weeks in the Top Ten of the Billboard Hot 100 and 13 weeks in the Top Five, and number three in the United Kingdom. <a href="http://www.last.fm/music/Avril+Lavigne/_/Complicated">Read more on Last.fm</a>.',
                'song_id' => 38,
                'created_at' => '2018-04-28 12:18:33',
                'updated_at' => '2018-04-28 12:18:33',
            ),
            22 => 
            array (
                'name' => 'summary',
            'value' => '"Girlfriend" a song by Canadian Pop Rock superstar singer Avril Lavigne, is the lead single from her third album, The Best Damn Thing (2007). It was produced by Lukasz Gottwald. "Girlfriend" became Lavigne\'s biggest hit in the United States, where it reached number one on the U.S. Billboard Hot 100. It topped the chart in Australia for 6 weeks, and reached number two in the United Kingdom. A remix featuring rapper Lil Mama was released in June 2007. <a href="http://www.last.fm/music/Avril+Lavigne/_/Girlfriend">Read more on Last.fm</a>.',
                'song_id' => 39,
                'created_at' => '2018-04-28 12:18:34',
                'updated_at' => '2018-04-28 12:18:34',
            ),
            23 => 
            array (
                'name' => 'summary',
            'value' => 'Released as a single on June 20, 1989 by the The B-52\'s, "Love Shack" was taken from the album "Cosmic Thing". It was the band\'s biggest hit song, reaching number 3 in the US and number 2 in the UK. The track\'s inspiration was a cabin in Athens, Georgia (USA), where the band originates from - which was located off the "Atlanta Highway" (as per the lyrics). The song was produced by Don Was and the music video was directed by Adam Bernstein.

The B-side to the track was "Roam" in the USA <a href="http://www.last.fm/music/The+B-52%27s/_/Love+Shack">Read more on Last.fm</a>.',
                'song_id' => 40,
                'created_at' => '2018-04-28 12:18:36',
                'updated_at' => '2018-04-28 12:18:36',
            ),
            24 => 
            array (
                'name' => 'summary',
                'value' => '"A Hard Day\'s Night" is a song by British rock band The Beatles. Written by John Lennon and credited to Lennon/McCartney, it was released on the movie soundtrack of the same name in 1964. It was later released as a single, with "I Should Have Known Better" as its B-side.

The song featured prominently on the soundtrack to The Beatles\' first feature film, A Hard Day\'s Night, and was on their album of the same name. The song topped the charts in both the United Kingdom and United States when it was released as a single. <a href="http://www.last.fm/music/The+Beatles/_/A+Hard+Day%27s+Night">Read more on Last.fm</a>.',
                'song_id' => 42,
                'created_at' => '2018-04-28 12:18:39',
                'updated_at' => '2018-04-28 12:18:39',
            ),
            25 => 
            array (
                'name' => 'summary',
                'value' => 'According to the Back in the USSR Songfacts, this was inspired by the The Beach Boys song, California Girls.

During the recording session on 22 August 1968, Ringo Starr walked out and announced that he had quit.

"Back in the U.S.S.R." was recorded without Starr, with McCartney primarily responsible for the drum parts. McCartney\'s drums are most prominent in the mix, but both Lennon and Harrison recorded drum tracks for the song; these are audible in the left channel of the stereo mix.

<a href="http://www.last.fm/music/The+Beatles/_/Back+in+the+U.S.S.R.">Read more on Last.fm</a>.',
                'song_id' => 43,
                'created_at' => '2018-04-28 12:18:40',
                'updated_at' => '2018-04-28 12:18:40',
            ),
            26 => 
            array (
                'name' => 'summary',
                'value' => '"Come Together" is a song by The Beatles written primarily by John Lennon and credited to Lennon/McCartney. 
The song is the lead-off track on The Beatles\' September 1969 album Abbey Road. 
One month later it also appeared as one of the sides of the group\'s twenty-first single (it was a double A-side, the other side being George Harrison\'s "Something ") in the United Kingdom, their twenty-sixth in the United States. 
The song reached the top of the charts in the US, while becoming a Top 10 hit in the UK. <a href="http://www.last.fm/music/The+Beatles/_/Come+Together">Read more on Last.fm</a>.',
                'song_id' => 44,
                'created_at' => '2018-04-28 12:18:41',
                'updated_at' => '2018-04-28 12:18:41',
            ),
            27 => 
            array (
                'name' => 'summary',
            'value' => '"Help!" is a song by The Beatles that served as the title song for both the album Help! and the film Help!. It was also released as a single, and was #1 for three weeks in both the UK and USA. "Help!" was written primarily by John Lennon, but credited (as all Beatles song written by either person) to Lennon/McCartney. Paul McCartney reports that he had a hand in writing the song as well, being called in "to complete it" in a two-hour joint writing session at Lennon\'s house. <a href="http://www.last.fm/music/The+Beatles/_/Help%21">Read more on Last.fm</a>.',
                'song_id' => 45,
                'created_at' => '2018-04-28 12:18:43',
                'updated_at' => '2018-04-28 12:18:43',
            ),
            28 => 
            array (
                'name' => 'summary',
                'value' => '"Let It Be" is a song by The Beatles, released in March 1970 as a single, and as the title track of their album Let It Be. Although credited to Lennon/McCartney it is generally accepted to be a Paul McCartney composition.

The single reached #1 in the U.S., Australia, Italy, Norway and Switzerland and #2 in the UK.
It was the final single released by The Beatles while the band was still active.

McCartney said he had the idea of "Let It Be", after <a href="http://www.last.fm/music/The+Beatles/_/Let+It+Be">Read more on Last.fm</a>.',
                'song_id' => 46,
                'created_at' => '2018-04-28 12:18:44',
                'updated_at' => '2018-04-28 12:18:44',
            ),
            29 => 
            array (
                'name' => 'summary',
                'value' => '"Paperback Writer" is a 1966 rock song recorded and released by The Beatles. Credited to Lennon/McCartney, the song was released as the A-side of their eleventh single. The single went to the number one spot in the United States, United Kingdom, West Germany, Australia, New Zealand and Norway. Written in the form of a letter from an aspiring author to a publisher, "Paperback Writer" was the first UK Beatles single that was not a love song (though "Nowhere Man", which was a single in the U. <a href="http://www.last.fm/music/The+Beatles/_/Paperback+Writer">Read more on Last.fm</a>.',
                    'song_id' => 47,
                    'created_at' => '2018-04-28 12:18:46',
                    'updated_at' => '2018-04-28 12:18:46',
                ),
                30 => 
                array (
                    'name' => 'summary',
                    'value' => '"Taxman" is a song written by George Harrison and released as the opening track on the Beatles\' 1966 album Revolver. Its lyrics attack the high levels of progressive tax taken by the British Labour government of Harold Wilson. 

Paul\'s guitar solo utilises what Pollack describes as "fast triplets, exotic modal touches, and a melodic shape which traverses several octaves and ends with a breathtaking upward flourish". Everett considers that McCartney\'s solo is in the same Dorian mode adapted by Harrison in Love You To. <a href="http://www.last.fm/music/The+Beatles/_/Taxman">Read more on Last.fm</a>.',
                    'song_id' => 49,
                    'created_at' => '2018-04-28 12:18:49',
                    'updated_at' => '2018-04-28 12:18:49',
                ),
                31 => 
                array (
                    'name' => 'summary',
                    'value' => '"Twist and Shout" is a song written by Phil Medley and Bert Russell. It was originally recorded by the Topnotes and then The Isley Brothers. It was covered by The Beatles, with John Lennon on the lead vocals, and originally released on their first album Please Please Me.
The recording session for that album was their first album session, and is notable for eleven songs having been recorded in a mere 10 hours (the remaining four songs had previously been released as singles and one song was not released). <a href="http://www.last.fm/music/The+Beatles/_/Twist+and+Shout">Read more on Last.fm</a>.',
                    'song_id' => 51,
                    'created_at' => '2018-04-28 12:18:52',
                    'updated_at' => '2018-04-28 12:18:52',
                ),
                32 => 
                array (
                    'name' => 'summary',
                    'value' => '"Yesterday" is a pop song originally recorded by The Beatles for their 1965 album Help!. 
According to the Guinness Book of Records, "Yesterday" has the most cover versions of any song ever written. The song remains popular today with more than 3,000 recorded cover versions, the first hitting the United Kingdom top 10 three months after the release of Help!. Broadcast Music Incorporated (BMI) asserts that it was performed over seven million times in the 20th century alone.  <a href="http://www.last.fm/music/The+Beatles/_/Yesterday">Read more on Last.fm</a>.',
                    'song_id' => 52,
                    'created_at' => '2018-04-28 12:18:53',
                    'updated_at' => '2018-04-28 12:18:53',
                ),
                33 => 
                array (
                    'name' => 'summary',
                'value' => '"Iron Man" is a song by British heavy metal band Black Sabbath from their second studio album Paranoid released in 1970. It was later included on their initial greatest hits compilation We Sold Our Soul for Rock \'n\' Roll (1976), as well as all subsequent greatest hits compilations. Many musical acts have recorded cover versions of the song, and the song is frequently used and referenced during sporting events and in television shows and films.

The title of the song was conceived by Ozzy Osbourne. <a href="http://www.last.fm/music/Black+Sabbath/_/Iron+Man">Read more on Last.fm</a>.',
                    'song_id' => 54,
                    'created_at' => '2018-04-28 12:18:56',
                    'updated_at' => '2018-04-28 12:18:56',
                ),
                34 => 
                array (
                    'name' => 'summary',
                    'value' => 'Paranoid is a song by Black Sabbath that appears on the band\'s second album Paranoid. Supposedly, the members of Black Sabbath put together this song in 15 minutes based on a solo by Tony Iommi. This song was only meant to be a "filler", but became one of Black Sabbath\'s most well known songs: the band members were sent back to the studio to record one more song because the record company deemed the album was too short, and planned to quickly record a filler song, but eventually wrote and recorded "Paranoid". <a href="http://www.last.fm/music/Black+Sabbath/_/Paranoid">Read more on Last.fm</a>.',
                    'song_id' => 55,
                    'created_at' => '2018-04-28 12:18:58',
                    'updated_at' => '2018-04-28 12:18:58',
                ),
                35 => 
                array (
                    'name' => 'summary',
                    'value' => '"Atomic" was the third single from the 1979 album Eat to the Beat by Blondie. It was written by Debbie Harry and Jimmy Destri and the track was produced by Mike Chapman.

The song was produced as a mixture of new wave and disco which had proved to be so successful in their #1 hit from earlier in 1979, Heart of Glass. The guitar riff is directly influenced by the one in the Neil Diamond song Girl, You\'ll Be a Woman Soon.

The 1980 single version of "Atomic" was in fact a remix. <a href="http://www.last.fm/music/Blondie/_/Atomic">Read more on Last.fm</a>.',
                    'song_id' => 56,
                    'created_at' => '2018-04-28 12:18:59',
                    'updated_at' => '2018-04-28 12:18:59',
                ),
                36 => 
                array (
                    'name' => 'summary',
                    'value' => '"Heart of Glass" is a song by American New Wave band Blondie. Featured on the band\'s third studio album, Parallel Lines, it was released as a single in 1979 and topped the charts in several countries, most notably in the United Kingdom and United States.

Rolling Stone ranked the song number 255 on its list of the 500 greatest songs of all time.


History

"Heart of Glass" was originally recorded in 1975 under the name "Once I Had a Love," and was much slower with a blues/reggae vibe to it. <a href="http://www.last.fm/music/Blondie/_/Heart+of+Glass">Read more on Last.fm</a>.',
                    'song_id' => 58,
                    'created_at' => '2018-04-28 12:19:02',
                    'updated_at' => '2018-04-28 12:19:02',
                ),
                37 => 
                array (
                    'name' => 'summary',
                    'value' => '"Maria" is a song by the American band Blondie, taken from their 1999 album No Exit. This song was Blondie\'s comeback single, their first since "War Child" in July 1982. The song peaked at number eighty two on the Billboard Hot 100. Internationally, the song topped the charts in the United Kingdom, becoming the band\'s sixth chart-topping song in that country. It also peaked within the top ten of the charts in Austria, Belgium, Germany, the Republic of Ireland, Sweden and Switzerland. <a href="http://www.last.fm/music/Blondie/_/Maria">Read more on Last.fm</a>.',
                    'song_id' => 59,
                    'created_at' => '2018-04-28 12:19:04',
                    'updated_at' => '2018-04-28 12:19:04',
                ),
                38 => 
                array (
                    'name' => 'summary',
                'value' => '(Don\'t Fear) The Reaper was rumored to be about suicide; however lead guitarist Donald Roeser was actually writing about how powerful love can be and the feeling that it can live on through the death one of the partners (in this case, the woman in a heterosexual relationship). <a href="http://www.last.fm/music/Blue+%C3%96yster+Cult/_/(Don%27t+Fear)+The+Reaper">Read more on Last.fm</a>.',
                    'song_id' => 61,
                    'created_at' => '2018-04-28 12:19:06',
                    'updated_at' => '2018-04-28 12:19:06',
                ),
                39 => 
                array (
                    'name' => 'summary',
                    'value' => '"Parklife" is the title track from Blur\'s 1994 album Parklife. When released as the album\'s third single, "Parklife" reached #10 in the UK singles chart. The song has spoken verses, narrated by actor Phil Daniels, who also appears in the song\'s music video. <a href="http://www.last.fm/music/Blur/_/Parklife">Read more on Last.fm</a>.',
                    'song_id' => 64,
                    'created_at' => '2018-04-28 12:19:11',
                    'updated_at' => '2018-04-28 12:19:11',
                ),
                40 => 
                array (
                    'name' => 'summary',
                    'value' => '"Song 2" is a song by English alternative rock band Blur, the second track from their 1997 self-titled fifth studio album. The riff-based track, known for its overdriven chorus, is among the best-known songs the band has recorded, and easily their best known in North America. The hook features Damon Albarn yelling "woo-hoo!" as the guitars come crashing in. Released in April 1997, "Song 2" reached number two in the UK Singles Chart, number four on the Australian ARIA Charts, and number six on on US Billboard Modern Rock Tracks Chart. <a href="http://www.last.fm/music/Blur/_/Song+2">Read more on Last.fm</a>.',
                    'song_id' => 65,
                    'created_at' => '2018-04-28 12:19:13',
                    'updated_at' => '2018-04-28 12:19:13',
                ),
                41 => 
                array (
                    'name' => 'summary',
                    'value' => 'According to the Tender Songfacts, this song is about Damon Albarn’s break-up with his girlfriend, Elastica frontwoman Justine Frischmann. <a href="http://www.last.fm/music/Blur/_/Tender">Read more on Last.fm</a>.',
                    'song_id' => 66,
                    'created_at' => '2018-04-28 12:19:14',
                    'updated_at' => '2018-04-28 12:19:14',
                ),
                42 => 
                array (
                    'name' => 'summary',
                    'value' => 'Originally written for the soundtrack of the movie Pat Garrett and Billy the Kid in which Bob Dylan acted. <a href="http://www.last.fm/music/Bob+Dylan/_/Knockin%27+on+Heaven%27s+Door">Read more on Last.fm</a>.',
                    'song_id' => 69,
                    'created_at' => '2018-04-28 12:19:18',
                    'updated_at' => '2018-04-28 12:19:18',
                ),
                43 => 
                array (
                    'name' => 'summary',
                    'value' => '"Lay Lady Lay" is a song written by Bob Dylan and originally released in 1969 on his Nashville Skyline album. The words of the song are sung by Dylan in a low, soft-sounding voice instead of his familiar high-pitched nasal-sounding voice. Dylan credited his "new" voice to quitting smoking before recording the song, but some unreleased bootleg tapes from the early \'60s reveal that this was an aspect of his vocal persona that he had actually possessed since at least that time. <a href="http://www.last.fm/music/Bob+Dylan/_/Lay+Lady+Lay">Read more on Last.fm</a>.',
                    'song_id' => 70,
                    'created_at' => '2018-04-28 12:19:20',
                    'updated_at' => '2018-04-28 12:19:20',
                ),
                44 => 
                array (
                    'name' => 'summary',
                    'value' => 'In 2004, Rolling Stone magazine declared "Like a Rolling Stone" the greatest song of all time.
Spearheading Bob Dylan\'s  Highway 61 Revisited  (1965), Like A Rolling Stone  tells a surrealistic fairytale of a girl falling from high society. Notable not only because of the new rock sound, but also because of its length (clocking in at just over 6 minutes, it was an extremely long track for the time), it became Dylan\'s biggest hit up till then, reaching #2 in the UK Pop Singles Charts. <a href="http://www.last.fm/music/Bob+Dylan/_/Like+a+Rolling+Stone">Read more on Last.fm</a>.',
                    'song_id' => 71,
                    'created_at' => '2018-04-28 12:19:21',
                    'updated_at' => '2018-04-28 12:19:21',
                ),
                45 => 
                array (
                    'name' => 'summary',
                    'value' => '"Mr. Tambourine Man" is a song written and performed by Bob Dylan and featured on his 1965 album Bringing It All Back Home, produced by Tom Wilson. After Dylan wrote it, he produced a demo in December 1964, which The Byrds\' version is based on. Dylan\'s recording of the song is placed at #106 on Rolling Stone\'s list of the 500 Greatest Songs of All Time.[1] Due to The Byrds\' version of the song also making the list at #79, it is one of three songs to place twice <a href="http://www.last.fm/music/Bob+Dylan/_/Mr.+Tambourine+Man">Read more on Last.fm</a>.',
                    'song_id' => 72,
                    'created_at' => '2018-04-28 12:19:23',
                    'updated_at' => '2018-04-28 12:19:23',
                ),
                46 => 
                array (
                    'name' => 'summary',
                    'value' => '"The Times They Are a-Changin" is a song written by Bob Dylan and released on his 1964 album of the same name.
Dylan appears to have written the song in September and October 1963. He offered it as a Witmark music publishing demo in that month—a version that was finally released on The Bootleg Series Volumes 1–3 (Rare & Unreleased) 1961–1991. The song was then recorded in the Columbia studios in New York on the 23rd and 24th October, and the latter yielded the version that became the title song of Dylan\'s third album. <a href="http://www.last.fm/music/Bob+Dylan/_/The+Times+They+Are+a-Changin%27">Read more on Last.fm</a>.',
                    'song_id' => 73,
                    'created_at' => '2018-04-28 12:19:24',
                    'updated_at' => '2018-04-28 12:19:24',
                ),
                47 => 
                array (
                    'name' => 'summary',
                    'value' => ' <a href="http://www.last.fm/music/Bob+Marley/_/Buffalo+Soldier">Read more on Last.fm</a>.',
                    'song_id' => 74,
                    'created_at' => '2018-04-28 12:19:26',
                    'updated_at' => '2018-04-28 12:19:26',
                ),
                48 => 
                array (
                    'name' => 'summary',
                    'value' => '    *  Composed by: Bob Marley
* Lyrics by: Bob Marley
* Year: 1977
* Length: 7:40
* Musical key: A minor (live rarely also B minor)
* Recorded at: Island\'s Basing Street Studios and the Fallout Shelter, London, England
* Mixed at: Sterling Sound (USA) by Aston Barrett, Chris Blackwell and Karl Pitterson
* Released on following albums: Exodus (1977), Babylon By Bus (live, 1978)
* Released on following compilations: Legend (1984; Deluxe Edition 2002), Gold (2005) <a href="http://www.last.fm/music/Bob+Marley/_/Exodus">Read more on Last.fm</a>.',
                    'song_id' => 75,
                    'created_at' => '2018-04-28 12:19:27',
                    'updated_at' => '2018-04-28 12:19:27',
                ),
                49 => 
                array (
                    'name' => 'summary',
                    'value' => 'I Shot the Sheriff" is a song written by Bob Marley. The song was first released on The Wailers\' album Burnin\'.

Eric Clapton recorded a cover version that was included on his album, 461 Ocean Boulevard. It is the most successful version of the song, peaking at #1 on the Billboard Hot 100.

During the controversy over the Body Count song "Cop Killer", it was frequently pointed out that there were no similar complaints about Marley\'s song even though they had similar themes. <a href="http://www.last.fm/music/Bob+Marley/_/I+Shot+The+Sheriff">Read more on Last.fm</a>.',
                    'song_id' => 76,
                    'created_at' => '2018-04-28 12:19:29',
                    'updated_at' => '2018-04-28 12:19:29',
                ),
                50 => 
                array (
                    'name' => 'summary',
                    'value' => '"Daddy Cool" is a song recorded by Boney M. and included on their debut album Take The Heat Off Me. It was a 1976 hit and a staple in disco music and Boney M.\'s first UK hit. It was the second Boney M. single, released in May 1976 without making any major impact at first. It wasn\'t until a spectacular performance on the Musikladen TV show in September that the single became a hit, topping most European charts. It reached number six in the UK charts and number 65 in the United States Billboard Hot 100. <a href="http://www.last.fm/music/Boney+M./_/Daddy+Cool">Read more on Last.fm</a>.',
                    'song_id' => 80,
                    'created_at' => '2018-04-28 12:19:35',
                    'updated_at' => '2018-04-28 12:19:35',
                ),
                51 => 
                array (
                    'name' => 'summary',
                    'value' => 'Born to Run is the signature song of the American singer songwriter Bruce Springsteen, and the title song of his album Born to Run. Written in a small house in Long Branch, New Jersey in early 1974, the song was Bruce Springsteen\'s last-ditch effort to make it big. The prior year, Springsteen had released two albums to critical acclaim but with little commercial success. The lyrics to the song are appropriately epic for his last-ditch, all-or-nothing shot at the stars <a href="http://www.last.fm/music/Bruce+Springsteen/_/Born+to+Run">Read more on Last.fm</a>.',
                    'song_id' => 82,
                    'created_at' => '2018-04-28 12:19:38',
                    'updated_at' => '2018-04-28 12:19:38',
                ),
                52 => 
                array (
                    'name' => 'summary',
                    'value' => '"The River" became a centerpiece of shows on some Springsteen tours. On the \'Born in the U.S.A.\' tour, it was often preceded by a long, intense story from Springsteen about his battles with his father growing up, that would sometimes conclude in a good ending and sometimes not; the silence after the story would then be interrupted by the start of the harmonica part. <a href="http://www.last.fm/music/Bruce+Springsteen/_/The+River">Read more on Last.fm</a>.',
                    'song_id' => 83,
                    'created_at' => '2018-04-28 12:19:39',
                    'updated_at' => '2018-04-28 12:19:39',
                ),
                53 => 
                array (
                    'name' => 'summary',
                    'value' => '"Thunder Road" is a song written and performed by Bruce Springsteen, and the opening track on his 1975 breakthrough album Born to Run. It is ranked as one of Springsteen\'s greatest songs, and often appears on lists of the top rock songs of all time.

The lyrics to "Thunder Road" describe a young woman named Mary, her boyfriend, their hopeless lives and their "one last chance to make it real." Thematically, it reads as a nostalgic companion piece to "Born to Run". <a href="http://www.last.fm/music/Bruce+Springsteen/_/Thunder+Road">Read more on Last.fm</a>.',
                    'song_id' => 84,
                    'created_at' => '2018-04-28 12:19:41',
                    'updated_at' => '2018-04-28 12:19:41',
                ),
                54 => 
                array (
                    'name' => 'summary',
                    'value' => '"Nobody Does It Better", performed by Carly Simon and composed by Marvin Hamlisch
and Carole Bayer Sager, is the theme song to the 1977 James Bond film The Spy Who Loved Me. <a href="http://www.last.fm/music/Carly+Simon/_/Nobody+Does+It+Better">Read more on Last.fm</a>.',
                    'song_id' => 85,
                    'created_at' => '2018-04-28 12:19:42',
                    'updated_at' => '2018-04-28 12:19:42',
                ),
                55 => 
                array (
                    'name' => 'summary',
                    'value' => 'According to the You\'re So Vain Songfacts, Simon has never said who this song is about. Some of the rumors are Warren Beatty, Kris Kristofferson , Cat Stevens and Mick Jagger.  <a href="http://www.last.fm/music/Carly+Simon/_/You%27re+So+Vain">Read more on Last.fm</a>.',
                    'song_id' => 86,
                    'created_at' => '2018-04-28 12:19:44',
                    'updated_at' => '2018-04-28 12:19:44',
                ),
                56 => 
                array (
                    'name' => 'summary',
                'value' => '"(They Long to Be) Close to You" is a popular song written by Burt Bacharach & Hal David. It was first recorded by Richard Chamberlain and released as a single in 1963 as "They Long to Be Close to You," without parentheses. However, it was the single\'s flip side, "Blue Guitar," that became a hit. Although Richard Chamberlain recorded the first version, the tune was also recorded as a demo by Dionne Warwick in 1963 and re-recorded with a Burt Bacharach arrangement for her 1964 album Make Way for Dionne Warwick <a href="http://www.last.fm/music/Carpenters/_/(They+Long+to+Be)+Close+to+You">Read more on Last.fm</a>.',
                    'song_id' => 87,
                    'created_at' => '2018-04-28 12:19:45',
                    'updated_at' => '2018-04-28 12:19:45',
                ),
                57 => 
                array (
                    'name' => 'summary',
                    'value' => '"Yesterday Once More", written by Richard Carpenter and John Bettis, was a hit song by The Carpenters from their 1973 album Now & Then. Composed in the key of E, "Yesterday Once More" preceded an "Oldies Medley" on the album, consisting of nine songs from the 1960s. At the end of the song a motorcycle engine was heard to transition into the first song of the medley: "Fun, Fun, Fun". The motorcycle was mixed out on The Singles: 1969-1973 compilation. However, very few copies of that particular version are on CD. <a href="http://www.last.fm/music/Carpenters/_/Yesterday+Once+More">Read more on Last.fm</a>.',
                    'song_id' => 88,
                    'created_at' => '2018-04-28 12:19:47',
                    'updated_at' => '2018-04-28 12:19:47',
                ),
                58 => 
                array (
                    'name' => 'summary',
                    'value' => 'This song describes a natural generational conflict between the anticipation of the future and the knowledge of the past.  It describes a place we have been or are experiencing in our lives. <a href="http://www.last.fm/music/Cat+Stevens/_/Father+And+Son">Read more on Last.fm</a>.',
                    'song_id' => 89,
                    'created_at' => '2018-04-28 12:19:48',
                    'updated_at' => '2018-04-28 12:19:48',
                ),
                59 => 
                array (
                    'name' => 'summary',
                    'value' => 'Released in 1990, this single is regarded as a classic example of the Madchester output which was a prelude to the Britpop movement some 4 years later. Embodying a swagger and arrogance that was to signify the British pop scene for the last decade of the 20th century, The Charlatans reached no. 9 in the UK singles chart with this track. <a href="http://www.last.fm/music/The+Charlatans/_/The+Only+One+I+Know">Read more on Last.fm</a>.',
                    'song_id' => 90,
                    'created_at' => '2018-04-28 12:19:50',
                    'updated_at' => '2018-04-28 12:19:50',
                ),
                60 => 
                array (
                    'name' => 'summary',
                    'value' => '"Good Times" is a 1979 song composed by Bernard Edwards and Nile Rodgers. It was first recorded by their band, Chic, for their 1979 album, Risqué. In August of that year it became the band\'s second number one single on both the Billboard Hot 100 and soul singles chart. Along with the tracks, "My Forbidden Lover", and "My Feet Keep Dancing", "Good Times" reached number three on the disco charts. The song has become one of the most sampled tunes in music history, most notably in hip hop music. <a href="http://www.last.fm/music/Chic/_/Good+Times">Read more on Last.fm</a>.',
                    'song_id' => 91,
                    'created_at' => '2018-04-28 12:19:51',
                    'updated_at' => '2018-04-28 12:19:51',
                ),
                61 => 
                array (
                    'name' => 'summary',
                    'value' => '"Le Freak" is a 1978 hit disco song by Chic. It was the band\'s third single and first Billboard Hot 100 number-one song. According to the Le Freak Songfacts Bernard Edwards and Nile Rodgers  wrote this after they were not allowed to enter New York City\'s Studio 54 nightclub on New Year\'s Eve, 1977.

A New York Times critic describes the song as a "haunting, minimalist pop-funk built around the guitar and bass". "Le Freak" bears the distinction of being the highest selling record ever on Atlantic Records <a href="http://www.last.fm/music/Chic/_/Le+Freak">Read more on Last.fm</a>.',
                    'song_id' => 92,
                    'created_at' => '2018-04-28 12:19:53',
                    'updated_at' => '2018-04-28 12:19:53',
                ),
                62 => 
                array (
                    'name' => 'summary',
                    'value' => 'Johnny B. Goode is a seminal 1958 rock and roll song by Chuck Berry, ranked by Rolling Stone as the seventh greatest song ever on their list of the 500 Greatest Songs of All Time, and the best guitar song on their list of the 100 greatest guitar songs of all time.

Written by Berry in 1955, the song is a rock and roll version of the American dream — a poor country boy becomes a star by hard work and inspired guitar playing. This image of unknowns <a href="http://www.last.fm/music/Chuck+Berry/_/Johnny+B.+Goode">Read more on Last.fm</a>.',
                    'song_id' => 93,
                    'created_at' => '2018-04-28 12:19:54',
                    'updated_at' => '2018-04-28 12:19:54',
                ),
                63 => 
                array (
                    'name' => 'summary',
                    'value' => 'Fix You is the fourth track on Coldplay\'s third album, X&Y. The song was written by all four members of the band, and was released as the second single from X&Y.

Reportedly, Chris Martin wrote the song for Gwyneth Paltrow after her father\'s death. The organ played in the song is said to have been a gift Bruce Paltrow gave to his daughter Gwyneth some years before his death.

Rolling Stone, in their review for X&Y said of Fix You that "one of the best [songs on X&Y] is \'Fix You\' <a href="http://www.last.fm/music/Coldplay/_/Fix+You">Read more on Last.fm</a>.',
                    'song_id' => 94,
                    'created_at' => '2018-04-28 12:19:56',
                    'updated_at' => '2018-04-28 12:19:56',
                ),
                64 => 
                array (
                    'name' => 'summary',
                    'value' => 'Chris Martin wrote "The Scientist" after listening to George Harrison\'s "All Things Must Pass". In an interview with Rolling Stone, Martin revealed that while working on the band\'s second album, A Rush of Blood to the Head, he knew that the album was missing something. One night, during a stay in Liverpool, Martin found an old piano that was out of tune. He wanted to work on George Harrison\'s song "Isn\'t It a Pity", but he could not manage to do so. <a href="http://www.last.fm/music/Coldplay/_/The+Scientist">Read more on Last.fm</a>.',
                    'song_id' => 95,
                    'created_at' => '2018-04-28 12:19:57',
                    'updated_at' => '2018-04-28 12:19:57',
                ),
                65 => 
                array (
                    'name' => 'summary',
                    'value' => '"Yellow" is a song by English alternative rock band Coldplay. The band wrote the song and co-produced it with British record producer Ken Nelson for their debut album, Parachutes. The song\'s lyrics are a reference to band vocalist Chris Martin\'s unrequited love, and its musicscape is built on a varied instrumentation.

The song was released in June 2000 as the second single off the album, following "Shiver", and the lead single in the United States. <a href="http://www.last.fm/music/Coldplay/_/Yellow">Read more on Last.fm</a>.',
                    'song_id' => 96,
                    'created_at' => '2018-04-28 12:19:59',
                    'updated_at' => '2018-04-28 12:19:59',
                ),
                66 => 
                array (
                    'name' => 'summary',
                'value' => 'Written as a response to the Warrington Bombing, when the Provisional IRA murdered two young children in 1993, "Zombie" is one of the band\'s biggest singles, reaching #3 in their native Ireland, and having a total chart run of 11 weeks. The song reached #14 in the UK (with a total chart run of six weeks), and topped the U.S. Modern Rock chart for six weeks, it also appeared on the French Top 50 for nine weeks (with 19 weeks in the Top 10) and the German Top 100 for one week (with a total chart run of 27 weeks) <a href="http://www.last.fm/music/The+Cranberries/_/Zombie">Read more on Last.fm</a>.',
                    'song_id' => 97,
                    'created_at' => '2018-04-28 12:20:00',
                    'updated_at' => '2018-04-28 12:20:00',
                ),
                67 => 
                array (
                    'name' => 'summary',
                    'value' => 'Bad Moon Rising was released in 1969 by Creedence Clearwater Revival. The track was written by John Fogerty and was the lead single from their album Green River .The track reached #2 on the Billboard hot 100 singles chart and #1 on the UK singles chart for three weeks in September 1969.
The live version can be heard here Bad Moon Rising (Live 1970) <a href="http://www.last.fm/music/Creedence+Clearwater+Revival/_/Bad+Moon+Rising">Read more on Last.fm</a>.',
                    'song_id' => 98,
                    'created_at' => '2018-04-28 12:20:02',
                    'updated_at' => '2018-04-28 12:20:02',
                ),
                68 => 
                array (
                    'name' => 'summary',
                    'value' => '"Fortunate Son" was released as a single in late 1969. Songwriter John Fogerty intended the song as a protest against the Vietnam War. The song is critical of the fortunate sons of those in high places e.g. the political elite and/or the wealthy who are able to avoid the horrors of war for themselves or their relatives by benefiting from their privileged backgrounds.

Fogerty says that the song was indirectly inspired by David Eisenhower, the grandson of President Dwight David Eisenhower who married Julie Nixon <a href="http://www.last.fm/music/Creedence+Clearwater+Revival/_/Fortunate+Son">Read more on Last.fm</a>.',
                    'song_id' => 99,
                    'created_at' => '2018-04-28 12:20:03',
                    'updated_at' => '2018-04-28 12:20:03',
                ),
                69 => 
                array (
                    'name' => 'summary',
                    'value' => 'Green River is a track that was written by John Fogerty and recorded by Creedence Clearwater Revival. It is the title track of their #1 album Green River. The track was released as a single and reached #2 on the Billboard Charts. The B-side of the single, Commotion, reached #30 when released separately.
The live version can be heard here Green River (Live 1970) <a href="http://www.last.fm/music/Creedence+Clearwater+Revival/_/Green+River">Read more on Last.fm</a>.',
                    'song_id' => 100,
                    'created_at' => '2018-04-28 12:20:05',
                    'updated_at' => '2018-04-28 12:20:05',
                ),
                70 => 
                array (
                    'name' => 'summary',
                    'value' => '"She Sells Sanctuary" is a song by the English rock band The Cult. It is from their 1985 album Love and was released as a single in May of that year, peaking at no.15 in the UK Singles Chart.

The band has released various versions of the song. Aside from the original 7" single, three other versions had been released around the same time on 12" formats: "The Long Version", "The Howling Mix", and "Assault on Sanctuary".

In 1993, several more mixes were released on two different CD singles, each called Sanctuary MCMXCIII (Volumes 1 & 2). <a href="http://www.last.fm/music/The+Cult/_/She+Sells+Sanctuary">Read more on Last.fm</a>.',
                    'song_id' => 102,
                    'created_at' => '2018-04-28 12:20:08',
                    'updated_at' => '2018-04-28 12:20:08',
                ),
                71 => 
                array (
                    'name' => 'summary',
                    'value' => '"Close to Me" is a 1985 single by The Cure from their album The Head on the Door. The song was used as the theme music for the BBC sitcom The Smoking Room, for the BBC food programme A Taste of My Life presented by Nigel Slater and plays over the closing credits for the 2007 film Son of Rambow. On its original release, the single was most successful in Ireland, peaking at #4, also reaching #7 in Australia. It was remixed in 1990, which itself was released as a single, peaking at #13 on the UK singles chart. <a href="http://www.last.fm/music/The+Cure/_/Close+to+Me">Read more on Last.fm</a>.',
                    'song_id' => 103,
                    'created_at' => '2018-04-28 12:20:09',
                    'updated_at' => '2018-04-28 12:20:09',
                ),
                72 => 
                array (
                    'name' => 'summary',
                'value' => '"Friday I\'m in Love" written and performed by The Cure is the second single taken from the album Wish (1992). It is among the band\'s most well-known songs.

Writing

"Friday I\'m in Love" was nominated for a Grammy Award and won the award for European Viewer\'s Choice for Best Music Video at the 1992 MTV Video Music Awards. The song was written to be a slower number than its upbeat final rendition. While the track was recorded in D major, the commercially released version sounds halfway between D major and E-flat major <a href="http://www.last.fm/music/The+Cure/_/Friday+I%27m+in+Love">Read more on Last.fm</a>.',
                    'song_id' => 104,
                    'created_at' => '2018-04-28 12:20:11',
                    'updated_at' => '2018-04-28 12:20:11',
                ),
                73 => 
                array (
                    'name' => 'summary',
                    'value' => '"Just Like Heaven" is a song by the British alternative rock band The Cure. The group largely wrote the song during recording sessions in Southern France in 1987. The lyrics were written by the band\'s frontman Robert Smith, who drew inspiration from a past trip to the sea shore with his future wife. Before Smith had completed the lyrics an instrumental version of the song was used as the theme for the French television show Les Enfants du Rock.

"Just Like Heaven" was the third single released from the band\'s 1987 album Kiss Me <a href="http://www.last.fm/music/The+Cure/_/Just+Like+Heaven">Read more on Last.fm</a>.',
                    'song_id' => 105,
                    'created_at' => '2018-04-28 12:20:12',
                    'updated_at' => '2018-04-28 12:20:12',
                ),
                74 => 
                array (
                    'name' => 'summary',
                    'value' => 'According to the Lovesong Songfacts, Cure lead singer Robert Smith originally wrote this as a wedding present for his fiancée, Mary, shortly before their marriage. The lyrics were inspired by the constant touring Smith had to go through with The Cure. He wanted his wife to know that no matter how much he had to travel and perform, he would always love her. 
<a href="http://www.last.fm/music/The+Cure/_/Lovesong">Read more on Last.fm</a>.',
                    'song_id' => 106,
                    'created_at' => '2018-04-28 12:20:14',
                    'updated_at' => '2018-04-28 12:20:14',
                ),
                75 => 
                array (
                    'name' => 'summary',
                    'value' => 'Lullaby" is a 1989 single by The Cure from their album Disintegration. The song is the most successful single by the band, reaching number five in their home country of the UK, and the music video won the 1990 Best British Video at the 1990 Brit Awards.



Background

The meaning of "Lullaby" has been speculated by fans, including as a metaphor for addiction or for depression, and Smith has offered multiple, different explanations as to its theme or content. <a href="http://www.last.fm/music/The+Cure/_/Lullaby">Read more on Last.fm</a>.',
                    'song_id' => 107,
                    'created_at' => '2018-04-28 12:20:16',
                    'updated_at' => '2018-04-28 12:20:16',
                ),
                76 => 
                array (
                    'name' => 'summary',
                'value' => '“Pharrell Williams sings on this tune, it was only natural to invite him on the album. It’s a born entertainer, complete, who transpires elegance. He didn’t always have the chance to show off his singing skills, and boy he can sing. We wanted to give the impression of being trapped in a glass bubble, completely isolated from the outside world. We could of been in 1978, but the idea was to get the music to travel the present time and also the future. <a href="http://www.last.fm/music/Daft+Punk/_/Get+Lucky+(feat.+Pharrell+Williams)">Read more on Last.fm</a>.',
                    'song_id' => 108,
                    'created_at' => '2018-04-28 12:20:17',
                    'updated_at' => '2018-04-28 12:20:17',
                ),
                77 => 
                array (
                    'name' => 'summary',
                'value' => '"Heroes" is a song written by David Bowie and Brian Eno in 1977. Produced by Bowie and Tony Visconti, it was released both as a single and as the title track of the album "Heroes". A product of Bowie\'s fertile \'Berlin\' period, life in the city was crystallized into a tale of two lovers who come together in the shadow of the \'Wall of Shame\' (though here "the shame was on the other side"). David Bowie was inspired by seeing his producer Tony Visconti <a href="http://www.last.fm/music/David+Bowie/_/%22Heroes%22">Read more on Last.fm</a>.',
                    'song_id' => 109,
                    'created_at' => '2018-04-28 12:20:18',
                    'updated_at' => '2018-04-28 12:20:18',
                ),
                78 => 
                array (
                    'name' => 'summary',
                    'value' => '"Life on Mars?" is a song by David Bowie first released in 1971 on the album Hunky Dory and also released as a single. The song—which BBC Radio 2 later called "a cross between a Broadway musical and a Salvador Dalí painting"—featured guest piano work by keyboardist Rick Wakeman. When released as a single in 1973, it reached #3 in the UK and stayed on the chart for thirteen weeks. The song re-entered the UK charts at #55 over 30 years later, largely because of its use in the original British television series Life on Mars.  <a href="http://www.last.fm/music/David+Bowie/_/Life+on+Mars%3F">Read more on Last.fm</a>.',
                    'song_id' => 110,
                    'created_at' => '2018-04-28 12:20:20',
                    'updated_at' => '2018-04-28 12:20:20',
                ),
                79 => 
                array (
                    'name' => 'summary',
                    'value' => '"Rebel Rebel" is a song by David Bowie, released in 1974 as a single and on the album Diamond Dogs. A different version was recorded for US single release, featuring a funkier backing and looped backing vocals. Cited as his most-covered track, it was effectively Bowie\'s farewell to the glam movement that had made him a star.

Music and lyrics

Originally written for a mooted Ziggy Stardust musical in late 1973, "Rebel Rebel" was Bowie\'s last single in the glam rock style that had been his trademark. <a href="http://www.last.fm/music/David+Bowie/_/Rebel+Rebel">Read more on Last.fm</a>.',
                    'song_id' => 111,
                    'created_at' => '2018-04-28 12:20:22',
                    'updated_at' => '2018-04-28 12:20:22',
                ),
                80 => 
                array (
                    'name' => 'summary',
                    'value' => '

“Starman” is David Bowie’s Christmas carol. It offers a promise of deliverance, that the human race has been redeemed by greater powers, with a chorus built for a crowd to sing it. It’s the song that finally broke Bowie, whose performance of it on a July 1972 Top of the Pops made him a nationwide, and soon worldwide, pop star. So while the Ziggy-era Bowie is remembered today for his outrageousness, the song that made his name is warm, reassuring and most of all familiar. <a href="http://www.last.fm/music/David+Bowie/_/Starman">Read more on Last.fm</a>.',
                    'song_id' => 112,
                    'created_at' => '2018-04-28 12:20:23',
                    'updated_at' => '2018-04-28 12:20:23',
                ),
                81 => 
                array (
                    'name' => 'summary',
                    'value' => '"Child in Time" is a rock song by British hard rock band Deep Purple. Featured on their 1970 album Deep Purple in Rock, the song is 10 minutes and 17 seconds long.

Written by the band in 1969, it is said by the band members themselves to have been inspired by a riff featured in a song by Purple contemporaries It\'s a Beautiful Day, called "Bombay Calling". The riff was played on violins and very much faster in tempo.

"Child in Time" is an essentially simple composition, featuring an organ intro, three power chords, and a two minute long solo. <a href="http://www.last.fm/music/Deep+Purple/_/Child+in+Time">Read more on Last.fm</a>.',
                    'song_id' => 113,
                    'created_at' => '2018-04-28 12:20:25',
                    'updated_at' => '2018-04-28 12:20:25',
                ),
                82 => 
                array (
                    'name' => 'summary',
                'value' => 'Highway Star is one of Deep Purple\'s most famous songs. It is characterized by a long classically-inspired guitar solo and organ solo. Organist Jon Lord claimed that the organ solo is based on a Bach-like sequence. The song appears on the album Machine Head and is the fastest song (tempo-wise) recorded on the album.

The structure of the song consists of a 35 second guitar introduction, before the band launches into the thumping opening riff, which soon leads into the first vocals section (0:55). <a href="http://www.last.fm/music/Deep+Purple/_/Highway+Star">Read more on Last.fm</a>.',
                    'song_id' => 114,
                    'created_at' => '2018-04-28 12:20:26',
                    'updated_at' => '2018-04-28 12:20:26',
                ),
                83 => 
                array (
                    'name' => 'summary',
                    'value' => 'Smoke on the Water is a song by the British hard rock band Deep Purple. It was first released on their 1972 album Machine Head.

This song is known for and recognizable by its central theme, a four-note "blues scale" melody harmonized in parallel fourths. The riff, played on a Fender Stratocaster electric guitar by Ritchie Blackmore, is later joined by hi-hat and distorted organ, then drums, then electric bass parts before the start of Ian Gillan\'s vocal. <a href="http://www.last.fm/music/Deep+Purple/_/Smoke+on+the+Water">Read more on Last.fm</a>.',
                    'song_id' => 115,
                    'created_at' => '2018-04-28 12:20:27',
                    'updated_at' => '2018-04-28 12:20:27',
                ),
                84 => 
                array (
                    'name' => 'summary',
                'value' => '"Whip It" was released in 1980 by the Synthpop band Devo. It appears on the album Freedom of Choice. There were two 7" single releases of "Whip It", one backed with a remix of the track "Snowball" (which appears on "Freedom of Choice") and one backed with "Turn Around". "Whip It" was Devo\'s biggest hit, and peaked at #14 on the Billboard Hot 100 chart and at #3 in Canada in 1980.

The lyrics were written by Jerry Casale as an imitation of Thomas Pynchon\'s parodies in his book Gravity\'s Rainbow <a href="http://www.last.fm/music/Devo/_/Whip+It">Read more on Last.fm</a>.',
                    'song_id' => 116,
                    'created_at' => '2018-04-28 12:20:29',
                    'updated_at' => '2018-04-28 12:20:29',
                ),
                85 => 
                array (
                    'name' => 'summary',
                'value' => 'Not Ready to Make Nice is a country pop song co-written and performed by the American all-female band Dixie Chicks for their seventh studio album Taking the Long Way (2006). The song was released as the first physical single from the album in March 2006.

On February 11, 2007, it won three Grammy Awards in the categories of Record of the Year, Song of the Year, and Best Country Performance by a Duo or Group with Vocal.

In 2009, Rolling Stone named "Not Ready to Make Nice" the 77th best song of the decade. <a href="http://www.last.fm/music/Dixie+Chicks/_/Not+Ready+To+Make+Nice">Read more on Last.fm</a>.',
                    'song_id' => 125,
                    'created_at' => '2018-04-28 12:20:45',
                    'updated_at' => '2018-04-28 12:20:45',
                ),
                86 => 
                array (
                    'name' => 'summary',
                    'value' => '"9 to 5" is a song written and originally performed by American country music singer Dolly Parton for the 1980 comedy film of the same name
The song garnered Parton an Academy Award nomination and four Grammy Award nominations, winning her the awards for "Best Country Song" and "Best Country Vocal Performance, Female". <a href="http://www.last.fm/music/Dolly+Parton/_/9+to+5">Read more on Last.fm</a>.',
                    'song_id' => 131,
                    'created_at' => '2018-04-28 12:20:54',
                    'updated_at' => '2018-04-28 12:20:54',
                ),
                87 => 
                array (
                    'name' => 'summary',
                    'value' => 'The story of "Jolene" as aired on National Public Radio in the US, October 2008: http://www.npr.org/templates/story/story.php?storyId=95520570 <a href="http://www.last.fm/music/Dolly+Parton/_/Jolene">Read more on Last.fm</a>.',
                    'song_id' => 132,
                    'created_at' => '2018-04-28 12:20:56',
                    'updated_at' => '2018-04-28 12:20:56',
                ),
                88 => 
                array (
                    'name' => 'summary',
                    'value' => 'According to the L.A. Woman Songfacts, Morrison recorded his vocals in the studio bathroom to get a fuller sound. He spent a lot of time in there anyway because of all the beer he drank during the sessions. <a href="http://www.last.fm/music/The+Doors/_/L.A.+Woman">Read more on Last.fm</a>.',
                    'song_id' => 134,
                    'created_at' => '2018-04-28 12:21:00',
                    'updated_at' => '2018-04-28 12:21:00',
                ),
                89 => 
                array (
                    'name' => 'summary',
                    'value' => '"Light My Fire" is a song originally performed by The Doors which was recorded in August 1966 and released in January 1967. It spent three weeks at number one on the Billboard\'s Hot 100, and one week on the Cashbox Top 100. It was re-released in 1968, peaking at number 87. The song was largely written by Robby Krieger, and credited to the entire band. 

According to the Light My Fire Songfacts, this was the last song Jim Morrison performed live. It was a show at The Warehouse in New Orleans. <a href="http://www.last.fm/music/The+Doors/_/Light+My+Fire">Read more on Last.fm</a>.',
                    'song_id' => 135,
                    'created_at' => '2018-04-28 12:21:01',
                    'updated_at' => '2018-04-28 12:21:01',
                ),
                90 => 
                array (
                    'name' => 'summary',
                    'value' => '"Love Her Madly" is a 1971 song by The Doors which appears on L.A. Woman, their final album with frontman Jim Morrison. The song was composed by the band\'s guitarist, Robby Krieger. Jerry Scheff plays the bass on this song. The song was released as a single in April 1971 and became one of The Doors\' biggest chart hits, peaking at number eleven on the Billboard Hot 100 singles chart.

In 2000, Krieger, John Densmore, and Ray Manzarek recorded a new version of "Love Her Madly" with Bo Diddley for the Doors tribute album Stoned Immaculate. <a href="http://www.last.fm/music/The+Doors/_/Love+Her+Madly">Read more on Last.fm</a>.',
                    'song_id' => 136,
                    'created_at' => '2018-04-28 12:21:03',
                    'updated_at' => '2018-04-28 12:21:03',
                ),
                91 => 
                array (
                    'name' => 'summary',
                    'value' => '"People Are Strange" is a single released by The Doors in September 1967. It also appears on their second album Strange Days which was also released in September 1967. The single peaked at the #12 position of the U.S. Hot 100 chart. It was written by Robby Krieger and Jim Morrison although credit was given to the The Doors evenly.

It was covered to moderate success in 1988 by Echo and the Bunnymen for The Lost Boys soundtrack. It was also covered in 2000 by Twiztid on the album Freek Show. <a href="http://www.last.fm/music/The+Doors/_/People+Are+Strange">Read more on Last.fm</a>.',
                    'song_id' => 138,
                    'created_at' => '2018-04-28 12:21:06',
                    'updated_at' => '2018-04-28 12:21:06',
                ),
                92 => 
                array (
                    'name' => 'summary',
                'value' => '"Riders on the Storm" is a song by The Doors from their 1971 album, L.A. Woman; it reached number 14 on the charts. According to band member Robby Krieger, it was inspired by the song, "(Ghost) Riders in the Sky: A Cowboy Legend". The song is played in the E Dorian mode, and incorporates real sound effects of thunder and rain, along with Ray Manzarek\'s Fender Rhodes electric piano playing, which emulates the sound of rain.

The song\'s lyrics allude in part to the notorious spree killer Billy Cook <a href="http://www.last.fm/music/The+Doors/_/Riders+on+the+Storm">Read more on Last.fm</a>.',
                    'song_id' => 139,
                    'created_at' => '2018-04-28 12:21:07',
                    'updated_at' => '2018-04-28 12:21:07',
                ),
                93 => 
                array (
                    'name' => 'summary',
                    'value' => '"Roadhouse Blues" is a blues-rock song written and recorded by the American rock band The Doors. The song, which appeared on the B-side of You Make Me Real, was first released as a single from the album Morrison Hotel in March 1970 and peaked at #50. The song quickly became a concert staple for the group, a live version appearing later on the posthumous album An American Prayer and that same version, which has been called "probably one of the best live performances of any song", again on In Concert and Greatest Hits. <a href="http://www.last.fm/music/The+Doors/_/Roadhouse+Blues">Read more on Last.fm</a>.',
                    'song_id' => 140,
                    'created_at' => '2018-04-28 12:21:08',
                    'updated_at' => '2018-04-28 12:21:08',
                ),
                94 => 
                array (
                    'name' => 'summary',
                'value' => '"Touch Me" is a song by The Doors from their album The Soft Parade. Written by Robby Krieger, the riff is influenced by The Four Seasons "C\'mon Marianne." It is notable for its extensive usage of brass and string instruments to accent Jim Morrison\'s vocals (including a powerful solo by featured saxophonist Curtis Amy), and was one of the most popular Doors songs. It was released as a single in December 1968. The song reached #3 on the Billboard Hot 100 and #1 in Cashbox Top 100 in early 1969.
<a href="http://www.last.fm/music/The+Doors/_/Touch+Me">Read more on Last.fm</a>.',
                    'song_id' => 142,
                    'created_at' => '2018-04-28 12:21:11',
                    'updated_at' => '2018-04-28 12:21:11',
                ),
                95 => 
                array (
                    'name' => 'summary',
                    'value' => '"When the Music\'s Over" is a song written and performed by American rock band The Doors, featured on their second 1967 album Strange Days. At almost eleven minutes long, the song is their third longest recorded work, behind "The End", at 11:42, and "Celebration of the Lizard", at 17:01. When the band originally recorded the song, Jim Morrison did not show up for the session, so the band recorded it with Ray Manzarek singing. Morrison recorded his vocals the next day. <a href="http://www.last.fm/music/The+Doors/_/When+the+Music%27s+Over">Read more on Last.fm</a>.',
                    'song_id' => 143,
                    'created_at' => '2018-04-28 12:21:13',
                    'updated_at' => '2018-04-28 12:21:13',
                ),
                96 => 
                array (
                    'name' => 'summary',
                    'value' => '"Boogie Wonderland" is a 1979 hit disco song for Earth, Wind & Fire with The Emotions, written by Allee Willis and Jon Lind, taken from the album I Am. Willis told Songfacts that Boogie Wonderland was inspired by the Diane Keaton movie  Looking For Mr. Goodbar. It is regarded as a classic of the disco era and peaked at #6 on the Billboard Hot 100, #2 on the Billboard Hot R&B/Hip-Hop Songs, and #4 on the UK Singles Chart. The song also won the 1980 Grammy Award for Best R&B Instrumental Performance. <a href="http://www.last.fm/music/Earth,+Wind+&+Fire/_/Boogie+Wonderland">Read more on Last.fm</a>.',
                    'song_id' => 146,
                    'created_at' => '2018-04-28 12:21:18',
                    'updated_at' => '2018-04-28 12:21:18',
                ),
                97 => 
                array (
                    'name' => 'summary',
                    'value' => 'This was written by Allee Willis together with Maurice White and Al McKay from Earth, Wind & Fire. Willis said in an interview with Songfacts that the the "21st night of September" in the opening lyrics of September, isn\'t a significant date, "it\'s just something that sang really well."  <a href="http://www.last.fm/music/Earth,+Wind+&+Fire/_/September">Read more on Last.fm</a>.',
                    'song_id' => 147,
                    'created_at' => '2018-04-28 12:21:19',
                    'updated_at' => '2018-04-28 12:21:19',
                ),
                98 => 
                array (
                    'name' => 'summary',
                    'value' => 'Winner of  the 1994 Academy Award for Best Original Song, and the Golden Globe Award for Best Original Song. Music by Elton John Lyrics by Tim Rice <a href="http://www.last.fm/music/Elton+John/_/Can+You+Feel+the+Love+Tonight">Read more on Last.fm</a>.',
                    'song_id' => 148,
                    'created_at' => '2018-04-28 12:21:21',
                    'updated_at' => '2018-04-28 12:21:21',
                ),
                99 => 
                array (
                    'name' => 'summary',
                    'value' => 'Elton John and Bernie wrote that song in the 70\'s named "Daniel". Daniel is about a Vietnam vet who was blinded in the war, and is commended for being a Hero, so is sent home. His younger brother is the one supposedly singing about his heroic brother. He is called a hero and his brother wants him to stay home, and has missed him,but Daniel does not consider himself a hero at all. He simply wants to be left alone, so takes off to Spain. It was sort of dedicated to all the crippled and damaged men in the Vietnam War. Very sad song. <a href="http://www.last.fm/music/Elton+John/_/Daniel">Read more on Last.fm</a>.',
                    'song_id' => 151,
                    'created_at' => '2018-04-28 12:21:26',
                    'updated_at' => '2018-04-28 12:21:26',
                ),
                100 => 
                array (
                    'name' => 'summary',
                'value' => '"Don\'t Go Breaking My Heart" is a duet by Elton John and Kiki Dee. It was written by Elton John without Bernie Taupin under the pseudonym "Ann Orson" and "Carte Blanche" (a pun on the expression "an horse and cart, blanche"), and intended as an affectionate pastiche of the Tamla Motown style, notably the various duets recorded by Marvin Gaye and singers such as Tammi Terrell and Kim Weston. It is not to be confused with the Burt Bacharach/Hal David song of the same title recorded in 1966 by Dionne Warwick. <a href="http://www.last.fm/music/Elton+John/_/Don%27t+Go+Breaking+My+Heart">Read more on Last.fm</a>.',
                    'song_id' => 152,
                    'created_at' => '2018-04-28 12:21:27',
                    'updated_at' => '2018-04-28 12:21:27',
                ),
                101 => 
                array (
                    'name' => 'summary',
                    'value' => 'This song is the first single from British musician Elton John\'s 1974 album Caribou; it was released that year during the latter half of May in the United Kingdom, and on June 10 in the United States. The song was written by John and his collaborator Bernie Taupin, and produced by Gus Dudgeon. It was written in the key of C major.

In the song, Elton sings to someone he has helped and from whom he is now experiencing rejection. It was written with the other songs on the album during a ten day period in January 1974. <a href="http://www.last.fm/music/Elton+John/_/Don%27t+Let+the+Sun+Go+Down+on+Me">Read more on Last.fm</a>.',
                    'song_id' => 153,
                    'created_at' => '2018-04-28 12:21:28',
                    'updated_at' => '2018-04-28 12:21:28',
                ),
                102 => 
                array (
                    'name' => 'summary',
                    'value' => '"Goodbye Yellow Brick Road" is a ballad performed by musician Elton John. The song was written by Bernie Taupin and composed by John for his album Goodbye Yellow Brick Road. Its musical style and production is heavily influenced by 1970s soft rock. It was widely praised by critics, and some critics have named it John\'s best song.

The song was released in 1973 as the album\'s second single, and entered the Top Ten in both the United Kingdom and the United States. <a href="http://www.last.fm/music/Elton+John/_/Goodbye+Yellow+Brick+Road">Read more on Last.fm</a>.',
                    'song_id' => 154,
                    'created_at' => '2018-04-28 12:21:30',
                    'updated_at' => '2018-04-28 12:21:30',
                ),
                103 => 
                array (
                    'name' => 'summary',
                    'value' => 'This was Elton and Bernie\'s first UK #1 or something like that. A major comeback, and a beautiful song. <a href="http://www.last.fm/music/Elton+John/_/Sacrifice">Read more on Last.fm</a>.',
                    'song_id' => 157,
                    'created_at' => '2018-04-28 12:21:34',
                    'updated_at' => '2018-04-28 12:21:34',
                ),
                104 => 
                array (
                    'name' => 'summary',
                    'value' => '"Someone Saved My Life Tonight" is an Elton John song from his album Captain Fantastic and the Brown Dirt Cowboy. It concludes side one in the album\'s telling of the history of John\'s and lyricist Bernie Taupin\'s struggles to find careers within the music industry. When released as the album\'s only single in 1975, it reached #4 on the Billboard Hot 100 and entered the top 25 on the UK Singles Chart.

Taupin\'s lyric refers to a time in 1969, before John was a popular musician, when John was considering marriage to his girlfriend, Linda Woodrow. <a href="http://www.last.fm/music/Elton+John/_/Someone+Saved+My+Life+Tonight">Read more on Last.fm</a>.',
                    'song_id' => 159,
                    'created_at' => '2018-04-28 12:21:38',
                    'updated_at' => '2018-04-28 12:21:38',
                ),
                105 => 
                array (
                    'name' => 'summary',
                    'value' => 'Album: Madman Across The Water
Released: 1971
US Chart: 41
According to the Tiny Dancer Songfacts , the, "Blue jean baby, LA Lady, seamstress for the band" was Bernie Taupin\'s then girlfriend Maxine Feibelman. She was a dancer who accompanied John and Taupin on their first tour of America in 1970, often sewing together the costumes and fixing their clothes. She and Taupin married in 1971.
<a href="http://www.last.fm/music/Elton+John/_/Tiny+Dancer">Read more on Last.fm</a>.',
                    'song_id' => 161,
                    'created_at' => '2018-04-28 12:21:40',
                    'updated_at' => '2018-04-28 12:21:40',
                ),
                106 => 
                array (
                    'name' => 'summary',
                    'value' => '"Your Song" is a ballad composed and performed by musician Elton John. The song\'s lyrics were written by Bernie Taupin. According to the Your Song Songfacts, he wrote them over breakfast at John\'s parents\' house, where he was living. The original lyrics have coffee stains on them. It appeared on John\'s self-titled second album in 1970.

The song was released in the U.S. in October 1970 as the B-side to "Take Me to the Pilot". Both received airplay <a href="http://www.last.fm/music/Elton+John/_/Your+Song">Read more on Last.fm</a>.',
                    'song_id' => 162,
                    'created_at' => '2018-04-28 12:21:42',
                    'updated_at' => '2018-04-28 12:21:42',
                ),
                107 => 
                array (
                    'name' => 'summary',
                    'value' => 'This song was written by Carl Perkins, who along with Elvis Presley was a member of "The Million Dollar Quartet". Elvis Presley recorded two cover versions of the song, one in 1956 for his first album, and a 2nd version for the soundtrack of the 1960 film, "G.I. Blues". <a href="http://www.last.fm/music/Elvis+Presley/_/Blue+Suede+Shoes">Read more on Last.fm</a>.',
                    'song_id' => 163,
                    'created_at' => '2018-04-28 12:21:43',
                    'updated_at' => '2018-04-28 12:21:43',
                ),
                108 => 
                array (
                    'name' => 'summary',
                'value' => '"Suspicious Minds" was written in 1968 by Mark James (aka Francis Zambon). Performed by Elvis Presley beginning in 1969, "Suspicious Minds" is widely regarded as the single that jump-started Presley\'s career after his successful 1968 Comeback Special. It was Elvis\'s eighteenth and last number-one single in the United States. Rolling Stone later ranked it #91 on their list of the 500 Greatest Songs of All Time. <a href="http://www.last.fm/music/Elvis+Presley/_/Suspicious+Minds">Read more on Last.fm</a>.',
                    'song_id' => 164,
                    'created_at' => '2018-04-28 12:21:45',
                    'updated_at' => '2018-04-28 12:21:45',
                ),
                109 => 
                array (
                    'name' => 'summary',
                    'value' => 'Lose Yourself is an Academy-award-winning song featured in the film  8 Mile. According to Songfacts, on the movie set, Eminem had a trailer where he could record songs for the movie during breaks in filming. He wrote this in character as B. Rabbit, the film\'s protagonist. <a href="http://www.last.fm/music/Eminem/_/Lose+Yourself">Read more on Last.fm</a>.',
                    'song_id' => 165,
                    'created_at' => '2018-04-28 12:21:46',
                    'updated_at' => '2018-04-28 12:21:46',
                ),
                110 => 
                array (
                    'name' => 'summary',
                    'value' => 'Cocaine is track and a cover song from Eric Clapton\'s 1977 album called Slowhand, his best-selling record of the Seventies.The original version was played by J.J. Cale, and it is considered holding an anti-drug message.

The guitar solo featured in this song is widely considered as some of Clapton\'s best work. <a href="http://www.last.fm/music/Eric+Clapton/_/Cocaine">Read more on Last.fm</a>.',
                    'song_id' => 166,
                    'created_at' => '2018-04-28 12:21:48',
                    'updated_at' => '2018-04-28 12:21:48',
                ),
                111 => 
                array (
                    'name' => 'summary',
                    'value' => '"Tears in Heaven" is a ballad written by Eric Clapton and Will Jennings about the pain Clapton felt following the 1991 death of his four-year-old son, Conor, who fell from a 53rd-story window in his mother\'s friend\'s New York City condominium. By all accounts, the death was simply a tragic accident, and Clapton was distraught for months afterwards.This song is one of Clapton\'s most successful, reaching #2 on the Billboard Hot 100 singles chart in the U.S. <a href="http://www.last.fm/music/Eric+Clapton/_/Tears+in+Heaven">Read more on Last.fm</a>.',
                    'song_id' => 168,
                    'created_at' => '2018-04-28 12:21:50',
                    'updated_at' => '2018-04-28 12:21:50',
                ),
                112 => 
                array (
                    'name' => 'summary',
                    'value' => 'Don\'t Stop is a song by the rock group Fleetwood Mac, written by vocalist and keyboard player Christine McVie. Sung by McVie and guitarist Lindsey Buckingham, it was the third single from the band\'s 1977 hit album Rumours, and is one of the band\'s most enduring hits, peaking at number three on the Billboard singles chart.

"Don\'t Stop" reflects Christine\'s feelings after her separation from Fleetwood Mac\'s bass guitarist John McVie after eight years of marriage. <a href="http://www.last.fm/music/Fleetwood+Mac/_/Don%27t+Stop">Read more on Last.fm</a>.',
                    'song_id' => 169,
                    'created_at' => '2018-04-28 12:21:52',
                    'updated_at' => '2018-04-28 12:21:52',
                ),
                113 => 
                array (
                    'name' => 'summary',
                    'value' => 'Dreams is a song written by singer Stevie Nicks, for the group Fleetwood Mac\'s 1977 album, Rumours. The song was the only U.S. number one hit for the group, and remains one of their best known songs. In the lyrics, a woman warns a man that he can be driven mad by loneliness in the wake of a broken love affair.

The members of Fleetwood Mac were experiencing emotional upheavals while recording Rumours. Drummer Mick Fleetwood was going through a divorce. <a href="http://www.last.fm/music/Fleetwood+Mac/_/Dreams">Read more on Last.fm</a>.',
                    'song_id' => 170,
                    'created_at' => '2018-04-28 12:21:53',
                    'updated_at' => '2018-04-28 12:21:53',
                ),
                114 => 
                array (
                    'name' => 'summary',
                    'value' => '"Go Your Own Way" is a song written by Lindsey Buckingham and performed by Fleetwood Mac. It is one of the band\'s most enduring hits.

It was the first single to be released from the highly successful album, Rumours, which was to be released in February 1977 and peaked at number ten on the Billboard Hot 100. It is ranked #119 on Rolling Stone\'s list of the 500 Greatest Songs of All Time, one of the group\'s two entries along with "Rhiannon (Will You Ever Win)", and is on The Rock and Roll Hall of Fame\'s 500 Songs that Shaped Rock and Roll list. <a href="http://www.last.fm/music/Fleetwood+Mac/_/Go+Your+Own+Way">Read more on Last.fm</a>.',
                    'song_id' => 171,
                    'created_at' => '2018-04-28 12:21:55',
                    'updated_at' => '2018-04-28 12:21:55',
                ),
                115 => 
                array (
                    'name' => 'summary',
                    'value' => 'The Chain is a song from Fleetwood Mac\'s best-selling album Rumours. "The Chain" is unique in being the only song credited to all five members of the Rumours-era Fleetwood Mac lineup: Lindsey Buckingham, Mick Fleetwood, Christine McVie, John McVie, Stevie Nicks; this is partly due to the fact that John McVie and Mick Fleetwood are generally not songwriters. The band has used the song as a signature, citing the lyric, "Never break the chain."

According to interviews on the writing of Rumours <a href="http://www.last.fm/music/Fleetwood+Mac/_/The+Chain">Read more on Last.fm</a>.',
                    'song_id' => 173,
                    'created_at' => '2018-04-28 12:21:59',
                    'updated_at' => '2018-04-28 12:21:59',
                ),
                116 => 
                array (
                    'name' => 'summary',
                'value' => 'The track "Breath of Life" by Florence + The Machine was recorded exclusively for the movie "Snow White and The Huntsman" (May 2012) starring Charlize Theron and Kristen Stewart. The track, released in April 2012, is a lavish symphonic rock production featuring a 110 piece orchestra, tribal drums and a choir of over 60 backing vocalists. It was co-written by Florence Welch and Isabella Summers from the perspective of the wicked Queen Ravena (Charlize Theron) in the movie. <a href="http://www.last.fm/music/Florence+%252B+the+Machine/_/Breath+of+Life">Read more on Last.fm</a>.',
                    'song_id' => 180,
                    'created_at' => '2018-04-28 12:22:09',
                    'updated_at' => '2018-04-28 12:22:09',
                ),
                117 => 
                array (
                    'name' => 'summary',
                'value' => 'Florence Welch told  The Sunday Times that "Cosmic Love" is a song about how being in love means “you give yourself up to the dark, to being blind.” (Source Cosmic Love Songfacts).
<a href="http://www.last.fm/music/Florence+%252B+the+Machine/_/Cosmic+Love">Read more on Last.fm</a>.',
                    'song_id' => 181,
                    'created_at' => '2018-04-28 12:22:10',
                    'updated_at' => '2018-04-28 12:22:10',
                ),
                118 => 
                array (
                    'name' => 'summary',
                    'value' => 'According to the Dog Days Are Over Songfacts, this paean to the inevitability of happiness was inspired by a giant text installation titled "Dog Days Are Over" by artist Ugo Rondinone, which Florence used to see every day riding her bike over Waterloo Bridge. <a href="http://www.last.fm/music/Florence+%252B+the+Machine/_/Dog+Days+Are+Over">Read more on Last.fm</a>.',
                    'song_id' => 182,
                    'created_at' => '2018-04-28 12:22:12',
                    'updated_at' => '2018-04-28 12:22:12',
                ),
                119 => 
                array (
                    'name' => 'summary',
                'value' => 'Florence Welch explained to the  Independent  why she wanted to be involved in writing for the soundtrack (Source Heavy in Your Arms Songfacts). "I thought it would be something fun to do; I\'d never written a song for a soundtrack before. It\'s an interesting exercise as a songwriter. You\'re thinking about it more in a visual tone and imagining a film score, which I think is really exciting.
They didn\'t specifically say what bit of the movie it was going to be in or anything <a href="http://www.last.fm/music/Florence+%252B+the+Machine/_/Heavy+in+Your+Arms">Read more on Last.fm</a>.',
                    'song_id' => 183,
                    'created_at' => '2018-04-28 12:22:13',
                    'updated_at' => '2018-04-28 12:22:13',
                ),
                120 => 
                array (
                    'name' => 'summary',
                'value' => '"Never Let Me Go" is a song by English indie rock band Florence + the Machine from their second studio album, Ceremonials (2011). <a href="http://www.last.fm/music/Florence+%252B+the+Machine/_/Never+Let+Me+Go">Read more on Last.fm</a>.',
                    'song_id' => 184,
                    'created_at' => '2018-04-28 12:22:15',
                    'updated_at' => '2018-04-28 12:22:15',
                ),
                121 => 
                array (
                    'name' => 'summary',
                    'value' => 'The No Light No Light Songfacts reports that this was the first song that Florence Welch wrote for Ceremonials. She penned the intro on her tour bus at four in the morning, whilst driving to Amsterdam. <a href="http://www.last.fm/music/Florence+%252B+the+Machine/_/No+Light,+No+Light">Read more on Last.fm</a>.',
                    'song_id' => 185,
                    'created_at' => '2018-04-28 12:22:16',
                    'updated_at' => '2018-04-28 12:22:16',
                ),
                122 => 
                array (
                    'name' => 'summary',
                    'value' => 'The Shake It Out Songfacts reports that the song is about having a hangover and wanting to shake it out. Speaking to XFM radio, Florence explained: "I wanted to just shake something out, shake out these regrets, shake out these things that haunt you. It was one of those songs that came in about half an hour and when you\'ve got a hangover, it is almost like a hangover cure. You\'re like, thank you!"
She continued: "I don\'t want everyone to think that I always write songs with a hangover! Cause I don\'t, I really don\'t. <a href="http://www.last.fm/music/Florence+%252B+the+Machine/_/Shake+It+Out">Read more on Last.fm</a>.',
                    'song_id' => 187,
                    'created_at' => '2018-04-28 12:22:19',
                    'updated_at' => '2018-04-28 12:22:19',
                ),
                123 => 
                array (
                    'name' => 'summary',
                'value' => '"What Kind Of Man" is the first release off Florence+The+Machine\'s third studio album,"How Big, How Blue, How Beautiful" (2015). The track was released on February 12, 2015. It was written by Florence Welch and Kid Harpoon and produced by Markus Dravs. The song is about a man who did [the artist?] wrong. The accompanying music video was directed by Vincent Haycock and choreographed by Ryan Heffington. <a href="http://www.last.fm/music/Florence+%252B+the+Machine/_/What+Kind+of+Man">Read more on Last.fm</a>.',
                    'song_id' => 188,
                    'created_at' => '2018-04-28 12:22:20',
                    'updated_at' => '2018-04-28 12:22:20',
                ),
                124 => 
                array (
                    'name' => 'summary',
                    'value' => ' Featured as the b-side to Florence + The Machine\'s second single \'Dog Days Are Over\', this track is a cover of the Candi Staton chart hit, You Got the Love.

According to the You Got The Love Songfacts, Candi Staton originally recorded the song for a diet product.  <a href="http://www.last.fm/music/Florence+%252B+the+Machine/_/You%27ve+Got+the+Love">Read more on Last.fm</a>.',
                    'song_id' => 189,
                    'created_at' => '2018-04-28 12:22:22',
                    'updated_at' => '2018-04-28 12:22:22',
                ),
                125 => 
                array (
                    'name' => 'summary',
                    'value' => '"Pumped Up Kicks" is a song by American indie pop band Foster the People. It was released as the group\'s debut single in September 2010, and the following year was included on their EP Foster the People and their debut album, Torches. "Pumped Up Kicks" became the group\'s breakthrough hit and was one of the most popular songs of 2011. The song was written and recorded by frontman Mark Foster while he was working as a commercial jingle writer. Contrasting with the upbeat musical composition <a href="http://www.last.fm/music/Foster+the+People/_/Pumped+Up+Kicks">Read more on Last.fm</a>.',
                    'song_id' => 191,
                    'created_at' => '2018-04-28 12:22:25',
                    'updated_at' => '2018-04-28 12:22:25',
                ),
                126 => 
                array (
                    'name' => 'summary',
                'value' => 'According to the My Way Songfacts, this originated as French song called Comme D\'habitude  (translation: "As Usual") by  Claude Francois . The French version tells the story of a man, living the end of his marriage, love killed by the boredom of everyday life.

Paul Anka  discovered this song while visiting France, and re-wrote the lyrics as "My Way." Upon returning to the US, he gave it to Frank Sinatra, and it became one of his signature songs. <a href="http://www.last.fm/music/Frank+Sinatra/_/My+Way">Read more on Last.fm</a>.',
                    'song_id' => 192,
                    'created_at' => '2018-04-28 12:22:27',
                    'updated_at' => '2018-04-28 12:22:27',
                ),
                127 => 
                array (
                    'name' => 'summary',
                    'value' => ' <a href="http://www.last.fm/music/Frank+Sinatra/_/New+York,+New+York">Read more on Last.fm</a>.',
                    'song_id' => 193,
                    'created_at' => '2018-04-28 12:22:28',
                    'updated_at' => '2018-04-28 12:22:28',
                ),
                128 => 
                array (
                    'name' => 'summary',
                    'value' => 'The \'Eleanor\' in the title is thought to refer to Eleanor Friedberger, lead singer of indie rock band The Fiery Furnaces who supported Franz Ferdinand during their 2004 tour. Friedberger has a relationship with Franz Ferdinand lead singer Alex Kapranos <a href="http://www.last.fm/music/Franz+Ferdinand/_/Eleanor+Put+Your+Boots+On">Read more on Last.fm</a>.',
                    'song_id' => 195,
                    'created_at' => '2018-04-28 12:22:31',
                    'updated_at' => '2018-04-28 12:22:31',
                ),
                129 => 
                array (
                    'name' => 'summary',
                    'value' => '"Michael" is a song by Franz Ferdinand and was the fourth single released from their debut self-titled album. The song was notable for its homoerotic lyrics such as "stubble on my sticky lips" and "beautiful boys on a beautiful dancefloor".
The singer, Alex Kapranos, stated in an interview to the UK magazine Boyz that the song was written about two friends of his — "It was one night when me and the band were out with friends from Glasgow, and we went to this warehouse dance party thing called Disco X. <a href="http://www.last.fm/music/Franz+Ferdinand/_/Michael">Read more on Last.fm</a>.',
                    'song_id' => 196,
                    'created_at' => '2018-04-28 12:22:33',
                    'updated_at' => '2018-04-28 12:22:33',
                ),
                130 => 
                array (
                    'name' => 'summary',
                    'value' => 'No You Girls is the second single from the succesful Franz Ferdinand\'s album "Tonight: Franz Ferdinand", and has been related with another version called Katherine Kiss Me, a ballad also included in their last album.

It has been produced by Dan Carey and Franz Ferdinand, and as well as the rest of the songs in the album, it includes some electro-pop sounds, colorful guitars and bass sounds, making an interesting use of their particular style by taking the instruments to a different level of rythms. <a href="http://www.last.fm/music/Franz+Ferdinand/_/No+You+Girls">Read more on Last.fm</a>.',
                    'song_id' => 197,
                    'created_at' => '2018-04-28 12:22:34',
                    'updated_at' => '2018-04-28 12:22:34',
                ),
                131 => 
                array (
                    'name' => 'summary',
                    'value' => '"Take Me Out" is the breakthrough hit and second single from Scottish band Franz Ferdinand on their self-titled album. It was released in the United Kingdom on the 12 January 2004 and in the USA on 9 February, both through Domino Records. It was released on CD, 7" vinyl, and as a DVD single with the video promo and a short interview with the band.

The single reached #3 in the UK Singles Chart. It reached #3 on the US Modern Rock Tracks chart and #66 on the US Billboard Hot 100. <a href="http://www.last.fm/music/Franz+Ferdinand/_/Take+Me+Out">Read more on Last.fm</a>.',
                    'song_id' => 199,
                    'created_at' => '2018-04-28 12:22:37',
                    'updated_at' => '2018-04-28 12:22:37',
                ),
                132 => 
                array (
                    'name' => 'summary',
                    'value' => 'The Fallen is first song from album You Could Have It So Much Better.

"The Fallen" is addressed to Jesus Christ, hypothesizing his actions were he on Earth at the present time, implying that he would be among the poor underclass preaching love rather than hobnobbing with wealthy self-proclaimed Christians. <a href="http://www.last.fm/music/Franz+Ferdinand/_/The+Fallen">Read more on Last.fm</a>.',
                    'song_id' => 200,
                    'created_at' => '2018-04-28 12:22:39',
                    'updated_at' => '2018-04-28 12:22:39',
                ),
                133 => 
                array (
                    'name' => 'summary',
                    'value' => ' <a href="http://www.last.fm/music/Franz+Ferdinand/_/This+Fire">Read more on Last.fm</a>.',
                    'song_id' => 201,
                    'created_at' => '2018-04-28 12:22:40',
                    'updated_at' => '2018-04-28 12:22:40',
                ),
                134 => 
                array (
                    'name' => 'summary',
                    'value' => '"I Will Survive" is a hit song first performed by American singer Gloria Gaynor, released in October 1978. It was written by Freddie Perren and Dino Fekaris. A top-selling song after its initial release, it has remained a popular disco anthem, as well as being certified double platinum by the RIAA. The song\'s lyrics describe the narrator\'s discovery of personal strength following an initially devastating breakup, delivered with increasing confidence and backed by a stirring instrumental accompaniment. <a href="http://www.last.fm/music/Gloria+Gaynor/_/I+Will+Survive">Read more on Last.fm</a>.',
                    'song_id' => 203,
                    'created_at' => '2018-04-28 12:22:43',
                    'updated_at' => '2018-04-28 12:22:43',
                ),
                135 => 
                array (
                    'name' => 'summary',
                'value' => 'Featuring the lyrical stylings of Del Tha Funkee Homosapien.According to the Clint Eastwood Songfacts, the reason the song is called Clint Eastwood is because of the strange harmonica-like instrument (known as a Melodica) used in the background. The same instrument was used in Eastwood\'s movie A Fistful of Dollars.

<a href="http://www.last.fm/music/Gorillaz/_/Clint+Eastwood">Read more on Last.fm</a>.',
                    'song_id' => 205,
                    'created_at' => '2018-04-28 12:22:46',
                    'updated_at' => '2018-04-28 12:22:46',
                ),
                136 => 
                array (
                    'name' => 'summary',
                    'value' => 'The commentator on the 2006 BRIT Awards said that the song was originally to be called \'It\'s There\' but they changed it because Shaun Ryder\'s strong Mancunian accent made it sound like he was saying \'It\'s dare.\'
According to the DARE Songfacts, the song features the former Happy Mondays frontman Shaun Ryder. The main vocalist is Noodle (in reality the vocals are provided by back up singer Rosie Wilson).
The song ends with the same crowd sample as Daft Punk\'s Revolution 909 starts with. <a href="http://www.last.fm/music/Gorillaz/_/DARE">Read more on Last.fm</a>.',
                    'song_id' => 206,
                    'created_at' => '2018-04-28 12:22:47',
                    'updated_at' => '2018-04-28 12:22:47',
                ),
                137 => 
                array (
                    'name' => 'summary',
                    'value' => 'This song features De La Soul on vocals. <a href="http://www.last.fm/music/Gorillaz/_/Feel+Good+Inc.">Read more on Last.fm</a>.',
                    'song_id' => 207,
                    'created_at' => '2018-04-28 12:22:49',
                    'updated_at' => '2018-04-28 12:22:49',
                ),
                138 => 
                array (
                    'name' => 'summary',
                    'value' => 'This song features Neneh Cherry on guest backing vocals. <a href="http://www.last.fm/music/Gorillaz/_/Kids+With+Guns">Read more on Last.fm</a>.',
                    'song_id' => 208,
                    'created_at' => '2018-04-28 12:22:51',
                    'updated_at' => '2018-04-28 12:22:51',
                ),
                139 => 
                array (
                    'name' => 'summary',
                    'value' => '"Basket Case" is a song by Green Day from its third album Dookie. After the single was released, the song ended up being a huge hit, spending five weeks at the top of the Modern Rock Tracks chart. The song was written by frontman Billie Joe Armstrong about his struggle with anxiety; before he was diagnosed with a panic disorder, he thought he was going crazy. The music video, featuring the band members in a mental institution, received heavy airplay on MTV. <a href="http://www.last.fm/music/Green+Day/_/Basket+Case">Read more on Last.fm</a>.',
                    'song_id' => 210,
                    'created_at' => '2018-04-28 12:22:53',
                    'updated_at' => '2018-04-28 12:22:53',
                ),
                140 => 
                array (
                    'name' => 'summary',
                    'value' => '"Longview" is the first major-label single released by punkrock band Green Day, from their hit 1994 album, Dookie. The song was the band\'s first #1 on the Modern Rock chart, in a career that contained many chart-toppers on this chart. The music video for this song received intense airplay on MTV, which is largely credited for breaking Green Day into mainstream popularity.[citation needed] The lyrics describe intense boredom and are about a day spent sitting around the house <a href="http://www.last.fm/music/Green+Day/_/Longview">Read more on Last.fm</a>.',
                    'song_id' => 211,
                    'created_at' => '2018-04-28 12:22:55',
                    'updated_at' => '2018-04-28 12:22:55',
                ),
                141 => 
                array (
                    'name' => 'summary',
                    'value' => '"Don\'t Cry" is a song by hard rock band Guns N\' Roses, two versions of which were released simultaneously on different albums. The version with the original lyrics is the fourth track on Use Your Illusion I, while the version with the alternate lyrics is the thirteenth track on Use Your Illusion II. Only the vocal tracks differ, and even then only in the verses; however, in those verses, not only are the words entirely different, but the meter and melody are also slightly different. <a href="http://www.last.fm/music/Guns+N%27+Roses/_/Don%27t+Cry">Read more on Last.fm</a>.',
                    'song_id' => 213,
                    'created_at' => '2018-04-28 12:22:58',
                    'updated_at' => '2018-04-28 12:22:58',
                ),
                142 => 
                array (
                    'name' => 'summary',
                    'value' => '"Nightrain" is a song written by the American rock band Guns N\' Roses in the mid 1980s. It is the third song on the band\'s 1987 debut album, Appetite for Destruction. 

Although it was released as a single, the song was not included in their best-of album. It reached #93 on the US Billboard charts.

The song is a tribute to an infamous brand of cheap Californian wine, Night Train Express, which was extremely popular with the band during their early days because of its low price and high alcohol content. <a href="http://www.last.fm/music/Guns+N%27+Roses/_/Nightrain">Read more on Last.fm</a>.',
                    'song_id' => 214,
                    'created_at' => '2018-04-28 12:23:00',
                    'updated_at' => '2018-04-28 12:23:00',
                ),
                143 => 
                array (
                    'name' => 'summary',
                    'value' => '"November Rain" is a single by the band Guns N\' Roses, written by lead singer Axl Rose and released in June 1992. The music video for this song, also released in 1992, quickly became the most requested video on MTV, and won an MTV Video Music Award for Best Cinematography. It features a sweeping orchestral backing and is one of Guns N\' Roses\' longest songs.

"November Rain" appears on the album Use Your Illusion I. At 8 minutes and 57 seconds, it is a rock ballad in the tradition of Stairway to Heaven, Free Bird, and Bohemian Rhapsody. <a href="http://www.last.fm/music/Guns+N%27+Roses/_/November+Rain">Read more on Last.fm</a>.',
                    'song_id' => 215,
                    'created_at' => '2018-04-28 12:23:01',
                    'updated_at' => '2018-04-28 12:23:01',
                ),
                144 => 
                array (
                    'name' => 'summary',
                    'value' => '"Patience" is a song by the American hard rock group Guns N\' Roses, which appears on the album G N\' R Lies and was released as a single in 1989. The song peaked at number four on the Billboard Hot 100 singles chart. The song is played using four acoustic guitars, and was recorded in a single session by producer Mike Clink. A music video of the song was shot and appears on the band\'s music video DVD, Welcome to the Videos. The music and lyrics were written by rhythm guitarist and founding member, Izzy Stradlin. <a href="http://www.last.fm/music/Guns+N%27+Roses/_/Patience">Read more on Last.fm</a>.',
                    'song_id' => 216,
                    'created_at' => '2018-04-28 12:23:03',
                    'updated_at' => '2018-04-28 12:23:03',
                ),
                145 => 
                array (
                    'name' => 'summary',
                    'value' => '"Sweet Child o\' Mine" is a song by the hard rock band Guns N\' Roses. It was released on their debut album Appetite for Destruction on July 21, 1987. "Sweet Child o\' Mine" was Guns N\' Roses\' first and, to date, only number-one single on the Billboard Hot 100, spending two weeks at the top spot in September 1988. In May 2008, the song was voted as #210 on the RIAA\'s list of the best songs of the 20th century.

A cover of this song appeared in the videogame "Guitar Hero 2." <a href="http://www.last.fm/music/Guns+N%27+Roses/_/Sweet+Child+o%27+Mine">Read more on Last.fm</a>.',
                    'song_id' => 217,
                    'created_at' => '2018-04-28 12:23:05',
                    'updated_at' => '2018-04-28 12:23:05',
                ),
                146 => 
                array (
                    'name' => 'summary',
                    'value' => '"Welcome to the Jungle" is the first track from Guns N\' Roses\' debut album, Appetite for Destruction, and also on their Greatest Hits album. The song peaked at number seven on the Billboard Hot 100, becoming their first significant hit single.

The song was written by lead singer Axl Rose and was inspired by an encounter he had when first moving to L.A. someone walked up to him and said  "You know where you are? You\'re in the jungle baby, you\'re gonna die!" <a href="http://www.last.fm/music/Guns+N%27+Roses/_/Welcome+to+the+Jungle">Read more on Last.fm</a>.',
                    'song_id' => 218,
                    'created_at' => '2018-04-28 12:23:06',
                    'updated_at' => '2018-04-28 12:23:06',
                ),
                147 => 
                array (
                    'name' => 'summary',
                'value' => '"Barracuda" is a song written and recorded by the rock band Heart.  It was released as the first single from the band\'s second album "Little Queen" (1977).

The song is an aggressive hard rock number notable for a galloping guitar riff.  It has been noted for its use of natural harmonics, particularly in the intro where the harmonics are bent using the tremolo arm of the guitar.

Upon its release "Barracuda" became Heart\'s second top-twenty hit in the U. <a href="http://www.last.fm/music/Heart/_/Barracuda">Read more on Last.fm</a>.',
                    'song_id' => 219,
                    'created_at' => '2018-04-28 12:23:07',
                    'updated_at' => '2018-04-28 12:23:07',
                ),
                148 => 
                array (
                    'name' => 'summary',
                    'value' => 'Hole\'s most commercially successful single, being the only one to reach #1 on the Modern Rock Tracks chart. The lyrics contain references to Dante Gabriel Rossetti\'s poem "A Superscription", and Shakespeare\'s "Merchant of Venice," as well as the song sharing the name of an American pornographic magazine. The lyrics were written by Courtney Love and the music was written by the band with Billy Corgan. <a href="http://www.last.fm/music/Hole/_/Celebrity+Skin">Read more on Last.fm</a>.',
                    'song_id' => 220,
                    'created_at' => '2018-04-28 12:23:09',
                    'updated_at' => '2018-04-28 12:23:09',
                ),
                149 => 
                array (
                    'name' => 'summary',
                    'value' => 'This song is about Kurt Cobain. It was first performed as "Dissed" and had different lyrics for the verse.

Courtney Love told Uncut Magazine: "I still don\'t understand why that one song with just three chords is such a big thing. But it\'s definitely got some good lyrics. That was a song about Kurt. I wrote it in Boston. So the line "dog beg," that\'s because there was a dog begging me for food." (Source Doll Parts Songfacts). <a href="http://www.last.fm/music/Hole/_/Doll+Parts">Read more on Last.fm</a>.',
                    'song_id' => 221,
                    'created_at' => '2018-04-28 12:23:11',
                    'updated_at' => '2018-04-28 12:23:11',
                ),
                150 => 
                array (
                    'name' => 'summary',
                    'value' => '"Malibu" is the second single by Hole from the Celebrity Skin LP and was written about Kurt Cobain\'s stay at a rehabilitation clinic in Malibu, California. The song was nominated for a Grammy Award in the Best Rock Performance by a Duo or Group with Vocal field, losing to Put Your Lights On by Santana. The lyrics were written by Courtney Love, and the music was co-written by the band with Billy Corgan. <a href="http://www.last.fm/music/Hole/_/Malibu">Read more on Last.fm</a>.',
                    'song_id' => 222,
                    'created_at' => '2018-04-28 12:23:12',
                    'updated_at' => '2018-04-28 12:23:12',
                ),
                151 => 
                array (
                    'name' => 'summary',
                    'value' => 'This song is about Iggy Pop\'s lifestyle as a hard-living heroin addict and was used in the 1996 movie Trainspotting, where drug abuse was a central theme. <a href="http://www.last.fm/music/Iggy+Pop/_/Lust+For+Life">Read more on Last.fm</a>.',
                    'song_id' => 225,
                    'created_at' => '2018-04-28 12:23:17',
                    'updated_at' => '2018-04-28 12:23:17',
                ),
                152 => 
                array (
                    'name' => 'summary',
                    'value' => '"The Passenger" is a song by Iggy Pop and Ricky Gardiner, recorded and released by Iggy Pop on the Lust for Life album in 1977. It was also released as the B-side of the album\'s only single, "Success". In the summer of 2007 alternative rock radio stations around the USA resumed playing the song in accordance with Iggy Pop and The Stooges tour in that country.

The lyrics, written by Iggy Pop allegedly aboard Berlin\'s S-Bahn, have been interpreted as embodying the nomadic spirit of the punk outcast. <a href="http://www.last.fm/music/Iggy+Pop/_/The+Passenger">Read more on Last.fm</a>.',
                    'song_id' => 227,
                    'created_at' => '2018-04-28 12:23:19',
                    'updated_at' => '2018-04-28 12:23:19',
                ),
                153 => 
                array (
                    'name' => 'summary',
                'value' => '"Aces High" is a song written by Steve Harris. It is Iron Maiden\'s eleventh single and the second from the 1984 album Powerslave. The song tells the story of a British RAF pilot fighting against the German Luftwaffe during the Battle of Britain (1940), the first battle to be completely fought in the skies.  The song topped at number 20 on the UK Singles Chart.

The song was a frequent concert opener and it was usually preceded by "Churchill\'s speech" <a href="http://www.last.fm/music/Iron+Maiden/_/Aces+High">Read more on Last.fm</a>.',
                    'song_id' => 229,
                    'created_at' => '2018-04-28 12:23:22',
                    'updated_at' => '2018-04-28 12:23:22',
                ),
                154 => 
                array (
                    'name' => 'summary',
                    'value' => '"Children of the Damned" is the 2nd track in the Number of the Beast album, released by Iron Maiden. This dark and compelling track is inspired by the 1963 film of the same name, which is about six children with psychic abilities who are forced to battle for their survival against an inferior human race. The song describes the death of the last of the children, as he steps out to face the humans which are intent on destroying him by burning him at the stake. It is a deep and thought-provoking film. <a href="http://www.last.fm/music/Iron+Maiden/_/Children+of+the+Damned">Read more on Last.fm</a>.',
                    'song_id' => 230,
                    'created_at' => '2018-04-28 12:23:24',
                    'updated_at' => '2018-04-28 12:23:24',
                ),
                155 => 
                array (
                    'name' => 'summary',
                    'value' => '"Fear of the Dark" is a song written by Steve Harris, bass player and main songwriter for Iron Maiden, as the title track to Iron Maiden\'s 1992 album Fear of the Dark. This is the only song from the Fear of the Dark album to still be played in concerts today, although "Afraid to Shoot Strangers" was often played live until 1998.

The single "Fear of the Dark (live)" is the 26th single released by the band. This live version of the song (as well as the live version of "Bring Your Daughter. <a href="http://www.last.fm/music/Iron+Maiden/_/Fear+of+the+Dark">Read more on Last.fm</a>.',
                    'song_id' => 231,
                    'created_at' => '2018-04-28 12:23:25',
                    'updated_at' => '2018-04-28 12:23:25',
                ),
                156 => 
                array (
                    'name' => 'summary',
                    'value' => '"Run to the Hills" is Iron Maiden\'s sixth single and the first single from their 1982 album The Number of the Beast. It was written by Steve Harris, bassist and founder of the band.

The song itself is about the conflict between Native Americans and the invading white men. The first verse is written from the point of view of the native Cree, the second from the point of view of white soldiers, and the third from a more neutral observer point of view. <a href="http://www.last.fm/music/Iron+Maiden/_/Run+to+the+Hills">Read more on Last.fm</a>.',
                    'song_id' => 235,
                    'created_at' => '2018-04-28 12:23:31',
                    'updated_at' => '2018-04-28 12:23:31',
                ),
                157 => 
                array (
                    'name' => 'summary',
                    'value' => '"The Trooper" is a song written by Iron Maiden bass player Steve Harris. It is Iron Maiden\'s ninth single, and the second from their 1983 album Piece of Mind. The single was released on June 20, 1983. The song is about the Battle of Balaclava in 1854 during the Crimean War, and is at least partially based upon Alfred Lord Tennyson\'s poem "The Charge of the Light Brigade", taking the viewpoint of one of the slain troopers, who, in the coverart, is perceived as a bald Eddie. <a href="http://www.last.fm/music/Iron+Maiden/_/The+Trooper">Read more on Last.fm</a>.',
                    'song_id' => 236,
                    'created_at' => '2018-04-28 12:23:33',
                    'updated_at' => '2018-04-28 12:23:33',
                ),
                158 => 
                array (
                    'name' => 'summary',
                    'value' => '"The Wicker Man" is a song by Iron Maiden, released as the first single from their album Brave New World, released in April 2000. It was co-written by Adrian Smith, Bruce Dickinson and Steve Harris. It was co-produced by Kevin Shirley and Harris. The title is inspired by the British cult film of the same name. The song should not be confused with Wicker Man from Dickinson\'s solo career, the lyrics of which are more closely themed around the film. The latter song can be found on the 2 disc edition of The Best of Bruce Dickinson. <a href="http://www.last.fm/music/Iron+Maiden/_/The+Wicker+Man">Read more on Last.fm</a>.',
                    'song_id' => 237,
                    'created_at' => '2018-04-28 12:23:34',
                    'updated_at' => '2018-04-28 12:23:34',
                ),
                159 => 
                array (
                    'name' => 'summary',
                    'value' => 'Wasted Years was the fourteenth single released by Iron Maiden and the first from their Somewhere in Time album. Released in 1986, it was the first single to be written by guitarist Adrian Smith alone. It reached number 18 in the UK charts. The cover depicts Eddie\'s point of view as he flies a spaceship chasing the Doctor\'s TARDIS. A similar Doctor Who reference can be seen on the back of the Somewhere in Time case, where the Doctor\'s TARDIS is parked on a rooftop. <a href="http://www.last.fm/music/Iron+Maiden/_/Wasted+Years">Read more on Last.fm</a>.',
                    'song_id' => 238,
                    'created_at' => '2018-04-28 12:23:36',
                    'updated_at' => '2018-04-28 12:23:36',
                ),
                160 => 
                array (
                    'name' => 'summary',
                    'value' => '"Fire and Rain" is a folk/rock song written and performed by James Taylor. As a song on his second album, Sweet Baby James, the song engendered widespread attention for him. The album was released in February 1970, with the song being released as a single the following February. "Fire and Rain" quickly rose to number three on the Billboard hot 100 charts. It was soon covered by Anne Murray, on her album Honey, Wheat and Laughter, also in 1970.

Moody and introspective <a href="http://www.last.fm/music/James+Taylor/_/Fire+and+Rain">Read more on Last.fm</a>.',
                    'song_id' => 243,
                    'created_at' => '2018-04-28 12:23:43',
                    'updated_at' => '2018-04-28 12:23:43',
                ),
                161 => 
                array (
                    'name' => 'summary',
                    'value' => '"Handy Man" peaked at #1 on the U.S. Billboard Easy Listening Chart in the Summer of 1977. <a href="http://www.last.fm/music/James+Taylor/_/Handy+Man">Read more on Last.fm</a>.',
                    'song_id' => 244,
                    'created_at' => '2018-04-28 12:23:45',
                    'updated_at' => '2018-04-28 12:23:45',
                ),
                162 => 
                array (
                    'name' => 'summary',
                'value' => 'This is one of his best songs, How Sweet it is <a href="http://www.last.fm/music/James+Taylor/_/How+Sweet+It+Is+(To+Be+Loved+by+You)">Read more on Last.fm</a>.',
                    'song_id' => 245,
                    'created_at' => '2018-04-28 12:23:46',
                    'updated_at' => '2018-04-28 12:23:46',
                ),
                163 => 
                array (
                    'name' => 'summary',
                    'value' => 'A live version of one of James\' most popular concert tunes.  Just like you remember... This was a tribute to the birth of his brother & sister  in-law\'s son, As James has said recently this was a lifetime ago and now he is bigger and older than me, I somehow doubt it but as he say\'s it\'s a good story anyway ! <a href="http://www.last.fm/music/James+Taylor/_/Sweet+Baby+James">Read more on Last.fm</a>.',
                    'song_id' => 247,
                    'created_at' => '2018-04-28 12:23:50',
                    'updated_at' => '2018-04-28 12:23:50',
                ),
                164 => 
                array (
                    'name' => 'summary',
                    'value' => 'Somebody to Love is a rock song that was originally written and recorded by 1960s folk-psychedelic band the Great Society and later by the psychedelic rock band Jefferson Airplane. Rolling Stone magazine ranked Jefferson Airplane\'s recording #274 on their list of the 500 Greatest Songs of All Time.

When Grace Slick departed to join Jefferson Airplane, she took this song with her, bringing it to the Surrealistic Pillow sessions, along with her own composition "White Rabbit. <a href="http://www.last.fm/music/Jefferson+Airplane/_/Somebody+to+Love">Read more on Last.fm</a>.',
                    'song_id' => 251,
                    'created_at' => '2018-04-28 12:23:56',
                    'updated_at' => '2018-04-28 12:23:56',
                ),
                165 => 
                array (
                    'name' => 'summary',
                    'value' => '"White Rabbit" was written by Grace Slick, who based the lyrics on Lewis Carroll\'s book Alice In Wonderland. Like many young musicians in San Francisco, Slick did a lot of drugs. She saw lots of drug references in Carroll\'s book, including the pills, the smoking caterpillar, the mushroom, and lots of other images that are generally trippy. She noticed that lots of childrens stories involve a substance of some kind that alters reality, and felt it was time to write a song about it. <a href="http://www.last.fm/music/Jefferson+Airplane/_/White+Rabbit">Read more on Last.fm</a>.',
                    'song_id' => 253,
                    'created_at' => '2018-04-28 12:23:59',
                    'updated_at' => '2018-04-28 12:23:59',
                ),
                166 => 
                array (
                    'name' => 'summary',
                    'value' => '"Are You Gonna Be My Girl" is a song by the Australian rock band Jet, featured on their 2003 album Get Born. It was the first single from the album, released in 2003 in Australia and the UK, and in 2004 in the United States. The song is often cited for similarities to Iggy Pop\'s "Lust for Life" and The White Stripes\' "Screwdriver". The group, in fact, says that they wrote the song based on 60s Motown music and particularly incorporated the beat from "You Can\'t Hurry Love" by The Supremes. <a href="http://www.last.fm/music/Jet/_/Are+You+Gonna+Be+My+Girl">Read more on Last.fm</a>.',
                    'song_id' => 254,
                    'created_at' => '2018-04-28 12:24:01',
                    'updated_at' => '2018-04-28 12:24:01',
                ),
                167 => 
                array (
                    'name' => 'summary',
                    'value' => 'Hey Joe is Hendrix at his best of introducing modern versions of old black blues classic lyrics and themes with his own brand of electric guitar.
The Hey Joe Songfacts says: There have been countless versions of "Hey Joe" but the version that inspired Hendrix to record this came from a Folk singer named Tim Rose, who played it in a slow arrangement on his 1967 debut album. Rose was a popular singer/songwriter for a short time in the Greenwich Village scene, but quickly faded into obscurity before a small comeback in the \'90s. <a href="http://www.last.fm/music/Jimi+Hendrix/_/Hey+Joe">Read more on Last.fm</a>.',
                    'song_id' => 255,
                    'created_at' => '2018-04-28 12:24:02',
                    'updated_at' => '2018-04-28 12:24:02',
                ),
                168 => 
                array (
                    'name' => 'summary',
                    'value' => 'Little Wing is a song written by Jimi Hendrix. He first recorded the song on the 1967 album Axis: Bold as Love. It is ranked #357 on the Rolling Stone magazine\'s list of "the 500 Greatest Songs of All Time", and has been covered by numerous artists, notably Derek and the Dominoes, Joe Satriani, Stevie Ray Vaughan, Pearl Jam, Sting, John Mayer, The Corrs, Toto among many others.

"Little Wing" is played using the unique chord/melody guitar style that Hendrix developed during his early career stints in rhythm and blues bands. <a href="http://www.last.fm/music/Jimi+Hendrix/_/Little+Wing">Read more on Last.fm</a>.',
                    'song_id' => 256,
                    'created_at' => '2018-04-28 12:24:04',
                    'updated_at' => '2018-04-28 12:24:04',
                ),
                169 => 
                array (
                    'name' => 'summary',
                    'value' => 'Recorded in 1966, Purple Haze was the second single by The Jimi Hendrix Experience, released in both the UK and the US. It also appeared on the US release of their 1967 album Are You Experienced. \'Purple Haze\' is often cited as one of Jimi Hendrix\'s greatest songs; for many, it is his signature song. Purple Haze became the follow-up release to "Hey Joe" after his manager Chas Chandler heard him playing the riff backstage and suggested that he write lyrics to go with it. <a href="http://www.last.fm/music/Jimi+Hendrix/_/Purple+Haze">Read more on Last.fm</a>.',
                    'song_id' => 257,
                    'created_at' => '2018-04-28 12:24:05',
                    'updated_at' => '2018-04-28 12:24:05',
                ),
                170 => 
                array (
                    'name' => 'summary',
                    'value' => 'This blues song is written and performed by Jimi Hendrix. The first recorded version appeared on the album are you experienced?. After that, many live versions have been recorded and released. <a href="http://www.last.fm/music/Jimi+Hendrix/_/Red+House">Read more on Last.fm</a>.',
                    'song_id' => 258,
                    'created_at' => '2018-04-28 12:24:06',
                    'updated_at' => '2018-04-28 12:24:06',
                ),
                171 => 
                array (
                    'name' => 'summary',
                    'value' => '"The Wind Cries Mary" is a song written by Jimi Hendrix and issued by the Jimi Hendrix Experience as the band\'s third single on May 5, 1967. It reached no. 6 in the UK Charts. The track is an example of psychedelic blues-rock, as the song is in the key of F major, with a guitar solo primarily involving the F major pentatonic scale. Today, it is #379 on Rolling Stone\'s list of the 500 greatest songs of all time. It has been covered by musicians such as Jamie Cullum <a href="http://www.last.fm/music/Jimi+Hendrix/_/The+Wind+Cries+Mary">Read more on Last.fm</a>.',
                    'song_id' => 259,
                    'created_at' => '2018-04-28 12:24:08',
                    'updated_at' => '2018-04-28 12:24:08',
                ),
                172 => 
                array (
                    'name' => 'summary',
                'value' => 'Jimi Hendrix was very interested in using distortion and effects to produce a psychedlic, or mind altering effect from his guitar playing. This song was recorded "live in the studio" with later studio effects (panning guitar from left to right) added for texture.  Several aspects of Jimi\'s playing are showcased here, his ease of improvisation, call and response guitar lines, pickup switching, whammy bar dives, wah-wah pedal use, minor pentatonic screams and squacks. <a href="http://www.last.fm/music/Jimi+Hendrix/_/Voodoo+Child+(Slight+Return)">Read more on Last.fm</a>.',
                    'song_id' => 260,
                    'created_at' => '2018-04-28 12:24:09',
                    'updated_at' => '2018-04-28 12:24:09',
                ),
                173 => 
                array (
                    'name' => 'summary',
                    'value' => '"Imagine" is a song by John Lennon, which appears on his 1971 album, Imagine. It was released as a single in the same year, and reached number three in the U.S. Billboard charts, and number six in the United Kingdom.

In 2004, Rolling Stone magazine voted "Imagine" the third greatest song of all time. Former U.S. president Jimmy Carter said, "In many countries around the world — my wife and I have visited about 125 countries — you hear John Lennon\'s song \'Imagine\' used almost equally with national anthems." <a href="http://www.last.fm/music/John+Lennon/_/Imagine">Read more on Last.fm</a>.',
                    'song_id' => 262,
                    'created_at' => '2018-04-28 12:24:12',
                    'updated_at' => '2018-04-28 12:24:12',
                ),
                174 => 
                array (
                    'name' => 'summary',
                    'value' => '"Stand By Me" is a song by John Lennon, written by Jerry Leiber/Mike Stoller/Ben E. King.

It\'s from his album Rock \'N\' Roll (1975).

According to the documentary History of Rock \'n\' Roll, Ben E. King had no intention of recording the song himself when he wrote it.[1]  King had written the song for The Drifters, who passed on the chance to record it. It was not until after the "Spanish Harlem" recording session that he had some studio time left over. <a href="http://www.last.fm/music/John+Lennon/_/Stand+by+Me">Read more on Last.fm</a>.',
                    'song_id' => 263,
                    'created_at' => '2018-04-28 12:24:14',
                    'updated_at' => '2018-04-28 12:24:14',
                ),
                175 => 
                array (
                    'name' => 'summary',
                    'value' => '"Woman" is a 1981 single by John Lennon from his 1980 album Double Fantasy. Written by Lennon: it is an ode to his wife Yoko Ono, which is introduced by Lennon whispering, "For the other half of the sky ...", a paraphrase of a Chinese proverb, one used by Mao Zedong.

In an interview for Rolling Stone magazine on December 5, 1980, Lennon said that "Woman" was a "grown-up version" of the song "Girl".

"Woman" was the second single released from the Double Fantasy album, and the first Lennon single issued after his death on December 8, 1980. <a href="http://www.last.fm/music/John+Lennon/_/Woman">Read more on Last.fm</a>.',
                    'song_id' => 264,
                    'created_at' => '2018-04-28 12:24:16',
                    'updated_at' => '2018-04-28 12:24:16',
                ),
                176 => 
                array (
                    'name' => 'summary',
                    'value' => 'This version of "A Boy Named Sue" was recorded in front of a live audience. 

The track is a comical talking blues song written by Shel Silverstein and performed by Country/Blues singer Johnny Cash. It tells the first-person story of a boy named "Sue," whose father, before walking out of his life, named him that in order to make him strong. Unbeknownst to the, now, man, he meets his father and a barroom brawl ensues. <a href="http://www.last.fm/music/Johnny+Cash/_/A+Boy+Named+Sue">Read more on Last.fm</a>.',
                    'song_id' => 265,
                    'created_at' => '2018-04-28 12:24:18',
                    'updated_at' => '2018-04-28 12:24:18',
                ),
                177 => 
                array (
                    'name' => 'summary',
                    'value' => '"I Walk the Line" is a classic American country song written by Johnny Cash and recorded in 1956. In 2004, Rolling Stone magazine ranked the song at #30 on their list of the 500 Greatest Songs of All Time.

Originally recorded at Sun Studio on April 2, 1956, and released on May 1, it spent six weeks at the top spot on the U.S. country charts that summer, and also reached number 19 on the pop music charts.

The song was re-recorded four times during Cash\'s career. <a href="http://www.last.fm/music/Johnny+Cash/_/I+Walk+the+Line">Read more on Last.fm</a>.',
                    'song_id' => 267,
                    'created_at' => '2018-04-28 12:24:21',
                    'updated_at' => '2018-04-28 12:24:21',
                ),
                178 => 
                array (
                    'name' => 'summary',
                'value' => '"Ring of Fire" is a country music song popularized by Johnny Cash and co-written by June Carter (wife of Johnny Cash) and Merle Kilgore. The song was recorded on March 25, 1963 and became the biggest hit of Cash\'s career, staying at number one on the US charts for seven weeks.

Although the phrase "Ring of Fire" sounds somewhat ominous, the term refers to falling in love - which is what June Carter was experiencing with Johnny Cash at the time. Some sources claim that June had seen the phrase <a href="http://www.last.fm/music/Johnny+Cash/_/Ring+of+Fire">Read more on Last.fm</a>.',
                    'song_id' => 268,
                    'created_at' => '2018-04-28 12:24:22',
                    'updated_at' => '2018-04-28 12:24:22',
                ),
                179 => 
                array (
                    'name' => 'summary',
                    'value' => '"Love Will Tear Us Apart" is a song by the British post-punk band Joy Division. The lyrics were written by the band\'s vocalist, Ian Curtis, who committed suicide in May 1980, a month after the song was released as a single. The song was then re-promoted in 12" format in June 1980.

"Love Will Tear Us Apart" was written in August and September of 1979 and was debuted when the band supported Buzzcocks on their UK tour in September and October 1979, and it is one of the few songs in which Ian Curtis played guitar (albeit somewhat minimally). <a href="http://www.last.fm/music/Joy+Division/_/Love+Will+Tear+Us+Apart">Read more on Last.fm</a>.',
                    'song_id' => 270,
                    'created_at' => '2018-04-28 12:24:25',
                    'updated_at' => '2018-04-28 12:24:25',
                ),
                180 => 
                array (
                    'name' => 'summary',
                    'value' => '"Gold Digger" is a song recorded by American rapper Kanye West featuring guest vocals by Jamie Foxx. Released as the second single from West\'s second album, Late Registration, "Gold Digger" peaked at number one on the US Billboard Hot 100 on September 6, 2005, becoming West\'s and Foxx\'s second number one single. Co-produced with Jon Brion, the song contains an interpolation of Ray Charles\' "I Got a Woman" by Foxx.

The single broke a record for the most digital downloads in a week <a href="http://www.last.fm/music/Kanye+West/_/Gold+Digger">Read more on Last.fm</a>.',
                    'song_id' => 275,
                    'created_at' => '2018-04-28 12:24:32',
                    'updated_at' => '2018-04-28 12:24:32',
                ),
                181 => 
                array (
                    'name' => 'summary',
                    'value' => 'Vlad the Impaler was released as a free download on Kasabian\'s website for a period of 4 days beginning March 31st 2009.

It is the first release from the bands forthcoming album West Ryder Pauper Lunatic Asylum. However, the album\'s first official physical single was the track "Fire", released June 1st 2009.

Pizzorno told the NME: "I knew the moment I wrote the riff it was going to be massive." He added: "I like that Tom and my voices swap over." (Source Vlad The Impaler Songfacts). <a href="http://www.last.fm/music/Kasabian/_/Vlad+the+Impaler">Read more on Last.fm</a>.',
                    'song_id' => 276,
                    'created_at' => '2018-04-28 12:24:34',
                    'updated_at' => '2018-04-28 12:24:34',
                ),
                182 => 
                array (
                    'name' => 'summary',
                    'value' => 'According to the Everybody\'s Changing Songfacts, Keane was a struggling band without a record deal when Simon Williams from the Indie label Fierce Panda Records spotted them at a gig and signed them. This was released as their first single, and it drew lots of attention from major labels. Island Records won the bidding war and signed the band. <a href="http://www.last.fm/music/Keane/_/Everybody%27s+Changing">Read more on Last.fm</a>.',
                    'song_id' => 278,
                    'created_at' => '2018-04-28 12:24:37',
                    'updated_at' => '2018-04-28 12:24:37',
                ),
                183 => 
                array (
                    'name' => 'summary',
                'value' => '"Somewhere Only We Know" is a song composed by English alternative rock band, Keane. It is the opening track on their debut studio album, "Hopes and Fears" (2004). It has been covered by several artists, including in 2013 by Lily Allen: her cover version was used as the soundtrack to the Christmas advertising campaign for the UK department store, John Lewis, and reached number 1 in the UK charts.

Contrary to popular belief, "Somewhere Only We Know" is most likely not about lovers. <a href="http://www.last.fm/music/Keane/_/Somewhere+Only+We+Know">Read more on Last.fm</a>.',
                    'song_id' => 279,
                    'created_at' => '2018-04-28 12:24:38',
                    'updated_at' => '2018-04-28 12:24:38',
                ),
                184 => 
                array (
                    'name' => 'summary',
                    'value' => 'According to Homer this song is a pop music footnote...he didn\'t say stop.

The song was written about Sharona Alperin, who was dating the leader of the band. She is now a real estate broker in Bel Air, CA.

The track gained some attention in 2005 when it appeared on the playlist of U.S. President George W. Bush\'s iPod. <a href="http://www.last.fm/music/The+Knack/_/My+Sharona">Read more on Last.fm</a>.',
                    'song_id' => 280,
                    'created_at' => '2018-04-28 12:24:40',
                    'updated_at' => '2018-04-28 12:24:40',
                ),
                185 => 
                array (
                    'name' => 'summary',
                    'value' => '"Celebration" is a song released in 1980 by Kool & the Gang from their album Celebrate!. It reached number one on the Billboard Hot 100 chart on February 7, 1981 and held that position until February 20, 1981. Late in 1980, the song had also reached number one on both the Billboard Dance and R&B charts. The song dominated the radio for nearly the entire year, and is still heard today at weddings and parties. It was also an international hit, reaching number 7 in the UK <a href="http://www.last.fm/music/Kool+&+The+Gang/_/Celebration">Read more on Last.fm</a>.',
                    'song_id' => 281,
                    'created_at' => '2018-04-28 12:24:41',
                    'updated_at' => '2018-04-28 12:24:41',
                ),
                186 => 
                array (
                    'name' => 'summary',
                'value' => '"Hush" by Kula Shaker was used in the Korean romantic comedy, "The 1st Shop of Coffee Prince" in episode 4 (titled "Fourth Cup"), airing on July 10, 2007. The track runs from video point 00:44:27 to 00:47:00. As of January 2011, the episode may be seen online at "Drama Fever" (or at the Drama Fever selections available on Hulu, for those in North America). 

The scene is a challenge game of 2-on-1 basketball on a local playground (park) court in Hongdae, Seoul, South Korea. <a href="http://www.last.fm/music/Kula+Shaker/_/Hush">Read more on Last.fm</a>.',
                    'song_id' => 282,
                    'created_at' => '2018-04-28 12:24:42',
                    'updated_at' => '2018-04-28 12:24:42',
                ),
                187 => 
                array (
                    'name' => 'summary',
                'value' => '"Bulletproof" went to #1 in the UK, and also topped the U.S. Hot Dance Club Play charts in the Summer of 2009. Singer Elly Jackson explained this song to the BBC Newsbeat program: "For me Bulletproof is just about looking at a situation that\'s usually a reoccurring one. It could be to do with anything in your life - whatever you want it to be about." (Source Bulletproof Songfacts). <a href="http://www.last.fm/music/La+Roux/_/Bulletproof">Read more on Last.fm</a>.',
                    'song_id' => 284,
                    'created_at' => '2018-04-28 12:24:45',
                    'updated_at' => '2018-04-28 12:24:45',
                ),
                188 => 
                array (
                    'name' => 'summary',
                    'value' => 'This song is the lead single from her second studio release The Fame Monster.

The track was produced by RedOne and was inspired by the \'Love Monster\' that she had faced while touring through the previous year. GaGa was quoted saying \'It\'s a song about being in love with your best friend.\'

According to the Bad Romance Songfacts, when this reached #1 in the UK, Lady Gaga became the first solo female artist to have three chart-toppers in a calendar year. <a href="http://www.last.fm/music/Lady+Gaga/_/Bad+Romance">Read more on Last.fm</a>.',
                    'song_id' => 285,
                    'created_at' => '2018-04-28 12:24:47',
                    'updated_at' => '2018-04-28 12:24:47',
                ),
                189 => 
                array (
                    'name' => 'summary',
                    'value' => '"Born This Way" is a song by American recording artist Lady Gaga, from her second studio album of the same name. Written and produced by Gaga, Fernando Garibay, Jeppe Laursen and DJ White Shadow, it was developed while Gaga was on the road with The Monster Ball Tour. Inspired by the 1990s empowering music for women and the gay community, Gaga explained that "Born This Way" was her freedom song. She had sung part of the chorus at the 2010 MTV Video Music Awards in 2010 and announced the song as the lead single from the album <a href="http://www.last.fm/music/Lady+Gaga/_/Born+This+Way">Read more on Last.fm</a>.',
                    'song_id' => 286,
                    'created_at' => '2018-04-28 12:24:48',
                    'updated_at' => '2018-04-28 12:24:48',
                ),
                190 => 
                array (
                    'name' => 'summary',
                    'value' => '"Judas" is a song by Lady Gaga from her second full-length album, "Born This Way". The song title was revealed through Vogue magazine. "Judas" was the second single from the album. The song was registered on Gaga\'s BMI on March 18, 2011. Gaga announced via Twitter that she will announce the release date during the 41st Transmission Gagavision on Tuesday, April 5, 2011. She officially anounced that Judas would be released on the Easter Week, April 19th <a href="http://www.last.fm/music/Lady+Gaga/_/Judas">Read more on Last.fm</a>.',
                    'song_id' => 287,
                    'created_at' => '2018-04-28 12:24:50',
                    'updated_at' => '2018-04-28 12:24:50',
                ),
                191 => 
                array (
                    'name' => 'summary',
                    'value' => '"Poker Face" is an electropop song by American pop singer-songwriter Lady Gaga from her debut album, The Fame. Produced by RedOne, it was released as the album\'s second single in late 2008 for some markets and in early 2009 for the rest of the world. The song is an uptempo dance song following in the footsteps of her previous single "Just Dance" but has a darker musical tone. The main idea behind the song is bisexuality and was a tribute by Gaga to her rock \'n\' roll boyfriends. Lyrically "Poker Face" is about sex and gambling. <a href="http://www.last.fm/music/Lady+Gaga/_/Poker+Face">Read more on Last.fm</a>.',
                    'song_id' => 288,
                    'created_at' => '2018-04-28 12:24:51',
                    'updated_at' => '2018-04-28 12:24:51',
                ),
                192 => 
                array (
                    'name' => 'summary',
                'value' => '"Telephone" is a song by American recording artist Lady Gaga from her second studio album The Fame Monster, featuring American R&B singer Beyoncé Knowles. Gaga originally wrote "Telephone" for Britney Spears; however, plans did not go through, and Gaga recorded the song herself, with Beyoncé as the featured vocalist. The main inspiration behind the song was Gaga\'s fear of suffocation. The lyrics portray the singer as preferring the dance floor, rather than answer her lover\'s phone calls. <a href="http://www.last.fm/music/Lady+Gaga/_/Telephone+(feat.+Beyonc%C3%A9)">Read more on Last.fm</a>.',
                    'song_id' => 289,
                    'created_at' => '2018-04-28 12:24:52',
                    'updated_at' => '2018-04-28 12:24:52',
                ),
                193 => 
                array (
                    'name' => 'summary',
                'value' => '"Kashmir" is a song by the English rock band Led Zeppelin from their sixth album Physical Graffiti (1975). It was written by Jimmy Page and Robert Plant (with contributions from John Bonham) over a period of three years, with the lyrics dating back to 1973.

"Kashmir" is considered to be one of Led Zeppelin\'s most successful songs; all four band members have agreed that it is to date one of their best musical achievements.

John Paul Jones suggested that it showcases all of the elements that made up the Led Zeppelin sound. <a href="http://www.last.fm/music/Led+Zeppelin/_/Kashmir">Read more on Last.fm</a>.',
                    'song_id' => 290,
                    'created_at' => '2018-04-28 12:24:54',
                    'updated_at' => '2018-04-28 12:24:54',
                ),
                194 => 
                array (
                    'name' => 'summary',
                    'value' => '"Over the Hills and Far Away" is the third track from Led Zeppelin\'s 1973 album Houses of the Holy.

Jimmy Page and Robert Plant originally constructed the song in 1970 at Bron-Yr-Aur, a small cottage in Wales where they stayed after completing a gruelling North American concert tour.

Page plays a six-string acoustic guitar introduction with a melody reminiscent of "White Summer". Page repeats the theme with 12-string acoustic guitar in unison.
<a href="http://www.last.fm/music/Led+Zeppelin/_/Over+the+Hills+and+Far+Away">Read more on Last.fm</a>.',
                    'song_id' => 291,
                    'created_at' => '2018-04-28 12:24:55',
                    'updated_at' => '2018-04-28 12:24:55',
                ),
                195 => 
                array (
                    'name' => 'summary',
                'value' => 'According to the Rock and Roll Songfacts, as the title suggests, the song is based on one of the most popular structures in Rock And Roll; namely, the 12 bar blues progression (in A). The phrase "Rock and Roll" was a term Blues musicians used, which meant sex.
<a href="http://www.last.fm/music/Led+Zeppelin/_/Rock+and+Roll">Read more on Last.fm</a>.',
                    'song_id' => 292,
                    'created_at' => '2018-04-28 12:24:56',
                    'updated_at' => '2018-04-28 12:24:56',
                ),
                196 => 
                array (
                    'name' => 'summary',
                    'value' => '"When the Levee Breaks" is a blues song written and first recorded by husband and wife Kansas Joe McCoy and Memphis Minnie in 1929. The song is in reaction to the upheaval caused by the Great Mississippi Flood of 1927. According to the When The Levee Breaks Songfacts, African-American plantation workers were forced to work on the levee at gunpoint, piling sandbags to save the neighboring towns. Hence the lyrics, "I works on the levee, mama both night and day, I works so hard, to keep the water away."  <a href="http://www.last.fm/music/Led+Zeppelin/_/When+the+Levee+Breaks">Read more on Last.fm</a>.',
                    'song_id' => 293,
                    'created_at' => '2018-04-28 12:24:58',
                    'updated_at' => '2018-04-28 12:24:58',
                ),
                197 => 
                array (
                    'name' => 'summary',
                    'value' => 'Smile is a song by British recording artist Lily Allen from her debut studio album, Alright, Still. Written by Allen, Iyiola Babalola and Darren Lewis in 2004. It samples The Soul Brothers\' Free Soul, the song was released as the lead mainstream single of the album on 3 July 2006. After signing a contract deal with Regal Recordings and gaining popularity on the social network of MySpace with demo songs, Allen released a limited edition of LDN to promote her work and afterwards announced the release of Smile on 3 July 2006. <a href="http://www.last.fm/music/Lily+Allen/_/Smile">Read more on Last.fm</a>.',
                    'song_id' => 298,
                    'created_at' => '2018-04-28 12:25:05',
                    'updated_at' => '2018-04-28 12:25:05',
                ),
                198 => 
                array (
                    'name' => 'summary',
                    'value' => 'The Fear is the lead single from Lily Allen\'s second album It\'s Not Me, It\'s You. The single was initially released as a promo on December 1st, 2008 and was released via all formats on January 23rd, 2009. The 12 track album came out on  February 9th, 2009.

The song was originally posted on Allen\'s MySpace page in 2008 under the working demo title I Don\'t Know. It appears to be the favourite of the demos leaked, with over 48,000 plays on Last.fm and counting. <a href="http://www.last.fm/music/Lily+Allen/_/The+Fear">Read more on Last.fm</a>.',
                    'song_id' => 299,
                    'created_at' => '2018-04-28 12:25:06',
                    'updated_at' => '2018-04-28 12:25:06',
                ),
                199 => 
                array (
                    'name' => 'summary',
                    'value' => 'A song written by Lou Reed in 1972. Its fame was given a boost in the 1990s when it was featured in the 1996 film Trainspotting, and after its release as a charity single in 1997.

The song was originally featured on the 1972 album Transformer. The song\'s lyrics are often considered to suggest simple, conventional romantic devotion, possibly alluding to Reed’s relationship with Bettye Kronstadt (soon to become his first wife) and Reed’s own conflicts with his sexuality, drug use and ego. <a href="http://www.last.fm/music/Lou+Reed/_/Perfect+Day">Read more on Last.fm</a>.',
                    'song_id' => 301,
                    'created_at' => '2018-04-28 12:25:09',
                    'updated_at' => '2018-04-28 12:25:09',
                ),
                200 => 
                array (
                    'name' => 'summary',
                    'value' => '"Satellite of Love" is one of Lou Reed\'s best-known songs from his solo career. It is the second single from his 1972 album Transformer. At the time of its release, it achieved minor chart success, though it later became a staple of his concerts and compilation albums.

"Satellite of Love" first started off as a song that Reed originally composed in 1970 while he was still a member of The Velvet Underground. In a 2005 interview with Velvet Underground member Doug Yule <a href="http://www.last.fm/music/Lou+Reed/_/Satellite+of+Love">Read more on Last.fm</a>.',
                    'song_id' => 302,
                    'created_at' => '2018-04-28 12:25:11',
                    'updated_at' => '2018-04-28 12:25:11',
                ),
                201 => 
                array (
                    'name' => 'summary',
                    'value' => '"Walk on the Wild Side" is a Lou Reed song from his 1972 second solo album Transformer. It was produced by David Bowie. The song received wide radio coverage, despite its touching on taboo topics such as transsexuality, drugs, male prostitutes and oral sex. In the United States, RCA released an edited version of the song as a single which eliminated the song\'s reference to oral sex.
The lyrics, describing a series of individuals and their journeys to New York City <a href="http://www.last.fm/music/Lou+Reed/_/Walk+on+the+Wild+Side">Read more on Last.fm</a>.',
                    'song_id' => 303,
                    'created_at' => '2018-04-28 12:25:12',
                    'updated_at' => '2018-04-28 12:25:12',
                ),
                202 => 
                array (
                    'name' => 'summary',
                'value' => 'Free Bird is a song by the American rock band Lynyrd Skynyrd. It was first featured on the band\'s debut album (pronounced \'lĕh-\'nérd \'skin-\'nérd) in 1973, and has been included on subsequent albums released by the band.

Released as a single in late 1974, "Free Bird" became the band\'s second Top 40 hit on the Billboard Hot 100 chart in early 1975, where it peaked at #19. A live version of the song also reached the Billboard Hot 100 chart in 1977, peaking at #38. <a href="http://www.last.fm/music/Lynyrd+Skynyrd/_/Free+Bird">Read more on Last.fm</a>.',
                    'song_id' => 304,
                    'created_at' => '2018-04-28 12:25:13',
                    'updated_at' => '2018-04-28 12:25:13',
                ),
                203 => 
                array (
                    'name' => 'summary',
                    'value' => 'Creation and Recording:
At a band practice shortly after bassist Ed King had switched to guitar, King heard fellow guitarist Gary Rossington playing a guitar riff that inspired him (in fact, this riff is still heard in the final version of the song and is played during the verses as a counterpoint to the main D-C+9-G chord progression). In interviews, Ed King has said that, during the night following the practice session, the chords and two main guitar solos came to him in a dream, note for note. <a href="http://www.last.fm/music/Lynyrd+Skynyrd/_/Sweet+Home+Alabama">Read more on Last.fm</a>.',
                    'song_id' => 305,
                    'created_at' => '2018-04-28 12:25:15',
                    'updated_at' => '2018-04-28 12:25:15',
                ),
                204 => 
                array (
                    'name' => 'summary',
                    'value' => '"It Must Be Love" is a song originally written and recorded in 1971 by Labi Siffre. However, the best known version was recorded by ska/pop band Madness in 1981.

The song was featured in the 1989 movie, The Tall Guy starring Jeff Goldblum, Rowan Atkinson and Emma Thompson. Suggs also appeared in the movie whilst singing this song. The single was reissued to tie in with the film but was not a hit on that occasion.

A version with altered lyrics was used to advertise Midland Bank in 1994 <a href="http://www.last.fm/music/Madness/_/It+Must+Be+Love">Read more on Last.fm</a>.',
                    'song_id' => 308,
                    'created_at' => '2018-04-28 12:25:20',
                    'updated_at' => '2018-04-28 12:25:20',
                ),
                205 => 
                array (
                    'name' => 'summary',
                    'value' => '"Borderline" is a song by American singer-songwriter Madonna from her self-titled debut album. It was released on February 15, 1984 as the fourth single by Sire Records. Written and composed by producer Reggie Lucas, the song received remix treatment from Madonna\'s then boyfriend John "Jellybean" Benitez. She used a refined and expressive voice for the song. Its lyrics dealt with the subject of a love that is never fulfilled and was written as a rebellion against male chauvinism. <a href="http://www.last.fm/music/Madonna/_/Borderline">Read more on Last.fm</a>.',
                    'song_id' => 310,
                    'created_at' => '2018-04-28 12:25:23',
                    'updated_at' => '2018-04-28 12:25:23',
                ),
                206 => 
                array (
                    'name' => 'summary',
                    'value' => '"Like a Virgin" is the first single by American singer Madonna from the album of the same name and was released on November 6, 1984 by Sire Records. It also appears in a truncated and slightly remixed form on the 1990 greatest hits compilation The Immaculate Collection.

Background

Madonna\'s performance of this song at the 1984 MTV Video Music Awards made music history when she appeared in a bridal gown atop a giant wedding cake. She also notably <a href="http://www.last.fm/music/Madonna/_/Like+a+Virgin">Read more on Last.fm</a>.',
                    'song_id' => 311,
                    'created_at' => '2018-04-28 12:25:25',
                    'updated_at' => '2018-04-28 12:25:25',
                ),
                207 => 
                array (
                    'name' => 'summary',
                    'value' => '"Like a Prayer" is the first single by American singer-songwriter Madonna from her 4th studio album, Like a Prayer. It was released on February 28, 1989 by Sire Records. A power pop song by Madonna, it notably features a gospel choir. In Japan and Australia, a mini-album titled Remixed Prayers was released, which included remixes of the title track and also "Express Yourself". It later appeared remixed on the 1990 compilation album The Immaculate Collection. <a href="http://www.last.fm/music/Madonna/_/Like+a+Prayer">Read more on Last.fm</a>.',
                    'song_id' => 312,
                    'created_at' => '2018-04-28 12:25:27',
                    'updated_at' => '2018-04-28 12:25:27',
                ),
                208 => 
                array (
                    'name' => 'summary',
                    'value' => '"Material Girl" is the second single by singer-songwriter Madonna from her second studio album, Like a Virgin, and was released on January 30, 1985, by Sire Records. It also appears slightly remixed on the 1990 greatest hits compilation The Immaculate Collection and in its original form on the 2009 greatest hits compilation Celebration."

The bassline in the song is reminiscent of The Jacksons\' "Can You Feel It", which appeared on their 1980 album Triumph <a href="http://www.last.fm/music/Madonna/_/Material+Girl">Read more on Last.fm</a>.',
                    'song_id' => 313,
                    'created_at' => '2018-04-28 12:25:29',
                    'updated_at' => '2018-04-28 12:25:29',
                ),
                209 => 
                array (
                    'name' => 'summary',
                    'value' => '"Papa Don\'t Preach" is a dance-pop song by American singer-songwriter Madonna. The song was written by Brian Elliot with additional lyrics by Madonna, and produced by Stephen Bray and Madonna for her third studio album True Blue, released in June 1986. The song also appears remixed on the 1990 compilation album The Immaculate Collection and in its original form on the 2009 compilation album Celebration. The song\'s musical style combines pop and classical rhythms, and its lyrics deal with teenage pregnancy and abortion. <a href="http://www.last.fm/music/Madonna/_/Papa+Don%27t+Preach">Read more on Last.fm</a>.',
                    'song_id' => 314,
                    'created_at' => '2018-04-28 12:25:30',
                    'updated_at' => '2018-04-28 12:25:30',
                ),
                210 => 
                array (
                    'name' => 'summary',
                'value' => '"Vogue" is a song by American singer-songwriter Madonna from her soundtrack album I\'m Breathless (Music from and Inspired by the film Dick Tracy) and was released on March 20, 1990, by Sire Records. Madonna was inspired by vogue dancers and choreographers Jose and Luis Xtravaganza from the Harlem "House Ball" community, the origin of the dance Vogue, and they introduced "Vogueing" to her at the New York City club "Sound Factory". Jose Xtravaganza is featured in the Historic Art Documentary How Do I Look, directed by Wolfgang Busch. <a href="http://www.last.fm/music/Madonna/_/Vogue">Read more on Last.fm</a>.',
                    'song_id' => 315,
                    'created_at' => '2018-04-28 12:25:32',
                    'updated_at' => '2018-04-28 12:25:32',
                ),
                211 => 
                array (
                    'name' => 'summary',
                    'value' => '"The Beautiful People" is the first single off of Marilyn Manson\'s controversial album "Antichrist Superstar", released in 1996. It was the second track, after "Irresponsible Hate Anthem".

Directly inspired by Friedrich Nietzsche, "The Beautiful People" critiques the master-slave morality in capitalistic societies. After "Hate Anthem", which was a look into the character of the Antichrist\'s future in 1997, "The Beautiful People" takes the listener back to his beginnings <a href="http://www.last.fm/music/Marilyn+Manson/_/The+Beautiful+People">Read more on Last.fm</a>.',
                    'song_id' => 318,
                    'created_at' => '2018-04-28 12:25:36',
                    'updated_at' => '2018-04-28 12:25:36',
                ),
                212 => 
                array (
                    'name' => 'summary',
                    'value' => ' <a href="http://www.last.fm/music/Maroon+5/_/Love+Somebody">Read more on Last.fm</a>.',
                    'song_id' => 322,
                    'created_at' => '2018-04-28 12:25:42',
                    'updated_at' => '2018-04-28 12:25:42',
                ),
                213 => 
                array (
                    'name' => 'summary',
                    'value' => 'The Payphone Songfacts reports that the 493,000 units logged by this song in its debut week in the US, broke the record for most digital download sales by a group over a 7 day period. <a href="http://www.last.fm/music/Maroon+5/_/Payphone">Read more on Last.fm</a>.',
                    'song_id' => 323,
                    'created_at' => '2018-04-28 12:25:44',
                    'updated_at' => '2018-04-28 12:25:44',
                ),
                214 => 
                array (
                    'name' => 'summary',
                    'value' => ' <a href="http://www.last.fm/music/Maroon+5/_/Sugar">Read more on Last.fm</a>.',
                    'song_id' => 324,
                    'created_at' => '2018-04-28 12:25:45',
                    'updated_at' => '2018-04-28 12:25:45',
                ),
                215 => 
                array (
                    'name' => 'summary',
                    'value' => '"Sunday Morning" is the fourth single from Maroon 5\'s debut album, Songs About Jane. Released in 2004, the single peaked at #31 in the USA becoming Maroon 5\'s fourth Top 40 single; it also peaked at #27 in the U.K and #7 in Latin America becoming Maroon 5\'s third consecutive Top 10 single.

The video for the song was shot on October 17-18, 2004. It was shot at Abbey Road Studios in London, the same studio at which the Beatles recorded their famous Abbey Road album. <a href="http://www.last.fm/music/Maroon+5/_/Sunday+Morning">Read more on Last.fm</a>.',
                    'song_id' => 325,
                    'created_at' => '2018-04-28 12:25:47',
                    'updated_at' => '2018-04-28 12:25:47',
                ),
                216 => 
                array (
                    'name' => 'summary',
                    'value' => '"I Heard It Through the Grapevine" is a landmark song in the history of Motown Records. Written by Norman Whitfield and Barrett Strong in 1966, the single was first recorded by Smokey Robinson & the Miracles. Released on September 25, 1967 as Soul 35039 by Gladys Knight & the Pips, who recorded the third version of the song, it has since become a signature song, however, for singer Marvin Gaye, who recorded the second version of the song prior to the Pips\' version but released the song after theirs on October 30, 1968 as Tamla 54176. <a href="http://www.last.fm/music/Marvin+Gaye/_/I+Heard+It+Through+the+Grapevine">Read more on Last.fm</a>.',
                    'song_id' => 326,
                    'created_at' => '2018-04-28 12:25:49',
                    'updated_at' => '2018-04-28 12:25:49',
                ),
                217 => 
                array (
                    'name' => 'summary',
                    'value' => '"Enter Sandman" is a song by American metal band Metallica, featured as the opening track and lead single from their eponymous 1991 album. The song was produced by Bob Rock, and the music was written by Kirk Hammett, Lars Ulrich, and James Hetfield. Vocalist and guitarist Hetfield wrote the lyrics, which deal with nightmares.

The single achieved gold certification for more than 500,000 copies shipped in the United States, spurring sales of over 15 million copies for Metallica and propelling Metallica to worldwide popularity. <a href="http://www.last.fm/music/Metallica/_/Enter+Sandman">Read more on Last.fm</a>.',
                    'song_id' => 327,
                    'created_at' => '2018-04-28 12:25:51',
                    'updated_at' => '2018-04-28 12:25:51',
                ),
                218 => 
                array (
                    'name' => 'summary',
                'value' => 'Nothing Else Matters is 8th track off Metallica\'s famous "Metallica" album (referred often to as "the Black Album" due to the cover art). The album has sold over 25 million copies world wide. It was Metallica\'s first, more popular sounding album. The track was composed and written by James Hetfield to his girlfriend whom he missed during long touring sessions. The track became a massive hit instantly after the album was published. Producer for this song is Bob Rock, and Lars Ulrich is a co-writer. <a href="http://www.last.fm/music/Metallica/_/Nothing+Else+Matters">Read more on Last.fm</a>.',
                    'song_id' => 328,
                    'created_at' => '2018-04-28 12:25:53',
                    'updated_at' => '2018-04-28 12:25:53',
                ),
                219 => 
                array (
                    'name' => 'summary',
                    'value' => '"The Unforgiven" is a song by the American heavy metal band Metallica. It was released as the third single from their fifth album Metallica. Though one of the slower tracks on the album, its chord progression is distinctly one of the heavier.

The Unforgiven Songfacts says: On the show Classic Albums: Metallica - The Black Album, James Hetfield explained that the intro was taken from the score of a Western movie, and reversed so it would not be identifiable. <a href="http://www.last.fm/music/Metallica/_/The+Unforgiven">Read more on Last.fm</a>.',
                    'song_id' => 329,
                    'created_at' => '2018-04-28 12:25:54',
                    'updated_at' => '2018-04-28 12:25:54',
                ),
                220 => 
                array (
                    'name' => 'summary',
                    'value' => 'Bad was a 1987 hit recording by American singer Michael Jackson. The song was the second of five Billboard Hot 100 number-one hit singles from the album Bad, and was his seventh number-one single overall. Michael Jackson stated: "\'Bad\' is a song about the street. It\'s about this kid ... who gets to go away to a private school. He comes back to the old neighborhood and his old friends start giving him trouble. He sings, \'I\'m bad, you\'re bad, who\'s bad, who\'s the best?\' He\'s saying when you\'re strong and good, then you\'re bad. <a href="http://www.last.fm/music/Michael+Jackson/_/Bad">Read more on Last.fm</a>.',
                    'song_id' => 330,
                    'created_at' => '2018-04-28 12:25:55',
                    'updated_at' => '2018-04-28 12:25:55',
                ),
                221 => 
                array (
                    'name' => 'summary',
                    'value' => 'Beat It is a hit single from Michael Jackson\'s 1982 album Thriller. Beat It won Jackson two Grammy Awards for Record of the Year and Best Male Rock Vocal Performance. It was also nominated for Song of the Year along with Jackson\'s Billie Jean. The song was ranked #337 on Rolling Stone Magazine\'s list of the 500 Greatest Songs of All Time. 

Beat It is also notable for its guitar solo, a guest performance by Eddie Van Halen. In a reader\'s poll made by Guitar World magazine the solo was voted as the 67th greatest guitar solo of all time. <a href="http://www.last.fm/music/Michael+Jackson/_/Beat+It">Read more on Last.fm</a>.',
                    'song_id' => 331,
                    'created_at' => '2018-04-28 12:25:57',
                    'updated_at' => '2018-04-28 12:25:57',
                ),
                222 => 
                array (
                    'name' => 'summary',
                    'value' => 'Billie Jean is a 1983 hit single from Michael Jackson\'s Thriller album. A number-one hit on the Billboard Hot 100, the song was also the number-one R&B single for nine weeks in the United States and is one of Jackson\'s most critically acclaimed songs. It was voted best single of the year in The Village Voice Jazz & Pop critics\' poll, and received two Grammy Awards in 1984 in the categories Best Male R&B Vocal Performance and Best New Rhythm & Blues Song. <a href="http://www.last.fm/music/Michael+Jackson/_/Billie+Jean">Read more on Last.fm</a>.',
                    'song_id' => 332,
                    'created_at' => '2018-04-28 12:25:58',
                    'updated_at' => '2018-04-28 12:25:58',
                ),
                223 => 
                array (
                    'name' => 'summary',
                    'value' => '"Black or White" is the lead single from Michael Jackson\'s Dangerous album. It was released in November, 11 1991. "Black or White" is a mix of rock, and dance-pop.Written, composed, and arranged by Jackson with the rap lyrics by Bill Bottrell, it is a song that promotes racial harmony. The song\'s introduction and main riff are performed by guitarist Slash and Bill Bottrell.

The song peaked at number one on the US Billboard Hot 100, the UK Singles Chart and in 20 other countries. <a href="http://www.last.fm/music/Michael+Jackson/_/Black+or+White">Read more on Last.fm</a>.',
                    'song_id' => 333,
                    'created_at' => '2018-04-28 12:26:00',
                    'updated_at' => '2018-04-28 12:26:00',
                ),
                224 => 
                array (
                    'name' => 'summary',
                    'value' => '"Dirty Diana" is a song by Michael Jackson from his 1987 album \'Bad\'. It was the fifth and last number one hit from the album on the Billboard Hot 100, and featured a hard rock sound similar to that of Beat It from Jackson\'s \'Thriller\' album. The song features Steve Stevens on guitar. There was much speculation surrounding who the track was about. Jackson later said himself the song is about groupies. <a href="http://www.last.fm/music/Michael+Jackson/_/Dirty+Diana">Read more on Last.fm</a>.',
                    'song_id' => 334,
                    'created_at' => '2018-04-28 12:26:01',
                    'updated_at' => '2018-04-28 12:26:01',
                ),
                225 => 
                array (
                    'name' => 'summary',
                    'value' => 'Don\'t Stop \'til You Get Enough was the first hit single from Michael Jackson’s 1979 Off the Wall album, his first album with Epic Records and the first solo record over which he had creative control. Released July 28, 1979, the song was written and composed by Jackson himself in late 1978, with Quincy Jones producing.

On February 20, 2006, "Don’t Stop \'til You Get Enough" was re-released as part of the Visionary: The Video Singles, peaking at #17 in the UK. <a href="http://www.last.fm/music/Michael+Jackson/_/Don%27t+Stop+%27Til+You+Get+Enough">Read more on Last.fm</a>.',
                    'song_id' => 335,
                    'created_at' => '2018-04-28 12:26:03',
                    'updated_at' => '2018-04-28 12:26:03',
                ),
                226 => 
                array (
                    'name' => 'summary',
                'value' => '"Man In The Mirror" is one of Michael Jackson\'s most highly acclaimed songs written by Glen Ballard and Siedah Garrett (Who provided some of the track\'s background vocals). Released as a single in the spring of 1988, it was nominated for Record of the Year at the Grammy Awards. The song garnered massive airplay and topped the Billboard Hot 100 for two weeks.

According to the Man In The Mirror Songfacts, it was the first song Garrett had ever written - not a bad one to start off with! <a href="http://www.last.fm/music/Michael+Jackson/_/Man+in+the+Mirror">Read more on Last.fm</a>.',
                    'song_id' => 336,
                    'created_at' => '2018-04-28 12:26:04',
                    'updated_at' => '2018-04-28 12:26:04',
                ),
                227 => 
                array (
                    'name' => 'summary',
                    'value' => ' <a href="http://www.last.fm/music/Mr.+Big/_/To+Be+With+You">Read more on Last.fm</a>.',
                    'song_id' => 343,
                    'created_at' => '2018-04-28 12:26:14',
                    'updated_at' => '2018-04-28 12:26:14',
                ),
                228 => 
                array (
                    'name' => 'summary',
                    'value' => '"Blue Monday" is a dance pop song recorded and originally released as a single in 1983 by British band New Order, and later remixed for further releases in 1988 and 1995.

At nearly 7 and a half minutes in length, "Blue Monday" is one of the longest tracks ever to chart in the UK. It is recognised as the biggest selling 12" single of all time, but as Factory Records were not members of the British Phonographic Industry association, it was not eligible for an official gold disc. <a href="http://www.last.fm/music/New+Order/_/Blue+Monday">Read more on Last.fm</a>.',
                    'song_id' => 348,
                    'created_at' => '2018-04-28 12:26:22',
                    'updated_at' => '2018-04-28 12:26:22',
                ),
                229 => 
                array (
                    'name' => 'summary',
                'value' => '"Come as You Are" is a song by the American grunge band Nirvana, written by frontman Kurt Cobain. It is the third song on (and second single from) the band\'s second album Nevermind (1991). It was the album\'s second most successful single, and the band\'s second American Top 40 hit in 1992. After its release as a single in March 1992, "Come as You Are" peaked at number 32 on the Billboard Hot 100; it was the band\'s second and last American Top 40 hit. <a href="http://www.last.fm/music/Nirvana/_/Come+as+You+Are">Read more on Last.fm</a>.',
                    'song_id' => 349,
                    'created_at' => '2018-04-28 12:26:23',
                    'updated_at' => '2018-04-28 12:26:23',
                ),
                230 => 
                array (
                    'name' => 'summary',
                    'value' => '"Heart-Shaped Box" is a song by the American grunge band Nirvana, written by vocalist and guitarist Kurt Cobain released as the first single from the group\'s third studio album In Utero in 1993. It was one of two songs from the album mixed by Scott Litt in order to augment the original production by producer Steve Albini. While Nirvana\'s label DGC Records did not release a physical single for sale in the United States, "Heart-Shaped Box" received much American radio airplay, reaching number one on the Billboard Modern Rock Tracks chart. <a href="http://www.last.fm/music/Nirvana/_/Heart-Shaped+Box">Read more on Last.fm</a>.',
                    'song_id' => 350,
                    'created_at' => '2018-04-28 12:26:24',
                    'updated_at' => '2018-04-28 12:26:24',
                ),
                231 => 
                array (
                    'name' => 'summary',
                    'value' => '"Lithium" is a song by the American grunge band Nirvana, written by frontman Kurt Cobain. The name of the song is often attributed to the usage of lithium salts as mood stabilizers. Because of this the lyrics are often interpreted as describing bipolar disorder. Cobain is said to have had bipolar disorder, which may have led to the writing of the song "Lithium". Still, there is much disagreement about the exact meaning and interpretation of it.

In the Nevermind press kit <a href="http://www.last.fm/music/Nirvana/_/Lithium">Read more on Last.fm</a>.',
                    'song_id' => 351,
                    'created_at' => '2018-04-28 12:26:26',
                    'updated_at' => '2018-04-28 12:26:26',
                ),
                232 => 
                array (
                    'name' => 'summary',
                    'value' => 'Rape Me is a song by the American grunge band Nirvana. The song was released as the second single from Nirvana\'s 1993 album In Utero, packaged as a double a-side along with "All Apologies."

"Rape Me" was written by Nirvana singer/guitarist Kurt Cobain in an apartment in Los Angeles, California in May 1991, around the time the band\'s second album, Nevermind (1991), was being mixed. It was first performed live on June 18, 1991, at the Catalyst in Santa Cruz <a href="http://www.last.fm/music/Nirvana/_/Rape+Me">Read more on Last.fm</a>.',
                    'song_id' => 352,
                    'created_at' => '2018-04-28 12:26:27',
                    'updated_at' => '2018-04-28 12:26:27',
                ),
                233 => 
                array (
                    'name' => 'summary',
                    'value' => 'Frequently cited as one of the most important songs in the history of rock music, Nirvana\'s 1991 single "Smells Like Teen Spirit" almost single handedly popularized alternative rock and simultaneously brought the era of hair metal and pop metal to an end. 

Often cited as an anthem for Generation X, the chord progression for this song is strikingly similar to that of More Than a Feeling by Boston, a fact which Kurt Cobain openly acknowledged. 

Kurt <a href="http://www.last.fm/music/Nirvana/_/Smells+Like+Teen+Spirit">Read more on Last.fm</a>.',
                    'song_id' => 353,
                    'created_at' => '2018-04-28 12:26:29',
                    'updated_at' => '2018-04-28 12:26:29',
                ),
                234 => 
                array (
                    'name' => 'summary',
                'value' => '"Champagne Supernova" is a song by British rock band Oasis, written by guitarist Noel Gallagher. The seven-minute anthem is the closing track on the record-breaking album (What\'s the Story) Morning Glory?. Only though released as a single in Australia, France and the United States, a music video directed by Nigel Dick was released to the music channels and, as a result, the song received much television and radio airplay. The song achieved U.S. success, becoming the band\'s second #1 single on the Modern Rock Tracks chart. <a href="http://www.last.fm/music/Oasis/_/Champagne+Supernova">Read more on Last.fm</a>.',
                    'song_id' => 355,
                    'created_at' => '2018-04-28 12:26:32',
                    'updated_at' => '2018-04-28 12:26:32',
                ),
                235 => 
                array (
                    'name' => 'summary',
                'value' => 'D\'You Know What I Mean?" is a song by the English rock band Oasis. Written by Noel Gallagher, it was released as the first single from their third album Be Here Now (1997).
The song reached number one in the UK Singles Chart, the third Oasis song to do so.[1] The song also claimed the number one position in Ireland, Finland, and Spain as well as reaching the Top 5 in Canada, Norway, Sweden, and New Zealand. It sold 162,000 copies in its first day in the shops and 370,000 by the end of the first week. <a href="http://www.last.fm/music/Oasis/_/D%27You+Know+What+I+Mean">Read more on Last.fm</a>.',
                    'song_id' => 357,
                    'created_at' => '2018-04-28 12:26:35',
                    'updated_at' => '2018-04-28 12:26:35',
                ),
                236 => 
                array (
                    'name' => 'summary',
                    'value' => 'Don\'t Go Away is a song by English rock band Oasis from their third album, written by the band\'s lead guitarist Noel Gallagher. The song was released as a single only in Japan, peaking at number 48 on the Oricon chart. 
It was also a success in the United States, where it hit #5 on the Billboard Hot Modern Rock Tracks chart in late 1997. It was the band\'s last major hit in the United States until 2008\'s The Shock of The Lightning.

The song, according to Noel <a href="http://www.last.fm/music/Oasis/_/Don%27t+Go+Away">Read more on Last.fm</a>.',
                    'song_id' => 358,
                    'created_at' => '2018-04-28 12:26:36',
                    'updated_at' => '2018-04-28 12:26:36',
                ),
                237 => 
                array (
                    'name' => 'summary',
                'value' => '"Don\'t Look Back in Anger" is a song by the British rock band Oasis, written by the band\'s guitarist, Noel Gallagher. Released as the fourth single from their hit second album (What\'s the Story) Morning Glory?, the song became the band\'s second single to reach #1 in the United Kingdom charts, where it also went platinum. "Don\'t Look Back in Anger" was also the first Oasis single to feature Noel on lead vocals instead of his brother, Liam Gallagher. <a href="http://www.last.fm/music/Oasis/_/Don%27t+Look+Back+in+Anger">Read more on Last.fm</a>.',
                    'song_id' => 359,
                    'created_at' => '2018-04-28 12:26:38',
                    'updated_at' => '2018-04-28 12:26:38',
                ),
                238 => 
                array (
                    'name' => 'summary',
                    'value' => '"Go Let It Out" is a song by English rock band Oasis, written by the band\'s lead guitarist Noel Gallagher. It was released in 2000 as the first single from the fourth studio album Standing on the Shoulder of Giants. The song peaked at #1 in the UK charts where it went Silver.

"Go Let It Out" is included on Oasis\' compilation album Stop the Clocks, and is the only song from Standing on the Shoulder of Giants on that album. <a href="http://www.last.fm/music/Oasis/_/Go+Let+It+Out">Read more on Last.fm</a>.',
                    'song_id' => 360,
                    'created_at' => '2018-04-28 12:26:39',
                    'updated_at' => '2018-04-28 12:26:39',
                ),
                239 => 
                array (
                    'name' => 'summary',
                    'value' => '"Half the World Away" is a song by British Rock band Oasis. It is well known as the theme tune to the popular BBC sitcom The Royle Family.
The song was written by Oasis\' lead guitarist Noel Gallagher, who also provides lead vocals, taking over from Oasis\' regular lead singer, Liam Gallagher. The song is a slow acoustic tune with plodding keyboards, and the lyric - much like "Rock \'n\' Roll Star", one of Oasis\' most famous songs - expresses a desire to leave a stagnant life in a boring city. <a href="http://www.last.fm/music/Oasis/_/Half+the+World+Away">Read more on Last.fm</a>.',
                    'song_id' => 361,
                    'created_at' => '2018-04-28 12:26:41',
                    'updated_at' => '2018-04-28 12:26:41',
                ),
                240 => 
                array (
                    'name' => 'summary',
                'value' => '"Little by Little" is a song by British rock band Oasis, first released as the sixth track on their fifth studio album Heathen Chemistry. In September 2002, it was released with "She Is Love" as the first (and, so far, only) double A-sided single by the band, peaking at #2 in the UK Singles Chart (see 2002 in British music). Noel Gallagher provides lead vocals on both tracks, which he also wrote.

"Little by Little" was perhaps the most controversial song on the album <a href="http://www.last.fm/music/Oasis/_/Little+by+Little">Read more on Last.fm</a>.',
                    'song_id' => 363,
                    'created_at' => '2018-04-28 12:26:43',
                    'updated_at' => '2018-04-28 12:26:43',
                ),
                241 => 
                array (
                    'name' => 'summary',
                    'value' => '"Live Forever" is a song by British rock group Oasis, written by the band\'s guitarist and chief songwriter Noel Gallagher. It was released as the third single from their debut album Definitely Maybe on 8 August 1994, just prior to that album\'s release.

Gallagher wrote the song in 1991, before he joined Oasis. Inspired by The Rolling Stones\' "Shine a Light," "Live Forever" features a basic song structure and lyrics with an optimistic outlook that contrasted with the attitude of the grunge bands popular at the time. <a href="http://www.last.fm/music/Oasis/_/Live+Forever">Read more on Last.fm</a>.',
                    'song_id' => 364,
                    'created_at' => '2018-04-28 12:26:45',
                    'updated_at' => '2018-04-28 12:26:45',
                ),
                242 => 
                array (
                    'name' => 'summary',
                    'value' => '"Slide Away" is a song by English rock band Oasis, written by lead guitarist Noel Gallagher. It features on their debut album Definitely Maybe, on the "Whatever" single, On the Champagne Supernova single and on their best-of album, Stop the Clocks.
Arguably the first Oasis love song, Noel wrote it about an imaginary teenage love affair. Both of the Gallagher brothers claim that the song should be played more often at concerts, and although it is rarely played, it remains a fan favourite. <a href="http://www.last.fm/music/Oasis/_/Slide+Away">Read more on Last.fm</a>.',
                    'song_id' => 367,
                    'created_at' => '2018-04-28 12:26:49',
                    'updated_at' => '2018-04-28 12:26:49',
                ),
                243 => 
                array (
                    'name' => 'summary',
                    'value' => '"Stand By Me" is a song by Oasis, written by lead guitarist, Noel Gallagher. 
It was the second single to be released from the band\'s third album, and peaked at number two in the UK charts in September 1997. It was kept from the top-spot by the record breaking Elton John single "Candle in the Wind 1997", re-recorded and released in memory of Diana, Princess of Wales, who had died three weeks before the release of "Stand By Me". Despite this, Stand By Me still went Gold in the UK. <a href="http://www.last.fm/music/Oasis/_/Stand+By+Me">Read more on Last.fm</a>.',
                    'song_id' => 369,
                    'created_at' => '2018-04-28 12:26:52',
                    'updated_at' => '2018-04-28 12:26:52',
                ),
                244 => 
                array (
                    'name' => 'summary',
                'value' => '"Stop Crying Your Heart Out" is a song recorded by Oasis, released as the second single from Heathen Chemistry (the fourth track on the album) on 17 June 2002, peaking at number 2 in the UK charts. It went silver in the UK. The song got to number 76 in the UK again on 17 October 2009.

The song has been featured in other media, such as the film The Butterfly Effect, in which it plays during the final scenes and is the first song heard in the film\'s closing credit roll. <a href="http://www.last.fm/music/Oasis/_/Stop+Crying+Your+Heart+Out">Read more on Last.fm</a>.',
                    'song_id' => 370,
                    'created_at' => '2018-04-28 12:26:54',
                    'updated_at' => '2018-04-28 12:26:54',
                ),
                245 => 
                array (
                    'name' => 'summary',
                    'value' => '"Whatever" was the single between the first two albums; it is based on Noel\'s relationship with his father. According to the Whatever Songfacts, the first line: "I\'m free to be whatever I, whatever I like if it\'s wrong or right it\'s all right," was written by Noel Gallagher about how his dad used to make him work on a building site with him as a teenager. Noel\'s dad tried to force him to become a builder.  <a href="http://www.last.fm/music/Oasis/_/Whatever">Read more on Last.fm</a>.',
                    'song_id' => 371,
                    'created_at' => '2018-04-28 12:26:55',
                    'updated_at' => '2018-04-28 12:26:55',
                ),
                246 => 
                array (
                    'name' => 'summary',
                'value' => '"Wonderwall" is a song by British rock band Oasis, written by the band\'s guitarist and chief songwriter Noel Gallagher. Released as the third single from (What\'s the Story) Morning Glory? in October 1995, "Wonderwall" peaked at number two in the UK Singles Charts and proved to be their American breakthrough, reaching number eight on the Hot 100 and giving them their only top-ten hit in the US . "Wonderwall" is perhaps their most popular song, despite <a href="http://www.last.fm/music/Oasis/_/Wonderwall">Read more on Last.fm</a>.',
                    'song_id' => 372,
                    'created_at' => '2018-04-28 12:26:57',
                    'updated_at' => '2018-04-28 12:26:57',
                ),
                247 => 
                array (
                    'name' => 'summary',
                'value' => '"Pretty Fly (For a White Guy)" is a punk rock song by The Offspring. It is the fourth track from their fifth studio album Americana (1998) and was released as the first single from the album. It achieved significant pop and alternative radio play and popularity, peaking at number 53 on the US charts and at number 5 on the U.S. Billboard Hot Mainstream Rock Tracks. The song reached the charts in over 15 countries and peaked at #1 in nine of these, including Australia and the United Kingdom <a href="http://www.last.fm/music/The+Offspring/_/Pretty+Fly+(For+a+White+Guy)">Read more on Last.fm</a>.',
                    'song_id' => 373,
                    'created_at' => '2018-04-28 12:26:58',
                    'updated_at' => '2018-04-28 12:26:58',
                ),
                248 => 
                array (
                    'name' => 'summary',
                    'value' => '"Story of My Life" is the second single released by One Direction from their third album Midnight Memories.

The song premiered at around 4pm on stations worldwide such as BBC Radio 1 (UK), The Hits Radio (UK), The End 107.9 FM (USA), NRJ Radio (in both France and Sweden), Planet Radio (Germany), Radio Mix (Brazil) and many others. <a href="http://www.last.fm/music/One+Direction/_/Story+of+My+Life">Read more on Last.fm</a>.',
                    'song_id' => 374,
                    'created_at' => '2018-04-28 12:27:00',
                    'updated_at' => '2018-04-28 12:27:00',
                ),
                249 => 
                array (
                    'name' => 'summary',
                    'value' => ' <a href="http://www.last.fm/music/One+Direction/_/What+Makes+You+Beautiful">Read more on Last.fm</a>.',
                    'song_id' => 375,
                    'created_at' => '2018-04-28 12:27:01',
                    'updated_at' => '2018-04-28 12:27:01',
                ),
                250 => 
                array (
                    'name' => 'summary',
                'value' => '"Counting Stars" is a song by American pop rock band OneRepublic from their third studio album, Native (2013). The song was written by lead singer Ryan Tedder, and produced by Tedder and Noel Zancanella. Musically, it is a pop and folk song. It was released as the album\'s third single on June 14, 2013 in Austria, Germany, and Switzerland.

The song has been one of the band\'s most successful singles. It has currently peaked at number three on the Billboard Hot 100 <a href="http://www.last.fm/music/OneRepublic/_/Counting+Stars">Read more on Last.fm</a>.',
                    'song_id' => 376,
                    'created_at' => '2018-04-28 12:27:03',
                    'updated_at' => '2018-04-28 12:27:03',
                ),
                251 => 
                array (
                    'name' => 'summary',
                    'value' => '"Gangnam Style" is a Korean language colloquialism that refers to a luxurious lifestyle associated with the Gangnam district, an affluent and trendy area of Seoul. The music video depicts Psy dancing at various locations in Gangnam. The song\'s theme is about "the perfect girlfriend who knows when to be refined and when to get wild." <a href="http://www.last.fm/music/Psy/_/%EA%B0%95%EB%82%A8%EC%8A%A4%ED%83%80%EC%9D%BC">Read more on Last.fm</a>.',
                    'song_id' => 378,
                    'created_at' => '2018-04-28 12:27:06',
                    'updated_at' => '2018-04-28 12:27:06',
                ),
                252 => 
                array (
                    'name' => 'summary',
                    'value' => 'This song is about the death of Nutini\'s grandfather, as he has stated in live appearances. 
<a href="http://www.last.fm/music/Paolo+Nutini/_/Autumn">Read more on Last.fm</a>.',
                    'song_id' => 386,
                    'created_at' => '2018-04-28 12:27:17',
                    'updated_at' => '2018-04-28 12:27:17',
                ),
                253 => 
                array (
                    'name' => 'summary',
                    'value' => '"Last Request" is a song by Scottish singer/songwriter Paolo Nutini, and his first single from his debut album These Streets. The song was released on 3 July 2006, and peaked at #5 on the UK Singles Chart and #15 on Italian Singles Chart The song\'s lyrics describe a person who knows his relationship is over, but wants to have one last time with them.
It has been featured in episodes of Scrubs, One Tree Hill, Gavin & Stacey and EastEnders <a href="http://www.last.fm/music/Paolo+Nutini/_/Last+Request">Read more on Last.fm</a>.',
                    'song_id' => 390,
                    'created_at' => '2018-04-28 12:27:23',
                    'updated_at' => '2018-04-28 12:27:23',
                ),
                254 => 
                array (
                    'name' => 'summary',
                    'value' => 'This is the sixth track from Nutini\'s June first release \'Sunny Side Up\'. It has already become the favourite of many Nutini fans because of its fast-paced, catchy lyrics and upbeat feel. <a href="http://www.last.fm/music/Paolo+Nutini/_/Pencil+Full+of+Lead">Read more on Last.fm</a>.',
                    'song_id' => 393,
                    'created_at' => '2018-04-28 12:27:27',
                    'updated_at' => '2018-04-28 12:27:27',
                ),
                255 => 
                array (
                    'name' => 'summary',
                    'value' => ' <a href="http://www.last.fm/music/Pharrell+Williams/_/Happy">Read more on Last.fm</a>.',
                    'song_id' => 398,
                    'created_at' => '2018-04-28 12:27:35',
                    'updated_at' => '2018-04-28 12:27:35',
                ),
                256 => 
                array (
                    'name' => 'summary',
                    'value' => '"Just Like a Pill" is a pop-rock song by American singer Pink. It was written and produced by Dallas Austin and Pink for her second studio album Missundaztood. The lyrics of the song deal with getting out of painful relationships, with a subtheme about drug abuse.

The song was released worldwide as the third single from M!sundastood in June 2002 and was a commercial success, peaking at number eight on the Billboard Hot 100 in the United States. It also performed well internationally <a href="http://www.last.fm/music/P%21nk/_/Just+Like+a+Pill">Read more on Last.fm</a>.',
                    'song_id' => 399,
                    'created_at' => '2018-04-28 12:27:37',
                    'updated_at' => '2018-04-28 12:27:37',
                ),
                257 => 
                array (
                    'name' => 'summary',
                    'value' => '"Raise Your Glass" is a song by American recording artist and songwriter Pink, released as the lead single of her first compilation album, Greatest Hits... So Far!!! The song celebrates the first decade since Pink\'s debut in 2000 and is dedicated to her fans who have been supporting her over the years. <a href="http://www.last.fm/music/P%21nk/_/Raise+Your+Glass">Read more on Last.fm</a>.',
                    'song_id' => 400,
                    'created_at' => '2018-04-28 12:27:38',
                    'updated_at' => '2018-04-28 12:27:38',
                ),
                258 => 
                array (
                    'name' => 'summary',
                    'value' => 'This Pink Floyd number completely sums up the 1980\'s education system complete with smacking and discipline to boot. Also the rebellion is clear in that the system was close to changing forever with the criminalization later of physical and some other forms of discipline. As always Pink Floyd do not fail to deliver on unique and innovative tracks as well as accompanying imagery. It is refreshing to see the availability of such diverse videos on Last FM even though made available through You Tube!
<a href="http://www.last.fm/music/Pink+Floyd/_/Another+Brick+in+The+Wall">Read more on Last.fm</a>.',
                    'song_id' => 402,
                    'created_at' => '2018-04-28 12:27:41',
                    'updated_at' => '2018-04-28 12:27:41',
                ),
                259 => 
                array (
                    'name' => 'summary',
                    'value' => 'The Pink Floyd\'s first single, a manic song about a convicted crossdresser. Reached #20 in the UK, put the Pink Floyd on the map.

The first manifestation of Barrett\'s songwriting talents was a bizarre little classic called \'Arnold Layne\'. A sinister piece of vaguely commercial fare, it dealt with the twilight wanderings of a transvestite/pervert figure and is both whimsical and singularly creepy.

[David Gilmour speaking about Syd Barrett] <a href="http://www.last.fm/music/Pink+Floyd/_/Arnold+Layne">Read more on Last.fm</a>.',
                    'song_id' => 403,
                    'created_at' => '2018-04-28 12:27:43',
                    'updated_at' => '2018-04-28 12:27:43',
                ),
                260 => 
                array (
                    'name' => 'summary',
                    'value' => 'Brain Damage is a song from British progressive rock band Pink Floyd\'s 1973 album, The Dark Side of the Moon. It was sung by Roger Waters. David Gilmour took over as lead vocalist when the band performed it live during the 1994 tour.

The song is often mistakenly labelled "Dark Side of the Moon" alongside "Eclipse" because the two run together and are commonly played together on the radio, giving the impression that they are one song. The incorrect title is derived from a recurring lyric in "Brain Damage," and the title of the album. <a href="http://www.last.fm/music/Pink+Floyd/_/Brain+Damage">Read more on Last.fm</a>.',
                    'song_id' => 404,
                    'created_at' => '2018-04-28 12:27:44',
                    'updated_at' => '2018-04-28 12:27:44',
                ),
                261 => 
                array (
                    'name' => 'summary',
                    'value' => 'Comfortably Numb is a song by the British progressive rock band Pink Floyd from their 1979 double album The Wall. It is one of only three songs on the album for which writing credits are shared between Roger Waters and David Gilmour – melody and most of the music on "Comfortably Numb" was written by Gilmour, while Waters contributed the lyrics and some additional notes. "Comfortably Numb" is one of the most famous Pink Floyd songs, and is known especially for its guitar solos. <a href="http://www.last.fm/music/Pink+Floyd/_/Comfortably+Numb">Read more on Last.fm</a>.',
                    'song_id' => 405,
                    'created_at' => '2018-04-28 12:27:46',
                    'updated_at' => '2018-04-28 12:27:46',
                ),
                262 => 
                array (
                    'name' => 'summary',
                    'value' => 'Money is a song from British progressive rock band Pink Floyd\'s 1973 album, The Dark Side of the Moon. It is the only song on the album to hit the top 20 in the United States charts. On the original LP, it opened the second side of the album. It was written by Roger Waters. The guitar solo is ranked number 62 on Guitar World\'s "100 Greatest Guitar Solos".

"Money" is notable for its introductory passage of cash registers dinging and coins clinking, much like "Time". <a href="http://www.last.fm/music/Pink+Floyd/_/Money">Read more on Last.fm</a>.',
                    'song_id' => 406,
                    'created_at' => '2018-04-28 12:27:48',
                    'updated_at' => '2018-04-28 12:27:48',
                ),
                263 => 
                array (
                    'name' => 'summary',
                    'value' => '"Shine On You Crazy Diamond" is a nine part track, written as a tribute to Syd Barrett.

The track appears on the album Wish You Were Here split into two parts, with I-V and VI-IX bookending the album. Shorter versions have also been performed live, and appeared on the album Echoes: The Best of Pink Floyd.  <a href="http://www.last.fm/music/Pink+Floyd/_/Shine+on+You+Crazy+Diamond">Read more on Last.fm</a>.',
                    'song_id' => 407,
                    'created_at' => '2018-04-28 12:27:49',
                    'updated_at' => '2018-04-28 12:27:49',
                ),
                264 => 
                array (
                    'name' => 'summary',
                    'value' => 'Time is a song from British progressive rock band Pink Floyd\'s 1973 album, The Dark Side of the Moon, and the only song on the album credited to all four members of the band. It is noted for its long introductory passage of clocks chiming and alarms ringing, recorded as a quadrophonic test by Alan Parsons, not specifically for the album.

Each clock at the beginning of the song was recorded separately in an antiques store. This is followed by an eerie <a href="http://www.last.fm/music/Pink+Floyd/_/Time">Read more on Last.fm</a>.',
                    'song_id' => 409,
                    'created_at' => '2018-04-28 12:27:52',
                    'updated_at' => '2018-04-28 12:27:52',
                ),
                265 => 
                array (
                    'name' => 'summary',
                    'value' => '"Wish You Were Here" is the title track on Pink Floyd\'s 1975 album Wish You Were Here. The song\'s lyrics encompass writer Roger Waters\' feelings of alienation from other people. Like most of the album, it refers to former Pink Floyd member Syd Barrett and his breakdown. The main riff came to David Gilmour while playing his acoustic guitar in Abbey Road Studios. Gilmour then demonstrated the riff to Waters, who was impressed. They collaborated to complete the song, as Waters had already written some lyrics. <a href="http://www.last.fm/music/Pink+Floyd/_/Wish+You+Were+Here">Read more on Last.fm</a>.',
                    'song_id' => 410,
                    'created_at' => '2018-04-28 12:27:54',
                    'updated_at' => '2018-04-28 12:27:54',
                ),
                266 => 
                array (
                    'name' => 'summary',
                    'value' => 'wrongly tagged.... change to "The Bitter End" <a href="http://www.last.fm/music/Placebo/_/Bitter+End">Read more on Last.fm</a>.',
                    'song_id' => 412,
                    'created_at' => '2018-04-28 12:27:57',
                    'updated_at' => '2018-04-28 12:27:57',
                ),
                267 => 
                array (
                    'name' => 'summary',
                    'value' => 'Every You Every Me is a single by alternative rock band Placebo. Appearing on their second album, it reached number 11 in the UK Singles Chart. The lyrics were written by frontman Brian Molko and ac acoustics\' Paul Campion.

The single was featured on the Cruel Intentions soundtrack . There are two versions of the video, both filmed live at London\'s Brixton Academy; one includes clips from the movie Cruel Intentions, the other does not. There are two different mixes of the song. <a href="http://www.last.fm/music/Placebo/_/Every+You+Every+Me">Read more on Last.fm</a>.',
                    'song_id' => 413,
                    'created_at' => '2018-04-28 12:27:58',
                    'updated_at' => '2018-04-28 12:27:58',
                ),
                268 => 
                array (
                    'name' => 'summary',
                'value' => 'Nancy Boy is a song by Placebo, released as the third single from their self-titled album. It was released on January 20th, 1997 and it became their breakthrough single, reaching number 4 in the UK charts and making them known to mainstream audiences. As with their first single "Come Home", the single/radio edit (aka the \'Sex mix\') is a rerecorded version, noticeably different from the album version. It was later released on the compilation album Once More With Feeling. <a href="http://www.last.fm/music/Placebo/_/Nancy+Boy">Read more on Last.fm</a>.',
                    'song_id' => 414,
                    'created_at' => '2018-04-28 12:27:59',
                    'updated_at' => '2018-04-28 12:27:59',
                ),
                269 => 
                array (
                    'name' => 'summary',
                    'value' => 'Pure Morning is a single by alternative band Placebo, taken from their second album Without You I\'m Nothing.

The song was initially recorded as a b-side, but the band liked it so much that they decided to put it on the album; it is usually considered to be their second most played song, shadowed only by "Nancy Boy". The most recognizable pattern to the song is the repetition of the line A friend in need\'s a friend indeed at the beginning of each verse. <a href="http://www.last.fm/music/Placebo/_/Pure+Morning">Read more on Last.fm</a>.',
                    'song_id' => 415,
                    'created_at' => '2018-04-28 12:28:01',
                    'updated_at' => '2018-04-28 12:28:01',
                ),
                270 => 
                array (
                    'name' => 'summary',
                    'value' => '"Without You I\'m Nothing" is the title track of Placebo second album. The single version featured additional vocals by David Bowie. <a href="http://www.last.fm/music/Placebo/_/Without+You+I%27m+Nothing">Read more on Last.fm</a>.',
                    'song_id' => 416,
                    'created_at' => '2018-04-28 12:28:02',
                    'updated_at' => '2018-04-28 12:28:02',
                ),
                271 => 
                array (
                    'name' => 'summary',
                    'value' => '"Dirty Old Town" is a song written by Ewan MacColl in 1949 that was made popular by The Dubliners, & recorded by The Pogues for their 2nd album, Rum Sodomy & The Lash.

The song was written in reference to Salford, Lancashire, England, the city where Ewan MacColl was brought up. Salford is, in fact, a city. When he first wrote the song, the local council were unhappy at having Salford called a dirty old town and, after considerable criticism, the <a href="http://www.last.fm/music/The+Pogues/_/Dirty+Old+Town">Read more on Last.fm</a>.',
                    'song_id' => 417,
                    'created_at' => '2018-04-28 12:28:04',
                    'updated_at' => '2018-04-28 12:28:04',
                ),
                272 => 
                array (
                    'name' => 'summary',
                    'value' => ' <a href="http://www.last.fm/music/Primal+Scream/_/Movin%27+On+Up">Read more on Last.fm</a>.',
                    'song_id' => 419,
                    'created_at' => '2018-04-28 12:28:07',
                    'updated_at' => '2018-04-28 12:28:07',
                ),
                273 => 
                array (
                    'name' => 'summary',
                'value' => '"I\'m Gonna Be (500 Miles)" is a song written and performed by Scottish pop band The Proclaimers. It was released on their 1988 Sunshine on Leith album, and subsequently as a single. It has become one of their most popular songs, reaching #11 in the UK charts and No. 1 on the Australian ARIA Charts in 1989, plus, five years later, #3 in the US Billboard Hot 100. The song has become a live staple at their concerts. The Proclaimers played it at Edinburgh 50 <a href="http://www.last.fm/music/The+Proclaimers/_/I%27m+Gonna+Be+(500+Miles)">Read more on Last.fm</a>.',
                    'song_id' => 421,
                    'created_at' => '2018-04-28 12:28:10',
                    'updated_at' => '2018-04-28 12:28:10',
                ),
                274 => 
                array (
                    'name' => 'summary',
                    'value' => 'year: 1987
<a href="http://www.last.fm/music/The+Proclaimers/_/Letter+from+America">Read more on Last.fm</a>.',
                    'song_id' => 423,
                    'created_at' => '2018-04-28 12:28:13',
                    'updated_at' => '2018-04-28 12:28:13',
                ),
                275 => 
                array (
                    'name' => 'summary',
                    'value' => 'Common People is a song by Pulp. It was released as a single in 1995, reaching number two on the UK singles chart. It also appears on the band\'s 1995 album Different Class. The song is about those who were perceived by the songwriter as wanting to be "like common people" and who ascribe glamour to poverty. This phenomenon is commonly referred to as slumming or "class tourism". A similar theme is explored in the 1960\'s novel and film "Up The Junction". <a href="http://www.last.fm/music/Pulp/_/Common+People">Read more on Last.fm</a>.',
                    'song_id' => 426,
                    'created_at' => '2018-04-28 12:28:17',
                    'updated_at' => '2018-04-28 12:28:17',
                ),
                276 => 
                array (
                    'name' => 'summary',
                    'value' => '"Disco 2000" is a hit single by British band Pulp. It is the third one from their album Different Class, following #2 hits "Common People" and the double A-side "Mis-Shapes"/"Sorted for E\'s & Wizz".

The song tells the story of a narrator falling for a childhood friend, called \'Deborah\', who is more popular than he and wondering what it would be like to meet again in the year 2000, rendering it thematically consistent with the album title, "Different Class". <a href="http://www.last.fm/music/Pulp/_/Disco+2000">Read more on Last.fm</a>.',
                    'song_id' => 427,
                    'created_at' => '2018-04-28 12:28:19',
                    'updated_at' => '2018-04-28 12:28:19',
                ),
                277 => 
                array (
                    'name' => 'summary',
                    'value' => '"Help the Aged" is a song by British alternative rock band Pulp, and was released November 10, 1997 as the lead single from their 1998 album This Is Hardcore. The single charted at #8 in the UK Singles Chart, becoming the band\'s fifth consecutive top ten single.

During Da Ali G Show, Jarvis Cocker sang the song which transisted into Ali G\'s urban take. <a href="http://www.last.fm/music/Pulp/_/Help+the+Aged">Read more on Last.fm</a>.',
                    'song_id' => 428,
                    'created_at' => '2018-04-28 12:28:20',
                    'updated_at' => '2018-04-28 12:28:20',
                ),
                278 => 
                array (
                    'name' => 'summary',
                'value' => '\'39 is a song by English guitarist Brian May and first recorded by his band Queen for their 1975 album A Night at the Opera. May sings lead vocals on its skiffle-like arrangement, featuring three- and four-part harmony vocals — including passages of falsetto during the middle bridge section, which culminate in a high-A note sung by Roger Taylor (May commented in 2005 that Taylor actually refused to sing the note he wanted, so he got him to sing a lower note then used varispeed to up the pitch). <a href="http://www.last.fm/music/Queen/_/%2739">Read more on Last.fm</a>.',
                    'song_id' => 431,
                    'created_at' => '2018-04-28 12:28:24',
                    'updated_at' => '2018-04-28 12:28:24',
                ),
                279 => 
                array (
                    'name' => 'summary',
                    'value' => '"Bohemian Rhapsody" is a song written by Freddie Mercury and originally recorded by the band Queen for their 1975 album A Night at the Opera.

The song is in the style of a stream-of-consciousness nightmare, and has unusual musical structure for popular music (it has no chorus, instead consisting of seemingly disjointed sections including operatic segments, an a cappella and a hard rock part) which works beyond the range of this reviewer. Despite this, it was released as a single and became a huge commercial success.  <a href="http://www.last.fm/music/Queen/_/Bohemian+Rhapsody">Read more on Last.fm</a>.',
                    'song_id' => 433,
                    'created_at' => '2018-04-28 12:28:27',
                    'updated_at' => '2018-04-28 12:28:27',
                ),
                280 => 
                array (
                    'name' => 'summary',
                    'value' => 'Don\'t Stop Me Now is a 1979 hit single by Queen, from their 1978 album Jazz. 
Lyrics and music were written by lead singer Freddie Mercury. 
The song was recorded in August/September 1978 in Nice, France.

Musically, the song is based around Mercury\'s piano playing, with John Deacon and Roger Taylor providing a bass guitar and drums backing track. On the studio version, Brian May\'s only guitar playing is in his guitar solo, but on live versions performed on the band\'s 1978 and 1979 tours <a href="http://www.last.fm/music/Queen/_/Don%27t+Stop+Me+Now">Read more on Last.fm</a>.',
                    'song_id' => 435,
                    'created_at' => '2018-04-28 12:28:30',
                    'updated_at' => '2018-04-28 12:28:30',
                ),
                281 => 
                array (
                    'name' => 'summary',
                    'value' => 'Fat Bottomed Girls"  is a hit single by the English rock band Queen. It was released in 1978 on the album Jazz. The song was written by Queen guitarist Brian May and was one of the few Queen songs played in an alternative guitar tuning commonly called "drop D tuning". The lyrics express the axiom "Beauty lies in the eye of the beholder", albeit done in a humorous and overtly sexual tone, and is a good-natured jab at groupies that hang onto bands and musicians.  <a href="http://www.last.fm/music/Queen/_/Fat+Bottomed+Girls">Read more on Last.fm</a>.',
                    'song_id' => 436,
                    'created_at' => '2018-04-28 12:28:32',
                    'updated_at' => '2018-04-28 12:28:32',
                ),
                282 => 
                array (
                    'name' => 'summary',
                    'value' => '"I Want to Break Free" is a song performed by Queen, which was written by bassist John Deacon. According to the I Want To Break Free Songfacts, he wrote it from the male perspective of the women\'s liberation movement. It featured on their 1984 album The Works. In the UK Chart, it peaked at number 3, and remained in the chart for fifteen consecutive weeks from its release in late April 1984. Most of the song follows the traditional 12 bar blues progression in E Major, a rare thing for a Queen song. <a href="http://www.last.fm/music/Queen/_/I+Want+to+Break+Free">Read more on Last.fm</a>.',
                    'song_id' => 437,
                    'created_at' => '2018-04-28 12:28:33',
                    'updated_at' => '2018-04-28 12:28:33',
                ),
                283 => 
                array (
                    'name' => 'summary',
                    'value' => '"Somebody to Love" is a song by British rock  band Queen. Written by singer Freddie Mercury, the track featured on their 1976 album A Day at the Races, from which it was also released as the lead single.

Like "Bohemian Rhapsody", the major hit from Queen\'s previous album A Night At The Opera, "Somebody to Love" has a complex melody and deep layering of vocal tracks, this time based on a gospel choir arrangement. It was the first single off the album A Day at the Races. <a href="http://www.last.fm/music/Queen/_/Somebody+to+Love">Read more on Last.fm</a>.',
                    'song_id' => 438,
                    'created_at' => '2018-04-28 12:28:34',
                    'updated_at' => '2018-04-28 12:28:34',
                ),
                284 => 
                array (
                    'name' => 'summary',
                'value' => '"We Are the Champions" is a power ballad written by Freddie Mercury, recorded and performed by Queen for their 1977 album News of the World. One of their most famous and popular songs, it has since become an anthem for sporting victories and has been often used or referenced in popular culture (see below). The song reached #2 in the UK charts and #4 on the Hot 100 in the US in 1978.

Musically, it is based around Mercury\'s piano part, with Roger Taylor and John Deacon providing a drums and bass guitar backing. <a href="http://www.last.fm/music/Queen/_/We+Are+the+Champions">Read more on Last.fm</a>.',
                    'song_id' => 439,
                    'created_at' => '2018-04-28 12:28:36',
                    'updated_at' => '2018-04-28 12:28:36',
                ),
                285 => 
                array (
                    'name' => 'summary',
                    'value' => '"Daysleeper" is a song by R.E.M., released as their first single from their eleventh studio album Up, and the first single to be released by the band since the departure of drummer Bill Berry.

Sleep and dreams have often played an important part in R.E.M. lyrics, for example "Get Up" and "I Don\'t Sleep, I Dream".

Sung from the point of view of a nightworker corresponding with far eastern colleagues, the song focuses on the disorientation of time and "circadian rhythm" in such a lifestyle, leading to despair and loss of identity. <a href="http://www.last.fm/music/R.E.M./_/Daysleeper">Read more on Last.fm</a>.',
                    'song_id' => 443,
                    'created_at' => '2018-04-28 12:28:42',
                    'updated_at' => '2018-04-28 12:28:42',
                ),
                286 => 
                array (
                    'name' => 'summary',
                    'value' => '"Everybody Hurts" is a song by R.E.M., originally released on the band\'s 1992 album Automatic for the People and was also released as a single in 1993. It peaked at #29 on the Billboard Hot 100, #7 on the UK Singles Charts and #3 on the French Singles Chart.

Much of the song was written by drummer Bill Berry, although as R.E.M. shares songwriting credits among its members, it is unknown how much he actually wrote. Berry did not drum on the song — <a href="http://www.last.fm/music/R.E.M./_/Everybody+Hurts">Read more on Last.fm</a>.',
                    'song_id' => 444,
                    'created_at' => '2018-04-28 12:28:45',
                    'updated_at' => '2018-04-28 12:28:45',
                ),
                287 => 
                array (
                    'name' => 'summary',
                'value' => '"Imitation of Life" is a song by R.E.M., the first single released from their twelfth album, Reveal in 2001. The song peaked at #83 on the Billboard Hot 100 (but reached #22 on the U.S. Modern Rock list). It was the lowest chart of a lead single from an R.E.M. album in the U.S. since "Fall on Me" from Lifes Rich Pageant in 1986. It reached #6 on the UK Singles Charts, making it the eighth top 10 for the band in Britain. In Japan, the song became R.E.M.\'s first number one single in the country. <a href="http://www.last.fm/music/R.E.M./_/Imitation+of+Life">Read more on Last.fm</a>.',
                    'song_id' => 445,
                    'created_at' => '2018-04-28 12:28:47',
                    'updated_at' => '2018-04-28 12:28:47',
                ),
                288 => 
                array (
                    'name' => 'summary',
                'value' => '"It\'s the End of the World as We Know It (And I Feel Fine)" is a song by the rock band R.E.M., found on their 1987 album Document and the 1988 compilation Eponymous. It was also released as a single in 1988, reaching #69 US Billboard Hot 100 and later reaching #39 in the UK singles chart on its re-release in 1991.

The song originated from a previous, unreleased, R.E.M. song called "PSA", which is short for "Public Service Announcement". The two songs are very similar in melody and tempo. <a href="http://www.last.fm/music/R.E.M./_/It%27s+the+End+of+the+World+as+We+Know+It+(And+I+Feel+Fine)">Read more on Last.fm</a>.',
                    'song_id' => 446,
                    'created_at' => '2018-04-28 12:28:49',
                    'updated_at' => '2018-04-28 12:28:49',
                ),
                289 => 
                array (
                    'name' => 'summary',
                'value' => 'In the liner notes of \'In Time: The Best of R.E.M.\' (2003) Peter Buck says that one can divide R.E.M.\'s career with this song. Before the release of Losing My Religion, R.E.M. had mostly a cult following, after the release they became one of the biggest rock bands of the 90\'s.

\'Losing My Religion\' is a term from the American South that means being at wits\' end.

It was the first song with a mandolin to reach #1 since Rod Stewart\'s \'Maggie May\' in 1971. <a href="http://www.last.fm/music/R.E.M./_/Losing+My+Religion">Read more on Last.fm</a>.',
                    'song_id' => 447,
                    'created_at' => '2018-04-28 12:28:50',
                    'updated_at' => '2018-04-28 12:28:50',
                ),
                290 => 
                array (
                    'name' => 'summary',
                    'value' => 'Man on the Moon is a song by the band R.E.M. from their 1992 album Automatic for the People. The song makes numerous references to the performer Andy Kaufman, including his Elvis impersonation and work with wrestlers Fred Blassie and Jerry Lawler. The song was released as a single in 1993.

The title, video, and lyrics are a reference to the conspiracy theory that the American moon landing was faked. There have also been rumors that Andy Kaufman faked his death. <a href="http://www.last.fm/music/R.E.M./_/Man+on+the+Moon">Read more on Last.fm</a>.',
                    'song_id' => 448,
                    'created_at' => '2018-04-28 12:28:51',
                    'updated_at' => '2018-04-28 12:28:51',
                ),
                291 => 
                array (
                    'name' => 'summary',
                    'value' => '"Shiny Happy People" is a song by the band R.E.M..
The song appeared on their 1991 album Out of Time and was released as a single in the same year. The song features guest vocals by Kate Pierson of the B-52\'s, who also has a prominent role in the song\'s music video.
It peaked at #10 on the Billboard Hot 100, the fourth and, to date, last R.E.M. single to reach the top 10 on the chart. It also peaked at #6 on the UK Singles Chart, becoming the first R. <a href="http://www.last.fm/music/R.E.M./_/Shiny+Happy+People">Read more on Last.fm</a>.',
                    'song_id' => 450,
                    'created_at' => '2018-04-28 12:28:55',
                    'updated_at' => '2018-04-28 12:28:55',
                ),
                292 => 
                array (
                    'name' => 'summary',
                    'value' => '"Stand" is a song by R.E.M. released as the second single from Green in 1989. The song quickly rose up the charts, peaking at #6 on the Billboard Hot 100, becoming R.E.M.\'s second top 10 hit in the United States, also reaching #1 on the Mainstream Rock and Modern Rock Tracks charts. The song reached #48 on the UK Singles Charts. The song reached #16 in Canada.

"Weird Al" Yankovic parodied "Stand" for his 1989 album, UHF, as "Spam".

Stand was used as the opening theme to the early 1990s Fox comedy, Get a Life, starring Chris Elliott. <a href="http://www.last.fm/music/R.E.M./_/Stand">Read more on Last.fm</a>.',
                    'song_id' => 451,
                    'created_at' => '2018-04-28 12:28:56',
                    'updated_at' => '2018-04-28 12:28:56',
                ),
                293 => 
                array (
                    'name' => 'summary',
                'value' => '"The One I Love" is a song by American rock band R.E.M. It was released on the band\'s fifth full-length studio album, Document, and also as a 7" vinyl single in 1987. The song was their first hit single, reaching #9 in the US Billboard Hot 100, #14 in Canada, and later reached #16 in the UK singles chart on its UK release (1991). The song was included in Activision\'s Guitar Hero World Tour and is in Guitar Hero On Tour: Decades.

The accompanying video\'s director was artist Robert Longo. <a href="http://www.last.fm/music/R.E.M./_/The+One+I+Love">Read more on Last.fm</a>.',
                    'song_id' => 453,
                    'created_at' => '2018-04-28 12:28:59',
                    'updated_at' => '2018-04-28 12:28:59',
                ),
                294 => 
                array (
                    'name' => 'summary',
                    'value' => 'According to the The Sidewinder Sleeps Tonite Songfacts, this song topped a 2010 poll, which sought out the most misheard lyrics. Four out of ten people polled thought "Call me when you try to wake her up" was "Calling Jamaica."
<a href="http://www.last.fm/music/R.E.M./_/The+Sidewinder+Sleeps+Tonite">Read more on Last.fm</a>.',
                    'song_id' => 454,
                    'created_at' => '2018-04-28 12:29:00',
                    'updated_at' => '2018-04-28 12:29:00',
                ),
                295 => 
                array (
                    'name' => 'summary',
                'value' => '"Creep" is the first single released by the English alternative rock band Radiohead, and is a track on their debut album Pablo Honey (1993). It was written by the band\'s singer, Thom Yorke, and released in the United Kingdom initially in September 1992. When it was first given limited release, however, Radio 1 found it "too depressing", and removed it from their playlist after airing it only twice. However, it subsequently became one of the band\'s biggest hits <a href="http://www.last.fm/music/Radiohead/_/Creep">Read more on Last.fm</a>.',
                    'song_id' => 456,
                    'created_at' => '2018-04-28 12:29:03',
                    'updated_at' => '2018-04-28 12:29:03',
                ),
                296 => 
                array (
                    'name' => 'summary',
                    'value' => 'According to singer Thom Yorke, the song was recorded as the band had just been to see Jeff Buckley play a set at The Garage in London and when they got back into the studio, Yorke recorded the vocals in one take and broke down in tears at the end. The song\'s lyrics are about Canary Wharf in London and about the world of mass marketing and mass consumption. One source of frustration for the band at the time was their US record label, Capitol, who wanted a strong track for American radio to follow the success of their previous hit single <a href="http://www.last.fm/music/Radiohead/_/Fake+Plastic+Trees">Read more on Last.fm</a>.',
                    'song_id' => 457,
                    'created_at' => '2018-04-28 12:29:05',
                    'updated_at' => '2018-04-28 12:29:05',
                ),
                297 => 
                array (
                    'name' => 'summary',
                'value' => '"High and Dry" is a song by the English alternative rock band Radiohead, and was the first single released from their second album, The Bends (1995). It was as a double A-side with album opener "Planet Telex". "High and Dry" was released in the UK on 5 March 1995 and remains one of the band\'s most popular radio hits, despite reaching only #17 upon release.

"High and Dry" was recorded during the Pablo Honey sessions but was dismissed by the band, who thought that it sounded like a Rod Stewart song. <a href="http://www.last.fm/music/Radiohead/_/High+and+Dry">Read more on Last.fm</a>.',
                    'song_id' => 458,
                    'created_at' => '2018-04-28 12:29:06',
                    'updated_at' => '2018-04-28 12:29:06',
                ),
                298 => 
                array (
                    'name' => 'summary',
                    'value' => '"Just" is a single by the English rock band Radiohead, released in 1995. It is the seventh track on their 1995 album The Bends. Radiohead frontman Thom Yorke wrote the song about a narcissistic friend of his, which on closer inspection is showcased by the imagery in the lyrics - a parallel to earlier My Iron Lung EP track "Lewis [Mistreated]". He also says that it was somewhat of a competition between him and Jonny Greenwood to see who could fit the most chords into a song. <a href="http://www.last.fm/music/Radiohead/_/Just">Read more on Last.fm</a>.',
                    'song_id' => 459,
                    'created_at' => '2018-04-28 12:29:08',
                    'updated_at' => '2018-04-28 12:29:08',
                ),
                299 => 
                array (
                    'name' => 'summary',
                    'value' => 'Karma Police is the second single from Radiohead\'s 1997 album OK Computer. It is Radiohead\'s most successful song worldwide, apart from Creep. The song is perhaps best recognized for its piano riff, and for its dark bass line.

Karma Police, like several other songs that would make up OK Computer, was debuted live in 1996, when the band briefly supported Alanis Morissette on an American tour. A live version of Karma Police, performed with a Rhodes piano on The Late Show with David Letterman <a href="http://www.last.fm/music/Radiohead/_/Karma+Police">Read more on Last.fm</a>.',
                    'song_id' => 460,
                    'created_at' => '2018-04-28 12:29:10',
                    'updated_at' => '2018-04-28 12:29:10',
                ),
                300 => 
                array (
                    'name' => 'summary',
                    'value' => 'Lotus Flower is the fifth track and first single from Radiohead\'s eighth studio album, The King of Limbs. 

According to the Lotus Flower Songfacts, the song was debuted by Thom Yorke at a warm-up show with his other band Atoms For Peace  on October, 2nd 2009 at the Echoplex in Los Angeles. Radiohead first performed the track during a January 2010 Haiti benefit concert in Los Angeles.

The music video features Radiohead\'s frontman Thom Yorke singing and dancing to the track in front of a backdrop in black and white. <a href="http://www.last.fm/music/Radiohead/_/Lotus+Flower">Read more on Last.fm</a>.',
                    'song_id' => 461,
                    'created_at' => '2018-04-28 12:29:11',
                    'updated_at' => '2018-04-28 12:29:11',
                ),
                301 => 
                array (
                    'name' => 'summary',
                    'value' => 'No Surprises is a song by the British alternative rock band Radiohead. It was released as the third and final single from the group\'s 1997 album OK Computer. Accompanied by a music video that featured a single shot of singer Thom Yorke\'s head in a plastic bubble that filled with water, the single peaked at number four in the United Kingdom.

Radiohead wrote "No Surprises" while touring with the band R.E.M. in 1995. "No Surprises" was the first song Radiohead recorded on the first day of recording sessions for OK Computer. <a href="http://www.last.fm/music/Radiohead/_/No+Surprises">Read more on Last.fm</a>.',
                    'song_id' => 462,
                    'created_at' => '2018-04-28 12:29:13',
                    'updated_at' => '2018-04-28 12:29:13',
                ),
                302 => 
                array (
                    'name' => 'summary',
                'value' => '"Paranoid Android" is a song by English alternative rock band Radiohead, and was the lead single from the band\'s third album OK Computer (1997). Its release marked the start of Radiohead\'s reputation as art rock innovators, and the album subsequently received huge acclaim. The song\'s structure, though unique among Radiohead material, was also responsible for most of the comparisons with 1970s progressive rock that the band subsequently earned. 

This <a href="http://www.last.fm/music/Radiohead/_/Paranoid+Android">Read more on Last.fm</a>.',
                    'song_id' => 463,
                    'created_at' => '2018-04-28 12:29:14',
                    'updated_at' => '2018-04-28 12:29:14',
                ),
                303 => 
                array (
                    'name' => 'summary',
                    'value' => '"Dani California" is the first single from the American rock band Red Hot Chili Peppers\' ninth studio album, Stadium Arcadium. The single was first made available at the iTunes Music Store and then was officially released on May 2, 2006. The international radio premiere was April 3, 2006, when Don Jantzen from the Houston radio station KTBZ-FM, played "Dani California" continuously for his entire three hour program.

The single debuted on the The Billboard Hot 100 at #24 and peaked at #6 <a href="http://www.last.fm/music/Red+Hot+Chili+Peppers/_/Dani+California">Read more on Last.fm</a>.',
                    'song_id' => 464,
                    'created_at' => '2018-04-28 12:29:15',
                    'updated_at' => '2018-04-28 12:29:15',
                ),
                304 => 
                array (
                    'name' => 'summary',
                    'value' => '"Otherside" is a song by the Red Hot Chili Peppers, released in 2000.[1] It was the third single from their album Californication, and confronts the battles ex-junkies have with their prior addictions. The single was highly successful peaking at number fourteen on the Billboard Hot 100, the fourth highest ever for the band; and number one on the US Modern Rock Tracks, which was at the time the fifth for the band. The song remained at number one on this chart for thirteen consecutive weeks, one of the longest runs at the top of that chart. <a href="http://www.last.fm/music/Red+Hot+Chili+Peppers/_/Otherside">Read more on Last.fm</a>.',
                    'song_id' => 465,
                    'created_at' => '2018-04-28 12:29:17',
                    'updated_at' => '2018-04-28 12:29:17',
                ),
                305 => 
                array (
                    'name' => 'summary',
                'value' => 'Incorrect Spelling of  Snow ((Hey Oh))  <a href="http://www.last.fm/music/Red+Hot+Chili+Peppers/_/Snow+(Hey+Oh)">Read more on Last.fm</a>.',
                    'song_id' => 467,
                    'created_at' => '2018-04-28 12:29:20',
                    'updated_at' => '2018-04-28 12:29:20',
                ),
                306 => 
                array (
                    'name' => 'summary',
                    'value' => 'The Zephyr Song was the second single released for the Red Hot Chili Peppers\' eighth studio album By the Way. The song, as a single, was released in two parts. Both editions held two previously unheard-of B-sides, making it, collectively, hold four non-LP tracks. This is the largest amount of accumulated unreleased studio recorded B-sides any solitary single the Red Hot Chili Peppers have ever released. Coincidentally, it is also one of their rarest singles, regularly fetching prices above 100 dollars. <a href="http://www.last.fm/music/Red+Hot+Chili+Peppers/_/The+Zephyr+Song">Read more on Last.fm</a>.',
                    'song_id' => 468,
                    'created_at' => '2018-04-28 12:29:21',
                    'updated_at' => '2018-04-28 12:29:21',
                ),
                307 => 
                array (
                    'name' => 'summary',
                    'value' => '"Under the Bridge" is a song by the American alternative rock band Red Hot Chili Peppers, released on March 10, 1992 as the second single from the group\'s fifth studio album Blood Sugar Sex Magik.
Vocalist Anthony Kiedis wrote the lyrics to express his feelings of loneliness and despondency and to reflect on narcotics and their impact on his life.
During rehearsal in April 1991, Kiedis had felt distanced from bandmates Flea and Frusciante. His feeling of loneliness reminded him of his relationship with his former girlfriend <a href="http://www.last.fm/music/Red+Hot+Chili+Peppers/_/Under+the+Bridge">Read more on Last.fm</a>.',
                    'song_id' => 469,
                    'created_at' => '2018-04-28 12:29:23',
                    'updated_at' => '2018-04-28 12:29:23',
                ),
                308 => 
                array (
                    'name' => 'summary',
                    'value' => '"Never Gonna Give You Up" is a pop song originally performed by Rick Astley. It was released as a single from Astley\'s multi-million selling debut album, Whenever You Need Somebody, which was written and produced by Stock Aitken Waterman. The song was a worldwide number-one hit, initially in the singer\'s native United Kingdom in 1987, where it stayed at number one for five weeks and was the best-selling single of that year. It was knocked off the <a href="http://www.last.fm/music/Rick+Astley/_/Never+Gonna+Give+You+Up">Read more on Last.fm</a>.',
                    'song_id' => 471,
                    'created_at' => '2018-04-28 12:29:25',
                    'updated_at' => '2018-04-28 12:29:25',
                ),
                309 => 
                array (
                    'name' => 'summary',
                    'value' => '"Angels" is a song written by Robbie Williams and Guy Chambers. According to the Angels Songfacts, the pair wrote this in less than 25 minutes. 

Originally performed by Williams, and covered by Jessica Simpson, Mexican singer Yuridia, singer Beverley Knight, in Italian (as Un Angelo) by Patrizio Buanne, All Angels, singer Declan Galbraith as well as Verena Von Strenge\'s latest group, Moon Dust, and American Idol Contestant David Archuleta. The original recording by Williams proved to be his greatest commercial success <a href="http://www.last.fm/music/Robbie+Williams/_/Angels">Read more on Last.fm</a>.',
                    'song_id' => 472,
                    'created_at' => '2018-04-28 12:29:27',
                    'updated_at' => '2018-04-28 12:29:27',
                ),
                310 => 
                array (
                    'name' => 'summary',
                'value' => 'Let Me Entertain You is a song written by Robbie Williams and Guy Chambers. Released as the fifth and last single from Williams\' debut album, Life Thru A Lens. It has no connection to the songs by Queen or Shakespears Sister carrying the same title. In March 1998, the track became a top three hit in the United Kingdom, peaking at number-three. The chord structure (F, Ab/F, Bb/F, F) and in particular the piano riff is almost identical to the Rolling Stones\' song "Sympathy for the Devil", the difference mainly being in tempo. <a href="http://www.last.fm/music/Robbie+Williams/_/Let+Me+Entertain+You">Read more on Last.fm</a>.',
                    'song_id' => 473,
                    'created_at' => '2018-04-28 12:29:28',
                    'updated_at' => '2018-04-28 12:29:28',
                ),
                311 => 
                array (
                    'name' => 'summary',
                    'value' => '"Maggie May" is a song written by singer Rod Stewart and Martin Quittenton and recorded by Stewart in 1971 for his album Every Picture Tells a Story.
Most versions of "Maggie May" incorporate a 30-second solo guitar intro, "Henry", composed by Martin Quittenton.

"Maggie May" expresses the ambivalence and contradictory emotions of a young man involved in a relationship with an older woman, and was written from Stewart\'s own experience. In the January <a href="http://www.last.fm/music/Rod+Stewart/_/Maggie+May">Read more on Last.fm</a>.',
                    'song_id' => 477,
                    'created_at' => '2018-04-28 12:29:34',
                    'updated_at' => '2018-04-28 12:29:34',
                ),
                312 => 
                array (
                    'name' => 'summary',
                    'value' => 'According to the Sailing Songfacts, Stewart recorded his version of this Sutherland Brothers song at the Muscle Shoals Sound Studio in Muscle Shoals, Alabama with a choir assembled by Bob Crewe, the Four Seasons\' producer. It became his third UK chart-topper and the following year, it was revived following it\'s use as the theme music for a BBC TV documentary series about the HMS Ark Royal, this time peaking at #3. The combined sales of the 2 releases meant this is Stewart\'s biggest ever selling single in the UK with 955,111 copies sold.
<a href="http://www.last.fm/music/Rod+Stewart/_/Sailing">Read more on Last.fm</a>.',
                    'song_id' => 478,
                    'created_at' => '2018-04-28 12:29:36',
                    'updated_at' => '2018-04-28 12:29:36',
                ),
                313 => 
                array (
                    'name' => 'summary',
                    'value' => '"Bitch" is a song by English rock band the Rolling Stones from their 1971 album Sticky Fingers.

Released as a single, this did not chart, probably because it was banned from many radio stations for its sexual content and outrageous title.

Written by Mick Jagger and Keith Richards, "Bitch" was recorded at London\'s Olympic Studios and the Rolling Stones Mobile at Stargroves during October of 1970.

The track was featured on the initial broadcast of <a href="http://www.last.fm/music/The+Rolling+Stones/_/Bitch">Read more on Last.fm</a>.',
                    'song_id' => 480,
                    'created_at' => '2018-04-28 12:29:39',
                    'updated_at' => '2018-04-28 12:29:39',
                ),
                314 => 
                array (
                    'name' => 'summary',
                'value' => '(I Can\'t Get No) Satisfaction is a hit riff-driven rock song written by Mick Jagger and Keith Richards for The Rolling Stones and produced by Andrew Loog Oldham. Rolling Stone magazine ranked the song as number 2 on its 500 Greatest Songs of All Time, while VH1 placed it at number 1 on its "100 Greatest Songs of Rock & Roll" list. In 2006 it was added to the Library of Congress National Recording Registry.

The song was first released as a single <a href="http://www.last.fm/music/The+Rolling+Stones/_/(I+Can%27t+Get+No)+Satisfaction">Read more on Last.fm</a>.',
                    'song_id' => 481,
                    'created_at' => '2018-04-28 12:29:41',
                    'updated_at' => '2018-04-28 12:29:41',
                ),
                315 => 
                array (
                    'name' => 'summary',
                    'value' => 'This highly political song was inspired by political activist Tariq Ali and the French Student Movement. It was released as a single off the "Beggar\'s Banquet" album in the summer of 1968, a year full of political and social unrest, which saw violent confrontations between young political activists in both France and The United States. 

The song, released in 1968, was seen as continuing the Stone\'s return to their earthy blues and rock & roll based roots after the psychedelic experimentation of Their Satanic Majesties Request.  <a href="http://www.last.fm/music/The+Rolling+Stones/_/Street+Fighting+Man">Read more on Last.fm</a>.',
                    'song_id' => 483,
                    'created_at' => '2018-04-28 12:29:44',
                    'updated_at' => '2018-04-28 12:29:44',
                ),
                316 => 
                array (
                    'name' => 'summary',
                    'value' => '"Under My Thumb" is a song written by Mick Jagger and Keith Richards for The Rolling Stones. Its first appearance was as an album track on 1966\'s Aftermath, and though it was never released as a single, it is one of the band\'s more popular songs from the period, appearing frequently on best-of compilations.

The song\'s lyrics, an examination of a sexual power struggle, were very much in tune with the rebellious, vaguely misogynistic attitude that the mid-\'60s Stones had cultivated <a href="http://www.last.fm/music/The+Rolling+Stones/_/Under+My+Thumb">Read more on Last.fm</a>.',
                    'song_id' => 484,
                    'created_at' => '2018-04-28 12:29:45',
                    'updated_at' => '2018-04-28 12:29:45',
                ),
                317 => 
                array (
                    'name' => 'summary',
                    'value' => '"Wild Horses" is a song by the Rolling Stones from their 1971 album Sticky Fingers, Rolling Stone ranked it at #334 in its "500 Greatest Songs of All Time" list in 2004.

Originally recorded over a three day period at Muscle Shoals Sound Studio in Alabama during December 2-4, 1969, the song was not released until over a year later due to legal wranglings with the band\'s former label.
Prior to its release on "Sticky Fingers", Gram Parsons convinced Jagger and Richards to allow him to record "Wild Horses" with his band <a href="http://www.last.fm/music/The+Rolling+Stones/_/Wild+Horses">Read more on Last.fm</a>.',
                    'song_id' => 485,
                    'created_at' => '2018-04-28 12:29:47',
                    'updated_at' => '2018-04-28 12:29:47',
                ),
                318 => 
                array (
                    'name' => 'summary',
                    'value' => '"Angie" is a song by rock and roll band The Rolling Stones, featured on their 1973 album Goats Head Soup.

Recorded in November and December 1972, "Angie" was written primarily by Keith Richards. The song is an acoustic guitar driven ballad which tells of the end of a romance. The song is noted for its poignant lyrics concerning lost love and the grieving involved. Singer Mick Jagger gives a wrenching performance for the recording, while Stones-recording regular Nicky Hopkins plays the song\'s distinctive piano chords. <a href="http://www.last.fm/music/The+Rolling+Stones/_/Angie">Read more on Last.fm</a>.',
                    'song_id' => 486,
                    'created_at' => '2018-04-28 12:29:48',
                    'updated_at' => '2018-04-28 12:29:48',
                ),
                319 => 
                array (
                    'name' => 'summary',
                    'value' => '"...that 1971 rock anthem to drugs, slavery and interracial cunnilingus..." <a href="http://www.last.fm/music/The+Rolling+Stones/_/Brown+Sugar">Read more on Last.fm</a>.',
                    'song_id' => 487,
                    'created_at' => '2018-04-28 12:29:50',
                    'updated_at' => '2018-04-28 12:29:50',
                ),
                320 => 
                array (
                    'name' => 'summary',
                    'value' => 'Written by Mick Jagger and Keith Richards, "Gimme Shelter" was created from the combined efforts of both the singer and the guitarist. Richards had been working on the song\'s signature opening in London while Jagger was working on the film Performance. The song takes the form of a churning mid-tempo rocker. It begins with a rhythm guitar intro by Richards, followed by Jagger\'s lead vocal. On the recording of the album, Jagger said in a 1995 interview with Rolling Stone, "Well, it\'s a very rough, very violent era. <a href="http://www.last.fm/music/The+Rolling+Stones/_/Gimme+Shelter">Read more on Last.fm</a>.',
                    'song_id' => 488,
                    'created_at' => '2018-04-28 12:29:51',
                    'updated_at' => '2018-04-28 12:29:51',
                ),
                321 => 
                array (
                    'name' => 'summary',
                    'value' => '"Jumpin\' Jack Flash" is a song by English rock and roll band The Rolling Stones, released as a single in 1968. Called "supernatural Delta blues by way of Swinging London" by Rolling Stone, the song is seen as the band\'s return to their blues roots after the psychedelia of their preceding albums Between the Buttons and Their Satanic Majesties Request. One of the group\'s most popular and recognizable songs, "Jumpin\' Jack Flash" has been featured in many films and on the Rolling Stones compilation albums Through the Past, Darkly (Big Hits Vol. <a href="http://www.last.fm/music/The+Rolling+Stones/_/Jumpin%27+Jack+Flash">Read more on Last.fm</a>.',
                        'song_id' => 489,
                        'created_at' => '2018-04-28 12:29:53',
                        'updated_at' => '2018-04-28 12:29:53',
                    ),
                    322 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Miss You" is a 1978 hit song by The Rolling Stones, from their album Some Girls.

"Miss You" was written by singer Mick Jagger while jamming with keyboardist Billy Preston during rehearsals for the March 1977 El Mocambo club gigs (yielding Side Three of the Love You Live album). Although guitarist Keith Richards is credited for co-writing, Jagger is generally regarded as the principal composer.

Several of the songs on 1976\'s Black and Blue had been influenced by dance music. <a href="http://www.last.fm/music/The+Rolling+Stones/_/Miss+You">Read more on Last.fm</a>.',
                        'song_id' => 490,
                        'created_at' => '2018-04-28 12:29:54',
                        'updated_at' => '2018-04-28 12:29:54',
                    ),
                    323 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Paint It Black" is a song recorded by The Rolling Stones in 1966. It reached number one in both the U.S. and the UK charts in 1966. It was released as a single and included on the U.S. version of the album Aftermath. In 2004 it was ranked #174 on Rolling Stone magazine\'s list of the 500 Greatest Songs of All Time.

The song began with Wyman playing organ at a recording session, in parody of the group\'s former co-manager Eric Easton, who had been an organist. <a href="http://www.last.fm/music/The+Rolling+Stones/_/Paint+It+Black">Read more on Last.fm</a>.',
                        'song_id' => 491,
                        'created_at' => '2018-04-28 12:29:56',
                        'updated_at' => '2018-04-28 12:29:56',
                    ),
                    324 => 
                    array (
                        'name' => 'summary',
                        'value' => '\'Start Me Up\' is a song by The Rolling Stones featured on the 1981. album "Tattoo You" and is often used to open the Stones\' concerts.

The song opens with what has since become a trademark riff for Keith Richards. It is this, coupled with Charlie Watts\' steady backbeat and Bill Wyman\'s echoing bass, that comprises most of the song. Lead guitarist Ronnie Wood can clearly be heard playing a layered variation of Richards\' main riff. Often live versions of the song are lengthened by giving Wood a solo near the middle of the song <a href="http://www.last.fm/music/The+Rolling+Stones/_/Start+Me+Up">Read more on Last.fm</a>.',
                        'song_id' => 492,
                        'created_at' => '2018-04-28 12:29:57',
                        'updated_at' => '2018-04-28 12:29:57',
                    ),
                    325 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Sympathy for the Devil" is a song by The Rolling Stones which first appeared as the opening track on the band\'s 1968 album Beggars Banquet.

The recording of "Sympathy for the Devil" began at London\'s Olympic Sound Studios on June 4 1968 and continued into the next day; overdubs were done on June 8, 9, and 10. Personnel included on the recording include Nicky Hopkins on piano; Rocky Dijon on congas; Bill Wyman on maracas. Marianne Faithfull, Anita Pallenberg <a href="http://www.last.fm/music/The+Rolling+Stones/_/Sympathy+for+the+Devil">Read more on Last.fm</a>.',
                        'song_id' => 493,
                        'created_at' => '2018-04-28 12:29:58',
                        'updated_at' => '2018-04-28 12:29:58',
                    ),
                    326 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Wild Horses" is a song by the Rolling Stones from their 1971 album Sticky Fingers, Rolling Stone ranked it at #334 in its "500 Greatest Songs of All Time" list in 2004.

Originally recorded over a three day period at Muscle Shoals Sound Studio in Alabama during December 2-4, 1969, the song was not released until over a year later due to legal wranglings with the band\'s former label.
Prior to its release on "Sticky Fingers", Gram Parsons convinced Jagger and Richards to allow him to record "Wild Horses" with his band <a href="http://www.last.fm/music/The+Rolling+Stones/_/Wild+Horses">Read more on Last.fm</a>.',
                        'song_id' => 494,
                        'created_at' => '2018-04-28 12:30:00',
                        'updated_at' => '2018-04-28 12:30:00',
                    ),
                    327 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Oh, Pretty Woman", released in 1964, was a worldwide success for Roy Orbison. In the US, the song spent three weeks at number one on the Billboard Hot 100. Recorded on the Monument Records label in Nashville, Tennessee, it was written by Roy Orbison and Bill Dees.  <a href="http://www.last.fm/music/Roy+Orbison/_/Oh,+Pretty+Woman">Read more on Last.fm</a>.',
                        'song_id' => 496,
                        'created_at' => '2018-04-28 12:30:03',
                        'updated_at' => '2018-04-28 12:30:03',
                    ),
                    328 => 
                    array (
                        'name' => 'summary',
                        'value' => 'This song, written by Leonard Cohen was adapted for John Cale. It differs from the original and has extra verses. 

In 1994, Jeff Buckley covered "the Cale version" on his Grace album.

Although the John Cale performance of “Hallelujah” was used in the film Shrek , because of difficulties concerning Cale\'s contract with a competing record company, it was not possible to include it on the soundtrack album, Shrek - Music From the Original Motion Picture. <a href="http://www.last.fm/music/Rufus+Wainwright/_/Hallelujah">Read more on Last.fm</a>.',
                        'song_id' => 497,
                        'created_at' => '2018-04-28 12:30:04',
                        'updated_at' => '2018-04-28 12:30:04',
                    ),
                    329 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Closing Time" is a song by Semisonic from their album Feeling Strangely Fine. The band\'s most popular song, it was written by Dan Wilson and produced by Nick Launay. According to the Closing Time Songfacts, this remains a popular song at bars when they are ready to pack it up. There no mistaking the message: "You don\'t have to go home, but you can\'t stay here."

The song was nominated for the Grammy Award for Best Rock Song in 1999. It peaked at #1 on the Modern Rock Tracks and #25 on the UK singles chart. <a href="http://www.last.fm/music/Semisonic/_/Closing+Time">Read more on Last.fm</a>.',
                        'song_id' => 500,
                        'created_at' => '2018-04-28 12:30:09',
                        'updated_at' => '2018-04-28 12:30:09',
                    ),
                    330 => 
                    array (
                        'name' => 'summary',
                    'value' => '"If It Makes You Happy" is a lead single off Sheryl Crow\'s second studio album, "Sheryl Crow" (1996). Written in collaboration with Jeff Trott, Trott said, "If It Makes You Happy was written before I met Sheryl Crow. I was originally going to use it on what would have become my first solo album. But Sheryl liked it and used it.". The track helped win Crow "Best Female Rock Vocal Performance" at the 1997 Grammy Awards, and it peaked at #10 on the US Billboard charts. <a href="http://www.last.fm/music/Sheryl+Crow/_/If+It+Makes+You+Happy">Read more on Last.fm</a>.',
                        'song_id' => 504,
                        'created_at' => '2018-04-28 12:30:14',
                        'updated_at' => '2018-04-28 12:30:14',
                    ),
                    331 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Pure americano with a bit of pop feel <a href="http://www.last.fm/music/Sheryl+Crow/_/Leaving+Las+Vegas">Read more on Last.fm</a>.',
                        'song_id' => 505,
                        'created_at' => '2018-04-28 12:30:16',
                        'updated_at' => '2018-04-28 12:30:16',
                    ),
                    332 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Tomorrow Never Dies", composed by Sheryl Crow and Mitchell Froom, was the theme song to the 1997 James Bond film of the same name. <a href="http://www.last.fm/music/Sheryl+Crow/_/Tomorrow+Never+Dies">Read more on Last.fm</a>.',
                        'song_id' => 508,
                        'created_at' => '2018-04-28 12:30:20',
                        'updated_at' => '2018-04-28 12:30:20',
                    ),
                    333 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Goldfinger" was the title song from the 1964 James Bond film Goldfinger. Composed by John Barry with lyrics by Leslie Bricusse and Anthony Newley, the song was performed by Shirley Bassey for the film\'s opening and closing title sequences, as well as the soundtrack album release. The single release of the song gave Bassey her only US top ten hit, peaking at #8; in the UK, the single reached #21. The song was produced by George Martin, who was also busy producing The Beatles. <a href="http://www.last.fm/music/Shirley+Bassey/_/Goldfinger">Read more on Last.fm</a>.',
                        'song_id' => 509,
                        'created_at' => '2018-04-28 12:30:22',
                        'updated_at' => '2018-04-28 12:30:22',
                    ),
                    334 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Heaven Knows I\'m Miserable Now" is a single by The Smiths that reached #10 on the UK Singles Chart in June 1984 before its inclusion on the compilation album, Hatful of Hollow. It is listed as one of the Rock and Roll Hall of Fame\'s 500 Songs that Shaped Rock and Roll. The song is notable for marking the beginning of producer Stephen Street\'s working relationship with the band. As one of his first roles as "in-house engineer" at Island Records\' Fallout Shelter studios, Street engineered the session. <a href="http://www.last.fm/music/The+Smiths/_/Heaven+Knows+I%27m+Miserable+Now">Read more on Last.fm</a>.',
                        'song_id' => 511,
                        'created_at' => '2018-04-28 12:30:25',
                        'updated_at' => '2018-04-28 12:30:25',
                    ),
                    335 => 
                    array (
                        'name' => 'summary',
                    'value' => 'There Is a Light That Never Goes Out is a song by The Smiths, written by Morrissey and Johnny Marr. It was originally featured on their 1986 album The Queen Is Dead, but despite its popularity it was not released as a single until 1992, after The Smiths split up. Morrissey re-released the song as a double A-side live single (with his cover of Patti Smith\'s Redondo Beach) in 2005, which reached #11 in the UK singles chart. The song has been voted highly in numerous "best ever" song lists. <a href="http://www.last.fm/music/The+Smiths/_/There+Is+a+Light+That+Never+Goes+Out">Read more on Last.fm</a>.',
                        'song_id' => 512,
                        'created_at' => '2018-04-28 12:30:27',
                        'updated_at' => '2018-04-28 12:30:27',
                    ),
                    336 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Tainted Love", composed by Ed Cobb and firstsung by Gloria Jones, attained worldwide fame after being covered by Soft Cell in 1981, and has since been covered by numerous other groups and artists.

Soft Cell\'s record label chose to release "Tainted Love" on July 7, 1981 as the band\'s second single (their first was "Memorabilia", which did not chart). The label implied that this single would be Soft Cell\'s final release if the single did not sell. <a href="http://www.last.fm/music/Soft+Cell/_/Tainted+Love">Read more on Last.fm</a>.',
                        'song_id' => 513,
                        'created_at' => '2018-04-28 12:30:28',
                        'updated_at' => '2018-04-28 12:30:28',
                    ),
                    337 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Born to Be Wild" is a rock song written by Mars Bonfire (actual name Dennis Eugene McCrohan, born 21 April 1943 in Oshawa, Ontario, Canada; name changed to Dennis Edmonton in the early 1960s); it was made famous by the Canadian rock band, Steppenwolf. Often used in popular culture and in movie soundtracks, most notably in the soundtrack for the movie "Easy Rider" (1969), the song is sometimes described as the first heavy metal song ever written and <a href="http://www.last.fm/music/Steppenwolf/_/Born+to+Be+Wild">Read more on Last.fm</a>.',
                        'song_id' => 514,
                        'created_at' => '2018-04-28 12:30:30',
                        'updated_at' => '2018-04-28 12:30:30',
                    ),
                    338 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Dakota" is a song by the Welsh band Stereophonics. It was the first single from their fifth studio album Language. Sex. Violence. Other? and was released on February 28, 2005. 

It was the first Stereophonics single to reach #1 on the UK Singles Chart.

"Dakota" is also the soundtrack of EA Sports game FIFA Manager 06. <a href="http://www.last.fm/music/Stereophonics/_/Dakota">Read more on Last.fm</a>.',
                        'song_id' => 515,
                        'created_at' => '2018-04-28 12:30:31',
                        'updated_at' => '2018-04-28 12:30:31',
                    ),
                    339 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Just Looking" is the second single from rock band the Stereophonics taken from the their second album Performance and Cocktails. It was released in February 1999. It reached #4 in the UK charts.

The song is track 5 on Performance and Cocktails. An acoustic version is found on CD 2 of the "Step On My Old Size Nines" single.

The music video features the band in a car with Stuart Cable driving, he offers the other members a Jelly baby and the car ends up sinking underwater. <a href="http://www.last.fm/music/Stereophonics/_/Just+Looking">Read more on Last.fm</a>.',
                        'song_id' => 522,
                        'created_at' => '2018-04-28 12:30:41',
                        'updated_at' => '2018-04-28 12:30:41',
                    ),
                    340 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Maybe Tomorrow" is a single from the Stereophonics 2003 album You Gotta Go There to Come Back. It is featured in the soundtrack of the academy award winner movie Crash. It has more of a jazz ambience than some of their other songs and this and the whole album were considered a departure from the classic rock sound of previous album Just Enough Education to Perform. This song is their second highest-charting, peaking at #3 on the UK Singles Chart in July 2003. Kelly Jones typically plays the song alone on stage when performing live. <a href="http://www.last.fm/music/Stereophonics/_/Maybe+Tomorrow">Read more on Last.fm</a>.',
                        'song_id' => 526,
                        'created_at' => '2018-04-28 12:30:47',
                        'updated_at' => '2018-04-28 12:30:47',
                    ),
                    341 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Mr. Writer" is the first single from rock band the Stereophonics  taken from the their third album Just Enough Education to Perform. It was released in March 2001. It reached #5 in the UK charts.

The song is track 3 on the album. A live version from Millennium Stadium Cardiff is on the "Vegas Two Times" single. It was written in response to a journalist who had toured with the band and had later gave them negative reviews. The song has being attributed as one of the factors that has caused the group\'s uneasy relationship with the media. <a href="http://www.last.fm/music/Stereophonics/_/Mr+Writer">Read more on Last.fm</a>.',
                        'song_id' => 528,
                        'created_at' => '2018-04-28 12:30:51',
                        'updated_at' => '2018-04-28 12:30:51',
                    ),
                    342 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The song was first featured in the 1984 comedy The Woman in Red. The song won both a Golden Globe and an Academy Award for Best Original Song in 1984. <a href="http://www.last.fm/music/Stevie+Wonder/_/I+Just+Called+to+Say+I+Love+You">Read more on Last.fm</a>.',
                        'song_id' => 534,
                        'created_at' => '2018-04-28 12:30:59',
                        'updated_at' => '2018-04-28 12:30:59',
                    ),
                    343 => 
                    array (
                        'name' => 'summary',
                    'value' => 'The chorus lyric ("I am the resurrection and I am the life") was taken from a church board Ian Brown had seen, quite appropriately, as this song has religious power. Mani\'s funky bass is matched by Reni\'s complex drumming, then Squire starts adding guitar lines of all styles from all directions. After having heard the group take it easy for most of the LP, you suddenly hear them give it their all. Squire\'s and Reni\'s playing gets harder and faster, and harder, and faster, and then there is a sudden stop. <a href="http://www.last.fm/music/The+Stone+Roses/_/I+Am+the+Resurrection">Read more on Last.fm</a>.',
                        'song_id' => 537,
                        'created_at' => '2018-04-28 12:31:04',
                        'updated_at' => '2018-04-28 12:31:04',
                    ),
                    344 => 
                    array (
                        'name' => 'summary',
                        'value' => '"I Wanna Be Adored" was the third single from The Stone Roses. It was released in the UK, U.S., Germany, Japan, and Canada. The US edition was released at the same time as "Fools Gold" in 1989 and charted at #18 on the Billboard Modern Rock Charts in 1990 .

"I Wanna Be Adored" was the atmospheric opener to The Stone Roses self-titled debut. The song is propelled by Mani\'s recognisable bass line, John Squire\'s droning guitars and Ian Brown\'s hushed ominous vocals, repeating only a few lines of lyrics throughout the entire song. <a href="http://www.last.fm/music/The+Stone+Roses/_/I+Wanna+Be+Adored">Read more on Last.fm</a>.',
                        'song_id' => 538,
                        'created_at' => '2018-04-28 12:31:06',
                        'updated_at' => '2018-04-28 12:31:06',
                    ),
                    345 => 
                    array (
                        'name' => 'summary',
                    'value' => 'John Squire (Speaking to the NME, 1989): "Made of Stone about making a wish and watching it happen. Like scoring a goal in a Cup final...on a Harley Electroglide...dressed as Spider-Man".

The band made their debut on national British TV by performing this song on BBC 2\'s cultural show "The Late Show" in September 1989, resulting in a power cut 60 seconds into the song and Ian Brown infamously walking off shouting "Amateurs!"

B-side Guernica (the title of which references Pablo Picasso\'s Guernica) is made of stone in reverse <a href="http://www.last.fm/music/The+Stone+Roses/_/Made+of+Stone">Read more on Last.fm</a>.',
                        'song_id' => 539,
                        'created_at' => '2018-04-28 12:31:07',
                        'updated_at' => '2018-04-28 12:31:07',
                    ),
                    346 => 
                    array (
                        'name' => 'summary',
                    'value' => 'The Stranglers - "Golden Brown" (Dec \'81,  Liberty), is a track (first released on 7", then on the "La Folie" album, the same month), with much controversy surrounding it\'s lyrics. "The Stranglers Song By Song" (Hugh Cornwell\'s book), states: "\'Golden Brown\' works on two levels - It\'s about heroin & also about a girl". Essentially, the lyrics describe how "both provided me with pleasurable times." 

Sites: LyricWiki. <a href="http://www.last.fm/music/The+Stranglers/_/Golden+Brown">Read more on Last.fm</a>.',
                        'song_id' => 543,
                        'created_at' => '2018-04-28 12:31:13',
                        'updated_at' => '2018-04-28 12:31:13',
                    ),
                    347 => 
                    array (
                        'name' => 'summary',
                        'value' => ' <a href="http://www.last.fm/music/The+Stranglers/_/No+More+Heroes">Read more on Last.fm</a>.',
                        'song_id' => 544,
                        'created_at' => '2018-04-28 12:31:15',
                        'updated_at' => '2018-04-28 12:31:15',
                    ),
                    348 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Reptilia" is the second single lifted from Room on Fire, the second album of acclaimed American garage rock/post-punk band The Strokes. The single\'s B-side contains "Modern Girls & Old Fashion Men", where lead singer Julian Casablancas duets with Regina Spektor. The official release date was delayed slightly after Casablancas objected to the song being credited as "The Strokes and Regina Spektor", claiming that it should read "by Regina Spektor & The Strokes". <a href="http://www.last.fm/music/The+Strokes/_/Reptilia">Read more on Last.fm</a>.',
                        'song_id' => 545,
                        'created_at' => '2018-04-28 12:31:16',
                        'updated_at' => '2018-04-28 12:31:16',
                    ),
                    349 => 
                    array (
                        'name' => 'summary',
                        'value' => '1982, Album of same name.
Dave Bickler sang lead.
The theme song to Rocky III. 
The track won a Grammy for Best Rock Performance By a Duo or Group.
<a href="http://www.last.fm/music/Survivor/_/Eye+of+the+Tiger">Read more on Last.fm</a>.',
                        'song_id' => 546,
                        'created_at' => '2018-04-28 12:31:18',
                        'updated_at' => '2018-04-28 12:31:18',
                    ),
                    350 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Shake It Off" is a song recorded by American singer-songwriter Taylor Swift for her fifth studio album 1989, marking a rapid departure from her signature country pop musical style in favor of a more "radio-friendly" format. The song was released as the lead single from the album on August 18, 2014, by Big Machine Records. An accompanying music video directed by Mark Romanek was released on the same day as the song\'s release. <a href="http://www.last.fm/music/Taylor+Swift/_/Shake+It+Off">Read more on Last.fm</a>.',
                        'song_id' => 550,
                        'created_at' => '2018-04-28 12:31:24',
                        'updated_at' => '2018-04-28 12:31:24',
                    ),
                    351 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Heaven Knows" is a song by American rock band The Pretty Reckless from their second studio album, Going to Hell. It was released on November 19, 2013 as the album\'s second single. The song was written by Taylor Momsen and Ben Phillips, while Kato Khandwala was responsible for the production. "Heaven Knows" is the band\'s first single to top the Mainstream Rock Billboard chart, and the second single to top UK Rock Singles Chart, following their debut single "Make Me Wanna Die". <a href="http://www.last.fm/music/The+Pretty+Reckless/_/Heaven+Knows">Read more on Last.fm</a>.',
                        'song_id' => 558,
                        'created_at' => '2018-04-28 12:31:35',
                        'updated_at' => '2018-04-28 12:31:35',
                    ),
                    352 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Make Me Wanna Die" a song by American alternative rock band The Pretty Reckless from their debut studio album, Light Me Up (2010). The song was written by Taylor Momsen, Ben Phillips, and Kato Khandwala, and produced by the latter. It was released on May 13, 2010 as the album\'s lead single. It topped the UK Rock chart. <a href="http://www.last.fm/music/The+Pretty+Reckless/_/Make+Me+Wanna+Die">Read more on Last.fm</a>.',
                        'song_id' => 560,
                        'created_at' => '2018-04-28 12:31:38',
                        'updated_at' => '2018-04-28 12:31:38',
                    ),
                    353 => 
                    array (
                        'name' => 'summary',
                        'value' => '“Take Me Down” is the first single off The Pretty Reckless\' third full length album “Who You Selling For”. It topped the Billboard Mainstream Rock Songs chart in 2016, the band\'s fourth single to do so at the time.

The song is about Taylor meeting the devil at a crossroads to sell her soul in exchange for talent. If that sounds familiar, it’s because the song was inspired by blues musician Robert Johnson, who made that very claim about the source of his own talent.

<a href="http://www.last.fm/music/The+Pretty+Reckless/_/Take+Me+Down">Read more on Last.fm</a>.',
                        'song_id' => 564,
                        'created_at' => '2018-04-28 12:31:44',
                        'updated_at' => '2018-04-28 12:31:44',
                    ),
                    354 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The song can be found on the album Vagabonds of the Western World. <a href="http://www.last.fm/music/Thin+Lizzy/_/Whiskey+in+the+Jar">Read more on Last.fm</a>.',
                        'song_id' => 566,
                        'created_at' => '2018-04-28 12:31:47',
                        'updated_at' => '2018-04-28 12:31:47',
                    ),
                    355 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Teenage Kicks" is the debut single by Irish punk rock/new wave band The Undertones. Written in the summer of 1977 by the band\'s principal songwriter, John O\'Neill, the song was recorded on 16 June 1978 and initially released that September upon independent Belfast record label Good Vibrations, before the band—at the time unobligated to any record label—signed to Sire Records on 2 October 1978. Sire Records subsequently obtained all copyrights <a href="http://www.last.fm/music/The+Undertones/_/Teenage+Kicks">Read more on Last.fm</a>.',
                        'song_id' => 572,
                        'created_at' => '2018-04-28 12:31:56',
                        'updated_at' => '2018-04-28 12:31:56',
                    ),
                    356 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The classic, musical adaption of Leopold von Sacher-Masoch\'s homage to feminine dominance.  Published in 1870, VENUS IN FURS created such a sensation that it was his name that became the root behind "Masochism."  Velvet Underground created this musical tribute to the dark side of sexuality in what has become an underground classic within the S/m scene. <a href="http://www.last.fm/music/The+Velvet+Underground/_/Venus+in+Furs">Read more on Last.fm</a>.',
                        'song_id' => 576,
                        'created_at' => '2018-04-28 12:32:02',
                        'updated_at' => '2018-04-28 12:32:02',
                    ),
                    357 => 
                    array (
                        'name' => 'summary',
                        'value' => 'According to the Bitter Sweet Symphony Songfacts, the lyrics are a somber look at the ennui of everyday life: "You\'re a slave to money, then you die."

"Bitter Sweet Symphony" samples an obscure orchestral version of  The Last Time , a 1965 song by The Rolling Stones . This was recorded before they got permission from the Stones to use the riff, so the Verve had to sign away most of the royalties from this in order to release it.
<a href="http://www.last.fm/music/The+Verve/_/Bitter+Sweet+Symphony">Read more on Last.fm</a>.',
                        'song_id' => 577,
                        'created_at' => '2018-04-28 12:32:03',
                        'updated_at' => '2018-04-28 12:32:03',
                    ),
                    358 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Lucky Man" is a song by the band The Verve and is featured on their third album, Urban Hymns. It was released 24 November 1997 as the third single from the album, charting at #7 in the UK Singles Chart. The song was also the band\'s second, and so far last Top 20 hit in the USA.

The track featured prominently in the prom scene at the final climax of the 2004 film The Girl Next Door. It was also recently featured in the movie Marley & Me (2008).
<a href="http://www.last.fm/music/The+Verve/_/Lucky+Man">Read more on Last.fm</a>.',
                        'song_id' => 578,
                        'created_at' => '2018-04-28 12:32:05',
                        'updated_at' => '2018-04-28 12:32:05',
                    ),
                    359 => 
                    array (
                        'name' => 'summary',
                        'value' => ' <a href="http://www.last.fm/music/The+Verve/_/Sonnet">Read more on Last.fm</a>.',
                        'song_id' => 579,
                        'created_at' => '2018-04-28 12:32:07',
                        'updated_at' => '2018-04-28 12:32:07',
                    ),
                    360 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The title track from the 1988 album, reached third place on Billboard\'s Modern Rock chart. The single for the song reached position thirty two on the UK singles charts in 1989 and position seventy five, when re-issued in 1991. Country music song "The Lost Highway" was the B-side, and featured Liam O\'Maonlai on the piano. "Fisherman\'s Blues" has appeared on the soundtracks of the movies Good Will Hunting and Waking Ned Devine. <a href="http://www.last.fm/music/The+Waterboys/_/Fisherman%27s+Blues">Read more on Last.fm</a>.',
                        'song_id' => 580,
                        'created_at' => '2018-04-28 12:32:08',
                        'updated_at' => '2018-04-28 12:32:08',
                    ),
                    361 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Here I Go Again" peaked at #1 on the U.S. Billboard Hot 100 Chart in the Autumn of 1987...Whitesnake leader David Coverdale wrote this song in Portugal. While it\'s typically thought of as an inspiring song about facing your challenges head-on, it\'s really a song about heartbreak and the loneliness that comes with it. The song documents the breakdown of Coverdale\'s first marriage to Julia, who he tied the knot with in 1974.
This was written in 1981 after Whitesnake toured the UK. <a href="http://www.last.fm/music/Whitesnake/_/Here+I+Go+Again">Read more on Last.fm</a>.',
                        'song_id' => 582,
                        'created_at' => '2018-04-28 12:32:12',
                        'updated_at' => '2018-04-28 12:32:12',
                    ),
                    362 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Here I Go Again" peaked at #1 on the U.S. Billboard Hot 100 Chart in the Autumn of 1987...Whitesnake leader David Coverdale wrote this song in Portugal. While it\'s typically thought of as an inspiring song about facing your challenges head-on, it\'s really a song about heartbreak and the loneliness that comes with it. The song documents the breakdown of Coverdale\'s first marriage to Julia, who he tied the knot with in 1974.
This was written in 1981 after Whitesnake toured the UK. <a href="http://www.last.fm/music/Whitesnake/_/Here+I+Go+Again">Read more on Last.fm</a>.',
                        'song_id' => 583,
                        'created_at' => '2018-04-28 12:32:13',
                        'updated_at' => '2018-04-28 12:32:13',
                    ),
                    363 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Fell in Love with a Girl" is a song by the American garage rock band The White Stripes, written and produced by Jack White for the band\'s third studio album, White Blood Cells (2001). Released as the album\'s second single in 2002, it reached number twenty-one on both the U.S. Bubbling Under Hot 100 Singles and the UK Singles Chart. The song was covered in 2003 as "Fell in Love with a Boy" by Joss Stone and as a lounge song by Richard Cheese and Lounge Against the Machine for their 2002 album Tuxicity. <a href="http://www.last.fm/music/The+White+Stripes/_/Fell+in+Love+With+a+Girl">Read more on Last.fm</a>.',
                        'song_id' => 585,
                        'created_at' => '2018-04-28 12:32:16',
                        'updated_at' => '2018-04-28 12:32:16',
                    ),
                    364 => 
                    array (
                        'name' => 'summary',
                        'value' => '"I Just Don\'t Know What to Do with Myself" is originally a song by Dusty Springfield written by Burt Bacharach and Hal David.

<a href="http://www.last.fm/music/The+White+Stripes/_/I+Just+Don%27t+Know+What+to+Do+With+Myself">Read more on Last.fm</a>.',
                        'song_id' => 586,
                        'created_at' => '2018-04-28 12:32:18',
                        'updated_at' => '2018-04-28 12:32:18',
                    ),
                    365 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Seven Nation Army" is the first track on the album Elephant by American alternative rock band The White Stripes. It was released as a single in 2003, and is one of the best-known songs from the band. Seven Nation Army reached #1 on the Modern Rock Tracks for three weeks and won 2004\'s Grammy Award for Best Rock Song. The song is known for its underlying riff, which plays throughout most of the song. Although it sounds like a bass guitar (an instrument the group had famously never previously used) <a href="http://www.last.fm/music/The+White+Stripes/_/Seven+Nation+Army">Read more on Last.fm</a>.',
                        'song_id' => 587,
                        'created_at' => '2018-04-28 12:32:19',
                        'updated_at' => '2018-04-28 12:32:19',
                    ),
                    366 => 
                    array (
                        'name' => 'summary',
                    'value' => '"I Wanna Dance with Somebody (Who Loves Me)" peaked at #1 on the U.S. Billboard Hot 100 Chart, U.S. Billboard Hot Dance Club Play Chart and the U.S. Billboard Adult Contemporary Chart in the Summer of 1987. <a href="http://www.last.fm/music/Whitney+Houston/_/I+Wanna+Dance+with+Somebody+(Who+Loves+Me)">Read more on Last.fm</a>.',
                        'song_id' => 588,
                        'created_at' => '2018-04-28 12:32:20',
                        'updated_at' => '2018-04-28 12:32:20',
                    ),
                    367 => 
                    array (
                        'name' => 'summary',
                    'value' => 'If my info is correct, this song was originally written about a sniper in Vietnam (or maybe Korea?).  It makes sense when you know this.... <a href="http://www.last.fm/music/The+Who/_/Behind+Blue+Eyes">Read more on Last.fm</a>.',
                        'song_id' => 590,
                        'created_at' => '2018-04-28 12:32:24',
                        'updated_at' => '2018-04-28 12:32:24',
                    ),
                    368 => 
                    array (
                        'name' => 'summary',
                        'value' => '"My Generation" is a song by the British rock group The Who, which became a hit and one of their most recognizable songs. It has entered the rock and roll pantheon as one of the most celebrated, cited, and referenced songs in the idiom; it was named the 11th greatest song by Rolling Stone on their list of the 500 Greatest Songs of All Time and 13th on VH1\'s list of the 100 Greatest Songs of Rock & Roll,. It\'s also part of The Rock and Roll Hall of <a href="http://www.last.fm/music/The+Who/_/My+Generation">Read more on Last.fm</a>.',
                        'song_id' => 591,
                        'created_at' => '2018-04-28 12:32:26',
                        'updated_at' => '2018-04-28 12:32:26',
                    ),
                    369 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Pinball Wizard" is a song written by Pete Townshend and performed by the English rock band The Who, and featured on their 1969 rock opera Tommy. The original recording was released as a single in 1969 and reached #4 in the UK charts. 

The lyrics are written from the perspective of a pinball champion, called "Local Lad" in the Tommy libretto book, astounded by the skills of the opera\'s eponymous main character, Tommy Walker: "That deaf, dumb, blind kid sure plays a mean pinball" <a href="http://www.last.fm/music/The+Who/_/Pinball+Wizard">Read more on Last.fm</a>.',
                        'song_id' => 592,
                        'created_at' => '2018-04-28 12:32:27',
                        'updated_at' => '2018-04-28 12:32:27',
                    ),
                    370 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The unedited version of The Who\'s hit song Who Are You. Released in 1978, this song is considered to be one of the greatest songs in rock history.

Who Are You", composed by Pete Townshend, is the title track on The Who\'s 1978 release, Who Are You, the last album released before drummer Keith Moon\'s death in September 1978. It was released as a double-A sided single with the John Entwistle composition "Had Enough", also featured on the album. The song became one of the band\'s biggest US hits, peaking at #14. <a href="http://www.last.fm/music/The+Who/_/Who+Are+You">Read more on Last.fm</a>.',
                        'song_id' => 593,
                        'created_at' => '2018-04-28 12:32:29',
                        'updated_at' => '2018-04-28 12:32:29',
                    ),
                    371 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Won\'t Get Fooled Again" is a song by the rock band The Who. Written by Pete Townsend, it combines guitar power chords with heavily processed organ and synthesizer sounds to create a textured, atmospheric introduction that explodes into the verse. It tells of a "revolution of revolutions" in an endless cycle, where "the change it had to come, we knew it all along" but each successive new regime turns out to be just like the old one, so that straight away it\'s time once again to "pick up my guitar and play <a href="http://www.last.fm/music/The+Who/_/Won%27t+Get+Fooled+Again">Read more on Last.fm</a>.',
                        'song_id' => 594,
                        'created_at' => '2018-04-28 12:32:30',
                        'updated_at' => '2018-04-28 12:32:30',
                    ),
                    372 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Cover of Steve Goodman\'s City of New Orleans. <a href="http://www.last.fm/music/Willie+Nelson/_/City+of+New+Orleans">Read more on Last.fm</a>.',
                        'song_id' => 596,
                        'created_at' => '2018-04-28 12:32:33',
                        'updated_at' => '2018-04-28 12:32:33',
                    ),
                    373 => 
                    array (
                        'name' => 'summary',
                        'value' => ' <a href="http://www.last.fm/music/Yeah+Yeah+Yeahs/_/Maps">Read more on Last.fm</a>.',
                        'song_id' => 598,
                        'created_at' => '2018-04-28 12:32:36',
                        'updated_at' => '2018-04-28 12:32:36',
                    ),
                    374 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The track "If I Can\'t Have You"  was a #1 hit in the US when it was released in 1977.
This track was written by Barry, Robin and Maurice Gibb of the Bee Gees and appear on the the Saturday Night Fever soundtrack
<a href="http://www.last.fm/music/Yvonne+Elliman/_/If+I+Can%27t+Have+You">Read more on Last.fm</a>.',
                        'song_id' => 601,
                        'created_at' => '2018-04-28 12:32:41',
                        'updated_at' => '2018-04-28 12:32:41',
                    ),
                    375 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Clarity is a song by German/Russian electronic dance music producer Zedd, and the title track from Zedd\'s debut studio album Clarity. It features vocals from English singer Foxes. The song was produced by Zedd and written by Zedd, Matthew Koma, Porter Robinson and Skylar Grey and released as iTunes Single of the Week on October 2, 2012, and as an EP on February 12, 2013 via Interscope Records.
Zedd has released an extended mix of the song exclusively on Beatport on November 12, 2012. <a href="http://www.last.fm/music/Zedd/_/Clarity">Read more on Last.fm</a>.',
                        'song_id' => 602,
                        'created_at' => '2018-04-28 12:32:42',
                        'updated_at' => '2018-04-28 12:32:42',
                    ),
                    376 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Heavy Rotation" (ヘビーローテーション; Hebī Rōtēshon) is Japanese idol group AKB48\'s 17th single, released on August 18, 2010. The video was directed by photographer and movie producer Mika Ninagawa. <a href="http://www.last.fm/music/AKB48/_/%E3%83%98%E3%83%93%E3%83%BC%E3%83%AD%E3%83%BC%E3%83%86%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3">Read more on Last.fm</a>.',
                        'song_id' => 603,
                        'created_at' => '2018-04-28 12:32:44',
                        'updated_at' => '2018-04-28 12:32:44',
                    ),
                    377 => 
                    array (
                        'name' => 'summary',
                        'value' => '"恋するフォーチュンクッキー" / Koi Suru Fortune Cookie is the main song from AKB48\'s 32nd single Koi Suru Fortune Cookie, by Senbatsu.

Performing Members:
Team A: Takahashi Minami, Shinoda Mariko, Yokoyama Yui, Watanabe Mayu
Team K: Itano Tomomi, Oshima Yuko
Team B: Kashiwagi Yuki, Kojima Haruna, Shimazaki Haruka
Team S (SKE48): Matsui Jurina
Team KII (SKE48): Suda Akari
Team E (SKE48): Matsui Rena
Team N (NMB48): Yamamoto Sayaka, Watanabe Miyuki
Team H (HKT48): Sashihara Rino
SNH48 Research Students: Miyazawa Sae  <a href="http://www.last.fm/music/AKB48/_/%E6%81%8B%E3%81%99%E3%82%8B%E3%83%95%E3%82%A9%E3%83%BC%E3%83%81%E3%83%A5%E3%83%B3%E3%82%AF%E3%83%83%E3%82%AD%E3%83%BC">Read more on Last.fm</a>.',
                        'song_id' => 606,
                        'created_at' => '2018-04-28 12:32:49',
                        'updated_at' => '2018-04-28 12:32:49',
                    ),
                    378 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Do They Know It\'s Christmas?" is a song written by Bob Geldof and Midge Ure in 1984 to raise money for relief of 1984–1985 famine in Ethiopia. The original version was produced by Midge Ure and released by Band Aid on 29 November 1984.

In late 1984, a BBC report by Michael Buerk was aired highlighting the famine that had hit the people of Ethiopia. Irish singer Bob Geldof saw the report and wanted to raise money. He called Midge Ure from Ultravox and together they quickly co-wrote the song, "Do They Know It\'s Christmas?". <a href="http://www.last.fm/music/Band+Aid/_/Do+They+Know+It%27s+Christmas%3F">Read more on Last.fm</a>.',
                        'song_id' => 643,
                        'created_at' => '2019-10-29 22:46:18',
                        'updated_at' => '2019-10-29 22:46:18',
                    ),
                    379 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Rockin\' Around the Christmas Tree" is a Christmas song written by Johnny Marks and recorded by Brenda Lee in 1958. By the song\'s 50th anniversary in 2008, Lee\'s original version had sold over 25 million copies with the 4th most digital downloads sold of any Christmas single, and has since been recorded by numerous other music artists.

Despite her mature-sounding voice, Lee recorded this song when she was only thirteen years old. The song\'s declaration of a rock and roll sound notwithstanding <a href="http://www.last.fm/music/Brenda+Lee/_/Rockin%27+Around+The+Christmas+Tree">Read more on Last.fm</a>.',
                        'song_id' => 645,
                        'created_at' => '2019-10-29 22:46:21',
                        'updated_at' => '2019-10-29 22:46:21',
                    ),
                    380 => 
                    array (
                        'name' => 'summary',
                    'value' => '...Baby One More Time was the lead single from Britney Spears\' debut album (also titled ...Baby One More Time) and was written and co-produced by Max Martin, a prolific Swedish music producer.  The single was released in October of 1998 and quickly climbed to the number one position on the Billboard Hot 100 in 1999, where it stayed for two weeks.  Internationally, the single reached number one in every country that it charted, including the United Kingdom,  France, Australia, and Spain.   <a href="http://www.last.fm/music/Britney+Spears/_/...Baby+One+More+Time">Read more on Last.fm</a>.',
                        'song_id' => 646,
                        'created_at' => '2019-10-29 22:46:22',
                        'updated_at' => '2019-10-29 22:46:22',
                    ),
                    381 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Everytime" is a song written by American singer-songwriter Britney Spears and her back-up singer Annette Stamatelatos, and is included on Spears\' fourth album In the Zone (2003). 

According to the Everytime Songfacts, Britney wrote this about her ex-boyfriend, Justin Timberlake.  She said she wrote it at a hard time in her life.

Produced by Guy Sigsworth, it was released as the album\'s third single during the second quarter of 2004. Critics have rated the song <a href="http://www.last.fm/music/Britney+Spears/_/Everytime">Read more on Last.fm</a>.',
                        'song_id' => 647,
                        'created_at' => '2019-10-29 22:46:24',
                        'updated_at' => '2019-10-29 22:46:24',
                    ),
                    382 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Oops!...I Did It Again" is a song by American singer Britney Spears, from her second album of the same name. It was released on March 27, 2000, by JIVE Records as the lead single from the album. The song was written and produced by Max Martin and Rami Yacoub. "Oops!... I Did It Again" is a song that lyrically speaks of a female who views love as a game, and she decides to use that to her advantage by playing with her lover\'s emotions. Its bridge features a dialogue which references the blockbuster film Titanic (1997). <a href="http://www.last.fm/music/Britney+Spears/_/Oops%21...I+Did+It+Again">Read more on Last.fm</a>.',
                        'song_id' => 649,
                        'created_at' => '2019-10-29 22:46:27',
                        'updated_at' => '2019-10-29 22:46:27',
                    ),
                    383 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Sometimes" is a song by American recording artist Britney Spears. The song was written by Jörgen Elofsson and produced by Per Magnusson and David Krueger for Spears\' debut studio album, ...Baby One More Time (1999). The song was released on June 7, 1999 by Jive Records, as the second single from the album. The teen pop song, speaks about a relationship where a girl is shy and does not express all of her feelings to her partner, despite wanting to. <a href="http://www.last.fm/music/Britney+Spears/_/Sometimes">Read more on Last.fm</a>.',
                        'song_id' => 650,
                        'created_at' => '2019-10-29 22:46:28',
                        'updated_at' => '2019-10-29 22:46:28',
                    ),
                    384 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Toxic" is a song by American recording artist Britney Spears from her fourth album, In the Zone. It was released on January 12, 2004, by Jive Records as the second single from the album. Co-written and produced by Bloodshy & Avant, the song was initially offered to Kylie Minogue, but she rejected it. Spears has named "Toxic" as her favorite song from her career, and originally had to convince her record label to release it as a single. "Toxic" is a dance-pop song with influences of electropop and bhangra music <a href="http://www.last.fm/music/Britney+Spears/_/Toxic">Read more on Last.fm</a>.',
                        'song_id' => 651,
                        'created_at' => '2019-10-29 22:46:30',
                        'updated_at' => '2019-10-29 22:46:30',
                    ),
                    385 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Womanizer is a song by American pop singer Britney Spears. It is the lead single for her sixth studio album, Circus. The track was produced by The Outsyders and was first released on 26 September 2008 through radio station Z100. 

Womanizer reached #1 on the Billboard chart and is Spears\'s biggest hit since her debut single "Baby One More Time" in 1998 & also won Best Pop Video at the 2009 MTV Video Music Awards.

\'Womanizer\' was the lead single from Britney\'s sixth studio album \'Circus\' – the infectious track was a top 3 smash in late 2008. <a href="http://www.last.fm/music/Britney+Spears/_/Womanizer">Read more on Last.fm</a>.',
                        'song_id' => 652,
                        'created_at' => '2019-10-29 22:46:31',
                        'updated_at' => '2019-10-29 22:46:31',
                    ),
                    386 => 
                    array (
                        'name' => 'summary',
                        'value' => '"All By Myself" is Celine\'s cover version of a power ballad written and performed by Eric Carmen in 1975.
The song borrows heavily from the second movement (Adagio Sostenuto) of Sergei Rachmaninoff\'s Piano Concerto No. 2 in C minor, Opus 18, which Carmen believed was in the public domain. After the record had been issued, Carmen had to come to an agreement with the Rachmaninoff estate. Early versions, therefore, only give writing credit to Carmen while later versions also credit Rachmaninoff. <a href="http://www.last.fm/music/C%C3%A9line+Dion/_/All+by+Myself">Read more on Last.fm</a>.',
                        'song_id' => 654,
                        'created_at' => '2019-10-29 22:46:34',
                        'updated_at' => '2019-10-29 22:46:34',
                    ),
                    387 => 
                    array (
                        'name' => 'summary',
                        'value' => '"I Drove All Night" was recorded by Celine Dion for her tenth English studio album, One Heart, which was released in 2003, and it was released as the lead single from that album on March 3, 2003. It is a Dance-pop cover of a Pop Rock song originally a hit for Cyndi Lauper. The song was featured in promotional ads for the Chrysler Crossfire vehicle. The "I Drove All Night" music video was directed by Peter Arnell and released in February 2003. It was included on the United Kingdom enhanced double A-side single "One Heart/I Drove All Night." <a href="http://www.last.fm/music/C%C3%A9line+Dion/_/I+Drove+All+Night">Read more on Last.fm</a>.',
                        'song_id' => 655,
                        'created_at' => '2019-10-29 22:46:36',
                        'updated_at' => '2019-10-29 22:46:36',
                    ),
                    388 => 
                    array (
                        'name' => 'summary',
                    'value' => '“It\'s All Coming Back to Me Now” is a cover version of the original Pandora\'s box song, written by Jim Steiman. According to Steinman the song was inspired by Wuthering Heights, and was an attempt to write "the most passionate, romantic song" he could ever create. Meat Loaf has said the song was intended for Bat out of Hell II and given to the singer in 1986, but that they both decided to use "I\'d Do Anything for Love (But I Won\'t Do That)" for Bat II, and save this song for Bat III. <a href="http://www.last.fm/music/C%C3%A9line+Dion/_/It%27s+All+Coming+Back+to+Me+Now">Read more on Last.fm</a>.',
                        'song_id' => 657,
                        'created_at' => '2019-10-29 22:46:39',
                        'updated_at' => '2019-10-29 22:46:39',
                    ),
                    389 => 
                    array (
                        'name' => 'summary',
                        'value' => '"My Heart Will Go On" is the theme song of the 1997 blockbuster film Titanic. With music by James Horner and lyrics by Will Jennings, it was recorded by Céline Dion. Originally released in 1997 on Dion\'s album Let\'s Talk About Love, it went to number 1 all over the world, including the United States, United Kingdom and Australia. My Heart Will Go On was released in Australia and Germany on December 8, 1997, and in the rest of the world in January and February of 1998. <a href="http://www.last.fm/music/C%C3%A9line+Dion/_/My+Heart+Will+Go+On">Read more on Last.fm</a>.',
                        'song_id' => 658,
                        'created_at' => '2019-10-29 22:46:41',
                        'updated_at' => '2019-10-29 22:46:41',
                    ),
                    390 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Taking Chances" peaked at #1 on the U.S. Billboard Hot Dance Club Songs Chart in the Winter of 2008. <a href="http://www.last.fm/music/C%C3%A9line+Dion/_/Taking+Chances">Read more on Last.fm</a>.',
                        'song_id' => 659,
                        'created_at' => '2019-10-29 22:46:42',
                        'updated_at' => '2019-10-29 22:46:42',
                    ),
                    391 => 
                    array (
                        'name' => 'summary',
                        'value' => '"That\'s the Way It Is" is a lead single from Céline Dion\'s greatest hits album All the Way… A Decade of Song, released on November 1, 1999.

It was written and produced by a team under the direction of Swedish producers Max Martin and Kristian Lundin, who have written a string of hit songs for artists such as \'N Sync, Backstreet Boys and Britney Spears and P!nk. Céline Dion sang it live with \'N Sync, during her CBS TV special in 1999. She also <a href="http://www.last.fm/music/C%C3%A9line+Dion/_/That%27s+the+Way+It+Is">Read more on Last.fm</a>.',
                        'song_id' => 660,
                        'created_at' => '2019-10-29 22:46:44',
                        'updated_at' => '2019-10-29 22:46:44',
                    ),
                    392 => 
                    array (
                        'name' => 'summary',
                        'value' => '"The Power of Love" is a famous power ballad co-written and originally recorded by Jennifer Rush. It has been covered by several artists, most notably by Laura Branigan and Céline Dion, and translated into several languages.


"The Power of Love" is the second (if counting "When I Fall in Love" as first) single from Céline Dion\'s 1993 album, The Colour of My Love. It was released on November 1, 1993 in North America, in December in Japan, and the next year in the rest of the world. <a href="http://www.last.fm/music/C%C3%A9line+Dion/_/The+Power+Of+Love">Read more on Last.fm</a>.',
                        'song_id' => 661,
                        'created_at' => '2019-10-29 22:46:45',
                        'updated_at' => '2019-10-29 22:46:45',
                    ),
                    393 => 
                    array (
                        'name' => 'summary',
                        'value' => '"If I Could Turn Back Time" is a song written by Diane Warren and was released on June 1 1989 as the second North American and first European single release from American singer/actress Cher\'s 20th album Heart of Stone.

After a small comeback with "I Found Someone" in 1987, Cher\'s career hit big with the release of "If I Could Turn Back Time", which charted at number 1 in Australia and Norway, number 3 in the United States and number 6 in the United Kingdom. <a href="http://www.last.fm/music/Cher/_/If+I+Could+Turn+Back+Time">Read more on Last.fm</a>.',
                        'song_id' => 663,
                        'created_at' => '2019-10-29 22:46:48',
                        'updated_at' => '2019-10-29 22:46:48',
                    ),
                    394 => 
                    array (
                        'name' => 'summary',
                        'value' => '“This is America” was released on May 6th, 2018, and has been speculated to be the first single for Gambino’s upcoming album. It is his first single since the release of his 2016 studio album “Awaken, My Love!”. Released along with an accompanying music video, the song serves as a commentary on the condition of black Americans in 2018.

The stark contrast between the happy, carefree chorus and the dark, aggressive verses highlights the way the black experience is perceived in popular culture versus reality. <a href="http://www.last.fm/music/Childish+Gambino/_/This+Is+America">Read more on Last.fm</a>.',
                        'song_id' => 664,
                        'created_at' => '2019-10-29 22:46:49',
                        'updated_at' => '2019-10-29 22:46:49',
                    ),
                    395 => 
                    array (
                        'name' => 'summary',
                        'value' => '
Written in 1978, Chris Rea wrote the lyrics on a difficult car journey home to Middlesborough (UK) from London. He was traveling back with his wife when they got stuck in traffic while snow was falling. Rea commented that he looked at other drivers and they "all looked so miserable", so bemused, he started to sing, "We\'re driving home for Christmas", and the lyrics flowed from there. The music to the lyrics came several years later and the track was first released as a B-side to "Hello Friend" in 1986. <a href="http://www.last.fm/music/Chris+Rea/_/Driving+Home+for+Christmas">Read more on Last.fm</a>.',
                        'song_id' => 665,
                        'created_at' => '2019-10-29 22:46:51',
                        'updated_at' => '2019-10-29 22:46:51',
                    ),
                    396 => 
                    array (
                        'name' => 'summary',
                        'value' => 'This standalone Christmas song was released by the British alternative rock band Coldplay on December 1, 2010, as a digital download. According to the band\'s website, the mid-tempo number is "in the key of G."

Mat Whitecross directed the video for the song, which was filmed at the South Bank of River Thames in London. According to the Christmas Lights Songfacts, a trio of Elvis Presley impersonators are seen playing violins - they are the band\'s former manager Phil Harvey <a href="http://www.last.fm/music/Coldplay/_/Christmas+Lights">Read more on Last.fm</a>.',
                        'song_id' => 674,
                        'created_at' => '2019-10-29 22:47:04',
                        'updated_at' => '2019-10-29 22:47:04',
                    ),
                    397 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The following is  simply a description of  the evenings event..
1968 The Filmore East..
As was the custom..The stage curtains were closed....background music coming out of the speakers.
House lights set.. just enough to look for friends..realizing EVERYONE in the house was a friend. It was just that way in those days.
Then..the house lights dim...The music fades and a hush sweeps over us.
With stage curtains still closed...A  voice belches out from nowhere...from everywhere.. (The intro to "Fire") <a href="http://www.last.fm/music/The+Crazy+World+Of+Arthur+Brown/_/Fire">Read more on Last.fm</a>.',
                        'song_id' => 675,
                        'created_at' => '2019-10-29 22:47:07',
                        'updated_at' => '2019-10-29 22:47:07',
                    ),
                    398 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Grounds for Divorce" is the first single from Elbow\'s fourth studio album The Seldom Seen Kid. The single was released on 10 March 2008 as the band\'s first release on Fiction Records across two 7" vinyl records and one CD single.  On 21 May 2009, "Grounds for Divorce" won the Ivor Novello award for Best Contemporary Song.

"Grounds for Divorce" was featured in the promotional trailer for Valve Software\'s 2008 game Left 4 Dead, and in the trailer for the 2008 film Burn After Reading. <a href="http://www.last.fm/music/Elbow/_/Grounds+for+Divorce">Read more on Last.fm</a>.',
                        'song_id' => 680,
                        'created_at' => '2019-10-29 22:47:13',
                        'updated_at' => '2019-10-29 22:47:13',
                    ),
                    399 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The end of this track is used in the end of Peter Kay\'s charity single for Children In Need UK 2009.

The One Day Like This Songfacts reports that this won the award for Best Song Musically and Lyrically at the 2009 Ivor Novello awards. It was a double whammy for Elbow at the ceremony as another of their songs, "Grounds for Divorce," won the gong for Best Contemporary Song.

Elbow performed “One Day Like This” at the London 2012 Olympics Closing Ceremony, which saw the track re-enter the UK singles charts to peak at No. <a href="http://www.last.fm/music/Elbow/_/One+Day+Like+This">Read more on Last.fm</a>.',
                        'song_id' => 681,
                        'created_at' => '2019-10-29 22:47:15',
                        'updated_at' => '2019-10-29 22:47:15',
                    ),
                    400 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Wonderful Tonight" is written by Eric Clapton. It was included on Clapton\'s 1977 album Slowhand and released as a single the following year.

In 1988, Clapton appeared in the Nelson Mandela 70th Birthday Tribute concert as a guest guitarist for Dire Straits. The group became his backing musicians for a surprise performance of "Wonderful Tonight" during their set.

http://www.youtube.com/watch?v=mINPdUFVjSE <a href="http://www.last.fm/music/Eric+Clapton/_/Wonderful+Tonight">Read more on Last.fm</a>.',
                        'song_id' => 685,
                        'created_at' => '2019-10-29 22:47:21',
                        'updated_at' => '2019-10-29 22:47:21',
                    ),
                    401 => 
                    array (
                        'name' => 'summary',
                        'value' => '"All My Life" is a song by the American hard rock band Foo Fighters, released as the first single from their fourth album, One by One. The song won a Grammy Award for best hard rock performance, and spent ten straight weeks at #1 on the Hot Modern Rock Tracks chart, coincidentally succeeding Nirvana and their previously unreleased final recording, "You Know You\'re Right". Dave Grohl notes that the band had wanted a heavier sounding song to appear as a single <a href="http://www.last.fm/music/Foo+Fighters/_/All+My+Life">Read more on Last.fm</a>.',
                        'song_id' => 687,
                        'created_at' => '2019-10-29 22:47:23',
                        'updated_at' => '2019-10-29 22:47:23',
                    ),
                    402 => 
                    array (
                        'name' => 'summary',
                        'value' => ' "Times Like These", and "The Pretender" have gone Gold.

"Best of You" holds the band\'s highest chart peaks in America (#18), the UK (#4), and Australia (#5). Although it sold the most singles, two songs by the band have gotten more airplay, "The Pretender", and "All My Life". "Long Road to Ruin" has gotten the same amount of airplay.

The album version was one of 5 Grammy nominations the Foo Fighters received in 2005, for Best Rock Song, but it eventually lost to "City of Blinding Lights" by U2. <a href="http://www.last.fm/music/Foo+Fighters/_/Best+of+You">Read more on Last.fm</a>.',
                        'song_id' => 688,
                        'created_at' => '2019-10-29 22:47:25',
                        'updated_at' => '2019-10-29 22:47:25',
                    ),
                    403 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Everlong is the second single from Foo Fighters\' second album, 1997\'s "The Colour and the Shape". It hit #18 in the UK and #3 on the Billboard Modern Rock chart. In 2000, on his first show back from heart surgery, American late night comedian David Letterman introduced the band\'s performance of the song with "here\'s my favorite band, performing my favorite song".  This appearance made Foo Fighters the first band to perform the same song twice on Letterman\'s "The Late Show" program. <a href="http://www.last.fm/music/Foo+Fighters/_/Everlong">Read more on Last.fm</a>.',
                        'song_id' => 689,
                        'created_at' => '2019-10-29 22:47:30',
                        'updated_at' => '2019-10-29 22:47:30',
                    ),
                    404 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Learn to Fly" is the first single from the Foo Fighters\' third album There Is Nothing Left to Lose. It was released on two different singles in the UK in 1999. "Learn to Fly" is one of the band\'s most successful singles, including a #19 peak on the Billboard Hot 100 and a #1 peak on Modern Rock Tracks.

MUSIC VIDEO
The music video for the song takes place on an airplane, parodying the movie Airplane!. Two airline mechanics (played by Tenacious D) <a href="http://www.last.fm/music/Foo+Fighters/_/Learn+to+Fly">Read more on Last.fm</a>.',
                        'song_id' => 690,
                        'created_at' => '2019-10-29 22:47:32',
                        'updated_at' => '2019-10-29 22:47:32',
                    ),
                    405 => 
                    array (
                        'name' => 'summary',
                    'value' => '"My Hero" is the third single from the Foo Fighters\' second album The Colour and the Shape. It was released as a single in 1998. According to Dave Grohl, the song is dedicated to ordinary, everyday heroes, as he himself never had musical or sports heroes growing up as a child. During Foo Fighters\' appearance on VH1 Storytellers in 2009, Dave Grohl explained that the song was written while watching 1980s movies like Valley Girl (film). Grohl also stated that the song was written about Pete Stahl and Chip Donaldson, without even knowing it. <a href="http://www.last.fm/music/Foo+Fighters/_/My+Hero">Read more on Last.fm</a>.',
                        'song_id' => 691,
                        'created_at' => '2019-10-29 22:47:33',
                        'updated_at' => '2019-10-29 22:47:33',
                    ),
                    406 => 
                    array (
                        'name' => 'summary',
                        'value' => '"The Pretender" is the first single from the Foo Fighters\' 2007 album Echoes, Silence, Patience & Grace.

In a 2007 interview with XFM, frontman Dave Grohl stopped short of explaining the meaning behind "The Pretender," but alluded its roots go to current political unrest. Grohl noted:

That\'s the thing with lyrics, you never want to give away specifics, because it\'s nice for people to have their own idea or interpretation of the song. But, you know <a href="http://www.last.fm/music/Foo+Fighters/_/The+Pretender">Read more on Last.fm</a>.',
                        'song_id' => 692,
                        'created_at' => '2019-10-29 22:47:34',
                        'updated_at' => '2019-10-29 22:47:34',
                    ),
                    407 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Released in 1984. Originally recorded by Foreigner, the song was written by their guitarist Mick Jones. When asked about Mariah Carey\'s version of I Want To Know What Love Is , he told Songfacts: "I think she\'s put a lot of emotion into it. You can feel that she\'s gotten inside of the song." The song was No.1 in U.S.A. and U.K. <a href="http://www.last.fm/music/Foreigner/_/I+Want+to+Know+What+Love+Is">Read more on Last.fm</a>.',
                        'song_id' => 693,
                        'created_at' => '2019-10-29 22:47:36',
                        'updated_at' => '2019-10-29 22:47:36',
                    ),
                    408 => 
                    array (
                        'name' => 'summary',
                        'value' => 'George Michael was 17 when he wrote this. He was taking the bus to his job as an usher at a cinema. That\'s where the reference to "The silver screen" comes from in the first verse.

"Careless Whisper" is a song by English singer-songwriter George Michael (sometimes credited to "Wham! Featuring George Michael" in Japan, Canada, and the United States). It was released on 24 July 1984, by Epic Records in the United Kingdom, Japan, and other countries, and by Columbia Records in North America. <a href="http://www.last.fm/music/George+Michael/_/Careless+Whisper">Read more on Last.fm</a>.',
                        'song_id' => 696,
                        'created_at' => '2019-10-29 22:47:55',
                        'updated_at' => '2019-10-29 22:47:55',
                    ),
                    409 => 
                    array (
                        'name' => 'summary',
                        'value' => 'According to the Theme From Shaft Songfacts, this won a Grammy for Best Instrumental Arrangement and an Oscar for Best Original Score. The Oscar win made Hayes the first African-American to win an Academy Award in a composer category.
<a href="http://www.last.fm/music/Isaac+Hayes/_/Theme+from+Shaft">Read more on Last.fm</a>.',
                        'song_id' => 698,
                        'created_at' => '2019-10-29 22:47:58',
                        'updated_at' => '2019-10-29 22:47:58',
                    ),
                    410 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Hurt" was written by Trent Reznor and first released on Nine Inch Nails\' 1994 album The Downward Spiral. Johnny Cash\'s cover of "Hurt" was released on his 2002 album, American IV: The Man Comes Around. 

Rick Rubin, producer of Cash\'s American series and a friend of Reznor\'s, suggested the song to Cash. The line "crown of shit" was changed to "crown of thorns", not only removing profanity from the lyrics, but also more directly referencing Christ. <a href="http://www.last.fm/music/Johnny+Cash/_/Hurt">Read more on Last.fm</a>.',
                        'song_id' => 700,
                        'created_at' => '2019-10-29 22:48:02',
                        'updated_at' => '2019-10-29 22:48:02',
                    ),
                    411 => 
                    array (
                        'name' => 'summary',
                    'value' => 'Singer Tom Meighan told The Guardian that if this song were a person, he would be nice, "then he\'s got a hammer in his hand the next minute". (Source Fire Songfacts). <a href="http://www.last.fm/music/Kasabian/_/Fire">Read more on Last.fm</a>.',
                        'song_id' => 701,
                        'created_at' => '2019-10-29 22:48:04',
                        'updated_at' => '2019-10-29 22:48:04',
                    ),
                    412 => 
                    array (
                        'name' => 'summary',
                        'value' => 'According to Kate Bush, in an interview with Austrailian TV series \'Countdown\', this song chronicles a wife\'s desire to test her husband\'s loyalty. To do so, she takes on the nom de plume of Babooshka and sends notes to her husband in the guise of a younger woman – something which she fears is the opposite of how her husband currently sees her. 
The trap is set when, in her bitterness and paranoia, Babooshka arranges to meet her husband, who is attracted to the character that reminds him of his wife in earlier times. <a href="http://www.last.fm/music/Kate+Bush/_/Babooshka">Read more on Last.fm</a>.',
                        'song_id' => 702,
                        'created_at' => '2019-10-29 22:48:05',
                        'updated_at' => '2019-10-29 22:48:05',
                    ),
                    413 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Like Bush\'s first hit "Wuthering Heights," this is based on a book. It was inspired by Peter Reich\'s 1973 Book of Dreams, which describes his father Wilhelm\'s arrest for contempt of court.

Wilhelm Reich was an Austrian psychiatrist who was trained in Vienna by Sigmund Freud. His work combined Marxism and psychoanalysis to advocate sexual freedom. In the 1930s, Reich came up with the concept of "orgone," a physical energy contained in the atmosphere and in all living matter. <a href="http://www.last.fm/music/Kate+Bush/_/Cloudbusting">Read more on Last.fm</a>.',
                        'song_id' => 703,
                        'created_at' => '2019-10-29 22:48:07',
                        'updated_at' => '2019-10-29 22:48:07',
                    ),
                    414 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Hounds of Love" is a song written, produced and performed by British singer Kate Bush. It is the title track and the third single released from her number one 1985 album Hounds of Love. The single was released on 24 February 1986, and reached number 18 in the UK Singles Chart. 

In October 2004, Q magazine placed this song at No.21 in its list of the 50 greatest British songs of all-time. 

British band The Futureheads covered the song in 2005, scoring a UK top 10 hit with it. <a href="http://www.last.fm/music/Kate+Bush/_/Hounds+of+Love">Read more on Last.fm</a>.',
                        'song_id' => 704,
                        'created_at' => '2019-10-29 22:48:08',
                        'updated_at' => '2019-10-29 22:48:08',
                    ),
                    415 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Running Up That Hill (A Deal with God)" was the first single from Kate Bush\'s 1985 album Hounds of Love. Written by Bush, it was released as a single in the UK on August 5, 1985, with the album appearing on shelves on September 16, 1985. It was her first 12" single, and her second single to feature gatefold packaging. It was the most successful of Bush\'s 1980s releases, eventually peaking at the number three position in the UK singles chart, her second-highest single release there. <a href="http://www.last.fm/music/Kate+Bush/_/Running+Up+That+Hill+(A+Deal+With+God)">Read more on Last.fm</a>.',
                        'song_id' => 705,
                        'created_at' => '2019-10-29 22:48:10',
                        'updated_at' => '2019-10-29 22:48:10',
                    ),
                    416 => 
                    array (
                        'name' => 'summary',
                    'value' => 'Written by Bush when she was just 18, the song\'s lyrics are based on the story of the novel of the same name. Kate Bush was inspired to write the song by the last ten minutes of the 1970 film version of Wuthering Heights. She then read the book and discovered that she shares her birthday (July 30) with Emily Brontë. Bush reportedly wrote the song, for her album The Kick Inside, within the space of just a few hours late at night, looking to the moon through her open bedroom window for inspiration. <a href="http://www.last.fm/music/Kate+Bush/_/Wuthering+Heights">Read more on Last.fm</a>.',
                        'song_id' => 706,
                        'created_at' => '2019-10-29 22:48:12',
                        'updated_at' => '2019-10-29 22:48:12',
                    ),
                    417 => 
                    array (
                        'name' => 'summary',
                        'value' => 'A song that takes you.  Poppy rhythms with a new complexity. Great intro song for an up-and-coming female vocalist in a highly competitive arena.  A new creativity speaking deeply about simplicity. This is the first notice the artist  has cast this far.  <a href="http://www.last.fm/music/Kate+Nash/_/Mouthwash">Read more on Last.fm</a>.',
                        'song_id' => 708,
                        'created_at' => '2019-10-29 22:48:15',
                        'updated_at' => '2019-10-29 22:48:15',
                    ),
                    418 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Mr. Brightside" is the debut single by Las Vegas-based rock band The Killers. The song is featured on the group\'s debut album Hot Fuss and was written by Brandon Flowers and Dave Keuning.
It was named "Song of the Decade" by UK radio stations Absolute Radio and XFM, and in April 2010 Last.fm revealed that it was the most listened to track since the launch of the online music service, with over 12.2 million plays scrobbled; it still maintains this record to this day. <a href="http://www.last.fm/music/The+Killers/_/Mr.+Brightside">Read more on Last.fm</a>.',
                        'song_id' => 710,
                        'created_at' => '2019-10-29 22:48:17',
                        'updated_at' => '2019-10-29 22:48:17',
                    ),
                    419 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Read My Mind" is a song by Las Vegas-based rock band The Killers and is the sixth track on their second album Sam\'s Town, released in October 2006. It peaked at #62 on the Billboard Hot 100. It also charted at #15 on the UK singles chart.
In 2009 it was voted at Number 57 in UK radio station XFM\'s "100 Greatest Songs of All Time".
The same year it was voted at Number 71 on another UK Radio Station Absolute Radio\'s 100 Best Songs Of The Decade. In an interview with Chicago radio station Q101 <a href="http://www.last.fm/music/The+Killers/_/Read+My+Mind">Read more on Last.fm</a>.',
                        'song_id' => 711,
                        'created_at' => '2019-10-29 22:48:19',
                        'updated_at' => '2019-10-29 22:48:19',
                    ),
                    420 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Somebody Told Me" is a song performed by The Killers. The song is featured on the group\'s debut album Hot Fuss and was written by Dave Keuning, Ronnie Vannucci Jr., Mark Stoermer and Brandon Flowers.

Lead singer Brandon Flowers refers to this song as "Our most Vegas-influenced song on the album. Sin city, The Strip. It\'s where I grew up and of course it affects the songs I write. This song has a lot of sexual energy."

When The Killers first started out <a href="http://www.last.fm/music/The+Killers/_/Somebody+Told+Me">Read more on Last.fm</a>.',
                        'song_id' => 712,
                        'created_at' => '2019-10-29 22:48:20',
                        'updated_at' => '2019-10-29 22:48:20',
                    ),
                    421 => 
                    array (
                        'name' => 'summary',
                    'value' => '"When You Were Young" is a song written and performed by Las Vegas-based rock band, The Killers, and is the third track on their second album Sam\'s Town, released in October 2006. The song was released as the lead single from that album in September 2006. It has proven to be one of their most successful singles, peaking at #14 on the U.S. Hot 100 (only "Mr. Brightside" peaked higher on this chart at #10), as well as their only number 1 to date on the U. <a href="http://www.last.fm/music/The+Killers/_/When+You+Were+Young">Read more on Last.fm</a>.',
                        'song_id' => 713,
                        'created_at' => '2019-10-29 22:48:22',
                        'updated_at' => '2019-10-29 22:48:22',
                    ),
                    422 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Lola" is a song written by Ray Davies and performed by The Kinks which details a romantic encounter between a young man (presumably in his late teen years) and a transvestite he meets in a Soho, London club.

One of The Kinks\' best-known songs, the single was taken from the album Lola versus Powerman and the Moneygoround, Part One, which was released in June, 1970, and reached #2 in the UK charts and #9 in the US. It was ranked 422nd on the List of Rolling Stone\'s 500 Greatest Songs of All Time. It is famous for its C-D-E power riff. <a href="http://www.last.fm/music/The+Kinks/_/Lola">Read more on Last.fm</a>.',
                        'song_id' => 714,
                        'created_at' => '2019-10-29 22:48:23',
                        'updated_at' => '2019-10-29 22:48:23',
                    ),
                    423 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Sunny Afternoon" is a song by The Kinks, written by chief songwriter Ray Davies. The track later featured on the Face to Face album as well as being the title track for their 1967 compilation album. Its strong Music Hall flavour and lyrical focus was part of a stylistic departure for the band (begun with 1965\'s "A Well Respected Man"), who had risen to fame in 1964-65 with a series of hard-driving, power-chord rock hits.

Released as a single in 3 June, 1966, it went to number 1 on the UK charts on 7 July 1966, remaining there for two weeks. <a href="http://www.last.fm/music/The+Kinks/_/Sunny+Afternoon">Read more on Last.fm</a>.',
                        'song_id' => 715,
                        'created_at' => '2019-10-29 22:48:24',
                        'updated_at' => '2019-10-29 22:48:24',
                    ),
                    424 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Waterloo Sunset" is a song released as a single by The Kinks in 1967, and featured on their album Something Else by the Kinks. It was composed and produced by The Kinks lead singer and songwriter Ray Davies and is one of the band\'s best known and most acclaimed songs.

The lyrics are from the point of view of a solitary man on the south bank of the Thames watching (or imagining) the romantic encounters of a couple at Waterloo Underground, then crossing Waterloo Bridge. <a href="http://www.last.fm/music/The+Kinks/_/Waterloo+Sunset">Read more on Last.fm</a>.',
                        'song_id' => 716,
                        'created_at' => '2019-10-29 22:48:26',
                        'updated_at' => '2019-10-29 22:48:26',
                    ),
                    425 => 
                    array (
                        'name' => 'summary',
                        'value' => '"You Really Got Me" is a rock song written by Ray Davies and performed by his band, The Kinks. According to the You Really Got Me Songfacts, after writing it, Ray played the song for Dave on piano, and Dave tried it on guitar. Their first version was 6-minutes long.
When the Kinks heard this first version they hated the results. It was produced by Shel Talmy, their manager at the time, and Ray Davies thought it came out clean and sterile, when he wanted it to capture the energy of their live shows. <a href="http://www.last.fm/music/The+Kinks/_/You+Really+Got+Me">Read more on Last.fm</a>.',
                        'song_id' => 717,
                        'created_at' => '2019-10-29 22:48:27',
                        'updated_at' => '2019-10-29 22:48:27',
                    ),
                    426 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The second single from Lily Allen\'s second studio album It\'s Not Me, It\'s You, peaked at #5 in the UK Singles Chart and is her third most successful single to date. <a href="http://www.last.fm/music/Lily+Allen/_/Not+Fair">Read more on Last.fm</a>.',
                        'song_id' => 719,
                        'created_at' => '2019-10-29 22:48:30',
                        'updated_at' => '2019-10-29 22:48:30',
                    ),
                    427 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Dick In A Box" is a song by American comedy troupe The Lonely Island featuring singer Justin Timberlake. The song and music video debuted on Saturday Night Live as an SNL Digital Short on December 16, 2006. The video depicts two early 1990s R&B ballad singers (Andy Samberg and Justin Timberlake) crooning a holiday song about making a gift for their girlfriends of their penises which they have wrapped in boxes (strategically placed) and topped with bows. <a href="http://www.last.fm/music/The+Lonely+Island/_/Dick+In+A+Box">Read more on Last.fm</a>.',
                        'song_id' => 720,
                        'created_at' => '2019-10-29 22:48:31',
                        'updated_at' => '2019-10-29 22:48:31',
                    ),
                    428 => 
                    array (
                        'name' => 'summary',
                        'value' => '"I\'m on a Boat" is a single from The Lonely Island\'s debut album Incredibad, and was also featured as a Saturday Night Live Digital Short. The song features R&B singer T-Pain. The song, produced by Wyshmaster, is a parody of many rap video cliches. The music video reached number one on YouTube in February 2009 and was number one on the U.S. iTunes music video chart. The Lonely Island has also performed the song live on Late Night with Jimmy Fallon with The Roots filling in for T-Pain. <a href="http://www.last.fm/music/The+Lonely+Island/_/I%27m+on+a+Boat">Read more on Last.fm</a>.',
                        'song_id' => 721,
                        'created_at' => '2019-10-29 22:48:33',
                        'updated_at' => '2019-10-29 22:48:33',
                    ),
                    429 => 
                    array (
                        'name' => 'summary',
                        'value' => '4th single from The Lonely Island\'s Second album "Turtleneck & Chain" <a href="http://www.last.fm/music/The+Lonely+Island/_/Jack+Sparrow">Read more on Last.fm</a>.',
                        'song_id' => 722,
                        'created_at' => '2019-10-29 22:48:34',
                        'updated_at' => '2019-10-29 22:48:34',
                    ),
                    430 => 
                    array (
                        'name' => 'summary',
                        'value' => ' <a href="http://www.last.fm/music/The+Lonely+Island/_/Jizz+in+My+Pants">Read more on Last.fm</a>.',
                        'song_id' => 723,
                        'created_at' => '2019-10-29 22:48:36',
                        'updated_at' => '2019-10-29 22:48:36',
                    ),
                    431 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Hung Up" is a electropop song written by American singer-songwriter Madonna, Stuart Price, Benny Andersson and Björn Ulvaeus, and produced by Madonna and Price. The song was released in October 2005, the first single to be lifted from Madonna\'s tenth studio album Confessions on a Dance Floor.
"Hung Up" is Madonna\'s biggest selling single to date, reaching number one in a record-breaking 45 countries.

Song information

"Hung Up" was inspired by the 1970s disco era, in particular ABBA, Giorgio Moroder and Saturday Night Fever. <a href="http://www.last.fm/music/Madonna/_/Hung+Up">Read more on Last.fm</a>.',
                        'song_id' => 727,
                        'created_at' => '2019-10-29 22:48:41',
                        'updated_at' => '2019-10-29 22:48:41',
                    ),
                    432 => 
                    array (
                        'name' => 'summary',
                        'value' => '"All  I Want  for Christmas  Is You" is a song by American singer-songwriter Mariah Carey  from her fourth studio album, Merry Christmas. It was released by Columbia Records on November 1, 1994, as the lead single from the album. The song was written by Carey and Walter Afanasieff, who also served as co-arranger and producer. As an up-tempo love song, it incorporates pop music and traditional beats. Its lyrics describe a woman\'s declaration that she <a href="http://www.last.fm/music/Mariah+Carey/_/All+I+Want+for+Christmas+Is+You">Read more on Last.fm</a>.',
                        'song_id' => 728,
                        'created_at' => '2019-10-29 22:48:43',
                        'updated_at' => '2019-10-29 22:48:43',
                    ),
                    433 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The It\'s Beginning to Look a lot Like Christmas Songfacts says: This song celebrates that time when Christmas decorations appear in stores and public displays, which has been earlier and earlier in recent years. There are some dated references in the song, such as the "five and ten," which is a store selling inexpensive items. The "Hopalong boots" the child wishes for are a reference to those worn by the fictional cowboy Hopalong Cassidy. <a href="http://www.last.fm/music/Michael+Bubl%C3%A9/_/It%27s+Beginning+to+Look+a+Lot+Like+Christmas">Read more on Last.fm</a>.',
                        'song_id' => 731,
                        'created_at' => '2019-10-29 22:49:34',
                        'updated_at' => '2019-10-29 22:49:34',
                    ),
                    434 => 
                    array (
                        'name' => 'summary',
                    'value' => 'Incorrect tag for All Good Things (Come To An End) <a href="http://www.last.fm/music/Nelly+Furtado/_/All+Good+Things">Read more on Last.fm</a>.',
                        'song_id' => 733,
                        'created_at' => '2019-10-29 22:49:36',
                        'updated_at' => '2019-10-29 22:49:36',
                    ),
                    435 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Maneater" is a song written by Nelly Furtado, Timothy "Timbaland" Mosley, Jim Beanz and Nate "Danja" Hills for Furtado\'s third album, Loose. It was co-produced by Timbaland and Danja and includes influences of 1980s music by artists such as Eurythmics and Hall & Oates. Furtado stated that Hall & Oates\' song of the same name was an influence during the writing and recording of the song.

Released as the album\'s first single in Europe in May 2006, "Maneater" became one of Nelly Furtado\'s most popular singles <a href="http://www.last.fm/music/Nelly+Furtado/_/Maneater">Read more on Last.fm</a>.',
                        'song_id' => 735,
                        'created_at' => '2019-10-29 22:49:40',
                        'updated_at' => '2019-10-29 22:49:40',
                    ),
                    436 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Say It Right" is the fifth single from Nelly Furtado\'s third album Loose . It was written by Nelly Furtado, Timothy "Timbaland" Mosley and Nate "Danja" Hills. It was co-produced by Timbaland and Danja and released as the album\'s third single in North America and Australia. The song served as the album\'s fourth single in Europe and Asia, and it was released digitally in the United Kingdom in March 2007. It was the album\'s fifth single in Latin America. <a href="http://www.last.fm/music/Nelly+Furtado/_/Say+It+Right">Read more on Last.fm</a>.',
                        'song_id' => 736,
                        'created_at' => '2019-10-29 22:49:41',
                        'updated_at' => '2019-10-29 22:49:41',
                    ),
                    437 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Hey Ya!" is a single by the hip-hop act OutKast from their 2003 album "Speakerboxx/The Love Below". The song was recorded as apart of "The Love Below\', Andre 3000\'s half of the album and was inspired by his love of early-80\'s alternative rock bands like The Buzzcocks and The Smiths. The track became an across-the-board smash and peaked at #1 on the Billboard Hot 100 in the United States and also charted on the Billboard Hot R&B/Hip Hop chart (#9) and Billboard Modern Rock chart (#16) <a href="http://www.last.fm/music/OutKast/_/Hey+Ya%21">Read more on Last.fm</a>.',
                        'song_id' => 737,
                        'created_at' => '2019-10-29 22:49:42',
                        'updated_at' => '2019-10-29 22:49:42',
                    ),
                    438 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Fairytale of New York" is a Christmas song by Anglo-Irish folk-rock group The Pogues, and featuring the British singer Kirsty MacColl. The song is an Irish folk style ballad, written by Jem Finer and Shane MacGowan, and featured on The Pogues\' album If I Should Fall from Grace with God. According to the Fairytale of New York Songfacts, this song was inspired by JP Donleavy\'s 1961 novel of the same title. The author told The Daily Mail: "Technically <a href="http://www.last.fm/music/The+Pogues/_/Fairytale+Of+New+York">Read more on Last.fm</a>.',
                        'song_id' => 739,
                        'created_at' => '2019-10-29 22:49:45',
                        'updated_at' => '2019-10-29 22:49:45',
                    ),
                    439 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Heaven Knows" is a song by American rock band The Pretty Reckless from their second studio album, Going to Hell. It was released on November 19, 2013 as the album\'s second single. The song was written by Taylor Momsen and Ben Phillips, while Kato Khandwala was responsible for the production. "Heaven Knows" is the band\'s first single to top the Mainstream Rock Billboard chart, and the second single to top UK Rock Singles Chart, following their debut single "Make Me Wanna Die". <a href="http://www.last.fm/music/The+Pretty+Reckless/_/Heaven+Knows">Read more on Last.fm</a>.',
                        'song_id' => 741,
                        'created_at' => '2019-10-29 22:49:48',
                        'updated_at' => '2019-10-29 22:49:48',
                    ),
                    440 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Make Me Wanna Die" a song by American alternative rock band The Pretty Reckless from their debut studio album, Light Me Up (2010). The song was written by Taylor Momsen, Ben Phillips, and Kato Khandwala, and produced by the latter. It was released on May 13, 2010 as the album\'s lead single. It topped the UK Rock chart. <a href="http://www.last.fm/music/The+Pretty+Reckless/_/Make+Me+Wanna+Die">Read more on Last.fm</a>.',
                        'song_id' => 743,
                        'created_at' => '2019-10-29 22:49:51',
                        'updated_at' => '2019-10-29 22:49:51',
                    ),
                    441 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Thank God It\'s Christmas" is a Christmas single by British rock band Queen. It was written by guitarist Brian May and drummer Roger Taylor. The single spent six weeks in the UK charts during the Christmas/New Year period and reached number 21.

Though not released on any Queen studio album, the song appears on Queen\'s Greatest Hits III, released in 1999. The song was also released as the B-side of the single "A Winter\'s Tale" from the 1995 album Made in Heaven. <a href="http://www.last.fm/music/Queen/_/Thank+God+It%27s+Christmas">Read more on Last.fm</a>.',
                        'song_id' => 749,
                        'created_at' => '2019-10-29 22:50:01',
                        'updated_at' => '2019-10-29 22:50:01',
                    ),
                    442 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The first single from the album Californication. It was the first single to feature the return of guitarist John Frusciante, who left the band in 1992 after the release of their breakthrough album Blood Sugar Sex Magik. He returned to the band for the recording of Californication.

Spent 16 weeks on top of the Billboard Modern Rock chart and reached #9 on the Billboard Hot 100 chart. It also won the Grammy Award for Best Rock Song in 2000. <a href="http://www.last.fm/music/Red+Hot+Chili+Peppers/_/Scar+Tissue">Read more on Last.fm</a>.',
                        'song_id' => 750,
                        'created_at' => '2019-10-29 22:50:02',
                        'updated_at' => '2019-10-29 22:50:02',
                    ),
                    443 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Boombastic" is the second single released by Jamaican musical artist Shaggy from his third studio album, Boombastic. Released in June 1995, the single achieved huge success in many countries, including Ireland, UK, Sweden, New Zealand, and Australia, where it topped the singles charts. It spent a week at number one on the U.S. Billboard R&B chart, and a similar stint atop the UK Singles Chart. It also reached number three on the Billboard Hot 100. <a href="http://www.last.fm/music/Shaggy/_/Boombastic">Read more on Last.fm</a>.',
                        'song_id' => 753,
                        'created_at' => '2019-10-29 22:50:18',
                        'updated_at' => '2019-10-29 22:50:18',
                    ),
                    444 => 
                    array (
                        'name' => 'summary',
                        'value' => '"It Wasn\'t Me" is a 2000 number one hit song by reggae artist Shaggy, featuring Ricardo "RikRok" Ducent. It achieved a huge success in many countries, topping the charts in the US, France, UK, the Netherlands, Australia and Ireland.

The song was originally never intended to be released as a single, MCA Records wanted "Dance and Shout" to be the first single released from the Hot Shot album and didn\'t offer other tracks to DJs. Hawaiian DJ Pablo Sato <a href="http://www.last.fm/music/Shaggy/_/It+Wasn%27t+Me">Read more on Last.fm</a>.',
                        'song_id' => 754,
                        'created_at' => '2019-10-29 22:50:20',
                        'updated_at' => '2019-10-29 22:50:20',
                    ),
                    445 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Written by Morrissey & Johnny Marr
Produced by John Porter

Recorded September-October 1983, Matrix Studios (London) & Strawberry Studios (Stockport)
Released November 1983 on This Charming Man. Subsequently appeared on the album The Best of The Smiths, Vol. 1 released August 1992 and some copies of the debut The Smiths released February 1984. <a href="http://www.last.fm/music/The+Smiths/_/This+Charming+Man">Read more on Last.fm</a>.',
                        'song_id' => 757,
                        'created_at' => '2019-10-29 22:50:24',
                        'updated_at' => '2019-10-29 22:50:24',
                    ),
                    446 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Children of the Revolution" is a song by T. Rex, written by Marc Bolan. It was a No. 2 hit single in September 1972. The song broke their sequence of four official single releases all reaching No. 1 on the UK Singles Chart ("Hot Love", "Get It On", "Telegram Sam", "Metal Guru"). It did not receive a regular album release. <a href="http://www.last.fm/music/T.+Rex/_/Children+Of+The+Revolution">Read more on Last.fm</a>.',
                        'song_id' => 759,
                        'created_at' => '2019-10-29 22:50:28',
                        'updated_at' => '2019-10-29 22:50:28',
                    ),
                    447 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Summer in the City" was a 1966 hit single by The Lovin\' Spoonful, written by Mark Sebastian (brother of John Sebastian) and Steve Boone. It came from their album, Hums of the Lovin\' Spoonful. It reached number one on the Billboard Hot 100 on August 13. The song featured a series of car horns, during the instrumental bridge, starting with a Volkswagen Beetle horn, and ending up with a jackhammer sound, in order to give the impressions of the sounds of the summer in the city. <a href="http://www.last.fm/music/The+Lovin%27+Spoonful/_/Summer+in+the+City">Read more on Last.fm</a>.',
                        'song_id' => 760,
                        'created_at' => '2019-10-29 22:50:29',
                        'updated_at' => '2019-10-29 22:50:29',
                    ),
                    448 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The song was included on their 1982 album Toto IV, and reached number one on the Billboard Hot 100 chart in February 1983 and number three on the UK Singles Chart the same month. The song was written by the band\'s keyboardist David Paich, who also sings both verses of the song, and drummer Jeff Porcaro. Bobby Kimball sings the chorus.

The song almost cut from the Toto IV record prior to its release. Having spent an incredible amount of time producing the tune, the band became so tired of the song that they didn’t want it on the album. <a href="http://www.last.fm/music/Toto/_/Africa">Read more on Last.fm</a>.',
                        'song_id' => 762,
                        'created_at' => '2019-10-29 22:50:32',
                        'updated_at' => '2019-10-29 22:50:32',
                    ),
                    449 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Last Christmas" is a song by British pop duo Wham!, released on Epic Records in 1984, on a double A-side with "Everything She Wants". It was written by George Michael, one half of the duo. The song has been covered by many artists throughout the years.
Original version

[edit]Chart performances
Wham! had been a dominant force in the UK Singles Chart in 1984 and news that they were planning a Christmas single meant that a battle for the coveted Christmas #1 spot in the UK seemed set to be between Wham! and the year\'s other big act <a href="http://www.last.fm/music/Wham%21/_/Last+Christmas">Read more on Last.fm</a>.',
                        'song_id' => 765,
                        'created_at' => '2019-10-29 22:50:38',
                        'updated_at' => '2019-10-29 22:50:38',
                    ),
                    450 => 
                    array (
                        'name' => 'summary',
                        'value' => '"I Wish It Could Be Christmas Everyday" is a popular Christmas song in the UK, first released in 1973 by Wizzard, when it reached number four in the singles chart, famously beaten to number one by Slade\'s "Merry Xmas Everybody". As with the vast majority of Wizzard songs, it was penned and produced by Roy Wood.

The song features the lead vocals of frontman Roy Wood but also contains backing vocals by The Suedettes as well as The Stockland Green Bilateral School First Year <a href="http://www.last.fm/music/Wizzard/_/I+Wish+It+Could+Be+Christmas+Everyday">Read more on Last.fm</a>.',
                        'song_id' => 766,
                        'created_at' => '2019-10-29 22:50:39',
                        'updated_at' => '2019-10-29 22:50:39',
                    ),
                    451 => 
                    array (
                        'name' => 'summary',
                        'value' => '"I Want It That Way" peaked at #1 on the U.S. Billboard Adult Contemporary Chart in the Summer of 1999. <a href="http://www.last.fm/music/Backstreet+Boys/_/I+Want+It+That+Way">Read more on Last.fm</a>.',
                        'song_id' => 776,
                        'created_at' => '2019-10-31 21:07:39',
                        'updated_at' => '2019-10-31 21:07:39',
                    ),
                    452 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Runaway is the début single by the Irish family band The Corrs. It was released in September 1995. 

The song was written by Sharon, Caroline and Andrea Corr. Andrea has said the first time she sang it in front of her parents, she was embarrassed because of the line "make love to me through the night". She noted that she knew her mother would be thinking "where did she learn that?!"

The song was then re-released in 1999, remixed by Tin Tin Out, Runaway (Tin Tin Out remix) and is also released in an unplugged version on the album Unplugged.  <a href="http://www.last.fm/music/The+Corrs/_/Runaway">Read more on Last.fm</a>.',
                        'song_id' => 781,
                        'created_at' => '2019-10-31 21:07:47',
                        'updated_at' => '2019-10-31 21:07:47',
                    ),
                    453 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Upside Down" is a hit song by Diana Ross released on the Motown label. It was the first single taken from her 1980 album diana and hit number 1 on the Billboard Hot 100 on 6 September 1980. It also hit number 1 on the Billboard Disco/Dance and R&B charts. The single was released a full 4 weeks after the album was released. In its fifth week on the Billboard Hot 100, it made a dramatic leap into the Top 10 (*49-*10). It held down the number 1 title for 4 weeks. <a href="http://www.last.fm/music/Diana+Ross/_/Upside+Down">Read more on Last.fm</a>.',
                        'song_id' => 784,
                        'created_at' => '2019-10-31 21:07:52',
                        'updated_at' => '2019-10-31 21:07:52',
                    ),
                    454 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Cowboy Take Me Away is a country song from the Dixie Chicks. Appearing on their August 1999 albumFly, it was released as a single in November 1999. It reached Number One on the U.S. Billboard Hot Country Singles & Tracks chart in February 2000.

Driven by co-writer Martie Seidel\'s violin, Emily Robison\'s banjo, and Natalie Maines\' evocative vocals, Cowboy Take Me Away quickly became one of the trio\'s signature songs. The lyric deals with a mixture of yearning for greater tranquility: <a href="http://www.last.fm/music/Dixie+Chicks/_/Cowboy+Take+Me+Away">Read more on Last.fm</a>.',
                        'song_id' => 785,
                        'created_at' => '2019-10-31 21:07:53',
                        'updated_at' => '2019-10-31 21:07:53',
                    ),
                    455 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Suddenly I See" is a song by Scottish singer-songwriter KT Tunstall and is featured on her debut album, Eye to the Telescope. It was released on 29 August 2005 as the third single (second single in United States) from the album, charting at #12 in the UK Singles Chart (see 2005 in British music). The single was a hit in Australia where it charted at #6 on the ARIA Singles Chart. It was also certified gold by ARIA for sales of 35,000 copies.

The song was Tunstall\'s highest charting in the United Kingdom <a href="http://www.last.fm/music/KT+Tunstall/_/Suddenly+I+See">Read more on Last.fm</a>.',
                        'song_id' => 788,
                        'created_at' => '2019-10-31 21:07:57',
                        'updated_at' => '2019-10-31 21:07:57',
                    ),
                    456 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Summer in the City" was a 1966 hit single by The Lovin\' Spoonful, written by Mark Sebastian (brother of John Sebastian) and Steve Boone. It came from their album, Hums of the Lovin\' Spoonful. It reached number one on the Billboard Hot 100 on August 13. The song featured a series of car horns, during the instrumental bridge, starting with a Volkswagen Beetle horn, and ending up with a jackhammer sound, in order to give the impressions of the sounds of the summer in the city. <a href="http://www.last.fm/music/The+Lovin%27+Spoonful/_/Summer+in+the+City">Read more on Last.fm</a>.',
                        'song_id' => 790,
                        'created_at' => '2019-10-31 21:08:00',
                        'updated_at' => '2019-10-31 21:08:00',
                    ),
                    457 => 
                    array (
                        'name' => 'summary',
                    'value' => 'This track was made by Nickelback in 2001, The band consists of Chad Kroeger (VOCALS AND GUITAR) , Mike Kroeger (VOCALS AND BASS), Daniel Adair (VOCALS AND DRUMS) and Ryan Peake (VOCALS AND KEYBOARD)

According to the How You Remind Me Songfacts, Chad Kroeger wrote the song about his old girlfriend Jodi, who he had a rather dysfunctional relationship with.  <a href="http://www.last.fm/music/Nickelback/_/How+You+Remind+Me">Read more on Last.fm</a>.',
                        'song_id' => 791,
                        'created_at' => '2019-10-31 21:08:02',
                        'updated_at' => '2019-10-31 21:08:02',
                    ),
                    458 => 
                    array (
                        'name' => 'summary',
                    'value' => '坂本九 (Kyu Sakamoto\'s) most popular song, 上を向いて歩こう (Ue o muite arukō / I look up when I walk) was popular in Japan and the United States. Released by Capitol Records in the US as Sukiyaki (Capitol 4945), it topped the Billboard pop charts in the United States for three weeks in 1963 -- to date the first and only song sung entirely in Japanese to do so. The lyrics were written by Rokusuke Ei and the melody was composed by Hachidai Nakamura. <a href="http://www.last.fm/music/%E5%9D%82%E6%9C%AC%E4%B9%9D/_/%E4%B8%8A%E3%82%92%E5%90%91%E3%81%84%E3%81%A6%E6%AD%A9%E3%81%93%E3%81%86">Read more on Last.fm</a>.',
                        'song_id' => 797,
                        'created_at' => '2019-10-31 21:08:12',
                        'updated_at' => '2019-10-31 21:08:12',
                    ),
                    459 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Thriller" is a song recorded by American recording artist Michael Jackson, composed by Rod Temperton, and produced by Quincy Jones. It is the seventh and final single from his sixth studio album Thriller. It was released on January 23, 1984 by Epic Records. The song has appeared on multiple greatest hits compilation albums from Jackson, including HIStory: Past, Present, and Future, Book I (1995), Number Ones (2003), The Essential Michael Jackson (2005), and Michael Jackson\'s This Is It (2009). <a href="http://www.last.fm/music/Michael+Jackson/_/Thriller">Read more on Last.fm</a>.',
                        'song_id' => 799,
                        'created_at' => '2019-10-31 21:22:18',
                        'updated_at' => '2019-10-31 21:22:18',
                    ),
                    460 => 
                    array (
                        'name' => 'summary',
                        'value' => '"I Put a Spell on You" is a 1956 song written by Screamin\' Jay Hawkins, whose recording was selected as one of The Rock and Roll Hall of Fame\'s 500 Songs that Shaped Rock and Roll. It was also ranked #313 on the Rolling Stone magazine\'s list of The 500 Greatest Songs of All Time.

The song was later covered by numerous other artists, including Tom Waits, Creedence Clearwater Revival, Beefeaters, Crazy World of Arthur Brown, Nina Simone, The Animals <a href="http://www.last.fm/music/Nina+Simone/_/I+Put+a+Spell+on+You">Read more on Last.fm</a>.',
                        'song_id' => 800,
                        'created_at' => '2019-10-31 21:22:20',
                        'updated_at' => '2019-10-31 21:22:20',
                    ),
                    461 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Ghostbusters" is a 1984 funk rock song written and recorded by Ray Parker, Jr. as the theme to the film of the same name that starred Bill Murray and Dan Aykroyd. It hit number one on the US Billboard Hot 100 on 11 August 1984, and stayed there for three weeks. It also reached number two on the UK Singles Chart for three weeks in the summer of 1984. The song is performed in the key of B major.

It was nominated for the Academy Award for Best Music, Original Song, but lost to Stevie Wonder\'s "I Just Called to Say I Love You". <a href="http://www.last.fm/music/Ray+Parker+Jr./_/Ghostbusters">Read more on Last.fm</a>.',
                        'song_id' => 802,
                        'created_at' => '2019-10-31 21:22:23',
                        'updated_at' => '2019-10-31 21:22:23',
                    ),
                    462 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Superstition" is a popular song written, produced, arranged, and performed by Stevie Wonder for Motown Records in 1972, when Wonder was twenty-two years old. It was included on Wonder\'s Talking Book album and released as a single in many countries. It reached number one in the USA, and number eleven in the UK, in February 1973.

Wonder had actually written this song for Jeff Beck, but at the insistence of his own manager, Wonder himself recorded it first. <a href="http://www.last.fm/music/Stevie+Wonder/_/Superstition">Read more on Last.fm</a>.',
                        'song_id' => 803,
                        'created_at' => '2019-10-31 21:22:25',
                        'updated_at' => '2019-10-31 21:22:25',
                    ),
                    463 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Back in Black" is a song by AC/DC, appearing as the first track on side two of their 1980 album, Back in Black. Known for its opening guitar riff, the song was AC/DC\'s tribute to their former singer Bon Scott. It peaked in the U.S. at #37 on the Billboard Hot 100 chart in 1981 and was #51 on Billboard\'s Top Tracks chart, which debuted in March 1981. "Back in Black" received the RIAA\'s Master Ringtone Sales Award (Gold and Platinum) in 2006 and reached 2x Platinum status in 2007. <a href="http://www.last.fm/music/AC%2FDC/_/Back+in+Black">Read more on Last.fm</a>.',
                        'song_id' => 805,
                        'created_at' => '2019-10-31 23:40:06',
                        'updated_at' => '2019-10-31 23:40:06',
                    ),
                    464 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Hells Bells" is the first track of the album Back in Black of Australian hard rock band AC/DC. It is the first song on their comeback album after the death of vocalist Bon Scott, introducing his successor Brian Johnson.

The song starts off with the slow tolling of a bell 13 times and an intro played by lead guitarist Angus Young in the beginning, he is then accompanied by his brother and band mate Malcolm Young. Eventually the bassist Cliff Williams and the drummer Phil Rudd start playing. <a href="http://www.last.fm/music/AC%2FDC/_/Hells+Bells">Read more on Last.fm</a>.',
                        'song_id' => 806,
                        'created_at' => '2019-10-31 23:40:07',
                        'updated_at' => '2019-10-31 23:40:07',
                    ),
                    465 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Highway to Hell" is a song by the hard rock band AC/DC. It is the opening track of the group\'s 1979 album Highway to Hell and the twelfth track on AC/DC Live.

The song was written by Bon Scott, Angus Young and Malcolm Young while the main guitar riff was created by Malcolm Young. The track has become one of the most famous songs in rock history. AC/DC had made several studio albums before and was constantly supporting them by going on a grueling tour schedule. <a href="http://www.last.fm/music/AC%2FDC/_/Highway+to+Hell">Read more on Last.fm</a>.',
                        'song_id' => 807,
                        'created_at' => '2019-10-31 23:40:09',
                        'updated_at' => '2019-10-31 23:40:09',
                    ),
                    466 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Thunderstruck" is the first song on the 1990 AC/DC album The Razors Edge.

The song peaked at number #5 on Billboard\'s Mainstream Rock Tracks. It was released as a single in Germany, Australia and Japan. Shown is the cover of the German release of the "Thunderstruck" single. The song is said to be inspired by lead guitarist Angus Young\'s hair-raising experience when a plane he was on was struck by lightning. However, Angus Young was later to say that it "started off from a little trick I had on guitar. <a href="http://www.last.fm/music/AC%2FDC/_/Thunderstruck">Read more on Last.fm</a>.',
                        'song_id' => 808,
                        'created_at' => '2019-10-31 23:40:10',
                        'updated_at' => '2019-10-31 23:40:10',
                    ),
                    467 => 
                    array (
                        'name' => 'summary',
                        'value' => '"You Shook Me All Night Long" is one of AC/DC\'s signature songs from their most successful album, Back in Black. The song also reappeared on their later album Who Made Who. It is one of the band\'s top 40 singles, reaching number 35 on the Billboard Hot 100 pop singles chart in 1980. The single was re-released internationally in 1986 following the release of the album Who Made Who.

"You Shook Me All Night Long" placed at No. 10 on VH1\'s list of "The 100 Greatest Songs of the 80s". <a href="http://www.last.fm/music/AC%2FDC/_/You+Shook+Me+All+Night+Long">Read more on Last.fm</a>.',
                        'song_id' => 810,
                        'created_at' => '2019-10-31 23:40:14',
                        'updated_at' => '2019-10-31 23:40:14',
                    ),
                    468 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Dancing With Myself" is a song by the band Generation X released in 1981. According to the Dancing with Myself Songfacts, Billy Idol got the idea watching Asian kids "dancing With themselves" in a nightclub. The kids would dance in a pogo style up and down.
It was from their album, Kiss Me Deadly. It was one of their first true hit singles. At the time of its release, the band shortened their name to simply "Gen X." Also of note, the band contained only Billy Idol and Tony James from the original line-up. <a href="http://www.last.fm/music/Billy+Idol/_/Dancing+With+Myself">Read more on Last.fm</a>.',
                        'song_id' => 811,
                        'created_at' => '2019-10-31 23:40:16',
                        'updated_at' => '2019-10-31 23:40:16',
                    ),
                    469 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The inspiration for this song came from a sign on the top of The Mutual Life Insurance Company of New York building at 1740 Broadway in Manhattan.  It was spelled out using the common acronym MONY.  This stood for Mutual Of New York.  MONY is generally pronounced with the "e" as "money".

This song became the MONY employee\'s theme song.  The crowd would go wild at the employee clambakes when the DJ queued this song up. <a href="http://www.last.fm/music/Billy+Idol/_/Mony+Mony">Read more on Last.fm</a>.',
                        'song_id' => 812,
                        'created_at' => '2019-10-31 23:40:17',
                        'updated_at' => '2019-10-31 23:40:17',
                    ),
                    470 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Rebel Yell" is the first song on the Billy Idol album of the same name. When first released in 1984, it charted outside the UK Top 40, but a re-issue in 1985 reached #6. It did not fare as well in the US, only reaching #46. The song was named the 79th best hard rock song of all time by VH1.

According to Billy Idol at a televised performance of VH1 Storytellers, the idea of a song thus entitled came to him at an event he once attended, where Mick Jagger <a href="http://www.last.fm/music/Billy+Idol/_/Rebel+Yell">Read more on Last.fm</a>.',
                        'song_id' => 813,
                        'created_at' => '2019-10-31 23:40:18',
                        'updated_at' => '2019-10-31 23:40:18',
                    ),
                    471 => 
                    array (
                        'name' => 'summary',
                    'value' => '"White Wedding" is a song by Billy Idol that appeared on his album Billy Idol (1982). According to "the Big 80\'s:Episode I" of VH1\'s Pop-up Video trivia show, Idol claims it was written to show his displeasure with his sister\'s fiancé. It is often considered his most successful song, although other Idol songs charted higher. It reached #36 on the Billboard Hot 100 on its original release, and reached #6 in the UK upon its release there in 1985. <a href="http://www.last.fm/music/Billy+Idol/_/White+Wedding">Read more on Last.fm</a>.',
                        'song_id' => 814,
                        'created_at' => '2019-10-31 23:40:20',
                        'updated_at' => '2019-10-31 23:40:20',
                    ),
                    472 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Blowin\' in the Wind" is a song written by Bob Dylan and released on his 1963 album The Freewheelin\' Bob Dylan. Although it has been described as a protest song, it poses a series of philosophical questions about peace, war, and freedom without supplying concrete answers. The refrain "The answer, my friend, is blowin\' in the wind" has been described as "impenetrably ambiguous: either the answer is so obvious it is right in your face, or the answer is as intangible as the wind". The song makes no reference to a specific event. <a href="http://www.last.fm/music/Bob+Dylan/_/Blowin%27+in+the+Wind">Read more on Last.fm</a>.',
                        'song_id' => 815,
                        'created_at' => '2019-10-31 23:40:21',
                        'updated_at' => '2019-10-31 23:40:21',
                    ),
                    473 => 
                    array (
                        'name' => 'summary',
                        'value' => '"I Want You" is a 1966 song recorded by Bob Dylan which appeared on the album Blonde on Blonde. 
It was also released as a single with a live version of "Just Like Tom Thumb\'s Blues" in June, reaching number twenty on the Billboard Hot 100 and number sixteen in the UK. 
A live version later appeared on the album, Dylan and the Dead, a collaboration with the Grateful Dead.

It has been argued that the song is about Anita Pallenberg, at the time the girlfriend of Brian Jones <a href="http://www.last.fm/music/Bob+Dylan/_/I+Want+You">Read more on Last.fm</a>.',
                        'song_id' => 816,
                        'created_at' => '2019-10-31 23:40:23',
                        'updated_at' => '2019-10-31 23:40:23',
                    ),
                    474 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Just Like a Woman is a 1966 song written by Bob Dylan. It appears on the second side of his classic 1966 album Blonde on Blonde. It was released as a single in the US and peaked at #33. The magazine Rolling Stone ranked the song as number 230 in their 500 Greatest Songs of All Time[1]

Dylan wrote this ballad on Thanksgiving Day 1965 while touring in Kansas City. It was allegedly inspired by New York socialite Edie Sedgwick, who frequented Andy Warhol\'s <a href="http://www.last.fm/music/Bob+Dylan/_/Just+Like+a+Woman">Read more on Last.fm</a>.',
                        'song_id' => 817,
                        'created_at' => '2019-10-31 23:40:24',
                        'updated_at' => '2019-10-31 23:40:24',
                    ),
                    475 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Subterranean Homesick Blues" is a song by Bob Dylan, originally released on the album Bringing It All Back Home in March 1965. The following month it was issued as a single, becoming his first Top 40 Billboard Hot 100 hit (#39) and going Top 10 in the UK. It was subsequently re-released on numerous compilations such as Bob Dylan\'s Greatest Hits (1967). One of Dylan\'s first \'electric\' pieces, "Subterranean Homesick Blues" was also notable for its innovative film clip, which first appeared in D. A. Pennebaker\'s documentary, Dont Look Back. <a href="http://www.last.fm/music/Bob+Dylan/_/Subterranean+Homesick+Blues">Read more on Last.fm</a>.',
                        'song_id' => 818,
                        'created_at' => '2019-10-31 23:40:26',
                        'updated_at' => '2019-10-31 23:40:26',
                    ),
                    476 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Tangled Up in Blue" is a song by Bob Dylan. It appeared on his album Blood on the Tracks in 1975. Rolling Stone ranked it #68 on their list of the 500 Greatest Songs of All Time.
It was originally recorded in Nashville TN. with Eric Weisberg and Deliverence, A bluegrass band. However
Bob didn\'t really like the way it turned out so..When he traveled to the Twin Cities where his mother and brother live for a visit, he decided to re-record it with two session guys from Minneapolis, Billy Peterson and Bill Berg, <a href="http://www.last.fm/music/Bob+Dylan/_/Tangled+Up+in+Blue">Read more on Last.fm</a>.',
                        'song_id' => 819,
                        'created_at' => '2019-10-31 23:40:27',
                        'updated_at' => '2019-10-31 23:40:27',
                    ),
                    477 => 
                    array (
                        'name' => 'summary',
                    'value' => '"Girls Just Want to Have Fun" is a song written by Robert Hazard. It was the first major single released by singer Cyndi Lauper as a solo artist, and appears on She\'s So Unusual (released in 1983 by Portrait Records).

It gained recognition as a feminist anthem, an award-winning video and a worldwide hit. It has been covered on either an album or in live concert by over 30 other artists. It was her breakthrough hit, reaching number two on the Billboard Hot 100 for two weeks. <a href="http://www.last.fm/music/Cyndi+Lauper/_/Girls+Just+Want+to+Have+Fun">Read more on Last.fm</a>.',
                        'song_id' => 820,
                        'created_at' => '2019-10-31 23:40:29',
                        'updated_at' => '2019-10-31 23:40:29',
                    ),
                    478 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Time After Time" was a single by singer Cyndi Lauper, the second from her album, She\'s So Unusual. Speaking with Songfacts  about this song in an interview, co-writer Rob Hyman explained Cyndi came up with the title when she saw it in the magazine TV Guide. "Time After Time" was the name of a 1979 science fiction movie starring Malcolm McDowell as a man who invents a time machine. Said Rob: "When she saw \'Time After Time,\' something clicked - she said \'I think I have a title. <a href="http://www.last.fm/music/Cyndi+Lauper/_/Time+After+Time">Read more on Last.fm</a>.',
                        'song_id' => 822,
                        'created_at' => '2019-10-31 23:40:32',
                        'updated_at' => '2019-10-31 23:40:32',
                    ),
                    479 => 
                    array (
                        'name' => 'summary',
                        'value' => 'True Colors was performed by Cyndi Lauper. When it was released in 1986 it reached #1 on the U.S. Billboard Hot 100, #3 in Australia, and #5 on the UK Singles Chart.

Billy Steinberg originally wrote True Colors about his own mother. Tom Kelly altered the first verse and the duo submitted the song to Cyndi Lauper. Other songs they wrote for Cyndi Lauper include "I Drove All Night" and "Unconditional Love", the latter of which went on to be covered by Susanna Hoffs <a href="http://www.last.fm/music/Cyndi+Lauper/_/True+Colors">Read more on Last.fm</a>.',
                        'song_id' => 823,
                        'created_at' => '2019-10-31 23:40:34',
                        'updated_at' => '2019-10-31 23:40:34',
                    ),
                    480 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Enjoy the Silence is a single by Depeche Mode, written by Martin L. Gore. Produced by Flood & Depeche Mode. Mixed by Daniel Miller & Phil Legg. Released February 1990. Appears on Violator. The song hit #6 in the UK. In the US, it is the band\'s most successful single, hitting #8 on the Billboard Hot 100 and #1 on the Billboard Modern Rock Tracks chart. <a href="http://www.last.fm/music/Depeche+Mode/_/Enjoy+the+Silence">Read more on Last.fm</a>.',
                        'song_id' => 824,
                        'created_at' => '2019-10-31 23:40:35',
                        'updated_at' => '2019-10-31 23:40:35',
                    ),
                    481 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Just Can\'t Get Enough" is the third UK single by Depeche Mode. It was originally released in the UK in September 1981, and was also the band\'s first single to be released in the United States, on February 18, 1982. It was recorded during the summer of that year.

The song, a riff-driven synthpop piece, was the final single to be written by founder member Vince Clarke, who would leave the band in December 1981. The song was included on the band\'s first album, Speak and Spell, which was released a month after the single. <a href="http://www.last.fm/music/Depeche+Mode/_/Just+Can%27t+Get+Enough">Read more on Last.fm</a>.',
                        'song_id' => 825,
                        'created_at' => '2019-10-31 23:40:37',
                        'updated_at' => '2019-10-31 23:40:37',
                    ),
                    482 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Personal Jesus" is Depeche Mode\'s twenty-third UK single, released on August 29, 1989, and the first single from the then upcoming album Violator. It was written by Martin L. Gore. Since then, the title song has been covered by numerous artists. Inspired by the book Elvis and Me by Priscilla Presley, it was the first hit from the album, reaching #13 on the UK Singles Chart. It was also included in Rockstar\'s Grand Theft Auto: San Andreas on the fictional radio station Radio X. <a href="http://www.last.fm/music/Depeche+Mode/_/Personal+Jesus">Read more on Last.fm</a>.',
                        'song_id' => 826,
                        'created_at' => '2019-10-31 23:40:38',
                        'updated_at' => '2019-10-31 23:40:38',
                    ),
                    483 => 
                    array (
                        'name' => 'summary',
                    'value' => 'Strangelove is Depeche Mode\'s eighteenth UK single, released on 13 Apr 87, and the first single for the then upcoming album Music for the Masses. It reached #16 in the UK charts (Depeche Mode would fail to make the Top 10 of the UK singles chart throughout the second half of the 1980s), but hit #2 in West Germany and in South Africa, and was a Top 10 success in several other countries (Sweden, Switzerland, etc.).

The original version of "Strangelove" is a fast-paced poppy track. <a href="http://www.last.fm/music/Depeche+Mode/_/Strangelove">Read more on Last.fm</a>.',
                        'song_id' => 827,
                        'created_at' => '2019-10-31 23:40:40',
                        'updated_at' => '2019-10-31 23:40:40',
                    ),
                    484 => 
                    array (
                        'name' => 'summary',
                    'value' => 'The soulful sound of Annie Lennox made this track a powerful edge of what could have been "just a good tune".  The background vocals with the richness of the rythmic strings and the echo from the light angelic sound of the tender soprano blending with the lower slightly darker vocals that is Annie Lennox gifted forte, melts  into a rhythmic almost heartbeat feel that  builds to a full synchronized sound reaching from a cool mountain top down to a lush warm valley of pure rocking soul. <a href="http://www.last.fm/music/Eurythmics/_/Sweet+Dreams+(Are+Made+of+This)">Read more on Last.fm</a>.',
                        'song_id' => 828,
                        'created_at' => '2019-10-31 23:40:41',
                        'updated_at' => '2019-10-31 23:40:41',
                    ),
                    485 => 
                    array (
                        'name' => 'summary',
                        'value' => 'This track is a cover of the Bob Dylan song "All Along The Watchtower". However many do not realise this due to the popularity of Hendrix\'s version.

The Jimi Hendrix Experience began to record their cover version of Dylan\'s "All Along The Watchtower" on January 21, 1968, at Olympic Studios in London. According to engineer Andy Johns, Jimi Hendrix had been given a tape of Dylan’s recording by publicist Michael Goldstein, who worked for Dylan’s manager Albert Grossman. <a href="http://www.last.fm/music/Jimi+Hendrix/_/All+Along+the+Watchtower">Read more on Last.fm</a>.',
                        'song_id' => 829,
                        'created_at' => '2019-10-31 23:40:43',
                        'updated_at' => '2019-10-31 23:40:43',
                    ),
                    486 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Angel, the first track on the album Mezzanine is a highly emotional trip-hop tune featuring Horace Andy\'s vocals. The song evokes dark and sinister cries from the slow and repetitive percussion and then strikes a distressed melody with an electric guitar drowning through the sonic atmosphere of the piece. 

The song has been featured in the movies "Snatch" (2000), "Flight of the Phoenix" (2004) and several others as well as TV series such as "The West Wing", "Person of Interest" and "Smallville."  <a href="http://www.last.fm/music/Massive+Attack/_/Angel">Read more on Last.fm</a>.',
                        'song_id' => 831,
                        'created_at' => '2019-10-31 23:40:46',
                        'updated_at' => '2019-10-31 23:40:46',
                    ),
                    487 => 
                    array (
                        'name' => 'summary',
                        'value' => 'Teardrop is a song by Massive Attack which was first released on their 1998 album Mezzanine. It was released as a single on April 21, 1998. The song became another UK hit for the group, peaking at number 10 on the UK singles chart, and later becoming well-known as the theme for US television series House MD.

The original version of the song features vocals by Elizabeth Fraser (of the Cocteau Twins). Fraser\'s vocal part was recorded just after she was given the news that Jeff Buckley <a href="http://www.last.fm/music/Massive+Attack/_/Teardrop">Read more on Last.fm</a>.',
                        'song_id' => 832,
                        'created_at' => '2019-10-31 23:40:48',
                        'updated_at' => '2019-10-31 23:40:48',
                    ),
                    488 => 
                    array (
                        'name' => 'summary',
                        'value' => 'When Thom Yorke and his girlfriend got into a car accident in 1987, he developed a fear of cars.. While he was not injured, his girlfriend suffered from whiplash. He later wrote the songs Airbag, Killer Cars, Stupid Car and The Drunkk Machine because of this incident.

Originally called "An Airbag Saved My Life", after a headline that Thom Yorke saw in an AA manual and was immediately drawn to, and also as a tongue-in-cheek tribute to Indeep\'s 1983 disco hit \'Last Night a DJ Saved My Life\'. <a href="http://www.last.fm/music/Radiohead/_/Airbag">Read more on Last.fm</a>.',
                        'song_id' => 835,
                        'created_at' => '2019-10-31 23:40:52',
                        'updated_at' => '2019-10-31 23:40:52',
                    ),
                    489 => 
                    array (
                        'name' => 'summary',
                        'value' => ' Thom: "This is about the unspeakable. Literally skull-crushing. I used to work in a mental hospital around the time that Care In The Community started, and we all just knew what was going to happen. And it\'s one of the scariest things to happen in this country, because a lot of them weren\'t just harmless... It was hailing violently when we recorded this. It seemed to add to the mood. Some people can\'t sleep with the curtains open in case they see the eyes they imagine in their heads every night burning through the glass. <a href="http://www.last.fm/music/Radiohead/_/Climbing+Up+the+Walls">Read more on Last.fm</a>.',
                        'song_id' => 836,
                        'created_at' => '2019-10-31 23:40:54',
                        'updated_at' => '2019-10-31 23:40:54',
                    ),
                    490 => 
                    array (
                        'name' => 'summary',
                        'value' => '"Knives Out" is a song by English alternative rock band Radiohead. The composition features electric and acoustic guitars, complemented by singer Thom Yorke\'s vocals. It appears on Radiohead\'s 2001 album Amnesiac, recorded during the same sessions as the previous album Kid A. It was also released as the second Amnesiac single, receiving more radio airplay than the band\'s other songs of the period. The song reached #13 on the UK singles chart.

Yorke has usually described the song as being about "cannibalism". <a href="http://www.last.fm/music/Radiohead/_/Knives+Out">Read more on Last.fm</a>.',
                        'song_id' => 837,
                        'created_at' => '2019-10-31 23:40:55',
                        'updated_at' => '2019-10-31 23:40:55',
                    ),
                    491 => 
                    array (
                        'name' => 'summary',
                        'value' => 'This track was recorded in the ballroom of actress Jane Seymour\'s mansion at 3 A.M. It closes with computerized sounds created by ZX Spectrum computers, which all the members of Radiohead owned in the 1980s. Jonny explains what it\'s all about: "It\'s like when Andy Warhol said he enjoyed being bored. It\'s about that feeling that you get when you\'re not in control of it – you just go past thousands of places and thousands of people and you\'re completely removed from it." <a href="http://www.last.fm/music/Radiohead/_/Let+Down">Read more on Last.fm</a>.',
                        'song_id' => 838,
                        'created_at' => '2019-10-31 23:40:57',
                        'updated_at' => '2019-10-31 23:40:57',
                    ),
                    492 => 
                    array (
                        'name' => 'summary',
                    'value' => 'Mistagged name for (Nice Dream), see http://www.discogs.com/viewimages?release=368116 <a href="http://www.last.fm/music/Radiohead/_/Nice+Dream">Read more on Last.fm</a>.',
                        'song_id' => 839,
                        'created_at' => '2019-10-31 23:40:58',
                        'updated_at' => '2019-10-31 23:40:58',
                    ),
                    493 => 
                    array (
                        'name' => 'summary',
                        'value' => 'This track was intially introduced as being about "knowing who your real friends are and when they\'re going to come to your gigs." Thom soon simplified this to "knowing who your friends are." The song reflects Radiohead sense of humor; it contains many ridiculous lines about the CIA and the Marines. 

Of the opening, Thom says, "The sound at the beginning comes from this caterwauling mayhem outside this hotel in the States. There was this guy training these eight-year-old kids <a href="http://www.last.fm/music/Radiohead/_/The+Bends">Read more on Last.fm</a>.',
                        'song_id' => 841,
                        'created_at' => '2019-10-31 23:41:01',
                        'updated_at' => '2019-10-31 23:41:01',
                    ),
                    494 => 
                    array (
                        'name' => 'summary',
                        'value' => '"The Tourist" was written by Jonny, who, explains Thom, was "in a beautiful square in France on a sunny day, and watching all these American tourists being wheeled around, frantically trying to see everything in 10 minutes." Jonny was shocked at how these people could be in a place so beautiful and so special and not realize it because they weren\'t taking the time to just stop and look around. 

Jonny : "Thom didn\'t play a thing, he just listened. It\'s quite nervy, with a lot of space. It sounds like the last song on an album." <a href="http://www.last.fm/music/Radiohead/_/The+Tourist">Read more on Last.fm</a>.',
                        'song_id' => 842,
                        'created_at' => '2019-10-31 23:41:03',
                        'updated_at' => '2019-10-31 23:41:03',
                    ),
                    495 => 
                    array (
                        'name' => 'summary',
                    'value' => '"There There" is a song by the English alternative rock band Radiohead, featured on their album Hail to the Thief (2003) and released prior to the album as its first single. "There There" reached number four in the UK Singles Chart and number one in Canada. It also received moderate airplay from US modern rock stations and was nominated for a Grammy Award for Best Rock Performance, making it the band\'s most successful single on the radio since "Optimistic" in 2000. <a href="http://www.last.fm/music/Radiohead/_/There+There">Read more on Last.fm</a>.',
                        'song_id' => 843,
                        'created_at' => '2019-10-31 23:41:05',
                        'updated_at' => '2019-10-31 23:41:05',
                    ),
                    496 => 
                    array (
                        'name' => 'summary',
                        'value' => 'The It Must Have Been Love Songfacts says: Recorded before Roxette started working on their Joyride album, "It Must Have Been Love" was written for the movie Pretty Woman, starring Julia Roberts and Richard Gere. The movie was a huge hit and helped lift the song to the top of the US charts. <a href="http://www.last.fm/music/Roxette/_/It+Must+Have+Been+Love">Read more on Last.fm</a>.',
                        'song_id' => 844,
                        'created_at' => '2019-10-31 23:41:07',
                        'updated_at' => '2019-10-31 23:41:07',
                    ),
                    497 => 
                    array (
                        'name' => 'summary',
                        'value' => 'From the booklet of the greatest hits compilation Don\'t bore us...: Per: The fourth #1 in America. It all started with a message my girlfriend left on the piano: "Hello, you fool - I love you" Sounds like a chorus, I thought. Got the title from an interview with Paul McCartney, where he said that writing songs with John Lennon was a long joyride. <a href="http://www.last.fm/music/Roxette/_/Joyride">Read more on Last.fm</a>.',
                        'song_id' => 845,
                        'created_at' => '2019-10-31 23:41:08',
                        'updated_at' => '2019-10-31 23:41:08',
                    ),
                    498 => 
                    array (
                        'name' => 'summary',
                        'value' => '"The Look" peaked at #1 on the U.S. Billboard Hot 100 Chart in the Spring of 1989. <a href="http://www.last.fm/music/Roxette/_/The+Look">Read more on Last.fm</a>.',
                        'song_id' => 847,
                        'created_at' => '2019-10-31 23:41:11',
                        'updated_at' => '2019-10-31 23:41:11',
                    ),
                    499 => 
                    array (
                        'name' => 'summary',
                    'value' => 'Released in the first quarter of 1985, "Don\'t You (Forget About Me)" was taken from the soundtrack to John Hughes\'s film, The Breakfast Club. The single became a major success for the band, hitting #1 on the U.S. Billboard Hot 100, #7 on the UK Official Charts, #4 on the German charts, and the top ten on several major markets. Billboard Magazine ranked "Don\'t You (Forget About Me)" as the 16th biggest single of 1985 in the U.S.

The song was also used in the prom scene of Hughes\'s 1986 film Pretty In Pink. <a href="http://www.last.fm/music/Simple+Minds/_/Don%27t+You+(Forget+About+Me)">Read more on Last.fm</a>.',
                        'song_id' => 848,
                        'created_at' => '2019-10-31 23:41:13',
                        'updated_at' => '2019-10-31 23:41:13',
                    ),
                ));
        \DB::table('songs_meta')->insert(array (
            0 => 
            array (
                'name' => 'summary',
                'value' => '"Closer" is a song by Scottish band Travis, and is the third track on their 2007 studio album "The Boy with No Name". The song was released as the first single from that album in the United Kingdom on April 23, 2007.

The song\'s promotional video features the band as clerks in a supermarket with Fran Healy as the mascot. When fed up with his job, he goes inside and starts singing on the speaker system. Payne, who was working at the register completely bored, takes out his bass and Dunlop and Primrose are dancing with the customers. <a href="http://www.last.fm/music/Travis/_/Closer">Read more on Last.fm</a>.',
                'song_id' => 849,
                'created_at' => '2019-10-31 23:41:14',
                'updated_at' => '2019-10-31 23:41:14',
            ),
            1 => 
            array (
                'name' => 'summary',
                'value' => '"Driftwood" is the second single from Travis\' second album, The Man Who. It became their biggest UK hit single up to that point, peaking at #13 in the UK Singles Chart.

Fran Healy, lead singer of the band, has said: "Driftwood is a song for the person in your life who has so much potential and, yet, doesn\'t use it because they\'re afraid of falling on their backside, you know, they\'re afraid of making a fool of themselves. But, yet, if they put their minds to it and just threw their plate out the window <a href="http://www.last.fm/music/Travis/_/Driftwood">Read more on Last.fm</a>.',
                'song_id' => 851,
                'created_at' => '2019-10-31 23:41:18',
                'updated_at' => '2019-10-31 23:41:18',
            ),
            2 => 
            array (
                'name' => 'summary',
                'value' => ' <a href="http://www.last.fm/music/Travis/_/Side">Read more on Last.fm</a>.',
                'song_id' => 852,
                'created_at' => '2019-10-31 23:41:19',
                'updated_at' => '2019-10-31 23:41:19',
            ),
            3 => 
            array (
                'name' => 'summary',
                'value' => '"Sing" is the lead single from Travis\' third studio album. 
The music video features a food fight between the band members, which was re-enacted in their performance of the song on Top of the Pops. The song reached a peak position of number three on the UK Singles Chart.

The song was featured in the 2002 Adam Sandler film Mr. Deeds, in the 2005 The Office episode "The Client" and in the 2006 Torchwood episodes "Ghost Machine" and "Greeks Bearing Gifts".  <a href="http://www.last.fm/music/Travis/_/Sing">Read more on Last.fm</a>.',
                'song_id' => 853,
                'created_at' => '2019-10-31 23:41:21',
                'updated_at' => '2019-10-31 23:41:21',
            ),
            4 => 
            array (
                'name' => 'summary',
                'value' => '"Turn" is the fourth single from Travis\' second studio album, The Man Who, and peaked at the number eight position on the UK Singles Chart.
Two music videos were shot for the single. The first version (included on the Singles DVD), featured lead singer Francis Healy engaged in a push-up contest. This video was filmed in Hackney in East London on a council estate. The estate has since been demolished. The second featured a staged performance by the band. <a href="http://www.last.fm/music/Travis/_/Turn">Read more on Last.fm</a>.',
                'song_id' => 855,
                'created_at' => '2019-10-31 23:41:24',
                'updated_at' => '2019-10-31 23:41:24',
            ),
            5 => 
            array (
                'name' => 'summary',
                'value' => '"Why Does It Always Rain on Me?" is a single by Scottish band Travis. It was the breakthrough single which earned the group international recognition. It was the third single from their second album, The Man Who, and their first Top 10 hit on the UK Singles Chart, peaking at #10. Outside of the UK, it peaked at #11 on the Australian charts, giving the band their biggest hit in that country. Regional singles were released for the UK, Austria, Japan, and USA. <a href="http://www.last.fm/music/Travis/_/Why+Does+It+Always+Rain+on+Me%3F">Read more on Last.fm</a>.',
                'song_id' => 857,
                'created_at' => '2019-10-31 23:41:27',
                'updated_at' => '2019-10-31 23:41:27',
            ),
            6 => 
            array (
                'name' => 'summary',
                'value' => '\'Writing To Reach You\' is a song released by Travis. The frontman of the band, Fran Healy, described it as a song  "all about trying to get someone﻿ and while you\'re trying to get, you realize that you probably never will, you probably never would anyway and you\'d stayed together forever, cause i guess, some people fit and some people don\'t - we didn\'t." <a href="http://www.last.fm/music/Travis/_/Writing+To+Reach+You">Read more on Last.fm</a>.',
                'song_id' => 858,
                'created_at' => '2019-10-31 23:41:29',
                'updated_at' => '2019-10-31 23:41:29',
            ),
            7 => 
            array (
                'name' => 'summary',
                'value' => 'This is classic Lou Reed. "Pale Blue Eyes" is a song written by Lou Reed and performed by The Velvet Underground. It was included on the band\'s eponymous 1969 album "The Velvet Underground". The song, as with a number of Reed\'s other songs, was inspired by his college sweetheart and muse, Shelly Albin, who indeed had pale blue eyes. <a href="http://www.last.fm/music/The+Velvet+Underground/_/Pale+Blue+Eyes">Read more on Last.fm</a>.',
                'song_id' => 859,
                'created_at' => '2019-10-31 23:41:30',
                'updated_at' => '2019-10-31 23:41:30',
            ),
            8 => 
            array (
                'name' => 'summary',
                'value' => '"Listen to Your Heart" peaked at #1 on the U.S. Billboard Hot 100 in the Autumn of 1989. <a href="http://www.last.fm/music/Roxette/_/Listen+to+Your+Heart">Read more on Last.fm</a>.',
                'song_id' => 860,
                'created_at' => '2019-11-01 00:15:13',
                'updated_at' => '2019-11-01 00:15:13',
            ),
            9 => 
            array (
                'name' => 'summary',
                'value' => '"Beautiful Day" was the first single from U2\'s 2000 album, All That You Can\'t Leave Behind. It was a commercial success, helping launch the album to multi-platinum status, and is one of U2\'s biggest hits to date. It was their fourth #1 single in the UK and was #1 for a week in Australia. The song peaked at #21 in the US, the band\'s highest position since "Discotheque" in 1997. The song won three Grammy Awards in 2001.

According to Bono, "Beautiful Day" is about "a man who has lost everything, but finds joy in what he still has." <a href="http://www.last.fm/music/U2/_/Beautiful+Day">Read more on Last.fm</a>.',
                'song_id' => 862,
                'created_at' => '2019-11-01 00:15:16',
                'updated_at' => '2019-11-01 00:15:16',
            ),
            10 => 
            array (
                'name' => 'summary',
            'value' => '"I Still Haven\'t Found What I\'m Looking For" is the second track from U2\'s 1987 album The Joshua Tree, and was released as the album\'s second single. It became their second (and last as of 2008) #1 song on the Billboard Hot 100 after With or Without You, the first single from the album, and peaked at #6 in the UK Singles Chart.
The song originated from a demo the band recorded on which drummer Larry Mullen, Jr. played a unique rhythm pattern. Like much of The Joshua Tree, the song was inspired by the group\'s interest in American music. <a href="http://www.last.fm/music/U2/_/I+Still+Haven%27t+Found+What+I%27m+Looking+For">Read more on Last.fm</a>.',
                'song_id' => 864,
                'created_at' => '2019-11-01 00:15:19',
                'updated_at' => '2019-11-01 00:15:19',
            ),
            11 => 
            array (
                'name' => 'summary',
                'value' => '"New Year\'s Day" is the third song and lead single from U2\'s 1983 album, War. The song is driven by Adam Clayton\'s distinctive bassline and The Edge\'s keyboard. It was the band\'s first hit single, breaking the top ten in the UK, peaking at #10 on the singles chart, and charting on the Billboard Hot 100 for the first time in their career. In 2004, Rolling Stone magazine placed the single at #427 on their list of the 500 Greatest Songs of All Time. <a href="http://www.last.fm/music/U2/_/New+Year%27s+Day">Read more on Last.fm</a>.',
                'song_id' => 865,
                'created_at' => '2019-11-01 00:15:21',
                'updated_at' => '2019-11-01 00:15:21',
            ),
            12 => 
            array (
                'name' => 'summary',
                'value' => '"One" is the third single from U2\'s 1991 album, Achtung Baby, and was released in 1992. It is widely considered to be one of the band\'s greatest songs and is consistently featured in lists of the greatest songs of all time. It was named the 36th greatest song by Rolling Stone on their list of the 500 Greatest Songs of All Time.

According to the One Songfacts, this can be interpreted many ways. It could be about the band, a girl, or an AIDS victim. Bono has said it is "About relationships." <a href="http://www.last.fm/music/U2/_/One">Read more on Last.fm</a>.',
                'song_id' => 866,
                'created_at' => '2019-11-01 00:15:22',
                'updated_at' => '2019-11-01 00:15:22',
            ),
            13 => 
            array (
                'name' => 'summary',
                'value' => '"Stuck in a Moment You Can\'t Get Out Of" is a single release from U2\'s 2000 album, All That You Can\'t Leave Behind. It has gospel-tinged melodies and saccharine guitar leads. It won the "Grammy Award for Best Pop Performance by a Duo or Group with Vocal" in 2002. 

U2\'s lead singer Bono wrote the song about the suicide of his close friend Michael Hutchence, the late lead singer of the band INXS. The song is written in the form of an argument about suicide in which Bono tries to convince Hutchence of the act\'s foolishness. <a href="http://www.last.fm/music/U2/_/Stuck+in+a+Moment+You+Can%27t+Get+Out+Of">Read more on Last.fm</a>.',
                'song_id' => 868,
                'created_at' => '2019-11-01 00:15:25',
                'updated_at' => '2019-11-01 00:15:25',
            ),
            14 => 
            array (
                'name' => 'summary',
                'value' => '"Sunday Bloody Sunday" is the opening track and third single from U2\'s 1983 album, War. The song is noted for its militaristic drumbeat, simple but harsh guitar, and melodic harmonies. One of U2\'s most overtly political songs, its lyrics describe the horror felt by an observer of The Troubles in Northern Ireland.  The title and critically charged lyrics have been attributed to Bloody Sunday, which occurred on January 30th, 1972, when British paratroopers opened fire on unprovoked unarmed Catholic Northern Irish independence marchers. <a href="http://www.last.fm/music/U2/_/Sunday+Bloody+Sunday">Read more on Last.fm</a>.',
                'song_id' => 869,
                'created_at' => '2019-11-01 00:15:27',
                'updated_at' => '2019-11-01 00:15:27',
            ),
            15 => 
            array (
                'name' => 'summary',
                'value' => '"With or Without You" is the lead single from U2\'s 1987 album, The Joshua Tree. It has since become highly-acclaimed as one of the band\'s most popular songs. Released as a single in March 1987, it became the group\'s first American #1 hit, spending three weeks at the top. It also reached #4 in the UK and #2 on the Dutch Top 40.

According to Bono, the song was heavily influenced by Scott Walker\'s album Climate of Hunter. It was U2\'s first single to be widely issued on CD. The song is U2\'s second most frequently covered song. <a href="http://www.last.fm/music/U2/_/With+or+Without+You">Read more on Last.fm</a>.',
                'song_id' => 871,
                'created_at' => '2019-11-01 00:15:30',
                'updated_at' => '2019-11-01 00:15:30',
            ),
            16 => 
            array (
                'name' => 'summary',
                'value' => 'On the surface, this is a hopeful song celebrating the virtues of youth, but a closer listen reveals a fear of aging and death. The song was written during the Cold War, where the singer is "hoping for the best, but expecting the worst; are you gonna drop the bomb or not?"

Alphaville was a German Synthpop/Rock music group. The song was not a big hit when it was released, but has become well known as a result of its use in movies and TV shows. Among its uses: <a href="http://www.last.fm/music/Alphaville/_/Forever+Young">Read more on Last.fm</a>.',
                'song_id' => 872,
                'created_at' => '2020-01-20 21:01:32',
                'updated_at' => '2020-01-20 21:01:32',
            ),
            17 => 
            array (
                'name' => 'summary',
                'value' => 'Hurricane is a protest song by Bob Dylan co-written with Jacques Levy, about the imprisonment of Rubin "Hurricane" Carter. It compiles alleged acts of racism and profiling against Carter, which Dylan describes as leading to a false trial and conviction.

Dylan\'s Desire opens with "Hurricane", arguably the most popular song on the 1976 release. Named after former middleweight contender Rubin Carter, Dylan had been inspired to write it after reading Carter\'s autobiography <a href="http://www.last.fm/music/Bob+Dylan/_/Hurricane">Read more on Last.fm</a>.',
                'song_id' => 874,
                'created_at' => '2020-01-20 21:01:35',
                'updated_at' => '2020-01-20 21:01:35',
            ),
            18 => 
            array (
                'name' => 'summary',
                'value' => 'The song was originally written for the soundtrack to the 1993 film Romeo Is Bleeding. After disliking the film, the band decided not to lend the song to the producers; upon release, the film was a critical and box office disaster. Jon Bon Jovi left the track on his shelf and forgot about it, until a friend found the track and convinced him to release it on the band\'s Cross Road compilation album and went on to become their best selling single, with a million copies sold in the U.S. and more than 3 million worldwide. <a href="http://www.last.fm/music/Bon+Jovi/_/Always">Read more on Last.fm</a>.',
                'song_id' => 875,
                'created_at' => '2020-01-20 21:01:37',
                'updated_at' => '2020-01-20 21:01:37',
            ),
            19 => 
            array (
                'name' => 'summary',
                'value' => '"It\'s My Life" is Bon Jovi\'s first single from the album Crush. It was released on May 23, 2000. It was written by Jon Bon Jovi, Richie Sambora and Max Martin.

"It\'s My Life" became one of the most successful Bon Jovi singles, hitting #1 across many countries (however, it only reached #33 in the band\'s native US) and most importantly, becoming a symbol of the band\'s longevity as they prevailed through many different changes in the mainstream rock scene with admirable success. <a href="http://www.last.fm/music/Bon+Jovi/_/It%27s+My+Life">Read more on Last.fm</a>.',
                'song_id' => 876,
                'created_at' => '2020-01-20 21:01:38',
                'updated_at' => '2020-01-20 21:01:38',
            ),
            20 => 
            array (
                'name' => 'summary',
                'value' => '\'Livin\' on a Prayer\' is Bon Jovi\'s second single from their "Slippery When Wet" album. The song is considered the band\'s signature song. This is the first time that Sambora used the talk box as a lead instrument.

Jon Bon Jovi did not like the original recording of this song, which can be found as a hidden track on "100,000,000 Bon Jovi Fans Can\'t Be Wrong". Richie Sambora convinced him the song was good, and they reworked it and included it on their "Slippery When Wet" album. <a href="http://www.last.fm/music/Bon+Jovi/_/Livin%27+on+a+Prayer">Read more on Last.fm</a>.',
                'song_id' => 877,
                'created_at' => '2020-01-20 21:01:39',
                'updated_at' => '2020-01-20 21:01:39',
            ),
            21 => 
            array (
                'name' => 'summary',
                'value' => '\'Wanted Dead or Alive\' is a song from Bon Jovi\'s 1986 album Slippery When Wet. The song was written by Jon Bon Jovi and Richie Sambora and was released in 1987 as the album\'s third single. The song peaked at #7 on the Billboard Hot 100 chart, making it the third single from the album to reach the Top 10 of the Hot 100. "Slippery When Wet" was the first hard rock album ever to have 3 top 10 hits on it. 

The song\'s title pays homage to Jon\'s admiration for Old West heroes, and how he identifies with them as being hated (wanted dead or alive). <a href="http://www.last.fm/music/Bon+Jovi/_/Wanted+Dead+or+Alive">Read more on Last.fm</a>.',
                'song_id' => 878,
                'created_at' => '2020-01-20 21:01:41',
                'updated_at' => '2020-01-20 21:01:41',
            ),
            22 => 
            array (
                'name' => 'summary',
                'value' => '"You Give Love a Bad Name" is a song written by Jon Bon Jovi, Desmond Child, and Richie Sambora about a nameless woman who has jilted her lover. Although originally written for the band Loverboy, the song was recorded by Bon Jovi. The track was released as the first single from the hard rock album Slippery When Wet and hit number one on the Billboard Hot 100 on November 29, 1986, Bon Jovi\'s first number one hit. The song reentered the charts at #29 after Blake Lewis performed it on American Idol. <a href="http://www.last.fm/music/Bon+Jovi/_/You+Give+Love+a+Bad+Name">Read more on Last.fm</a>.',
                'song_id' => 879,
                'created_at' => '2020-01-20 21:01:42',
                'updated_at' => '2020-01-20 21:01:42',
            ),
            23 => 
            array (
                'name' => 'summary',
                'value' => '"Rasputin" is a 1978 euro disco hit single by the Germany-based pop and euro disco group Boney M., the second from their album Nightflight to Venus. The song is a semi-biographical song about Grigori Rasputin, a friend and advisor of Tsar Nicholas II of Russia and his family during the early 20th century. The song variously sensationalizes Rasputin as a playboy, mystical healer, and political demiurge. The tune of the song is based on Turkish song Kâtibim. <a href="http://www.last.fm/music/Boney+M./_/Rasputin">Read more on Last.fm</a>.',
                'song_id' => 880,
                'created_at' => '2020-01-20 21:01:43',
                'updated_at' => '2020-01-20 21:01:43',
            ),
            24 => 
            array (
                'name' => 'summary',
            'value' => '"Total Eclipse of the Heart" was released on February 11, 1983 in UK and May 31, 1983 in USA, on Columbia Records. It featured on Bonnie Tyler\'s fifth studio album, Faster Than the Speed of Night (1983). The track was written and produced by Jim Steinman. The original full-length version is slightly over 7 minutes long, but a shorter radio version was produced lasting 4.5 minutes.

2017 - No.1 Again The track became the unofficial anthem for the solar eclipse event on August 21 <a href="http://www.last.fm/music/Bonnie+Tyler/_/Total+Eclipse+of+the+Heart">Read more on Last.fm</a>.',
                'song_id' => 881,
                'created_at' => '2020-01-20 21:01:45',
                'updated_at' => '2020-01-20 21:01:45',
            ),
            25 => 
            array (
                'name' => 'summary',
            'value' => '"(Everything I Do) I Do It for You" is a hugely-successful song co-written and performed by Bryan Adams, featured on his 1991 album Waking up the Neighbours and on the soundtrack for the film Robin Hood: Prince of Thieves (1991). It was an enormous chart success internationally, spending seven weeks at number one in the United States\' Billboard Hot 100, sixteen consecutive weeks at number one on the UK Singles Chart (the longest in British chart history), and nine weeks atop the RPM singles chart in Canada <a href="http://www.last.fm/music/Bryan+Adams/_/Everything+I+Do,+I+Do+It+For+You">Read more on Last.fm</a>.',
                'song_id' => 883,
                'created_at' => '2020-01-20 21:01:47',
                'updated_at' => '2020-01-20 21:01:47',
            ),
            26 => 
            array (
                'name' => 'summary',
                'value' => '"Heaven" is a ballad written by Bryan Adams and Jim Vallance and performed by Bryan Adams. The song first appeared on the A Night in Heaven soundtrack album in 1983 and was later included on Adams\' album Reckless in 1984. It was released as the third single from Reckless and reached number 1 on the Billboard Hot 100 in June 1985, over a year and a half after the song first appeared on record. The single was certified Gold in Canada in 1985.

Adams recorded "Heaven" at The Power Station in New York City on June 6 and 7, 1983. <a href="http://www.last.fm/music/Bryan+Adams/_/Heaven">Read more on Last.fm</a>.',
                'song_id' => 885,
                'created_at' => '2020-01-20 21:01:49',
                'updated_at' => '2020-01-20 21:01:49',
            ),
            27 => 
            array (
                'name' => 'summary',
            'value' => '"Summer of \'69" is a rock song written by Bryan Adams and Jim Vallance for Adams\' fourth studio album Reckless (1984). It was the fourth single released from the album Reckless. It is one of Adams\' most recognizable and popular songs. The song peaked at 5 on the Billboard Hot 100 and 40 on the Mainstream Rock Tracks chart. The song has appeared on all of Adams\' compilation albums. <a href="http://www.last.fm/music/Bryan+Adams/_/Summer+of+%2769">Read more on Last.fm</a>.',
                'song_id' => 887,
                'created_at' => '2020-01-20 21:01:52',
                'updated_at' => '2020-01-20 21:01:52',
            ),
            28 => 
            array (
                'name' => 'summary',
                'value' => 'A duet of Bryan Adams and Melanie C. <a href="http://www.last.fm/music/Bryan+Adams/_/When+You%27re+Gone">Read more on Last.fm</a>.',
                'song_id' => 888,
                'created_at' => '2020-01-20 21:01:54',
                'updated_at' => '2020-01-20 21:01:54',
            ),
            29 => 
            array (
                'name' => 'summary',
                'value' => '"Believe" is a Grammy Award winning global number one, Multi-Platinum Dance Song which served as the world-wide lead single for American singer Cher\'s twenty-third studio album Believe. It is noted for its use of a peculiar sound effect on the singer\'s vocals, which is referred to as the Cher effect today.

"Believe" was written by a number of writers including Paul Barry, Matt Gray, Brian Higgins, Stuart McLellan, Timothy Powell, and Steven Torch. <a href="http://www.last.fm/music/Cher/_/Believe">Read more on Last.fm</a>.',
                'song_id' => 891,
                'created_at' => '2020-01-20 21:01:58',
                'updated_at' => '2020-01-20 21:01:58',
            ),
            30 => 
            array (
                'name' => 'summary',
                'value' => 'This is a cover of a Roy Orbison original. <a href="http://www.last.fm/music/Cyndi+Lauper/_/I+Drove+All+Night">Read more on Last.fm</a>.',
                'song_id' => 893,
                'created_at' => '2020-01-20 21:02:01',
                'updated_at' => '2020-01-20 21:02:01',
            ),
            31 => 
            array (
                'name' => 'summary',
                'value' => '"Brothers in Arms" is a 1985 song by Dire Straits, appearing as the last track on the album of the same name. It is in G# minor. It peaked at #16 in the UK.
There are actually two studio recorded versions of this song: the album version which is 6:58 seconds, and the shorter version which is 6:05 seconds and features slightly different (and shorter) solos at the beginning and end of the song. The version that appears on Dire Straits\' greatest hits album, The Very Best of Dire Straits, is 4:55. <a href="http://www.last.fm/music/Dire+Straits/_/Brothers+in+Arms">Read more on Last.fm</a>.',
                'song_id' => 895,
                'created_at' => '2020-01-20 21:02:04',
                'updated_at' => '2020-01-20 21:02:04',
            ),
            32 => 
            array (
                'name' => 'summary',
                'value' => '"Money for Nothing" is a song by British group Dire Straits, which first appeared on their 1985 album Brothers in Arms and subsequently became an international hit when released as a single. It peaked at number one for three weeks in the U.S., becoming their most successful single. In the band\'s native UK, the song peaked at number 4. 

According to the Money For Nothing Songfacts, this song is about rock star excess and the easy life it brings compared with real work. <a href="http://www.last.fm/music/Dire+Straits/_/Money+for+Nothing">Read more on Last.fm</a>.',
                'song_id' => 896,
                'created_at' => '2020-01-20 21:02:05',
                'updated_at' => '2020-01-20 21:02:05',
            ),
            33 => 
            array (
                'name' => 'summary',
                'value' => '"Sultans of Swing" was the first single release of the British rock band Dire Straits.

It was first recorded as a demo at Pathway Studios, North London, and quickly acquired a following after it was put in the rotation at Radio London. It did not take long for the popularity to find its way to record executives, and Dire Straits were offered a contract with Phonogram, a British record company. The song was then re-recorded and released in both the United Kingdom and the United States <a href="http://www.last.fm/music/Dire+Straits/_/Sultans+of+Swing">Read more on Last.fm</a>.',
                'song_id' => 898,
                'created_at' => '2020-01-20 21:02:08',
                'updated_at' => '2020-01-20 21:02:08',
            ),
            34 => 
            array (
                'name' => 'summary',
                'value' => 'Telegraph Road appeared on Dire Straits\' 1982 album Love over Gold and is written by Mark Knopfler. Clocking in at 14:21 minutes long, it is rarely played by radio stations, yet has remained well-regarded over the years by many fans of the band. The coda of the live recording on the 1984 album Alchemy features one of the band\'s most brilliant guitar improvisations.

Inspired by a bus trip taken by Knopfler, the lyrics narrate a tale of changing land development over a span of many decades along Telegraph Road in suburban Detroit, Michigan. <a href="http://www.last.fm/music/Dire+Straits/_/Telegraph+Road">Read more on Last.fm</a>.',
                'song_id' => 899,
                'created_at' => '2020-01-20 21:02:09',
                'updated_at' => '2020-01-20 21:02:09',
            ),
            35 => 
            array (
                'name' => 'summary',
            'value' => '"Hungry Like the Wolf" is a song by the British New Wave band Duran Duran. Written by the band members, the song was produced by Colin Thurston for the group\'s second studio album Rio (1982). The song was released in May 1982 as the album\'s fifth single in the United Kingdom. It reached the top five of the UK Singles Chart, and received a silver certification by the British Phonographic Industry (BPI).

"Hungry Like the Wolf"\'s Russell Mulcahy-directed music video was filmed in the exotic jungles of Sri Lanka <a href="http://www.last.fm/music/Duran+Duran/_/Hungry+Like+the+Wolf">Read more on Last.fm</a>.',
                'song_id' => 901,
                'created_at' => '2020-01-20 21:02:12',
                'updated_at' => '2020-01-20 21:02:12',
            ),
            36 => 
            array (
                'name' => 'summary',
                'value' => '"Ordinary World" is the first single from Duran Duran\'s self-titled 1993 album, better known as The Wedding Album. The song peaked at No. 3 in the American charts and No. 6 in the British charts. 

By the early 90s, Duran Duran\'s popularity had faded. Their album Liberty had proved a commercial failure, its two singles failing to make a significant showing on British or American charts.

It wasn\'t until Capitol leaked "Ordinary World" to a radio station in Florida in the autumn of 1992 that it looked like Duran Duran mania might yet hit again. <a href="http://www.last.fm/music/Duran+Duran/_/Ordinary+World">Read more on Last.fm</a>.',
                'song_id' => 902,
                'created_at' => '2020-01-20 21:02:13',
                'updated_at' => '2020-01-20 21:02:13',
            ),
            37 => 
            array (
                'name' => 'summary',
                'value' => '"Rio" is the seventh single by Duran Duran, released on November 1, 1982.

The song was the fourth and final single lifted from the band\'s album Rio, and was edited for its release. It was issued worldwide in November 1982 and became an immediate Top 10 hit in the UK Singles Chart.

The song did not attract much notice in the United States upon its initial global release, but after the band\'s breakthrough hit "Hungry Like the Wolf" stormed MTV and scaled the American charts in December 1982 <a href="http://www.last.fm/music/Duran+Duran/_/Rio">Read more on Last.fm</a>.',
                'song_id' => 903,
                'created_at' => '2020-01-20 21:02:15',
                'updated_at' => '2020-01-20 21:02:15',
            ),
            38 => 
            array (
                'name' => 'summary',
                'value' => '"I Think I\'m Paranoid" is a song by Garbage, the second single released from their second album Version 2.0. It was released in the summer of 1998 and became a hit in many parts of the world following up on the success of previous single releases "Stupid Girl" and "Push It".

"I Think I\'m Paranoid" was written and recorded at Smart Studios during the 1997 sessions for Version 2.0. It was originally titled \'Bend Me\'.

Bass on "I Think I\'m Paranoid" is by Daniel Shulman <a href="http://www.last.fm/music/Garbage/_/I+Think+I%27m+Paranoid">Read more on Last.fm</a>.',
                'song_id' => 907,
                'created_at' => '2020-01-20 21:02:20',
                'updated_at' => '2020-01-20 21:02:20',
            ),
            39 => 
            array (
                'name' => 'summary',
                'value' => '"Only Happy When It Rains" was a single released from Garbage\'s 1995 self-titled debut album. It became Garbage\'s breakthrough single in the United Kingdom, where it became the first Garbage single to chart in the Top 40.

"Only Happy When It Rains" was written and recorded between March, 1994 and May, 1995 during sessions between band members Duke Erikson, Shirley Manson, Steve Marker and Butch Vig in either Marker\'s basement recording studio or at their own Smart Studios in Wisconsin university town Madison.  <a href="http://www.last.fm/music/Garbage/_/Only+Happy+When+It+Rains">Read more on Last.fm</a>.',
                'song_id' => 908,
                'created_at' => '2020-01-20 21:02:21',
                'updated_at' => '2020-01-20 21:02:21',
            ),
            40 => 
            array (
                'name' => 'summary',
                'value' => '"He Ain\'t Heavy, He\'s My Brother" is a popular music ballad written by Bobby Scott and Bob Russell. Originally recorded by Kelly Gordon in 1969, the song became a worldwide hit for The Hollies later that year and again for Neil Diamond in 1970. It has been covered by many artists in subsequent years. The Hollies\' and Rufus Wainwright\'s versions of the song were featured in the film Zoolander. <a href="http://www.last.fm/music/The+Hollies/_/He+ain%27t+heavy+He%27s+my+brother">Read more on Last.fm</a>.',
                'song_id' => 909,
                'created_at' => '2020-01-20 21:02:22',
                'updated_at' => '2020-01-20 21:02:22',
            ),
            41 => 
            array (
                'name' => 'summary',
            'value' => '"I Got You (I Feel Good)" (commonly known as "I Feel Good") is a hit song by James Brown. Released as a single in 1965, it is one of Brown\'s signature songs, and is arguably his most widely-known recording.

On the record, Brown revels in how "good" he feels ("nice, like sugar and spice"), now that he has the one he loves. Brown\'s vocal performance features his trademark soul shouting vocals and screams. The song\'s form is a twelve bar blues. Its <a href="http://www.last.fm/music/James+Brown/_/I+Got+You+(I+Feel+Good)">Read more on Last.fm</a>.',
                'song_id' => 911,
                'created_at' => '2020-01-20 21:02:25',
                'updated_at' => '2020-01-20 21:02:25',
            ),
            42 => 
            array (
                'name' => 'summary',
                'value' => ' <a href="http://www.last.fm/music/Kiss/_/I+Was+Made+for+Lovin%27+You">Read more on Last.fm</a>.',
                'song_id' => 914,
                'created_at' => '2020-01-20 21:02:29',
                'updated_at' => '2020-01-20 21:02:29',
            ),
            43 => 
            array (
                'name' => 'summary',
                'value' => 'Lewis writes this song to a past partner whom he misses. He feels as though he gave the relationship everything and she left him anyway. Now, he just wants someone to love because he misses the way it felt with his ex. It was a number hit across Europe, hitting number one in The UK, Scotland and Ireland. <a href="http://www.last.fm/music/Lewis+Capaldi/_/Someone+You+Loved">Read more on Last.fm</a>.',
                'song_id' => 915,
                'created_at' => '2020-01-20 21:02:30',
                'updated_at' => '2020-01-20 21:02:30',
            ),
            44 => 
            array (
                'name' => 'summary',
                'value' => 'Harvest Moon is the title track of the twentieth studio album by Canadian musician Neil Young, released in 1992. Many of the musicians appearing on it also appeared on his 1972 album Harvest, and it is considered by many to be like a "sequel" to Harvest.
Recovering from a case of tinnitus that had come about after the recording of 1990\'s Ragged Glory and its subsequent tour (which produced 1991\'s Weld and Arc), Young was determined to return to the studio. <a href="http://www.last.fm/music/Neil+Young/_/Harvest+Moon">Read more on Last.fm</a>.',
                'song_id' => 917,
                'created_at' => '2020-01-20 21:02:33',
                'updated_at' => '2020-01-20 21:02:33',
            ),
            45 => 
            array (
                'name' => 'summary',
                'value' => 'Neil Young\'s only number one hit single in his long musical career. The song is one of a series of soft, acoustic pieces which were written partly as a result of a back injury. Unable to stand for long periods of time, he could not play his electric guitar and so returned to his acoustic guitar, which he could play sitting down,

According to the Heart of Gold Songfacts, Young handed guest star James Taylor  a banjo to play on this song. Turns out, that was the first time Taylor had ever touched one! <a href="http://www.last.fm/music/Neil+Young/_/Heart+of+Gold">Read more on Last.fm</a>.',
                'song_id' => 918,
                'created_at' => '2020-01-20 21:02:34',
                'updated_at' => '2020-01-20 21:02:34',
            ),
            46 => 
            array (
                'name' => 'summary',
                'value' => '"Old Man" is a song written and performed by Neil Young on his 1972 album Harvest.

The song was written for the caretaker of the northern-California Broken Arrow Ranch, which Young purchased for $350,000 in 1970. The song compares a young man\'s life to an old man\'s and shows that the young man has, to some extent, the same needs of the old one. James Taylor played six-string banjo (tuned like a guitar) and sang on the song, and Linda Ronstadt also contributed vocals. <a href="http://www.last.fm/music/Neil+Young/_/Old+Man">Read more on Last.fm</a>.',
                'song_id' => 920,
                'created_at' => '2020-01-20 21:02:37',
                'updated_at' => '2020-01-20 21:02:37',
            ),
            47 => 
            array (
                'name' => 'summary',
                'value' => 'The song was first performed live on February 21, 1989 in Seattle with Young\'s band The Restless.

The book Shakey by Jimmy McDonough claims the song originated when Young was on tour in the late 1980s. He and Frank "Poncho" Sampedro saw newspaper photos of the Ayatollah Khomeini\'s body being carried to his grave as mourners were burning American flags in the street. Sampedro commented, "Whatever we do, we shouldn\'t go near the Mideast. It\'s probably better we just keep on rockin\' in the free world. <a href="http://www.last.fm/music/Neil+Young/_/Rockin%27+in+the+Free+World">Read more on Last.fm</a>.',
                'song_id' => 921,
                'created_at' => '2020-01-20 21:02:38',
                'updated_at' => '2020-01-20 21:02:38',
            ),
            48 => 
            array (
                'name' => 'summary',
                'value' => 'In 1987, Pet Shop Boys performed a version of "Always on My Mind" on Love Me Tender, an ITV network television special commemorating the tenth anniversary of Elvis Presley\'s death, in which various popular contemporary acts performed cover versions of his hits. Their performance was so well-received that the group decided to record the song and release it as a single. This version became the U.K.\'s Christmas number one single that year, beating "Fairytale of New York" by The Pogues and Kirsty MacColl <a href="http://www.last.fm/music/Pet+Shop+Boys/_/Always+on+My+Mind">Read more on Last.fm</a>.',
                'song_id' => 922,
                'created_at' => '2020-01-20 21:02:40',
                'updated_at' => '2020-01-20 21:02:40',
            ),
            49 => 
            array (
                'name' => 'summary',
                'value' => 'Go West is a song by the 1970s disco group Village People. The song eventually found greater success when it was covered in 1993 by the synthpop duo Pet Shop Boys.

In 1992, when Pet Shop Boys were asked by Derek Jarman to perform at an AIDS charity event at The Haçienda nightclub in Manchester, Chris Lowe of the duo selected "Go West" as the song they would perform. Though singer Neil Tennant was unable to remember the lyrics during that performance, the two decided to record it as a single. <a href="http://www.last.fm/music/Pet+Shop+Boys/_/Go+West">Read more on Last.fm</a>.',
                'song_id' => 923,
                'created_at' => '2020-01-20 21:02:41',
                'updated_at' => '2020-01-20 21:02:41',
            ),
            50 => 
            array (
                'name' => 'summary',
                'value' => '"It\'s a Sin" is a song recorded by the Pet Shop Boys which reached #1 on the UK Singles Chart for three weeks in June 1987.

Written by Chris Lowe and Neil Tennant, "It\'s a Sin" was the lead single from the duo\'s second "proper" album, Actually. Released in June 1987, it rocketed to the top of the charts to become the duo\'s second UK number one single. It was also a massive hit across Europe, supposedly the best-selling European single of 1987. In the United States it reached #9 on the Billboard Hot 100 chart <a href="http://www.last.fm/music/Pet+Shop+Boys/_/It%27s+a+Sin">Read more on Last.fm</a>.',
                'song_id' => 924,
                'created_at' => '2020-01-20 21:02:43',
                'updated_at' => '2020-01-20 21:02:43',
            ),
            51 => 
            array (
                'name' => 'summary',
                'value' => '"West End Girls" is a song by pop duo Pet Shop Boys. It was written by Neil Tennant and Chris Lowe and included in their debut album Please. The single became their first hit, reaching number one on the U.S. Billboard Hot 100 and the UK Official Charts in 1986.

The lyrics were written in the early 1980s. The title and refrain refer to London\'s divide between the traditional and working class East End and the cosmopolitan, consumer-driven West End. <a href="http://www.last.fm/music/Pet+Shop+Boys/_/West+End+Girls">Read more on Last.fm</a>.',
                'song_id' => 925,
                'created_at' => '2020-01-20 21:02:44',
                'updated_at' => '2020-01-20 21:02:44',
            ),
            52 => 
            array (
                'name' => 'summary',
                'value' => 'This song is a cover. Comfortably Numb was originally done by Pink Floyd. <a href="http://www.last.fm/music/Scissor+Sisters/_/Comfortably+Numb">Read more on Last.fm</a>.',
                'song_id' => 926,
                'created_at' => '2020-01-20 21:02:45',
                'updated_at' => '2020-01-20 21:02:45',
            ),
            53 => 
            array (
                'name' => 'summary',
            'value' => 'Jake Shears told Q magazine that writing this song was a liberating experience. He explained; "I was in the studio here in London having a creative crisis. I wasn\'t just blocked; I thought it was over for us unless something drastic happened. And that song is about overcoming that moment." (Source Fire With Fire Songfacts). <a href="http://www.last.fm/music/Scissor+Sisters/_/Fire+With+Fire">Read more on Last.fm</a>.',
                'song_id' => 927,
                'created_at' => '2020-01-20 21:02:47',
                'updated_at' => '2020-01-20 21:02:47',
            ),
            54 => 
            array (
                'name' => 'summary',
            'value' => '"Crazy" is a song originated by English soul artist Seal, who wrote its lyrics and jointly composed its music in collaboration with producer Guy Sigsworth. The song was produced by Trevor Horn for Seal\'s debut album Seal (1991). Released as his debut single, "Crazy" became one of Seal\'s biggest hits, reaching the top five in the United Kingdom while becoming his first top ten single in the United States. It has since been interpreted by several artists <a href="http://www.last.fm/music/Seal/_/Crazy">Read more on Last.fm</a>.',
                'song_id' => 930,
                'created_at' => '2020-01-20 21:02:51',
                'updated_at' => '2020-01-20 21:02:51',
            ),
            55 => 
            array (
                'name' => 'summary',
            'value' => '"Alright" is a song by Supergrass. It was released with "Time" as a double A-side single from their debut album I Should Coco on 3 July 1995. The song is featured in the films Clueless, The Men Who Stare at Goats, (500) Days of Summer and Astro Boy, High Lane (2009) as well as in Intel\'s Pentium TV advertisements.

According to the Alright Songfacts, the video, which featured the band larking about on bicycles and a giant flying bed attracted Stephen Spielberg\'s interest so much, he offered Supergrass a The Monkees  type TV show. <a href="http://www.last.fm/music/Supergrass/_/Alright">Read more on Last.fm</a>.',
                'song_id' => 934,
                'created_at' => '2020-01-20 21:02:56',
                'updated_at' => '2020-01-20 21:02:56',
            ),
            56 => 
            array (
                'name' => 'summary',
            'value' => '"Moving" is a song by Supergrass, from their eponymous third album, Supergrass (1999).
It was also released as a single, reaching #9 in the UK Singles Chart.
The song is about the tedium of touring as a band. To date it is the last supergrass song to reach the UK Top 10.

The song later appeared on the greatest hits compilation Supergrass Is 10: The Best Of 1994-2004.

The song has featured in the British film comedy East Is East at the beginning of the closing credits, and in the Holby City episode "Tough Love" in 2009. <a href="http://www.last.fm/music/Supergrass/_/Moving">Read more on Last.fm</a>.',
                'song_id' => 936,
                'created_at' => '2020-01-20 21:03:00',
                'updated_at' => '2020-01-20 21:03:00',
            ),
            57 => 
            array (
                'name' => 'summary',
                'value' => '"Going Underground" was the first British number one chart single by The Jam, released in March 1980. It went straight in at number one, a rare feat at the time, and spent three weeks at the top. It was the first of three instant chart-toppers for the group.

Song profile

"Going Underground" was not released on any of the band\'s six studio albums initially, although it has appeared on many compilation/re-releases since then. The single\'s B-side was "Dreams of Children" <a href="http://www.last.fm/music/The+Jam/_/Going+Underground">Read more on Last.fm</a>.',
                'song_id' => 938,
                'created_at' => '2020-01-20 21:03:03',
                'updated_at' => '2020-01-20 21:03:03',
            ),
            58 => 
            array (
                'name' => 'summary',
                'value' => 'In The City Songfacts says: While only a minor hit on the charts, this mod/punk number is well remembered for serving as England\'s first introduction to singer/guitarist and Jam songwriter  Paul Weller. The song\'s #40 chart position when the song was first released marked the beginning of his band\'s streak of 18 consecutive Top 40 singles. <a href="http://www.last.fm/music/The+Jam/_/In+the+City">Read more on Last.fm</a>.',
                'song_id' => 939,
                'created_at' => '2020-01-20 21:03:05',
                'updated_at' => '2020-01-20 21:03:05',
            ),
            59 => 
            array (
                'name' => 'summary',
                'value' => '"1979" is a song by the American alternative rock band The Smashing Pumpkins. Released in 1996 as the second single from their third studio album, Mellon Collie and the Infinite Sadness, "1979" was written by frontman Billy Corgan, and features loops and samples that were uncharacteristic of previous Smashing Pumpkins songs. The song was popular with critics and fans; Allmusic\'s Amy Hanson called it a "somewhat surprising hit". The song was nominated <a href="http://www.last.fm/music/The+Smashing+Pumpkins/_/1979">Read more on Last.fm</a>.',
                'song_id' => 940,
                'created_at' => '2020-01-20 21:03:06',
                'updated_at' => '2020-01-20 21:03:06',
            ),
            60 => 
            array (
                'name' => 'summary',
                'value' => 'The Best a.k.a. "Simply The Best" is a song written by Mike Chapman and Holly Knight. The song had originally been released a year earlier by Bonnie Tyler, from the album Hide Your Heart a.k.a. Notes From America in the United States, and later was re-released as a highly successful single by Tina Turner in 1989 from her hit album Foreign Affair. The saxophone solo on Turner\'s version is by Edgar Winter.

"The Best" is one of Turner\'s most successful and popular singles worldwide. <a href="http://www.last.fm/music/Tina+Turner/_/The+Best">Read more on Last.fm</a>.',
                'song_id' => 941,
                'created_at' => '2020-01-20 21:03:07',
                'updated_at' => '2020-01-20 21:03:07',
            ),
            61 => 
            array (
                'name' => 'summary',
                'value' => 'What\'s Love Got to Do with It is the second single released from Tina Turner\'s breakthrough solo album, Private Dancer. The song is widely credited for the huge success of the album itself. "What\'s Love Got to Do With It" is arguably Tina Turner\'s most popular and successful single, becoming her first number-one hit in the United States and establishing Tina Turner as a mainstream Pop and Rock artist, while also reaching number one in Australia and number three in the UK. <a href="http://www.last.fm/music/Tina+Turner/_/What%27s+Love+Got+to+Do+With+It">Read more on Last.fm</a>.',
                'song_id' => 942,
                'created_at' => '2020-01-20 21:03:09',
                'updated_at' => '2020-01-20 21:03:09',
            ),
            62 => 
            array (
                'name' => 'summary',
                'value' => 'According to the Delilah Songfacts, a little known fact about this recording is that a then unknown Elton John provided backing vocals on the chorus.
<a href="http://www.last.fm/music/Tom+Jones/_/Delilah">Read more on Last.fm</a>.',
                'song_id' => 943,
                'created_at' => '2020-01-20 21:03:10',
                'updated_at' => '2020-01-20 21:03:10',
            ),
            63 => 
            array (
                'name' => 'summary',
                'value' => 'According to the it\'s Not Unusual Songfacts, this was written by the classical music arranger and conductor Les Reed along with Tom Jones\' manager Gordon Mills. They wrote it for the British singer Sandie Shaw, but she turned it down. Tom Jones saw the song\'s potential, recorded it, and it became his first hit single.
<a href="http://www.last.fm/music/Tom+Jones/_/It%27s+Not+Unusual">Read more on Last.fm</a>.',
                'song_id' => 944,
                'created_at' => '2020-01-20 21:03:12',
                'updated_at' => '2020-01-20 21:03:12',
            ),
            64 => 
            array (
                'name' => 'summary',
                'value' => '"Red Red Wine" is a song originally written and recorded by Neil Diamond that was then covered by Tony Tribe and more famously by UB40. In the song, the singer finds drinking red wine is the only way to forget a lost love.
UB40 made their rendition for their cover versions album Labour of Love. According to the band, they were only familiar with Tony Tribe\'s version, and their version featured a lighter, reggae-style flavor compared to Diamond\'s somber, acoustic ballad. <a href="http://www.last.fm/music/UB40/_/Red+Red+Wine">Read more on Last.fm</a>.',
                'song_id' => 947,
                'created_at' => '2020-01-20 21:03:15',
                'updated_at' => '2020-01-20 21:03:15',
            ),
            65 => 
            array (
                'name' => 'summary',
                'value' => 'The song was first released in May 1967 on the album Blowin\' Your Mind!. When released as a single, it rose to number eight on the Cashbox charts, and reached number ten on the Billboard Hot 100. It featured the Sweet Inspirations singing back-up vocals and is widely-considered to be Van Morrison\'s signature song.

Paul Williams included "Brown Eyed Girl" in his book Rock and Roll: The 100 Best Singles, writing that:

I was going to say this is a song about sex <a href="http://www.last.fm/music/Van+Morrison/_/Brown+Eyed+Girl">Read more on Last.fm</a>.',
                'song_id' => 948,
                'created_at' => '2020-01-20 21:03:17',
                'updated_at' => '2020-01-20 21:03:17',
            ),
            66 => 
            array (
                'name' => 'summary',
                'value' => '"Moondance" is a popular song written by Northern Irish singer-songwriter Van Morrison and is the title song on his 1970 album Moondance. It was not released as a single until 1977.

The song is played mostly acoustic, anchored by electric bass, with accompaniment by piano, guitar, saxophone, and flute with the instruments played with a soft jazz swing. It\'s a song about autumn, the composer\'s favorite season. Towards the end of the song, Morrison imitates a saxophone. <a href="http://www.last.fm/music/Van+Morrison/_/Moondance">Read more on Last.fm</a>.',
                'song_id' => 949,
                'created_at' => '2020-01-20 21:03:18',
                'updated_at' => '2020-01-20 21:03:18',
            ),
        ));
        
        
    }
}