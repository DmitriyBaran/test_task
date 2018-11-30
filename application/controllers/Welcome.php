<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $currentDate = date('d.m.Y');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.privatbank.ua/p24api/exchange_rates?json&date='.$currentDate);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result,true);
        $exchangeRate = array();
        foreach ($result['exchangeRate'] as $value) {
            if (isset($value['currency'])) {
                if ($value['currency'] == 'USD') {
                    $exchangeRate['usd'] = $value['saleRate'];
                } elseif ($value['currency'] == 'EUR') {
                    $exchangeRate['eur'] = $value['saleRate'];
                }
            }
        }
        $data = array();
        foreach ($exchangeRate as $key => $value) {
            $data['currency'] = $key;
            $data['value'] = $value;
            $this->load->model('currency_models');
            $this->currency_models->add_currency($data);
        }
		$this->load->view('welcome_message', $exchangeRate);
	}

	function currency()
    {
        $this->load->model('currency_models');
        $data['currency'] = $this->currency_models->get_currency();
        $this->load->view('currency_views', $data);
    }
}
