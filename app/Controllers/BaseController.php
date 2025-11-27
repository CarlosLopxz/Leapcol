<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    protected $session;
    protected $data = [];

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.
        $this->session = service('session');
        
        // Configurar datos de sesión globales para todas las vistas
        $this->setSessionData();
    }
    
    /**
     * Configura los datos de sesión para todas las vistas
     */
    protected function setSessionData()
    {
        $isLoggedIn = $this->session->get('logged_in') ?? false;
        $userName = '';
        $userRole = '';
        $panelUrl = '';
        
        if ($isLoggedIn) {
            $userModel = new \App\Models\UserModel();
            $user = $userModel->find($this->session->get('user_id'));
            if ($user) {
                $userName = $user['name'];
                $userRole = $user['rol'];
                $panelUrl = $userRole === 'administrador' ? '/admin/dashboard' : '/cliente/dashboard';
            }
        }
        
        // Hacer estos datos disponibles globalmente para todas las vistas
        $this->data = [
            'isLoggedIn' => $isLoggedIn,
            'userName' => $userName,
            'userRole' => $userRole,
            'panelUrl' => $panelUrl
        ];
    }
    
    /**
     * Renderiza una vista con los datos de sesión incluidos
     */
    protected function renderView(string $view, array $data = []): string
    {
        return view($view, array_merge($this->data, $data));
    }
}
