<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateFacilities extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     *
     * @return void
     */
    public function change(): void
    {
        $this
            ->table('facilities', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'uuid', [
                'default' => null,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'null' => false,
            ])
            ->addColumn('address', 'string', [
                'default' => null,
                'null' => false,
            ])
            ->addColumn('unit', 'string', [
                'default' => null,
                'null' => true,
            ])
            ->addColumn('city', 'string', [
                'default' => null,
                'null' => false,
            ])
            ->addColumn('state', 'string', [
                'default' => null,
                'null' => false,
                'length' => 2,
            ])
            ->addColumn('zip', 'string', [
                'default' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
