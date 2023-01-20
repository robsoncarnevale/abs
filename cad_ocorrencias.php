
<?php include_once 'header.php';?>

<div id="wrapper">
  <form action="/signup" method="post">
    <section>
      <p>
        <label class="first_title" >Preencha a Ocorrência</label><br><br>
        <label class="radio_button">
          <input type="radio" name="title" value="atraso" >
          Atraso
        </label>
        <label class="radio_button">
          <input type="radio" name="title" value="falta" >
          Falta
        </label>
      </p>
      <p>
        <label>Nome Completo:</label><span style="color:red;"> *</span><br>
        <input type="text" name="nome" class="style_input" required>
      </p>
      <p>
        <label>E-mail:</label><span style="color:red;"> *</span><br>
        <input type="email" name="email" required class="style_input">
      </p>
      <p>
        <label>Telefone:</label><span style="color:red;"> *</span><br>
        <input type="tel" name="telefone" class="style_input" required>
      </p>
      <p>
        <label>Matrícula</label><span style="color:red;"> *</span><br>
        <input type="text" name="matricula" class="style_input" required>
      </p>
      <p>
        <label class="second_title">Justificativa</label><br>
        <select class="style_input">
          <option>Atestado de dias</option>
          <option>Atestado de horas</option>
          <option>Sem Justificativa</option>
        </select>
      </p>
      <br><br>
      <p>
        <a href="index.php">
            <input type="button" value="Voltar" class="btn-back" />
        </a>
        <button class="btn-warning">Limpar</button>
        <button class="btn-success">Enviar</button>
      </p>
    </section>
  </form>
  <?php include_once 'footer.php';?>
</div>
