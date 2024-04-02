<?php

namespace App\Livewire\Admin\Order;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\Product;

class Cart extends Component
{
  public $showOffcanvas = false;

  public $cartCounter = 0;
  public $products = [];
  public $cartItems = [];



  public $amount = 0;

  #[On('Open')]
  public function updateCart(){ $this->showOffcanvas = true; }

  public function close() { $this->showOffcanvas = false;}




  #[On('addToCart')]
  public function addToCart($productID, $quantity)
  {
    $product = Product::find($productID);

    // $existingProductIndex = array_search($product->id, array_column($this->cartItems, 'product', 'id'));
    // dd($existingProductIndex);

    if($this->cartItems != [])
    {
        foreach ($this->cartItems as $item)
        {
            if( $item['product']['id']  === $product->id)
            {

                $item['product']['qty'] +=  1;
                // dd($item['product']['qty']);

                $this->emit('arrayUpdated', $this->item);
            }
        }
    }else
    {
        $this->cartItems[] = [
            'product' => [
              'id' => $product->id,
              'price' => $product->price,
              'name' => $product->name,
              'description' => $product->description,
              'totalPrice' => '',
              'qty' => $quantity[$product->id],
            ]
            // Initial total price is product price times amount
        ];
    }




           $this->cartCounter += $quantity[$product->id];

  }

//   public function addToCart($productID, $quantity) {
//     $product = Product::find($productID);

//     $existingProductIndex = array_search($product->id, array_column($this->cartItems, 'id'));
//     if ($existingProductIndex !== false) {
//         $this->cartItems[$existingProductIndex]['qty'] += $quantity;
//     } else {
//         $this->cartItems[] = [
//             'product' => [
//               'id' => $product->id,
//               'price' => $product->price,
//               'name' => $product->name,
//               'description' => $product->description,
//               'totalPrice' => '',
//               'qty' => $quantity[$product->id],
//             ]
//             // Initial total price is product price times amount
//         ];
//     }

//     $this->cartCounter += $quantity;
// }

  public function up()
  {
    $this->cartCounter++;
  }







































  // public function addToCart($productID)
  // {
  //   $product = Product::find($productID);
  //   if ($product) {
  //     foreach ($this->cartItems as $item)
  //     {
  //       if($product->id == $item['product']['id'])
  //       {
  //         $this->amount = session()->get('cartItems.' . $product->id, 0);
  //         $this->amount += $this->quantity;

  //         $this->cartCounter = $this->amount;

  //         session()->put('cartItems.' . $product->id, $this->amount);
  //         // dd($item['product']['qty']);
  //       }
  //     }



  //     $totalPrice = $product->price * $this->amount;

  //     if (collect($this->cartItems)->firstWhere('product.id', $product->id)) {
  //       $existingProductIndex = collect($this->cartItems)->search(function ($item) use ($productID) {
  //           return $item['product']['id'] === $productID;
  //       });

  //       $this->cartItems[$existingProductIndex]['totalPrice'] = $totalPrice;
  //       } else {
  //       // Als het product niet in de winkelwagen staat, voeg het toe met een standaard aantal van 1
  //       $this->cartItems[] = [
  //           'product' => [
  //             'id' => $product->id,
  //             'price' => $product->price,
  //             'name' => $product->name,
  //             'description' => $product->description,
  //             'totalPrice' => $totalPrice,
  //             'qty' => 1,
  //           ]
  //           // Initial total price is product price times amount
  //       ];

  //       }
  //   }
  //   $this->quantity = 1;

  // }


    public function render()
    {
      $showOffcanvas = $this->showOffcanvas;
        return view('livewire.Admin.Order.cart', compact('showOffcanvas'));
    }
}
