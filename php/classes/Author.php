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
	/** Constructor for Author
	 *
	 * @param int $newAuthorId new value of profile id
	 * @param string $newAuthorFirstName new value of first name
	 * @param string $newAuthorLastName new value of last name
	 * @param string $newAuthorEmailAddress new value of author email address
	 * @throws UnexpectedValueException if $newAuthorId is not an integer
	 * @throws UnexpectedValueException if $newAuthorFirstName is not valid
	 * @throws UnexpectedValueException if $newAuthorLastName is not valid
	 * @throws UnexpectedValueException if $newAuthorEmailAddress is not valid
	 **/
	public function __construct($newAuthorId, $newAuthorFirstName, $newAuthorLastName, $newAuthorEmailAddress, $exception) {
		try {
			$this->setAuthorEmailAddress($newAuthorEmailAddress);
				$this->setAuthorId($newAuthorId);
			$this->authorLastName($newAuthorLastName);
			$this->authorFirstName($newAuthorFirstName);
			$this->authorId($newAuthorId);
		} catch(\InvalidArgumentException $invalidArgument)	{
			// rethrow the exception to the caller
			throw(new \InvalidArgumentException($invalidArgument->getFile(), 0, $invalidArgument));
		} catch(\RangeException $range)	{
			// rethrow the exception to the caller
			throw(new \RangeException($range->getFile(),	0,	$range));
		}catch(\TypeError $error){
			// rethrow the exception to the caller
			throw(new \TypeError($typeError->getfile(),	0,	$typeError));
		}catch(\Exception $exception){
			//rethrow the exception to the caller
			throw(new \Exception($exception->getFile(),	0,	$exception));
		}
		catch(UException("Unable to construct Author Id", 0, $exception = $exception));
		// rethrow to the caller
		throw (new UnexpectedValueException("Unable to construct Author Id", 0, $exception));
	}

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
	public function setAuthorLastName($newAuthorLastName) {
		//verify the authors last name is valid
		$newAuthorLastName = filter_var($newAuthorLastName,FILTER_SANITIZE_STRING);
		if($newAuthorLastName === false) {
			throw(new UnexpectedValueException("author last name is not a valid string"));
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

	/**
	 *mutator method for author email address
	 *
	 * @param string $newAuthorEmailAddress new value of author email address
	 * @throws UnexpectedValueException if $newAuthorEmailAddress is not valid
	 **/
	public function setAuthorEmailAddress(string $newAuthorEmailAddress) {
		//verify the author email address is valid
		$newAuthorEmailAddress = trim($newAuthorEmailAddress);
		$newAuthorEmailAddress = filter_var($newAuthorEmailAddress, FILTER_SANITIZE_EMAIL, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($newAuthorEmailAddress) === true) {
			throw(new \InvalidArgumentException("author email address is not a valid string"));
		}

		// verify the author email address will fit in the database
		if(strlen($newAuthorEmailAddress) > 250) {throw(new \RangeException("email address too large"));
		}

		//store the author email address
		$this->authorEmailAddress = $newAuthorEmailAddress;

	}

}


