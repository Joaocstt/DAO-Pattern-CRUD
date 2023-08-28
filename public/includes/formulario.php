<main>

    <section>
        <h1>Cadastrar funcionário</h1>
        <form action="backEnd/processar_formulario.php" method="POST" class="mt-4">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Informe seu nome">
            </div>
            <div class="form-group mt-2">
                <label>Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Informe seu e-mail">
            </div>

            <div class="form-group mt-2">
                <label>Cargo</label>
                <input type="text" name="cargo" class="form-control" id="cargo" placeholder="Informe seu cargo">
            </div>
       
            <button type="submit" class="btn btn-primary mt-4">Enviar</button>
        </form>
    </section>

</main>