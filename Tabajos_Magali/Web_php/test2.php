<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Piramide</title>
	</head>
    <body>
        <?php
            $num = $_POST["number"];
        ?>
        <script>
            var i = 0, j, k, q, n = <?php echo $num;?>;
            document.write("<p style='text-align: center; margin: 0;'>");
                if(n <= 50){
                    while(i <= n) {
                        if(i > 0){
                           for(q = i - 1; q >= 1; q--) {
                                    document.write(q+"&nbsp;");
                            }
                        }
                       for(k = 0; k <= i - 1; k++) {
                           document.write(k+"&nbsp;");
                        }

                        document.write("<br>");
                        i++;
                    }
                }
        </script>
    </body>
</html>