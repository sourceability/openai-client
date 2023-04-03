<?php

namespace Sourceability\OpenAIClient\Tests;

use PHPUnit\Framework\TestCase;
use Sourceability\OpenAIClient\Pricing\ModelPricingRepository;

class ModelPricingRepositoryTest extends TestCase
{
    public function testMissing()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Pricing for model "foobar" not found.');

        $repository = new ModelPricingRepository();
        $repository->getPricing('foobar');
    }

    public function test()
    {
        $repository = new ModelPricingRepository();

        $chatGPTPricing = $repository->getPricing('gpt-3.5-turbo');

        self::assertSame(
            '0.000002',
            (string) $chatGPTPricing->getPrompt()->calculatePrice(1)->getAmount()
        );
        self::assertSame(
            '0.002000',
            (string) $chatGPTPricing->getPrompt()->calculatePrice(1000)->getAmount()
        );
        self::assertSame(
            '0.000246',
            (string) $chatGPTPricing->getPrompt()->calculatePrice(123)->getAmount()
        );

        $adaPricing = $repository->getPricing('ada');

        self::assertSame(
            '0.0000004',
            (string) $adaPricing->getPrompt()->calculatePrice(1)->getAmount()
        );
        self::assertSame(
            '0.0004000',
            (string) $adaPricing->getPrompt()->calculatePrice(1000)->getAmount()
        );
        self::assertSame(
            '0.0000492',
            (string) $adaPricing->getPrompt()->calculatePrice(123)->getAmount()
        );
    }

    public function testAda001()
    {
        $repository = new ModelPricingRepository();

        $adaPricing = $repository->getPricing('text-ada-001');

        self::assertNotNull($adaPricing);
    }

    public function testDavinci003()
    {
        $repository = new ModelPricingRepository();

        $daVinciPricing = $repository->getPricing('text-davinci-003');
        $daVinciPricing2 = $repository->getPricing('davinci');

        self::assertNotNull($daVinciPricing);
        self::assertNotNull($daVinciPricing2);
    }
}
