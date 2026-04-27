<?php
namespace App\Tests\Entity;
    use App\Entity\Personne;
    use PHPUnit\Framework\TestCase;
class PersonneTest extends TestCase
{
    public function testPersonne()
    {
        $p = new Personne('hayfa', 'hichri', 22);
        $categorie = $p->Categorie();
        $this->assertSame("majeur", $categorie);
    }
    public function testPersonne2()
    {
        $p = new Personne('hayfa', 'hichri', 15);
        $categorie = $p->Categorie();
        $this->assertSame("mineur", $categorie);
    }
    public function testPersonne3()
    {
        $this->expectException(\Exception::class);
        $p = new Personne('hayfa', 'hichri', -5);
        $categorie = $p->Categorie();
}
}