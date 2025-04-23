<?php

declare(strict_types=1);

namespace Tests\Domain\Entity;

use App\Domain\Entity\Kelas;
use App\Domain\ValueObject\KelasId;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class KelasTest extends TestCase
{
    public function testKelasInitialization(): void
    {
        // Arrange
        $kelasIdMock = new KelasId(Uuid::uuid4()->toString());
        $rencanaPertemuan = 16;
        $permanen = true;

        // Act
        $kelas = new Kelas($kelasIdMock, $rencanaPertemuan, $permanen);

        // Assert
        $this->assertSame($kelasIdMock, $kelas->getId());
        $this->assertSame($rencanaPertemuan, $kelas->getRencanaPertemuan());
        $this->assertTrue($kelas->isPermanen());
    }
}