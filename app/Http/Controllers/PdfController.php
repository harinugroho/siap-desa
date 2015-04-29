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
  }

  /**
   * Show the application dashboard to the user.
   *
   * @return Response
   */
  public function index()
  {
      $order['nama'] = "asd";
      $order['pekerjaan'] = "tukang ketik";
      $order['no_ktp'] = "190283120938109";
      $order['alamat'] = "Jalan raya, pinggir jalan";
//      return view('pdf/sppf');
      return \PDF::loadView('pdf/sppf', compact('order'))->setPaper('A4')->download('download.pdf');
  }

}
