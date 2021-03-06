<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 */

namespace Piwik\Plugins\CustomDirPlugin\tests\Unit;
use Piwik\Plugins\CustomDirPlugin\CustomClass;

/**
 * @group CustomDirPlugin
 * @group CustomClassTest
 * @group Plugins
 */
class CustomClassTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        // set up here if needed
    }
    
    public function tearDown()
    {
        // tear down here if needed
    }

    public function test_autoloading_customplugin_works()
    {
        $customClass = new CustomClass();
        $this->assertTrue($customClass instanceof CustomClass);
    }

}
