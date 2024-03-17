$(document).ready(function(){
    loadNews();

    $('#refresh-news-btn').click(function(){
        loadNews(); 
    });

    $('#add-news-form').submit(function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'add_news.php',
            data: $(this).serialize(),
            success: function(response){
                alert(response);
                loadNews();
                $('#add-news-form')[0].reset();
            }
        });
    });

    function loadNews() {
        $.ajax({
            type: 'GET',
            url: 'get_news.php',
            dataType: 'json',
            success: function(news){
                $('#news-list').empty(); 
                $.each(news, function(index, article){
                    var newsItem = '<div class="card mb-3">';
                    newsItem += '<div class="card-body">';
                    newsItem += '<h5 class="card-title">' + article.title + '</h5>';
                    newsItem += '<p class="card-text">' + article.content + '</p>';
                    newsItem += '<p class="card-text"><small class="text-muted">' + article.created_at + '</small></p>';
                    newsItem += '</div></div>';
                    $('#news-list').append(newsItem);
                });
            }
        });
    }
});
