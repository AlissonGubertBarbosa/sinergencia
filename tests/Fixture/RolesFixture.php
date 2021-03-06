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
                'created' => '2022-05-18 14:36:24',
                'modified' => '2022-05-18 14:36:24',
            ],
        ];
        parent::init();
    }
}
