<div class="modal fade" id="current_user_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Lizard-Spock Expansion Rock</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('sheldon/validateU')}}" method="post">
                @csrf
                <div class="modal-body">
                    <h5>Instrucciones</h5>
                    <p>The Lizard-Spock Expansion Rock, Paper, Scissors, Lizard, Spock es un juego de azar que se
                        expande.
                        Primero se usa para resolver una disputa sobre qué ver en la televisión entre Sheldon y Raj en
                        "The
                        Lizard-Spock Expansion". Se menciona nuevamente en "La desintegración de Rothman", donde Sheldon
                        explica las reglas a Pennyy Barry Kripke</p>
                    <ul>
                        <li>Las tijeras cortan el papel</li>
                        <li>El papel cubre la roca</li>
                        <li>La roca aplasta al lagarto</li>
                        <li>El lagarto envenena a Spock</li>
                        <li>Spock aplasta las tijeras</li>
                        <li>Las tijeras decapitan al lagarto</li>
                        <li>El lagarto come el papel</li>
                        <li>El papel refuta a Spock</li>
                        <li>Spock vaporiza la roca</li>
                        <li>La roca aplasta las tijeras</li>
                    </ul>
                    <hr>
                    <h5>Login as</h5>
                    <small>You may continue your progress if an user was already registered</small>
                    <div class="form-group">
                        <label style="width: 100%">Username <input type="text" class="form-control" name="name"
                                                                   required>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary float-left">Empezar</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="modal fade" id="mastermind_current_user_modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">MasterMind</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{url('mastermind/validateU')}}" method="post">
                @csrf
                <div class="modal-body">
                    <h5>Instrucciones</h5>
                    <p>En este juego es bastante sencillo, en un nivel fácil, tienes 4 fichas en el tablero y 8
                        intentos. El navegador crea una combinación de 4 fichas aleatorias de color que se predefinan
                        utilizables para el juego.</p>
                    <p>Al iniciar tienes las 4 fichas en negro, al hacer clic en 1 ficha, se descubre y si aciertas en
                        el color a mano izquierda debe salir un indicador de 4 fichas donde de acierto marcando un
                        circulo negro y blanco si has fallado siguiendo el sentido.</p>
                    <p>
                        Los colores no deben repetirse para hacer más sencillo el juego.La cuestión es que ganes en el
                        menor número de intentos posibles, si alcanzas los 8 intentos pierdes.
                    </p>
                    <p>Ejemplo <a href="https://es.wikipedia.org/wiki/Mastermind">link</a></p>
                    <hr>
                    <h5>Login as</h5>
                    <small>You may continue your progress if an user was already registered</small>
                    <div class="form-group">
                        <label style="width: 100%">Username <input type="text" class="form-control" name="name"
                                                                   required>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary float-left">Empezar</button>

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>

        </div>
    </div>
</div>

