#About Cortex
Cortex is a web application designed by Jackson Lo to help him in long term memorization of chinese characters.


Cortex is **100%** developed for **Jackson Lo** and will be continued to be improved as to his needs. Cortex can be modified for other topics or content which would also benefit from a long term memorization tool.


##Philosphy
Jackson's memorization is best utilized by reviewing previous material while continuing to learn new material. The more Jackson is familiar with a certain character, the less review he needs.
			
Therefore, Cortex is designed so that it is based on an algorithm which will take a random selection of **X#** of characters to review.
		
Each time, when a character is made purple (right clicked), it is considered as "I know this word" (right now, for the next 5 minutes) and Cortex will note down that Jackson knows this word during this time.
		
Cortex will then have this character re-appear to review after a certain time has passed.

In general, Cortex will take a random selection of characters to review or learn based on weighted probabilities for each of the characters. 

The factors that the weighted probabilities taken into account are:
* Time since last review or "I know this word", purpleized.
* Number of times appeared in all time relative to other characters.
* Frequencey of appearance *recently* relative to other characters.
* Time since first learned.
		
##Mission
To be able to read over 95% of written Chinese. <b><u>Defeat illiteracy!</b></u>

* 1,000 Chinese Characters --> ~90% of written Chinese.
* 2,500 Chinese Characters --> ~98% of written Chinese.
* All 4000 here --> ~100% of all written Chinese.


##Data

The Chinese characters are ordered by their frequency of use, courtesies of <a href="www.learnchineseez.com">Learn Chinese EZ</a>.



###Credits
* All chinese data and images are scraped from <a href="www.learnchineseez.com">Learn Chinese EZ</a>, and I do not take any credit. [This app is for personal use, don't sue me plz :3]
* Images such as the background and white wood are somewhere off the internet. Credits go out to whoever, again, this is for private personal use, don't sue me plz.


Please contact <a href="mailto:7jackson.lo@gmail.com?Subject=Cortex%20Inquiry">Jackson Lo</a> for any questions or inquiries.</small>



### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
