<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link href="css/stylesheet.css" rel="stylesheet" type="text/css">

		<!--beginning -->
		<title>
			Nastygal Data site
		</title>
		<!-- image before heading-->
	</head>

	<body>
		<header>
			<img src="img/nastygalresized.jpg" alt="thenastygal">
		</header>

		<!--this is the persona section -->
		<h1>The NastyGal &#10084</h1>
<!-- dataDesignProject-->

		<p> Name: Lisa Danielle</p>
		<p> Age: 18-37</p>
		<p> Profession:Creative Professional</p>
		<p> Technology: Macbook pro user. Uses 13 inch macbook pro not for power but because its trendys. Is also an iphone user with verizon service for reliability only having 10 gb of data to use and has apple tv at home using a smart TV for live streaming capabilities. </p>
		<p> Frustrations and Needs: Lisa lives a very busy life. Often times she feels there aren't enough times in the day to accomplish all she is required. More money and more time would be the ultimate goal. Although balancing responsibilites and her desire to frolick freely through lifes pastures conflict some times moment to moment; she still finds time and money to treat herself with some of lifes finest pleasures.</p>
		<p> Goals: Lisa main goal is to find a one of a kind piece that personifies her personal style. She also desires to find inspiration for these choice items. Lisa also wants to remain connected to the most happening restaurants to eat at, places to find new adventures and of course trending styles.  </p>

		<!-- use case section-->
		<section>
		<h1>Use Case</h1>

			<!--narrative style-->
			<p> Lisa finds the most incredible pieces. What excitment this brings, then there comes the delimma! What will I wear with this. She needs to simply find styling inspiration quickly. There is no better way than to visit the Nasty Galaxy section on Nastgal.com. This is where the currators of all the pieces are able to talk about the inspiration behind how they styled these unique one of a kind pieces. The Nasty Gal can also get what are often crazy funny and unique stories behind acquiring and item too. Oh the things we here at Nasty Gal goes through to offer the best of the best to you Gals' out there. After a Nasty Gal has recieved her package she has waited no more than 5-7 days for. After a long day of work or school she enjoys the pleasure of opening her package and seeing her item look better than even what she couldve expected. With in 5 to 10 mins of viewing her new item and trying it on she is now ready to log in to Nastygal and see all the ways it has been styled. She log on to Nastygal.com and visit the blog spot Nasty Galaxy. Here Lisa finds inspiration from currator photo and talks as well as keeping up with the latest musics and cultural trends.
			</p>
			<!--InteractionFlow-->

		</section>
		<h1>Interaction Flow</h1>
		<p>Lisa's interaction flow is very simple and intuitive in nature. Lisa simply natvigates to Nastygal.com webpage and in the upper left corner lisa is able to find a tab that read Nasty Galaxy. Once Lisa is under this section she has several option which can be revealed by simply hovering over the heading Nasty Galaxy. The options available are style, music, culture and lastly girlboss. Although Lisa does visit the other sections from time to time her main interest is the style section. In this section there are several curated collections of items soled on the website. Lisa then choose the picture that inspires her the most. What she finds are several pictures of the items that are highlighted and other items they were either paired with for styling purpourses or simply visual emphasis.</p>
		<!--entity attribute breakdown nastygal-->

		<h1> BlogPost</h1>

		<h4>(1)</h4>
		<ul>
			<li>blogPostId (PK)</li>
			<li>blogPostTitle</li>
			<li>blogPostContent </li>
			<li>blogPostAuthorId (FK)</li>
			<li>blogPostDate</li>
		</ul>
		<!-- Second Entity-->

		<h1> Author</h1>
		<h4>(N)</h4>

		<ul>
		<li>authorId (Primary key)</li>
		<li>authorFirstName</li>
		<li>authorLastName</li>
		<li>authorEmailAddress</li>
		</ul>
		<!-- subscriptionRelationship-->

		<h1>Subscription</h1>
		<ul>
			<li>subscriptionId (Primary Key)</li>
			<li>subscriptionEmailAddress</li>
			</ul>

			<h1>Relationships</h1>
			<ul>
				<li>One author can create many</li>
				<li>blogPost (1-to-N)</li>
				<li>blogPostTitle (1-to-N)</li>
				<li>blogPostContent (1-to-N)</li>
				<li>blogPostDate (1-to-N)</li>
			</ul>
	</body>
</html>
