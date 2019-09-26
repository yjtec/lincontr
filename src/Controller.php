<?php

namespace Yjtec\LinController;

use Yjtec\Lintools\Tools;
use Yjtec\Linview\View;

/**
 * Description of Controller
 *
 * @author Administrator
 */
class Controller {

    /**
     * 携带变量
     * @param type $name
     * @param type $value
     * @return $this
     */
    public function take($name, $value = '') {
        View::take($name, $value);
        return $this;
    }

    /**
     * 显示模板
     * @param type $templateFile
     * @param type $charset
     * @param type $contentType
     * @param type $content
     * @param type $prefix
     * @param type $HTTP_CACHE_CONTROL
     * @return $this
     */
    public function display($templateFile = '', $charset = '', $contentType = '', $content = '', $prefix = '', $HTTP_CACHE_CONTROL = '') {
        View::display($templateFile, $charset, $contentType, $content, $prefix, $HTTP_CACHE_CONTROL);
        return $this;
    }

    /**
     * Ajax方式返回数据到客户端
     * @access protected
     * @param mixed $data 要返回的数据
     * @param String $type AJAX返回数据格式
     * @return void
     */
    public function ajaxReturn($data, $type = 'JSON', $jsonOption = 0, $jsonpHeader = 'yjtec') {
        Tools::dataReturn($data, $type, $jsonOption, $jsonpHeader);
    }

}
