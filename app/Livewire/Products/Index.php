<?php
namespace App\Livewire\Products;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class Index extends Component
{
    use WithPagination;

    public function delete(Product $product){
        $product->delete();
        session()->flash('success', 'Product deleted successfully.');
        $this->redirectRoute('products.index', navigate: true);
    }

    public function render()
    {
        return view('livewire.products.index',[
            'products' => Product::latest()->paginate(10)
            // 'products' => Product::simplePaginate(10)
        ]);
    }
}
