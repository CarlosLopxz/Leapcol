<?php

namespace App\Config;

use CodeIgniter\Config\BaseConfig;

class GoogleOAuth extends BaseConfig
{
    public $clientId;
    public $clientSecret;
    public $redirectUri;
    public $scopes = ['email', 'profile'];
    
    public function __construct()
    {
        parent::__construct();
        
        $this->clientId = env('GOOGLE_CLIENT_ID', 'TU_GOOGLE_CLIENT_ID');
        $this->clientSecret = env('GOOGLE_CLIENT_SECRET', 'TU_GOOGLE_CLIENT_SECRET');
        $this->redirectUri = base_url('/auth/google/callback');
    }
}