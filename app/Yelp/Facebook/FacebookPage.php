<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 3/11/14
 * Time: 7:29 PM
 */

namespace Yelp\Facebook;


class FacebookPage {

    private $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function get() {
        $endpoint = "http://graph.facebook.com/$this->id";
        $json = file_get_contents($endpoint);

//        dd($json);

        return json_decode($json);
    }

} 