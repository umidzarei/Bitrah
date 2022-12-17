<h1 align="center">Bitrah Gateway Laravel Package</h1>


## Install
```
composer require akoteam/bitrah
```

## Samples
### Payment

```php
$result = Bitrah::start_payment(orderId '1',rialValue '270000000', callbackurl 'http://your-domain.ir/path/to/callback', webhookkurl 'http://your-domain.ir/path/to/webhook');
/*
$result is : 
[
'data'=>[
        'token'=>'0d0cd5a0445647asdasdcff2c48ad69e7',
        'redirectUrl'=>https://www.bitrah.ir/en/BitrahTestAccount?token=0d0cd5a044564783asc48ad69e7&mode=off&coin=BTC&amount=25000'',
        'multiCoinRedirectUrl'=>'https://www.bitrah.ir/en/BitrahTestAccount?token=0d0cd5asdcccff2c48ad69e7&mode=on&coin=BTC&amount=25000',
        'refId'=>'2547'
    ],
'message'=>'Successfully done!',
'timesatmp'=>'2020-11-14T06:56:43.646+0000',
'success'=>'true'
];
*/
```

You must save the information obtained from API in your database.

*Note:* the `refId` and `token` should not exist in your database.

Then you need to redirect the user to the `redirectUrl` received from the API; The user enters the Bitrah payment page.

After paying, the user returns to the provided `callbackurl`.
At this stage, you should check that this request has not been processed before.
Finally, after your webhook is confirmed, it will be called by Baitrah

### Check Status
You can also specify the status of your transaction using the `refId` at any time using the method below:

```php
$result = Bitrah::check_status($refId);
/*
$result is: 
array:4 [▼
  "data" => array:5 [▼
    "status" => 2
    "orderId" => "1"
    "refId" => "4805"
    "coin" => "TRX"
    "value" => "3.293901000"
  ]
  "message" => "Successfully done!"
  "timestamp" => "2020-11-22T07:16:15.936+0000"
  "success" => true
]
*/
```

## Documentation
[documentation](https://www.bitrah.ir/en/doc).

## Changelog
## v1.0.0

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
