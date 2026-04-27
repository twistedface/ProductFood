<?php
    namespace App\Tests\Entity;
    use App\Entity\Factoriel;
    use PHPUnit\Framework\TestCase;
    class FactorielTest extends TestCase
    {
        /**
         * @dataProvider factorielData
         */
        public function testFactoriel($nombre, $resultat)
        {
            $f = new Factoriel();
            $f->setNombre($nombre);
            $this->assertSame($resultat, $f->calculFactoriel());
        }
        public static function factorielData()
        {
            return [
                [3, 6],
                [7, 5040],
                [5, 120],
                [8, 40320]
            ];
        }
        public function testNegativeFactoriel()
        {
            $this->expectException(\InvalidArgumentException::class);
            $f = new Factoriel();
            $f->setNombre(-1);
            $f->calculFactoriel();
        }
    }
    ?>