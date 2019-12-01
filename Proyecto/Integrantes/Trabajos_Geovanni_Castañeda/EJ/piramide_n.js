
var i = 0, j, k, q;
document.write("<p style='text-align: center; margin: 0;'>");
var n = prompt("Escribe un numero.", "");

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