<?php

namespace App\Livewire\Admin;


use \Livewire\Attributes\Rule;
use Livewire\Component as LivewireComponent;
use Livewire\WithPagination;


class baseController extends LivewireComponent
{
    use WithPagination;

    public $search;

    public $name = '';
    public $status = 'Available';
    public $price = '';
    public $salesPrice = '0.00';
    public $description = '';
    public $vat;
    public $vatValue = 0;
    public $parentId = 0;

    public static function rules()
    {
        return [
            'name' => 'required|string|min:1|max:255',
            'status' => 'required',
            'price' => 'required|regex:/^[0-9.]+$/|min:2|max:50',
            'salesPrice' => 'required|numeric',
            'description' => 'string|min:1|max:225',
            // Add more rules as needed
        ];
    }

    public static function messages()
    {
        return [
          'price.required' => 'The price field is required.',
          'price.regex' => 'The price must only contain numbers and dots.',
          'price.min' => 'The price must be at least :min characters.',
          'price.max' => 'The price may not be greater than :max characters.',
        ];
    }

    // You can include any common methods or lifecycle hooks here
}
