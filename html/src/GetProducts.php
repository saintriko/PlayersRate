<?

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class GetProducts
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function showAll()
    {
        $productRepository = $this->em->getRepository('Product');
        $products = $productRepository->findAll();
        $productsData = "";
        if ($products === null) {
            $productsData = "No products found.\n";
        } else {
            foreach ($products as $product) {
                $productsData .= nl2br($product->getId() . ". " . $product->getName() . " " . $product->getModel() . "\n");
            }
        }
        return $productsData;
    }
}