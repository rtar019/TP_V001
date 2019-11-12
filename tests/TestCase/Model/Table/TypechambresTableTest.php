<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypechambresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypechambresTable Test Case
 */
class TypechambresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypechambresTable
     */
    public $Typechambres;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Typechambres'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Typechambres') ? [] : ['className' => TypechambresTable::class];
        $this->Typechambres = TableRegistry::getTableLocator()->get('Typechambres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typechambres);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
