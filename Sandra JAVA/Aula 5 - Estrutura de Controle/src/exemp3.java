import java.util.Scanner;

public class exemp3 {
    public static void main( String[] args) {
        Scanner sc = new Scanner(System.in);
        //Inicialização
        String senha = "";
        String senhaCorreta = "Java1234";
        int tentativas = 3;

        //teste de permanencia
        while (!senha.equals(senhaCorreta)){
            System.out.println("Digite a senha: ");
        senha = sc.nextLine();
        tentativas--;

        if(tentativas < 0) {
            System.out.println("voce nao tem mais tentativas");
            break;
        }
    }
    System.out.println("senha correta, você conectou");

    }
}
