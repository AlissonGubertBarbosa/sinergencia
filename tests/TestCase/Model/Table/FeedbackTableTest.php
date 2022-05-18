<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeedbackTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeedbackTable Test Case
 */
class FeedbackTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FeedbackTable
     */
    protected $Feedback;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Feedback',
        'app.Ocorrencias',
        'app.Usuariocomums',
        'app.Instituicaos',
        'app.Classificacao',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Feedback') ? [] : ['className' => FeedbackTable::class];
        $this->Feedback = $this->getTableLocator()->get('Feedback', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Feedback);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FeedbackTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\FeedbackTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
