<?php
namespace GeorgRinger\News\Domain\Model;

class News {
	/**
	 * @var string
	 */
	protected $testProperty;

	/**
	 * Get TestProperty
	 *
	 * @return string
	 */
	public function getTestProperty() {
		return $this->testProperty;
	}

	/**
	 * Set TestProperty
	 *
	 * @param string $testProperty testProperty
	 * @return void
	 */
	public function setTestProperty($testProperty) {
		$this->testProperty = $testProperty;
	}
}
