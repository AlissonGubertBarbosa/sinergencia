<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ModeradorFixture
 */
class ModeradorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'moderador';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_moderador' => 1,
                'nomeModerador' => 'Lorem ipsum dolor sit amet',
                'nomeUsuario' => 'Lorem ipsum dolor sit amet',
                'senha' => 'Lorem ipsum dolor sit amet',
                'telefone' => 'Lorem ipsum dolor sit amet',
                'sexo' => 'Lorem ips',
                'id_endereco' => 1,
            ],
        ];
        parent::init();
    }
}
