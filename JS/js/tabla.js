<script src='../js/jspdf.debug.js'></script>
	<script src='../js/html2pdf.js'></script>
	<script>

        var pdf = new jsPDF('p', 'pt', 'letter');
        var canvas = pdf.canvas;
        canvas.height = 72 * 11;
        canvas.width=72 * 8.5;;
        //var width = 400;
        html2pdf(document.body, pdf, function(pdf) {
                var iframe = document.createElement('iframe');
                iframe.setAttribute('style','position:absolute;right:0; top:0; bottom:0; height:100%; width:500px');
                document.body.appendChild(iframe);
                iframe.src = pdf.output('datauristring');

               //var div = document.createElement('pre');
               //div.innerText=pdf.output();
               //document.body.appendChild(div);
            }
        );
    </script>
	
	
	{
  var pdf = new jsPDF('p', 'pt', 'a4');
  pdf.setFontSize(14);
  pdf.fromHTML(document.getElementById('content'), 
    margins.left, // x coord
    margins.top,
    {
      // y coord
      width: margins.width// max width of content on PDF
    },function(dispose) {
      headerFooterFormatting(pdf)
    }, 
    margins);
    
  var iframe = document.createElement('iframe');
  iframe.setAttribute('style','position:absolute;right:0; top:0; bottom:0; height:100%; width:650px; padding:20px;');
  document.body.appendChild(iframe);
  
  iframe.src = pdf.output('datauristring');
};