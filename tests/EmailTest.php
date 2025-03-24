<?php declare(strict_types=1);


require_once __DIR__ . '/../src/userHelper.php';

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmail(): void
    {

        $helper = require_once('/../src/userHelper.php');
        $string = 'user@example.com';

        $email = $helper->getEmailById($string);

        $this->assertSame($string, $email->asString());
    }

    public function testCannotBeCreatedFromInvalidEmail(): void
    {
        $helper = require_once('/../src/userHelper.php');
        $this->expectException(InvalidArgumentException::class);
        $helper->getEmailById('invalid');
    }
}