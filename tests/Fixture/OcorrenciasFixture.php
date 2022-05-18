<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OcorrenciasFixture
 */
class OcorrenciasFixture extends TestFixture
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
                'descricao' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'data_Criacao' => '2022-05-18 14:57:42',
                'usuariocomum_id' => 1,
                'endereco_id' => 1,
            ],
        ];
        parent::init();
    }
}
