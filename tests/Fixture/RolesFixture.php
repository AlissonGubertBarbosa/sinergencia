<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RolesFixture
 */
class RolesFixture extends TestFixture
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
                'role' => 'Lorem ipsum dolor ',
                'created' => '2022-05-15 05:47:31',
                'modified' => '2022-05-15 05:47:31',
            ],
        ];
        parent::init();
    }
}
