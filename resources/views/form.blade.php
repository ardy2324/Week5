<!DOCTYPE html>
<html>

<head>
    <title>Forms</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
{{-- ============================================================================ --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="post" class="form-horizontal">

                {{-- csrf field sangat penting supaya bisa jalan --}}
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="gender">Jenis Kelamin</label>
                        <div class="radio">
                            <label><input type="radio" name="gender" value="m">Laki-laki</label>
                        </div>

                        <div class="radio">
                            <label><input type="radio" name="gender" value="f">Perempuan</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="gender" value="o">Other</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="weapon">Senjata Pilihan</label>
                        <h5>(*Bisa pilih lebih dari satu)</h5>
                        <input type="checkbox" name="weapon[]" value="Maramusa">Maramusa<br>
                        <input type="checkbox" name="weapon[]" value="Exalibur">Exalibur<br>
                        <input type="checkbox" name="weapon[]" value="Sange&Yasha">Sange & Yasha<br>
                        <input type="checkbox" name="weapon[]" value="Cuirass">Cuirass
                    </div>

                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
{{-- ============================================================================= --}}
                {{-- isset adalah apakah variable ada isi atau tidak --}}

                <br> @if(isset($nama)) Halo, {{ $nama }} @endif
                <br> @if(isset($email)) Email kamu {{ $email }} @endif
                <br> @if(isset($gender)) Kamu adalah seorang @if($gender == "m") Laki-laki @elseif($gender == "f") Perempuan @else Ga jelas @endif @endif
                <br> @if(isset($weapon)) Senjata Pilihan:
                     @foreach($weapon as $wp)
                         <br> -> {{ ucwords($wp) }}
                     @endforeach
                     @endif
            </div>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>
