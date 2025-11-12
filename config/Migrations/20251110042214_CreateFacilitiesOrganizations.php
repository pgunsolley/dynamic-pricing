<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateFacilitiesOrganizations extends BaseMigration
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
            ->table('facilities_organizations')
            ->addColumn('facility_id', 'uuid', [
                'default' => null,
                'null' => false,
            ])
            ->addColumn('organization_id', 'uuid', [
                'default' => null,
                'null' => false,
            ])
            ->addForeignKey('facility_id', 'facilities')
            ->addForeignKey('organization_id', 'organizations')
            ->create();
    }
}
