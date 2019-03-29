<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Pontos;
use App\User;

class WalletController
{
    public function index(Request $request, User $user)
    {
        /**
         * Lista todos os consumidores associados ao usuário
         */
        $consumidores = $user->consumidoresLista
            ->map(function($item) {
                return $item->id;
            })
            ->flatten()
            ->toArray();

        /**
         * Lista todos os guias que o usuário possui pontos
         */
        $guias = Pontos::with('guia', 'guia.empresa')
            ->whereIn('consumidor_id', $consumidores)
            ->groupBy('guia_id')
            ->get()
            ->map(function($item) {
                return $item->guia;
            })
            ->flatten();

        $pontos = [];

        /**
         * Percorre todos os guias e salva os pontos para cada guia
         * a fim de separar os pontos por guias
         */
        foreach ($guias as $guia) {
            $pontos[$guia->id] = [
                'points' => 0,
                'cashback' => 0,
                'available_points' => 0
            ];

            /**
             * Lista todos os pontos que o usuário possui para este guia
             */
            $pontosGuia = Pontos::whereIn('consumidor_id', $consumidores)
                ->where('guia_id', $guia->id)
                ->get();

            foreach ($pontosGuia as $pontoGuia) {
                $pontos[$guia->id]['points'] += $pontoGuia->pontos;
                $pontos[$guia->id]['cashback'] += $pontoGuia->valor;
                $pontos[$guia->id]['available_points'] += $pontoGuia->pontos;
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Dados da carteira obtidos com sucesso!',
            'data' => [
                'stores' => $guias,
                'points' => $pontos
            ]
        ], 200);
    }
}