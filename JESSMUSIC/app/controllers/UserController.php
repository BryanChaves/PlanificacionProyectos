<?php

class UserController extends \BaseController {

	protected $layout = 'layouts.default';
	public function index()
	{
		$this->layout->nest('content', 'User.login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->nest('content', 'User.registro');	
	}

	public function login(){
		$userdata = array(
            'email'     => Input::get('email'),
            'password'  => Input::get('password')
        );

        if (Auth::attempt($userdata)) {
            return Redirect::to('/');
        } else {
            // validation not successful, send back to form
            return Redirect::to('login')->withErrors(array('invalid_credentials' => 'Acceso Denegado'));
        }

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$name = Input::get('name');
		$last_Name1 = Input::get('last_Name1');
		$last_Name2 = Input::get('last_Name2');
		$email = Input::get('email');
		$password = Input::get('password');
		$password = Hash::make($password);
		$confirmation = Input::get('confirmation');
		$user = new User();
		$user->name = $name;
		$user->last_name1 = $last_Name1;
		$user->last_name2 = $last_Name2;
		$user->email = $email;
		$user->password = $password;
		$user->save();
		Auth::attempt(array('email' => $email, 'password' => $password));
		return Redirect::to('login');
	}

	public function logout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    public function isLogged()
    {
        if (Auth::guest()) {
            return Redirect::to('login');
        }
    }
	



	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
