<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuariocomumTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuariocomumTable Test Case
 */
class UsuariocomumTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuariocomumTable
     */
    protected $Usuariocomum;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Usuariocomum',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Usuariocomum') ? [] : ['className' => UsuariocomumTable::class];
        $this->Usuariocomum = $this->getTableLocator()->get('Usuariocomum', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Usuariocomum);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UsuariocomumTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
