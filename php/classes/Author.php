<?php
/**
 * Created by PhpStorm.
 * User: Kcampbell
 * Date: 10/19/16
 * Time: 11:54 AM
 **/
class Author{


	/** id for author
	 * id for this author; this is the primary key
	 * @var int $authorId
	 **/
private $authorId;
	/**
	 * id of the author that created this blog post; this is the foreign key
	 * @var int $authorFirstName
	 **/
	private $authorFirstName;
	/**
	 * actual first name of the author who created blog post
	 * @var int $authorLastName
	 **/
	private $authorLastName;
	/**
	 * actual last name of author who created blog post
	 * @var int $authorEmailAddress
	 **/
	private $authorEmailAddress;
	/**
	 * email address for author of blog post
	 *
	 **/
	/** Constructor Goes here
	 *
	 **/
	/**
	 * accessor method for author information
	 *
	 * @return string value of author information
	 **/
	public function getAuthorId() {
		return ($this->authorId);
	}
		public function getAuthorFirstName() {
			return ($this->authorFirstName);
		}
		public function getAuthorLastName(){
			return ($this->authorLastName);
		}
		public function getAuthorEmailAddress(){
			return ($this->authorEmailAddress);
		}
}


