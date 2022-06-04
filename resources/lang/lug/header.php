<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Header Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used for various variables (messages)
    | that we need to display to the user. You are free to modify these
    | language lines according to your application's requirements.
    |
    */

    //PLEASE IF YOU FAIL TO TRANSLATE A WORD, JUST LEAVE IT!

    //------------------------------ CART --------------------------------
        //Checkout
            'address' => 'Ekifo',
            'checkout' => 'Sasula',
            'reception' => 'Awatuukirwa',
            'delivery_method' => 'Eby\'entambula',
            'payment_method' => 'Eby\'ensasula',
            'confirmation' => 'Okukakasa',
            'current_invoice_address' => 'EBIKUKWAATAKO N\'EKIFO',
            'remember_this_info' => 'Jjukira nti bino bigenda kulabikirako ku invoice yo',
            'yourname' => 'Erinnya Lyo',
            'yourphone' => 'Ennamba Y\'essimu',
            'youremail' => 'Email Yo',
            'street' => 'Ekkubo',
            'town' => 'Tawuni / Ekitundu',
            'district' => 'Disitulikiti',
            'choose_delivery' => 'Entambuza y\'ebintu byo',
            'pickup_station' => 'Okubikima',
            'pickup_station_note' => 'Ofuna ebintu byo ku lunaku olwo lwenyinni oba oluddako - y\'engeri esinga obwangu',
            'home_delivery' => 'Okubikuleetera',
            'home_delivery_note' =>'Lindirira okkuleetera ebintu byo ku mulyango gwo - tugenda kubikutusaako mubwangu',
            'choose_payment' => 'Eby\'ensasula',
            'thankyou_mtn' => 'Weebale kulonda MTN Mobile Money. Bambi gobelera emitendera gino osobole okusasulira ebintu byo',
            'simplified' => 'Ku masimu',
            'if_using' => 'Bwoba nga okozesa ssimu oba tab',
            'click_to_pay' => 'nyiga wano okusasula',
            'confirmation_prompt' => 'Ojja kusabibwa okukakasa ensindika ya ssente ezo, yingizamu PIN code yo eyekyama okukakasa.',
            'upon_payment' => 'Ng\'omaze bulungi okusasula ojja kufuna email erimu lisiti yo era olina okuba nga osobola n\'okulaba ennyimirira ya order yo.',
            'note' => 'MANYA NTI',
            'for_pc' => 'Eri mwenna abakozesa kompyuta, mu kaasera kano twagaddewo ensasula okuyita ku yintanenti ne API za MTN ne Airtel tusobole okunyweza eby\'obukuumi byaffe. Twetondedde nnyo bekikoseza',
            'continue_mtn' => 'Weyongereyo ne MTN Momo Pay',
            'cod' => 'Sasula Ng\'ofunye Ebintu',
            'cod_note' => 'Mu ngeri eno, osasula omukozi waffe aleese ebintu byo oluvannyuma lw\'okubikukwasa. Manya nti omuntu waffe oyo ajja kubuuza ID ya order yo nga tanakuwa bintu byo okusobola okukasa nti yegwe mwenyini.
                            Kakasa nti olina ssente ezo zenyini kubanga omukozi waffe ayinza okubulwa ssente z\'okkuddiza.',
            'pay_code' => 'Sasula Ng\'ofunye Ebintu Byo',
            'confirm_order' => 'Kakasa Order Yo',
            'order_summary' => 'Order Yo Mubufunze',
            'free_delivery' => 'Tukuleetera ebintu byo ku mulyango gwo kubweelere. Tukusasulira n\'omusolo ogujira ku bintu byo.',
            'quantity' => 'Omuwendo',
            'delivery_taxes' => 'Emisolo',
            'unitprice' => 'Bbeyi',
            'subtotal' => 'Bbeyi Y\'awamu',
            'overalltotal' => 'Omugatte',
            'order_statement' => 'Order Statement', //NEW ===========================================================================================
            'order_statement_note' => 'Do you have any extra information you need to tell us as you are placing this order?',  //NEW=================


        //Inline 404 Exceptions
            'pagenotfound' => 'Tusonyiwe wabula kyonoonya kitubuze!',
            'hello' => 'Gyebaleko',
            'cantfindpage' => 'Tulemereddwa okuzuula kyonoonya. Osanga wakoze ensobi mu "link" oba nga kyonoonya kya kyusibwa okuva wano.',
            'nothere' => 'N\'olwekyo tekiri wano!',
            'please_sc' => 'Bambi',
            'emailus' => 'tuweereze email osobole okuyambibwa',
            'start_from_reception' => 'tandikira kuntandikwa',
            'or' => 'oba',

    //------------------------------ LAYOUTS --------------------------------
        //navbar
            'language' => 'Olulimi',
            'search_query' => 'Gyebaleko, onoonya ki?',
            'search' => 'Noonya',
            'happyshopping' => 'Nyumirwa',
            'welcome' => 'Tukwanirizza',
            'myac' => 'Akawunti',
            'mycart' => 'Akasero',
            'total' => 'Omugatte',

        //footer
            'lets_talk' => 'Tukwatagane',
            'contactus' => 'Yogerako Naffe',
            'callrequest' => 'Saba Tukkubireko',
            'followus' => 'Tugoberere',
            'devby' => 'Yakolebwa',

        //app
            'view_all' => 'Ebisingawo',
            'categories' => 'Olukalala',
            'health_beauty' => 'Eby\'obulamu N\'obulungi', //New Category
            'fitness' => 'Kuuma Omubiri',
            'oralcare' => 'Eby\'okumumwa',
            'haircare' => 'Eby\'enviiri',
            'fragrances' => 'Obuwoowo',
            'makeup' => 'Eby\'okwekolako',
            'bathing' => 'Eby\'okunaabisa',
            'sports_outdoors' => 'Eby\'emizannyo', //New Category
            'cycling' => 'Eby\'okuvuga',
            'accessories' => 'Eby\'emizannyo',
            'e_games' => 'Emizannyo Gya Kompyuuta',
            'exercise_games' => 'Eby\'okukola Omubiri',
            'swimming_leisure' => 'Eby\'okuwuga',
            'electronics' => 'Eby\'amasanyalaze', //New Category
            'gaming' => 'Eby\'okuzanyisa',
            'cleaning' => 'Eby\'okuloongosa',
            'lighting' => 'Eby\'amataala',
            'speakers' => 'Emizindaalo',
            'kitchenware' => 'Ebyomuffumbiro',
            'video_gadgets' => 'Ebiraga Obutambi',
            'audio_accessories' => 'Ebikola Amaloboozi',
            'cookware' => 'Eby\'okufumbisa',
            'baby_prod' => 'Eby\'abaana Abato', //New Category
            'feeding' => 'Okulya',
            'diapering' => 'Obuyonjo',
            'skincare' => 'Eby\'olususu',
            'bathware' => 'Eby\'okunaabisa',
            'home_office' => 'Eby\'awaka N\'ebya Ofiisi',   //New Category
            'gifts' => 'Ebirabo',
            'dining' => 'Ebyokulujuliro',
            'beddings' => 'Eby\'omubuliri',
            'safety' => 'Eby\'okwekuumisa',
            'bakeware' => 'Eby\'okufumbisa',
            //'gaming' => 'Gaming',   already finished
            //'cookware' => 'Cookware',  already finished
            'party_supplies' => 'Eby\'emikolo',
            'home_theatre' => 'Ekibanda ky\'ewaka',
            'smart_devices' => 'Ebya tekinologiya',
            'bathing_utilities' => 'Eby\'okunaabisa',
            'sewing_handtools' => 'Eby\'okutunga Neby\'emikono',
            'organization' => 'Okutegeka N\'okutereka',
            'groceries' => 'Ebikozesebwa Awaka',     //New Category
            'foods' => 'Eby\'emmere',
            'snacks' => 'Obw\'okulya Obwangu',
            'kids_toys' => 'Eb\'okuzanyisa By\'abaana',
            //'beddings' => 'Beddings',  already finished
            //'bathware' => 'Bathware',  already finished
            'beverages' => 'Eby\'okunywa',
            //'cleaning' => 'Cleaning',  already finished
            'entertainment' => 'Eby\'okwesanyusa',
            'staysafe' => 'Wekuume',
            'email' => 'Email',
            'contact' => 'Essimu', //NEW    //can also use the word phones

        //contact form
            'error_yourname' => 'Wandiika eriinya lyo!',
            'error_yourphone' => 'Bambi wandiika ennamba yo entuufu!',
            'error_youremail' => 'Bambi wandiika email yo entuufu!',
            'error_yourmessage' => 'Wandiika obubaka bwo wano!',


    //------------------------------ CONTACT US --------------------------------
        //These were already defined; welcome, contactus, address, email
        'welovehearing' => 'Tunyumirwa Nnyo Okkuwuliza',
        'contacts' => 'Essimu',    //NEW      //for other languages other than english, use 'Contacts' still
        'getintouchnow' => 'Yogerako Naffe',
        //'yourname' => 'Your Name',      already finished
        //'yourphone' => 'Your Phone Number',     already finished
        //'youremail' => 'Your Email Address',    already finished
        'yourmessage' => 'Obubaka Bwo',
        'sendmessage' => 'Weereza',


    //------------------------------ CART --------------------------------
        'shop' => 'Dduuka',   //NEW
        'shoppingcart' => 'Akasero',  //NEW
        'update_cart_note' => 'Okukyusa omuwendo gw\'ebintu, wandiika mu',   //NEW
        'in_cart' => 'byolina mu kasero ko',    //NEW   //e.g. 12 products in your cart
        'remove' => 'Ggyamu',   //NEW
        'clear_cart' => 'Ggyamu Byonna',   //NEW
        'continue_shopping' => 'Weyongere Okugula',     //NEW
        'shipping_delivery' => 'Eby\'entambula',   //NEW
        'proceedtocheckout' => 'Gula Kati',  //NEW
        'empty_cart' => 'Akasero ko kakalu',   //NEW
        'start_shopping_now' => 'Tandika Okugula Kati',   //NEW

    //------------------------------ PRODUCTS ------------------------------
        //Show
        'add_to_cart' => 'Teeka mu Kasero', //NEW
        'description' => 'Ebisingawo', //NEW
        'share_this_on' => 'Gabanako n\'abalala ku', //NEW
        'similar_products' => 'Ebirala By\'oyinza Okwagala',  //NEW
        'reviews' => 'okusiima',
        'brand' => 'Kampuni',
        'material' => 'Enkola',
        'colors' => 'Laangi',
        'sizes' => 'Sayizi',
        'application' => 'Enkozesa',
        'order_note' => 'Olina Ky\'ogamba',
        'optional' => 'si kya buwaze',
        'extra_info' => 'Kiwandiike wano bambi',
        'proceedtocheckout2' => 'GULA KATI',


    
    //------------------------------ PROFILE --------------------------------
        //These were already defined; street, town, district
        'profile' => 'Ebinkwaatako',
        'home' => 'Ewaka',
        'gotoshop' => 'Genda mu Dduuka',
        'esteemed_customer' => 'Kasitoma Omulungi',
        'my_prof' => 'Ebinkwaatako',
        'orders' => 'Zi Order',
        'logout' => 'Ggalawo Akawunti',
        'changeps' => 'Kyusa Pasiwadi',    
        'oldps' => 'Pasiwadi Enkadde',
        'newps' => 'Pasiwadi Empya',
        'confirmps' => 'Kakasa Pasiwadi Empya',
        'editbio' => 'Kyusa Ebikukwaatako',
        'username' => 'Erinnya',
        'username_note' => 'Wandiika erinnya epya',
        'phonenumber' => 'Ennamba Y\'essimu',
        'phonenumber_note' => 'Wandiika ennamba y\'essimu',
        'savechanges' => 'Kyusa Kati',


    //--------------------------------- HOME -----------------------------------
        //These were already defined; gotoshop, esteemed_customer, my_prof, orders, logout
        'staysafe_home' => 'Weekume',
        'home_note' => 'ng\'ogula ebintu byaffe byonna bye wetaaga mu ngeri enyangu era eyesigika',
        'homeoffice_home' => 'eby\'omunyumba ne ofiisi',
        'thankshome' => 'Webale kugula naffe.',
        'my_orders' => 'Order Zange',
        'sorry' => 'Bambi',
        'no_orders' => 'tolinayo order n\'emu!',
        'order_now' => 'Gula Kati',
        'date' => 'Olunaku',
        'status' => 'Ennyimirira',
        'action' => 'Eky\'okkola',
        'view' => 'Laba',


    //--------------------------------- WELCOME -----------------------------------
        'seemore' => 'Laba Ebirala',
        'mostpopular' => 'Ebisinga Okugulwa',
        'high_end_discounts' => 'Emiwendo Emisale',   //NEW
        'and_many_more' => 'n\'ebirala bingi', //NEW
        'shop_now' => 'Gula Kati',   //NEW
        'any_inquiries' => 'Olina Ekibuuzo?',    //NEW
        'our_col' => 'Ebitundibwa',
        'keepfit' => 'Kuuma Omubiri',    //NEW
        'selfcare' => 'Okwefaako',  //NEW
        'freshhome' => 'Amaka Amalungi',    //NEW
        'automate_work' => 'Gonza Emirimu', //NEW
        'beauty_at_best' => 'Ku Lw\'obulungi Bwo', //NEW
        'for_your_baby' =>'Eby\'omwana Wo',  //NEW
        'new' => 'KIPYA', //NEW
        'top_gadgets' => 'EBYA TEKINOLOGIYA',   //NEW
        'gadget_boss' => 'Weyagale ne tekinologiya!', //NEW
        'sweet_soft_sleep' => 'Nyumirwa Otulo',   //NEW
        'cook_connect' => 'Gonza Eby\'okufumba',


    //-------------------------------- ORDERS ------------------------------------
        //show,
        'order' => 'Order',
        'was_placed_on' => 'yakolebwa',
        'at' => 'ku',
        'and_was' => 'era yali',
        'and_is_currently' => 'era eri',
        'we_believe' => 'Tukkiriza nti ebintu byo byali birungi. Oba sikyo',
        'please_lc' => 'bambi',
        'seeyou' => 'Tulabagane olundi',
        'cancel_note' => 'Kino kirabika kyavudde kugwe okuzaayo ebintu gyetuli, okusazaamu order yo oba okulwaawo nnyo ddala okusasulira ebintu byo',
        'wish_to_replace' => 'Oyagala kuddamu kukola order eno?',
        'incase_enquiries' => 'Bwoba olina ekibuuzo kyonna, bambi',
        'contact_team' => 'yogerako naffe',
        'product' => 'Ekintu',
        'price' => 'Ebbeyi',
        'no_order_note' => 'Tewali Kunnyonnyola',
        'taxes_delivery_fee' => 'Emisolo',
        'account_address' => 'Ekifo Kyo',
        'delivery_address' => 'Ekifo Ewaleetebwa',


    //----------------------------- SEARCH RESULTS -----------------------------
        'searchresults' => 'Ebizuuliddwa',
        'products_found' => 'by\'ebivudde mu kunoonya',
        'noproducts_found' => 'Tewali kintu kizuuliddwa ku',
        'see_categories' => 'Laba Olukalala',
        //'health_beauty' => 'Health & Beauty',     already finished
        //'electronics' => 'Electronics',           already finished
        //'home_office' => 'Home & Office',         already finished
        //'sports_outdoors' => 'Sports & Outdoor',  already finished
        //'baby_prod' => 'Baby Products',           already finished
        //'groceries' => 'Groceries',               already finished
        //'searchresults' => 'Search Results',      already finished
        'for' => 'ku',
        'seenow' => 'Laba Kati',


];
