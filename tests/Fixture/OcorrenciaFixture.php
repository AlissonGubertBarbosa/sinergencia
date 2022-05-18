<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OcorrenciaFixture
 */
class OcorrenciaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ocorrencia';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_ocorrencia' => 1,
                'descricao' => 'Lorem ipsum dolor sit amet',
                'status' => 'Lorem ipsum dolor sit amet',
                'data_Criacao' => '2022-05-15 07:23:02',
                'usuariocomum_id' => 1,
                'endereco_id' => 1,
            ],
        ];
        parent::init();
    }
}
