<?php

namespace App\Observers;

use App\Events\StockDisponible;
use App\Product;

class ProductObserver
{
    public function updated(Product $product)
    {
        $oldStock = $product->getOriginal('stock');
        $newStock = $product->stock;

        if($oldStock === 0 && $newStock > 0)
        {
            event(new StockDisponible($product));
        }
    }
}
