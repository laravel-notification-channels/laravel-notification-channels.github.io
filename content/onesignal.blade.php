@extends('_includes.base')

@section('body')
    <script>
        var file = 'onesignal',
                baseURL = 'https://raw.githubusercontent.com/laravel-notification-channels/' + file + '/master/README.md';

        $.get(baseURL, function (data, status) {
            var md = window.markdownit();
            var result = md.render(data);

            $('.realContent').prepend(result);
        });
    </script>
@stop