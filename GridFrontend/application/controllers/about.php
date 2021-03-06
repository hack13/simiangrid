<?php

class About extends Controller {

    function About()
    {
        parent::Controller();
        $this->load->library('Form_validation');
        $this->load->helper('simian_view_helper');
        $this->load->helper('simian_facebook_helper');
        
        $this->lang->load('simian_grid', get_language() );
    }
    
    function index()
    {
        $data = array();
        $data['page'] = 'about';
        
        if ($this->sg_auth->is_logged_in())
        {
            $data['logged_in'] = true;
            $uuid = $this->sg_auth->get_uuid();
            $data['user_data'] = $this->simiangrid->get_user($uuid);
        }
        else
        {
            $data['logged_in'] = false;
        }
        
        parse_template('about', $data);
    }
    
    function tooltip($tooltip)
    {
        if ( $tooltip == null ) {
            $tooltip = $this->input('tooltip');
        }
        $value = lang("tooltip_$tooltip");
        if ( ! $value ) {
            echo lang('tooltip_generic');
        } else {
            echo $value;
        }
    }
    
    function style_selection()
    {
        if ( $this->sg_auth->is_logged_in() ) {
            $val = $this->form_validation;
            $val->set_rules('style', '', 'trim|required|xss_clean|min_length[4]|max_length[30]');
        
            if ( $val->run() ) {
                $style = $val->set_value('style');
                $styles = $this->config->item('style_list');
                if ( isset($styles[$style]) ) {
                    $uuid = $this->sg_auth->get_uuid();
                    $this->user_settings->set_style($uuid, $style);
                }
            }
        }
        return;
    }
}
