<?php
namespace Kunstmaan\LiveReloadBundle\Tests\DependencyInjection;

use Matthias\SymfonyConfigTest\PhpUnit\AbstractConfigurationTestCase;
use Kunstmaan\LiveReloadBundle\DependencyInjection\Configuration;

class ConfigurationTest extends AbstractConfigurationTestCase
{
    protected function getConfiguration()
    {
        return new Configuration();
    }

    public function testDefaultsAreSetCorrectly()
    {
        $this->assertProcessedConfigurationEquals(array(
        ), array(
            'enabled' => true,
            'host' => 'localhost',
            'port' => '35729',
            'check_server_presence' => true,
        ));
    }
}
