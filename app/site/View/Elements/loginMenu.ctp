<li class='dropdown dark user-menu'>
    <a class='dropdown-toggle login-menu' data-toggle='dropdown' href='#'>Entrar</a>
    <div class="dropdown-menu">
        <form class="px-4 py-3">
            <div class="form-group">
                <label for="exampleDropdownFormEmail1">Usúario</label>
                <input type="text" name="data[CooperadoLogin][matricula]" data-rule-minlength="6" data-rule-maxlength="10" data-rule-required="true" required="required" class="form-control" placeholder="Digite seu usuário"  id="CooperadoLoginMatricula">
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormPassword1">Senha</label>
                <input type="password" name="data[CooperadoLogin][senha]" data-rule-minlength="6" data-rule-maxlength="10" data-rule-required="true" required="required" class="form-control" placeholder="Digite sua senha" id="CooperadoLoginPassword">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                <label class="form-check-label" for="dropdownCheck"> Lembre-me</label>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        <?php echo $this->form->end(); ?>
        <div class="dropdown-divider"></div>
        <a class="test dropdown-item" href="<?php echo $this->request->base ?>/areausuario/registro" style="color: #45c766;font-family: Ubuntu !important;font-size: 15px !important;border-radius: 0 !important;}">Cadastre-se!</a>
    </div>
</li>