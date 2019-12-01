<!doctype html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Pirámide_n</title>
    </head>
    
    <body>
        <?php $num = $_POST["numero"]; ?>
        
        <script>
            document.write("<p style='text-align: center; margin: 0;'>");
            var i = 0, j, k, q;
            var n = <?php echo $num ?>
                
                if(n <= 50){
                    while(i <= n) {
                        if(i > 0){
                           for(q = i - 1; q >= 1; q--) {
                                    document.write(q+"&nbsp;");
                            }
                        }
                       for(k = 0; k <= i - 1; k++) {
                           document.write(k+" ");
                        }

                        document.write("<br>");

                        i++;
                    }
                }
        </script>
    </body>
</html>