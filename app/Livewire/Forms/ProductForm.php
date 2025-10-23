<?php

namespace App\Livewire\Forms;
use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    public ?Product $product;

    #[Validate('required|string|max:255', as: 'Product name')]
    public $name;
    #[Validate('nullable|string|max:1000', as: 'Product description')]
    public $description;
    #[Validate('required|integer|min:0', as: 'Product stock')]
    public $stock=0;  
    #[Validate('required|numeric|min:0', as: 'Product price')]
    public $price=0;

    public function setProduct(Product $product){
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->stock = $product->stock;
        $this->price = $product->price;
    }

    public function update(){
        $this->validate();
        $this->product->update($this->all());
    }

    public function store(){
            $this->validate();
        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'stock' => $this->stock,
            'price' => $this->price,
        ]);
    }
}
