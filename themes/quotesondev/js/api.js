(function($) {
  
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
        let author = data[0].title.rendered;
        let slug =  data[0].slug;
        let content = data[0].content.rendered;
        let source = data[0]._qod_quote_source;

        // history.pushState(null, null, " ");
        history.pushState(null, null, slug);
        var pathArray = window.location.pathname;
        // let fistPath = pathArray[2];
        // let secondPath = pathArray[3];
        // if (secondPath != ""){
        //   newUrl = window.location.pathname;
        //   return theURL.replace("/url_part_to_change/", "/new_url_part/"); 

        // };
        console.log(pathArray);
        

        if ( source == ""){
          $('.entry-title').text(author);
        }else{
          $('.entry-title').text(author+ ":" + source);
        }
        $('.entry-content').html(content);
      
      });
    });
  })(jQuery);

  


  