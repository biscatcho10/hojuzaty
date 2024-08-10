@if (in_array($page, ['home', 'about', 'inquiry', 'blogs', 'blog', 'destinations', 'destination']))
    <script src="{{ asset('frontend/js/swiper.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

    <!-- Jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Notify.js CDN -->
    <script src="https://cdn.rawgit.com/notifyjs/notifyjs/master/dist/notify.js"></script>
    <!-- Optional: Notify.js CSS for custom styles -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/notifyjs/notifyjs/master/dist/notify.css">

    <script>
        $("form").submit(function(e) {
            e.preventDefault();

            var form = $(this).closest('form');
            var url = form.attr('action');
            var data = form.serialize();

            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                success: function(response) {
                    if (response.status == 'success') {
                        $.notify(response.message, "success");
                        form.trigger('reset');
                    }
                },
                error: function(response) {
                    $.notify(response.responseJSON.message, "error");
                }
            });
        });
    </script>
@else
@endif
