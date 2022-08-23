<?php

namespace ZarulIzham\Wablas;

use Illuminate\Support\Facades\Http;
use ZarulIzham\Wablas\Models\DeviceInfo;
use ZarulIzham\Wablas\Models\SendMessage;

class Wablas
{
    private $url;

    private $token;

    public function __construct()
    {
        $this->url = config('wablas.url');
        $this->token = config('wablas.token');
    }

    public function getDeviceInfo()
    {
        $url = $this->url . "/api/device/info?token=" . $this->token;
        $response = Http::get($url);

        return new DeviceInfo((array) $response->object());
    }

    public function sendMessage($phone, $message)
    {
        $url = $this->url . "/api/send-message";

        $response = Http::withoutVerifying()
            ->withHeaders([
                'Authorization' => config('wablas.token'),
            ])
            ->asForm()
            ->post($url, [
                'phone' => $phone,
                'message' => $message,
                'spintax' => true,
            ]);

        return new SendMessage((array) $response->object());
    }
}
