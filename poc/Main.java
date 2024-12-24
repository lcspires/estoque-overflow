import java.util.*;

public class Main {
    private static Map<String, Usuario> usuarios = new HashMap<>(); // Lista de usuários cadastrados

    public static void main(String[] args) {
        // Inicializando usuários padrão
        inicializarUsuarios();

        // Exibindo tela de login
        boolean autenticado = telaLogin();

        if (autenticado) {
            System.out.println("\nBem-vindo(a) ao sistema!");
        } else {
            System.out.println("\nFalha na autenticação. Encerrando...");
        }
    }

    // Inicialização do usuário
    private static void inicializarUsuarios() {
        usuarios.put("admin", new Usuario("admin", "admin"));
    }

    // Tela de login
    private static boolean telaLogin() {
        Scanner scanner = new Scanner(System.in);

        System.out.println("--- Tela de Login ---");
        System.out.print("Digite o nome de usuário: ");
        String nomeUsuario = scanner.nextLine();

        System.out.print("Digite a senha: ");
        String senha = scanner.nextLine();

        // Validação do login
        Usuario usuario = usuarios.get(nomeUsuario);
        if (usuario != null && usuario.validarSenha(senha)) {
            System.out.println("\nAutenticação bem-sucedida!");
            return true;
        } else {
            System.out.println("\nUsuário ou senha incorretos.");
            return false;
        }
    }
}
