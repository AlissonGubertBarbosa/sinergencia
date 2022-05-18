<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuarioComumFixture
 */
class UsuarioComumFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'usuariocomum';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_usuarioComum' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'telefone' => 'Lorem ipsum dolor sit amet',
                'sexo' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
