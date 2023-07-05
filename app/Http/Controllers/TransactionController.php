<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Distinct dates
        $transactionsDate = Transaction::selectRaw('DISTINCT DATE_FORMAT(date, "%b-%y") as date')->get();
        $dates = [];
        foreach ($transactionsDate as $transaction) {
            array_push($dates, $transaction->date);
        }

        // Distinct transactions by name
        $transactionsName = Transaction::selectRaw('DISTINCT name')->get();
        $names = [];
        foreach ($transactionsName as $transaction) {
            array_push($names, $transaction->name);
        }
        $transactionAmounts = [];
        foreach ($names as $name) {
            $transactions = Transaction::where('name', $name)->get();
            $amounts = $transactions->pluck('amount')->toArray();
            $transactionAmounts[] = [
                'name' => $name,
                'data' => $amounts,
            ];
            foreach ($transactions as $transaction) {
            }
        }
        // select all transactions by name
        // $transactions = Transaction::where('name', $names[0])->get();
        // $transactionAmounts = [];
        // foreach ($transactions as $transaction) {
        //     array_push($transactionAmounts, $transaction->amount);
        // }
        return view('table', [
            'transactions' => Transaction::all(),
            'dates' => $dates,
            'data' => $transactionAmounts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionRequest $request)
    {
        $formattedDate = date('Y-m-d', strtotime($request->date));
        dd($formattedDate);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTransactionRequest  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
