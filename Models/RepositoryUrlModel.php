<?php
class RepositoryUrlModel {

	/**
	 * @var string $url
	 */
	private $url = null;

	/**
	 * @param string $url
	 */
	function RepositoryUrlModel($url){
		$this->url = $url;
	}

	/**
	 * Getter for the url variable
	 */
	function get_url(){
		return $this->url;
	}
}
?>