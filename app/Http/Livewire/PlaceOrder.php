<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class PlaceOrder extends Component
{
    public $total;
    public $contact_number;
    public $address;
    public $additional_notes;

    public function mount($total = null)
    {
        $this->total = $total;
    }
    public function submit()
    {

        $data = $this->validate([
            'contact_number' => 'required|min:7',
            'address' => 'required',
        ]);
        $data['total'] = $this->total;
        $data['additional_notes'] = $this->additional_notes;

        $order = Order::create($data);

        $items = collect(Session::get('cart.items'))->map(function ($item) use ($order) {
            $order_item['product_id'] = $item->id;
            $order_item['order_id'] = $order;
            $order->order_items()->create($order_item);
        });

        Session::forget('cart.items');
        session()->flash('message', 'Order successfully placed. We will contact you soon!');
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.place-order');
    }
}
