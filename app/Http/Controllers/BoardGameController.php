<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BoardGameController extends Controller
{

    public function index()
    {
        $client = new Client();
        try {
            $response = $client->get('http://127.0.0.1:9000/api/board-games');
            if ($response->getStatusCode() === 200) {
                $boardGames = json_decode($response->getBody(), true); // Le met sous forme de tableau associatif
            } else {
                $boardGames = [];
            }
        } catch (\Exception $e) {
            $boardGames = [];
            report($e);
        }

        return view('boardgame.index', compact('boardGames'));
    }

}
