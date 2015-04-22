<?php namespace App\Http\Controllers;

class PdfController extends Controller {

  /*
  |--------------------------------------------------------------------------
  | PDF Controller
  |--------------------------------------------------------------------------
  |
  | This controller convert HTML file to PDF file
  |
  */

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('guest');
  }

  /**
   * Show the application dashboard to the user.
   *
   * @return Response
   */
  public function index()
  {
    $order['asd'] = "asd";
    return \PDF::loadView('pdf/testpdf', compact('order'))->stream();//download('download.pdf');
  }

}
