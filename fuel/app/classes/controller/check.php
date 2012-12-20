<?php

class Controller_Check extends Controller_Rest {

  protected $xml_basenode = 'device';

  public function get_devices($id = NULL) {
    $response = $this->response(
            array(
                'status' => array(
                    'missing' => 'false'
                ),
                'configuration' => array(
                    'delay' => 25
                ),
            )
    );
  }

  /*
    public function after($response) {
    return openssl_encrypt($response, 'aes-128-cbc', 'ryzhsagscqtk', NULL, openssl_random_pseudo_bytes(16));
    }
   */
}
