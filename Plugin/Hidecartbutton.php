<?php


namespace Faonni\ProductAvailable\Plugin;
use Magento\Catalog\Model\Product;
use Faonni\ProductAvailable\Helper\Data;

class Hidecartbutton
{
    protected $dataHelper;

    public function __construct(Data $dataHelper){
        $this->dataHelper = $dataHelper;

    }
    public function afterIsSaleable(Product $product)
    {

        if(!$this->dataHelper->isAvailableAddToCart()){
            return false;
        }
        else{
            return $product->isSalable();
        }


    }
}
