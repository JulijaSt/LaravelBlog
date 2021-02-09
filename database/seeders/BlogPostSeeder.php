<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bp1 = new \App\Models\Blogpost();
        $bp1->title = "Where it all started...";
        $bp1->text = '<h2>Things To Do In Rhodes Greece</h2>
        <p>There is a wide variety of things to do in Rhodes, which was my favorite part about spending time there — I was never bored. Dine on regional cuisine, visit ancient sites, learn about the history of the Knights of&nbsp;<a target="_blank" href="https://www.goatsontheroad.com/malta-travel-guide/">Malta</a>, and much more. Here are a few of the best things to see and do in Rhodes.&nbsp;</p>
        <h3>Rhodes Old Town</h3>
        <p>Many people choose to base themselves in the old town, but if you don’t, the main city of Rhodes is worth at least a day of exploration.</p>
        <p>Much of the structure of its time as a medieval port has remained, and you feel transported to another era just by walking the streets and doing a bit of exploring. I recommend making the climb to the top of the wall where sentries used to guard the treasures taken from the Holy Land — which were hidden inside.&nbsp;</p>
        <p>For some more modern fun, there are also some wonderful art galleries, great restaurants, and plenty of museums to keep you busy for a number of days</p>
        <h3>Kallithea Thermal Springs</h3>
        <p>Recently renovated, the Kallithea Thermal Springs offers an alternative to just heading to the beach (though, the beaches are fantastic). Built in 1928 by the Italians, this Greek favourite is located just 9km from the city center — you can get a cheap taxi to take you to the complex.</p>
        <p>Swim in crystal-clear, refreshing waters (19 °C/66 °F), while enjoying numerous health benefits. If you plan to visit, try to avoid Sundays (unless you like crowds), as that’s when many locals spend a full day here and it can get pretty busy.</p>
        <p>A taxi from Rhodes Old Town is about €10, and the entrance fee to the thermal springs is €3.50.&nbsp;<a href="https://www.google.com/maps/place/Kallithea+Springs/@36.3782051,28.2357122,17z/data=!3m1!4b1!4m5!3m4!1s0x1495642b4d78c47b:0xf894d32dcf8ec635!8m2!3d36.3782008!4d28.2379009" target="_blank" rel="noreferrer noopener">Click here</a>&nbsp;to find the thermal springs on the map.&nbsp;</p>
        <h3>The Village of Lindos</h3>
        <p>Visiting Lindos was my favorite part of spending time in Rhodes. If you want to feel as though you’ve stepped into a time machine, Lindos is the perfect way to see what life on Rhodes was like for hundreds of years.</p>
        <p>It can get busy with tourists, but navigating the tiny streets and ducking into quaint shops and restaurants is all part of the fun. Make sure to grab a glass of fresh-squeezed orange juice.&nbsp;<a href="https://www.google.com/maps/place/Lindos+851+07,+Greece/@36.091954,28.0780807,16z/data=!3m1!4b1!4m5!3m4!1s0x14950bd7c2d72faf:0x400bd2ce2b9b300!8m2!3d36.0918486!4d28.0856654" target="_blank" rel="noreferrer noopener">Click here</a>&nbsp;to find Lindos on the map.&nbsp;</p>
        <h3>Palace of the Grand Master of the Knights of Rhodes</h3>
        <p>As one of the few examples of Gothic architecture in Greece, you can spend hours wandering the halls of this palace. Originally built as a hospital and hotel for pilgrims, it was then transformed to a palace once the crusaders retreated after the Holy Wars.</p>
        <p>You’ll find artifacts from almost everywhere in the region, and it seems to go on and on. This is also the spot where the original Colossus of Rhodes was supposed to have stood. Entrance is €12.&nbsp;<a href="https://www.google.com/maps/place/Palace+of+the+Grand+Master+of+the+Knights+of+Rhodes/@36.4457728,28.2219017,17z/data=!3m1!4b1!4m5!3m4!1s0x149561e985e8a895:0x68a2ba941a825037!8m2!3d36.4457685!4d28.2240904" target="_blank" rel="noreferrer noopener">Click here</a>&nbsp;to find the location on the map.</p>
        <h3>Acropolis of Lindos</h3>
        <p>The village of Lindos isn’t the only thing to see in the area. The Acropolis has some of the most amazing views of the island, while also offering a dose of history.</p>
        <p>You can choose to ride a donkey up to the top or to make the walk yourself. While they are still discovering new information about this site, it’s likely that it was a temple dedicated to the goddess Athena. It’s also an active excavation site, which is very interesting to see.&nbsp;</p>';
        $bp1->save();

        $bp2 = new \App\Models\Blogpost();
        $bp2->title = "Last trip to Norway";
        $bp2->text = '<p>Grab your wool jumper and get ready for the adventure of a lifetime. Choose a&nbsp;<a target="_blank" href="https://norway.nordicvisitor.com/">trip to Norway</a>&nbsp;and you will find it quite unlike anywhere you’ve been before. Its breathtaking beauty will linger in the memory for years to come.</p>
            <p>But where should you go? What should you see? You can&apos;t hope to pack a whole country into one trip unless you&apos;re visiting for months or more.</p>
            <p>Read our helpful recommendations&nbsp;guide to uncover 3 incredible things to do and see in Norway.</p>
            <h2>1. Explore the Norwegian fjords</h2>
            <p>Norway boasts more than 1,000 fjords, so where should you start? Well, our local experts have 3 all-time favourites for starters.</p>
            <h3>GEIRANGERFJORD (AND ITS WATERFALLS)</h3>
            <p>This Norwegian beauty was deservingly placed on the&nbsp;<a target="_blank" href="http://whc.unesco.org/en/list/1195">UNESCO World Heritage site</a>&nbsp;list with Nærøyfjord in 2005. Geirangerfjord consistently ranks amongst the top contenders for the title of “world’s most stunning fjord”.</p>
            <p>Here, you can gaze on tranquil waters, mighty mountains and powerful waterfalls including the famous Seven Sisters and the Bridal Veil.</p>
            <h3>NÆRØYFJORD</h3>
            <p>Not to be outdone by its&nbsp;UNESCO-inscribed cousin Geirangerfjord,&nbsp;Nærøyfjord serves up its own distinct charms. It earned its prestigious co-status thanks to its outstanding scenery, considered to be among the best in the world.</p>
            <p>As one of the arms of Sognefjord, it’s easy to visit both during the same trip. Which brings me to...</p>
            <h3>SOGNEFJORD</h3>
            <p>Known as the &apos;King of the Fjords&apos; because it&apos;s the longest and deepest fjord in Norway, Sognefjord deserves a place on any itinerary. Its dramatic scenery of steep mountains and deep blue waters make for picture-perfect views.</p>
            <p>Sognefjord extends inland into Jotunheimen and Jostedalsbreen National Parks and is easily explored from nearby towns like Sogndal, Balestrand, Flåm and Gudvangen.</p>
            <h2>2. Hike to iconic natural wonders</h2>
            <p>Explore Norway’s natural beauty by hitting the trail and working up a sweat as you climb mighty mountains to reach mightily photogenic sites. We promise the view from the top is worth the effort!</p>
            <h3>PREIKESTOLEN</h3>
            <p>Also known as Pulpit Rock, Preikestolen is one of Norway’s most famous landmarks. You&apos;ll reach it after a&nbsp;<a href="https://www.nordicvisitor.com/blog/hiking-the-pulpit-rock-in-norway/">2-hour hike</a>&nbsp;(about 10 km, a round trip of 4-5 hours), where you&apos;ll be at the summit of a 604-metre high cliff, offering sweeping views over Lysefjord below.</p>
            <p>If you’re brave enough, you can even venture forth and look over the edge of the &apos;preacher’s pulpit&apos;.</p>
            <h3>LOEN SKYLIFT</h3>
            <p>Opened by the Queen of Norway in 2017, the Loen Skylift is on of the more recent additions to Norway&apos;s many incredible viewpoints. Hop aboard the cable car here and the aerial tramway will take you 1,011 metres to the top of Mount Hoven: "from fjord to sky in 5".</p>
            <p>From the summit you can marvel at the spectacular views of Nordfjord, take part in activities or even stop for a bite at a restaurant that overlooks the fjord.</p>
            <h3>TROLLTUNGA</h3>
            <p>Looking for the ultimate thrill? Visit Trolltunga, a gravity-defying rock formation that juts straight out of the mountainside. The rock formation hangs, unsupported, more than 700 metres above Lake Ringedalsvatnet and provides mind-blowing views that make the 10-to-12-hour hike to get here totally worthwhile.</p>
            <h2>3. Drive to Norway’s cultural highlights</h2>
            <p><a target="_blank" href="https://norway.nordicvisitor.com/travel-deals/self-drive-tours/">A road trip through Norway</a>&nbsp;allows you to stop at many cultural highlights and explore some of the country’s most iconic cities. Think cosmopolitan Oslo, Lillehammer – host of the 1994 Winter Olympics – &nbsp;and Bergen, home to the<a href="https://whc.unesco.org/en/list/59" target="_blank" rel="noreferrer noopener">&nbsp;UNESCO World Heritage listed wharf, Bryggen</a>.</p>
            <h3>OSLO</h3>
            <p>As Norway’s capital and cultural centre, Oslo has many highlights that should feature on any itinerary.</p>
            <p>Here you can admire the lifetime works of one of Norway’s most famous artists, the sculptor Gustav Vigeland, pay your respects to the Norwegian Royal Family at their official residence, Astrup Fearnley Royal Palace, or step back in time at the Museum of Cultural History.</p>
            <p>While you’re in town, make sure to also visit the Viking Museum, resting place of some of the world’s best-preserved Viking ships.</p>
            <p>Oslo is also the perfect jumping off point for exploring the country’s natural beauty and more remote areas.</p>
            <h3>LILLEHAMMER</h3>
            <p>Home to the 1994 Winter Olympics, Lillehammer very much remains an outdoor sports paradise. Here, you can learn about the historic games at the Norwegian Olympic Museum or visit the Lysgaard Bakken Ski Jumping Arena, which hosted the opening and closing ceremonies.</p>
            <p>Lillehammer has more to it than Olympic glory, though. Go exploring and you’ll also find Norway’s largest open-air museum, as well as a collection of picturesque 19th-century wooden cottages along the shores of Lake Mjøsa.</p>
            <h3>TRONDHEIM</h3>
            <p>Norway&apos;s third largest city is full of life, serving you scenic viewpoints and historical points of interest aplenty. It was founded in 997 AD as a Viking trading post, and became an important Christian pilgrimage destination. Trondheim was even (briefly) the capital of Norway for a spell.</p>
            <p>Look out for the charming-yet-trendy Bakklandet district, with its cobbled streets and cute wooden houses overlooking the Nidelven River.&nbsp;</p>';
        $bp2->save();
    }
}
