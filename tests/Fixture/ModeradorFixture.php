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
                'nome' => 'Lorem ipsum dolor sit amet',
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'telefone' => 'Lorem ipsum dolor sit amet',
                'sexo' => 'Lorem ips',
                'roles_id' => 1,
                'created' => '2022-05-15 05:47:46',
                'modified' => '2022-05-15 05:47:46',
                'endereco_id' => 1,
            ],
        ];
        parent::init();
    }
}
