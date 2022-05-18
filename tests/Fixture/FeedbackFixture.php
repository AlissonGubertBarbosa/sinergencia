<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FeedbackFixture
 */
class FeedbackFixture extends TestFixture
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
                'id_feedback' => 1,
                'devolutiva' => 'Lorem ipsum dolor sit amet',
                'ocorrencia_id' => 1,
                'usuariocomum_id' => 1,
                'instituicao_id' => 1,
            ],
        ];
        parent::init();
    }
}
