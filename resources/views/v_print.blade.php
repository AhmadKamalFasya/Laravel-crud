<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .container {
            margin-bottom: 25px;
        }

        img {
            width: 150px;
        }

        h3 {
            margin-top: 60px;
            float: right;
        }

        small {
            float: right;
        }

        h4 {
            text-align: center;
            margin-bottom: 50px;
        }
    </style>
    <title>Laporan Mahasiswa</title>
</head>

<body onload="window.print();">

    <div class="container">
        <small class="float-right">Date : {{date('d-m-Y')}}</small>
        <img src="/img/images.png" alt="" width="150">
        <h3>Zeph University</h3>
        <h4>LAPORAN DATA MAHASISWA</h4>
        <div class=" table-responsive-md">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">NIM</th>
                        <th>Nama</th>
                        <th class="text-center">Prodi</th>
                        <th class="text-center">Matakuliah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $no = 1; ?>
                        @foreach ($mahasiswa as $data)
                        <td class="text-center">{{$no++}}</td>
                        <td class="text-primary text-center">{{$data->nim}}</td>
                        <td>{{$data->nama}}</td>
                        <td class="text-center">{{$data->prodi_id}}</td>
                        <td class="text-center">{{$data->matakuliah_id}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>