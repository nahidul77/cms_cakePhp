<?php
use Migrations\AbstractMigration;

class Appointments extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('appointments');
        $table->addColumn('patient_id', 'biginteger', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('doctor_id', 'biginteger', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('appointment_date', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'timestamp', [
            'default' => 'CURRENT_TIMESTAMP',
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }

    public function down(){
        $this->table('appointments')->drop()->save();
    }
}
