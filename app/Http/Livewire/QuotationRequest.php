<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Session;

class QuotationRequest extends Component
{
    public $customer_name;
    public $email;
    public $contact_number;
    public $notes;
    public $total = 0;

    protected $rules = [
        'customer_name' => 'required|min:3',
        'email' => 'required|email',
        'contact_number' => 'required'
    ];
    public function cartTotal()
    {
        $total = collect(Session::get('cart.items'))->map(function ($item) {
            return $item->price;
        });
        $this->total = number_format($total->sum(), 2);
        // return number_format($total->sum(), 2);
    }

    public function submit()
    {
        $this->validate();



        $order = Order::create([
            'customer_name' => $this->customer_name,
            'email' => $this->email,
            'contact_number' => $this->contact_number,
            'notes' => $this->notes,
            'total' => $this->total
        ]);

        $items = collect(Session::get('cart.items'))->map(function ($item) use ($order) {
            $order_item['product_id'] = $item->id;
            $order_item['order_id'] = $order;
            $order->order_items()->create($order_item);
        });

        Session::forget('cart.items');
        session()->flash('message', 'Quotation requested successfully. We will contact you soon!');
        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.quotation-request');
    }
}
