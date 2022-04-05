<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OcorrenciaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OcorrenciaTable Test Case
 */
class OcorrenciaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OcorrenciaTable
     */
    protected $Ocorrencia;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Ocorrencia',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ocorrencia') ? [] : ['className' => OcorrenciaTable::class];
        $this->Ocorrencia = $this->getTableLocator()->get('Ocorrencia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Ocorrencia);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OcorrenciaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
