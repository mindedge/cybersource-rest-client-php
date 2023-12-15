<?php
/**
 * Notificationsubscriptionsv1webhooksRetryPolicyTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Test\Model;

/**
 * Notificationsubscriptionsv1webhooksRetryPolicyTest Class Doc Comment
 *
 * @category    Class */
// * @description Retry policy for the individual webhooks that are a part of your subscription. If a message fails to deliver, it will execute through this retry policy.  Automatic suspend and resume:  If you experience downtime and have &#x60;deactivateFlag &#x3D; true&#x60; any new messages will be held in a \&quot;SUSPENDED\&quot; status. When your healthCheckUrl returns healthy again, the subscription will automatically be re-enabled and your messages will be sent. We will ping your healthCheckUrl routinely using a POST call with an empty payload to check availability. If your endpoint returns an unhealthy status of !&#x3D; 200, we will check the healthCheckUrl at a more frequent rate until it is healthy again.  If you experience downtime and have &#x60;deactivateFlag &#x3D; false&#x60; and your message exhausts all retry attempts the message will go to a \&quot;FAILED\&quot; status. Support will be notified and will reach out to suggest you execute the \&quot;REPLAY\&quot; endpoint at a later date when your server is healthy.   Reference the below values for formulas and calculations related to the frequency of retries depending on algorithm and configuration.
/**
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Notificationsubscriptionsv1webhooksRetryPolicyTest extends \PHPUnit\Framework\TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "Notificationsubscriptionsv1webhooksRetryPolicy"
     */
    public function testNotificationsubscriptionsv1webhooksRetryPolicy()
    {
    }

    /**
     * Test attribute "algorithm"
     */
    public function testPropertyAlgorithm()
    {
    }

    /**
     * Test attribute "firstRetry"
     */
    public function testPropertyFirstRetry()
    {
    }

    /**
     * Test attribute "interval"
     */
    public function testPropertyInterval()
    {
    }

    /**
     * Test attribute "numberOfRetries"
     */
    public function testPropertyNumberOfRetries()
    {
    }

    /**
     * Test attribute "deactivateFlag"
     */
    public function testPropertyDeactivateFlag()
    {
    }

    /**
     * Test attribute "repeatSequenceCount"
     */
    public function testPropertyRepeatSequenceCount()
    {
    }

    /**
     * Test attribute "repeatSequenceWaitTime"
     */
    public function testPropertyRepeatSequenceWaitTime()
    {
    }

    /**
     * Test attribute "additionalAttributes"
     */
    public function testPropertyAdditionalAttributes()
    {
    }
}
