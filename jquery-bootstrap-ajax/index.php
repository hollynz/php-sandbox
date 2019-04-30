<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>jQuery Bootstrap AJAX</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
  </head>
  <body>

    <ul class="nav nav-tabs" id="tabs" role="tablist">
        <li class="nav-item filled" data-id="0">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#panel0" role="tab" aria-controls="home" aria-selected="true">Panel0</a>
        </li>
        <li class="nav-item" data-id="1">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#panel1" role="tab" aria-controls="profile" aria-selected="false">Panel1</a>
        </li>
        <li class="nav-item" data-id="2">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#panel2" role="tab" aria-controls="contact" aria-selected="false">Panel2</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="panel0" role="tabpanel" aria-labelledby="home-tab">Panel0 content</div>
        <div class="tab-pane fade" id="panel1" role="tabpanel" aria-labelledby="profile-tab"></div>
        <div class="tab-pane fade" id="panel2" role="tabpanel" aria-labelledby="contact-tab"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $('#tabs').on('click', 'li', function() {
            let listItem = $(this);
            if(!listItem.hasClass('filled')){
                fillData(listItem);
            }
        });

        function fillData(listItem) {
            let id = listItem.data('id');
            let request = $.ajax({
                url: 'tab-data.php',
                type: 'POST',
                dataType: 'json',
                data: {id: id}
            });

            request.done(function(data) {
                $('#panel' + id).html(data.content);
                listItem.addClass('filled');
            });

            request.fail(function(jqXHR, textStatus) {
                console.log("Request failed: " + textStatus);
            });
        }
    </script>
  </body>

  
</html>