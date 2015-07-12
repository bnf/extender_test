<?php
namespace Qbus\ExtenderTest\News\Domain\Model;

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


####### Not working: Cannot redeclare GeorgRinger\News\Domain\Model\News::getTitle() #######
#	/**
#	 * Get title (custom)
#	 *
#	 * @return string
#	 */
#	public function getTitle() {
#		return "FOO";
#	}
}
