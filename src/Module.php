<?php
namespace MonthlyBasis\LaminasOpenAi;

use MonthlyBasis\LaminasOpenAi\Model\Entity as LaminasOpenAiEntity;
use MonthlyBasis\LaminasOpenAi\Model\Service as LaminasOpenAiService;

class Module
{
    public function getConfig()
    {
        return [];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                LaminasOpenAiEntity\Config::class => function ($sm) {
                    return new LaminasOpenAiEntity\Config(
                        $sm->get('Config')['monthly-basis']['laminas-open-ai'] ?? []
                    );
                },
            ],
        ];
    }
}
