<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }
            
            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }
            
            tr:nth-child(even) {
              background-color: #dddddd;
            }
            </style>
    </head>
    <body class="antialiased">
        <table>
            <tr>
              <th>Day</th>
              <th>Closed</th>
              <th>Afternoon</th>
              <th>Morning</th>
            </tr>
            <tr>
              <td>Monday</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Wednesday</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Thursday</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Friday</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Saturday</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Sunday</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
          </table>
    </body>
</html>
