<?php
/**
 * UploadController
 * Controls everything that is related to upload
 *
 */
 class UploadController extends Controller{
 	/**
     * Construct this object by extending the basic Controller class.
     */
 	public function __construct()
 	{
 		parent::__construct();

 		// VERY IMPORTANT: The upload feature is only visible and usable by logged-in users
        // need this line! Otherwise not-logged in users could do actions.
        Auth::checkAuthentication();
 	}

 	/**
	*
	*
 	*/ 
 	public function index()
 	{
 		$this->View->render('upload/index');
 	}




 }


?>