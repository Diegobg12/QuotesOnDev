(function($) {
  console.log(red_vars);
    $('#close-comments').on('click', function(event) {

      event.preventDefault();
      $.ajax({
        method: 'get',
        url: red_vars.rest_url + 'wp/v2/posts?filter[posts_per_page]=1&filter[orderby]=rand',
        beforeSend: function(xhr) {
          xhr.setRequestHeader('X-WP-Nonce', red_vars.wpapi_nonce);
        }
      }
      ).done(function(data) {
        event.preventDefault();

        console.log(slug);
        // $(".author").text(" ");
        // $(".author").text(data.);

        console.log(data)


      });
    });
  })(jQuery);




