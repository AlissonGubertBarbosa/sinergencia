<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClassificacoesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClassificacoesTable Test Case
 */
class ClassificacoesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClassificacoesTable
     */
    protected $Classificacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Classificacoes',
        'app.Feedback',
        'app.Usuariocomums',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Classificacoes') ? [] : ['className' => ClassificacoesTable::class];
        $this->Classificacoes = $this->getTableLocator()->get('Classificacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Classificacoes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ClassificacoesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ClassificacoesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
