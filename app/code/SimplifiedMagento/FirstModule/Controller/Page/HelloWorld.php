<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use \Magento\Catalog\Api\ProductRepositoryInterface;

class HelloWorld extends \Magento\Framework\App\Action\Action
{

    /**
     * HelloWorld constructor.
     * @param Context $context
     * @param PencilInterface $pencileInterface
     */
    public function __construct(
        Context $context,
        PencilInterface $pencilInterface,
        ProductRepositoryInterface $productRepository
)
    {
        $this->pencilInterface=$pencilInterface;
        $this->productRepository=$productRepository;

        parent::__construct($context);
    }

    public function execute()
    {
       //echo $this->pencilInterface->getPencilType();
       $objectManager=\Magento\Framework\App\ObjectManager::getInstance();
        $pencil=$objectManager->create( 'SimplifiedMagento\FirstModule\Model\Pencil');
        var_dump($pencil);
       /*
       $book=$objectManager->create( 'SimplifiedMagento\FirstModule\Model\Book');
       var_dump($book);

       $student=$objectManager->create('\SimplifiedMagento\FirstModule\Model\Student');
       var_dump($student);
       */
    }
}
