@extends('layouts.index')
@section('content')
<main>
    <!-- Hero Area Start-->
    <div class="hero-area2 slider-height d-flex align-items-center" style="min-height: 250px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-cap text-center">
                        <!-- Bredcrumb -->
                        <nav aria-label="breadcrumb"></nav>
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ url('/')}}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Play</a></li>
                            <li class="breadcrumb-item">
                                <a href="#">
                                    {{ $data['id'] }} Letter
                                </a>
                            </li>
                        </ol>
                        </nav>
                        <h2 data-animation="fadeInLeft" data-delay=".4s">Word Scrambler </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero Area End-->
    <!--? Pricing Card Start -->
    <section class="pricing-card-area pricing-card-area2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="single-card text-center mb-30">
                        <a href="{{ route('play',['id' => '5']) }}" class="btn" style="padding: 10px 30px;">
                            <i class="fas fa-play-circle"></i> Play 5 Letter
                        </a>
                        <a href="{{ route('play',['id' => '6']) }}" class="btn" style="padding: 10px 30px;">
                            <i class="fas fa-play-circle"></i> Play 6 Letter
                        </a>
                        <a href="{{ route('play',['id' => '7']) }}" class="btn" style="padding: 10px 30px;">
                            <i class="fas fa-play-circle"></i> Play 7 Letter
                        </a>
                        <a href="{{ route('play',['id' => '8']) }}" class="btn" style="padding: 10px 30px;">
                            <i class="fas fa-play-circle"></i> Play 8 Letter
                        </a>
                        <a href="{{ route('play',['id' => '9']) }}" class="btn" style="padding: 10px 30px;">
                            <i class="fas fa-play-circle"></i> Play 9 Letter
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing-card-area pricing-card-area2 section-padding40" style="padding-top: 40px;">
        <div class="container">
            <form method="POST" id="form_jawaban" name="form_jawaban">
                <input type="hidden" name="level" value="{{$data['id']}}">
                <div class="row">
                    @csrf
                    <?php
                    $no=0;
                    ?>
                    @foreach ($data['data'] as $value)
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <i class="fas fa-file-word" style="font-size: 50px;color:#fa8f77;margin-bottom:10px;"></i>
                                <h4 style="letter-spacing: 20px;">{{ randomWord($value['text']) }}</h4>
                            </div>
                            <div class="card-mid">

                            </div>
                            <div class="card-bottom">
                                <div class="col-md-12">
                                    <input type="hidden" name="id[]" value="{{ $value->id }}">
                                    <textarea class="form-control w-100" name="noun[]" rows="5" style="resize: none;" placeholder="Masukkan Jawaban">{{ substr($value['text'],0,3) }}</textarea>
                                </div>
                                <br>
                                <ul>
                                    <li class="data{{$no++}}"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 jawaban">
                        <button type="submit" class="btn" id="btn">
                            {{ __('Jawab') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Want To work End 2-->
</main>
@endsection

@section('scripts')
<script>
    $("[name=form_jawaban]").on('submit', function(e) {
        e.preventDefault();

        $('#btn').text('sedang menyimpan...');
        $('#btn').attr('disabled', true);

        var form = $('#form_jawaban')[0];
        var data = new FormData(form);
        var url = '{{route("save")}}';


        Swal.fire({
            text: "Apakah Jawaban Anda Sudah Benar?",
            title: "Perhatian",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: "#2196F3",
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
            closeOnConfirm: false,
            closeOnCancel: true
        }).then((result) => {
            if (result.value) {
                $('.confirm').text('sedang menyimpan...');
                $('.confirm').attr('disabled', true);

                $.ajax({
                    url: url,
                    type: 'post',
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(res) {
                        var obj = JSON.parse(res);
                        Swal.fire({
                                text: obj.message,
                                title: obj.title,
                                icon: obj.icon,
                                button: true,
                            });
                        for (var i = 0; i < obj.input_error.length; i++) 
                        {
                            $('.'+obj.input_error[i]).parent().parent().addClass('has-error');
                            $('.'+obj.input_error[i]).text(obj.error_string[i]);
                            
                        }
                        $('#btn').text('Simpan');
                        $('#btn').attr('disabled', false);
                        $('.jawaban').html('<a href="javascript:void();" class="borders-btn">'+obj.message+'</a> &nbsp; <a href="{{route("home")}}" class="btn">History</a> &nbsp; <a href="{{url()->current()}}" class="btn">Main lagi</a>');
                    }
                });
            } else {
                $('#btn').text('Simpan');
                $('#btn').attr('disabled', false);
            }

        });
    });
</script>
@endsection
