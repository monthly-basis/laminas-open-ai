<?php
namespace MonthlyBasis\LaminasOpenAiTest\Model\Service;

use MonthlyBasis\LaminasOpenAi\Model\Entity as LaminasOpenAiEntity;
use MonthlyBasis\LaminasOpenAi\Model\Service as LaminasOpenAiService;
use PHPUnit\Framework\TestCase;

class OpenAiTest extends TestCase
{
    protected function setUp(): void
    {
        $configFilePath = $_SERVER['PWD'] . '/config/autoload/local.php';
        $configArray = require_once($configFilePath);
        $configEntity = new LaminasOpenAiEntity\Config(
            $configArray['monthly-basis']['laminas-open-ai']
        );
        $this->openAiService = new LaminasOpenAiService\OpenAi(
            $configEntity
        );
    }

    public function test_instance()
    {
        $this->assertInstanceOf(
            LaminasOpenAiService\OpenAi::class,
            $this->openAiService
        );
    }
}
