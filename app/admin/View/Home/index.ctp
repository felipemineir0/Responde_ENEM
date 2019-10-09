
<div class='col-xs-12'>

    <div class='page-header page-header-with-buttons'>
        <h1 class='pull-left'>
            <i class='icon-home'></i>
            <span>Gerenciador de Cadastro</span>
        </h1>
    </div>

    <div class='row'>
        <div class='col-sm-6 col-md-4'>
            <div class='box'>
                <div class='row'>
                    <div class='col-sm-12 LinksHome'>

                        <div class='box-content text-center' >

                            <?php echo $this->Html->image('/upload/users/' . $usuario["id"] . '/m_' . $usuario["imagem"]); ?>

                            <h4>Olá <?php echo($usuario["nome"]); ?>,</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="icon-envelope text-purple"></i>
                                    <?php echo($usuario["email"]); ?>
                                </li>

                                <li>
                                    <i class="icon-user text-red"></i>
                                    <?php
                                    echo $this->Html->link("Alterar dados", array("controller" => "users",
                                        "action" => "edit", $usuario["id"]
                                            ), array("escape" => false));
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php /*       <div class='col-sm-12 col-md-8'>
          <div class='row recent-activity'>
          <div class='col-sm-12'>
          <div class='box'>
          <div class='box-content box-no-padding'>
          <ul class='nav nav-tabs nav-tabs-simple ListUl'>
          <li class='active'>
          <a data-toggle="tab" class="green-border" href="#TabAlunos">
          <i class='icon-user text-green'></i>
          Alunos
          </a>
          </li>
          <li>
          <a data-toggle="tab" class="red-border" href="#TabAtendimentos">
          <i class='icon-comments text-red'></i>
          Atendimentos
          </a>
          </li>
          <li>
          <a data-toggle="tab" class="banana-border" href="#TabRespostasAtendimentos">
          <i class='icon-comments text-warning'></i>
          Atendimentos
          </a>
          </li>
          <li>
          <a data-toggle="tab" class="blue-border" href="#TabAprovacoes">
          <i class='icon-comments text-primary'></i>
          Aprovações
          </a>
          </li>
          <li>
          <a data-toggle="tab" class="purple-border" href="#TabAprovacoesFinalizadas">
          <i class='icon-ok text-purple'></i>
          Aprovações
          </a>
          </li>
          </ul>
          <div class='tab-content'>
          <div class='tab-pane fade in active' id='TabAlunos'>
          <ul class='list-unstyled users list-hover list-striped'>
          <li>
          <div class='avatar pull-left'>
          <img src='img/avatar.png' width='23' height='23' alt='Avatar'>
          </div>
          <div class='action pull-left'>
          <a class="text-contrast" href="../Turmas/novos_alunos.php">Joel Santana</a>
          se cadastrou na turma de <br />
          Sistemas de Informação 2009 - UNIPAM                                                                        </div>
          <small class='date pull-right text-muted'>
          <span class='timeago fade has-tooltip' data-placement='top' title='2014-01-22 08:26:02'>22/01/2014 às 08:26h</span>
          <i class='icon-time'></i>
          </small>
          </li>
          <li>
          <div class='avatar pull-left'>
          <img src='img/avatar.png' width='23' height='23' alt='Avatar'>
          </div>
          <div class='action pull-left'>
          <a class="text-contrast" href="../Turmas/novos_alunos.php">José Augusto de Lima</a>
          se cadastrou na turma de <br />
          Sistemas de Informação 2009 - UNIPAM                                                                        </div>
          <small class='date pull-right text-muted'>
          <span class='timeago fade has-tooltip' data-placement='top' title='2014-01-21 16:50:02'>21/01/2014 às 16:50h</span>
          <i class='icon-time'></i>
          </small>
          </li>
          <li>
          <div class='avatar pull-left'>
          <img src='img/avatar.png' width='23' height='23' alt='Avatar'>
          </div>
          <div class='action pull-left'>
          <a class="text-contrast" href="../Turmas/novos_alunos.php">Luiz Felipe Lima</a>
          se cadastrou na turma de <br />
          Sistemas de Informação 2009 - UNIPAM                                                                        </div>
          <small class='date pull-right text-muted'>
          <span class='timeago fade has-tooltip' data-placement='top' title='2014-01-21 16:36:09'>21/01/2014 às 16:36h</span>
          <i class='icon-time'></i>
          </small>
          </li>
          </ul>
          </div>
          <div class='tab-pane fade' id='TabAtendimentos'>
          <ul class='list-unstyled comments list-hover list-striped'>
          <li>
          <div class='avatar pull-left'>
          <img src='img/avatar.png' width='23' height='23' alt='Avatar'>
          </div>
          <div class='body'>
          <div class='name'>
          <a class="text-contrast" href="../Atendimentos/respostas.php?id_duvida=47">
          Novo atendimento
          </a>
          aberto por
          <a class="text-contrast" href="../Atendimentos/respostas.php?id_duvida=47">
          Maria Joaquina                                                                                </a>
          </div>
          <div class='text'>Tipo: Financeiro</div>
          <div class='text'>Assunto: Teste de Atendimento </div>
          </div>
          <div class='text-right'>
          <small class='date text-muted'>
          <span class='timeago fade has-tooltip' data-placement='top' title='2014-01-30 15:33:23'>30/01/2014 às 15:33h</span>
          <i class='icon-time'></i>
          </small>
          </div>
          </li>
          <li>
          <div class='avatar pull-left'>
          <img src='../../uploads/Alunos/1/bda1de4b188c88806692b84db5b3e841.jpg' width='23' height='23'>
          </div>
          <div class='body'>
          <div class='name'>
          <a class="text-contrast" href="../Atendimentos/respostas.php?id_duvida=35">
          Novo atendimento
          </a>
          aberto por
          <a class="text-contrast" href="../Atendimentos/respostas.php?id_duvida=35">
          Dênis Henrique de Deus Lima                                                                                </a>
          </div>
          <div class='text'>Tipo: Administrativo</div>
          <div class='text'>Assunto: Pergunta privada</div>
          </div>
          <div class='text-right'>
          <small class='date text-muted'>
          <span class='timeago fade has-tooltip' data-placement='top' title='2014-01-27 14:06:11'>27/01/2014 às 14:06h</span>
          <i class='icon-time'></i>
          </small>
          </div>
          </li>
          </ul>
          </div>
          <div class='tab-pane fade' id='TabRespostasAtendimentos'>
          <ul class='list-unstyled comments list-hover list-striped'>
          <li>
          <div class='avatar pull-left'>
          <img src='../../uploads/Alunos/3/846b5cc9c933c8128a9313d4a350c1ce.png' width='23' height='23'>
          </div>
          <div class='body'>
          <div class='name'>
          Há uma nova resposta no
          <a class="text-contrast" href="../Atendimentos/respostas.php?id_duvida=43">
          atendimento
          </a> aberto por
          <a class="text-contrast" href="../Atendimentos/respostas.php?id_duvida=43">
          Regina Hermógenes de Amorim                                                                                </a>
          </div>
          <div class='text'>Tipo: Financeiro</div>
          <div class='text'>Assunto: Teste</div>
          </div>
          <div class='text-right'>
          <small class='date text-muted'>
          <span class='timeago fade has-tooltip' data-placement='top' title='2014-01-29 10:29:41'>29/01/2014 às 10:29h</span>
          <i class='icon-time'></i>
          </small>
          </div>
          </li>
          </ul>
          </div>
          <div class='tab-pane fade' id='TabAprovacoes'>
          <ul class='list-unstyled comments list-hover list-striped'>
          </ul>
          </div>
          <div class='tab-pane fade' id='TabAprovacoesFinalizadas'>
          <ul class='list-unstyled comments list-hover list-striped'>
          <li>
          <div class='avatar pull-left'>
          <i class='icon-ok text-purple'></i>
          </div>
          <div class='body'>
          <div class='name'>
          A
          <a class="text-contrast" href="../Aprovacoes/list.php?id=14">
          aprovação
          </a> da chave
          <a class="text-contrast" href="../Aprovacoes/index.php?id=22">
          UNI-SIS-D-2009-4                                                                                </a>
          foi finalizada por votos                                                                            </div>
          <div class='text'>Assunto: Teste</div>
          <div class='text'>Status: Aprovado</div>
          </div>
          <div class='text-right'>
          <small class='date text-muted'>
          <span class='timeago fade has-tooltip' data-placement='top' title='2014-02-03 09:22:17'>03/02/2014 às 09:22h</span>
          <i class='icon-time'></i>
          </small>
          </div>
          </li>
          <li>
          <div class='avatar pull-left'>
          <i class='icon-ok text-purple'></i>
          </div>
          <div class='body'>
          <div class='name'>
          A
          <a class="text-contrast" href="../Aprovacoes/list.php?id=12">
          aprovação
          </a> da chave
          <a class="text-contrast" href="../Aprovacoes/index.php?id=22">
          UNI-SIS-D-2009-4                                                                                </a>
          foi finalizada por tempo                                                                            </div>
          <div class='text'>Assunto: Teste novas datas</div>
          <div class='text'>Status: Pendente</div>
          </div>
          <div class='text-right'>
          <small class='date text-muted'>
          <span class='timeago fade has-tooltip' data-placement='top' title='2014-05-19 18:45:58'>19/05/2014 às 18:45h</span>
          <i class='icon-time'></i>
          </small>
          </div>
          </li>
          <li>
          <div class='avatar pull-left'>
          <i class='icon-ok text-purple'></i>
          </div>
          <div class='body'>
          <div class='name'>
          A
          <a class="text-contrast" href="../Aprovacoes/list.php?id=6">
          aprovação
          </a> da chave
          <a class="text-contrast" href="../Aprovacoes/index.php?id=22">
          UNI-SIS-D-2009-4                                                                                </a>
          foi finalizada por tempo                                                                            </div>
          <div class='text'>Assunto: Camisetas</div>
          <div class='text'>Status: Pendente</div>
          </div>
          <div class='text-right'>
          <small class='date text-muted'>
          <span class='timeago fade has-tooltip' data-placement='top' title='2014-05-19 18:45:58'>19/05/2014 às 18:45h</span>
          <i class='icon-time'></i>
          </small>
          </div>
          </li>
          <li>
          <div class='avatar pull-left'>
          <i class='icon-ok text-purple'></i>
          </div>
          <div class='body'>
          <div class='name'>
          A
          <a class="text-contrast" href="../Aprovacoes/list.php?id=13">
          aprovação
          </a> da chave
          <a class="text-contrast" href="../Aprovacoes/index.php?id=22">
          UNI-SIS-D-2009-4                                                                                </a>
          foi finalizada por tempo                                                                            </div>
          <div class='text'>Assunto: Teste de novas aprovações</div>
          <div class='text'>Status: Pendente</div>
          </div>
          <div class='text-right'>
          <small class='date text-muted'>
          <span class='timeago fade has-tooltip' data-placement='top' title='2014-05-19 18:45:58'>19/05/2014 às 18:45h</span>
          <i class='icon-time'></i>
          </small>
          </div>
          </li>
          </ul>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>
          </div>

         * */ ?>

        <script type='text/javascript'>
            $(document).ready(function() {
                $('#Home').addClass('active');
                $('.LinksHome').children("a").click(function() {
                    var href = $(this).attr("href");
                    $('.ListUl').children("li").children("a").each(function() {
                        if ($(this).attr("href") == href)
                            $(this).click();
                    });
                });

            });
        </script>

