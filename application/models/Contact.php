<?php

$contactModel = new Application_Model_Contact();
$infoJson = $contactModel->getContactList();    
$infoPhp = json_decode($infoJson, true);
$name = $infoPhp['name'];
class Application_Model_Contact
{
  private $options;
  private $username;
  private $token;

  public function __construct()
  {
    $this->username = Zend_Registry::get('username');
    $this->token = Zend_Registry::get('token');
  }

  /*
   * HELPER FUNCTION
   */
  private function curly($url)
  {

    try {
      $process = curl_init();
      
      $headers = array(
        'Content-Type:application/json',
        'Authorization: Basic '. base64_encode("jo.an.pereira@outlook.com:7b1535aa1ca490a617e2") 
      );
      curl_setopt($process, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($process, CURLOPT_URL, $url);
      curl_setopt($process, CURLOPT_HTTPHEADER, $headers);

      $content = curl_exec($process);

      if (FALSE === $content)
          throw new Exception(curl_error($process), curl_errno($process));
  
    } catch(Exception $e) {
    
        trigger_error(sprintf(
            'Curl failed with error #%d: %s',
            $e->getCode(), $e->getMessage()),
            E_USER_ERROR);
    
    }

    return  $content;
  }

  public function getContactList()
  {
    $url = "https://app.alegra.com/api/v1/contacts/";
    $response = $this->curly($url);
    //var_dump($response); // usalo para probar
    //var_dump(gettype($response)); // usalo para probar
    return $response['body'];
  }

  public function getContact($id)
  {
    $url = "https://app.alegra.com/api/v1/contacts/$id";
    $response = $this->curly($url);

    return $response['body'];
  }

  public function createContact($contact)
  {

    $headers = array(
      'Content-Type:application/json',
      'Authorization: Basic '. base64_encode("jo.an.pereira@outlook.com:7b1535aa1ca490a617e2") 
    );

    $options = array(
      CURLOPT_HTTPHEADER => $headers,
      CURLOPT_POST	     => true,
      CURLOPT_POSTFIELDS     => $contact,
      CURLOPT_RETURNTRANSFER => true,
      //CURLOPT_HEADER	     => false,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_ENCODING       => "",
      CURLOPT_USERPWD	     => "jo.an.pereira@outlook.com:7b1535aa1ca490a617e2", 
      //CURLOPT_USERPWD	     => "$this->username:$this->token",
      CURLOPT_AUTOREFERER    => true,
      CURLOPT_CONNECTTIMEOUT => 120,
      CURLOPT_TIMEOUT	     => 120,
      CURLOPT_MAXREDIRS      => 10,
      CURLOPT_SSL_VERIFYPEER => false
      //CURLOPT_CAINFO	     => '../AmazonRootCA1.crt'
    );

    $url = "https://app.alegra.com/api/v1/contacts/";

    $curlHandle = curl_init($url);

    curl_setopt_array($curlHandle, $options);
    $body = curl_exec($curlHandle);
    
    // for debbuging...
    //var_dump($body);
    //die();
    curl_close($curlHandle);
  }

  public function editContact($id, $contact)
  {
    $url = "https://app.alegra.com/api/v1/contacts/$id";
    $options = array(
      CURLOPT_CUSTOMREQUEST  => "PUT",
      CURLOPT_POSTFIELDS     => $contact,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HEADER	     => false,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_ENCODING       => "",
      CURLOPT_USERPWD	     => "$this->username:$this->token",
      CURLOPT_AUTOREFERER    => true,
      CURLOPT_CONNECTTIMEOUT => 120,
      CURLOPT_TIMEOUT	     => 120,
      CURLOPT_MAXREDIRS      => 10,
      CURLOPT_SSL_VERIFYPEER => 2,
      CURLOPT_CAINFO	     => '../AmazonRootCA1.crt'
    );

    $curlHandle = curl_init($url);
    curl_setopt_array($curlHandle, $options);

    $body = curl_exec($curlHandle);
    curl_close($curlHandle);
  }

  public function deleteContact($id)
  {
    $url = "https://app.alegra.com/api/v1/contacts/$id";
    $options = array(
      CURLOPT_CUSTOMREQUEST  => "DELETE",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HEADER	     => false,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_ENCODING       => "",
      CURLOPT_USERPWD	     => "$this->username:$this->token",
      CURLOPT_AUTOREFERER    => true,
      CURLOPT_CONNECTTIMEOUT => 120,
      CURLOPT_TIMEOUT	     => 120,
      CURLOPT_MAXREDIRS      => 10,
      CURLOPT_SSL_VERIFYPEER => 2,
      CURLOPT_CAINFO	     => '../AmazonRootCA1.crt'
    );

    $curlHandle = curl_init($url);
    curl_setopt_array($curlHandle, $options);

    $body = curl_exec($curlHandle);
    curl_close($curlHandle);
  }

}