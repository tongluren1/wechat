<?php

namespace Qmang\Wechat;


use Illuminate\Config\Repository;
use Illuminate\Session\SessionManager;

class Qmang
{
	/**
	 * @var SessionManager
	 */
	protected $session;
	
	/**
	 * @var Repository
	 */
	protected $config;

    /**
     * Qmang constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
	public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }

    public function print_yiye($msg = '')
    {
//        $config_arr = $this->config->get('yiye.options');
        return $msg . '<h1>OK</h1>';
    }

    public static function get_msg($msg = '')
    {
        return $msg . '<h1>OK</h1>';
    }
}