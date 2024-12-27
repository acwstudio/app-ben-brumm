<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement(
            <<<'SQL'
            CREATE VIEW bracelet_prop_views AS
            select
                bp.id as id,
                bp.body_part,
                w.name as weave,
                bpw.fullness,
                bpw.wire_diameter
            from bracelet_props bp
            join bracelet_prop_weavings bpw on bp.id = bpw.bracelet_prop_id
            join weavings w on bpw.weaving_id = w.id
            SQL
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP VIEW bracelet_prop_views;');
    }
};
