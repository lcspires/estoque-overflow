public class Usuario {
    private String nomeUsuario;
    private String senha;

    // Construtor
    public Usuario(String nomeUsuario, String senha) {
        this.nomeUsuario = nomeUsuario;
        this.senha = senha;
    }

    // Getters
    public String getNomeUsuario() {
        return nomeUsuario;
    }

    public String getSenha() {
        return senha;
    }

    // Método para validar login
    public boolean validarSenha(String senhaDigitada) {
        return this.senha.equals(senhaDigitada);
    }
}
