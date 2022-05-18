<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuariocomumsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuariocomumsTable Test Case
 */
class UsuariocomumsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuariocomumsTable
     */
    protected $Usuariocomums;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Usuariocomums',
        'app.Classificacoes',
        'app.Feedback',
        'app.Ocorrencias',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Usuariocomums') ? [] : ['className' => UsuariocomumsTable::class];
        $this->Usuariocomums = $this->getTableLocator()->get('Usuariocomums', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Usuariocomums);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\UsuariocomumsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
