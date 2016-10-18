DROP TABLE IF EXISTS subscription;
DROP TABLE IF EXISTS author;
DROP TABLE IF EXISTS blogpost;

CREATE TABLE author
(authorId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	authorEmailAddress VARCHAR(120) NOT NULL, authorLastName VARCHAR(200) NOT NULL, authorFirstName VARCHAR(200) NOT NULL,INDEX (authorId),PRIMARY KEY (authorId));

CREATE TABLE blogpost
(blogPostId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	blogPostTitle VARCHAR(50) NOT NULL,  blogPostContent VARCHAR(350) NOT NULL,
	blogPostAuthorID VARCHAR(32) NOT NULL,
	blogPostDate VARCHAR(8) NOT NULL,
INDEX (blogPostId), FOREIGN KEY (blogPostAuthorID) REFERENCES author(authorId),PRIMARY KEY (blogPostId));

CREATE TABLE subscription
(subscriptionId INT UNSIGNED AUTO_INCREMENT NOT NULL, subscriptionEmailAddress VARCHAR(120) NOT NULL ,INDEX (subscriptionId),PRIMARY KEY (subscriptionId));
