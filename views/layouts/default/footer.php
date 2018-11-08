</div>
<script src="<?php echo $_layoutParams["ruta_js"]; ?>confirm.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
</body>
</html>
