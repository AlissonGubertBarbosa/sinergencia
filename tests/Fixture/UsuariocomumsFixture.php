<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariocomumsFixture
 */
class UsuariocomumsFixture extends TestFixture
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
                'nome' => 'Lorem ipsum dolor sit amet',
                'telefone' => 'Lorem ipsum dolor sit amet',
                'sexo' => 'Lorem ip',
                'email' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
