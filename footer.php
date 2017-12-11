</main>
<footer>
    <div class="copyright">© . ALL RIGHTS RESERVED. DESENVOLVIDO POR <a href="http://agenciaalca.com" target="_blank"> AGÊNCIA ALCA</a></div>  
</footer>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- jQuery my instagram gallery -->
<script src="js/my-instagram-gallery.js"></script>
<script>
    $(document).ready(function () {
        $(".demo").myig(
                ins_id = 322548972, // your user_id
                ins_count = 10, // Count of media to return
                ins_token = '322548972.1677ed0.fb6b8f7b7c2740dfb336abea8134adac' // your token
                );
    });
</script>

<!-- Include fancybox library -->
<link type="text/css" rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"/>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function () {
        $(".myig_popup").fancybox({
            openEffect: 'fade',
            closeEffect: 'fade'
        });
    });
</script>


</body>
</html>