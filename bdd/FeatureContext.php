<?php

namespace BaseTest;
use Behat\Behat\Context\SnippetAcceptingContext;
use BaseTest\BaseTestContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements SnippetAcceptingContext
{
    /*
     * Test context
     */
    protected $testContext;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->testContext = new BaseTestContext();
    }
}
