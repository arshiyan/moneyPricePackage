<?php

Route::get('buyUSD', 'arshiyan\moneyprice\Http\controllers\MoneyPriceController@buyUSD');
Route::get('sellUSD', 'arshiyan\moneyprice\Http\controllers\MoneyPriceController@sellUSD');
Route::get('buyEUR', 'arshiyan\moneyprice\Http\controllers\MoneyPriceController@buyEUR');
Route::get('sellEUR', 'arshiyan\moneyprice\Http\controllers\MoneyPriceController@sellEUR');
Route::get('buyAED', 'arshiyan\moneyprice\Http\controllers\MoneyPriceController@buyAED');
Route::get('sellAED', 'arshiyan\moneyprice\Http\controllers\MoneyPriceController@sellAED');


?>
