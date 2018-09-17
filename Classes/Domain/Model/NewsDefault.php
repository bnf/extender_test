<?php
namespace Qbus\ExtenderTest\Domain\Model;

class NewsDefault extends \GeorgRinger\News\Domain\Model\NewsDefault
{
    /**
     * @var string
     */
    protected $testPropertySubclass;

    /**
     * Get testPropertySubclass
     *
     * @return string
     */
    public function getTestPropertySubclass() {
        return $this->testPropertySubclass;
    }

    /**
     * Set testPropertySubclass
     *
     * @param string $testPropertySubclass testPropertySubclass
     * @return void
     */
    public function setTestPropertySubclass($testPropertySubclass) {
        $this->testPropertySubclass = $testPropertySubclass;
    }
}
