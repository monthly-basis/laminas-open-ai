<?php
namespace MonthlyBasis\LaminasOpenAi\Model\Service;

use MonthlyBasis\LaminasOpenAi\Model\Entity as LaminasOpenAiEntity;

class OpenAi extends \Orhanerday\OpenAi\OpenAi
{
    public function __construct(
        protected LaminasOpenAiEntity\Config $configEntity
    ) {
        parent::__construct($configEntity['key']);
    }
}
