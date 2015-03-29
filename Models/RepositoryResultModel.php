<?php
class RepositoryResultModel {

	/**
	 * @var string $name
	 */
	private $name = null;

	/**
	 * @var string $description
	 */
	private $description = null;

	/**
	 * @var int $forks
	 */
	private $forks = 0;

	/**
	 * @var string $url
	 */
	private $url = null;

	/**
	 * @param string $name
	 * @param string $description
	 * @param int $forks
	 * @param string $url
	 */
	function RepositoryResultModel($name, $description, $forks, $url){
		$this->name = $name;
		$this->description = $description;
		$this->forks = $forks;
		$this->url = $url;
	}

	/**
	 * Getter for the name variable
	 */
	function get_name(){
		return $this->name;
	}

	/**
	 * Getter for the description variable
	 */
	function get_description(){
		return $this->description;
	}

	/**
	 * Getter for the forks variable
	 */
	function get_forks(){
		return $this->forks;
	}

	/**
	 * Getter for the url variable
	 */
	function get_url(){
		return $this->url;
	}
}
?>