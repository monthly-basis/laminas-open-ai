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

    public function test_chat()
    {
        $this->markTestSkipped(
          'Skip this test unless you want to call API.'
        );

        $response = $this->openAiService->chat([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'user',
                    'content' => 'hello world',
                ],
            ],
        ]);
        $this->assertNotEmpty($response);
    }
}
