<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClassificacoesFixture
 */
class ClassificacoesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nota' => 1,
                'feedback_id' => 1,
                'usuariocomum_id' => 1,
            ],
        ];
        parent::init();
    }
}
