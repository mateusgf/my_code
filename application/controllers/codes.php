<?php

class Codes_Controller extends Base_Controller {

	public $restful = true;    

	public function get_index()
    {

    }    

	public function post_index()
    {
        $new_code = Code::create( 
                                array(
                                    'code' => Input::get('code') 
                                )
                        );
        if ($new_code) 
        {
            return Redirect::to_route('code', $new_code->id);            
        } 
        else
        {
            return 'Nao foi';
        }

    }    

	public function get_show($id)
    {
        $code = Code::find($id);
        return View::make('code.show', $code->to_array());
    }    

	public function get_edit($id)
    {
        $code = Code::find($id);

        if ($code) {
            return View::make('code.new', $code->to_array());
        }
        else
        {
            return Redirect::to_route('new_code');
        }


        
    }    

	public function get_new()
    {
        $empty_code = array('code' => '');
        return View::make('code.new', $empty_code);
    }    

	public function put_update()
    {

    }    

	public function delete_destroy()
    {

    }

}