var i = 0, j, k, q;
document.write("<p style='text-align: center; margin: 0;'>");
while (i <= 20) {
    if (i > 0) {
       for(q = i - 1; q >= 1; q--) {
                document.write(q+"&nbsp");
        }
    }
   for(k = 0; k <= i - 1; k++) {
       document.write(k+" ");
    }
    
    document.write("<br>");
    
    i++;
}