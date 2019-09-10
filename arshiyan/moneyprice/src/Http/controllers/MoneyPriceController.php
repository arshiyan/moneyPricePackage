<?php

namespace arshiyan\moneyprice\Http\controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MoneyPriceController extends Controller
{
    public $apiUrl = "https://www.megaweb.ir/api/money";

    /**
     * @return false|string
     */
    public function getConetnt()
    {
        $priceList = file_get_contents($this->apiUrl);
        return $priceList;
    }

    /**
     * @return price of buy USD
     */
    public function buyUSD()
    {
        return json_decode($this->getConetnt())->buy_usd->price;
    }

    /**
     * @return price of sell USD
     */
    public function sellUSD()
    {
        return json_decode($this->getConetnt())->sell_usd->price;
    }

    /**
     * @return price of buy EUR
     */
    public function buyEUR()
    {
        return json_decode($this->getConetnt())->buy_eur->price;
    }

    /**
     * @return price of sell EUR
     */
    public function sellEUR()
    {
        return json_decode($this->getConetnt())->sell_eur->price;
    }

    /**
     * @return price of buy AED
     */
    public function buyAED()
    {
        return json_decode($this->getConetnt())->buy_aed->price;
    }

    /**
     * @return price of sell AED
     */
    public function sellAED()
    {
        return json_decode($this->getConetnt())->sell_aed->price;
    }
}
