<?php
/**
 * SettingController.php
 *
 * @copyright  2022 opencart.cn - All Rights Reserved
 * @link       http://www.guangdawangluo.com
 * @author     Edward Yang <yangjin@opencart.cn>
 * @created    2022-06-29 16:02:15
 * @modified   2022-06-29 16:02:15
 */

namespace Beike\Admin\Http\Controllers;

use Beike\Plugin\Manager;

class PluginController extends Controller
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        $data = (new Manager)->getPlugins();
        dd($data);
        return view('admin::pages.plugins.index', []);
    }
}