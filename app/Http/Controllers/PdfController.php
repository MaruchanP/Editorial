<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use TCPDF;

class PdfController extends Controller
{
    public function generatePdf($id)
    {
        // Obtén los datos del libro por su ID
        $libro = Libro::findOrFail($id);

        // Crea una nueva instancia de TCPDF
        $pdf = new TCPDF();

        // Agrega una página al PDF
        $pdf->AddPage();

        // Configura el contenido del PDF utilizando los datos del libro
        $pdf->SetFont('helvetica', 'B', 16); // Usa la fuente predeterminada 'helvetica'
        $pdf->Cell(40, 10, 'Título: ' . $libro->titulo);
        
        $pdf->Ln();

        // Agrega una tabla con los datos del libro
        $html = '<table border="1">';
        $html .= '<tr><td>Autores:</td><td>' . $libro->autores . '</td></tr>';
        $html .= '<tr><td>Editorial:</td><td>' . $libro->editoriales . '</td></tr>';
        $html .= '<tr><td>Año Publicado:</td><td>' . $libro->anio_publicado . '</td></tr>';
        $html .= '<tr><td>Número de Páginas:</td><td>' . $libro->num_de_pag . '</td></tr>';
        $html .= '<tr><td>Precio:</td><td>' . $libro->precio . '</td></tr>';
        $html .= '<tr><td>Disponibilidad:</td><td>' . $libro->disponibilidad . '</td></tr>';
        $html .= '<tr><td>Géneros:</td><td>' . $libro->generos . '</td></tr>';
        $html .= '</table>';

        $pdf->writeHTML($html);

        // Guarda el PDF en el servidor o envíalo como respuesta al navegador
        $pdf->Output('libro_' . $libro->id . '.pdf', 'I');
    }
}
