DROP TABLE IF EXISTS subscription;
DROP TABLE IF EXISTS author;
DROP TABLE IF EXISTS blogpost;
CREATE TABLE blogpost (blogPostId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	blogPostTitle VARCHAR(50) NOT NULL,  blogPostContent VARCHAR(350) NOT NULL,
	blogPostAuthorID VARCHAR(32) NOT NULL,
	blogPostDate VARCHAR(8) NOT NULL,
	INDEX (blogPostId), FOREIGN KEY (blogPostAuthorID) REFERENCES blogpost(blogPostId),PRIMARY KEY (blogPostId)
);
