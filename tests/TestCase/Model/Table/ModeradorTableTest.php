<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ModeradorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ModeradorTable Test Case
 */
class ModeradorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ModeradorTable
     */
    protected $Moderador;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Moderador',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Moderador') ? [] : ['className' => ModeradorTable::class];
        $this->Moderador = $this->getTableLocator()->get('Moderador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Moderador);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ModeradorTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
