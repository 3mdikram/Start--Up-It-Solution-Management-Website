<?php

namespace App\Controllers;

use Config\Database;
use Config\Services;
use CodeIgniter\Controller;
use Psr\Log\LoggerInterface;
use CodeIgniter\HTTP\CLIRequest;
use App\Models\Website\Webnavbar;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

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
     * @var array
     */
    protected $helpers = ['text','form','date'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    protected $session;
    protected $navbar;
    protected $db;
    protected $vendor;
    protected $team;
    protected $sidebar;
    public function __construct()
    {
        $nav= new  Webnavbar;
        $data=$nav->findAll();
        $this->navbar=$data;
        //Database global connect
        $this->db=Database::connect();
        //Global Vendor
        $vendor = $this->db->table('vendors')->get();
        $result=$vendor->getResultArray();
        $this->vendor=$result;
        //Global Team
        $query2 = $this->db->table('teamembers')->get();
        $result1=$query2->getResultArray();
        $this->team=$result1;
        //Admin Sidebar Data Get
        $sbar = $this->db->table('sidebars')->get();
        $sidebar=$sbar->getResultArray();
        $this->sidebar=$sidebar;
    }

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        $this->session = \Config\Services::session();
    }
}
