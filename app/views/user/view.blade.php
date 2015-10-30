<html>
<head>
    <script type="text/javascript" src="js/pdfobject.js"></script>

    <script type="text/javascript">

        window.open = function (){

            var success = new PDFObject({ url: "/downloadBooks" }).embed("pdf");

        };

    </script>
</head>

<body>
<div id="pdf">It appears you don't have Adobe Reader or PDF support in this web browser. <a href="/downloadBooks">Click here to download the PDF</a></div>


</body>
</html>
