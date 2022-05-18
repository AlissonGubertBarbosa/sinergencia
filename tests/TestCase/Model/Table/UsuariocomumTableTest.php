<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsuarioComumTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsuarioComumTable Test Case
 */
class UsuarioComumTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsuarioComumTable
     */
    protected $UsuarioComum;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.UsuarioComum',
        'app.Classificacao',
        'app.Feedback',
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
        $config = $this->getTableLocator()->exists('UsuarioComum') ? [] : ['className' => UsuarioComumTable::class];
        $this->UsuarioComum = $this->getTableLocator()->get('UsuarioComum', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->UsuarioComum);

        parent::tearDown();
    }
}
