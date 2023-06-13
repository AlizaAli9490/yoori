<?php

return [
    'paginate'              => 5, //for all index pagination
    'api_paginate'          => 15, //for all api parcel Listing
    'index_form_paginate'   => 10, //for all api parcel Listing
    'media_paginate'        => 32, //for all api parcel Listing
    'settings'              => [],
    // length 164

    'setting_by_lang'       => ['system_name',
                                'meta_title',
                                'meta_description',
                                'keyword',
                                'article',
                                'cookies_agreement',
                                'popup_title',
                                'popup_description',
                                'about_description',
                                'copyright',
                                'home_page_article',
                                'admin_panel_title',
                                'admin_panel_copyright_text',
                                'system_short_name',
                                'is_pos_activated_for_seller',
                                'pos_invoice_title',
                                'pos_invoice_address',
                                'pos_invoice_terms_condition',
                                'pos_invoice_phone',
                                'pos_invoice_powered_by',
                                'refund_protection_title',
                                'refund_protection_sub_title',
                            ],
    'setting_image'       => [  'favicon',
                                'og_image',
                                'popup_image',
                                'light_logo',
                                'dark_logo',
                                'invoice_logo',
                                'banner_image',
                                'footer_logo',
                                'payment_method_banner',
                                'refund_sticker',
                                'admin_light_logo',
                                'admin_dark_logo',
                                'service_image'
                            ],
    'setting_array'         => [
                                'header_menu',
                                'footer_menu',
                                'useful_links',
                                'home_page_contents',
                                'mobile_home_page_contents',
                                'login_banner',
                                'sing_up_banner',
                                'forgot_password_banner',
                                'top_bar_banner',
                                'user_dashboard_banner',
                                'seller_sing_up_banner',
                                'product_details_site_banner',
                                'category_default_banner',
                                'featured_category_banner',
                                'invoice_based_shipping_fee',
                                ],

    'is_twilio_sms_activated'  => [
                                'twilio_sms_sid',
                                'twilio_sms_auth_token',
//                               'twilio_sms_verify_sid',
                                'valid_twilio_sms_number',
                                ],
    'is_fast_2_activated'      => [
                                    'fast_2_auth_key',
                                    'fast_2_entity_id',
                                    'fast_2_route',
                                    'fast_2_language',
                                    'fast_2_sender_id',
                                ],
    'is_spagreen_sms_activated'      => [
                                    'spagreen_sms_api_key',
                                    'spagreen_secret_key',
                                ],
    'is_mimo_sms_activated'     => [
                                    'mimo_username',
                                    'mimo_sms_password',
                                    'mimo_sms_sender_id',

                                ],
    'is_nexmo_sms_activated'    => [
                                    'nexmo_sms_key',
                                    'nexmo_sms_secret_key',
                                ],
    'is_ssl_wireless_sms_activated' => [
                                    'ssl_sms_api_token',
                                    'ssl_sms_sid',
                                    'ssm_sms_url',
                                    ],

                'is_paypal_activated' => [
                                    'paypal_client_id',
                                    ],
                'is_stripe_activated' => [
                                    'stripe_key',
                                    'stripe_secret',
                                    ],
                'is_sslcommerz_activated' => [
                                    'sslcommerz_id',
                                    'sslcommerz_password'
                                    ],
                'is_sslcommerz_sandbox_mode_activated' => [
                                    'sslcommerz_id',
                                    'sslcommerz_password'
                                    ],
                'is_paytm_activated' => [
                                    'merchant_id',
                                    'merchant_key',
                                    'merchant_website',
                                    'channel',
                                    'industry_type',
                                     ],
                'is_jazz_cash_activated' => [
                                    'jazz_cash_merchant_id',
                                    'jazz_cash_password',
                                    'jazz_cash_integrity_salt',
                                     ],
                'is_razorpay_activated' => [
                                    'razorpay_key',
                                    'razorpay_secret',
                                     ],
                'is_mollie_activated' => [
                                    'mollie_api_key',
                                    'mollie_partner_id',
                                    'mollie_profile_id',

                                    ],

                    'is_paystack_activated' => [
                        'paystack_secret_key',
                        'paystack_public_key',

                    ],
                    'is_flutterwave_activated' => [
                        'flutterwave_secret_key',
                        'flutterwave_public_key',

                    ],
                    'is_mercado_pago_activated' => [
                        'mercadopago_access_key',
                        'mercadopago_key',

                    ],
                    'is_mid_trans_activated' => [
                        'mid_trans_client_id',
                        'mid_trans_server_key',
                    ],
                    'is_telr_activated' => [
                        'telr_store_id',
                        'telr_auth_key',
                    ],
                    'is_google_pay_activated' => [
                        'google_pay_merchant_name',
                        'google_pay_merchant_id',
                        'google_pay_gateway',
                        'google_pay_gateway_merchant_id',
                    ],
                    'is_amarpay_activated' => [
                        'amrapay_store_id',
                        'amarpay_signature_key'
                    ],
                    'is_amarpay_sandbox_mode_activated' => [
                        'amrapay_store_id',
                        'amarpay_signature_key'
                    ],
                    'is_bkash_activated' => [
                        'bkash_app_key',
                        'bkash_app_secret',
                        'bkash_username',
                        'bkash_password'
                    ],
                    'is_bkash_sandbox_mode_activated' => [
                        'bkash_app_key',
                        'bkash_app_secret',
                        'bkash_username',
                        'bkash_password'
                    ],
                    'is_nagad_activated' => [
                        'nagad_mode',
                        'nagad_merchant_id',
                        'nagad_merchant_no',
                        'nagad_public_key',
                        'nagad_private_key'
                    ],
                    'is_nagad_sandbox_mode_activated' => [
                        'nagad_mode',
                        'nagad_merchant_id',
                        'nagad_merchant_no',
                        'nagad_public_key',
                        'nagad_private_key'
                    ],
                    'is_iyzico_activated' => [
                        'iyzico_api_key',
                        'iyzico_secret_key'
                    ],
                    'is_iyzico_sandbox_enabled' => [
                        'iyzico_api_key',
                        'iyzico_secret_key'
                    ],
                    'is_kkiapay_activated' => [
                        'kkiapay_public_api_key',
                        'kkiapay_private_api_key',
                        'kkiapay_secret'
                    ],
                    'is_kkiapay_sandbox_enabled' => [
                        'kkiapay_public_api_key',
                        'kkiapay_private_api_key',
                        'kkiapay_secret'
                    ],
                    'is_skrill_activated' => [
                        'skrill_merchant_email'
                    ],
                'is_facebook_pixel_activated' => [
                                    'facebook_pixel_id',
                                    ],
                'is_google_analytics_activated' => [
                                    'tracking_code',
                                    ],
//    for seller module
                    'is_bank_active' => [
                                    'bank_name',
                                    'owner_name',
                                    'bank_phone_no',
                                    'branch',
                                    'account_number',
                                    'routing_no',
                                    ],
                    'is_paypal_active' => [
                                    'paypal_email',
                                    ],

                    'is_google_login_activated'    => [
                        'google_client_id',
                        'google_client_secret',
                    ],

                    'is_facebook_login_activated'    => [
                        'facebook_client_id',
                        'facebook_client_secret',
                    ],

                    'is_twitter_login_activated'    => [
                        'twitter_client_id',
                        'twitter_client_secret',
                    ],

                    'is_recaptcha_activated'    => [
                        'recaptcha_Site_key',
                        'recaptcha_secret',
                    ],
                    'is_pusher_notification_active'    => [
                        'pusher_app_id',
                        'pusher_app_key',
                        'pusher_app_secret',
                        'pusher_app_cluster',
                    ],

    'currency_list' => [
                        "AFA"   => [ "name"=>"Afghan Afghani","symbol"=>"؋" ],
                        "ALL"   => [ "name"=>"Albanian Lek","symbol"=>"Lek" ],
                        "DZD"   => [ "name"=>"Algerian Dinar","symbol"=>"دج" ],
                        "AOA"   => [ "name"=>"Angolan Kwanza","symbol"=>"Kz" ],
                        "ARS"   => [ "name"=>"Argentine Peso","symbol"=>"$" ],
                        "AMD"   => [ "name"=>"Armenian Dram","symbol"=>"֏" ],
                        "AWG"   => [ "name"=>"Aruban Florin","symbol"=>"ƒ" ],
                        "AUD"   => [ "name"=>"Australian Dollar","symbol"=>"$" ],
                        "AZN"   => [ "name"=>"Azerbaijani Manat","symbol"=>"m" ],
                        "BSD"   => [ "name"=>"Bahamian Dollar","symbol"=>"B$" ],
                        "BHD"   => [ "name"=>"Bahraini Dinar","symbol"=>".د.ب" ],
                        "BDT"   => [ "name"=>"Bangladeshi Taka","symbol"=>"৳" ],
                        "BBD"   => [ "name"=>"Barbadian Dollar","symbol"=>"Bds$" ],
                        "BYR"   => [ "name"=>"Belarusian Ruble","symbol"=>"Br" ],
                        "BEF"   => [ "name"=>"Belgian Franc","symbol"=>"fr" ],
                        "BZD"   => [ "name"=>"Belize Dollar","symbol"=>"$" ],
                        "BMD"   => [ "name"=>"Bermudan Dollar","symbol"=>"$" ],
                        "BTN"   => [ "name"=>"Bhutanese Ngultrum","symbol"=>"Nu." ],
                        "BTC"   => [ "name"=>"Bitcoin","symbol"=>"฿" ],
                        "BOB"   => [ "name"=>"Bolivian Boliviano","symbol"=>"Bs." ],
                        "BAM"   => [ "name"=>"Bosnia-Herzegovina Convertible Mark","symbol"=>"KM" ],
                        "BWP"   => [ "name"=>"Botswanan Pula","symbol"=>"P" ],
                        "BRL"   => [ "name"=>"Brazilian Real","symbol"=>"R$" ],
                        "GBP"   => [ "name"=>"British Pound Sterling","symbol"=>"£" ],
                        "BND"   => [ "name"=>"Brunei Dollar","symbol"=>"B$" ],
                        "BGN"   => [ "name"=>"Bulgarian Lev","symbol"=>"Лв." ],
                        "BIF"   => [ "name"=>"Burundian Franc","symbol"=>"FBu" ],
                        "KHR"   => [ "name"=>"Cambodian Riel","symbol"=>"KHR" ],
                        "CAD"   => [ "name"=>"Canadian Dollar","symbol"=>"$" ],
                        "CVE"   => [ "name"=>"Cape Verdean Escudo","symbol"=>"$" ],
                        "KYD"   => [ "name"=>"Cayman Islands Dollar","symbol"=>"$" ],
                        "XOF"   => [ "name"=>"CFA Franc BCEAO","symbol"=>"CFA" ],
                        "XAF"   => [ "name"=>"CFA Franc BEAC","symbol"=>"FCFA" ],
                        "XPF"   => [ "name"=>"CFP Franc","symbol"=>"₣" ],
                        "CLP"   => [ "name"=>"Chilean Peso","symbol"=>"$" ],
                        "CNY"   => [ "name"=>"Chinese Yuan","symbol"=>"¥" ],
                        "COP"   => [ "name"=>"Colombian Peso","symbol"=>"$" ],
                        "KMF"   => [ "name"=>"Comorian Franc","symbol"=>"CF" ],
                        "CDF"   => [ "name"=>"Congolese Franc","symbol"=>"FC" ],
                        "CRC"   => [ "name"=>"Costa Rican ColÃ³n","symbol"=>"₡" ],
                        "HRK"   => [ "name"=>"Croatian Kuna","symbol"=>"kn" ],
                        "CUC"   => [ "name"=>"Cuban Convertible Peso","symbol"=>"$, CUC" ],
                        "CZK"   => [ "name"=>"Czech Republic Koruna","symbol"=>"Kč" ],
                        "DKK"   => [ "name"=>"Danish Krone","symbol"=>"Kr." ],
                        "DJF"   => [ "name"=>"Djiboutian Franc","symbol"=>"Fdj" ],
                        "DOP"   => [ "name"=>"Dominican Peso","symbol"=>"$" ],
                        "XCD"   => [ "name"=>"East Caribbean Dollar","symbol"=>"$" ],
                        "EGP"   => [ "name"=>"Egyptian Pound","symbol"=>"ج.م" ],
                        "ERN"   => [ "name"=>"Eritrean Nakfa","symbol"=>"Nfk" ],
                        "EEK"   => [ "name"=>"Estonian Kroon","symbol"=>"kr" ],
                        "ETB"   => [ "name"=>"Ethiopian Birr","symbol"=>"Nkf" ],
                        "EUR"   => [ "name"=>"Euro","symbol"=>"€" ],
                        "FKP"   => [ "name"=>"Falkland Islands Pound","symbol"=>"£" ],
                        "FJD"   => [ "name"=>"Fijian Dollar","symbol"=>"FJ$" ],
                        "GMD"   => [ "name"=>"Gambian Dalasi","symbol"=>"D" ],
                        "GEL"   => [ "name"=>"Georgian Lari","symbol"=>"ლ" ],
                        "DEM"   => [ "name"=>"German Mark","symbol"=>"DM" ],
                        "GHS"   => [ "name"=>"Ghanaian Cedi","symbol"=>"GH₵" ],
                        "GIP"   => [ "name"=>"Gibraltar Pound","symbol"=>"£" ],
                        "GRD"   => [ "name"=>"Greek Drachma","symbol"=>"₯, Δρχ, Δρ" ],
                        "GTQ"   => [ "name"=>"Guatemalan Quetzal","symbol"=>"Q" ],
                        "GNF"   => [ "name"=>"Guinean Franc","symbol"=>"FG" ],
                        "GYD"   => [ "name"=>"Guyanaese Dollar","symbol"=>"$" ],
                        "HTG"   => [ "name"=>"Haitian Gourde","symbol"=>"G" ],
                        "HNL"   => [ "name"=>"Honduran Lempira","symbol"=>"L" ],
                        "HKD"   => [ "name"=>"Hong Kong Dollar","symbol"=>"$" ],
                        "HUF"   => [ "name"=>"Hungarian Forint","symbol"=>"Ft" ],
                        "ISK"   => [ "name"=>"Icelandic KrÃ³na","symbol"=>"kr" ],
                        "INR"   => [ "name"=>"Indian Rupee","symbol"=>"₹" ],
                        "IDR"   => [ "name"=>"Indonesian Rupiah","symbol"=>"Rp" ],
                        "IRR"   => [ "name"=>"Iranian Rial","symbol"=>"﷼" ],
                        "IQD"   => [ "name"=>"Iraqi Dinar","symbol"=>"د.ع" ],
                        "ILS"   => [ "name"=>"Israeli New Sheqel","symbol"=>"₪" ],
                        "ITL"   => [ "name"=>"Italian Lira","symbol"=>"L,£" ],
                        "JMD"   => [ "name"=>"Jamaican Dollar","symbol"=>"J$" ],
                        "JPY"   => [ "name"=>"Japanese Yen","symbol"=>"¥" ],
                        "JOD"   => [ "name"=>"Jordanian Dinar","symbol"=>"ا.د" ],
                        "KZT"   => [ "name"=>"Kazakhstani Tenge","symbol"=>"лв" ],
                        "KES"   => [ "name"=>"Kenyan Shilling","symbol"=>"KSh" ],
                        "KWD"   => [ "name"=>"Kuwaiti Dinar","symbol"=>"ك.د" ],
                        "KGS"   => [ "name"=>"Kyrgystani Som","symbol"=>"лв" ],
                        "LAK"   => [ "name"=>"Laotian Kip","symbol"=>"₭" ],
                        "LVL"   => [ "name"=>"Latvian Lats","symbol"=>"Ls" ],
                        "LBP"   => [ "name"=>"Lebanese Pound","symbol"=>"£" ],
                        "LSL"   => [ "name"=>"Lesotho Loti","symbol"=>"L" ],
                        "LRD"   => [ "name"=>"Liberian Dollar","symbol"=>"$" ],
                        "LYD"   => [ "name"=>"Libyan Dinar","symbol"=>"د.ل" ],
                        "LTL"   => [ "name"=>"Lithuanian Litas","symbol"=>"Lt" ],
                        "MOP"   => [ "name"=>"Macanese Pataca","symbol"=>"$" ],
                        "MKD"   => [ "name"=>"Macedonian Denar","symbol"=>"ден" ],
                        "MGA"   => [ "name"=>"Malagasy Ariary","symbol"=>"Ar" ],
                        "MWK"   => [ "name"=>"Malawian Kwacha","symbol"=>"MK" ],
                        "MYR"   => [ "name"=>"Malaysian Ringgit","symbol"=>"RM" ],
                        "MVR"   => [ "name"=>"Maldivian Rufiyaa","symbol"=>"Rf" ],
                        "MRO"   => [ "name"=>"Mauritanian Ouguiya","symbol"=>"MRU" ],
                        "MUR"   => [ "name"=>"Mauritian Rupee","symbol"=>"₨" ],
                        "MXN"   => [ "name"=>"Mexican Peso","symbol"=>"$" ],
                        "MDL"   => [ "name"=>"Moldovan Leu","symbol"=>"L" ],
                        "MNT"   => [ "name"=>"Mongolian Tugrik","symbol"=>"₮" ],
                        "MAD"   => [ "name"=>"Moroccan Dirham","symbol"=>"MAD" ],
                        "MZM"   => [ "name"=>"Mozambican Metical","symbol"=>"MT" ],
                        "MMK"   => [ "name"=>"Myanmar Kyat","symbol"=>"K" ],
                        "NAD"   => [ "name"=>"Namibian Dollar","symbol"=>"$" ],
                        "NPR"   => [ "name"=>"Nepalese Rupee","symbol"=>"₨" ],
                        "ANG"   => [ "name"=>"Netherlands Antillean Guilder","symbol"=>"ƒ" ],
                        "TWD"   => [ "name"=>"New Taiwan Dollar","symbol"=>"$" ],
                        "NZD"   => [ "name"=>"New Zealand Dollar","symbol"=>"$" ],
                        "NIO"   => [ "name"=>"Nicaraguan CÃ³rdoba","symbol"=>"C$" ],
                        "NGN"   => [ "name"=>"Nigerian Naira","symbol"=>"₦" ],
                        "KPW"   => [ "name"=>"North Korean Won","symbol"=>"₩" ],
                        "NOK"   => [ "name"=>"Norwegian Krone","symbol"=>"kr" ],
                        "OMR"   => [ "name"=>"Omani Rial","symbol"=>".ع.ر" ],
                        "PKR"   => [ "name"=>"Pakistani Rupee","symbol"=>"₨" ],
                        "PAB"   => [ "name"=>"Panamanian Balboa","symbol"=>"B/." ],
                        "PGK"   => [ "name"=>"Papua New Guinean Kina","symbol"=>"K" ],
                        "PYG"   => [ "name"=>"Paraguayan Guarani","symbol"=>"₲" ],
                        "PEN"   => [ "name"=>"Peruvian Nuevo Sol","symbol"=>"S/." ],
                        "PHP"   => [ "name"=>"Philippine Peso","symbol"=>"₱" ],
                        "PLN"   => [ "name"=>"Polish Zloty","symbol"=>"zł" ],
                        "QAR"   => [ "name"=>"Qatari Rial","symbol"=>"ق.ر" ],
                        "RON"   => [ "name"=>"Romanian Leu","symbol"=>"lei" ],
                        "RUB"   => [ "name"=>"Russian Ruble","symbol"=>"₽" ],
                        "RWF"   => [ "name"=>"Rwandan Franc","symbol"=>"FRw" ],
                        "SVC"   => [ "name"=>"Salvadoran ColÃ³n","symbol"=>"₡" ],
                        "WST"   => [ "name"=>"Samoan Tala","symbol"=>"SAT" ],
                        "SAR"   => [ "name"=>"Saudi Riyal","symbol"=>"﷼" ],
                        "RSD"   => [ "name"=>"Serbian Dinar","symbol"=>"din" ],
                        "SCR"   => [ "name"=>"Seychellois Rupee","symbol"=>"SRe" ],
                        "SLL"   => [ "name"=>"Sierra Leonean Leone","symbol"=>"Le" ],
                        "SGD"   => [ "name"=>"Singapore Dollar","symbol"=>"$" ],
                        "SKK"   => [ "name"=>"Slovak Koruna","symbol"=>"Sk" ],
                        "SBD"   => [ "name"=>"Solomon Islands Dollar","symbol"=>"Si$" ],
                        "SOS"   => [ "name"=>"Somali Shilling","symbol"=>"Sh.so." ],
                        "ZAR"   => [ "name"=>"South African Rand","symbol"=>"R" ],
                        "KRW"   => [ "name"=>"South Korean Won","symbol"=>"₩" ],
                        "XDR"   => [ "name"=>"Special Drawing Rights","symbol"=>"SDR" ],
                        "LKR"   => [ "name"=>"Sri Lankan Rupee","symbol"=>"Rs" ],
                        "SHP"   => [ "name"=>"St. Helena Pound","symbol"=>"£" ],
                        "SDG"   => [ "name"=>"Sudanese Pound","symbol"=>".س.ج" ],
                        "SRD"   => [ "name"=>"Surinamese Dollar","symbol"=>"$" ],
                        "SZL"   => [ "name"=>"Swazi Lilangeni","symbol"=>"E" ],
                        "SEK"   => [ "name"=>"Swedish Krona","symbol"=>"kr" ],
                        "CHF"   => [ "name"=>"Swiss Franc","symbol"=>"CHf" ],
                        "SYP"   => [ "name"=>"Syrian Pound","symbol"=>"LS" ],
                        "STD"   => [ "name"=>"São Tomé and Príncipe Dobra","symbol"=>"Db" ],
                        "TJS"   => [ "name"=>"Tajikistani Somoni","symbol"=>"SM" ],
                        "TZS"   => [ "name"=>"Tanzanian Shilling","symbol"=>"TSh" ],
                        "THB"   => [ "name"=>"Thai Baht","symbol"=>"฿" ],
                        "TOP"   => [ "name"=>"Tongan Pa'anga","symbol"=>"$" ],
                        "TTD"   => [ "name"=>"Trinidad & Tobago Dollar","symbol"=>"$" ],
                        "TND"   => [ "name"=>"Tunisian Dinar","symbol"=>"ت.د" ],
                        "TRY"   => [ "name"=>"Turkish Lira","symbol"=>"₺" ],
                        "TMT"   => [ "name"=>"Turkmenistani Manat","symbol"=>"T" ],
                        "UGX"   => [ "name"=>"Ugandan Shilling","symbol"=>"USh" ],
                        "UAH"   => [ "name"=>"Ukrainian Hryvnia","symbol"=>"₴" ],
                        "AED"   => [ "name"=>"United Arab Emirates Dirham","symbol"=>"إ.د" ],
                        "UYU"   => [ "name"=>"Uruguayan Peso","symbol"=>"$" ],
                        "USD"   => [ "name"=>"US Dollar","symbol"=>"$" ],
                        "UZS"   => [ "name"=>"Uzbekistan Som","symbol"=>"лв" ],
                        "VUV"   => [ "name"=>"Vanuatu Vatu","symbol"=>"VT" ],
                        "VEF"   => [ "name"=>"Venezuelan BolÃvar","symbol"=>"Bs" ],
                        "VND"   => [ "name"=>"Vietnamese Dong","symbol"=>"₫" ],
                        "YER"   => [ "name"=>"Yemeni Rial","symbol"=>"﷼" ],
                        "ZMK"   => [ "name"=>"Zambian Kwacha","symbol"=>"ZK" ]
                        ],
    'supported_mimes'       => [
                                    "jpg"   => "image",
                                    "jpeg"  => "image",
                                    "png"   => "image",
                                    "webp"  => "image",
                                    "gif"   => "image",
                                    "mp4"   => "video",
                                    "mpg"   => "video",
                                    "mpeg"  => "video",
                                    "webm"  => "video",
                                    "ogg"   => "video",
                                    "avi"   => "video",
                                    "mov"   => "video",
                                    "flv"   => "video",
                                    "swf"   => "video",
                                    "mkv"   => "video",
                                    "wmv"   => "video",
                                    "wma"   => "audio",
                                    "aac"   => "audio",
                                    "wav"   => "audio",
                                    "mp3"   => "audio",
                                    "zip"   => "archive",
                                    "rar"   => "archive",
                                    "7z"    => "archive",
                                    "doc"   => "document",
                                    "txt"   => "document",
                                    "docx"  => "document",
                                    "pdf"   => "pdf",
                                    "csv"   => "document",
                                    "xml"   => "document",
                                    "ods"   => "document",
                                    "xlr"   => "document",
                                    "xls"   => "document",
                                    "xlsx"  => "document"
                                ],
    'locale'                   => [
                                    'ace',
                                    'af' ,
                                    'agq',
                                    'ak' ,
                                    'an' ,
                                    'cch',
                                    'gn' ,
                                    'ae' ,
                                    'ay' ,
                                    'az' ,
                                    'id' ,
                                    'ms' ,
                                    'bm' ,
                                    'jv' ,
                                    'su' ,
                                    'bh' ,
                                    'bi' ,
                                    'nb' ,
                                    'bs' ,
                                    'bd' ,
                                    'br' ,
                                    'ca' ,
                                    'ch' ,
                                    'ny' ,
                                    'kde',
                                    'sn' ,
                                    'co' ,
                                    'cy' ,
                                    'da' ,
                                    'se' ,
                                    'de' ,
                                    'luo',
                                    'nv' ,
                                    'dua',
                                    'et' ,
                                    'na' ,
                                    'guz',
                                    'en' ,
                                    'en-AU',
                                    'en-GB',
                                    'en-CA',
                                    'en-US',
                                    'es'  ,
                                    'eo'  ,
                                    'eu'  ,
                                    'ewo' ,
                                    'ee'  ,
                                    'fil' ,
                                    'fr'  ,
                                    'fr-CA' ,
                                    'fy'  ,
                                    'fur' ,
                                    'fo'  ,
                                    'gaa' ,
                                    'ga'  ,
                                    'gv'  ,
                                    'sm'  ,
                                    'gl'  ,
                                    'ki'  ,
                                    'gd'  ,
                                    'ha'  ,
                                    'bez' ,
                                    'ho'  ,
                                    'hr'  ,
                                    'bem' ,
                                    'io'  ,
                                    'ig'  ,
                                    'rn'  ,
                                    'ia'  ,
                                    'in'  ,
                                    'iu-Latn',
                                    'sbp' ,
                                    'nd'  ,
                                    'nr'  ,
                                    'xh'  ,
                                    'zu'  ,
                                    'it'  ,
                                    'ik'  ,
                                    'dyo' ,
                                    'kea' ,
                                    'kaj' ,
                                    'mh'  ,
                                    'kl'  ,
                                    'kln' ,
                                    'kr'  ,
                                    'kcg' ,
                                    'kw'  ,
                                    'naq' ,
                                    'rof' ,
                                    'kam' ,
                                    'kg'  ,
                                    'jmc' ,
                                    'rw'  ,
                                    'asa' ,
                                    'rwk' ,
                                    'saq' ,
                                    'ksb' ,
                                    'swc' ,
                                    'sw'  ,
                                    'dav' ,
                                    'teo' ,
                                    'khq' ,
                                    'ses' ,
                                    'mfe' ,
                                    'ht'  ,
                                    'kj'  ,
                                    'ksh' ,
                                    'ebu' ,
                                    'mer' ,
                                    'lag' ,
                                    'lah' ,
                                    'la'  ,
                                    'lv'  ,
                                    'to'  ,
                                    'lt'  ,
                                    'li'  ,
                                    'ln'  ,
                                    'lg'  ,
                                    'luy' ,
                                    'lb'  ,
                                    'hu'  ,
                                    'mgh' ,
                                    'mg'  ,
                                    'mt'  ,
                                    'mtr' ,
                                    'mua' ,
                                    'mi'  ,
                                    'nl'  ,
                                    'nmg' ,
                                    'yav' ,
                                    'nn'  ,
                                    'oc'  ,
                                    'ang' ,
                                    'xog' ,
                                    'om'  ,
                                    'ng'  ,
                                    'hz'  ,
                                    'uz-Latn',
                                    'nds',
                                    'pl' ,
                                    'pt' ,
                                    'pt-BR' ,
                                    'ff'  ,
                                    'pi'  ,
                                    'aa'  ,
                                    'ty'  ,
                                    'ksf' ,
                                    'ro'  ,
                                    'cgg' ,
                                    'rm'  ,
                                    'qu'  ,
                                    'nyn' ,
                                    'ssy' ,
                                    'sc'  ,
                                    'de-CH' ,
                                    'gsw' ,
                                    'trv' ,
                                    'seh' ,
                                    'nso' ,
                                    'st'  ,
                                    'tn'  ,
                                    'sq'  ,
                                    'sid' ,
                                    'ss'  ,
                                    'sk'  ,
                                    'sl'  ,
                                    'so'  ,
                                    'sr-Latn' ,
                                    'sh' ,
                                    'fi' ,
                                    'sv' ,
                                    'sg' ,
                                    'tl' ,
                                    'tzm-Latn',
                                    'kab' ,
                                    'twq' ,
                                    'shi' ,
                                    'nus' ,
                                    'vi'  ,
                                    'tg-Latn',
                                    'lu'  ,
                                    've'  ,
                                    'tw'  ,
                                    'tr'  ,
                                    'ale' ,
                                    'ca-valencia',
                                    'vai-Latn'  ,
                                    'vo' ,
                                    'fj' ,
                                    'wa' ,
                                    'wae',
                                    'wen',
                                    'wo' ,
                                    'ts' ,
                                    'dje',
                                    'yo' ,
                                     'de-AT',
                                    'is',
                                    'cs',
                                    'bas' ,
                                    'mas' ,
                                    'haw' ,
                                    'el'  ,
                                    'uz'  ,
                                    'az-Cyrl',
                                    'ab' ,
                                    'os' ,
                                    'ky' ,
                                    'sr' ,
                                    'av' ,
                                    'ady',
                                    'ba' ,
                                    'be' ,
                                    'bg' ,
                                    'kv' ,
                                    'mk' ,
                                    'mn' ,
                                    'ce' ,
                                    'ru' ,
                                    'sah',
                                    'tt' ,
                                    'tg' ,
                                    'tk' ,
                                    'uk' ,
                                    'cv' ,
                                    'cu' ,
                                    'kk' ,
                                    'hy' ,
                                    'yi' ,
                                    'he' ,
                                    'ug' ,
                                    'ur' ,
                                    'ar' ,
                                    'uz-Arab',
                                    'tg-Arab',
                                    'sd',
                                    'fa',
                                    'pa-Arab',
                                    'ps',
                                    'ks',
                                    'ku',
                                    'dv',
                                    'ks-Deva',
                                    'kok',
                                    'doi',
                                    'ne' ,
                                    'pra',
                                    'brx',
                                    'bra',
                                    'mr' ,
                                    'mai',
                                    'raj',
                                    'sa' ,
                                    'hi' ,
                                    'as' ,
                                    'bn' ,
                                    'mni',
                                    'pa' ,
                                    'gu' ,
                                    'or' ,
                                    'ta' ,
                                    'te' ,
                                    'kn' ,
                                    'ml' ,
                                    'si' ,
                                    'th' ,
                                    'lo' ,
                                    'bo' ,
                                    'dz' ,
                                    'my' ,
                                    'ka' ,
                                    'byn',
                                    'tig',
                                    'ti' ,
                                    'am' ,
                                    'wal',
                                    'chr',
                                    'iu' ,
                                    'oj' ,
                                    'cr' ,
                                    'km' ,
                                    'mn-Mong',
                                    'shi-Tfng',
                                    'tzm',
                                    'yue',
                                    'ja',
                                    'zh',
                                    'zh-Hant',
                                    'ii',
                                    'vai',
                                    'jv-Java',
                                    'ko'
                                ]
];
