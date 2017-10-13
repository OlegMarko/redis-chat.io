<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ChatController extends Controller
{

    /**
     * Sending message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendMessage()
    {
        $redis = Redis::connection();

        $data = [
            'message' => request('message'),
            'user' => request('user')
        ];

        $redis->publish(
            'message',
            json_encode($data)
        );

        return response()->json(['message' => 'ok'], 200);
    }
}
