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

	/**
	 * mutator method for author id
	 *
	 * @param int $newAuthorId new value of profile id
	 * @throws UnexpectedValueException if $newAuthorId is not an integer
	 **/
	public function setAuthorId($newAuthorId) {
		// verify the author id is valid
		$newAuthorId = filter_var($newAuthorId, FILTER_VALIDATE_INT);
		if($newAuthorId === false) {
			throw(new UnexpectedValueException("author id is not a valid integer"));
		}

		//convert and store author id
		$this->authorFirstName = intval($newAuthorId);
	}

	/**
	 * accessor method for author first name
	 *
	 * @return string value of first name
	 **/
	public function getAuthorFirstName() {
			return ($this->authorFirstName);
		}

	/**
	 * mutator method for first name
	 *
	 * @param string $newAuthorFirstName new value of first name
	 * @throws UnexpectedValueException if $newAuthorFirstName is not valid
	 **/
	public function setAuthorFirstName($newAuthorFirstName) {
		// verify the author first name is valid
		$newAuthorFirstName = filter_var($newAuthorFirstName, FILTER_SANITIZE_STRING);
		if($newAuthorFirstName === false) {
			throw(new UnexpectedValueException("author first name is not valid string "));
		}

		//store the authors first name
		$this->authorFirstName = $newAuthorFirstName;
	}
	/**
	 * accessor method for author last name
	 *
	 * @return string value of last name
	 **/
	public function getAuthorLastName(){
			return ($this->authorLastName);
		}

	/**
	 * mutator method for last name
	 *
	 * @param string $newAuthorLastName new value of last name
	 * @throws UnexpectedValueException if $newAuthorLastName is not valid
	 **/
	public function setAuthorLastName($newAuhtorLastName) {
		//verify the authors last name is valid
		$newAuhtorLastName = filter_var($newAuhtorLastName,FILTER_SANITIZE_STRING);
		if($newAuhtorLastName === false) {
			throw(new UnexpectedValueException("author last name is not a valid string"));

			//store the authors last name
			$this->authorLastName = $newAuhtorLastName;
		}
	}

	/**
	 * accessor method for last name
	 *
	 * @return string value of last name
	 **/
	public function getAuthorEmailAddress(){
			return ($this->authorEmailAddress);
		}
}


