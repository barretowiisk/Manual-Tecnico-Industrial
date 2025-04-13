<?php
$arquivo = basename($_GET['arquivo']);
$caminho = __DIR__ . "/manuais/$arquivo";

if (!file_exists($caminho) || pathinfo($caminho, PATHINFO_EXTENSION) !== 'pdf') {
    die("Arquivo inválido.");
}

$urlPDF = "manuais/" . rawurlencode($arquivo);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Visualizador</title>
  <style>
    html, body { margin: 0; height: 100%; overflow: hidden; }
    #viewerContainer { height: 100vh; }
  </style>
  <link rel="stylesheet" href="viewer/viewer.css"/>
</head>
<body>
  <div id="viewerContainer">
    <div id="viewer" class="pdfViewer"></div>
  </div>

  <script src="viewer/pdf.js"></script>
  <script src="viewer/pdf_viewer.js"></script>
  <script>
    const url = <?php echo json_encode($urlPDF); ?>;
    const CMAP_URL = '../viewer/cmaps/';
    const CMAP_PACKED = true;

    const eventBus = new pdfjsViewer.EventBus();
    const pdfLinkService = new pdfjsViewer.PDFLinkService({ eventBus });
    const pdfViewer = new pdfjsViewer.PDFViewer({
      container: document.getElementById("viewerContainer"),
      eventBus,
      linkService: pdfLinkService,
    });
    pdfLinkService.setViewer(pdfViewer);

    pdfjsLib.GlobalWorkerOptions.workerSrc = 'viewer/pdf.worker.js';

    fetch(url)
      .then(res => res.arrayBuffer())
      .then(data => {
        const loadingTask = pdfjsLib.getDocument({ data });
        return loadingTask.promise;
      })
      .then(pdfDocument => {
        pdfViewer.setDocument(pdfDocument);
        pdfLinkService.setDocument(pdfDocument, null);
      });
  </script>
</body>
</html>
