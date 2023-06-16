<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/dashboard.css">
    <title>Dashboard Apolo</title>
</head>
<body>
    <header>
        <div class="menu">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="user">
            <h2> Administrador</h2>
        </div>
    </header>


    <div class="sideBar">
        <div class="actions">
            <div class="action" onclick="relacaoTurmas()">
                <i class="fa-solid fa-desktop"></i>
                <a href="#">Monitoramento</a>
            </div>
            <div class="action" onclick="cadastrarTurma()">
                <i class="fa-solid fa-house"></i>
                <a href="#">Cadastrar Turma</a>
            </div>
        </div>
        <div class="bottom">
            <div class="option">
                <i class="fa-solid fa-right-from-bracket"></i>
                <a href="login.php">Sair</a>
            </div>
        </div>
    </div>

    <main>

        <div class="campoRelogio">

            <div id="relogio-ditital">
                <div id="horas"></div>
                <div id="minutos"></div>
                <div id="segundos"></div>
                <div id="ampm"></div>
            </div>

        </div>

        <div class="relacao">
            <table class="turmas">
                <thead>
                    <tr>
                        <th>Sala</th>
                        <th>Turma</th>
                        <th>Curso</th>
                        <th>Posição de Liberação</th>
                        <th>Status</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>
                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>
                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>
                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>
                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>
                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>
                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>


                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>
                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>
                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>
                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>
                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>

                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>
                    <tr class="linhaTabela">
                        <td>Sala 1</td>
                        <td>1° Ano</td>
                        <td>Informática</td>
                        <td>01</td>
                        <td class="situacao"><i class="fa-solid fa-bolt"></i> A liberar...</td>
                        <td><button class="btnLiberar">Liberar</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="cadastrarTurma">
            <div class="title">Cadastrar Turma</div>
            <form action="#">

                <div class="inputArea">
                    <label><i class="fa-solid fa-chalkboard"></i>Sala</label>
                    <input type="text" name="sala" id="sala" placeholder="Sala">
                </div>

                <div class="inputArea">
                    <label><i class="fa-regular fa-lightbulb"></i>Turma</label>
                    <input type="text" name="turma" id="turma" placeholder="Turma">
                </div>

                <div class="inputArea">
                    <label><i class="fa-solid fa-graduation-cap"></i>Curso</label>
                    <input type="text" name="curso" id="curso" placeholder="Curso">
                </div>

                <div class="buttonArea">
                    <button>Cadastrar</button>
                    <button>Cancelar</button>
                </div>
            </form>
        </div>

    </main>
</body>
    <script>
        const sideBar = document.querySelector('.sideBar');
        const menuBar = document.querySelector('.menu');
        const tabelaRelacao = document.querySelector('.relacao');
        const formCadastrarTurma = document.querySelector('.cadastrarTurma');

    function relacaoTurmas(){
            tabelaRelacao.style.display = "flex";
            formCadastrarTurma.style.display = "none"
            function adicionarClasseLiberada() {
                let i = 0;

            function adicionarClasse() {
            if (i < linhaTabela.length) {
                linhaTabela[i].classList.add('liberada');
                situacao[i].innerHTML = "<i class='fa-solid fa-bolt'></i> Liberada"; // Adicionando o texto "liberada" à variável situacao
                i++;
      setTimeout(adicionarClasse, 6000); // 10000 milissegundos = 10 segundos
    }
  }

  adicionarClasse();
}

setInterval(adicionarClasseLiberada, 5000)

        }

        function cadastrarTurma(){
            tabelaRelacao.style.display = "none";
            formCadastrarTurma.style.display = "flex"
        }

        menuBar.addEventListener("click", () => {
            sideBar.classList.toggle("active")
        })

        setInterval(() => {

            const horas = document.querySelector('#horas');
            const minutos = document.querySelector('#minutos');
            const segundos = document.querySelector('#segundos');
            const ampm = document.querySelector('#ampm');

            let h = new Date().getHours();
            let m = new Date().getMinutes();
            let s = new Date().getSeconds();
            let am = "AM";

            // Am ou PM
            if (h > 12) {
            // h = h - 12     .... deixar a hora com só com os 12 números
            am = "PM"
            }

            // Inserir zero
            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            horas.innerHTML = h + ":";
            minutos.innerHTML = m + ":";
            segundos.innerHTML = s + "&nbsp";
            ampm.innerHTML = am;

  })

  /* Sistema de Liberação */

  const btnLiberar = document.querySelectorAll('.btnLiberar');
  const linhaTabela = document.querySelectorAll('.linhaTabela');
  const situacao = document.querySelectorAll('.situacao');



    btnLiberar.forEach((button, index) => {
    button.addEventListener("click", () => {
        linhaTabela.forEach((item, itemIndex) => {
        if (index === itemIndex) {
            item.classList.add("liberada");
            button.style.disabled = true
            situacao[itemIndex].innerHTML = "<i class='fa-solid fa-bolt'></i> Liberada";
        }
        });
    });
    });

    </script>
</html>
