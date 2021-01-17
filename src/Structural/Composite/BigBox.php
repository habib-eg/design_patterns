<?php

namespace App\Structural\Composite;
/**
 * Class BigBox
 * @package App\Structural\Composite;
 */
class BigBox implements ProductInterface,ActionsInterface
{
    /**
     * @var ProductInterface[]
     */
    private array $products;

    /**
     * BigBox constructor.
     * @param ProductInterface[] $products
     */
    public function __construct(array $products)
    {
        $this->products = $products;
    }


    /**
     * @return float
     */
    public function getPrice(): float
    {
        return  array_sum(
            array_map(function (ProductInterface $product) {
                return $product->getPrice();
            },$this->products)
        );
    }

    /**
     * @param ProductInterface $product
     * @return $this
     */
    public function add(ProductInterface $product)
    {
        array_push($this->products,$product);
        return  $this;
    }

    /**
     * @param ProductInterface $product
     * @return $this
     */
    public function remove(ProductInterface $product)
    {
        $this->setProducts(
            array_filter($this->products,function ($item) use($product) {
                return $product !==$item;
            })
        );
        return  $this;
    }

    /**
     * @return ProductInterface[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param ProductInterface[] $products
     * @return BigBox
     */
    public function setProducts(array $products): BigBox
    {
        $this->products = $products;
        return $this;
    }

    /**
     * @return int
     */
    public function productsCounter():int
    {
        return  count($this->getProducts());
    }
}