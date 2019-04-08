<?php

namespace App\Http\Controllers\API;

use App\Transaction;
use Illuminate\Http\Request;
use Validator;

class TransactionController
{
    public function store(Request $request)
    {
        $rules = [
            'user_id' => 'required',
            'transaction_id' => 'required',
            'transaction_uri' => 'required',
            'transaction_status' => 'required',
            'amount' => 'required'
        ];

        $messages = [
            'user_id.required' => 'Nenhum usuário foi informado.',
            'transaction_id.required' => 'O ID da transação é obrigatório.',
            'transaction_uri.required' => 'O URI da transação é obrigatório.',
            'transaction_status.required' => 'O status da transação é obrigatório.',
            'amount.required' => 'O valor da transação é obrigatório.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'success' => false,
                'message' => 'Houve um erro ao salvar a transação, tente novamente.'
            ], 400);
        }

        try {
            $transaction = Transaction::create($request->all());

            return response()->json([
                'success' => true,
                'data' => $transaction,
                'message' => 'A transação foi salva com sucesso!'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
