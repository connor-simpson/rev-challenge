<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Revolution Bar Group Challenge</title>
  </head>
  <body>
        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h3>Revolutions Bar Group</h3>
            <p class="lead">A simple Lumen API to get stock data</p>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-primary">You can <code>POST</code>, and <code>GET</code> to {{env("APP_URL")}}/stock.</div>
                    <div class="list-group">
                        <a href="./api/stock" class="list-group-item list-group-item-action">
                            <strong><code>GET</code> Get all stock</strong>
                            <p class="mb-0">Get all stock and totals from the database</p>
                        </a>
                        <a href="./api/stock" class="list-group-item list-group-item-action">
                            <strong><code>POST</code> Get stock totals by date</strong>
                            <p class="mb-2">Get all stock and totals on specific date, or within date range.</p>

                            <strong>Body</strong>
                            <div class="card">
                            <table class="table table-striped bt-0 mb-0">
                                <tbody>
                                    <tr>
                                        <th scope="row"><code>startDate</code></th>
                                        <td>Required</td>
                                        <td>23/03/2021, 23rd March 2021, 23-03-2021</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><code>endDate</code></th>
                                        <td>(Optional)</td>
                                        <td>23/03/2021, 23rd March 2021, 23-03-2021</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </a>
          

                    </div>
                </div>
            </div>
        </div>

   </body>
</html>