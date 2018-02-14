<?php
namespace Nterms\Mcash\Tests;

use PHPUnit\Framework\TestCase;
use Nterms\Mcash\Mcash;

class McashTest extends TestCase
{
    /**
     * @var array $config Mcash configuration details
     */
    protected static $config;

    public static function setUpBeforeClass()
    {
        self::$config = require(__DIR__ . '/../src/config/mcash.php');
    }

    public function testGetToken()
    {
        $tokenFormat = '/^[0-9A-F]{8}-[0-9A-F]{4}-4[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}$/i';
        $mcash = new Mcash(self::$config);
        $token = $mcash->getToken();
        $this->assertTrue(preg_match($tokenFormat, $token) == 1);
    }
}
