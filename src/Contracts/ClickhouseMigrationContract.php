<?php declare(strict_types=1);

namespace Alexeykhr\ClickhouseMigrations\Contracts;

interface ClickhouseMigrationContract
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up();

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down();
}
