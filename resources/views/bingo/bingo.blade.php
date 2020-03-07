<!DOCTYPE html>
<html lang="zh-Hant-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}" />

    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!--

    <link rel="stylesheet" href="{{ URL::to('css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap-fileinput/css/fileinput.css') }}" media="all" >
    <link rel="stylesheet" href="{{ URL::to('css/jquery-ui.css') }}">
-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    @yield('style')

</head>

<body>

    <!--
        <div class = "container">

    -->
    {{-- 從這裡開始編輯 --}}
    <div class="container">
        <div class="row justify-content-between">


發給大家一張九宮格賓果紙，
上面有九格不同的目標（每個人的目標皆為亂數隨機取出），
大家在遊戲時間內隨意走動與其他人聊天，
最先完成三條連線即為優勝。
遊戲途中請遵循以下規則：
請勿將自己的目標洩漏給他人。
每格皆需要不同的人簽名，任意兩格不可重複。
請勿作弊，得獎者隨機抽取目標與大家分享內容


            <table class="table table-bordered">

                <tbody>

                    <tr>
                        @for( $i =0; $i<3; $i++)
                        <td><button type="button" onclick="changeColor(this)" class="btn  btn-lg btn-block btn-outline-dark">{{ $bingos[$i]->bingo_content }}</button></td>

                            @endfor
                    </tr>
                    <tr>
                        {{-- @for( $i =3; $i<=5; $i++) <td>{{ $bingos[$i]->bingo_content }}</td>

                            @endfor --}}
                            <td><button type="button" onclick="changeColor(this)" class="btn  btn-lg btn-block btn-outline-dark">{{ $bingos[3]->bingo_content }}</button></td>
                            <td><button type="button" onclick="changeColor(this)" class="btn  btn-lg btn-block btn-outline-dark">{{ $hard[0]->bingo_content }}</button></td>

                            <td><button type="button" onclick="changeColor(this)" class="btn  btn-lg btn-block btn-outline-dark">{{ $bingos[5]->bingo_content }}</button></td>
                    </tr>
                    <tr>
                        @for( $i =6; $i<9; $i++)
                        <td><button type="button" onclick="changeColor(this)" class="btn  btn-lg btn-block btn-outline-dark">{{ $bingos[$i]->bingo_content }}</button></td>

                            @endfor
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

<script>
    function changeColor(obj){
        $(obj).removeClass("btn-outline-dark")
        $(obj).addClass("btn-dark")
    }
</script>





    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://kit.fontawesome.com/25aaaca632.js"></script>





    <!--
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    -->





    @yield('scripts')
</body>

</html>


<!--AIzaSyBq3-ipAPt0uMNG2Y3OOj3trwDKyShkBOc
-->
