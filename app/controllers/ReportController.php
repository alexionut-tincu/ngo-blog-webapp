<?php

require_once '../app/libs/fpdf.php';

class ReportController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
        if (!isAdmin()) {
            redirect('index.php?action=login_form');
        }
    }

    public function generatePostReport() {
        $posts = getAllPosts($this->pdo);

        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(40, 10, 'Blog Post Report');
        $pdf->Ln(20);

        foreach ($posts as $post) {
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(0, 10, 'Title: ' . $post['title'], 0, 1);
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(0, 10, 'Author: ' . $post['author'], 0, 1);
            $pdf->MultiCell(0, 10, 'Content Snippet: ' . substr($post['content'], 0, 100) . '...');
            $pdf->Ln(10);
        }

        // Output the PDF to the browser
        $pdf->Output('D', 'blog_post_report.pdf');
        exit;
    }
}