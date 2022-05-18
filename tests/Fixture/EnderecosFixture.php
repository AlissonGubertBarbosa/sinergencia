<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnderecosFixture
 */
class EnderecosFixture extends TestFixture
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
                'logradouro' => 'Lorem ipsum dolor sit amet',
                'numero' => 'Lorem ip',
                'bairro' => 'Lorem ipsum dolor sit amet',
                'complemento' => 'Lorem ipsum dolor sit amet',
                'cidade' => 'Lorem ipsum dolor sit amet',
                'estado' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
