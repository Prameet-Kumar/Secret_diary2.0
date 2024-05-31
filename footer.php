<script type="text/javascript">
    $(".toggleforms").click(function() {
        $("#signup").toggle();
        $("#login").toggle();
    })


    $('#diary').bind('input propertychange', function() {

        $.ajax({
                method: "POST",
                url: "update.php",
                data: {
                    content: $("#diary").val()
                }
            })
            // .done(function(msg) {
            //     alert("data saved :" + msg);
            // })
    });
</script>

</body>

</html>