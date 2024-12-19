<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_design {

	public function vars() {
		$CI =& get_instance();

		$data = array(
			'path_template_admin' => base_url() . $CI->config->item('pathAssetsTemplateAdmin'),
			'path_template_front' => base_url() . $CI->config->item('pathAssetsTemplateFront'),
			'version' => $CI->config->item('version'),
			'Y' => $CI->config->item('Y'),
			'projectUrl' => $CI->config->item('projectUrl'),
			'projectName' => $CI->config->item('projectName')
		);

		return $data;
	}

	public function htmls($data) {
		$CI =& get_instance();

		$footer = $CI->parser->parse($CI->config->item('pathViewTemplateAdmin') . 'layout/htmlFooter', $data, true);
		$menuMain = $CI->parser->parse($CI->config->item('pathViewTemplateAdmin') . 'layout/htmlMenuMain', $data, true);
		$menuTop = $CI->parser->parse($CI->config->item('pathViewTemplateAdmin') . 'layout/htmlMenuTop', $data, true);
		$navMessages = $CI->parser->parse($CI->config->item('pathViewTemplateAdmin') . 'layout/htmlNavMessages', $data, true);
		$navNotifications = $CI->parser->parse($CI->config->item('pathViewTemplateAdmin') . 'layout/htmlNavNotifications', $data, true);
		$navTasks = $CI->parser->parse($CI->config->item('pathViewTemplateAdmin') . 'layout/htmlNavTasks', $data, true);
		$searchForm = $CI->parser->parse($CI->config->item('pathViewTemplateAdmin') . 'layout/htmlSearchForm', $data, true);

		$data = array(
			'footer' => $footer,
			'menuMain' => $menuMain,
			'menuTop' => $menuTop,
			'navMessages' => $navMessages,
			'navNotifications' => $navNotifications,
			'navTasks' => $navTasks,
			'searchForm' => $searchForm
		);

		return $data;
	}

    public function layout($type, $template, $data, $title = '', $path = '', $breadCrumbs = '', $tabs = '', $state = '', $code = 0, $html = '', $menu = '') {
		$CI =& get_instance();

		$data_design = $CI->admin_design->vars();

		$CrudData['head_title'] = $title;

		$headData['version'] = $CI->config->item('version');
		$headData['Y'] = $CI->config->item('Y');
		$headData['projectUrl'] = $CI->config->item('projectUrl');
		$headData['projectName'] = $CI->config->item('projectName');

		$htmls = $CI->admin_design->htmls($headData);

		$headData['menuMain'] = $htmls['menuMain'];
		$headData['menuTop'] = $htmls['menuTop'];
		$headData['navMessages'] = $htmls['navMessages'];
		$headData['navNotifications'] = $htmls['navNotifications'];
		$headData['navTasks'] = $htmls['navTasks'];
		$headData['searchForm'] = $htmls['searchForm'];

// ----------------------------------------------------------------------------------------------------------------

        $headData['head_title'] = $title;
        $headData['path_template_admin'] = base_url() . $CI->config->item('pathAssetsTemplateAdmin');
        $headData['breadCrumbs'] = $breadCrumbs;
        $headData['menu'] = $menu;

		$css = '';
		$css_default = 'assets/css/' . $path . '/view.css';
		if (file_exists($css_default)) {
		    $css = "\n" . '  <link rel="stylesheet" href="' . base_url() . $css_default . '?v=' . $CI->config->item('version') . '">';
		}
        $headData['css'] = $css;

		$script = '';
		$script_default = 'assets/js/' . $path . '/view.js';
		if (file_exists($script_default)) {
		    $script = '<script src="' . base_url() . $script_default . '?v=' . $CI->config->item('version') . '"></script>';
		}
        $footData['script'] = $script;

        $footData['path_template_admin'] = base_url() . $CI->config->item('pathAssetsTemplateAdmin');
		$footData['footer'] = $htmls['footer'];
		$proyVar = array(
			'base_url' => base_url(),
			'language' =>  $CI->session->userdata($CI->config->item('raiz') . 'be_lang_value'),
			'lang' =>  $CI->session->userdata($CI->config->item('raiz') . 'be_lang_code'),
		);
		$footData['proyVar'] = '<script>var proyVar =' . json_encode($proyVar) . ';var proyVarS ={"sgctn":"'.$CI->security->get_csrf_token_name().'","sgch":"'.$CI->security->get_csrf_hash().'"};</script>';
		$footData['txtVar'] = '<script>var txtVar =' .  json_encode($CI->lang->language) . ';</script>';

        $CrudData['title'] = $title;
        $CrudData['tabs'] = $tabs;
        $CrudData['state'] = $state;
        $CrudData['code'] = $code;
        $CrudData['html'] = $html;

        $CI->parser->parse($CI->config->item('pathViewTemplateAdmin') . 'layout/'.$type.'Head', $headData);
        $CI->parser->parse($template, $CrudData);
        $CI->parser->parse($CI->config->item('pathViewTemplateAdmin') . 'layout/'.$type.'Footer', $footData);

    }

    public function crudShow($crudTable, $title, $breadCrumbs = '', $css = '', $script = '', $tabs = '', $state = '', $code = 0, $html = '', $menu = '') {
    	$CI =& get_instance();

		$data_design = $CI->admin_design->vars();

		$data['head_title'] = 'Database';

		$headData['version'] = $CI->config->item('version');
		$headData['Y'] = $CI->config->item('Y');
		$headData['projectUrl'] = $CI->config->item('projectUrl');
		$headData['projectName'] = $CI->config->item('projectName');

		$htmls = $CI->admin_design->htmls($headData);

		$headData['menuMain'] = $htmls['menuMain'];
		$headData['menuTop'] = $htmls['menuTop'];
		$headData['navMessages'] = $htmls['navMessages'];
		$headData['navNotifications'] = $htmls['navNotifications'];
		$headData['navTasks'] = $htmls['navTasks'];
		$headData['searchForm'] = $htmls['searchForm'];

// ----------------------------------------------------------------------------------------------------------------

        $headData['head_title'] = $title;
        $headData['path_template_admin'] = base_url() . $CI->config->item('pathAssetsTemplateAdmin');
        $headData['breadCrumbs'] = $breadCrumbs;
        $headData['css'] = $css;
        $headData['menu'] = $menu;

        $footData['script'] = $script;
        $footData['path_template_admin'] = base_url() . $CI->config->item('pathAssetsTemplateAdmin');
		$footData['footer'] = $htmls['footer'];

        $crudTableData['title'] = $title;
        $crudTableData['css_files'] = $crudTable->css_files;
        $crudTableData['js_files'] = $crudTable->js_files;
        $crudTableData['tabs'] = $tabs;
        $crudTableData['output'] = $crudTable->output;
        $crudTableData['state'] = $state;
        $crudTableData['code'] = $code;
        $crudTableData['html'] = $html;

        $CI->parser->parse($CI->config->item('pathViewTemplateAdmin') . 'layout/groceryHead', $headData);
        $CI->load->view($CI->config->item('pathViewTemplateAdmin') . 'grocery',$crudTableData);
        $CI->parser->parse($CI->config->item('pathViewTemplateAdmin') . 'layout/groceryFooter', $footData);
    }

}