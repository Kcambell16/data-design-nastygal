<?php

/**
 * Created by PhpStorm.
 * @author Kelly Campbell <Kcampbell16@cnm.edu>
 * Date: 10/20/16
 * Time: 10:07 AM
 * Typical setup for a blog, stored information on national blog
 **/
class Blogpost {
	/**
	 * id for blog post; this is the primary key
	 **/
	private $blogPostId;
	/**
	 * id of the blog post that created this blog; this is the primary key
	 **/
	private $blogPostAuthorId;
	/**
	 *id of the author of the creator of the post; this is the foreign key
	 **/
	private $blogPostContent;
	/**
	 *  acutal blog post content
	 **/
	private $blogPostDate;
	/**
	 * date if blog post
	 **/
	private $blogPostTitle;
	/**
	 * Actual blog post title
	 **/
	/**
	 * accessor method for blog post id
	 * @return int value of blog post id
	 **/
	public function  getBlogPostId() {
		return($this->blogPostId);
	}

	/**
	 * mutator method for blog post id
	 *
	 * @param int $newBlogPostId new value of the blog post id
	 * @throw UnexpectedValueException if $newBlogPostId is not a integer
	 **/
	public function setBlogPostId
	// verify the blog post id is valid
	($newBlogPostId) {
		$newBlogPostId = filter_var($newBlogPostId, FILTER_VALIDATE_INT);
		IF($newBlogPostId === false) {
			throw (new UnexpectedValueException("blog post id is not a valid interger"));


			// convert and store the blog post id
			$this->blogPostId - intval($newBlogPostId);
		}


	}

}

