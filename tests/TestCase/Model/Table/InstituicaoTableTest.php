<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstituicaoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstituicaoTable Test Case
 */
class InstituicaoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InstituicaoTable
     */
    protected $Instituicao;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Instituicao',
        'app.Roles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Instituicao') ? [] : ['className' => InstituicaoTable::class];
        $this->Instituicao = $this->getTableLocator()->get('Instituicao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Instituicao);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InstituicaoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\InstituicaoTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
