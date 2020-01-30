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
        var author = data[0].title.rendered;
        var slug =  data[0].slug;
        var content = data[0].content.rendered;
        history.pushState(null, null, slug);

        $('.entry-title').text(author);
        $('.entry-content').html(content);
      
      });
    });
  })(jQuery);




