<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct(){
		parent::__construct();
        // $this->load->helper('form'); 
		// $this->load->model('login_m');
        // $this->load->library('session'); 

    }
    public function index(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://sandbox.orders.tradeprint.io/v2/login",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\n\"username\":\"professionaldesigner\",\n\"password\":\"t7b8sf4jxsiek0tih4d4260x\"\n}\n\n",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "Accept-Encoding: gzip, deflate",
                "Cache-Control: no-cache",
                "Connection: keep-alive",
                "Content-Length: 78",
                "Content-Type: text/html",
                "Host: sandbox.orders.tradeprint.io",
                "Postman-Token: 2b23c44f-c178-45e3-8ead-b68046c97fdb,0b4966a5-9024-4823-9c92-b3ab0109a29a",
                "User-Agent: PostmanRuntime/7.19.0",
                "cache-control: no-cache"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            // echo $response;
            $data = json_decode($response,true);
            $token = $data["result"]["token"];
            // print_r($token);
        }
        // Get All Attributes
    

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://sandbox.orders.tradeprint.io/v2/products/attributes",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "Authorization: Bearer ".$token
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        // echo $response;
        $result = json_decode($response,true)["result"];
        // Category
        $category = array_keys($result);
        $j = 0;
        // Get Details
        foreach($category as $row){
            // echo $row;
            // Save Category
            $value_detail =json_encode(array_values($result)[$j]['values']);


            // $sql = "INSERT INTO tbl_category (c_name,c_value,c_type) values('".$row."','".$value_detail."','api')";
            // $query = $this->db->query($sql);

            $j++;
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://sandbox.orders.tradeprint.io/v2/products/".$row,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\r\n\t\"format\": \"json\"\r\n}",
            CURLOPT_HTTPHEADER => array(
                    "Accept: */*",
                    "Accept-Encoding: gzip, deflate",
                    "Authorization: Bearer ".$token,
                    "Connection: keep-alive",
                    "Content-Length: 23",
                    "Content-Type: application/json",
                    "Host: sandbox.orders.tradeprint.io",
                    "User-Agent: PostmanRuntime/7.20.1"
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $detail_url = json_decode($response,true)['result']['url'];
                $curl = curl_init();

                curl_setopt_array($curl, array(
                CURLOPT_URL => $detail_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => false,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                    "Accept: */*",
                    "Accept-Encoding: gzip, deflate",
                    "Connection: keep-alive",
                    "Host: s3.eu-west-1.amazonaws.com",
                    "User-Agent: PostmanRuntime/7.20.1"
                ),
                ));

                $response = curl_exec($curl);
                $err = curl_error($curl);

                curl_close($curl);

                if ($err) {
                echo "cURL Error #:" . $err;
                } else {
                    $final = json_decode($response,true);
                    $final_json = json_encode(array_values($final));
                    // die(print_r($final_json));
                }
            }
            $today = date("Y-m-d H:i:s");
            for($i = 0; $i < count($final) ; $i++){
                if (array_key_exists('Price Just Print', $final[$i])) {
                    $price_print = $final[$i]['Price Just Print'];
                }
                if(!array_key_exists('Price Just Print', $final[$i])){
                    $price_print = "";
                }

                if (array_key_exists('Spot Uv', $final[$i])) {
                    $spot = $final[$i]['Spot Uv'];
                }
                if(!array_key_exists('Spot Uv', $final[$i])){
                    $spot = "";
                }
                if (array_key_exists('Sides Printed', $final[$i])) {
                    $s_print = $final[$i]['Sides Printed'];
                }
                if(!array_key_exists('Sides Printed', $final[$i])){
                    $s_print = "";
                }
                if (array_key_exists('Round Corners', $final[$i])) {
                    $r_corner = $final[$i]['Round Corners'];
                }
                if(!array_key_exists('Round Corners', $final[$i])){
                    $r_corner = "";
                }
                if (array_key_exists('Sets', $final[$i])) {
                    $set = $final[$i]['Sets'];
                }
                if(!array_key_exists('Sets', $final[$i])){
                    $set = "";
                }
                if (array_key_exists('Lamination', $final[$i])) {
                    $lami = $final[$i]['Lamination'];
                }
                if(!array_key_exists('Lamination', $final[$i])){
                    $lami = "";
                }
                if (array_key_exists('Paper Type', $final[$i])) {
                    $paper_type = $final[$i]['Paper Type'];
                }
                if(!array_key_exists('Paper Type', $final[$i])){
                    $paper_type = "";
                }
                if (array_key_exists('Shape', $final[$i])) {
                    $shape = $final[$i]['Shape'];
                }
                if(!array_key_exists('Shape', $final[$i])){
                    $shape = "";
                }
                if (array_key_exists('Base', $final[$i])) {
                    $base = $final[$i]['Base'];
                }
                if(!array_key_exists('Base', $final[$i])){
                    $base = "";
                }
                if (array_key_exists('Pages Per Pad', $final[$i])) {
                    $ppp = $final[$i]['Pages Per Pad'];
                }
                if(!array_key_exists('Pages Per Pad', $final[$i])){
                    $ppp = "";
                }
                if (array_key_exists('Folding', $final[$i])) {
                    $folding = $final[$i]['Folding'];
                }
                if(!array_key_exists('Folding', $final[$i])){
                    $folding = "";
                }
                if (array_key_exists('Hemming', $final[$i])) {
                    $hemming = $final[$i]['Hemming'];
                }
                if(!array_key_exists('Hemming', $final[$i])){
                    $hemming = "";
                }
                if (array_key_exists('Material', $final[$i])) {
                    $material = $final[$i]['Material'];
                }
                if(!array_key_exists('Material', $final[$i])){
                    $material = "";
                }
                if (array_key_exists('Cartridge', $final[$i])) {
                    $cartridge = $final[$i]['Cartridge'];
                }
                if(!array_key_exists('Cartridge', $final[$i])){
                    $cartridge = "";
                }
                if (array_key_exists('Eyelets', $final[$i])) {
                    $eyelets = $final[$i]['Eyelets'];
                }
                if(!array_key_exists('Eyelets', $final[$i])){
                    $eyelets = "";
                }
                

                $sql = "INSERT INTO tbl_product_temp 
                                (product_name,product_id,quantity, tax,price_express,product_express,price_stand,product_stand,
                                    price_saver,product_saver,price_same,product_same,price_check,price_check_pr,price_ass,
                                    art_tax,size,flat_width,flat_height,finish_width,finish_height,product_json,update_at,
                                    spot,sides_print,sets,lami,paper_type,shape,base,price_print,round_corner, p_type,
                                    pages_per_pad,folding,hemming,material,cartridge,eyelets) 
                            values('".$row."','".$final[$i]['ProductID']."','".$final[$i]['Quantity']."','".$final[$i]['Tax']."'
                            ,'".$final[$i]['PriceExpress']."','".$final[$i]['Production Days Express']."','".$final[$i]['PriceStandard']."','".$final[$i]['Production Days Standard']."'
                            ,'".$final[$i]['PriceSaver']."','".$final[$i]['Production Days Saver']."','".$final[$i]['PriceSameday']."','".$final[$i]['Production Days Sameday']."'
                            ,'".$final[$i]['Price File Check']."','".$final[$i]['Price File Check with Proofing']."','".$final[$i]['Price File Assist']."'
                            ,'".$final[$i]['Artwork Tax']."','".$final[$i]['Size']."','".$final[$i]['Flat Width (mm)']."','".$final[$i]['Flat Height (mm)']."'
                            ,'".$final[$i]['Finished Width (mm)']."','".$final[$i]['Finished Height (mm)']."','".$final[$i]['productionDataJSON']."','".$final[$i]['updatedAt']."'
                            ,'".$spot."','".$s_print."','".$set."','".$lami."','".$paper_type."','".$shape."','".$base."','".$price_print."','".$r_corner."','api','".$ppp."'
                            ,'".$folding."','".$hemming."','".$material."','".$cartridge."','".$eyelets."')";
            $query = $this->db->query($sql);

            }
        }
        return "success";
    }
}