<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body{
            margin: 50px;
        }
    </style>
  </head>
  <body>
    <table class="table table-primary table-striped" id="users">
        <thead>
            <tr>
                <th scope="col-sm-6">Title</th>
                <th scope="col-sm-3">Publication Date</th>
                <th scope="col-sm-3">Link</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#users').DataTable({
                'processing' : true,
                'pageLength' : 10,
                'ajax': {
                    url: '<?php echo base_url();?>Home',
                    type: 'POST',
                    data: {'ajax' : true} 
                },
                'order': [[1, 'asc']],
                'columnDefs': [
                    {
                        'targets': [2],
                        'orderable': false
                    }
                ]
            });
            // $.ajax({
            //     'url': "https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json",
            //     'type': "GET",
            //     'datatype': 'application/json',
            //     'secure': false,
            //     'success': function (response) {
            //         console.log(response);
            //         $('#users').dataTable( {
            //             "aaData": response,
            //             "columns": [
            //                 { "data": "id" },
            //                 { "data": "name" },
            //                 { "data": "detail_alias" },
            //                 { "data": "points" }
            //             ]
            //         })
            //     }
            // })
        });
    </script>

  </body>
</html>