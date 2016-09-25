#About Cortex
Cortex is a web application designed to help in long term memorization of chinese characters.


Cortex can be modified for other topics or content which would also benefit from a long term memorization tool.

![Sample Img 1](sample_img1.png?raw=true "Sample Image 1")
![Sample Img 2](sample_img2.png?raw=true "Sample Image 2")


##Philosphy
My personal strategy for memorization is best utilized by reviewing previous material while continuing to learn new material. The more I am familiar with a certain character, the less review I need.
			
Therefore, Cortex is designed so that it is based on an algorithm which will take a random selection of **X#** of characters to review.
		
Each time, when a character is made purple (right clicked), it is considered as "I know this word" (right now, but not for long... because memory fades) and Cortex will note down that Jackson knows this word during this fading time period.
		
Cortex will then have this character re-appear to review after it has decided that that "memory" has faded enough for it to need ot be reviewed again.

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

The Chinese characters are ordered by their frequency of use, scraped from the order used at <a href="www.learnchineseez.com">Learn Chinese EZ</a>.



###Credits
* All chinese data and images are scraped from <a href="www.learnchineseez.com">Learn Chinese EZ</a>, and I do not take any credit. This app is for personal use only.


Please contact <a href="mailto:7jackson.lo@gmail.com?Subject=Cortex%20Inquiry">Jackson Lo</a> for any questions or inquiries.</small>

