<?php
    namespace App\Tests\Entity;
    use App\Entity\Product;
    use PHPUnit\Framework\TestCase;
    class ProductTest extends TestCase
    {
        /**
         * @dataProvider priceForFood
         */
        public function testFood($prix, $dptva)
        {
            $p= new Product('pizza', 'food', $prix);
            $tva = $p->computeTVA();
            $this->assertSame($tva, $dptva);
        }
        public static function priceForFood(){
            return [
                [1, 0.055],
                [10, 0.55],
                [20, 1.1],
                [100, 5.5]
            ];
        }
        public function testNonFood()
        {
            $p= new Product('book', 'nonfood', 60);
            $tva = $p->computeTVA();
            $this->assertSame(11.76, $tva);
        
    }
    public function testNegativeprice()
    {
        $this->expectException(\Exception::class);
        $p= new Product('book', 'nonfood', -5);
        $tva = $p->computeTVA();
    }
    }
?>