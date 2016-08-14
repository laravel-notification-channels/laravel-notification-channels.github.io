<style>
    .realContent p:first-of-type{
        display: none;
    }

    .realContent h2:first-of-type{
        display: none;
    }

    .realContent ul:first-of-type{
        display: none;
    }
</style>

<script>
    var file = '{{$repoName}}',
            baseURL = 'https://raw.githubusercontent.com/laravel-notification-channels/' + file + '/master/README.md';

    $.get(baseURL, function (data) {
        var md = window.markdownit();
        var result = md.render(data);

        $('.realContent').prepend(result);

        Prism.highlightAll();
    });
</script>

<hr>

<a class="btn btn-default" href="https://github.com/laravel-notification-channels/{{$repoName}}/edit/master/README.md">Edit on GitHub</a>