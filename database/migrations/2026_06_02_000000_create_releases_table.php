<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('releases', function (Blueprint $table) {
            $table->id();
            $table->string('codename');
            $table->string('version');
            $table->string('tag');
            $table->string('releasenotes');
            $table->string('isoname');
            $table->string('date');
            $table->timestamps();
        });

        // Sample rows so the /downloads page renders for the demo.
        DB::table('releases')->insert([
            [
                'codename' => 'Aurora',
                'version' => '1.2',
                'tag' => 'RELEASE',
                'releasenotes' => 'https://mika-linux.com/notes/1.2',
                'isoname' => 'https://mika-linux.com/downloads/mika-linux-1.2.iso',
                'date' => '2026-05-20',
            ],
            [
                'codename' => 'Nebula',
                'version' => '1.1',
                'tag' => 'RELEASE',
                'releasenotes' => 'https://mika-linux.com/notes/1.1',
                'isoname' => 'https://mika-linux.com/downloads/mika-linux-1.1.iso',
                'date' => '2026-03-08',
            ],
            [
                'codename' => 'Comet',
                'version' => '1.3-beta',
                'tag' => 'BETA',
                'releasenotes' => 'https://mika-linux.com/notes/1.3-beta',
                'isoname' => 'https://mika-linux.com/downloads/mika-linux-1.3-beta.iso',
                'date' => '2026-06-01',
            ],
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('releases');
    }
};
