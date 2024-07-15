<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function showTransactionForm(Request $request)
    {
        $product = $request->query('product');
        return view('transaction', compact('product'));
    }
    public function create()
    {
        // Assuming you have product details
        $product = 'FS3600';
        $price = 1500000;
        $product = 'FS3410';
        $price = 1200000;
        $product = 'FS2500';
        $price = 1250000;
        $product = 'RS4021xs';
        $price = 1255000;
        $product = 'RS3621xs';
        $price = 2250000;
        $product = 'RS3621RPxs';
        $price = 2150000;
        $product = 'RS1619xs';
        $price = 2350000;
        $product = 'DS3622xs';
        $price = 2550000;
        $product = 'DS1823xs';
        $price = 3250000;
        $product = 'RS3818xs';
        $price = 2170000;
        return view('transaction', compact('product', 'price'));
    }

    public function store(Request $request)
    {
        // Validate and store transaction data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'city' => 'required',
            'address' => 'required',
        ]);

        // Logic to handle the transaction

        return redirect()->back()->with('success', 'Transaction completed successfully!');
    }



}
