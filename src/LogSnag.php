<?php
namespace Davmixcool;

use Davmixcool\Request\LogSnagCurlRequest;

class LogSnag
{	
	private $api_token = '';
    private $request_handler;

    /**
     * LogSnag constructor.
     * @param $api_token
     */
    public function __construct($api_token='')
    {
        $this->api_token = $api_token;
        // Throw an error if the token is not passed passed
        try {
            if (empty($this->api_token)) {
                throw new Exception("Your logsnag api token is not set!");
            }
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }

        // Initiate a cURL request object
        $this->request_handler = new LogSnagCurlRequest($this->api_token);
    }



  	public function publish($fields=[])
  	{		
        return $this->request_handler->execute('log', $fields);
  	}



}
