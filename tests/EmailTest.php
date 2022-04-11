<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Blin\Email;

/**
 * @covers Email
 */
final class EmailTest extends TestCase
{
    public function test可以从有效的电子邮件地址创建(): void
    {
        #当 $actual 不是 $expected 的实例时报告错误，错误讯息由 $message 指定。
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function test无法从无效电子邮件地址创建(): void
    {
        //抓取异常
        $this->expectException(InvalidArgumentException::class);
        Email::fromString('user');
    }

    public function test可以用作字符串(): void
    {
        #当两个变量 $expected 和 $actual 不相等时报告错误，错误讯息由 $message 指定。
        $expected = 'user@example.com';
        $actual = Email::fromString('user@example.com');
        #两个值或对象是否一致
        $this->assertEquals($expected, $actual);
    }
}