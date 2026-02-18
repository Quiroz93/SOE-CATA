<?php

declare(strict_types=1);

namespace Tests\Unit\Domain;

use App\Models\Programa;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Builder;
use Tests\TestCase;

class ProgramaTest extends TestCase
{
    use RefreshDatabase;

    public function test_scope_published_retorna_solo_publicados(): void
    {
        $publicado = Programa::factory()->create(['estado' => 'publicado']);
        $borrador = Programa::factory()->create(['estado' => 'borrador']);
        $inactivo = Programa::factory()->create(['estado' => 'inactivo']);

        $result = Programa::published()->get();
        $this->assertTrue($result->contains($publicado));
        $this->assertFalse($result->contains($borrador));
        $this->assertFalse($result->contains($inactivo));
    }

    public function test_soft_deletes_oculta_programa(): void
    {
        $programa = Programa::factory()->create(['estado' => 'publicado']);
        $programa->delete();
        $this->assertSoftDeleted($programa);
        $this->assertFalse(Programa::published()->get()->contains($programa));
    }

    public function test_scope_published_no_incluye_borrador(): void
    {
        Programa::factory()->create(['estado' => 'borrador']);
        $result = Programa::published()->get();
        $this->assertCount(0, $result);
    }
}
