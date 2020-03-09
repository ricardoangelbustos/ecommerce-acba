@extends('layouts.template')

@section('title', 'FAQ')

@section('css')
    {{ '/css/faq.css' }}
@endsection

@section('main')
<div id="main-title">
    <h1>Preguntas Frecuentes</h1>
</div>

<article class="nosotros">

    <h2 class="subtitle">Sobre nosotros</h2>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿Quienes somos?
                    </button>
                </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                    squid.
                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                    nesciunt
                    laborum eiusmod.
                </div>
            </div>
        </div>
</article>
<article class="servicios">
    <h2 class="subtitle">Nuestro servicio</h2>
    <div class="accordion" id="accordionExample">

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ¿Cómo utlizo el servicio online?
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                    squid.
                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                    nesciunt
                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                    single-origin
                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                    wes
                    anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                    Leggings
                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                    haven't
                    heard
                    of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <h2 class="subtitle">Cómo registrarse</h2>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Quiero comprar, ¿cómo me registro?
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                    squid.
                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                    nesciunt
                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                    single-origin
                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                    wes
                    anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                </div>
            </div>
        </div>
    </div>
</article>

<article class="cuenta">
    <h2 class="subtitle">Mi cuenta</h2>
    <div class="accordion" id="accordionExample">

        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        ¿Cómo puedo acceder a mi cuenta?
                    </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                    squid.
                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                    nesciunt
                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                    single-origin
                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                    wes
                    anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                    Leggings
                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                    haven't
                    heard
                    of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFive">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        No puedo acceder a mi cuenta, ¿qué hago?
                    </button>
                </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                    squid.
                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                    nesciunt
                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                    single-origin
                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                    wes
                    anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                    Leggings
                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                    haven't
                    heard
                    of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingSix">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Mi cuenta está bloqueada, ¿cómo la habilito?
                    </button>
                </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                    squid.
                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                    nesciunt
                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                    single-origin
                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                    wes
                    anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                    Leggings
                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                    haven't
                    heard
                    of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>
</article>
<article class="password">
    <h2 class="subtitle">Contraseña</h2>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingSeven">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        Olvidé mi contraseña, ¿cómo creo una nueva?
                    </button>
                </h2>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                    squid.
                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                    nesciunt
                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                    single-origin
                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                    wes
                    anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                    Leggings
                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                    haven't
                    heard
                    of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>
</article>
<article>
    <h2 class="subtitle">Medios de pago</h2>
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="headingEight">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        ¿Cuáles son los medios de pago habilitados para pagar?
                    </button>
                </h2>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                    squid.
                    3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                    nesciunt
                    laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                    single-origin
                    coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                    wes
                    anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                    Leggings
                    occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                    haven't
                    heard
                    of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
        <br>
    </div>
</article>



@endsection