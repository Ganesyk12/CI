<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use Dompdf\Dompdf;
use App\Models\Contact;

class PdfController extends Controller
{
    protected $contact;
    function __construct()
    {
        $this->contact = new Contact();
    }

    public function index()
    {
        $data['data'] = $this->contact->findAll();
        return view('pdf_view', $data);
    }

    public function generate()
    {
        $data['data'] = $this->contact->findAll();

        $filename = date('y-m-d-H-i-s'). '-qadr-labs-report';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('pdf_view',$data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}