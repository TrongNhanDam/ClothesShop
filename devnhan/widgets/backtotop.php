
<div title="Về đầu trang" id="top-up">
    <i class='bx bxs-up-arrow-square'></i>
</div>
<script>
    // kéo xuống khoảng cách 500px thì xuất hiện nút Top-up
    var offset = 500;
    // thời gian di trượt 0.75s ( 1000 = 1s )
    var duration = 750;

    $(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > offset)
                $('#top-up').fadeIn(duration);
            else
                $('#top-up').fadeOut(duration);
        });
        $('#top-up').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, duration);
        });
    });
</script>