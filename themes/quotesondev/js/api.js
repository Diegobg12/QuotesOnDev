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

        history.pushState(null, null, slug);


        if ( source === ''){
          $('.entry-title').text(author);
        }else{
          let str =  source;
          var n = str.includes('@');
          if (n === true){
            var link = 	'<a href="https://twitter.com/' + source +'">'+ source +'</a>';
            $('.entry-title').html(author+ ': ' + link);
          } else{
            $('.entry-title').text(author + ': ' + source);
          }
        }
        $('.entry-content').html(content);
      
      });
    });
  })(jQuery);




  (function($) {
  
    $('.wpcf7-submit').on('click', function(event) {

      event.preventDefault();
      let nameField =  $('input[name ="Author-quote"]').val();
      let contentField =  $('input[name ="your-message"]').val();

      if((nameField == '')||(contentField == '')){
        alert('Complete the fields');
      }else{

          let newPost = {
            'title': $('input[name ="Author-quote"]').val(),
            'content': $('textarea[name ="your-message"]').val(),
            '_qod_quote_source': $('input[name ="your-subject"]').val(),
            '_qod_quote_source_url': $('input[name ="your-url"]').val(),
            'status': 'publish'
          };

          $.ajax({
            method: 'POST',
            data: newPost,
            url: red_vars.rest_url + 'wp/v2/posts',
            beforeSend : function (xhr) {
              xhr.setRequestHeader('X-Wp-Nonce', red_vars.wpapi_nonce)
            }
          }
          ).done(function(data) {
              window.location.href = data.link;
          });
    }
    });
  })(jQuery);


  