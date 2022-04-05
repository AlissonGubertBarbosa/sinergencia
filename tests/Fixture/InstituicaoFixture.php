<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InstituicaoFixture
 */
class InstituicaoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'instituicao';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_instituicao' => 1,
                'nomeInstituição' => 'Lorem ipsum dolor sit amet',
                'nomeUsuario' => 'Lorem ipsum dolor sit amet',
                'senha' => 'Lorem ipsum dolor sit amet',
                'telefone' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'id_endereco' => 1,
            ],
        ];
        parent::init();
    }
}
