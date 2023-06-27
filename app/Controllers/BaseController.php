<?php

namespace App\Controllers;

use App\Helpers\BaseHelper;
use App\Helpers\WhatsappHelper;
use App\Models\AdminModel;
use App\Models\DiskonModel;
use App\Models\JenisBarangModel;
use App\Models\KritikSaranModel;
use App\Models\KurirModel;
use App\Models\MetodePembayaranModel;
use App\Models\PemesananModel;
use App\Models\PenerimaModel;
use App\Models\PengirimModel;
use App\Models\TarifModel;
use App\Models\UserModel;
use App\Models\WhatsappSender;
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

class BaseController extends Controller
{
	/**
	 * Instance of the main Request object.
	 *
	 * @var IncomingRequest|CLIRequest
	 */
	protected $request;
	protected $adminModel;
	protected $jenisbarang;
	protected $kurirModel;
	protected $metodepembayaran;
	protected $pemesananModel;
	protected $penerimaModel;
	protected $pengirimModel;
	protected $tarifModel;
	protected $whatsappsender;
	protected $diskonModel;
	protected $userModel;
	protected $kritiksaranModel;
	protected $utilsHelper;
	protected $whatsappHelper;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.: $this->session = \Config\Services::session();
        $this->adminModel = new AdminModel();
        $this->jenisbarang = new JenisBarangModel();
        $this->kurirModel = new KurirModel();
        $this->metodepembayaran = new MetodePembayaranModel();
        $this->pemesananModel = new PemesananModel();
        $this->penerimaModel = new PenerimaModel();
        $this->pengirimModel = new PengirimModel();
        $this->tarifModel = new TarifModel();
        $this->whatsappsender = new WhatsappSender();
        $this->diskonModel = new DiskonModel();
        $this->userModel = new UserModel();
        $this->kritiksaranModel = new KritikSaranModel();
        $this->utilsHelper = new BaseHelper();
        $this->whatsappHelper = new WhatsappHelper();

	}
}
