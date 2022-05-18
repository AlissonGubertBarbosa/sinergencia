<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'telefone' => 'Lorem ipsum ',
                'email' => 'Lorem ipsum dolor sit amet',
                'roles_id' => 1,
                'created' => '2022-05-18 14:41:53',
                'modified' => '2022-05-18 14:41:53',
                'endereco_id' => 1,
            ],
        ];
        parent::init();
    }
}
