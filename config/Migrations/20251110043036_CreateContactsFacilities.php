<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateContactsFacilities extends BaseMigration
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
            ->table('contacts_facilities')
            ->addColumn('contact_id', 'uuid', [
                'default' => null,
                'null' => false,
            ])
            ->addColumn('facility_id', 'uuid', [
                'default' => null,
                'null' => false,
            ])
            ->addForeignKey('contact_id', 'contacts')
            ->addForeignKey('facility_id', 'facilities')
            ->create();
    }
}
