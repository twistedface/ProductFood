<?php
namespace App\Tests\Entity;
    use App\Entity\Forme;
    use PHPUnit\Framework\TestCase;
class FormeTest extends TestCase  
{
    public function testForme()
    {
        $f = new Forme('carree', 5, 5);
     $surface = $f->Surface();
        $this->assertsame(25, $surface);
    }
    public function testForme2()
    {
        $f = new Forme('rectangle', 5, 10);
     $surface = $f->Surface();
        $this->assertsame(50, $surface);
    }
    public function Perimetre()
    {
        $this->expectException(\Exception::class);
        $f = new Forme('carree', -5, 5);
     $surface = $f->Surface();
}
}
?>