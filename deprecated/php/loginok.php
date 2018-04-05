<script>
    //alert(document.URL); // viser token 
    var x = document.URL;

    //document.write(x);
    
    var old = "261168726.4747239.ca74bc4616de434bbc5c1903ae58d78a"; // that's a deprecated token - but we need the length of a token.
    console.log("Token length " + old.length);
    console.log("Url length " + x.length);
    console.log("So my substring must be " + (x.length - old.length) + ", " + x.length); 
    
    document.write("Token = " + x.substring((x.length - old.length), x.length)); // displays the token part of the url only
    // document.write("<br>Test: " + document.URL);
</script>
