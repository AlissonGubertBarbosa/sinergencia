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
                'nome' => 'Lorem ipsum dolor sit amet',
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'telefone' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'roles_id' => 1,
                'created' => '2022-05-15 05:47:54',
                'modified' => '2022-05-15 05:47:54',
                'endereco_id' => 1,
            ],
        ];
        parent::init();
    }
}
