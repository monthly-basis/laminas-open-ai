<?php
namespace MonthlyBasis\LaminasOpenAiTest;

use MonthlyBasis\LaminasOpenAi\Module;
use MonthlyBasis\LaminasTest\ModuleTestCase;

class ModuleTest extends ModuleTestCase
{
    protected function setUp(): void
    {
        $this->module = new Module();
    }
}
