<?php

//  _____  _      _____ ______ _   _ _______   __  __          _____  _____  ______ _____  
// / ____ | |    |_   _|  ____| \ | |__   __| |  \/  |   /\   |  __ \|  __ \|  ____|  __ \ 
// | |    | |      | | | |__  |  \| |  | |    | \  / |  /  \  | |__) | |__) | |__  | |__) |
// | |    | |      | | |  __| | . ` |  | |    | |\/| | / /\ \ |  ___/|  ___/|  __| |  _  / 
// | |____| |____ _| |_| |____| |\  |  | |    | |  | |/ ____ \| |    | |    | |____| | \ \ 
//  \_____|______|_____|______|_| \_|  |_|    |_|  |_/_/    \_\_|    |_|    |______|_|  \_\
  //  Contiene el modelo de trato de información de todos los datos del cliente                                                                                                               
class Application_Model_Mapper_ClientMapper
{
//variables privadas creadas por el constructor 
//
  private $_baseUri;
  private $_uri;
  private $_email;
  private $_token;
  private $_client;

// Esta función construye las variables privadas que son utilizadas para la autenticación 
// pullea los datos desde application.ini usando bootstrap
//   _                   _____       
//  | |                 |_   _|      
//  | |     ___   __ _    | |  _ __  
//  | |    / _ \ / _` |   | | | '_ \ 
//  | |___| (_) | (_| |  _| |_| | | |
//  |______\___/ \__, | |_____|_| |_|
//                __/ |              
//               |___/                 

public function __construct()
  {
    // [*1*] https://stackoverflow.com/questions/12887873/how-to-retrieve-parameters-from-zend-application-ini-file-during-the-session
    // [*2*] https://framework.zend.com/manual/1.10/en/zend.http.client.html
    // [*3*] https://stackoverflow.com/questions/9892834/how-to-pass-the-values-username-and-password-for-http-basic-authentication-in
    // *1* -->
    $config = Zend_Controller_Front::getInstance()->getParam('bootstrap');
    // Logea en Alegra (email+token) [Login]
    $alegraAuth = $config->getOption('alegraLogin');
    $this->_baseUri = $alegraAuth['uri'];
    $this->_uri = $this->_baseUri . 'contacts';
    $this->_email = $alegraAuth['email'];
    $this->_token = $alegraAuth['token'];
    //*2* -->
    $this->_client = new Zend_Http_Client();
    $this->_client->setUri($this->_uri);
    //*3* -->
    $this->_client->setAuth($this->_email, $this->_token, Zend_Http_Client::AUTH_BASIC);
  }
  
  //  _____        _____   _____ ______ _____  
  // |  __ \ /\   |  __ \ / ____|  ____|  __ \ 
  // | |__) /  \  | |__) | (___ | |__  | |__) |
  // |  ___/ /\ \ |  _  / \___ \|  __| |  _  / 
  // | |  / ____ \| | \ \ ____) | |____| | \ \ 
  // |_| /_/    \_\_|  \_\_____/|______|_|  \_\  iferror=lastennounce;                              
  //analizador sintáctico que comprueba el formato de los datos de contacto con las categorías de sistema
  private function _parseData($data = []) {
    $i = 0;
    foreach ($data as $key => $value) {
      $data[$i]['isClient'] = false;
      $data[$i]['isProvider'] = false;
      if (isset($value['priceList']['id'])) {
        $data[$i]['priceList'] = [$value['priceList']['name']];
      }
      if (isset($value['seller']['id'])) {
        $data[$i]['seller'] = [$value['seller']['name']];
      }
      if (isset($value['term']['id'])) {
        $data[$i]['term'] = [$value['term']['name']];
      }
      if ((isset($value['type'][0]) && 'client' === $value['type'][0]) || (isset($value['type'][1]) && 'client' === $value['type'][1])) {
        $data[$i]['isClient'] = true;
      }
      if ((isset($value['type'][0]) && 'provider' === $value['type'][0]) || (isset($value['type'][1]) && 'provider' === $value['type'][1])) {
        $data[$i]['isProvider'] = true;
      }
      $i++;
    }
    return $data;
  }
  //  _    _ _____   _____ ______ _____ _______ 
  // | |  | |  __ \ / ____|  ____|  __ \__   __|
  // | |  | | |__) | (___ | |__  | |__) | | |   
  // | |  | |  ___/ \___ \|  __| |  _  /  | |   
  // | |__| | |     ____) | |____| | \ \  | |   
  //  \____/|_|    |_____/|______|_|  \_\ |_|   
    //  (O UPDATE + INSERT/MERGE) <--- método que actualiza o crea nuevos registros en la DB de contactos|clientes
    //  consulta tipo de contacto, dirección, 
                               
  public function upsert(Application_Model_Contact $contact)
  {
  //  "Indica si el contacto es cliente, 
  // proveedor, los dos o ninguno. 
  // Las opciones posibles son 
  // 'client' si el contacto es cliente, 
  // provider' si el contacto es proveedor." <--https://developer.alegra.com/docs/contactos
  
    $type = array();
    if ($contact->getIsClient()) {
      $type[] = 'client';
    }
    if ($contact->getIsProvider()) {
      $type[] = 'provider';
    }
//Datos de Client|Provider traídos desde la API 
    $params = array(
      'id' => $contact->getId(),
      'name' => $contact->getName(),
      'identification' => $contact->getIdentification(),
      'phonePrimary' => $contact->getPhoneprimary(),
      'phoneSecondary' => $contact->getPhonesecondary(),
      'fax' => $contact->getFax(),
      'mobile' => $contact->getMobile(),
      'observations' => $contact->getObservations(),
      'email' => $contact->getEmail(),
      'priceList' => empty($contact->getPriceList()) ? null : $contact->getPriceList(),
      'seller' => empty($contact->getSeller()) ? null : $contact->getSeller(),
      'term' => empty($contact->getTerm()) ? null : $contact->getTerm(),
      'address' => $address,
      'type' => $type,
      'internalContacts' => $contact->getInternalContacts(),
    );
// "address Object
// Objeto que contiene la información de la dirección del contacto.
// Contiene los siguientes atributos:
// address : Indica la dirección del contacto.
// city: Ciudad del contacto." <---------------  <--https://developer.alegra.com/docs/contactos
// se referencia como address.address o address.city
$address = (object) [
  'address' => $contact->getAddress(),
  'city' => $contact->getCity(),
];
// (HTTP client) retorna la información del ID 
    if (null === ($id = $contact->getId())) {
      $this->_client->setUri($this->_uri);
      $response = $this->_client->setRawData(json_encode($params))->request('POST');
      $data = $response->getBody();
      $data = json_decode($data, true);
    } else {
      $this->_client->setUri($this->_uri . "/$id");
      $response = $this->_client->setRawData(json_encode($params))->request('PUT');
      $data = $response->getBody();
      $data = json_decode($data, true);
    }
    return $data;
  }

// a través del método fetchAll http://php.net/manual/en/pdostatement.fetch.php 
// se trae todos los datos del campo contacto en la sesión.
// los dispone en un array de 20 filas, según aparece en https://app.alegra.com/client
//                   _             _            
//                  | |           | |           
//    ___ ___  _ __ | |_ __ _  ___| |_ ___  ___ 
//   / __/ _ \| '_ \| __/ _` |/ __| __/ _ \/ __|
//  | (_| (_) | | | | || (_| | (__| || (_) \__ \
//   \___\___/|_| |_|\__\__,_|\___|\__\___/|___/
// Evento de lectura (read)                                             
                                             
  public function fetchAll($type = '', $query = '', $start = 0, $limit = 20)
  {
    $params = "?start=$start&limit=$limit&metadata=true";
    if (!empty($type) && in_array($type, array('client', 'provider'))) {
      $params.= "&type=$type";
    }
    if (!empty($query)) {
      $params.= "&query=$query";
    }
    $this->_client->setUri($this->_uri . $params);
    $response = $this->_client->request('GET');
    $data = $response->getBody();
    $data = json_decode($data, true);

    if (isset($data['code']) && $data['code'] !== 200) {
      return $data;
    }

    $results = self::_parseData($data['data']);
    $contacts = array();

    foreach ($results as $row) {
      $contact = new Application_Model_Contact($row);
      $contacts[] = $contact;
    }

    return [
      'total' => $data['metadata']['total'],
      'data' => $contacts,
    ];
  }


//                   _             _        
//                  | |           | |       
//    ___ ___  _ __ | |_ __ _  ___| |_ ___  
//   / __/ _ \| '_ \| __/ _` |/ __| __/ _ \ 
//  | (_| (_) | | | | || (_| | (__| || (_) |
//   \___\___/|_| |_|\__\__,_|\___|\__\___/ 
//  trae los datos (en formato JSON) del contacto seleccionado        
//  evento de lectura (read)                               
                                         
  public function findById($id)
  {
    $this->_client->setUri($this->_uri . "/$id");
    $response = $this->_client->request('GET');

    $data = $response->getBody();
    $data = json_decode($data, true);

    if (isset($data['code']) && $data['code'] !== 200) {
      return $data;
    }

    $result = self::_parseData([$data]);
    $contact = new Application_Model_Contact($result[0]);

    return [
      'data' => $contact,
    ];
  }

//   _____  ______ _      ______ _______ ______ 
//  |  __ \|  ____| |    |  ____|__   __|  ____|
//  | |  | | |__  | |    | |__     | |  | |__   
//  | |  | |  __| | |    |  __|    | |  |  __|  
//  | |__| | |____| |____| |____   | |  | |____ 
//  |_____/|______|______|______|  |_|  |______|
// método para eliminar registros individuales de contacto                                             
                                                                              
  public function delete($id)
  {
    $this->_client->setUri($this->_uri . "/$id");
    $response = $this->_client->request('DELETE');
    $data = $response->getBody();
    $data = json_decode($data, true);

    if (isset($data['code']) && $data['code'] !== 200) {
      return $data;
    }

    return $data;
  }

}
