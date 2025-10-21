{{ $slot }}

<form method="POST" action="{{ $route }}">
    @csrf
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
    </div>
    <div class="form-group">
        <label for="name">Telefone</label>
        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Telefone">
    </div>
    <div class="form-group">
        <label for="name">Assunto</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Assunto">
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
    </div>
    <div class="form-group">
        <label for="message">Mensagem</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
