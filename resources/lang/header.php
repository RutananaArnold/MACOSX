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
            'address' => 'Address', //NEW
            'checkout' => 'Checkout',
            'reception' => 'Reception',
            'delivery_method' => 'Delivery Method',
            'payment_method' => 'Payment Method',
            'confirmation' => 'Confirmation',
            'current_invoice_address' => 'CURRENT INVOICE ADDRESS',
            'remember_this_info' => 'Remember that this info will appear on your receipt from us',
            'yourname' => 'Your Name',
            'yourphone' => 'Your Phone Number',
            'youremail' => 'Your Email Address',
            'street' => 'Street',
            'town' => 'Town / Region',
            'district' => 'District',
            'choose_delivery' => 'Choose Delivery Method',
            'pickup_station' => 'Pickup Station',
            'pickup_station_note' => 'Get your products right on the next working day - fastest option possible',
            'home_delivery' => 'Home Delivery',
            'home_delivery_note' =>'Wait for your products on your doorstep - delivery takes 1 - 3 working days',
            'choose_payment' => 'Choose Payment Method',
            'thankyou_mtn' => 'Thank you for choosing MTN Mobile Money payment method. Please follow the following steps to complete your payment',
            'simplified' => 'Simplified for mobile phones & tablets',
            'if_using' => 'If you are using a mobile phone or tablet, simply',
            'click_to_pay' => 'click here to pay',
            'confirmation_prompt' => 'You will receive a confirmation prompt on your phone, enter you secret PIN code to confirm payment.',
            'upon_payment' => 'After successful payment, you will receive an email containing your e-receipt and should be able to see the status of your order.',
            'note' => 'NOTE',
            'for_pc' => 'For PC and macbook users, we temporarily closed our payment gateway via the MTN and Airtel APIs in order to enhance our security even more. We are sorry for the inconvenience caused',
            'continue_mtn' => 'Continue with MTN Momo Pay',
            'cod' => 'Cash On Delivery',
            'cod_note' => 'With the "Cash on Delivery" method, you pay to our delivery personnel for your products immediately after you receive them. Beware that our delivery personnel will ask you for your order ID before handing out your package.
                            Plus, ensure that you have exact money on you as our delivery personnel may be out of change.',
            'pay_code' => 'Pay Cash on Delivery',
            'confirm_order' => 'Confirm Your Order',
            'order_summary' => 'Order Summary',
            'free_delivery' => 'We deliver your package to your doorstep for free. We also pay the tax that comes with your ordered products.',
            'quantity' => 'Quantity',
            'delivery_taxes' => 'Taxes',
            'unitprice' => 'Unit Price',
            'subtotal' => 'Order Subtotal',
            'overalltotal' => 'Overall Total',
            'order_statement' => 'Order Statement', //NEW
            'order_statement_note' => 'Do you have any extra information you need to tell us as you are placing this order?',  //NEW


        //Inline 404 Exceptions
            'pagenotfound' => 'Sorry, page not found!',
            'hello' => 'Hello',
            'cantfindpage' => 'We couldn\'t find the page you are looking for. You might have misspelt the link address or the page might have been relocated or edited.',
            'nothere' => 'So, it is not here!',
            'please_sc' => 'Please',
            'emailus' => 'email us for assistance',
            'start_from_reception' => 'start from the reception',
            'or' => 'or',

    //------------------------------ LAYOUTS --------------------------------
        //navbar
            'language' => 'Language',
            'search_query' => 'Hello, what are you looking for?',   //NEW
            'search' => 'Search',   //NEW
            'happyshopping' => 'Happy Shopping',
            'welcome' => 'Welcome',
            'myac' => 'My Account',
            'mycart' => 'My Cart',
            'total' => 'Total',

        //footer
            'lets_talk' => 'Lets talk', //NEW
            'contactus' => 'Contact Us',
            'callrequest' => 'Callback Request',
            'followus' => 'Follow Us',  //NEW
            'devby' => 'Developed by',

        //app
            'view_all' => 'View All',
            'categories' => 'Categories',
            'health_beauty' => 'Health & Beauty', //New Category
            'fitness' => 'Fitness',
            'oralcare' => 'Oral Care',
            'haircare' => 'Hair Care',
            'fragrances' => 'Fragrances',
            'makeup' => 'Make Up & Jewelry',
            'bathing' => 'Bathing Accessories',
            'sports_outdoors' => 'Sports & Outdoor', //New Category
            'cycling' => 'Cycling',
            'accessories' => 'Accessories',
            'e_games' => 'Electric Games',
            'exercise_games' => 'Exercise & Games',
            'swimming_leisure' => 'Swimming & Leisure',
            'electronics' => 'Electronics', //New Category
            'gaming' => 'Gaming',
            'cleaning' => 'Cleaning',
            'lighting' => 'Lighting',
            'speakers' => 'Speakers',
            'kitchenware' => 'Kitchenware',
            'video_gadgets' => 'Video Gadgets',
            'audio_accessories' => 'Audio Accessories',
            'cookware' => 'Cookware',
            'baby_prod' => 'Baby Products', //New Category
            'feeding' => 'Feeding',
            'diapering' => 'Diapering',
            'skincare' => 'Skin Care',
            'bathware' => 'Bathware',
            'home_office' => 'Home & Office',   //New Category
            'gifts' => 'Gifts',
            'dining' => 'Dining',
            'beddings' => 'Beddings',
            'safety' => 'Safety',
            'bakeware' => 'Bakeware',
            //'gaming' => 'Gaming',   already finished
            //'cookware' => 'Cookware',  already finished
            'party_supplies' => 'Party Supplies',
            'home_theatre' => 'Home Theatre',
            'smart_devices' => 'Smart Devices',
            'bathing_utilities' => 'Bathing Utilities',
            'sewing_handtools' => 'Sewing & Hand Tools',
            'organization' => 'Organization & Storage',
            'groceries' => 'Groceries',     //New Category
            'foods' => 'Foods',
            'snacks' => 'Snacks',
            'kids_toys' => 'Kids\' Toys',
            //'beddings' => 'Beddings',  already finished
            //'bathware' => 'Bathware',  already finished
            'beverages' => 'Beverages',
            //'cleaning' => 'Cleaning',  already finished
            'entertainment' => 'Entertainment',
            'staysafe' => 'Stay Safe',
            'email' => 'Email',
            'contact' => 'Contact', //NEW    //can also use the word phones

        //contact form
            'error_yourname' => 'Hey, your name please!',
            'error_yourphone' => 'Please provide a valid phone number!',
            'error_youremail' => 'Please provide a valid email address!',
            'error_yourmessage' => 'Please type your message in!',


    //------------------------------ CONTACT US --------------------------------
        //These were already defined; welcome, contactus, address, email
        'welovehearing' => 'We Love Hearing From You',
        'contacts' => 'Call Center',    //NEW      //for other languages other than english, use 'Contacts' still
        'getintouchnow' => 'Get in Touch',
        //'yourname' => 'Your Name',      already finished
        //'yourphone' => 'Your Phone Number',     already finished
        //'youremail' => 'Your Email Address',    already finished
        'yourmessage' => 'Your message',
        'sendmessage' => 'Send Message',


    //------------------------------ CART --------------------------------
        'shop' => 'Shop',   //NEW
        'shoppingcart' => 'Shopping Cart',  //NEW
        'update_cart_note' => 'To update cart, fill in the desired quantity and press enter',   //NEW
        'in_cart' => 'products in your cart',    //NEW   //e.g. 12 products in your cart
        'remove' => 'Remove',   //NEW
        'clear_cart' => 'Clear Cart',   //NEW
        'continue_shopping' => 'Continue Shopping',     //NEW
        'shipping_delivery' => 'Shipping & Delivery',   //NEW
        'proceedtocheckout' => 'Proceed to checkout',  //NEW
        'empty_cart' => 'Your cart is empty',   //NEW
        'start_shopping_now' => 'Start Shopping Now',   //NEW

    //------------------------------ PRODUCTS ------------------------------
        //Show
        'add_to_cart' => 'Add to Cart', //NEW
        'description' => 'Description', //NEW
        'share_this_on' => 'Share this on', //NEW
        'similar_products' => 'Products You May Love',  //NEW
        'reviews' => 'reviews',
        'brand' => 'Brand',
        'material' => 'Material',
        'colors' => 'Colors',
        'sizes' => 'Sizes',
        'application' => 'Application',
        'order_note' => 'Order Note',
        'optional' => 'Optional',
        'extra_info' => 'Enter any extra information here',
        'proceedtocheckout2' => 'PROCEED TO CHECKOUT',


    
    //------------------------------ PROFILE --------------------------------
        //These were already defined; street, town, district
        'profile' => 'Profile',
        'home' => 'Home',
        'gotoshop' => 'Go to Shop',
        'esteemed_customer' => 'Esteemed Customer',
        'my_prof' => 'My Profile',
        'orders' => 'Orders',
        'logout' => 'Log Out',
        'changeps' => 'Change Password',    
        'oldps' => 'Old Password',
        'newps' => 'New Password',
        'confirmps' => 'Confirm New Password',
        'editbio' => 'Edit Personal Details',
        'username' => 'Username',
        'username_note' => 'Enter new username',
        'phonenumber' => 'Phone Number',
        'phonenumber_note' => 'Enter new phone',
        'savechanges' => 'Save Changes',


    //--------------------------------- HOME -----------------------------------
        //These were already defined; gotoshop, esteemed_customer, my_prof, orders, logout
        'staysafe_home' => 'Stay safe',
        'home_note' => 'with our fast, simple and secure ordering for all products you need at',
        'homeoffice_home' => 'home & office',
        'thankshome' => 'Thank you for shopping with us.',
        'my_orders' => 'My Orders',
        'sorry' => 'Sorry',
        'no_orders' => 'no orders found for you!',
        'order_now' => 'Order Now',
        'date' => 'Date',
        'status' => 'Status',
        'action' => 'Action',
        'view' => 'View',


    //--------------------------------- WELCOME -----------------------------------
        'seemore' => 'See More',
        'mostpopular' => 'Most Popular Products',
        'high_end_discounts' => 'High End Discounts',   //NEW
        'and_many_more' => 'and many more', //NEW
        'shop_now' => 'Shop Now',   //NEW
        'any_inquiries' => 'Any Inquiries?',    //NEW
        'our_col' => 'Our Collection',
        'keepfit' => 'Keep Fit',    //NEW
        'selfcare' => 'Self Care',  //NEW
        'freshhome' => 'Fresh Home',    //NEW
        'automate_work' => 'Automate Work', //NEW
        'beauty_at_best' => 'Beauty At Best', //NEW
        'for_your_baby' =>'For Your Baby',  //NEW
        'new' => 'NEW', //NEW
        'top_gadgets' => 'TOP RATED GADGETS',   //NEW
        'gadget_boss' => 'Become the gadget boss!', //NEW
        'sweet_soft_sleep' => 'Sweet Soft Sleep',   //NEW
        'cook_connect' => 'Cook & Connect',


    //-------------------------------- ORDERS ------------------------------------
        //show,
        'order' => 'Order',
        'was_placed_on' => 'was placed on',
        'at' => 'at',
        'and_was' => 'and was',
        'and_is_currently' => 'and is currently',
        'we_believe' => 'We believe your product(s) were super good. If otherwise',
        'please_lc' => 'please',
        'seeyou' => 'See you next time',
        'cancel_note' => 'This must have been as a result of you returning the products, directly cancelling the order or delaying the overall process',
        'wish_to_replace' => 'Wish to replace the order?',
        'incase_enquiries' => 'In case of any more enquiries, please',
        'contact_team' => 'contact our access team',
        'product' => 'Product',
        'price' => 'Price',
        'no_order_note' => 'No Order Note',
        'taxes_delivery_fee' => 'Taxes',
        'account_address' => 'Account Address',
        'delivery_address' => 'Delivery Address',


    //----------------------------- SEARCH RESULTS -----------------------------
        'searchresults' => 'Search Results',
        'products_found' => 'products found',
        'noproducts_found' => 'No products found for',
        'see_categories' => 'See Categories Instead',
        //'health_beauty' => 'Health & Beauty',     already finished
        //'electronics' => 'Electronics',           already finished
        //'home_office' => 'Home & Office',         already finished
        //'sports_outdoors' => 'Sports & Outdoor',  already finished
        //'baby_prod' => 'Baby Products',           already finished
        //'groceries' => 'Groceries',               already finished
        //'searchresults' => 'Search Results',      already finished
        'for' => 'for',
        'seenow' => 'See Now',


];
