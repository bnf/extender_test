<?php
namespace Qbus\ExtenderTestSubclass\Domain\Model;

class NewsDefault extends \GeorgRinger\News\Domain\Model\NewsDefault {
	/**
	 * @var string
	 */
	protected $testPropertySubclass;

	/**
	 * Get TestProperty2
	 *
	 * @return string
	 */
	public function getTestPropertySubclass() {
		return $this->testPropertySubclass;
	}

	/**
	 * Set TestPropertySubclass
	 *
	 * @param string $testPropertySubclass testPropertySubclass
	 * @return void
	 */
	public function setTestPropertySubclass($testProperty) {
		$this->testPropertySubclass = $testPropertySubclass;
	}
}
