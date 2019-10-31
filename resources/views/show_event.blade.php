<html>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <ul id="event_list">
            <li>aaa</li>
        </ul>

        <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
        <script>
        var pusher = new Pusher('<?php echo env('PUSHER_APP_KEY'); ?>', {
            cluster: 'ap2',
            encrypted: true
        });

        var channel = pusher.subscribe('test_channel');

        channel.bind('test_event', function(data) {
            var x = data.body;
            console.log(x);
            //var groups=JSON.stringify(x['enterprise_details']);
        });
        </script>
    </body>
</html>