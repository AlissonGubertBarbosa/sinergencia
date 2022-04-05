<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClassificacaoFixture
 */
class ClassificacaoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'classificacao';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_classificacao' => 1,
                'nota' => 1,
                'id_feedback' => 1,
                'id_usuarioComum' => 1,
            ],
        ];
        parent::init();
    }
}
